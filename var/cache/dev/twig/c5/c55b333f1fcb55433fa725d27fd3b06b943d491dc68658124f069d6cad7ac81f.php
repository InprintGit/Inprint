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
        $__internal_2a6dad544b15eb0b9800e3b4c162a2b151752bd323894b442405934d88bb7cd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a6dad544b15eb0b9800e3b4c162a2b151752bd323894b442405934d88bb7cd9->enter($__internal_2a6dad544b15eb0b9800e3b4c162a2b151752bd323894b442405934d88bb7cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Amministratore:producibili.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a6dad544b15eb0b9800e3b4c162a2b151752bd323894b442405934d88bb7cd9->leave($__internal_2a6dad544b15eb0b9800e3b4c162a2b151752bd323894b442405934d88bb7cd9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e3fe5c5eb1bea3105d32b73e161804d66ae7ac15bbccd008a843873e98cf37c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e3fe5c5eb1bea3105d32b73e161804d66ae7ac15bbccd008a843873e98cf37c->enter($__internal_1e3fe5c5eb1bea3105d32b73e161804d66ae7ac15bbccd008a843873e98cf37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Articoli - Producibili";
        
        $__internal_1e3fe5c5eb1bea3105d32b73e161804d66ae7ac15bbccd008a843873e98cf37c->leave($__internal_1e3fe5c5eb1bea3105d32b73e161804d66ae7ac15bbccd008a843873e98cf37c_prof);

    }

    // line 5
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_19fb68a8572bc730884056cee54994894dd870cad374c8eff0042d9fee87609c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19fb68a8572bc730884056cee54994894dd870cad374c8eff0042d9fee87609c->enter($__internal_19fb68a8572bc730884056cee54994894dd870cad374c8eff0042d9fee87609c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 6
        echo "<div class=\"span12\">
    <h4>Categorie</h4>
</div>
<section>
    <tr>
        <td align=\"right\">
            <input autocomplete=\"off\" id=\"cerca\" class=\"search order-search\" placeholder=\"Cerca per nome,cognome..\" style=\"width:210px; height:27px; margin-right:8px;\" value=\"\" type=\"text\">\t\t\t\t\t\t\t<a href=\"nuovocliente.html\" id=\"modal_addclient\" class=\"btn-flat primary\" role=\"button\" style=\"border-radius:2px;\">Ricerca</a>
            <a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AnuovoProducibile");
        echo "\">+ Producibile</a>
        </td>
    </tr>
</section>
<section class=\"t1\" >
    <table class=\"table table-hover\">
        <thead> 
            <tr>
                <th class=\"span2\">Codice</th>
                <th class=\"span2\">Nome</th>
                <th class=\"span2\">Descrizione</th>
                <th class=\"span2\">Numero Articoli</th>
                <th class=\"span2\">Gruppo</th>
                <th class=\"span2\">Compenso Grafico</th>
                <th class=\"span2\"></th>  
            </tr>
        </thead>
        <tbody>
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["producibili"]) ? $context["producibili"] : $this->getContext($context, "producibili")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 32
            echo "            <tr class=\"first\">
                <td> ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo " </td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nome", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "descrizione", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numArt", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "gruppoId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "compensoGrafico", array()), "html", null, true);
            echo "</td>
                <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=\"ordine.html\">Cambia</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>
</section>
";
        
        $__internal_19fb68a8572bc730884056cee54994894dd870cad374c8eff0042d9fee87609c->leave($__internal_19fb68a8572bc730884056cee54994894dd870cad374c8eff0042d9fee87609c_prof);

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
        return array (  120 => 42,  110 => 38,  106 => 37,  102 => 36,  98 => 35,  94 => 34,  90 => 33,  87 => 32,  83 => 31,  62 => 13,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
    <h4>Categorie</h4>
</div>
<section>
    <tr>
        <td align=\"right\">
            <input autocomplete=\"off\" id=\"cerca\" class=\"search order-search\" placeholder=\"Cerca per nome,cognome..\" style=\"width:210px; height:27px; margin-right:8px;\" value=\"\" type=\"text\">\t\t\t\t\t\t\t<a href=\"nuovocliente.html\" id=\"modal_addclient\" class=\"btn-flat primary\" role=\"button\" style=\"border-radius:2px;\">Ricerca</a>
            <a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=\"{{ path('AnuovoProducibile') }}\">+ Producibile</a>
        </td>
    </tr>
</section>
<section class=\"t1\" >
    <table class=\"table table-hover\">
        <thead> 
            <tr>
                <th class=\"span2\">Codice</th>
                <th class=\"span2\">Nome</th>
                <th class=\"span2\">Descrizione</th>
                <th class=\"span2\">Numero Articoli</th>
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
                <td>{{item.numArt}}</td>
                <td>{{item.gruppoId}}</td>
                <td>{{item.compensoGrafico}}</td>
                <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=\"ordine.html\">Cambia</a></td>
            </tr>
        {%endfor%}
        </tbody>
    </table>
</section>
{% endblock %}", "AppBundle:Amministratore:producibili.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Amministratore/producibili.html.twig");
    }
}
