<?php

/* AppBundle:Amministratore:Aarticoli.html.twig */
class __TwigTemplate_3d9d168c3c8ecd37b75ba5cad4b18be46f791ebd4662a5fe7d0ab30acd6a1da9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Amministratore:Abase.html.twig", "AppBundle:Amministratore:Aarticoli.html.twig", 1);
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
        $__internal_2a558dba80bf2cede444f48c21ebde7a493e2a02b5a487a1c779c3564e53d661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a558dba80bf2cede444f48c21ebde7a493e2a02b5a487a1c779c3564e53d661->enter($__internal_2a558dba80bf2cede444f48c21ebde7a493e2a02b5a487a1c779c3564e53d661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Amministratore:Aarticoli.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a558dba80bf2cede444f48c21ebde7a493e2a02b5a487a1c779c3564e53d661->leave($__internal_2a558dba80bf2cede444f48c21ebde7a493e2a02b5a487a1c779c3564e53d661_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c7442a2fccdd3da1ec42dba8a52601c7518ed195b9cf9bc527bbc9fb0d920404 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7442a2fccdd3da1ec42dba8a52601c7518ed195b9cf9bc527bbc9fb0d920404->enter($__internal_c7442a2fccdd3da1ec42dba8a52601c7518ed195b9cf9bc527bbc9fb0d920404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Articoli visualizzazione";
        
        $__internal_c7442a2fccdd3da1ec42dba8a52601c7518ed195b9cf9bc527bbc9fb0d920404->leave($__internal_c7442a2fccdd3da1ec42dba8a52601c7518ed195b9cf9bc527bbc9fb0d920404_prof);

    }

    // line 5
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_7af62e18b960338a23340506cf4371b02d839c6d850a43fb81b5ac516531c6a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7af62e18b960338a23340506cf4371b02d839c6d850a43fb81b5ac516531c6a7->enter($__internal_7af62e18b960338a23340506cf4371b02d839c6d850a43fb81b5ac516531c6a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 6
        echo "
<div class=\"span12\">
    <h4>Gestisci articoli</h4>
</div>
<section>
    <tr>
        <td align=\"right\">
            <input autocomplete=\"off\" id=\"cerca\" class=\"search order-search\" placeholder=\"Cerca per nome,cognome..\" style=\"width:210px; height:27px; margin-right:8px;\" value=\"\" type=\"text\">\t        \t\t\t    \t\t\t\t        \t\t\t            \t
            <a href=\"nuovocliente.html\" id=\"modal_addclient\" class=\"btn-flat primary\" role=\"button\" style=\"border-radius:2px;\">Ricerca</a>
            <a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AnuovoArticolo");
        echo "\">+ Articolo</a>
        </td>
    </tr>
</section>
<section class=\"t1\" >
    <table class=\"table table-hover\">
        <thead> 
            <tr>
                <th class=\"span2\">Id</th>
                <th class=\"span2\">Denominazione</th>
                <th class=\"span2\">Prezzo vendita</th>
                <th class=\"span2\"> Gruppo attributi</th>
                <th class=\"span2\"></th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articoli"]) ? $context["articoli"] : $this->getContext($context, "articoli")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 32
            echo "            <tr class=\"first\">
                <td> ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo " </td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "denominazione", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "prezzoVendita", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "producibileId", array()), "html", null, true);
            echo "</td>
                <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=\"ordine.html\">Cambia</a></td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
    </table>
</section>
";
        
        $__internal_7af62e18b960338a23340506cf4371b02d839c6d850a43fb81b5ac516531c6a7->leave($__internal_7af62e18b960338a23340506cf4371b02d839c6d850a43fb81b5ac516531c6a7_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Amministratore:Aarticoli.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 40,  102 => 36,  98 => 35,  94 => 34,  90 => 33,  87 => 32,  83 => 31,  64 => 15,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}Articoli visualizzazione{% endblock %}

{% block corpo %}

<div class=\"span12\">
    <h4>Gestisci articoli</h4>
</div>
<section>
    <tr>
        <td align=\"right\">
            <input autocomplete=\"off\" id=\"cerca\" class=\"search order-search\" placeholder=\"Cerca per nome,cognome..\" style=\"width:210px; height:27px; margin-right:8px;\" value=\"\" type=\"text\">\t        \t\t\t    \t\t\t\t        \t\t\t            \t
            <a href=\"nuovocliente.html\" id=\"modal_addclient\" class=\"btn-flat primary\" role=\"button\" style=\"border-radius:2px;\">Ricerca</a>
            <a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=\"{{ path('AnuovoArticolo') }}\">+ Articolo</a>
        </td>
    </tr>
</section>
<section class=\"t1\" >
    <table class=\"table table-hover\">
        <thead> 
            <tr>
                <th class=\"span2\">Id</th>
                <th class=\"span2\">Denominazione</th>
                <th class=\"span2\">Prezzo vendita</th>
                <th class=\"span2\"> Gruppo attributi</th>
                <th class=\"span2\"></th>
            </tr>
        </thead>
        <tbody>
            {%for item in articoli%}
            <tr class=\"first\">
                <td> {{item.id}} </td>
                <td>{{item.denominazione}}</td>
                <td>{{item.prezzoVendita}}</td>
                <td>{{item.producibileId}}</td>
                <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=\"ordine.html\">Cambia</a></td>
            </tr>
            {%endfor%}
        </tbody>
    </table>
</section>
{% endblock %}", "AppBundle:Amministratore:Aarticoli.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Amministratore/Aarticoli.html.twig");
    }
}
