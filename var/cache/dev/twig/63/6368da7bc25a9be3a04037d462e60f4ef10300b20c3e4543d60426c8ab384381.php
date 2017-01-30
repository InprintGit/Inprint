<?php

/* AppBundle:Prinkino:ordini.html.twig */
class __TwigTemplate_700329e0c9390a97e0ab2c51979ce4e6c5de68bc9479d859f9cd5de049400ab1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Prinkino:ordini.html.twig", 1);
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
        $__internal_45c27789a1e9a9b95314d5bd555db2bb8db5945a81bfa78d2452142e2f4c6d1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45c27789a1e9a9b95314d5bd555db2bb8db5945a81bfa78d2452142e2f4c6d1f->enter($__internal_45c27789a1e9a9b95314d5bd555db2bb8db5945a81bfa78d2452142e2f4c6d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Prinkino:ordini.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45c27789a1e9a9b95314d5bd555db2bb8db5945a81bfa78d2452142e2f4c6d1f->leave($__internal_45c27789a1e9a9b95314d5bd555db2bb8db5945a81bfa78d2452142e2f4c6d1f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a37236b4a4f38a8e755107249cdf5e611b37dca8a89e2a7f457dd7516fbc0a06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a37236b4a4f38a8e755107249cdf5e611b37dca8a89e2a7f457dd7516fbc0a06->enter($__internal_a37236b4a4f38a8e755107249cdf5e611b37dca8a89e2a7f457dd7516fbc0a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Storico Ordini";
        
        $__internal_a37236b4a4f38a8e755107249cdf5e611b37dca8a89e2a7f457dd7516fbc0a06->leave($__internal_a37236b4a4f38a8e755107249cdf5e611b37dca8a89e2a7f457dd7516fbc0a06_prof);

    }

    // line 5
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_b0d124468526b26f3f285f945a3294884d93e99e9f87c15f95d85e708116924d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0d124468526b26f3f285f945a3294884d93e99e9f87c15f95d85e708116924d->enter($__internal_b0d124468526b26f3f285f945a3294884d93e99e9f87c15f95d85e708116924d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 6
        echo "
    <div class=\"table-wrapper orders-table section\">
        <div class=\"row-fluid head\">
            <div class=\"span12\">
    \t       <h4>Storico Ordini</h4>
            </div>
        </div>
        <div align=\"center\">
            <table>
                <tbody>
                    <tr>
                        <td align=\"right\">
                            <form method=\"post\" action=\"ordini\">
                                <input name=\"criterio\" autocomplete=\"off\" id=\"searchField\" class=\"search order-search\" placeholder=\"Filtra per nome del cliente\" style=\"width:210px; height:26px; margin-right:8px;\" value=\"\" type=\"text\">
                                <input type=\"submit\" class=\"btn-flat success\" onclick=\"location.href='importer-clients';\" style=\"border-radius:2px; cursor:pointer; margin-right:8px;\">
                            </form>
                            <a href=\"nuovoordine\" id=\"modal_addclient\" class=\"btn-flat primary\" role=\"button\" style=\"border-radius:2px;\">+ Ordine</a>
\t\t       </td>
                    </tr>
                    <tr valign=\"top\">
    \t\t\t<td style=\"width:50%;\">
                            <div class=\"row-fluid\" id=\"boxTable\">
                                <table class=\"table table-hover\">
                                    <thead>
                                        <tr>
                                            <th class=\"span3\">Cliente</th>
                                            <th class=\"span2\"><span class=\"line\"></span>Numero</th>
                                            <th class=\"span2\"><span class=\"line\"></span>Stato</th>
                                            <th class=\"span2\"><span class=\"line\"></span>Analizza</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ordini"]) ? $context["ordini"] : $this->getContext($context, "ordini")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 39
            echo "                                            <tr class=\"first\">
            \t\t\t\t\t<td style=\"cursor:pointer;\" >";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nome", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "cognome", array()), "html", null, true);
            echo "</td>
                                                <td style=\"cursor:pointer;\">";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "codice", array()), "html", null, true);
            echo "</td>
                                                <td style=\"cursor:pointer;\">";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "stato", array()), "html", null, true);
            echo "</td>
                                                <td style=\"cursor:pointer;\">
                                                    <a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ordine", array("idordine" => $this->getAttribute($context["item"], "codice", array()))), "html", null, true);
            echo "><i class=\"icon-zoom-in\"></i> Analizza</a>
                                                </td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                                    </tbody>
                                </table>
                            </div>
                        </td>
                    </tr>
            </table>
        </div>
    </div>
";
        
        $__internal_b0d124468526b26f3f285f945a3294884d93e99e9f87c15f95d85e708116924d->leave($__internal_b0d124468526b26f3f285f945a3294884d93e99e9f87c15f95d85e708116924d_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Prinkino:ordini.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 48,  109 => 44,  104 => 42,  100 => 41,  94 => 40,  91 => 39,  87 => 38,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}Storico Ordini{% endblock %}

{% block corpo %}

    <div class=\"table-wrapper orders-table section\">
        <div class=\"row-fluid head\">
            <div class=\"span12\">
    \t       <h4>Storico Ordini</h4>
            </div>
        </div>
        <div align=\"center\">
            <table>
                <tbody>
                    <tr>
                        <td align=\"right\">
                            <form method=\"post\" action=\"ordini\">
                                <input name=\"criterio\" autocomplete=\"off\" id=\"searchField\" class=\"search order-search\" placeholder=\"Filtra per nome del cliente\" style=\"width:210px; height:26px; margin-right:8px;\" value=\"\" type=\"text\">
                                <input type=\"submit\" class=\"btn-flat success\" onclick=\"location.href='importer-clients';\" style=\"border-radius:2px; cursor:pointer; margin-right:8px;\">
                            </form>
                            <a href=\"nuovoordine\" id=\"modal_addclient\" class=\"btn-flat primary\" role=\"button\" style=\"border-radius:2px;\">+ Ordine</a>
\t\t       </td>
                    </tr>
                    <tr valign=\"top\">
    \t\t\t<td style=\"width:50%;\">
                            <div class=\"row-fluid\" id=\"boxTable\">
                                <table class=\"table table-hover\">
                                    <thead>
                                        <tr>
                                            <th class=\"span3\">Cliente</th>
                                            <th class=\"span2\"><span class=\"line\"></span>Numero</th>
                                            <th class=\"span2\"><span class=\"line\"></span>Stato</th>
                                            <th class=\"span2\"><span class=\"line\"></span>Analizza</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {%for item in ordini%}
                                            <tr class=\"first\">
            \t\t\t\t\t<td style=\"cursor:pointer;\" >{{item.nome}} {{item.cognome}}</td>
                                                <td style=\"cursor:pointer;\">{{item.codice}}</td>
                                                <td style=\"cursor:pointer;\">{{item.stato}}</td>
                                                <td style=\"cursor:pointer;\">
                                                    <a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href={{ path('ordine', {'idordine': item.codice})}}><i class=\"icon-zoom-in\"></i> Analizza</a>
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
{% endblock %}", "AppBundle:Prinkino:ordini.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Prinkino/ordini.html.twig");
    }
}
