<?php

/* AppBundle:Prinkino:clienti.html.twig */
class __TwigTemplate_c44b0b9182519493760a06f4dfee41c1e703854beae457e7f5d5d07bfafd335e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Prinkino:clienti.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'corpo' => array($this, 'block_corpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3867861e109b2c3ba1b0854d43d2ff635834e2241c7765768a7e490ca973b94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3867861e109b2c3ba1b0854d43d2ff635834e2241c7765768a7e490ca973b94->enter($__internal_c3867861e109b2c3ba1b0854d43d2ff635834e2241c7765768a7e490ca973b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Prinkino:clienti.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3867861e109b2c3ba1b0854d43d2ff635834e2241c7765768a7e490ca973b94->leave($__internal_c3867861e109b2c3ba1b0854d43d2ff635834e2241c7765768a7e490ca973b94_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c66b28f88fcd7d83032858a07fe49260ccf50b12a68032a7cc513855abe3870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c66b28f88fcd7d83032858a07fe49260ccf50b12a68032a7cc513855abe3870->enter($__internal_1c66b28f88fcd7d83032858a07fe49260ccf50b12a68032a7cc513855abe3870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Rubrica Clienti";
        
        $__internal_1c66b28f88fcd7d83032858a07fe49260ccf50b12a68032a7cc513855abe3870->leave($__internal_1c66b28f88fcd7d83032858a07fe49260ccf50b12a68032a7cc513855abe3870_prof);

    }

    // line 5
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_40af8099fb297c1f9202566ba9911b3a8d2914e511434b66892aa65dc9cc8dd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40af8099fb297c1f9202566ba9911b3a8d2914e511434b66892aa65dc9cc8dd3->enter($__internal_40af8099fb297c1f9202566ba9911b3a8d2914e511434b66892aa65dc9cc8dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 6
        echo "
    <div class=\"table-wrapper orders-table section\">
        <div class=\"row-fluid head\">
            <div class=\"span12\">
    \t       <h4>Rubrica Clienti</h4>
            </div>
        </div>
        <div align=\"center\">
            <table>
                <tbody>
                    <tr>
                        <td align=\"right\">
                            <form method=\"post\" action=\"clienti\">
                                <input id=\"cerca\" name=\"criterio\" autocomplete=\"off\"  class=\"search order-search\" placeholder=\"Filtra per nome,cognome..\" style=\"width:210px; height:26px; margin-right:8px;\" value=\"\" type=\"text\">
                                <input type=\"submit\" class=\"btn-flat success\" onclick=\"location.href='importer-clients';\" style=\"border-radius:2px; cursor:pointer; margin-right:8px;\">
                            </form>
                            <a href=\"nuovocliente\" id=\"modal_addclient\" class=\"btn-flat primary\" role=\"button\" style=\"border-radius:2px;\">+ Cliente</a>
\t\t       </td>
                    </tr>
                    <tr valign=\"top\">
    \t\t\t<td style=\"width:50%;\">
                            <div class=\"row-fluid\" id=\"boxTable\" name=\"\"boxTable\"\">
                                <table id=\"tabella\" class=\"table table-hover\">
                                    <thead>
                                        <tr>
                                            <th class=\"span3\">Nome</th>
                                            <th class=\"span2\"><span class=\"line\"></span>Codice Cliente</th>
                                            <th class=\"span2\"><span class=\"line\"></span>Codice Fiscale</th>
                                            <th class=\"span2\"><span class=\"line\"></span>Mail</th>
                                            <th class=\"span2\"><span class=\"line\"></span>Ordini effettuati</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clienti"]) ? $context["clienti"] : $this->getContext($context, "clienti")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 40
            echo "                                            <tr class=\"first\">
            \t\t\t\t\t<td style=\"cursor:pointer;\" >";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nome", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "cognome", array()), "html", null, true);
            echo "</td>
                                                <td style=\"cursor:pointer;\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "codicecliente", array()), "html", null, true);
            echo "</td>
                                                <td style=\"cursor:pointer;\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "codiceFiscale", array()), "html", null, true);
            echo "</td>
                                                <td style=\"cursor:pointer;\" >";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "mail", array()), "html", null, true);
            echo "</td>
                                                <td style=\"cursor:pointer;\">
                                                    <a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cliente", array("idcliente" => $this->getAttribute($context["item"], "codicecliente", array()))), "html", null, true);
            echo "><i class=\"icon-zoom-in\"></i> Analizza</a>
                                                </td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                                    </tbody>
                                </table>
                            </div>
                        </td>
                    </tr>
            </table>
        </div>
    </div>
