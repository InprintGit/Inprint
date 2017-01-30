<?php

/* AppBundle:Prinkino:ordine.html.twig */
class __TwigTemplate_1b8b3e7dd2083d01d09b23ab7dfbb30b141782692cd087b1de54d520f1732572 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Prinkino:ordine.html.twig", 1);
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
        $__internal_ad87bcb9d4a04f680d208f609da197de5d63d04bbdf49ef2ad7f8e4b9c923752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad87bcb9d4a04f680d208f609da197de5d63d04bbdf49ef2ad7f8e4b9c923752->enter($__internal_ad87bcb9d4a04f680d208f609da197de5d63d04bbdf49ef2ad7f8e4b9c923752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Prinkino:ordine.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad87bcb9d4a04f680d208f609da197de5d63d04bbdf49ef2ad7f8e4b9c923752->leave($__internal_ad87bcb9d4a04f680d208f609da197de5d63d04bbdf49ef2ad7f8e4b9c923752_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d162490ca78a4c7c74d3ed13fae3a7fdd969e6654e9d9434e3b41ceb1eb9d6ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d162490ca78a4c7c74d3ed13fae3a7fdd969e6654e9d9434e3b41ceb1eb9d6ac->enter($__internal_d162490ca78a4c7c74d3ed13fae3a7fdd969e6654e9d9434e3b41ceb1eb9d6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Dettagli Ordine";
        
        $__internal_d162490ca78a4c7c74d3ed13fae3a7fdd969e6654e9d9434e3b41ceb1eb9d6ac->leave($__internal_d162490ca78a4c7c74d3ed13fae3a7fdd969e6654e9d9434e3b41ceb1eb9d6ac_prof);

    }

    // line 5
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_bbfd1f59b5aecd10d21e595eac8e51e60f49418a6a70d59df5b58925fb08c70d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbfd1f59b5aecd10d21e595eac8e51e60f49418a6a70d59df5b58925fb08c70d->enter($__internal_bbfd1f59b5aecd10d21e595eac8e51e60f49418a6a70d59df5b58925fb08c70d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 6
        echo "
    <div class=\"container-fluid\" style=\"\"><script>var premiumAccess = 2;</script><script>var type=0; var csid=1750327;</script>
        <div style=\"margin-top:20px;\" align=\"center\">
            <h4 style=\"font-weight: 300;\">Dettagli ordine</h4>
             ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ordine"]) ? $context["ordine"] : $this->getContext($context, "ordine")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "            <h3 style=\"font-weight: 300; margin-top:10px;\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "codiceordine", array()), "html", null, true);
            echo "- ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nome", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "cognome", array()), "html", null, true);
            echo "</h3>
        </div>
        <table class=\"table \">
            <thead>
                <tr>
                    <th class=\"span2\">Data ordine</th>
                    <th class=\"span2\">Grafica</th>
                    <th class=\"span2\"><span class=\"line\"></span>Stato</th>
                    <th class=\"span4\"><span class=\"line\"></span>Articolo</th>
                    <th class=\"span1\"><span class=\"line\"></span>quantita'</th>
                    <th class=\"span3\"><span class=\"line\"></span>Studio Graficp</th>
                    <th class=\"span3\"><span class=\"line\"></span>Sito di produzione</th>
                    <th class=\"span1\"><span class=\"line\"></span>Importo totale</th>
                </tr>
            </thead>
            <tbody>
               
                <tr class=\"first\" style=\"font-size:14px; cursor:pointer; \">
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "data", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                    <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("immagine", array("idgrafica" => $this->getAttribute($context["item"], "idgrafica", array()), "idcliente" => $this->getAttribute($context["item"], "idcliente", array()))), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "idgrafica", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "stato", array()), "html", null, true);
            echo "</td>
                    <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articolo2", array("idarticolo" => $this->getAttribute($context["item"], "articolo", array()), "idcliente" => $this->getAttribute($context["item"], "idcliente", array()))), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "articolo", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quantita", array()), "html", null, true);
            echo "</td>
                    <td> ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "studiografico", array()), "html", null, true);
            echo "</td>
                    <td><span >";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "sitoproduzione", array()), "html", null, true);
            echo "</span></td>
                    <td> ";
            // line 36
            $context["prezzot"] = (($this->getAttribute($context["item"], "quantita", array()) * $this->getAttribute($context["item"], "prezzo", array())) - $this->getAttribute($context["item"], "sconto", array()));
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["prezzot"]) ? $context["prezzot"] : $this->getContext($context, "prezzot")), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </tbody>
        </table>
        <div style=\"margin-top:15px;\" align=\"right\">
            <a class=\"btn-flat success\" href=\"\" style=\"border-radius:2px; cursor:pointer;\"><i class=\"icon-mail-forward\"></i> Ripeti ordine</a>
            <a class=\"btn-flat success\" href=\"\" style=\"border-radius:2px; cursor:pointer;\"><i class=\"icon-mail-forward\"></i> Modifica ordine</a>
        </div>
        <table>
            <tbody>
                <tr valign=\"top\">
                    <td style=\"width: 1400px;\" width=\"100%\"><div class=\"row-fluid\" id=\"boxTable\" style=\"margin-top:30px;\">
                        <table class=\"table table-hover\">
                            <caption><h4>Eventi dell'ordine<h4></caption>
                            <thead>
                                <tr>
                                    <th class=\"span2\">Data</th>
                                    <th class=\"span2\"><span class=\"line\"></span>Ora</th>
                                    <th class=\"span4\"><span class=\"line\"></span>tipo</th>
                                    <th class=\"span4\"><span class=\"line\"></span>Descrizione</th>
                                </tr>
                            </thead>
                            <tbody>
                            ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eventi"]) ? $context["eventi"] : $this->getContext($context, "eventi")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo " 
                                <tr style=\"font-size:14px; cursor:pointer; \">
                                    <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "data", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "data", array()), "H:i:s"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nome", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "Descrizione", array()), "html", null, true);
            echo " </td>
                                </tr>\t
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "\t\t\t\t\t\t        \t\t
                            </tbody>
                        </table>
                    </td> 
                </tr>
            </tbody> 
        </table>
    </div>\t
  ";
        
        $__internal_bbfd1f59b5aecd10d21e595eac8e51e60f49418a6a70d59df5b58925fb08c70d->leave($__internal_bbfd1f59b5aecd10d21e595eac8e51e60f49418a6a70d59df5b58925fb08c70d_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Prinkino:ordine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 67,  174 => 65,  170 => 64,  166 => 63,  162 => 62,  155 => 60,  132 => 39,  121 => 36,  117 => 35,  113 => 34,  109 => 33,  103 => 32,  99 => 31,  93 => 30,  89 => 29,  63 => 11,  59 => 10,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}Dettagli Ordine{% endblock %}

