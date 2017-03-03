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
        $__internal_7aa7ba7d6ea33ffe7a260f04440f1b3eb8c65e2edb250ea07c834bd4bbe96221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aa7ba7d6ea33ffe7a260f04440f1b3eb8c65e2edb250ea07c834bd4bbe96221->enter($__internal_7aa7ba7d6ea33ffe7a260f04440f1b3eb8c65e2edb250ea07c834bd4bbe96221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Amministratore:Aarticoli.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7aa7ba7d6ea33ffe7a260f04440f1b3eb8c65e2edb250ea07c834bd4bbe96221->leave($__internal_7aa7ba7d6ea33ffe7a260f04440f1b3eb8c65e2edb250ea07c834bd4bbe96221_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a479e8af96fc27168012df4293dcc5d6c0e0473222e27337f2ea6d41f308cdac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a479e8af96fc27168012df4293dcc5d6c0e0473222e27337f2ea6d41f308cdac->enter($__internal_a479e8af96fc27168012df4293dcc5d6c0e0473222e27337f2ea6d41f308cdac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Articoli visualizzazione";
        
        $__internal_a479e8af96fc27168012df4293dcc5d6c0e0473222e27337f2ea6d41f308cdac->leave($__internal_a479e8af96fc27168012df4293dcc5d6c0e0473222e27337f2ea6d41f308cdac_prof);

    }

    // line 5
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_b69fe965f7d5e0f0ab36a3eb769c39784d1e4bdf2e4275e67a55da52472761b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b69fe965f7d5e0f0ab36a3eb769c39784d1e4bdf2e4275e67a55da52472761b5->enter($__internal_b69fe965f7d5e0f0ab36a3eb769c39784d1e4bdf2e4275e67a55da52472761b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 6
        echo "
<div class=\"span12\">
    <h4>Gestisci articoli</h4>
</div>
<section>
    <tr>
        <td align=\"right\">
            <input autocomplete=\"off\" id=\"cercaArticolo\" class=\"search order-search\" placeholder=\"Cerca per nome,cognome..\" style=\"width:210px; height:27px; margin-right:8px;\" value=\"\" type=\"text\">\t        \t\t\t    \t\t\t\t        \t\t\t            \t
            <a href=\"nuovocliente.html\" id=\"modal_addclient\" class=\"btn-flat primary\" role=\"button\" style=\"border-radius:2px;\">Ricerca</a>
            <a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AnuovoArticolo");
        echo "\">+ Articolo</a>
        </td>
    </tr>
</section>
<section class=\"t1\" >
    <div id=\"boxTable\">
        <table  class=\"table table-hover\">
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
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articoli"]) ? $context["articoli"] : $this->getContext($context, "articoli")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 33
            echo "                <tr class=\"first\">
                    <td> ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo " </td>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "denominazione", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "prezzoVendita", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "producibileId", array()), "html", null, true);
            echo "</td>
                    <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Aarticolo", array("idArticolo" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo ">Apri</a></td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "            </tbody>
        </table>
    </div>
</section>
";
        
        $__internal_b69fe965f7d5e0f0ab36a3eb769c39784d1e4bdf2e4275e67a55da52472761b5->leave($__internal_b69fe965f7d5e0f0ab36a3eb769c39784d1e4bdf2e4275e67a55da52472761b5_prof);

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
        return array (  116 => 41,  107 => 38,  103 => 37,  99 => 36,  95 => 35,  91 => 34,  88 => 33,  84 => 32,  64 => 15,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
            <input autocomplete=\"off\" id=\"cercaArticolo\" class=\"search order-search\" placeholder=\"Cerca per nome,cognome..\" style=\"width:210px; height:27px; margin-right:8px;\" value=\"\" type=\"text\">\t        \t\t\t    \t\t\t\t        \t\t\t            \t
            <a href=\"nuovocliente.html\" id=\"modal_addclient\" class=\"btn-flat primary\" role=\"button\" style=\"border-radius:2px;\">Ricerca</a>
            <a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=\"{{ path('AnuovoArticolo') }}\">+ Articolo</a>
        </td>
    </tr>
</section>
<section class=\"t1\" >
    <div id=\"boxTable\">
        <table  class=\"table table-hover\">
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
                    <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href={{ path('Aarticolo', {'idArticolo': item.id})}}>Apri</a></td>
                </tr>
                {%endfor%}
            </tbody>
        </table>
    </div>
</section>
{% endblock %}", "AppBundle:Amministratore:Aarticoli.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Amministratore/Aarticoli.html.twig");
    }
}