";
        
        $__internal_40af8099fb297c1f9202566ba9911b3a8d2914e511434b66892aa65dc9cc8dd3->leave($__internal_40af8099fb297c1f9202566ba9911b3a8d2914e511434b66892aa65dc9cc8dd3_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Prinkino:clienti.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 50,  114 => 46,  109 => 44,  105 => 43,  101 => 42,  95 => 41,  92 => 40,  88 => 39,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}Rubrica Clienti{% endblock %}

{% block corpo %}

    <div class=\"table-wrapper orders-table section\">
        <div class=\"row-fluid head\">
            <div class=\"span12\">
    \t       <h4>Rubrica Clienti</h4>
            </div>
        </div>
        <div align=\"center\">
            <table>
                <tbody>
                    <tr>
                        <td align=\"right\">
                            <form method=\"post\" action=\"clienti\">
                                <input id=\"cerca\" name=\"criterio\" autocomplete=\"off\"  class=\"search order-search\" placeholder=\"Filtra per nome,cognome..\" style=\"width:210px; height:26px; margin-right:8px;\" value=\"\" type=\"text\">
                                <input type=\"submit\" class=\"btn-flat success\" onclick=\"location.href='importer-clients';\" style=\"border-radius:2px; cursor:pointer; margin-right:8px;\">
                            </form>
                            <a href=\"nuovocliente\" id=\"modal_addclient\" class=\"btn-flat primary\" role=\"button\" style=\"border-radius:2px;\">+ Cliente</a>
\t\t       </td>
                    </tr>
                    <tr valign=\"top\">
    \t\t\t<td style=\"width:50%;\">
                            <div class=\"row-fluid\" id=\"boxTable\" name=\"\"boxTable\"\">
                                <table id=\"tabella\" class=\"table table-hover\">
                                    <thead>
                                        <tr>
                                            <th class=\"span3\">Nome</th>
                                            <th class=\"span2\"><span class=\"line\"></span>Codice Cliente</th>
                                            <th class=\"span2\"><span class=\"line\"></span>Codice Fiscale</th>
                                            <th class=\"span2\"><span class=\"line\"></span>Mail</th>
                                            <th class=\"span2\"><span class=\"line\"></span>Ordini effettuati</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {%for item in clienti%}
                                            <tr class=\"first\">
            \t\t\t\t\t<td style=\"cursor:pointer;\" >{{item.nome}} {{item.cognome}}</td>
                                                <td style=\"cursor:pointer;\">{{item.codicecliente}}</td>
                                                <td style=\"cursor:pointer;\">{{item.codiceFiscale}}</td>
                                                <td style=\"cursor:pointer;\" >{{item.mail}}</td>
                                                <td style=\"cursor:pointer;\">
                                                    <a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href={{ path('cliente', {'idcliente': item.codicecliente})}}><i class=\"icon-zoom-in\"></i> Analizza</a>
                                                </td>
                                            </tr>
                                        {%endfor%}
                                    </tbody>
                                </table>
                            </div>
                        </td>
                    </tr>
            </table>
        </div>
    </div>
{% endblock %}", "AppBundle:Prinkino:clienti.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Prinkino/clienti.html.twig");
    }
}
