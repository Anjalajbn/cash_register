<?php

/* AppBundle:product:list.html.twig */
class __TwigTemplate_74c0edb313a146f6139c3acd86e1eefa486cd562f2648f6d91cefd0f9918c9b4 extends Twig_Template
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
        $__internal_cec649f472e317aaf9a7545d40dbd0c2eeaceb5414e5d8262104617732d341f3 = $this->env->getExtension("native_profiler");
        $__internal_cec649f472e317aaf9a7545d40dbd0c2eeaceb5414e5d8262104617732d341f3->enter($__internal_cec649f472e317aaf9a7545d40dbd0c2eeaceb5414e5d8262104617732d341f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:product:list.html.twig"));

        // line 1
        echo "<table style=\"width:100%;  border: 1
\" >
    <thead>
    <tr >
        <th >Product ID</th>

        <th >Product Code</th>
        <th >Product Name</th>
        <th >Cost</th>
        <th >Vat Class</th>
    </tr>
    </thead>
    <tbody  id=\"listData\">
    ";
        // line 14
        if ((array_key_exists("lists", $context) &&  !twig_test_empty((isset($context["lists"]) ? $context["lists"] : $this->getContext($context, "lists"))))) {
            // line 15
            echo "    ";
            $context["i"] = 1;
            // line 16
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lists"]) ? $context["lists"] : $this->getContext($context, "lists")));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 17
                echo "        <tr align=\"center\">
            <td>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                echo " </td>

            <td>";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "barcode", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
                echo "</td>
            <td>\$";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "cost", array()), "html", null, true);
                echo " </td>
            <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "vatClass", array()), "html", null, true);
                echo " \$</td>

        </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 28
        echo "    </tbody>
</table>
<br>
<br>
<form action=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("_login");
        echo "\" method=\"get\">

    <input type=\"hidden\" id=\"home\" name =home value = 1>

    <button type=\"submit\">Home</button>


</form>
";
        
        $__internal_cec649f472e317aaf9a7545d40dbd0c2eeaceb5414e5d8262104617732d341f3->leave($__internal_cec649f472e317aaf9a7545d40dbd0c2eeaceb5414e5d8262104617732d341f3_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:product:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 32,  78 => 28,  67 => 23,  63 => 22,  59 => 21,  55 => 20,  50 => 18,  47 => 17,  42 => 16,  39 => 15,  37 => 14,  22 => 1,);
    }
}
/* <table style="width:100%;  border: 1*/
/* " >*/
/*     <thead>*/
/*     <tr >*/
/*         <th >Product ID</th>*/
/* */
/*         <th >Product Code</th>*/
/*         <th >Product Name</th>*/
/*         <th >Cost</th>*/
/*         <th >Vat Class</th>*/
/*     </tr>*/
/*     </thead>*/
/*     <tbody  id="listData">*/
/*     {% if lists is defined and lists is not empty %}*/
/*     {% set i=1 %}*/
/*     {% for product in lists %}*/
/*         <tr align="center">*/
/*             <td>{{ product.id }} </td>*/
/* */
/*             <td>{{ product.barcode }}</td>*/
/*             <td>{{ product.name }}</td>*/
/*             <td>${{ product.cost }} </td>*/
/*             <td>{{ product.vatClass }} $</td>*/
/* */
/*         </tr>*/
/*     {% endfor %}*/
/* {% endif %}*/
/*     </tbody>*/
/* </table>*/
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
/* */
