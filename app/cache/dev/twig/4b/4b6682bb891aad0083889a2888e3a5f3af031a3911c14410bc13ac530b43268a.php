<?php

/* AppBundle:product:invoice.html.twig */
class __TwigTemplate_eb2eb379d5dcd0d9d9d204b70e55f0fa6cd2a65a631f37edfa55506268c6737e extends Twig_Template
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
        $__internal_937099fbcdb99ecb26b887d41ac2be3035a6c519cd475a6a1471790ac3e1e67c = $this->env->getExtension("native_profiler");
        $__internal_937099fbcdb99ecb26b887d41ac2be3035a6c519cd475a6a1471790ac3e1e67c->enter($__internal_937099fbcdb99ecb26b887d41ac2be3035a6c519cd475a6a1471790ac3e1e67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:product:invoice.html.twig"));

        // line 1
        echo "<h1> Receipt</h1>

<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("get_product_barcode");
        echo "\" method=\"get\">
    Enter barcode
    <input type=\"hidden\" id=\"barcodes\" name =barcodes value = ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["barcodes"]) ? $context["barcodes"] : $this->getContext($context, "barcodes")), "html", null, true);
        echo ">

    <input type=\"text\" id=\"barcode\" name=\"barcode\" >
    <button type=\"submit\">Add</button>


</form>



<br>
<br>
<br>
";
        // line 18
        $context["total"] = 0;
        // line 19
        echo "
";
        // line 20
        if (((array_key_exists("lists", $context) &&  !twig_test_empty((isset($context["lists"]) ? $context["lists"] : $this->getContext($context, "lists")))) &&  !twig_test_empty((isset($context["barcodes"]) ? $context["barcodes"] : $this->getContext($context, "barcodes"))))) {
            // line 21
            echo "
<table style=\"width:100%;  border: 1
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
            // line 35
            $context["i"] = 1;
            // line 36
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lists"]) ? $context["lists"] : $this->getContext($context, "lists")));
            foreach ($context['_seq'] as $context["_key"] => $context["products"]) {
                // line 37
                echo "
        ";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["products"]);
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 39
                    echo "            ";
                    $context["total"] = ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) + $this->getAttribute($context["product"], "cost", array()));
                    // line 40
                    echo "            <tr align=\"center\">
                <td>";
                    // line 41
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
                    echo " </td>

                <td>";
                    // line 43
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "barcode", array()), "html", null, true);
                    echo "</td>
                <td>";
                    // line 44
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
                    echo "</td>
                <td>\$";
                    // line 45
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "cost", array()), "html", null, true);
                    echo " </td>
                <td>";
                    // line 46
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "vatClass", array()), "html", null, true);
                    echo " \$</td>

            </tr>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['products'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "            ";
        }
        // line 52
        echo "    <tr align=\"right\"><td>total</td>
    <td>
        ";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo "
    </td></tr>
    </tbody>
</table>


<br>
<br>
<form action=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("_login");
        echo "\" method=\"get\">

    <input type=\"hidden\" id=\"home\" name =home value = 1>

    <button type=\"submit\">Home</button>


</form>";
        
        $__internal_937099fbcdb99ecb26b887d41ac2be3035a6c519cd475a6a1471790ac3e1e67c->leave($__internal_937099fbcdb99ecb26b887d41ac2be3035a6c519cd475a6a1471790ac3e1e67c_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:product:invoice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 62,  130 => 54,  126 => 52,  123 => 51,  117 => 50,  107 => 46,  103 => 45,  99 => 44,  95 => 43,  90 => 41,  87 => 40,  84 => 39,  80 => 38,  77 => 37,  72 => 36,  70 => 35,  54 => 21,  52 => 20,  49 => 19,  47 => 18,  31 => 5,  26 => 3,  22 => 1,);
    }
}
/* <h1> Receipt</h1>*/
/* */
/* <form action="{{ path('get_product_barcode') }}" method="get">*/
/*     Enter barcode*/
/*     <input type="hidden" id="barcodes" name =barcodes value = {{ barcodes }}>*/
/* */
/*     <input type="text" id="barcode" name="barcode" >*/
/*     <button type="submit">Add</button>*/
/* */
/* */
/* </form>*/
/* */
/* */
/* */
/* <br>*/
/* <br>*/
/* <br>*/
/* {% set total = 0  %}*/
/* */
/* {% if lists is defined and lists is not empty  and barcodes is not empty%}*/
/* */
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
/*         {% set i=1 %}*/
/*         {% for products in lists %}*/
/* */
/*         {% for product in products %}*/
/*             {% set total = total +product.cost %}*/
/*             <tr align="center">*/
/*                 <td>{{ product.id }} </td>*/
/* */
/*                 <td>{{ product.barcode }}</td>*/
/*                 <td>{{ product.name }}</td>*/
/*                 <td>${{ product.cost }} </td>*/
/*                 <td>{{ product.vatClass }} $</td>*/
/* */
/*             </tr>*/
/*         {% endfor %}*/
/*         {% endfor %}*/
/*             {% endif %}*/
/*     <tr align="right"><td>total</td>*/
/*     <td>*/
/*         {{ total }}*/
/*     </td></tr>*/
/*     </tbody>*/
/* </table>*/
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
