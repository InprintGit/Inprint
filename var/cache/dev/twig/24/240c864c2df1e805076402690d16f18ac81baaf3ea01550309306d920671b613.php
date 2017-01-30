<?php

/* AppBundle:Prinkino:cliente.html.twig */
class __TwigTemplate_6f569d506116929a9f3b63ed05a5e6b54efc758da60109aebb6a2f407cedde6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Prinkino:cliente.html.twig", 1);
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
        $__internal_f1eae5bd68c20aea022da95c768cd63384d8c05d01367022537f913ce5c4b1e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1eae5bd68c20aea022da95c768cd63384d8c05d01367022537f913ce5c4b1e4->enter($__internal_f1eae5bd68c20aea022da95c768cd63384d8c05d01367022537f913ce5c4b1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Prinkino:cliente.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1eae5bd68c20aea022da95c768cd63384d8c05d01367022537f913ce5c4b1e4->leave($__internal_f1eae5bd68c20aea022da95c768cd63384d8c05d01367022537f913ce5c4b1e4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_de959f98fcffc811812c66ab9bfe16c72127c72a937d353cb262547610210cdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de959f98fcffc811812c66ab9bfe16c72127c72a937d353cb262547610210cdf->enter($__internal_de959f98fcffc811812c66ab9bfe16c72127c72a937d353cb262547610210cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Analisi Cliente";
        
        $__internal_de959f98fcffc811812c66ab9bfe16c72127c72a937d353cb262547610210cdf->leave($__internal_de959f98fcffc811812c66ab9bfe16c72127c72a937d353cb262547610210cdf_prof);

    }

    // line 5
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_5550e3ca9866696120ffd67344b4fcd7fa6e28561f2768d0b7b7e28b80f8f8cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5550e3ca9866696120ffd67344b4fcd7fa6e28561f2768d0b7b7e28b80f8f8cc->enter($__internal_5550e3ca9866696120ffd67344b4fcd7fa6e28561f2768d0b7b7e28b80f8f8cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 6
        echo "
    <div class=\"container-fluid\" style=\"\"><script>var premiumAccess = 2;</script><script>var type=0; var csid=1750327;</script>
        <div style=\"margin-top:20px;\" align=\"center\">
            <h4 style=\"font-weight: 300;\">Analisi cliente</h4>
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clienti"]) ? $context["clienti"] : $this->getContext($context, "clienti")));
        foreach ($context['_seq'] as $context["_key"] => $context["cliente"]) {
            // line 11
            echo "            <h3 style=\"font-weight: 300; margin-top:10px;\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "nome", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "cognome", array()), "html", null, true);
            echo "</h3>
        </div>
        <table class=\"table \">
            <caption><h4>Dati del cliente<h4></caption>
            <thead>
                <tr>
                    <th class=\"span2\">Data Nascita</th>
                    <th class=\"span2\"><span class=\"line\"></span>Codice cliente </th>
                    <th class=\"span2\"><span class=\"line\"></span>Codice Fiscale</th>
                    <th class=\"span4\"><span class=\"line\"></span>Indirizzo</th>
                    <th class=\"span2\"><span class=\"line\"></span>Citta'</th>
                    <th class=\"span3\"><span class=\"line\"></span>telefono</th>
                    <th class=\"span3\"><span class=\"line\"></span>Mail</th>
                    <th class=\"span3\"><span class=\"line\"></span>fax</th>
                </tr>
            </thead>
            <tbody>
                <tr class=\"first\" style=\"font-size:14px; cursor:pointer; \">
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cliente"], "dataNascita", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "codicecliente", array()), "html", null, true);
            echo "</td> 
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "codiceFiscale", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "via", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "numeroCivico", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "citta", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "telefono", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "mail", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "fax", array()), "html", null, true);
            echo "</td>
                </tr>
            </tbody>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cliente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </table>
        <div style=\"margin-top:15px;\" align=\"right\">
            <a class=\"btn-flat success\" href=";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuovoordine", array("idcliente" => (isset($context["idcliente"]) ? $context["idcliente"] : $this->getContext($context, "idcliente")))), "html", null, true);
        echo " style=\"border-radius:2px; cursor:pointer;\"><i class=\"icon-mail-forward\"></i> Aggiungi ordine</a>
            <a class=\"btn-flat success\" href=\"\" style=\"border-radius:2px; cursor:pointer;\"><i class=\"icon-mail-forward\"></i> Modifica dati</a>
        </div>
        <table>
            <tbody>
                <tr valign=\"top\">
                    <td style=\"width: 1400px;\" width=\"100%\"><div class=\"row-fluid\" id=\"boxTable\" style=\"margin-top:30px;\">
                        <table class=\"table table-hover\">
                            <caption><h4>Ordini effettuati<h4></caption>
                            <thead>
                                <tr>
                                    <th class=\"span2\">Data ordine</th>
                                    <th class=\"span2\"><span class=\"line\"></span>Grafica</th>
                                    <th class=\"span2\"><span class=\"line\"></span>Stato</th>
                                    <th class=\"span4\"><span class=\"line\"></span>Codice Articolo</th>
                                    <th class=\"span1\"><span class=\"line\"></span>Codice Ordine</th>
                                    <th class=\"span3\"><span class=\"line\"></span>Studio Grafico</th>
                                    <th class=\"span3\"><span class=\"line\"></span>Sito di produzione</th>
                                </tr>
                            </thead>
                            <tbody>
                            ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ordini"]) ? $context["ordini"] : $this->getContext($context, "ordini")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo " 
                                <tr class=\"first\" style=\"font-size:14px; cursor:pointer; \">
                                    <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "data", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                                    <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("immagine", array("idgrafica" => $this->getAttribute($context["item"], "idgrafica", array()), "idcliente" => (isset($context["idcliente"]) ? $context["idcliente"] : $this->getContext($context, "idcliente")))), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "idgrafica", array()), "html", null, true);
            echo "</a></td>
                                    <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "stato", array()), "html", null, true);
            echo "</td>
                                    <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articolo2", array("idarticolo" => $this->getAttribute($context["item"], "articolo", array()), "idcliente" => (isset($context["idcliente"]) ? $context["idcliente"] : $this->getContext($context, "idcliente")))), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "articolo", array()), "html", null, true);
            echo "</a></td>
                                    <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ordine", array("idordine" => $this->getAttribute($context["item"], "codiceordine", array()))), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "codiceordine", array()), "html", null, true);
            echo "</a></td>
                                    <td> ";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "studiografico", array()), "html", null, true);
            echo "</td>
                                    <td><span > ";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "sitoproduzione", array()), "html", null, true);
            echo "</span></td>
                                </tr>\t
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "\t\t\t\t\t\t    \t\t\t
                            </tbody>
                        </table>
                    </td> 
                </tr>
            </tbody> 
        </table>
    </div>
