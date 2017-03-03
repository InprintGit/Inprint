<?php

/* AppBundle:Amministratore:GruppiAttributo.html.twig */
class __TwigTemplate_79ccd5159fbf16cb0545fede51f26b50216292eaf2675e71b2af2f8a36300ccc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Amministratore:Abase.html.twig", "AppBundle:Amministratore:GruppiAttributo.html.twig", 1);
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
        $__internal_dbe3b8bee7a3e5d209bb95adf80c7d10404b1bac44425257cefe24510a814068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbe3b8bee7a3e5d209bb95adf80c7d10404b1bac44425257cefe24510a814068->enter($__internal_dbe3b8bee7a3e5d209bb95adf80c7d10404b1bac44425257cefe24510a814068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Amministratore:GruppiAttributo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbe3b8bee7a3e5d209bb95adf80c7d10404b1bac44425257cefe24510a814068->leave($__internal_dbe3b8bee7a3e5d209bb95adf80c7d10404b1bac44425257cefe24510a814068_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_63f757886525f4fb3141b4b2b9f55d8c2dc8c7160da723b217e4314e835836cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63f757886525f4fb3141b4b2b9f55d8c2dc8c7160da723b217e4314e835836cd->enter($__internal_63f757886525f4fb3141b4b2b9f55d8c2dc8c7160da723b217e4314e835836cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 4
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/js/set.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_63f757886525f4fb3141b4b2b9f55d8c2dc8c7160da723b217e4314e835836cd->leave($__internal_63f757886525f4fb3141b4b2b9f55d8c2dc8c7160da723b217e4314e835836cd_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_d483d061f7bf251043deb41c58531c858e256fe4d3f753dcd9a90a17571c62b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d483d061f7bf251043deb41c58531c858e256fe4d3f753dcd9a90a17571c62b4->enter($__internal_d483d061f7bf251043deb41c58531c858e256fe4d3f753dcd9a90a17571c62b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Set attributi";
        
        $__internal_d483d061f7bf251043deb41c58531c858e256fe4d3f753dcd9a90a17571c62b4->leave($__internal_d483d061f7bf251043deb41c58531c858e256fe4d3f753dcd9a90a17571c62b4_prof);

    }

    // line 10
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_759d5c605eba97c822ef05e5a79dff0a76008494f2165bfec1a149891d64a058 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_759d5c605eba97c822ef05e5a79dff0a76008494f2165bfec1a149891d64a058->enter($__internal_759d5c605eba97c822ef05e5a79dff0a76008494f2165bfec1a149891d64a058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 11
        echo "
<div id=\"content\" class=\"container-fluid\" style=\"\">
    <div style=\"margin-top:20px;\" align=\"center\">
        <h3 style=\"font-weight: 300; margin-top:10px;\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setAttributi"]) ? $context["setAttributi"] : $this->getContext($context, "setAttributi")), "nome", array()), "html", null, true);
        echo "- Codice:";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setAttributi"]) ? $context["setAttributi"] : $this->getContext($context, "setAttributi")), "id", array()), "html", null, true);
        echo "</h3>
    </div>
    <div style=\"margin-top:15px;\" align=\"right\">
        <a class=\"btn-flat success\" onclick=elimina(";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["setAttributi"]) ? $context["setAttributi"] : $this->getContext($context, "setAttributi")), "id", array()), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["producibili"]) ? $context["producibili"] : $this->getContext($context, "producibili"))), "html", null, true);
        echo "); style=\"border-radius:2px; cursor:pointer;\"><i class=\"icon-mail-forward\"></i>Elimina</a>
        <a class=\"btn-flat success\"  style=\"border-radius:2px; cursor:pointer;\"><i class=\"icon-mail-forward\"></i> Modifica</a>
    </div>
    <table>
        <tbody>
            <tr valign=\"top\">
                <td style=\"width: 1400px;\" width=\"100%\">
                    <table class=\"table table-hover\">
                        <caption>
                            <h4> Attributi del Set</h4>   \t\t\t
                        </caption>
                        <thead>
                            <tr>
                                <th class=\"span2\">Codice</th>
                                <th class=\"span2\"><span class=\"line\"></span>Nome</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Attributi"]) ? $context["Attributi"] : $this->getContext($context, "Attributi")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 36
            echo "                            <tr class=\"first\" style=\"font-size:14px; cursor:pointer; \">
                                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nome", array()), "html", null, true);
            echo "</td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t\t\t\t\t\t\t    \t\t\t
                        </tbody>
                    </table>
                        <table class=\"table table-hover\">
                        <caption>
                            <h4>Producibili che utilizzano il Set</h4>   \t\t\t
                        </caption>
                        <thead>
                            <tr>
                                <th class=\"span2\">Attributi</th>
                                <th class=\"span2\"><span class=\"line\"></span>Nome</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["producibili"]) ? $context["producibili"] : $this->getContext($context, "producibili")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 56
            echo "                            <tr class=\"first\" style=\"font-size:14px; cursor:pointer; \">
                                <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nome", array()), "html", null, true);
            echo "</td>
                                <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Aproducibile", array("idProducibile" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo ">Apri</a></td>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "\t\t\t\t\t\t\t    \t\t\t
                        </tbody>
                    </table>
                </td> 
            </tr>
        </tbody> 
    </table>
