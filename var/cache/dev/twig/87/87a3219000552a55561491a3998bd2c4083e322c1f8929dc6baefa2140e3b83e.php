<?php

/* AppBundle:Prinkino:riepilogoProdotto.html.twig */
class __TwigTemplate_4a2da19425d889b0d5928de6d8f9480392908e4ce840b92c99990bfa23b36ab5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Prinkino:riepilogoProdotto.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'corpo' => array($this, 'block_corpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c5c3f0377f9a9dcd0342cd420ef1655f1b4e2633da72ada6e7ca602e5f1305f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5c3f0377f9a9dcd0342cd420ef1655f1b4e2633da72ada6e7ca602e5f1305f5->enter($__internal_c5c3f0377f9a9dcd0342cd420ef1655f1b4e2633da72ada6e7ca602e5f1305f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Prinkino:riepilogoProdotto.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5c3f0377f9a9dcd0342cd420ef1655f1b4e2633da72ada6e7ca602e5f1305f5->leave($__internal_c5c3f0377f9a9dcd0342cd420ef1655f1b4e2633da72ada6e7ca602e5f1305f5_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_744375ae11c3b7f8f15722aecf54d2574da002717622327cf1ede7dd3d39dcfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_744375ae11c3b7f8f15722aecf54d2574da002717622327cf1ede7dd3d39dcfb->enter($__internal_744375ae11c3b7f8f15722aecf54d2574da002717622327cf1ede7dd3d39dcfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Riepilogo";
        
        $__internal_744375ae11c3b7f8f15722aecf54d2574da002717622327cf1ede7dd3d39dcfb->leave($__internal_744375ae11c3b7f8f15722aecf54d2574da002717622327cf1ede7dd3d39dcfb_prof);

    }

    // line 6
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_eba3ab39d8e3fd350c97bd0fed72c65d605800bfe4aac56307b771bec89eab66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eba3ab39d8e3fd350c97bd0fed72c65d605800bfe4aac56307b771bec89eab66->enter($__internal_eba3ab39d8e3fd350c97bd0fed72c65d605800bfe4aac56307b771bec89eab66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 7
        echo "
     <section class=\"t1\" >
\t         <table class=\"table table-hover\">
                     <caption> <h4>Coferma - <span>operazione</span></h4></caption>
\t           ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["riepilogo"]) ? $context["riepilogo"] : $this->getContext($context, "riepilogo")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
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
        // line 14
        echo "                </table>
                <a href=";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articolo", array("idproducibile" => (isset($context["idproducibile"]) ? $context["idproducibile"] : $this->getContext($context, "idproducibile")), "precedente" => 0)), "html", null, true);
        echo " id=\"modal_addclient\" class=\"btn-flat primary\" role=\"button\" style=\"border-radius:2px;\">Modifica</a>
                <a href=";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuovoordine", array("idarticolo" => (isset($context["idarticolo"]) ? $context["idarticolo"] : $this->getContext($context, "idarticolo")))), "html", null, true);
        echo " id=\"modal_addclient\" class=\"btn-flat primary\" role=\"button\" style=\"border-radius:2px;\">Crea Ordine</a>
     </section>
";
        
        $__internal_eba3ab39d8e3fd350c97bd0fed72c65d605800bfe4aac56307b771bec89eab66->leave($__internal_eba3ab39d8e3fd350c97bd0fed72c65d605800bfe4aac56307b771bec89eab66_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Prinkino:riepilogoProdotto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 16,  77 => 15,  74 => 14,  63 => 12,  59 => 11,  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"::base.html.twig\" %}

{% block title %}Riepilogo{% endblock %}

{% block corpo %}

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
{% endblock %}", "AppBundle:Prinkino:riepilogoProdotto.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Prinkino/riepilogoProdotto.html.twig");
    }
}
