<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_74423bcd90d35c220573087d7d28517ef3c50ca60c47dcc3390d8ce3296f1516 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7944b6a86f69a38129036fea85c8d41aa0d3d7584a29324a616c6961379e330d = $this->env->getExtension("native_profiler");
        $__internal_7944b6a86f69a38129036fea85c8d41aa0d3d7584a29324a616c6961379e330d->enter($__internal_7944b6a86f69a38129036fea85c8d41aa0d3d7584a29324a616c6961379e330d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7944b6a86f69a38129036fea85c8d41aa0d3d7584a29324a616c6961379e330d->leave($__internal_7944b6a86f69a38129036fea85c8d41aa0d3d7584a29324a616c6961379e330d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_79810cceacb9f7bbe57eb9ca3644c81f63b5e925b0135a0a1834752345a5be29 = $this->env->getExtension("native_profiler");
        $__internal_79810cceacb9f7bbe57eb9ca3644c81f63b5e925b0135a0a1834752345a5be29->enter($__internal_79810cceacb9f7bbe57eb9ca3644c81f63b5e925b0135a0a1834752345a5be29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_79810cceacb9f7bbe57eb9ca3644c81f63b5e925b0135a0a1834752345a5be29->leave($__internal_79810cceacb9f7bbe57eb9ca3644c81f63b5e925b0135a0a1834752345a5be29_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3c30d6c0a57b9e2e8b6746c99747142396ece4e5557fe31c2c2304894f2298d = $this->env->getExtension("native_profiler");
        $__internal_f3c30d6c0a57b9e2e8b6746c99747142396ece4e5557fe31c2c2304894f2298d->enter($__internal_f3c30d6c0a57b9e2e8b6746c99747142396ece4e5557fe31c2c2304894f2298d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f3c30d6c0a57b9e2e8b6746c99747142396ece4e5557fe31c2c2304894f2298d->leave($__internal_f3c30d6c0a57b9e2e8b6746c99747142396ece4e5557fe31c2c2304894f2298d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a68dcf1fab15a04c0919bac2cd27f130010665dd782f9c364334eb778dc6057d = $this->env->getExtension("native_profiler");
        $__internal_a68dcf1fab15a04c0919bac2cd27f130010665dd782f9c364334eb778dc6057d->enter($__internal_a68dcf1fab15a04c0919bac2cd27f130010665dd782f9c364334eb778dc6057d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a68dcf1fab15a04c0919bac2cd27f130010665dd782f9c364334eb778dc6057d->leave($__internal_a68dcf1fab15a04c0919bac2cd27f130010665dd782f9c364334eb778dc6057d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
