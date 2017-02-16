<?php

/* AppBundle:Prinkino:clienti.php.twig */
class __TwigTemplate_7e4bc5e03f81f8f702e33d699ca7a10362d11752db5f014826a49091942db294 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.php.twig", "AppBundle:Prinkino:clienti.php.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'corpo' => array($this, 'block_corpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.php.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de9629bb1b936760106a87f3866bbf81fbd11e146d5df7d28382cd6e49a2c8d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de9629bb1b936760106a87f3866bbf81fbd11e146d5df7d28382cd6e49a2c8d8->enter($__internal_de9629bb1b936760106a87f3866bbf81fbd11e146d5df7d28382cd6e49a2c8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Prinkino:clienti.php.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de9629bb1b936760106a87f3866bbf81fbd11e146d5df7d28382cd6e49a2c8d8->leave($__internal_de9629bb1b936760106a87f3866bbf81fbd11e146d5df7d28382cd6e49a2c8d8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_70289141038f61e7a57af48ca15ab032eab8419b1cc2870574d3d1726bb4e674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70289141038f61e7a57af48ca15ab032eab8419b1cc2870574d3d1726bb4e674->enter($__internal_70289141038f61e7a57af48ca15ab032eab8419b1cc2870574d3d1726bb4e674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Rubrica Clienti";
        
        $__internal_70289141038f61e7a57af48ca15ab032eab8419b1cc2870574d3d1726bb4e674->leave($__internal_70289141038f61e7a57af48ca15ab032eab8419b1cc2870574d3d1726bb4e674_prof);

    }

    // line 5
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_7c5a35618b4a2382d1dd7c899e427e967cdada59e8c178bc0fe4a9ed1fe6a991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c5a35618b4a2382d1dd7c899e427e967cdada59e8c178bc0fe4a9ed1fe6a991->enter($__internal_7c5a35618b4a2382d1dd7c899e427e967cdada59e8c178bc0fe4a9ed1fe6a991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

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
                                <input name=\"criterio\" autocomplete=\"off\" id=\"searchField\" class=\"search order-search\" placeholder=\"Filtra per nome,cognome..\" style=\"width:210px; height:26px; margin-right:8px;\" value=\"\" type=\"text\">
                                <input type=\"submit\" class=\"btn-flat success\" onclick=\"location.href='importer-clients';\" style=\"border-radius:2px; cursor:pointer; margin-right:8px;\">
                            </form>
                            <a href=\"nuovocliente\" id=\"modal_addclient\" class=\"btn-flat primary\" role=\"button\" style=\"border-radius:2px;\">+ Cliente</a>
\t\t       </td>
                    </tr>
                    <tr valign=\"top\">
    \t\t\t<td style=\"width:50%;\">
                            <div class=\"row-fluid\" id=\"boxTable\">
                                <table class=\"table table-hover\">
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
        
        $__internal_7c5a35618b4a2382d1dd7c899e427e967cdada59e8c178bc0fe4a9ed1fe6a991->leave($__internal_7c5a35618b4a2382d1dd7c899e427e967cdada59e8c178bc0fe4a9ed1fe6a991_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Prinkino:clienti.php.twig";
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
        return new Twig_Source("{% extends \"::base.php.twig\" %}

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
                                <input name=\"criterio\" autocomplete=\"off\" id=\"searchField\" class=\"search order-search\" placeholder=\"Filtra per nome,cognome..\" style=\"width:210px; height:26px; margin-right:8px;\" value=\"\" type=\"text\">
                                <input type=\"submit\" class=\"btn-flat success\" onclick=\"location.href='importer-clients';\" style=\"border-radius:2px; cursor:pointer; margin-right:8px;\">
                            </form>
                            <a href=\"nuovocliente\" id=\"modal_addclient\" class=\"btn-flat primary\" role=\"button\" style=\"border-radius:2px;\">+ Cliente</a>
\t\t       </td>
                    </tr>
                    <tr valign=\"top\">
    \t\t\t<td style=\"width:50%;\">
                            <div class=\"row-fluid\" id=\"boxTable\">
                                <table class=\"table table-hover\">
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
{% endblock %}", "AppBundle:Prinkino:clienti.php.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Prinkino/clienti.php.twig");
    }
}
