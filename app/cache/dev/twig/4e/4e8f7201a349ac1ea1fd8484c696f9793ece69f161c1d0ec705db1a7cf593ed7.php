<?php

/* AppBundle:user:dashboarduser.html.twig */
class __TwigTemplate_d39907a421fbaf2b6fb26e5d7b17e5c5da7fffceb2c1138c4ae26375e7d00703 extends Twig_Template
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
        $__internal_099b7c67be7850e00a15c620ca0e044215385c79afac6b6e4b2fc72f02026880 = $this->env->getExtension("native_profiler");
        $__internal_099b7c67be7850e00a15c620ca0e044215385c79afac6b6e4b2fc72f02026880->enter($__internal_099b7c67be7850e00a15c620ca0e044215385c79afac6b6e4b2fc72f02026880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:user:dashboarduser.html.twig"));

        // line 1
        echo "You are logged in !!



<form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("get_product_barcode");
        echo "\" method=\"get\">
    Find by Barcode
    <input type=\"text\" id=\"barcode\" name=\"barcode\" >
    <button type=\"submit\">Get</button>


</form>

<form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("get_invoice");
        echo "\" method=\"get\">
    <button type=\"submit\">Create Invoice</button>
</form>

<form action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("_login");
        echo "\" method=\"get\">
    <button type=\"submit\">Logout</button>
</form>
";
        
        $__internal_099b7c67be7850e00a15c620ca0e044215385c79afac6b6e4b2fc72f02026880->leave($__internal_099b7c67be7850e00a15c620ca0e044215385c79afac6b6e4b2fc72f02026880_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:user:dashboarduser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,  39 => 13,  28 => 5,  22 => 1,);
    }
}
/* You are logged in !!*/
/* */
/* */
/* */
/* <form action="{{ path('get_product_barcode') }}" method="get">*/
/*     Find by Barcode*/
/*     <input type="text" id="barcode" name="barcode" >*/
/*     <button type="submit">Get</button>*/
/* */
/* */
/* </form>*/
/* */
/* <form action="{{ path('get_invoice') }}" method="get">*/
/*     <button type="submit">Create Invoice</button>*/
/* </form>*/
/* */
/* <form action="{{ path('_login') }}" method="get">*/
/*     <button type="submit">Logout</button>*/
/* </form>*/
/* */
