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
        $__internal_46aa25f1b95821f76634a42b7dc8922851f6d794d8c1819a3384445bc6538b2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46aa25f1b95821f76634a42b7dc8922851f6d794d8c1819a3384445bc6538b2f->enter($__internal_46aa25f1b95821f76634a42b7dc8922851f6d794d8c1819a3384445bc6538b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Amministratore:Aarticoli.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46aa25f1b95821f76634a42b7dc8922851f6d794d8c1819a3384445bc6538b2f->leave($__internal_46aa25f1b95821f76634a42b7dc8922851f6d794d8c1819a3384445bc6538b2f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f881339ecc37544428876c61696f8cfd8b9ee123932e54d43c5e290dda202ed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f881339ecc37544428876c61696f8cfd8b9ee123932e54d43c5e290dda202ed6->enter($__internal_f881339ecc37544428876c61696f8cfd8b9ee123932e54d43c5e290dda202ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Articoli visualizzazione";
        
        $__internal_f881339ecc37544428876c61696f8cfd8b9ee123932e54d43c5e290dda202ed6->leave($__internal_f881339ecc37544428876c61696f8cfd8b9ee123932e54d43c5e290dda202ed6_prof);

    }

    // line 5
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_0d10e7fee9868e3fc35179600ceb9f5ecec45aec29e82ebb2060a80523a1bbf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d10e7fee9868e3fc35179600ceb9f5ecec45aec29e82ebb2060a80523a1bbf8->enter($__internal_0d10e7fee9868e3fc35179600ceb9f5ecec45aec29e82ebb2060a80523a1bbf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

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
        echo "\">+ Categoria</a>
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
                <th class=\"span2\">Categoria</th>
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
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "categoria", array()), "html", null, true);
            echo "</td>
                <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=\"ordine.html\">Cambia</a></td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>
</section>
";
        
        $__internal_0d10e7fee9868e3fc35179600ceb9f5ecec45aec29e82ebb2060a80523a1bbf8->leave($__internal_0d10e7fee9868e3fc35179600ceb9f5ecec45aec29e82ebb2060a80523a1bbf8_prof);

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
        return array (  116 => 41,  106 => 37,  102 => 36,  98 => 35,  94 => 34,  90 => 33,  87 => 32,  83 => 31,  64 => 15,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
            <a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=\"{{ path('AnuovoArticolo') }}\">+ Categoria</a>
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
                <th class=\"span2\">Categoria</th>
            </tr>
        </thead>
        <tbody>
            {%for item in articoli%}
            <tr class=\"first\">
                <td> {{item.id}} </td>
                <td>{{item.denominazione}}</td>
                <td>{{item.prezzoVendita}}</td>
                <td>{{item.producibileId}}</td>
                <td>{{item.categoria}}</td>
                <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=\"ordine.html\">Cambia</a></td>
            </tr>
            {%endfor%}
        </tbody>
    </table>
</section>
{% endblock %}", "AppBundle:Amministratore:Aarticoli.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Amministratore/Aarticoli.html.twig");
    }
}
