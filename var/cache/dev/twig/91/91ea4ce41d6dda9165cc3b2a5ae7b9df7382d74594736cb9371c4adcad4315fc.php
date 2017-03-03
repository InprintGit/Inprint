<?php

/* AppBundle:Amministratore:articolo.html.twig */
class __TwigTemplate_0b6cbfc358499cadf499d482de7e375339183ff9521cf347cb72323118faa403 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Amministratore:Abase.html.twig", "AppBundle:Amministratore:articolo.html.twig", 1);
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
        $__internal_8936c6de528441317ff3cd725195afd6c5841aefe009bc05349345b5c008633b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8936c6de528441317ff3cd725195afd6c5841aefe009bc05349345b5c008633b->enter($__internal_8936c6de528441317ff3cd725195afd6c5841aefe009bc05349345b5c008633b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Amministratore:articolo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8936c6de528441317ff3cd725195afd6c5841aefe009bc05349345b5c008633b->leave($__internal_8936c6de528441317ff3cd725195afd6c5841aefe009bc05349345b5c008633b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ceed2fa4d9974233da9649212166b7dcefd2bbbdcd19bd9900d1d1d29556595 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ceed2fa4d9974233da9649212166b7dcefd2bbbdcd19bd9900d1d1d29556595->enter($__internal_9ceed2fa4d9974233da9649212166b7dcefd2bbbdcd19bd9900d1d1d29556595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Articolo id";
        
        $__internal_9ceed2fa4d9974233da9649212166b7dcefd2bbbdcd19bd9900d1d1d29556595->leave($__internal_9ceed2fa4d9974233da9649212166b7dcefd2bbbdcd19bd9900d1d1d29556595_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f1a3c8b7e3ac32c47fa540383690b9c8f0878a1fe2f57885f4ac78e062140983 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1a3c8b7e3ac32c47fa540383690b9c8f0878a1fe2f57885f4ac78e062140983->enter($__internal_f1a3c8b7e3ac32c47fa540383690b9c8f0878a1fe2f57885f4ac78e062140983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/js/articolo.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_f1a3c8b7e3ac32c47fa540383690b9c8f0878a1fe2f57885f4ac78e062140983->leave($__internal_f1a3c8b7e3ac32c47fa540383690b9c8f0878a1fe2f57885f4ac78e062140983_prof);

    }

    // line 11
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_a5f74aee33eaaabf32bffb1691ff292324015e0cda29c53a70c720220956f800 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5f74aee33eaaabf32bffb1691ff292324015e0cda29c53a70c720220956f800->enter($__internal_a5f74aee33eaaabf32bffb1691ff292324015e0cda29c53a70c720220956f800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 12
        echo "
<div id=\"content\" class=\"container-fluid\" style=\"\">
    <div style=\"margin-top:20px;\" align=\"center\">
        <h3 style=\"font-weight: 300; margin-top:10px;\">Articolo - ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articolo"]) ? $context["articolo"] : $this->getContext($context, "articolo")), "id", array()), "html", null, true);
        echo "</h3>\t
    </div>
    <table>
        <tbody>
            <tr valign=\"top\">
                <td style=\"width: 1400px;\" width=\"100%\">
                    <table class=\"table table-hover\">
                        <caption><h4><h4>
                            <div class=\"field-box\">
                                <label>Descrizone:</label>
                                <label>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articolo"]) ? $context["articolo"] : $this->getContext($context, "articolo")), "denominazione", array()), "html", null, true);
        echo "</label>
                            </div> 
                        </caption>
                        <thead>
                            <tr>
                                <th class=\"span2\">Producibile</th>
                                <th class=\"span2\"><span class=\"line\"></span>Prezzo</th>
                                <th class=\"span2\"><span class=\"line\"></span>Ordini in corso</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class=\"first\" style=\"font-size:14px; cursor:pointer; \">
                                <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articolo"]) ? $context["articolo"] : $this->getContext($context, "articolo")), "producibileId", array()), "html", null, true);
        echo "</td>
                                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articolo"]) ? $context["articolo"] : $this->getContext($context, "articolo")), "prezzoVendita", array()), "html", null, true);
        echo "</td>
                                <td id=\"inCorso\">";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["inCorso"]) ? $context["inCorso"] : $this->getContext($context, "inCorso")), "html", null, true);
        echo "</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class=\"table table-hover\">
                        <thead>
                            <tr>
                                <th class=\"span2\">Attributi</th>
                                <th class=\"span2\">Valori</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["AttributoValore"]) ? $context["AttributoValore"] : $this->getContext($context, "AttributoValore")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 52
            echo "                            <tr class=\"first\" style=\"font-size:14px; cursor:pointer; \">
                                <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nomeAttributo", array()), "html", null, true);
            echo "</td>
                                <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nomeValore", array()), "html", null, true);
            echo "</td>
                            </tr>\t\t\t\t\t\t\t    \t\t
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                        </tbody>
                    </table>
                    <div style=\"margin-top:15px;\" align=\"right\">
                        <a class=\"btn-flat success\" onclick=\"elimina(";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articolo"]) ? $context["articolo"] : $this->getContext($context, "articolo")), "id", array()), "html", null, true);
        echo ");\" style=\"border-radius:2px; cursor:pointer;\"><i class=\"icon-mail-forward\"></i>Elimina</a>
                        <a class=\"btn-flat success\" onclick=\"modifica(";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["articolo"]) ? $context["articolo"] : $this->getContext($context, "articolo")), "id", array()), "html", null, true);
        echo ");\" style=\"border-radius:2px; cursor:pointer;\"><i class=\"icon-mail-forward\"></i> Modifica</a>
                    </div>
                </td> 
            </tr>
        </tbody> 
    </table>
