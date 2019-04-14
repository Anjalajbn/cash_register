<?php

/* AppBundle:product:newProduct.html.twig */
class __TwigTemplate_27e497986cc57ba652d2c108f9d8cf8fca3d0ff928964395df67d37678492960 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:product:newProduct.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b7f6b2360514e39027c49d7b05de30149b2eff40b635949b98b3a177f1a2be6 = $this->env->getExtension("native_profiler");
        $__internal_8b7f6b2360514e39027c49d7b05de30149b2eff40b635949b98b3a177f1a2be6->enter($__internal_8b7f6b2360514e39027c49d7b05de30149b2eff40b635949b98b3a177f1a2be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:product:newProduct.html.twig"));

        // line 21
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b7f6b2360514e39027c49d7b05de30149b2eff40b635949b98b3a177f1a2be6->leave($__internal_8b7f6b2360514e39027c49d7b05de30149b2eff40b635949b98b3a177f1a2be6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad80789351cb3ab67e90c5b4c113297bcfe00914cc65c3f4738dc9dda1b04365 = $this->env->getExtension("native_profiler");
        $__internal_ad80789351cb3ab67e90c5b4c113297bcfe00914cc65c3f4738dc9dda1b04365->enter($__internal_ad80789351cb3ab67e90c5b4c113297bcfe00914cc65c3f4738dc9dda1b04365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Notes";
        
        $__internal_ad80789351cb3ab67e90c5b4c113297bcfe00914cc65c3f4738dc9dda1b04365->leave($__internal_ad80789351cb3ab67e90c5b4c113297bcfe00914cc65c3f4738dc9dda1b04365_prof);

    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_c4a05f442a19cc9da7f4d2a935f182824741b6c79c17af09acd92ad0f4d25853 = $this->env->getExtension("native_profiler");
        $__internal_c4a05f442a19cc9da7f4d2a935f182824741b6c79c17af09acd92ad0f4d25853->enter($__internal_c4a05f442a19cc9da7f4d2a935f182824741b6c79c17af09acd92ad0f4d25853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        echo "";
        
        $__internal_c4a05f442a19cc9da7f4d2a935f182824741b6c79c17af09acd92ad0f4d25853->leave($__internal_c4a05f442a19cc9da7f4d2a935f182824741b6c79c17af09acd92ad0f4d25853_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_5ca91ef49703c486495e8b8ba045ee340352078bf1bdb9e4689ce3aa78028fbc = $this->env->getExtension("native_profiler");
        $__internal_5ca91ef49703c486495e8b8ba045ee340352078bf1bdb9e4689ce3aa78028fbc->enter($__internal_5ca91ef49703c486495e8b8ba045ee340352078bf1bdb9e4689ce3aa78028fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <h1 class=\"title\">Create New Product</h1>

    ";
        // line 10
        if (array_key_exists("form", $context)) {
            // line 11
            echo "        <form action=\"";
            echo $this->env->getExtension('routing')->getUrl("post_products");
            echo "\" method=\"POST\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo ">

            ";
            // line 13
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "

            <input type=\"submit\" value=\"Add New Product\">
        </form>
    ";
        }
        // line 18
        echo "
";
        
        $__internal_5ca91ef49703c486495e8b8ba045ee340352078bf1bdb9e4689ce3aa78028fbc->leave($__internal_5ca91ef49703c486495e8b8ba045ee340352078bf1bdb9e4689ce3aa78028fbc_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:product:newProduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 18,  83 => 13,  75 => 11,  73 => 10,  69 => 8,  63 => 7,  51 => 5,  39 => 3,  32 => 1,  30 => 21,  11 => 1,);
    }
}
/* {% extends "AppBundle::layout.html.twig" %}*/
/* */
/* {% block title "Symfony - Notes" %}*/
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
