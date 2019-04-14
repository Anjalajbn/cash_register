<?php

/* AppBundle:Product:newProduct.html.twig */
class __TwigTemplate_5c51926a24e8563b5520a88fdf629c33c14eb3c0ce9e211bbbfd07ab0160852b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43d0a6cba55133c90eac80d0472eff5212eec616da161d39edf068236fe445a5 = $this->env->getExtension("native_profiler");
        $__internal_43d0a6cba55133c90eac80d0472eff5212eec616da161d39edf068236fe445a5->enter($__internal_43d0a6cba55133c90eac80d0472eff5212eec616da161d39edf068236fe445a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Product:newProduct.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('content_header', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('content', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        // line 20
        echo "

<br>
<br>
<form action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("_login");
        echo "\" method=\"get\">

    <input type=\"hidden\" id=\"home\" name =home value = 1>

    <button type=\"submit\">Home</button>


</form>";
        
        $__internal_43d0a6cba55133c90eac80d0472eff5212eec616da161d39edf068236fe445a5->leave($__internal_43d0a6cba55133c90eac80d0472eff5212eec616da161d39edf068236fe445a5_prof);

    }

    // line 3
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_faf005f9318f51a9699f8d95b74c36af8f6198502c7d1441dcc061c98c45f4d8 = $this->env->getExtension("native_profiler");
        $__internal_faf005f9318f51a9699f8d95b74c36af8f6198502c7d1441dcc061c98c45f4d8->enter($__internal_faf005f9318f51a9699f8d95b74c36af8f6198502c7d1441dcc061c98c45f4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        echo "";
        
        $__internal_faf005f9318f51a9699f8d95b74c36af8f6198502c7d1441dcc061c98c45f4d8->leave($__internal_faf005f9318f51a9699f8d95b74c36af8f6198502c7d1441dcc061c98c45f4d8_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_865abbedd86c50039a46d3255b4ab23639efd301050c8a86b6da9571e855b25c = $this->env->getExtension("native_profiler");
        $__internal_865abbedd86c50039a46d3255b4ab23639efd301050c8a86b6da9571e855b25c->enter($__internal_865abbedd86c50039a46d3255b4ab23639efd301050c8a86b6da9571e855b25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1 class=\"title\">Create New Product</h1>

    ";
        // line 8
        if (array_key_exists("form", $context)) {
            // line 9
            echo "        <form action=\"";
            echo $this->env->getExtension('routing')->getUrl("post_products");
            echo "\" method=\"POST\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo ">

            ";
            // line 11
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "

            <input type=\"submit\" value=\"Add New Product\">
        </form>
    ";
        }
        // line 16
        echo "
";
        
        $__internal_865abbedd86c50039a46d3255b4ab23639efd301050c8a86b6da9571e855b25c->leave($__internal_865abbedd86c50039a46d3255b4ab23639efd301050c8a86b6da9571e855b25c_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Product:newProduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 16,  93 => 11,  85 => 9,  83 => 8,  79 => 6,  73 => 5,  61 => 3,  46 => 24,  40 => 20,  38 => 19,  35 => 18,  33 => 5,  30 => 4,  28 => 3,  24 => 1,);
    }
}
/* */
/* */
/* {% block content_header '' %}*/
/* */
/* {% block content %}*/
/*     <h1 class="title">Create New Product</h1>*/
/* */
/*     {%  if (form is defined) %}*/
/*         <form action="{{ url('post_products') }}" method="POST" {{ form_enctype(form) }}>*/
/* */
/*             {{ form_widget(form) }}*/
/* */
/*             <input type="submit" value="Add New Product">*/
/*         </form>*/
/*     {% endif %}*/
/* */
/* {% endblock %}*/
/* */
/* {% set code = code(_self) %}*/
/* */
/* */
/* <br>*/
/* <br>*/
/* <form action="{{ path('_login') }}" method="get">*/
/* */
/*     <input type="hidden" id="home" name =home value = 1>*/
/* */
/*     <button type="submit">Home</button>*/
/* */
/* */
/* </form>*/
