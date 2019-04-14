<?php

namespace AppBundle\Controller;

use AppBundle\Form\ProductType;
use AppBundle\Entity\Product;
//use AppBundle\Entity\ProductCollection

use AppBundle\Model\NoteCollection;
use FOS\RestBundle\Controller\Annotations ;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Request\ParamFetcherInterface;
use FOS\RestBundle\View\View;
use Doctrine\ORM\Query;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Rest controller for products
 *
 * @package AppBundle\Controller
 */
class ProductController extends FOSRestController
{
    /**
     * return \AppBundle\ProductManager
     */
    public function getProductManager()
    {
        return $this->get('app.product_manager');
    }

    /**
     * List all products.
     *
     * @ApiDoc(
     *   resource = true,
     *   statusCodes = {
     *     200 = "Returned when successful"
     *   }
     * )
     *
     *
     *
     *
     * @return array
     */
    public function getProductsAction()
    {

        $query =$this->getDoctrine()->getRepository('AppBundle:Product')
            ->createQueryBuilder('c')
            ->getQuery();
        $products = $query->getResult(Query::HYDRATE_ARRAY);
        if ($products === null) {
            throw $this->createNotFoundException("Products does not exist.");
        }
       // $response = new Response(json_encode($products), 200);
        return $this->render('AppBundle:product:list.html.twig', array("lists" => $products) );

       // return $response;

    }

    /**
     * Presents the form to use to create a new product.
     *
     * @ApiDoc(
     *   resource = true,
     *   statusCodes = {
     *     200 = "Returned when successful"
     *   }
     * )
     * @Annotations\View()
     *
     * @return FormTypeInterface
     */
    public function newProductAction()
    {
        $product = new ProductType();
        return $this->createForm($product);
    }
    /**
     * Get a single product.
     *
     *
     * @param int $id the product id
     *
     * @return array
     *
     * @throws NotFoundHttpException when product not exist
     */
    public function getProductAction($id)
    {       $product = $this->getDoctrine()
                ->getRepository('AppBundle:Product')
                ->findById($id);


        if (false === $product) {
            throw $this->createNotFoundException("Product does not exist.");
        }

        return $this->render('AppBundle:product:list.html.twig', array("lists" => $product) );

//         return $this->view(['post' => $product])->setStatusCode(201);
    }

    /**
     * Get a single product by barcode.
     *
     *
     * @param int $id the product id
     *
     * @return array
     *
     * @throws NotFoundHttpException when product not exist
     */
    public function getProductBarcodeAction()
    {
        if(isset($_GET['barcode'])){
            $barcode =$_GET['barcode'];
            $product = $this->getDoctrine()
                ->getRepository('AppBundle:Product')
                ->findBy(['barcode'=>$barcode]);

    }else{
            throw $this->createNotFoundException("Invalid Request.");

        }
        if (false === $product) {
            throw $this->createNotFoundException("Product does not exist.");
        }
        if(isset($_GET['barcodes'])) {
            if($_GET['barcodes'])
            $barcodes= $_GET['barcodes'].",".$barcode;
            else
                $barcodes =$barcode;

            $barcodearr=explode(",",$barcodes);
            $listarray = [];
            foreach ($barcodearr as $bar){
                $listarray[]=$product = $this->getDoctrine()
                    ->getRepository('AppBundle:Product')
                    ->findBy(['barcode'=>$bar]);

            }
            $twigargs=array();
            $twigargs['lists']= $listarray;
            $twigargs['barcodes'] =$barcodes;

            return $this->render('AppBundle:product:invoice.html.twig',$twigargs);
        }
        return $this->render('AppBundle:product:list.html.twig', array("lists" => $product) );

//         return $this->view(['post' => $product])->setStatusCode(201);
    }

