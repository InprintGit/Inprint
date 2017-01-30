<?php

/* AppBundle:ResponsabileProduzione:ordine.html.twig */
class __TwigTemplate_57aa22d8d4efd21cf20b497a39ef729ed16b7eb168fd60ccfd5c5b643dff8827 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:ResponsabileProduzione:SPbase.html.twig", "AppBundle:ResponsabileProduzione:ordine.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'corpo' => array($this, 'block_corpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:ResponsabileProduzione:SPbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ad7d5afed5e8eabab721482b5f9dacb6cb91937829c1f3a3d50a36a5b154c4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ad7d5afed5e8eabab721482b5f9dacb6cb91937829c1f3a3d50a36a5b154c4f->enter($__internal_2ad7d5afed5e8eabab721482b5f9dacb6cb91937829c1f3a3d50a36a5b154c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:ResponsabileProduzione:ordine.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ad7d5afed5e8eabab721482b5f9dacb6cb91937829c1f3a3d50a36a5b154c4f->leave($__internal_2ad7d5afed5e8eabab721482b5f9dacb6cb91937829c1f3a3d50a36a5b154c4f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a2eaffb5e6898645712acadb759832f232791d6e37b9200928359e1d517da40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a2eaffb5e6898645712acadb759832f232791d6e37b9200928359e1d517da40->enter($__internal_8a2eaffb5e6898645712acadb759832f232791d6e37b9200928359e1d517da40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ordine";
        
        $__internal_8a2eaffb5e6898645712acadb759832f232791d6e37b9200928359e1d517da40->leave($__internal_8a2eaffb5e6898645712acadb759832f232791d6e37b9200928359e1d517da40_prof);

    }

    // line 3
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_5b94f282df85b5c256be6dbe5568c6ab214e6128f00294a17d8f0001bd5e4fdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b94f282df85b5c256be6dbe5568c6ab214e6128f00294a17d8f0001bd5e4fdd->enter($__internal_5b94f282df85b5c256be6dbe5568c6ab214e6128f00294a17d8f0001bd5e4fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 4
        echo "<div id=\"esterno\">
    <div class=\"container-fluid\" style=\"\">
        <script>var premiumAccess = 2;</script><script>var type=0; var csid=1750327;</script>
            <div style=\"margin-top:20px;\" align=\"center\">
                <h4 style=\"font-weight: 300;\">Dettagli ordine</h4>
                <h3 style=\"font-weight: 300; margin-top:10px;\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ordine"]) ? $context["ordine"] : $this->getContext($context, "ordine")), "codiceordine", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ordine"]) ? $context["ordine"] : $this->getContext($context, "ordine")), "nome", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ordine"]) ? $context["ordine"] : $this->getContext($context, "ordine")), "cognome", array()), "html", null, true);
        echo "</h3>
            </div>
            <table class=\"table \">
                <thead>
                    <tr>
                        <th class=\"span2\">Data ordine</th>
                        <th class=\"span2\"><span class=\"line\"></span>Data Conclusione</th>
                        <th class=\"span2\"><span class=\"line\"></span>Stato</th>
                        <th class=\"span4\"><span class=\"line\"></span>Descrizione</th>
                        <th class=\"span1\"><span class=\"line\"></span>quantita'</th>
                    </tr>
                </thead>
                <tbody>
                
                    <tr class=\"first\" style=\"font-size:14px; cursor:pointer; \">
                        <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ordine"]) ? $context["ordine"] : $this->getContext($context, "ordine")), "data", array()), "html", null, true);
        echo "</td>
                        <td>";
        // line 25
        echo "<span class=\"label label-verde\">Prevista</span></td>
                        <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ordine"]) ? $context["ordine"] : $this->getContext($context, "ordine")), "stato", array()), "html", null, true);
        echo "</td>
                        <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ordine"]) ? $context["ordine"] : $this->getContext($context, "ordine")), "descrizione", array()), "html", null, true);
        echo "</td>
                        <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ordine"]) ? $context["ordine"] : $this->getContext($context, "ordine")), "quantita", array()), "html", null, true);
        echo "</td>
                    </tr>\t\t\t\t    \t\t\t
                    <tr class=\"dettagli\"><td colspan=\"5\"> Eventuali dettagli della lavorazione del prodotto</td></tr>
              
                </tbody>
            </table>
            <div style=\"margin-top:15px;\" align=\"right\">
                <a class=\"btn-flat success dettagli\" id=\"b1\" style=\"border-radius:2px; cursor:pointer;\"> Modifica Fasi di lavorazione</a>
                <a class=\"btn-flat success alt\" id=\"b3\" style=\"border-radius:2px; cursor:pointer;\" onclick=\"Mostra(2)\"> Visualizza Fasi</a>
                <a class=\"btn-flat success dettagli\" id=\"b2\" style=\"border-radius:2px; cursor:pointer;\" onclick=\"Mostra(1)\"> Visualizza Eventi</a>
            </div>
        <table>
            <tbody>
                <tr valign=\"top\">
                    <td style=\"width: 1400px;\" width=\"100%\"><div class=\"row-fluid\" id=\"boxTable\" style=\"margin-top:30px;\">
                        <table class=\"table table-hover\" id=\"t1\" >
                            <caption><h4>Eventi di lavorazione<h4></caption>
                            <thead>
                                <tr>
                                    <th class=\"span2\">Fase</th>
                                    <th class=\"span2\"><span class=\"line\"></span>Assegnazione</th>
                                    <th class=\"span4\"><span class=\"line\"></span>Presa in carico</th>
                                    <th class=\"span4\"><span class=\"line\"></span>Conclusione</th>
                                </tr>
                            </thead>
                            <tbody>
                            ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fasi"]) ? $context["fasi"] : $this->getContext($context, "fasi")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 55
            echo "                                <tr style=\"font-size:14px; cursor:pointer; \">
                                    <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "fase", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "assegnazione", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "presaincarico", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "conclusione", array()), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                            </tbody>
                        </table>
                        <table class=\"table table-hover dettagli\" id=\"t2\" >
                            <caption> <h4>Fasi Lavorazione<h4> </caption>
                            <thead>
                                <tr>
                                    <th class=\"span2\">Fase</th>
                                    <th class=\"span2\"><span class=\"line\"></span>stato</th>
                                    <th class=\"span2\"><span class=\"line\"></span>Operatore</th>
                                </tr>
                            </thead>
                            <tbody>
                            ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fasi"]) ? $context["fasi"] : $this->getContext($context, "fasi")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 75
            echo "                                ";
            if (($this->getAttribute($context["item"], "presaincarico", array()) == null)) {
                // line 76
                echo "                                    ";
                $context["stato"] = "Assegnata";
                // line 77
                echo "                                ";
            } elseif (($this->getAttribute($context["item"], "conclusione", array()) == null)) {
                // line 78
                echo "                                    ";
                $context["stato"] = "Presa in carico";
                // line 79
                echo "                                ";
            } else {
                // line 80
                echo "                                    ";
                $context["stato"] = "Concluso";
                // line 81
                echo "                                ";
            }
            // line 82
            echo "                                <tr style=\"font-size:14px; cursor:pointer; \">
                                    <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "fase", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 84
            echo twig_escape_filter($this->env, (isset($context["stato"]) ? $context["stato"] : $this->getContext($context, "stato")), "html", null, true);
            echo "</td>
                                    <td>";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "operatore", array()), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                            </tbody>
                        </table>
                    </td> 
                </tr>
            </tbody> 
        </table>
    </div>\t    