";
        
        $__internal_5550e3ca9866696120ffd67344b4fcd7fa6e28561f2768d0b7b7e28b80f8f8cc->leave($__internal_5550e3ca9866696120ffd67344b4fcd7fa6e28561f2768d0b7b7e28b80f8f8cc_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Prinkino:cliente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 73,  192 => 71,  188 => 70,  182 => 69,  176 => 68,  172 => 67,  166 => 66,  162 => 65,  155 => 63,  131 => 42,  127 => 40,  117 => 36,  113 => 35,  109 => 34,  105 => 33,  99 => 32,  95 => 31,  91 => 30,  87 => 29,  63 => 11,  59 => 10,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}Analisi Cliente{% endblock %}

{% block corpo %}

    <div class=\"container-fluid\" style=\"\"><script>var premiumAccess = 2;</script><script>var type=0; var csid=1750327;</script>
        <div style=\"margin-top:20px;\" align=\"center\">
            <h4 style=\"font-weight: 300;\">Analisi cliente</h4>
            {%for cliente in clienti%}
            <h3 style=\"font-weight: 300; margin-top:10px;\">{{cliente.nome}} {{cliente.cognome}}</h3>
        </div>
        <table class=\"table \">
            <caption><h4>Dati del cliente<h4></caption>
            <thead>
                <tr>
                    <th class=\"span2\">Data Nascita</th>
                    <th class=\"span2\"><span class=\"line\"></span>Codice cliente </th>
                    <th class=\"span2\"><span class=\"line\"></span>Codice Fiscale</th>
                    <th class=\"span4\"><span class=\"line\"></span>Indirizzo</th>
                    <th class=\"span2\"><span class=\"line\"></span>Citta'</th>
                    <th class=\"span3\"><span class=\"line\"></span>telefono</th>
                    <th class=\"span3\"><span class=\"line\"></span>Mail</th>
                    <th class=\"span3\"><span class=\"line\"></span>fax</th>
                </tr>
            </thead>
            <tbody>
                <tr class=\"first\" style=\"font-size:14px; cursor:pointer; \">
                    <td>{{cliente.dataNascita|date('d-m-Y')}}</td>
                    <td>{{cliente.codicecliente}}</td> 
                    <td>{{cliente.codiceFiscale}}</td>
                    <td>{{cliente.via}}, {{cliente.numeroCivico}}</td>
                    <td>{{cliente.citta}}</td>
                    <td>{{cliente.telefono}}</td>
                    <td>{{cliente.mail}}</td>
                    <td>{{cliente.fax}}</td>
                </tr>
            </tbody>
            {%endfor%}
        </table>
        <div style=\"margin-top:15px;\" align=\"right\">
            <a class=\"btn-flat success\" href={{path('nuovoordine',{'idcliente':idcliente})}} style=\"border-radius:2px; cursor:pointer;\"><i class=\"icon-mail-forward\"></i> Aggiungi ordine</a>
            <a class=\"btn-flat success\" href=\"\" style=\"border-radius:2px; cursor:pointer;\"><i class=\"icon-mail-forward\"></i> Modifica dati</a>
        </div>
        <table>
            <tbody>
                <tr valign=\"top\">
                    <td style=\"width: 1400px;\" width=\"100%\"><div class=\"row-fluid\" id=\"boxTable\" style=\"margin-top:30px;\">
                        <table class=\"table table-hover\">
                            <caption><h4>Ordini effettuati<h4></caption>
                            <thead>
                                <tr>
                                    <th class=\"span2\">Data ordine</th>
                                    <th class=\"span2\"><span class=\"line\"></span>Grafica</th>
                                    <th class=\"span2\"><span class=\"line\"></span>Stato</th>
                                    <th class=\"span4\"><span class=\"line\"></span>Codice Articolo</th>
                                    <th class=\"span1\"><span class=\"line\"></span>Codice Ordine</th>
                                    <th class=\"span3\"><span class=\"line\"></span>Studio Grafico</th>
                                    <th class=\"span3\"><span class=\"line\"></span>Sito di produzione</th>
                                </tr>
                            </thead>
                            <tbody>
                            {%for item in ordini %} 
                                <tr class=\"first\" style=\"font-size:14px; cursor:pointer; \">
                                    <td>{{item.data|date('d-m-Y')}}</td>
                                    <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href={{ path('immagine', {'idgrafica': item.idgrafica, 'idcliente': idcliente} )}}>{{item.idgrafica}}</a></td>
                                    <td>{{item.stato}}</td>
                                    <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href={{ path('articolo2', {'idarticolo': item.articolo, 'idcliente': idcliente} )}}>{{item.articolo}}</a></td>
                                    <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href={{path('ordine',{'idordine':item.codiceordine})}}>{{item.codiceordine}}</a></td>
                                    <td> {{item.studiografico}}</td>
                                    <td><span > {{item.sitoproduzione}}</span></td>
                                </tr>\t
                            {%endfor%}\t\t\t\t\t\t    \t\t\t
                            </tbody>
                        </table>
                    </td> 
                </tr>
            </tbody> 
        </table>
    </div>
{% endblock %}", "AppBundle:Prinkino:cliente.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Prinkino/cliente.html.twig");
    }
}
