<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;


use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

class SecurityController extends Controller
{
     /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
    {
        $session = $request->getSession();
        $session1 = new Session();
        // get the login error if there is one
        if ($request->attributes->has(SecurityContextInterface::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(
                SecurityContextInterface::AUTHENTICATION_ERROR
            );
        } elseif (null !== $session && $session->has(SecurityContextInterface::AUTHENTICATION_ERROR)) {
            $error = $session->get(SecurityContextInterface::AUTHENTICATION_ERROR);
            $session->remove(SecurityContextInterface::AUTHENTICATION_ERROR);
        } else {
            $error = '';
        }
        $credentials =$request->request->all();
        if($credentials) {
            $username = $credentials['_username'];
            $password = $credentials['_password'];

            $user = $product = $this->getDoctrine()
                ->getRepository('AppBundle:users')
                ->findOneBy(['username' => $username, 'password' => $password]);
        }

        if ((isset($user) &&$user)){

            $session1->set("username",$user->getUsername());
            $session1->set("role",$user->getRole());


            if($user->getRole()=="ADMIN") {
                return $this->render(
                    'AppBundle:user:dashboard.html.twig');
            }
            else{
                return $this->render(
                    'AppBundle:user:dashboarduser.html.twig');

            }

        }
        if( isset($_GET['home'])){
            if($session1->get('role')=="ADMIN"){
                return $this->render(
                    'AppBundle:user:dashboard.html.twig');

            }else{
                return $this->render(
                    'AppBundle:user:dashboarduser.html.twig');

            }
        }

        return $this->render(
            'AppBundle:security:login.html.twig',
            array(
                'error' => $error,
            )
        );
    }



}