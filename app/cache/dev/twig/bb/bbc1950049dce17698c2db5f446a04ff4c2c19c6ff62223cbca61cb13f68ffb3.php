<?php

/* AppBundle:user:dashboard.html.twig */
class __TwigTemplate_8ffd79194c806e950bd2220421a65850dcad3442bf62b72416bbff98297435eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8280b27f3e9e11f5f9a2edffdb8a1d7777922b18da895c170246b0abf0cabd7f = $this->env->getExtension("native_profiler");
        $__internal_8280b27f3e9e11f5f9a2edffdb8a1d7777922b18da895c170246b0abf0cabd7f->enter($__internal_8280b27f3e9e11f5f9a2edffdb8a1d7777922b18da895c170246b0abf0cabd7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user:dashboard.html.twig"));

        // line 1
        echo "You are logged in !!


<form action=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("get_products");
        echo "\" method=\"get\">
    <button type=\"submit\">Product Lists</button>
</form>
<form action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("new_product");
        echo "\" method=\"get\">
    <button type=\"submit\">Add New Product</button>
</form>
<form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("_login");
        echo "\" method=\"get\">
    <button type=\"submit\">Logout</button>
</form>

";
        
        $__internal_8280b27f3e9e11f5f9a2edffdb8a1d7777922b18da895c170246b0abf0cabd7f->leave($__internal_8280b27f3e9e11f5f9a2edffdb8a1d7777922b18da895c170246b0abf0cabd7f_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:user:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 10,  33 => 7,  27 => 4,  22 => 1,);
    }
}
/* You are logged in !!*/
/* */
/* */
/* <form action="{{ path('get_products') }}" method="get">*/
/*     <button type="submit">Product Lists</button>*/
/* </form>*/
/* <form action="{{ path('new_product') }}" method="get">*/
/*     <button type="submit">Add New Product</button>*/
/* </form>*/
/* <form action="{{ path('_login') }}" method="get">*/
/*     <button type="submit">Logout</button>*/
/* </form>*/
/* */
/* */
