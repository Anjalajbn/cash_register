<?php

/* AppBundle:security:login.html.twig */
class __TwigTemplate_d7d8975f3dc71e92e7c9b3dba8aa8b985133188768ebe87d4e4e062a2edd8bea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c4fbeac7f75442ba83aba4b33745af5b5d414b74d7fb68ce11a52d84dd2ee93 = $this->env->getExtension("native_profiler");
        $__internal_8c4fbeac7f75442ba83aba4b33745af5b5d414b74d7fb68ce11a52d84dd2ee93->enter($__internal_8c4fbeac7f75442ba83aba4b33745af5b5d414b74d7fb68ce11a52d84dd2ee93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:security:login.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_8c4fbeac7f75442ba83aba4b33745af5b5d414b74d7fb68ce11a52d84dd2ee93->leave($__internal_8c4fbeac7f75442ba83aba4b33745af5b5d414b74d7fb68ce11a52d84dd2ee93_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_83da71b6da3e8cdf124935e0bf88b87fa2ac5f4eb88a814564cca8f644b56a41 = $this->env->getExtension("native_profiler");
        $__internal_83da71b6da3e8cdf124935e0bf88b87fa2ac5f4eb88a814564cca8f644b56a41->enter($__internal_83da71b6da3e8cdf124935e0bf88b87fa2ac5f4eb88a814564cca8f644b56a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 4
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
    ";
        }
        // line 6
        echo "
    <form action=\"";
        // line 7
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
        
        $__internal_83da71b6da3e8cdf124935e0bf88b87fa2ac5f4eb88a814564cca8f644b56a41->leave($__internal_83da71b6da3e8cdf124935e0bf88b87fa2ac5f4eb88a814564cca8f644b56a41_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:security:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  50 => 7,  47 => 6,  41 => 4,  38 => 3,  26 => 2,  23 => 1,);
    }
}
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
