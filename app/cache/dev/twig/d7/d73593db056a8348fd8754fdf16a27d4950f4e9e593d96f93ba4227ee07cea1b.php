<?php

/* AppBundle:Security:login.html.twig */
class __TwigTemplate_46e1e8482c08e8665bb8f7a925cd8a4962b1eec84c1466e2820c5dba01d641da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae1a1a9e76db3cbf5283830345635cb3ba48334ebc0171bca5aefcb2ad4792d0 = $this->env->getExtension("native_profiler");
        $__internal_ae1a1a9e76db3cbf5283830345635cb3ba48334ebc0171bca5aefcb2ad4792d0->enter($__internal_ae1a1a9e76db3cbf5283830345635cb3ba48334ebc0171bca5aefcb2ad4792d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae1a1a9e76db3cbf5283830345635cb3ba48334ebc0171bca5aefcb2ad4792d0->leave($__internal_ae1a1a9e76db3cbf5283830345635cb3ba48334ebc0171bca5aefcb2ad4792d0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4d8bdc5d66194ceb58a7366d2ffafeb8fbf29ccf83b87483ef51ca0e0fde60c = $this->env->getExtension("native_profiler");
        $__internal_c4d8bdc5d66194ceb58a7366d2ffafeb8fbf29ccf83b87483ef51ca0e0fde60c->enter($__internal_c4d8bdc5d66194ceb58a7366d2ffafeb8fbf29ccf83b87483ef51ca0e0fde60c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
    ";
        }
        // line 7
        echo "
    <form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("_login");
        echo "\" method=\"post\">
        <label for=\"username\">Username:</label>
        <input type=\"text\" id=\"username\" name=\"_username\" />
<br>
        <label for=\"password\">Password:</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />

        <button type=\"submit\">Log in</button>
    </form>

";
        
        $__internal_c4d8bdc5d66194ceb58a7366d2ffafeb8fbf29ccf83b87483ef51ca0e0fde60c->leave($__internal_c4d8bdc5d66194ceb58a7366d2ffafeb8fbf29ccf83b87483ef51ca0e0fde60c_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  49 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {% if error %}*/
/*         <div>{{ error.message }}</div>*/
/*     {% endif %}*/
/* */
/*     <form action="{{ path('_login') }}" method="post">*/
/*         <label for="username">Username:</label>*/
/*         <input type="text" id="username" name="_username" />*/
/* <br>*/
/*         <label for="password">Password:</label>*/
/*         <input type="password" id="password" name="_password" />*/
/* */
/*         <button type="submit">Log in</button>*/
/*     </form>*/
/* */
/* {% endblock %}*/
