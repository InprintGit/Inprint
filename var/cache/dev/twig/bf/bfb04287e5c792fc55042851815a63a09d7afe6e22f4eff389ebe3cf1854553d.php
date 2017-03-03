<?php

/* AppBundle:Amministratore:producibile.html.twig */
class __TwigTemplate_1d5d323bc390fa16d184ffefaac358b9e40c3799fda2cd87077cf1196d480cce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Amministratore:Abase.html.twig", "AppBundle:Amministratore:producibile.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
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
        $__internal_d3affc662fbb80285152b1ce9968e483e931a5fed821533605d78d54a99aea90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3affc662fbb80285152b1ce9968e483e931a5fed821533605d78d54a99aea90->enter($__internal_d3affc662fbb80285152b1ce9968e483e931a5fed821533605d78d54a99aea90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Amministratore:producibile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3affc662fbb80285152b1ce9968e483e931a5fed821533605d78d54a99aea90->leave($__internal_d3affc662fbb80285152b1ce9968e483e931a5fed821533605d78d54a99aea90_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3017ae109e645ae336947df0d1d2109929545fa5c261d508210e63f429a5f464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3017ae109e645ae336947df0d1d2109929545fa5c261d508210e63f429a5f464->enter($__internal_3017ae109e645ae336947df0d1d2109929545fa5c261d508210e63f429a5f464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 4
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/js/salvaProducibile.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_3017ae109e645ae336947df0d1d2109929545fa5c261d508210e63f429a5f464->leave($__internal_3017ae109e645ae336947df0d1d2109929545fa5c261d508210e63f429a5f464_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e1333ef7bbe8f740b87941b9799ff64f61809bd71db3d55cf7cd178ea8b34e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e1333ef7bbe8f740b87941b9799ff64f61809bd71db3d55cf7cd178ea8b34e8->enter($__internal_4e1333ef7bbe8f740b87941b9799ff64f61809bd71db3d55cf7cd178ea8b34e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Producibile id";
        
        $__internal_4e1333ef7bbe8f740b87941b9799ff64f61809bd71db3d55cf7cd178ea8b34e8->leave($__internal_4e1333ef7bbe8f740b87941b9799ff64f61809bd71db3d55cf7cd178ea8b34e8_prof);

    }

    // line 11
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_797a450be5808f264df27ceb44a3259699a79a8806cc6f5c71a4b05cb55e50a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_797a450be5808f264df27ceb44a3259699a79a8806cc6f5c71a4b05cb55e50a7->enter($__internal_797a450be5808f264df27ceb44a3259699a79a8806cc6f5c71a4b05cb55e50a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 12
        echo "
<div id=\"content\" class=\"container-fluid\" style=\"\">
    <div style=\"margin-top:20px;\" align=\"center\">
        <h3 style=\"font-weight: 300; margin-top:10px;\">Producibile -";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producibile"]) ? $context["producibile"] : $this->getContext($context, "producibile")), "id", array()), "html", null, true);
        echo "</h3>
    </div>
    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th class=\"span2\"><span class=\"line\"></span>Immagine</th>
                <th class=\"span2\"><span class=\"line\"></span>Descrizione</th>
                <th class=\"span2\"><span class=\"line\"></span>Compenso grafico</th>
                <th class=\"span2\"><span class=\"line\"></span>Set Attributi</th>
                <th class=\"span2\"><span class=\"line\"></span>Numero Articoli</th>
            </tr>
        </thead>
        <tbody>
            <tr class=\"first\" style=\"font-size:14px; cursor:pointer; \">
                <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producibile"]) ? $context["producibile"] : $this->getContext($context, "producibile")), "immagine", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producibile"]) ? $context["producibile"] : $this->getContext($context, "producibile")), "descrizione", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producibile"]) ? $context["producibile"] : $this->getContext($context, "producibile")), "compensografico", array()), "html", null, true);
        echo "</td>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producibile"]) ? $context["producibile"] : $this->getContext($context, "producibile")), "gruppoId", array()), "html", null, true);
        echo "</td>
                <td id=\"articolo\">";
        // line 33
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["articoli"]) ? $context["articoli"] : $this->getContext($context, "articoli"))), "html", null, true);
        echo "</td>
            </tr>\t\t\t\t\t\t\t    \t\t\t
        </tbody>
    </table>
    <table class=\"table table-hover\">
        <caption><h4>Articoli</h4></caption>
        <thead>
            <tr>
                <th class=\"span2\"> Articoli</th>
                <th class=\"span2\"> </th>\t\t\t\t        \t\t\t\t
            </tr>
        </thead>
        <tbody>
        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articoli"]) ? $context["articoli"] : $this->getContext($context, "articoli")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 47
            echo "            <tr class=\"first\" style=\"font-size:14px; cursor:pointer; \">
                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "</td>
                <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Aarticolo", array("idArticolo" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo ">Vedi</a></td>\t\t\t\t\t\t\t\t\t\t\t
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t\t\t\t\t    \t\t\t
        </tbody>
    </table>
    <table class=\"table table-hover\">
        <caption><h4>Categorie</h4></caption>
        <thead>
            <tr>
                <th class=\"span2\"> Articoli</th>
                <th class=\"span2\"> </th>\t\t\t\t        \t\t\t\t
            </tr>
        </thead>
        <tbody>
        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 64
            echo "            <tr class=\"first\" style=\"font-size:14px; cursor:pointer; \">
                <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "</td>
                <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Acategoria", array("idCategoria" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo ">Vedi</a></td>\t\t\t\t\t\t\t\t\t\t\t
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "\t\t\t\t\t    \t\t\t
        </tbody>
    </table>
