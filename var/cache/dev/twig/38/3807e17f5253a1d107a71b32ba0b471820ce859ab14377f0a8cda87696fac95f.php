<?php

/* AppBundle:Amministratore:attributo.html.twig */
class __TwigTemplate_c9fe862e8ebe143c3e47c3e0ddfd16e132d5d2e536d38e235ae6dd3c1f031d9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Amministratore:Abase.html.twig", "AppBundle:Amministratore:attributo.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
            'corpo' => array($this, 'block_corpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:Amministratore:Abase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96cea172e5ca379120ca2543a04e4a2dd4ccbe6cf20a6aab3990dcfee6d92a8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96cea172e5ca379120ca2543a04e4a2dd4ccbe6cf20a6aab3990dcfee6d92a8d->enter($__internal_96cea172e5ca379120ca2543a04e4a2dd4ccbe6cf20a6aab3990dcfee6d92a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Amministratore:attributo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96cea172e5ca379120ca2543a04e4a2dd4ccbe6cf20a6aab3990dcfee6d92a8d->leave($__internal_96cea172e5ca379120ca2543a04e4a2dd4ccbe6cf20a6aab3990dcfee6d92a8d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f7e8f2fa1a6c973fcd90e82ec1c6a36fcc8efe84bcd3fea4a6b46a7ebc2c10f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f7e8f2fa1a6c973fcd90e82ec1c6a36fcc8efe84bcd3fea4a6b46a7ebc2c10f->enter($__internal_0f7e8f2fa1a6c973fcd90e82ec1c6a36fcc8efe84bcd3fea4a6b46a7ebc2c10f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Attributo";
        
        $__internal_0f7e8f2fa1a6c973fcd90e82ec1c6a36fcc8efe84bcd3fea4a6b46a7ebc2c10f->leave($__internal_0f7e8f2fa1a6c973fcd90e82ec1c6a36fcc8efe84bcd3fea4a6b46a7ebc2c10f_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dfd40d68a2eb1a643d5db084ed0c2d8eeaf37fea5789ba083a6f71db6f929287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd40d68a2eb1a643d5db084ed0c2d8eeaf37fea5789ba083a6f71db6f929287->enter($__internal_dfd40d68a2eb1a643d5db084ed0c2d8eeaf37fea5789ba083a6f71db6f929287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/js/attributo.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_dfd40d68a2eb1a643d5db084ed0c2d8eeaf37fea5789ba083a6f71db6f929287->leave($__internal_dfd40d68a2eb1a643d5db084ed0c2d8eeaf37fea5789ba083a6f71db6f929287_prof);

    }

    // line 11
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_80578e7fdb10d6dff915382eb8aea44462131ab78c08a11a7a6ae8e13f38bf53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80578e7fdb10d6dff915382eb8aea44462131ab78c08a11a7a6ae8e13f38bf53->enter($__internal_80578e7fdb10d6dff915382eb8aea44462131ab78c08a11a7a6ae8e13f38bf53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 12
        echo "
<div id=\"content\" class=\"container-fluid\" style=\"\">
    <div style=\"margin-top:20px;\" align=\"center\">
        <h3 style=\"font-weight: 300; margin-top:10px;\">Attributo - ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["attributo"]) ? $context["attributo"] : $this->getContext($context, "attributo")), "id", array()), "html", null, true);
        echo "</h3>
    </div>
    <table class=\"table table-hover\">
        <caption><h4><h4>
            <thead>
                <tr>
                    <th class=\"span1\">Nome</th>
                    <th class=\"span1\"><span class=\"line\"></span>Numero set</th>
                </tr>
            </thead>
            <tbody>
                <tr class=\"first\" style=\"font-size:14px; cursor:pointer; \">
                    <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["attributo"]) ? $context["attributo"] : $this->getContext($context, "attributo")), "nome", array()), "html", null, true);
        echo "</td>
                    <td id=\"numSet\">";
        // line 28
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["setattributi"]) ? $context["setattributi"] : $this->getContext($context, "setattributi"))), "html", null, true);
        echo "</td>\t\t\t\t\t\t\t\t\t\t\t\t\t
                </tr>
            </tbody>
    </table>
    <table>
        <tbody>
            <tr valign=\"top\">
                <td style=\"width: 1400px;\" width=\"100%\">
                    <table class=\"table table-hover\">
                        <caption><h4>Valori<h4></caption>
                        <thead>
                            <tr>
                                <th class=\"span4\">Id</th>
                                <th class=\"span4\"><span class=\"line\"></span>Nome</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["valori"]) ? $context["valori"] : $this->getContext($context, "valori")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 47
            echo "                            <tr class=\"first\" style=\"font-size:14px; cursor:pointer; \">
                                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nome", array()), "html", null, true);
            echo "</td>\t\t\t\t\t\t\t\t\t\t\t\t
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                        </tbody>
                    </table>
                    <table>
                        <tbody>
                            <tr valign=\"top\">
                                <td style=\"width: 1400px;\" width=\"100%\"><div class=\"row-fluid\" id=\"boxTable\" style=\"margin-top:30px;\">
                                    <table class=\"table table-hover\">
                                        <caption><h4>Set attributi<h4></caption>
                                        <thead>
                                            <tr>
                                                <th class=\"span4\">Id</th>
                                                <th class=\"span4\"><span class=\"line\"></span>Nome</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["setattributi"]) ? $context["setattributi"] : $this->getContext($context, "setattributi")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 69
            echo "                                            <tr class=\"first\" style=\"font-size:14px; cursor:pointer; \">
                                                <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "</td>
                                                <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nome", array()), "html", null, true);
            echo "</td>
                                                <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ASetAttributi", array("idSetAttributi" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo ">Apri</a></td>\t\t\t\t\t\t\t\t\t\t\t\t
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "\t\t\t\t\t\t\t        \t\t
                                        </tbody>
                                    </table>
                                    <div style=\"margin-top:15px;\" align=\"right\">
                                        <a class=\"btn-flat success\" onclick=\"elimina(";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["attributo"]) ? $context["attributo"] : $this->getContext($context, "attributo")), "id", array()), "html", null, true);
        echo ");\" style=\"border-radius:2px; cursor:pointer;\"><i class=\"icon-mail-forward\"></i>Elimina</a>
                                        <a class=\"btn-flat success\" href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AModificaAttributo", array("idAttributo" => $this->getAttribute((isset($context["attributo"]) ? $context["attributo"] : $this->getContext($context, "attributo")), "id", array()))), "html", null, true);
        echo "\" style=\"border-radius:2px; cursor:pointer;\"><i class=\"icon-mail-forward\"></i> Modifica </a>
                                    </div>
                                </td> 
                            </tr>
                        </tbody> 
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</div>\t    
";
        
        $__internal_80578e7fdb10d6dff915382eb8aea44462131ab78c08a11a7a6ae8e13f38bf53->leave($__internal_80578e7fdb10d6dff915382eb8aea44462131ab78c08a11a7a6ae8e13f38bf53_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Amministratore:attributo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 79,  188 => 78,  182 => 74,  173 => 72,  169 => 71,  165 => 70,  162 => 69,  158 => 68,  140 => 52,  131 => 49,  127 => 48,  124 => 47,  120 => 46,  99 => 28,  95 => 27,  80 => 15,  75 => 12,  69 => 11,  60 => 8,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
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

{% block title %}Attributo{% endblock %}

{% block javascripts %}
    {{parent()}}

    <script src=\"{{ asset(\"Amministratore/js/attributo.js\") }}\"></script>
{% endblock %}

{% block corpo %}

<div id=\"content\" class=\"container-fluid\" style=\"\">
    <div style=\"margin-top:20px;\" align=\"center\">
        <h3 style=\"font-weight: 300; margin-top:10px;\">Attributo - {{attributo.id}}</h3>
    </div>
    <table class=\"table table-hover\">
        <caption><h4><h4>
            <thead>
                <tr>
                    <th class=\"span1\">Nome</th>
                    <th class=\"span1\"><span class=\"line\"></span>Numero set</th>
                </tr>
            </thead>
            <tbody>
                <tr class=\"first\" style=\"font-size:14px; cursor:pointer; \">
                    <td>{{attributo.nome}}</td>
                    <td id=\"numSet\">{{setattributi|length}}</td>\t\t\t\t\t\t\t\t\t\t\t\t\t
                </tr>
            </tbody>
    </table>
    <table>
        <tbody>
            <tr valign=\"top\">
                <td style=\"width: 1400px;\" width=\"100%\">
                    <table class=\"table table-hover\">
                        <caption><h4>Valori<h4></caption>
                        <thead>
                            <tr>
                                <th class=\"span4\">Id</th>
                                <th class=\"span4\"><span class=\"line\"></span>Nome</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        {%for item in valori%}
                            <tr class=\"first\" style=\"font-size:14px; cursor:pointer; \">
                                <td>{{item.id}}</td>
                                <td>{{item.nome}}</td>\t\t\t\t\t\t\t\t\t\t\t\t
                            </tr>
                        {%endfor%}
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                            <tr valign=\"top\">
                                <td style=\"width: 1400px;\" width=\"100%\"><div class=\"row-fluid\" id=\"boxTable\" style=\"margin-top:30px;\">
                                    <table class=\"table table-hover\">
                                        <caption><h4>Set attributi<h4></caption>
                                        <thead>
                                            <tr>
                                                <th class=\"span4\">Id</th>
                                                <th class=\"span4\"><span class=\"line\"></span>Nome</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        {%for item in setattributi%}
                                            <tr class=\"first\" style=\"font-size:14px; cursor:pointer; \">
                                                <td>{{item.id}}</td>
                                                <td>{{item.nome}}</td>
                                                <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href={{ path('ASetAttributi', {'idSetAttributi': item.id})}}>Apri</a></td>\t\t\t\t\t\t\t\t\t\t\t\t
                                            </tr>
                                        {%endfor%}\t\t\t\t\t\t\t        \t\t
                                        </tbody>
                                    </table>
                                    <div style=\"margin-top:15px;\" align=\"right\">
                                        <a class=\"btn-flat success\" onclick=\"elimina({{attributo.id}});\" style=\"border-radius:2px; cursor:pointer;\"><i class=\"icon-mail-forward\"></i>Elimina</a>
                                        <a class=\"btn-flat success\" href=\"{{ path('AModificaAttributo', {'idAttributo': attributo.id})}}\" style=\"border-radius:2px; cursor:pointer;\"><i class=\"icon-mail-forward\"></i> Modifica </a>
                                    </div>
                                </td> 
                            </tr>
                        </tbody> 
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</div>\t    
{% endblock %}", "AppBundle:Amministratore:attributo.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Amministratore/attributo.html.twig");
    }
}
