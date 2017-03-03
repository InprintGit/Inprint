<?php

/* AppBundle:Amministratore:gruppi.html.twig */
class __TwigTemplate_809b4d4cba8bd6cfbadcd1c43846f8e5f1b54335fcdd6d4b4cd5d8cabdce3960 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Amministratore:Abase.html.twig", "AppBundle:Amministratore:gruppi.html.twig", 1);
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
        $__internal_b9989f38d16537f46d1b3fd8746a1cb15c800ac3a71feea3dbcf8286f7fe74b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9989f38d16537f46d1b3fd8746a1cb15c800ac3a71feea3dbcf8286f7fe74b4->enter($__internal_b9989f38d16537f46d1b3fd8746a1cb15c800ac3a71feea3dbcf8286f7fe74b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Amministratore:gruppi.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9989f38d16537f46d1b3fd8746a1cb15c800ac3a71feea3dbcf8286f7fe74b4->leave($__internal_b9989f38d16537f46d1b3fd8746a1cb15c800ac3a71feea3dbcf8286f7fe74b4_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d202c156b2d8e6fbead20cf826ebc9298bc6acda67c607a008fba606dd6fd7a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d202c156b2d8e6fbead20cf826ebc9298bc6acda67c607a008fba606dd6fd7a2->enter($__internal_d202c156b2d8e6fbead20cf826ebc9298bc6acda67c607a008fba606dd6fd7a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 4
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/js/set.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_d202c156b2d8e6fbead20cf826ebc9298bc6acda67c607a008fba606dd6fd7a2->leave($__internal_d202c156b2d8e6fbead20cf826ebc9298bc6acda67c607a008fba606dd6fd7a2_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe0d146ff0724568a490743be814c1ed21d39a55c0117975d0dcf4ed5fa1cd38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe0d146ff0724568a490743be814c1ed21d39a55c0117975d0dcf4ed5fa1cd38->enter($__internal_fe0d146ff0724568a490743be814c1ed21d39a55c0117975d0dcf4ed5fa1cd38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Set-Attributi visualizzazione";
        
        $__internal_fe0d146ff0724568a490743be814c1ed21d39a55c0117975d0dcf4ed5fa1cd38->leave($__internal_fe0d146ff0724568a490743be814c1ed21d39a55c0117975d0dcf4ed5fa1cd38_prof);

    }

    // line 11
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_dcb05276ad856f06a4dae07d1ccb4a56df261fe8fb87e09be70d8c8e87edc555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcb05276ad856f06a4dae07d1ccb4a56df261fe8fb87e09be70d8c8e87edc555->enter($__internal_dcb05276ad856f06a4dae07d1ccb4a56df261fe8fb87e09be70d8c8e87edc555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 12
        echo "<div class=\"span12\">
\t<h4>Set-Attributi</h4>
</div>
<section>
    <tr>
        <td align=\"right\">
            <input autocomplete=\"off\" id=\"cercaGruppo\" class=\"search order-search\" placeholder=\"Cerca per nome,cognome..\" style=\"width:210px; height:27px; margin-right:8px;\" value=\"\" type=\"text\">\t        \t\t\t    \t\t\t\t        \t\t\t            \t
            <a href=\"nuovocliente.html\" id=\"modal_addclient\" class=\"btn-flat primary\" role=\"button\" style=\"border-radius:2px;\">Ricerca</a>
            <a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AnuovoGruppo");
        echo "\">+ Gruppo</a>
        </td>
    </tr>
</section>
<div class=\"t1\" id=\"boxTable\" >
    <table class=\"table table-hover\">
        <thead> 
            <tr>
                <th class=\"span2\">Id</th>
                <th class=\"span2\">Nome</th>
                <th class=\"span2\"></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["set"]) ? $context["set"] : $this->getContext($context, "set")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 35
            echo "            <tr class=\"first\">
                <td> ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo " </td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nome", array()), "html", null, true);
            echo "</td>\t\t\t\t\t\t        
                <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ASetAttributi", array("idSetAttributi" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo ">Apri</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </tbody>
    </table>
</div>
";
        
        $__internal_dcb05276ad856f06a4dae07d1ccb4a56df261fe8fb87e09be70d8c8e87edc555->leave($__internal_dcb05276ad856f06a4dae07d1ccb4a56df261fe8fb87e09be70d8c8e87edc555_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Amministratore:gruppi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 41,  117 => 38,  113 => 37,  109 => 36,  106 => 35,  102 => 34,  85 => 20,  75 => 12,  69 => 11,  57 => 9,  48 => 6,  42 => 4,  36 => 3,  11 => 1,);
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

{% block title %}Set-Attributi visualizzazione{% endblock %}

{% block corpo %}
<div class=\"span12\">
\t<h4>Set-Attributi</h4>
</div>
<section>
    <tr>
        <td align=\"right\">
            <input autocomplete=\"off\" id=\"cercaGruppo\" class=\"search order-search\" placeholder=\"Cerca per nome,cognome..\" style=\"width:210px; height:27px; margin-right:8px;\" value=\"\" type=\"text\">\t        \t\t\t    \t\t\t\t        \t\t\t            \t
            <a href=\"nuovocliente.html\" id=\"modal_addclient\" class=\"btn-flat primary\" role=\"button\" style=\"border-radius:2px;\">Ricerca</a>
            <a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=\"{{ path('AnuovoGruppo') }}\">+ Gruppo</a>
        </td>
    </tr>
</section>
<div class=\"t1\" id=\"boxTable\" >
    <table class=\"table table-hover\">
        <thead> 
            <tr>
                <th class=\"span2\">Id</th>
                <th class=\"span2\">Nome</th>
                <th class=\"span2\"></th>
            </tr>
        </thead>
        <tbody>
        {%for item in set%}
            <tr class=\"first\">
                <td> {{item.id}} </td>
                <td>{{item.nome}}</td>\t\t\t\t\t\t        
                <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href={{ path('ASetAttributi', {'idSetAttributi': item.id})}}>Apri</a></td>
            </tr>
        {%endfor%}
        </tbody>
    </table>
</div>
{% endblock %}", "AppBundle:Amministratore:gruppi.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Amministratore/gruppi.html.twig");
    }
}