    /**
     * Creates a new product from the submitted data.
     *
     * @ApiDoc(
     *   resource = true,
     *   input = "AppBundle\Form\ProductType",
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     400 = "Returned when the form has errors"
     *   }
     * )
     *@Annotations\View(
     *   template = "AppBundle:product:newProduct.html.twig",
     *   statusCode = Response::HTTP_BAD_REQUEST
     * )
     *
     * @param Request $request the request object
     *
     * @return FormTypeInterface[]|View
     */
    public function postProductsAction(Request $request)
    {

//
//
//            return $this->routeRedirectView('get_product', array('id' => $product->id));
        $product = new Product();
$data = $request->get('appbundle_product');
        $name = $data['name'];
        $barcode = $data['barcode'];
        $cost = $data['cost'];
        $vatClass = $data['vatClass'];

//        if(empty($name) || empty($barcode))
//        {
//            return new View("NULL VALUES ARE NOT ALLOWED", Response::HTTP_NOT_ACCEPTABLE);
//        }
        $product->setName($name);
        $product->setBarcode($barcode);
        $product->setCost($cost);

        $product->setVatClass($vatClass);
        $em = $this->getDoctrine()->getManager();
        $em->persist($product);
        $em->flush();


            return $this->routeRedirectView('get_product', array('id' => $product->getId()));




        }

    /**
     * Presents the form to use to update an existing product.
     *
     * @ApiDoc(
     *   resource = true,
     *   statusCodes={
     *     200 = "Returned when successful",
     *     404 = "Returned when the product is not found"
     *   }
     * )
     *
     *
     * @param int $id the product id
     *
     * @return FormTypeInterface
     *
     * @throws NotFoundHttpException when product not exist
     */
    public function editProductsAction($id)
    {
        $product = $this->getDoctrine()
            ->getRepository('AppBundle:Product')
            ->find($id);
         if (false === $product) {
            throw $this->createNotFoundException("Product does not exist.");
        }

        return $this->createForm(new ProductType(), $product);
    }

    /**
     * Update existing product from the submitted data or create a new product at a specific location.
     *
     * @ApiDoc(
     *   resource = true,
     *   input = "AppBundle\Form\ProductType",
     *   statusCodes = {
     *     201 = "Returned when a new resource is created",
     *     204 = "Returned when successful",
     *     400 = "Returned when the form has errors"
     *   }
     * )

     * )
     *
     * @param Request $request the request object
     * @param int     $id      the product id
     *
     * @return FormTypeInterface|RouteRedirectView
     *
     * @throws NotFoundHttpException when product not exist
     */
    public function putProductsAction(Request $request, $id)
    {
        $product = $this->getDoctrine()
            ->getRepository('AppBundle:Product')
            ->find($id);
        if (false === $product) {
            $product = new Product();
            $id=$product->getId();
            $statusCode = Response::HTTP_CREATED;
        } else {
            $statusCode = Response::HTTP_NO_CONTENT;
        }

        $form = $this->createForm(new ProductType(), $product);

        $form->submit($request);
        if ($form->isValid()) {

            return $this->routeRedirectView('get_product', array('id' => $id), $statusCode);
        }

        return $form;
    }

    /**
     * Removes a product.
     *
     * @ApiDoc(
     *   resource = true,
     *   statusCodes={
     *     204="Returned when successful"
     *   }
     * )
     *
     * @param int $id the product id
     *
     * @return View
     */
    public function deleteProductsAction($id)
    {
        $product = $this->getDoctrine()
            ->getRepository('AppBundle:Product')
            ->find($id);
        $product ->delete();


        return $this->routeRedirectView('get_products', array(), Response::HTTP_NO_CONTENT);
    }
    public function getInvoiceAction(){
        return $this->render('AppBundle:product:invoice.html.twig',array("barcodes" => 0) );

    }
    /**
     * Removes a product.
     *
     * @ApiDoc(
     *   resource = true,
     *   statusCodes={
     *     204="Returned when successful"
     *   }
     * )
     *
     * @param int $id the product id
     *
     * @return View
     */
    public function removeProductsAction($id)
    {
        return $this->deleteProductsAction($id);
    }
}