</div>\t
";
        
        $__internal_759d5c605eba97c822ef05e5a79dff0a76008494f2165bfec1a149891d64a058->leave($__internal_759d5c605eba97c822ef05e5a79dff0a76008494f2165bfec1a149891d64a058_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Amministratore:GruppiAttributo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 61,  162 => 59,  158 => 58,  154 => 57,  151 => 56,  147 => 55,  130 => 40,  121 => 38,  117 => 37,  114 => 36,  110 => 35,  87 => 17,  79 => 14,  74 => 11,  68 => 10,  56 => 8,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
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
    <script src=\"{{ asset(\"Amministratore/js/set.js\") }}\"></script>
{% endblock %}

{% block title %}Set attributi{% endblock %}

{% block corpo %}

<div id=\"content\" class=\"container-fluid\" style=\"\">
    <div style=\"margin-top:20px;\" align=\"center\">
        <h3 style=\"font-weight: 300; margin-top:10px;\">{{setAttributi.nome}}- Codice:{{setAttributi.id}}</h3>
    </div>
    <div style=\"margin-top:15px;\" align=\"right\">
        <a class=\"btn-flat success\" onclick=elimina({{setAttributi.id}},{{producibili|length}}); style=\"border-radius:2px; cursor:pointer;\"><i class=\"icon-mail-forward\"></i>Elimina</a>
        <a class=\"btn-flat success\"  style=\"border-radius:2px; cursor:pointer;\"><i class=\"icon-mail-forward\"></i> Modifica</a>
    </div>
    <table>
        <tbody>
            <tr valign=\"top\">
                <td style=\"width: 1400px;\" width=\"100%\">
                    <table class=\"table table-hover\">
                        <caption>
                            <h4> Attributi del Set</h4>   \t\t\t
                        </caption>
                        <thead>
                            <tr>
                                <th class=\"span2\">Codice</th>
                                <th class=\"span2\"><span class=\"line\"></span>Nome</th>
                            </tr>
                        </thead>
                        <tbody>
                            {%for item in Attributi%}
                            <tr class=\"first\" style=\"font-size:14px; cursor:pointer; \">
                                <td>{{item.id}}</td>
                                <td>{{item.nome}}</td>
                            </tr>
                            {%endfor%}\t\t\t\t\t\t\t    \t\t\t
                        </tbody>
                    </table>
                        <table class=\"table table-hover\">
                        <caption>
                            <h4>Producibili che utilizzano il Set</h4>   \t\t\t
                        </caption>
                        <thead>
                            <tr>
                                <th class=\"span2\">Attributi</th>
                                <th class=\"span2\"><span class=\"line\"></span>Nome</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            {%for item in producibili%}
                            <tr class=\"first\" style=\"font-size:14px; cursor:pointer; \">
                                <td>{{item.id}}</td>
                                <td>{{item.nome}}</td>
                                <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href={{ path('Aproducibile', {'idProducibile': item.id})}}>Apri</a></td>
                            </tr>
                            {%endfor%}\t\t\t\t\t\t\t    \t\t\t
                        </tbody>
                    </table>
                </td> 
            </tr>
        </tbody> 
    </table>
</div>\t
{% endblock %}", "AppBundle:Amministratore:GruppiAttributo.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Amministratore/GruppiAttributo.html.twig");
    }
}
