<?php

/* AppBundle:Amministratore:producibili.html.twig */
class __TwigTemplate_191254b7838c64b25c186d01d161e6d78492b434c2e81ca829f08920b6fb8a25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Amministratore:Abase.html.twig", "AppBundle:Amministratore:producibili.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'corpo' => array($this, 'block_corpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:Amministratore:Abase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a69c1a2d15ea77209b0757c0b1393ecf9aabe6e156bd6496f5045ac909d6d3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a69c1a2d15ea77209b0757c0b1393ecf9aabe6e156bd6496f5045ac909d6d3a->enter($__internal_9a69c1a2d15ea77209b0757c0b1393ecf9aabe6e156bd6496f5045ac909d6d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Amministratore:producibili.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a69c1a2d15ea77209b0757c0b1393ecf9aabe6e156bd6496f5045ac909d6d3a->leave($__internal_9a69c1a2d15ea77209b0757c0b1393ecf9aabe6e156bd6496f5045ac909d6d3a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e9c5c4e12abc8a6f7de8cbbd6c16cac51b5df2af217afcc91bafdc197ed5746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e9c5c4e12abc8a6f7de8cbbd6c16cac51b5df2af217afcc91bafdc197ed5746->enter($__internal_2e9c5c4e12abc8a6f7de8cbbd6c16cac51b5df2af217afcc91bafdc197ed5746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Articoli - Producibili";
        
        $__internal_2e9c5c4e12abc8a6f7de8cbbd6c16cac51b5df2af217afcc91bafdc197ed5746->leave($__internal_2e9c5c4e12abc8a6f7de8cbbd6c16cac51b5df2af217afcc91bafdc197ed5746_prof);

    }

    // line 5
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_c79608aa91aa4d9aad9b4b65977943fdeae29158bd13ac5aa5fd3bfe73468c90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c79608aa91aa4d9aad9b4b65977943fdeae29158bd13ac5aa5fd3bfe73468c90->enter($__internal_c79608aa91aa4d9aad9b4b65977943fdeae29158bd13ac5aa5fd3bfe73468c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 6
        echo "<div class=\"span12\">
    <h4>Producibili</h4>
</div>
<section>
    <tr>
        <td align=\"right\">
            <input autocomplete=\"off\" id=\"cercaProducibili\" class=\"search order-search\" placeholder=\"Cerca per nome,cognome..\" style=\"width:210px; height:27px; margin-right:8px;\" value=\"\" type=\"text\">\t\t\t\t\t\t\t<a href=\"nuovocliente.html\" id=\"modal_addclient\" class=\"btn-flat primary\" role=\"button\" style=\"border-radius:2px;\">Ricerca</a>
            <a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AnuovoProducibile");
        echo "\">+ Producibile</a>
        </td>
    </tr>
</section>
<div id=\"boxTable\" class=\"t1\" >
    <table class=\"table table-hover\">
        <thead> 
            <tr>
                <th class=\"span2\">Codice</th>
                <th class=\"span2\">Nome</th>
                <th class=\"span2\">Descrizione</th>
                <th class=\"span2\">Gruppo</th>
                <th class=\"span2\">Compenso Grafico</th>
                <th class=\"span2\"></th>  
            </tr>
        </thead>
        <tbody>
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["producibili"]) ? $context["producibili"] : $this->getContext($context, "producibili")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 31
            echo "            <tr class=\"first\">
                <td> ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo " </td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nome", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "descrizione", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "gruppoId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "compensoGrafico", array()), "html", null, true);
            echo "</td>
                <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Aproducibile", array("idProducibile" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo ">Apri</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
    </table>
</div>
";
        
        $__internal_c79608aa91aa4d9aad9b4b65977943fdeae29158bd13ac5aa5fd3bfe73468c90->leave($__internal_c79608aa91aa4d9aad9b4b65977943fdeae29158bd13ac5aa5fd3bfe73468c90_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Amministratore:producibili.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 40,  109 => 37,  105 => 36,  101 => 35,  97 => 34,  93 => 33,  89 => 32,  86 => 31,  82 => 30,  62 => 13,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle:Amministratore:Abase.html.twig\" %}

{% block title %} Articoli - Producibili{% endblock %}

{% block corpo %}
<div class=\"span12\">
    <h4>Producibili</h4>
</div>
<section>
    <tr>
        <td align=\"right\">
            <input autocomplete=\"off\" id=\"cercaProducibili\" class=\"search order-search\" placeholder=\"Cerca per nome,cognome..\" style=\"width:210px; height:27px; margin-right:8px;\" value=\"\" type=\"text\">\t\t\t\t\t\t\t<a href=\"nuovocliente.html\" id=\"modal_addclient\" class=\"btn-flat primary\" role=\"button\" style=\"border-radius:2px;\">Ricerca</a>
            <a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=\"{{ path('AnuovoProducibile') }}\">+ Producibile</a>
        </td>
    </tr>
</section>
<div id=\"boxTable\" class=\"t1\" >
    <table class=\"table table-hover\">
        <thead> 
            <tr>
                <th class=\"span2\">Codice</th>
                <th class=\"span2\">Nome</th>
                <th class=\"span2\">Descrizione</th>
                <th class=\"span2\">Gruppo</th>
                <th class=\"span2\">Compenso Grafico</th>
                <th class=\"span2\"></th>  
            </tr>
        </thead>
        <tbody>
        {%for item in producibili%}
            <tr class=\"first\">
                <td> {{item.id}} </td>
                <td>{{item.nome}}</td>
                <td>{{item.descrizione}}</td>
                <td>{{item.gruppoId}}</td>
                <td>{{item.compensoGrafico}}</td>
                <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href={{ path('Aproducibile', {'idProducibile': item.id})}}>Apri</a></td>
            </tr>
        {%endfor%}
        </tbody>
    </table>
</div>
{% endblock %}", "AppBundle:Amministratore:producibili.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Amministratore/producibili.html.twig");
    }
}