</div>
";
        
        $__internal_5b94f282df85b5c256be6dbe5568c6ab214e6128f00294a17d8f0001bd5e4fdd->leave($__internal_5b94f282df85b5c256be6dbe5568c6ab214e6128f00294a17d8f0001bd5e4fdd_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:ResponsabileProduzione:ordine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 88,  204 => 85,  200 => 84,  196 => 83,  193 => 82,  190 => 81,  187 => 80,  184 => 79,  181 => 78,  178 => 77,  175 => 76,  172 => 75,  168 => 74,  154 => 62,  145 => 59,  141 => 58,  137 => 57,  133 => 56,  130 => 55,  126 => 54,  97 => 28,  93 => 27,  89 => 26,  86 => 25,  82 => 24,  60 => 9,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle:ResponsabileProduzione:SPbase.html.twig\" %}
{% block title %}Ordine{% endblock %}
{% block corpo %}
<div id=\"esterno\">
    <div class=\"container-fluid\" style=\"\">
        <script>var premiumAccess = 2;</script><script>var type=0; var csid=1750327;</script>
            <div style=\"margin-top:20px;\" align=\"center\">
                <h4 style=\"font-weight: 300;\">Dettagli ordine</h4>
                <h3 style=\"font-weight: 300; margin-top:10px;\">{{ordine.codiceordine}} - {{ordine.nome}} {{ordine.cognome}}</h3>
            </div>
            <table class=\"table \">
                <thead>
                    <tr>
                        <th class=\"span2\">Data ordine</th>
                        <th class=\"span2\"><span class=\"line\"></span>Data Conclusione</th>
                        <th class=\"span2\"><span class=\"line\"></span>Stato</th>
                        <th class=\"span4\"><span class=\"line\"></span>Descrizione</th>
                        <th class=\"span1\"><span class=\"line\"></span>quantita'</th>
                    </tr>
                </thead>
                <tbody>
                
                    <tr class=\"first\" style=\"font-size:14px; cursor:pointer; \">
                        <td>{{ordine.data}}</td>
                        <td>{# ordine.dataconclusione #}<span class=\"label label-verde\">Prevista</span></td>
                        <td>{{ordine.stato}}</td>
                        <td>{{ordine.descrizione}}</td>
                        <td>{{ordine.quantita}}</td>
                    </tr>\t\t\t\t    \t\t\t
                    <tr class=\"dettagli\"><td colspan=\"5\"> Eventuali dettagli della lavorazione del prodotto</td></tr>
              
                </tbody>
            </table>
            <div style=\"margin-top:15px;\" align=\"right\">
                <a class=\"btn-flat success dettagli\" id=\"b1\" style=\"border-radius:2px; cursor:pointer;\"> Modifica Fasi di lavorazione</a>
                <a class=\"btn-flat success alt\" id=\"b3\" style=\"border-radius:2px; cursor:pointer;\" onclick=\"Mostra(2)\"> Visualizza Fasi</a>
                <a class=\"btn-flat success dettagli\" id=\"b2\" style=\"border-radius:2px; cursor:pointer;\" onclick=\"Mostra(1)\"> Visualizza Eventi</a>
            </div>
        <table>
            <tbody>
                <tr valign=\"top\">
                    <td style=\"width: 1400px;\" width=\"100%\"><div class=\"row-fluid\" id=\"boxTable\" style=\"margin-top:30px;\">
                        <table class=\"table table-hover\" id=\"t1\" >
                            <caption><h4>Eventi di lavorazione<h4></caption>
                            <thead>
                                <tr>
                                    <th class=\"span2\">Fase</th>
                                    <th class=\"span2\"><span class=\"line\"></span>Assegnazione</th>
                                    <th class=\"span4\"><span class=\"line\"></span>Presa in carico</th>
                                    <th class=\"span4\"><span class=\"line\"></span>Conclusione</th>
                                </tr>
                            </thead>
                            <tbody>
                            {%for item in fasi%}
                                <tr style=\"font-size:14px; cursor:pointer; \">
                                    <td>{{item.fase}}</td>
                                    <td>{{item.assegnazione}}</td>
                                    <td>{{item.presaincarico}}</td>
                                    <td>{{item.conclusione}}</td>
                                </tr>
                            {%endfor%}
                            </tbody>
                        </table>
                        <table class=\"table table-hover dettagli\" id=\"t2\" >
                            <caption> <h4>Fasi Lavorazione<h4> </caption>
                            <thead>
                                <tr>
                                    <th class=\"span2\">Fase</th>
                                    <th class=\"span2\"><span class=\"line\"></span>stato</th>
                                    <th class=\"span2\"><span class=\"line\"></span>Operatore</th>
                                </tr>
                            </thead>
                            <tbody>
                            {%for item in fasi%}
                                {%if item.presaincarico==null%}
                                    {%set stato=\"Assegnata\"%}
                                {%elseif item.conclusione==null %}
                                    {%set stato=\"Presa in carico\"%}
                                {%else%}
                                    {% set stato=\"Concluso\"%}
                                {%endif%}
                                <tr style=\"font-size:14px; cursor:pointer; \">
                                    <td>{{item.fase}}</td>
                                    <td>{{stato}}</td>
                                    <td>{{item.operatore}}</td>
                                </tr>
                            {%endfor%}
                            </tbody>
                        </table>
                    </td> 
                </tr>
            </tbody> 
        </table>
    </div>\t    
</div>
{% endblock %}", "AppBundle:ResponsabileProduzione:ordine.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/ResponsabileProduzione/ordine.html.twig");
    }
}