</div>\t
";
        
        $__internal_a5f74aee33eaaabf32bffb1691ff292324015e0cda29c53a70c720220956f800->leave($__internal_a5f74aee33eaaabf32bffb1691ff292324015e0cda29c53a70c720220956f800_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Amministratore:articolo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 61,  155 => 60,  150 => 57,  141 => 54,  137 => 53,  134 => 52,  130 => 51,  115 => 39,  111 => 38,  107 => 37,  92 => 25,  79 => 15,  74 => 12,  68 => 11,  59 => 8,  54 => 7,  48 => 6,  36 => 3,  11 => 1,);
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

{% block title %}Articolo id{% endblock %}


{% block javascripts %}
    {{parent()}}
    <script src=\"{{ asset(\"Amministratore/js/articolo.js\") }}\"></script>
{%endblock%}

{% block corpo %}

<div id=\"content\" class=\"container-fluid\" style=\"\">
    <div style=\"margin-top:20px;\" align=\"center\">
        <h3 style=\"font-weight: 300; margin-top:10px;\">Articolo - {{articolo.id}}</h3>\t
    </div>
    <table>
        <tbody>
            <tr valign=\"top\">
                <td style=\"width: 1400px;\" width=\"100%\">
                    <table class=\"table table-hover\">
                        <caption><h4><h4>
                            <div class=\"field-box\">
                                <label>Descrizone:</label>
                                <label>{{articolo.denominazione}}</label>
                            </div> 
                        </caption>
                        <thead>
                            <tr>
                                <th class=\"span2\">Producibile</th>
                                <th class=\"span2\"><span class=\"line\"></span>Prezzo</th>
                                <th class=\"span2\"><span class=\"line\"></span>Ordini in corso</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class=\"first\" style=\"font-size:14px; cursor:pointer; \">
                                <td>{{articolo.producibileId}}</td>
                                <td>{{articolo.prezzoVendita}}</td>
                                <td id=\"inCorso\">{{inCorso}}</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class=\"table table-hover\">
                        <thead>
                            <tr>
                                <th class=\"span2\">Attributi</th>
                                <th class=\"span2\">Valori</th>
                            </tr>
                        </thead>
                        <tbody>
                        {%for item in AttributoValore%}
                            <tr class=\"first\" style=\"font-size:14px; cursor:pointer; \">
                                <td>{{item.nomeAttributo}}</td>
                                <td>{{item.nomeValore}}</td>
                            </tr>\t\t\t\t\t\t\t    \t\t
                        {%endfor%}
                        </tbody>
                    </table>
                    <div style=\"margin-top:15px;\" align=\"right\">
                        <a class=\"btn-flat success\" onclick=\"elimina({{articolo.id}});\" style=\"border-radius:2px; cursor:pointer;\"><i class=\"icon-mail-forward\"></i>Elimina</a>
                        <a class=\"btn-flat success\" onclick=\"modifica({{articolo.id}});\" style=\"border-radius:2px; cursor:pointer;\"><i class=\"icon-mail-forward\"></i> Modifica</a>
                    </div>
                </td> 
            </tr>
        </tbody> 
    </table>
</div>\t
{% endblock %}", "AppBundle:Amministratore:articolo.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Amministratore/articolo.html.twig");
    }
}