{% block corpo %}

    <div class=\"container-fluid\" style=\"\"><script>var premiumAccess = 2;</script><script>var type=0; var csid=1750327;</script>
        <div style=\"margin-top:20px;\" align=\"center\">
            <h4 style=\"font-weight: 300;\">Dettagli ordine</h4>
             {%for item in ordine%}
            <h3 style=\"font-weight: 300; margin-top:10px;\">{{item.codiceordine}}- {{item.nome}} {{item.cognome}}</h3>
        </div>
        <table class=\"table \">
            <thead>
                <tr>
                    <th class=\"span2\">Data ordine</th>
                    <th class=\"span2\">Grafica</th>
                    <th class=\"span2\"><span class=\"line\"></span>Stato</th>
                    <th class=\"span4\"><span class=\"line\"></span>Articolo</th>
                    <th class=\"span1\"><span class=\"line\"></span>quantita'</th>
                    <th class=\"span3\"><span class=\"line\"></span>Studio Graficp</th>
                    <th class=\"span3\"><span class=\"line\"></span>Sito di produzione</th>
                    <th class=\"span1\"><span class=\"line\"></span>Importo totale</th>
                </tr>
            </thead>
            <tbody>
               
                <tr class=\"first\" style=\"font-size:14px; cursor:pointer; \">
                    <td>{{item.data|date('d-m-Y')}}</td>
                    <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href={{ path('immagine', {'idgrafica': item.idgrafica, 'idcliente': item.idcliente} )}}>{{item.idgrafica}}</a></td>
                    <td>{{item.stato}}</td>
                    <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href={{ path('articolo2', {'idarticolo': item.articolo, 'idcliente': item.idcliente} )}}>{{item.articolo}}</a></td>
                    <td>{{item.quantita}}</td>
                    <td> {{item.studiografico}}</td>
                    <td><span >{{item.sitoproduzione}}</span></td>
                    <td> {% set prezzot=item.quantita*item.prezzo-item.sconto%} {{ prezzot }}</td>
                </tr>
                {%endfor%}
            </tbody>
        </table>
        <div style=\"margin-top:15px;\" align=\"right\">
            <a class=\"btn-flat success\" href=\"\" style=\"border-radius:2px; cursor:pointer;\"><i class=\"icon-mail-forward\"></i> Ripeti ordine</a>
            <a class=\"btn-flat success\" href=\"\" style=\"border-radius:2px; cursor:pointer;\"><i class=\"icon-mail-forward\"></i> Modifica ordine</a>
        </div>
        <table>
            <tbody>
                <tr valign=\"top\">
                    <td style=\"width: 1400px;\" width=\"100%\"><div class=\"row-fluid\" id=\"boxTable\" style=\"margin-top:30px;\">
                        <table class=\"table table-hover\">
                            <caption><h4>Eventi dell'ordine<h4></caption>
                            <thead>
                                <tr>
                                    <th class=\"span2\">Data</th>
                                    <th class=\"span2\"><span class=\"line\"></span>Ora</th>
                                    <th class=\"span4\"><span class=\"line\"></span>tipo</th>
                                    <th class=\"span4\"><span class=\"line\"></span>Descrizione</th>
                                </tr>
                            </thead>
                            <tbody>
                            {%for item in eventi %} 
                                <tr style=\"font-size:14px; cursor:pointer; \">
                                    <td>{{item.data|date('d-m-Y')}}</td>
                                    <td>{{item.data|date('H:i:s')}}</td>
                                    <td>{{item.nome}}</td>
                                    <td>{{item.Descrizione}} </td>
                                </tr>\t
                            {%endfor%}\t\t\t\t\t\t        \t\t
                            </tbody>
                        </table>
                    </td> 
                </tr>
            </tbody> 
        </table>
    </div>\t
  {% endblock %}", "AppBundle:Prinkino:ordine.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Prinkino/ordine.html.twig");
    }
}
