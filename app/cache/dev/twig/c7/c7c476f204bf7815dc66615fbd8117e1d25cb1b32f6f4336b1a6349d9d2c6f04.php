<?php

/* ::base.html.twig */
class __TwigTemplate_98d93efe807dde39b1858afe5afbc4c7bd3aedcc2eff200472e175609a00240d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a3bcad0902853402cc54088104de68976267957ddf3abecff32001e4ce68cca = $this->env->getExtension("native_profiler");
        $__internal_5a3bcad0902853402cc54088104de68976267957ddf3abecff32001e4ce68cca->enter($__internal_5a3bcad0902853402cc54088104de68976267957ddf3abecff32001e4ce68cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_5a3bcad0902853402cc54088104de68976267957ddf3abecff32001e4ce68cca->leave($__internal_5a3bcad0902853402cc54088104de68976267957ddf3abecff32001e4ce68cca_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2107c11447a5926a64e86ff2cf720772ddf93b863f2b986877b2f80f942ed0a6 = $this->env->getExtension("native_profiler");
        $__internal_2107c11447a5926a64e86ff2cf720772ddf93b863f2b986877b2f80f942ed0a6->enter($__internal_2107c11447a5926a64e86ff2cf720772ddf93b863f2b986877b2f80f942ed0a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2107c11447a5926a64e86ff2cf720772ddf93b863f2b986877b2f80f942ed0a6->leave($__internal_2107c11447a5926a64e86ff2cf720772ddf93b863f2b986877b2f80f942ed0a6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_85fda46c4df3906b5ad7fe44746eb8313549d91e65bc0a8ae9e26740a421ac61 = $this->env->getExtension("native_profiler");
        $__internal_85fda46c4df3906b5ad7fe44746eb8313549d91e65bc0a8ae9e26740a421ac61->enter($__internal_85fda46c4df3906b5ad7fe44746eb8313549d91e65bc0a8ae9e26740a421ac61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_85fda46c4df3906b5ad7fe44746eb8313549d91e65bc0a8ae9e26740a421ac61->leave($__internal_85fda46c4df3906b5ad7fe44746eb8313549d91e65bc0a8ae9e26740a421ac61_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_868f96fab8841e19d49b0ff578bc0540bb23042e8e42fb0970e71cb531689416 = $this->env->getExtension("native_profiler");
        $__internal_868f96fab8841e19d49b0ff578bc0540bb23042e8e42fb0970e71cb531689416->enter($__internal_868f96fab8841e19d49b0ff578bc0540bb23042e8e42fb0970e71cb531689416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_868f96fab8841e19d49b0ff578bc0540bb23042e8e42fb0970e71cb531689416->leave($__internal_868f96fab8841e19d49b0ff578bc0540bb23042e8e42fb0970e71cb531689416_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3a1dc37332af7fd1fd72154dfc66a58566a9156b31031cd1e69b168d4614ad4c = $this->env->getExtension("native_profiler");
        $__internal_3a1dc37332af7fd1fd72154dfc66a58566a9156b31031cd1e69b168d4614ad4c->enter($__internal_3a1dc37332af7fd1fd72154dfc66a58566a9156b31031cd1e69b168d4614ad4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3a1dc37332af7fd1fd72154dfc66a58566a9156b31031cd1e69b168d4614ad4c->leave($__internal_3a1dc37332af7fd1fd72154dfc66a58566a9156b31031cd1e69b168d4614ad4c_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
