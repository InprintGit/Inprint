<?php

/* AppBundle:Prinkino:riepilogoProdottoJSON.html.twig */
class __TwigTemplate_f36c7044de8a2cb4c305e4cca71836d34b8f037974954f8dd1172035bce6b26f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'corpo' => array($this, 'block_corpo'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28190f6ebc24842fd61e5e02bc2429717a0bb0ec21c573d6e3f5903d9d712940 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28190f6ebc24842fd61e5e02bc2429717a0bb0ec21c573d6e3f5903d9d712940->enter($__internal_28190f6ebc24842fd61e5e02bc2429717a0bb0ec21c573d6e3f5903d9d712940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Prinkino:riepilogoProdottoJSON.html.twig"));

        // line 1
        $this->displayBlock('corpo', $context, $blocks);
        
        $__internal_28190f6ebc24842fd61e5e02bc2429717a0bb0ec21c573d6e3f5903d9d712940->leave($__internal_28190f6ebc24842fd61e5e02bc2429717a0bb0ec21c573d6e3f5903d9d712940_prof);

    }

    public function block_corpo($context, array $blocks = array())
    {
        $__internal_15ab33b3b6f15c1b6f0c70474ff41d5eb91aa088f76c3c51055d3c9448d8c565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15ab33b3b6f15c1b6f0c70474ff41d5eb91aa088f76c3c51055d3c9448d8c565->enter($__internal_15ab33b3b6f15c1b6f0c70474ff41d5eb91aa088f76c3c51055d3c9448d8c565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 2
        echo "
     <section class=\"t1\" >
\t         <table class=\"table table-hover\">
                     <caption> <h4>Coferma - <span>operazione</span></h4></caption>
\t           ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["riepilogo"]) ? $context["riepilogo"] : $this->getContext($context, "riepilogo")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 7
            echo "\t\t\t<tr><th class=\"span5\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "tipo", array()), "html", null, true);
            echo "</th><td >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "contenuto", array()), "html", null, true);
            echo "</td></tr>
\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "                </table>
                <a href=";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articolo", array("idproducibile" => (isset($context["idproducibile"]) ? $context["idproducibile"] : $this->getContext($context, "idproducibile")), "precedente" => 0)), "html", null, true);
        echo " id=\"modal_addclient\" class=\"btn-flat primary\" role=\"button\" style=\"border-radius:2px;\">Modifica</a>
                <a href=";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuovoordine", array("idarticolo" => (isset($context["idarticolo"]) ? $context["idarticolo"] : $this->getContext($context, "idarticolo")))), "html", null, true);
        echo " id=\"modal_addclient\" class=\"btn-flat primary\" role=\"button\" style=\"border-radius:2px;\">Crea Ordine</a>
     </section>
";
        
        $__internal_15ab33b3b6f15c1b6f0c70474ff41d5eb91aa088f76c3c51055d3c9448d8c565->leave($__internal_15ab33b3b6f15c1b6f0c70474ff41d5eb91aa088f76c3c51055d3c9448d8c565_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Prinkino:riepilogoProdottoJSON.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  59 => 10,  56 => 9,  45 => 7,  41 => 6,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block corpo %}

     <section class=\"t1\" >
\t         <table class=\"table table-hover\">
                     <caption> <h4>Coferma - <span>operazione</span></h4></caption>
\t           {%for item in riepilogo%}
\t\t\t<tr><th class=\"span5\">{{item.tipo}}</th><td >{{item.contenuto}}</td></tr>
\t\t  {%endfor%}
                </table>
                <a href={{ path('articolo', {'idproducibile': idproducibile, 'precedente':0})}} id=\"modal_addclient\" class=\"btn-flat primary\" role=\"button\" style=\"border-radius:2px;\">Modifica</a>
                <a href={{path('nuovoordine',{'idarticolo': idarticolo,})}} id=\"modal_addclient\" class=\"btn-flat primary\" role=\"button\" style=\"border-radius:2px;\">Crea Ordine</a>
     </section>
{% endblock %}", "AppBundle:Prinkino:riepilogoProdottoJSON.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Prinkino/riepilogoProdottoJSON.html.twig");
    }
}