</div>
<div style=\"margin-top:15px;\" align=\"right\">
    <a class=\"btn-flat success\" style=\"border-radius:2px; cursor:pointer;\" onclick=\"elimina(";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producibile"]) ? $context["producibile"] : $this->getContext($context, "producibile")), "id", array()), "html", null, true);
        echo ");\"><i class=\"icon-mail-forward\"></i>Elimina</a>
    <a class=\"btn-flat success\" style=\"border-radius:2px; cursor:pointer;\" onclick=\"modifica(";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producibile"]) ? $context["producibile"] : $this->getContext($context, "producibile")), "id", array()), "html", null, true);
        echo ");\"><i class=\"icon-mail-forward\"></i> Modifica</a>
</div>\t
";
        
        $__internal_797a450be5808f264df27ceb44a3259699a79a8806cc6f5c71a4b05cb55e50a7->leave($__internal_797a450be5808f264df27ceb44a3259699a79a8806cc6f5c71a4b05cb55e50a7_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Amministratore:producibile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 74,  190 => 73,  183 => 68,  174 => 66,  170 => 65,  167 => 64,  163 => 63,  149 => 51,  140 => 49,  136 => 48,  133 => 47,  129 => 46,  113 => 33,  109 => 32,  105 => 31,  101 => 30,  97 => 29,  80 => 15,  75 => 12,  69 => 11,  57 => 9,  48 => 6,  42 => 4,  36 => 3,  11 => 1,);
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

{% block javascripts %}
    {{parent()}}

    <script src=\"{{ asset(\"Amministratore/js/salvaProducibile.js\") }}\"></script>
{% endblock %}

{% block title %}Producibile id{% endblock %}

{% block corpo %}

<div id=\"content\" class=\"container-fluid\" style=\"\">
    <div style=\"margin-top:20px;\" align=\"center\">
        <h3 style=\"font-weight: 300; margin-top:10px;\">Producibile -{{producibile.id}}</h3>
    </div>
    <table class=\"table table-hover\">
        <thead>
            <tr>
                <th class=\"span2\"><span class=\"line\"></span>Immagine</th>
                <th class=\"span2\"><span class=\"line\"></span>Descrizione</th>
                <th class=\"span2\"><span class=\"line\"></span>Compenso grafico</th>
                <th class=\"span2\"><span class=\"line\"></span>Set Attributi</th>
                <th class=\"span2\"><span class=\"line\"></span>Numero Articoli</th>
            </tr>
        </thead>
        <tbody>
            <tr class=\"first\" style=\"font-size:14px; cursor:pointer; \">
                <td>{{producibile.immagine}}</td>
                <td>{{producibile.descrizione}}</td>
                <td>{{producibile.compensografico}}</td>
                <td>{{producibile.gruppoId}}</td>
                <td id=\"articolo\">{{articoli|length}}</td>
            </tr>\t\t\t\t\t\t\t    \t\t\t
        </tbody>
    </table>
    <table class=\"table table-hover\">
        <caption><h4>Articoli</h4></caption>
        <thead>
            <tr>
                <th class=\"span2\"> Articoli</th>
                <th class=\"span2\"> </th>\t\t\t\t        \t\t\t\t
            </tr>
        </thead>
        <tbody>
        {%for item in articoli%}
            <tr class=\"first\" style=\"font-size:14px; cursor:pointer; \">
                <td>{{item.id}}</td>
                <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href={{ path('Aarticolo', {'idArticolo': item.id})}}>Vedi</a></td>\t\t\t\t\t\t\t\t\t\t\t
            </tr>
        {%endfor%}\t\t\t\t\t    \t\t\t
        </tbody>
    </table>
    <table class=\"table table-hover\">
        <caption><h4>Categorie</h4></caption>
        <thead>
            <tr>
                <th class=\"span2\"> Articoli</th>
                <th class=\"span2\"> </th>\t\t\t\t        \t\t\t\t
            </tr>
        </thead>
        <tbody>
        {%for item in categorie%}
            <tr class=\"first\" style=\"font-size:14px; cursor:pointer; \">
                <td>{{item.id}}</td>
                <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href={{ path('Acategoria', {'idCategoria': item.id})}}>Vedi</a></td>\t\t\t\t\t\t\t\t\t\t\t
            </tr>
        {%endfor%}\t\t\t\t\t    \t\t\t
        </tbody>
    </table>
</div>
<div style=\"margin-top:15px;\" align=\"right\">
    <a class=\"btn-flat success\" style=\"border-radius:2px; cursor:pointer;\" onclick=\"elimina({{producibile.id}});\"><i class=\"icon-mail-forward\"></i>Elimina</a>
    <a class=\"btn-flat success\" style=\"border-radius:2px; cursor:pointer;\" onclick=\"modifica({{producibile.id}});\"><i class=\"icon-mail-forward\"></i> Modifica</a>
</div>\t
{% endblock %}", "AppBundle:Amministratore:producibile.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Amministratore/producibile.html.twig");
    }
}
