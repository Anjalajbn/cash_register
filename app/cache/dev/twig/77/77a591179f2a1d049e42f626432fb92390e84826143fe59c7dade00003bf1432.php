<?php

/* AppBundle::layout.html.twig */
class __TwigTemplate_aae536562fd31732da527b3c212231b09fcab1b6e05cf9d337247328f12e6725 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "AppBundle::layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_034ee5cca6cbb994e516582404815c622f0d69b1a906420ad4d26571fdd11a7d = $this->env->getExtension("native_profiler");
        $__internal_034ee5cca6cbb994e516582404815c622f0d69b1a906420ad4d26571fdd11a7d->enter($__internal_034ee5cca6cbb994e516582404815c622f0d69b1a906420ad4d26571fdd11a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_034ee5cca6cbb994e516582404815c622f0d69b1a906420ad4d26571fdd11a7d->leave($__internal_034ee5cca6cbb994e516582404815c622f0d69b1a906420ad4d26571fdd11a7d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c693b3b5a74dfc9e67c041d1f4e4ccbb2ebc572b58acfee50e7e401a2f1fcd74 = $this->env->getExtension("native_profiler");
        $__internal_c693b3b5a74dfc9e67c041d1f4e4ccbb2ebc572b58acfee50e7e401a2f1fcd74->enter($__internal_c693b3b5a74dfc9e67c041d1f4e4ccbb2ebc572b58acfee50e7e401a2f1fcd74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/demo.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_c693b3b5a74dfc9e67c041d1f4e4ccbb2ebc572b58acfee50e7e401a2f1fcd74->leave($__internal_c693b3b5a74dfc9e67c041d1f4e4ccbb2ebc572b58acfee50e7e401a2f1fcd74_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d7f8952386bbe692cca67ef334e07761a822ce7feb73aa604fd7378e1f856b1 = $this->env->getExtension("native_profiler");
        $__internal_6d7f8952386bbe692cca67ef334e07761a822ce7feb73aa604fd7378e1f856b1->enter($__internal_6d7f8952386bbe692cca67ef334e07761a822ce7feb73aa604fd7378e1f856b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Demo Bundle";
        
        $__internal_6d7f8952386bbe692cca67ef334e07761a822ce7feb73aa604fd7378e1f856b1->leave($__internal_6d7f8952386bbe692cca67ef334e07761a822ce7feb73aa604fd7378e1f856b1_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_28792ed1d8638b0df4c5043027f05ceed64f330f5874d8d0d9790df23905f4db = $this->env->getExtension("native_profiler");
        $__internal_28792ed1d8638b0df4c5043027f05ceed64f330f5874d8d0d9790df23905f4db->enter($__internal_28792ed1d8638b0df4c5043027f05ceed64f330f5874d8d0d9790df23905f4db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    ";
        $this->displayBlock('content_header', $context, $blocks);
        // line 16
        echo "
    <div class=\"block\">
        ";
        // line 18
        $this->displayBlock('content', $context, $blocks);
        // line 19
        echo "
        </div>
#}
";
        
        $__internal_28792ed1d8638b0df4c5043027f05ceed64f330f5874d8d0d9790df23905f4db->leave($__internal_28792ed1d8638b0df4c5043027f05ceed64f330f5874d8d0d9790df23905f4db_prof);

    }

    // line 10
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_55288b3c8210d20331ced55a8a42536793a6d59a0be96a7bf08c5a643b6b5846 = $this->env->getExtension("native_profiler");
        $__internal_55288b3c8210d20331ced55a8a42536793a6d59a0be96a7bf08c5a643b6b5846->enter($__internal_55288b3c8210d20331ced55a8a42536793a6d59a0be96a7bf08c5a643b6b5846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 11
        echo "        <ul id=\"menu\">
        </ul>

        <div style=\"clear: both\"></div>
    ";
        
        $__internal_55288b3c8210d20331ced55a8a42536793a6d59a0be96a7bf08c5a643b6b5846->leave($__internal_55288b3c8210d20331ced55a8a42536793a6d59a0be96a7bf08c5a643b6b5846_prof);

    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        $__internal_9d25951796b3ce43a60799c8b4f2fa211c00c5e79f65dfb6baca8dd131fc34b7 = $this->env->getExtension("native_profiler");
        $__internal_9d25951796b3ce43a60799c8b4f2fa211c00c5e79f65dfb6baca8dd131fc34b7->enter($__internal_9d25951796b3ce43a60799c8b4f2fa211c00c5e79f65dfb6baca8dd131fc34b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_9d25951796b3ce43a60799c8b4f2fa211c00c5e79f65dfb6baca8dd131fc34b7->leave($__internal_9d25951796b3ce43a60799c8b4f2fa211c00c5e79f65dfb6baca8dd131fc34b7_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 18,  97 => 11,  91 => 10,  81 => 19,  79 => 18,  75 => 16,  72 => 10,  66 => 9,  54 => 7,  44 => 4,  38 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/app/css/demo.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Demo Bundle' %}*/
/* */
/* {% block body %}*/
/*     {% block content_header %}*/
/*         <ul id="menu">*/
/*         </ul>*/
/* */
/*         <div style="clear: both"></div>*/
/*     {% endblock %}*/
/* */
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/* */
/*         </div>*/
/* #}*/
/* {% endblock %}*/
/* */
