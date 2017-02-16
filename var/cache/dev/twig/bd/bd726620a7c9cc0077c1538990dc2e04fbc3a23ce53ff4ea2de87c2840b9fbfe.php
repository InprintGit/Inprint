<?php

/* AppBundle:Amministratore:Acategorie.html.twig */
class __TwigTemplate_9c18d877d9563508b1a774873b20e43947b47f4aa894001e4d00770f5ade9258 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Amministratore:Abase.html.twig", "AppBundle:Amministratore:Acategorie.html.twig", 1);
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
        $__internal_5f3efa8a80775dd47603e58fd1a43e6155b5f1a5910e53c87041ec2bdf289592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f3efa8a80775dd47603e58fd1a43e6155b5f1a5910e53c87041ec2bdf289592->enter($__internal_5f3efa8a80775dd47603e58fd1a43e6155b5f1a5910e53c87041ec2bdf289592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Amministratore:Acategorie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f3efa8a80775dd47603e58fd1a43e6155b5f1a5910e53c87041ec2bdf289592->leave($__internal_5f3efa8a80775dd47603e58fd1a43e6155b5f1a5910e53c87041ec2bdf289592_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_77515743c2e67dbc54c5f0e250db7a501ce7e580b987410acc2a88febdd6f662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77515743c2e67dbc54c5f0e250db7a501ce7e580b987410acc2a88febdd6f662->enter($__internal_77515743c2e67dbc54c5f0e250db7a501ce7e580b987410acc2a88febdd6f662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Nuova categoria visualizzazione";
        
        $__internal_77515743c2e67dbc54c5f0e250db7a501ce7e580b987410acc2a88febdd6f662->leave($__internal_77515743c2e67dbc54c5f0e250db7a501ce7e580b987410acc2a88febdd6f662_prof);

    }

    // line 5
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_1e081fb2e95cd4ba821d9b2a29f2d7f77ae93b73bb0f21803bf36fba56caf047 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e081fb2e95cd4ba821d9b2a29f2d7f77ae93b73bb0f21803bf36fba56caf047->enter($__internal_1e081fb2e95cd4ba821d9b2a29f2d7f77ae93b73bb0f21803bf36fba56caf047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AnuovaCategoria");
        echo "\">+ Categoria</a>
        </td>
    </tr>
</section>
<section class=\"t1\" >
    <table class=\"table table-hover\">
        <thead> 
            <tr>
                <th class=\"span2\">Id</th>
                <th class=\"span2\">Nome</th>
                <th class=\"span2\">Descrizione</th>
                <th class=\"span2\">Immagine</th>
                <th class=\"span2\">Padre</th> 
            </tr>
        </thead>
        <tbody>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 30
            echo "            <tr class=\"first\">
                <td> ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo " </td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nome", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "descrizione", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "immagine", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "padre", array()), "html", null, true);
            echo "</td>
                <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=\"ordine.html\">Cambia</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>
</section>
";
        
        $__internal_1e081fb2e95cd4ba821d9b2a29f2d7f77ae93b73bb0f21803bf36fba56caf047->leave($__internal_1e081fb2e95cd4ba821d9b2a29f2d7f77ae93b73bb0f21803bf36fba56caf047_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Amministratore:Acategorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 39,  104 => 35,  100 => 34,  96 => 33,  92 => 32,  88 => 31,  85 => 30,  81 => 29,  62 => 13,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %} Nuova categoria visualizzazione{% endblock %}

{% block corpo %}
<div class=\"span12\">
    <h4>Categorie</h4>
</div>
<section>
    <tr>
        <td align=\"right\">
            <input autocomplete=\"off\" id=\"cerca\" class=\"search order-search\" placeholder=\"Cerca per nome,cognome..\" style=\"width:210px; height:27px; margin-right:8px;\" value=\"\" type=\"text\">\t\t\t\t\t\t\t<a href=\"nuovocliente.html\" id=\"modal_addclient\" class=\"btn-flat primary\" role=\"button\" style=\"border-radius:2px;\">Ricerca</a>
            <a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=\"{{ path('AnuovaCategoria') }}\">+ Categoria</a>
        </td>
    </tr>
</section>
<section class=\"t1\" >
    <table class=\"table table-hover\">
        <thead> 
            <tr>
                <th class=\"span2\">Id</th>
                <th class=\"span2\">Nome</th>
                <th class=\"span2\">Descrizione</th>
                <th class=\"span2\">Immagine</th>
                <th class=\"span2\">Padre</th> 
            </tr>
        </thead>
        <tbody>
        {%for item in categorie%}
            <tr class=\"first\">
                <td> {{item.id}} </td>
                <td>{{item.nome}}</td>
                <td>{{item.descrizione}}</td>
                <td>{{item.immagine}}</td>
                <td>{{item.padre}}</td>
                <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=\"ordine.html\">Cambia</a></td>
            </tr>
        {%endfor%}
        </tbody>
    </table>
</section>
{% endblock %}", "AppBundle:Amministratore:Acategorie.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Amministratore/Acategorie.html.twig");
    }
}
