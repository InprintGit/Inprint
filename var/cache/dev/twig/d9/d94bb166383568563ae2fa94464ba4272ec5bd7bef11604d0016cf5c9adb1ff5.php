<?php

/* AppBundle:Prinkino:inserimento.html.twig */
class __TwigTemplate_f44074012e6ef3157c9fbc94e0dcfd0cb656840de612a95ae714648e2f0a2b40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Prinkino:inserimento.html.twig", 2);
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
        $__internal_160f18cdcf1f939d6b8d33c379e1059d0646366f956b24142cc5203fa9783e24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_160f18cdcf1f939d6b8d33c379e1059d0646366f956b24142cc5203fa9783e24->enter($__internal_160f18cdcf1f939d6b8d33c379e1059d0646366f956b24142cc5203fa9783e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Prinkino:inserimento.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_160f18cdcf1f939d6b8d33c379e1059d0646366f956b24142cc5203fa9783e24->leave($__internal_160f18cdcf1f939d6b8d33c379e1059d0646366f956b24142cc5203fa9783e24_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_f99d51f4ce5846466732ac6652b8e371001d3ecc38ad64afc60fc21cfba281e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f99d51f4ce5846466732ac6652b8e371001d3ecc38ad64afc60fc21cfba281e9->enter($__internal_f99d51f4ce5846466732ac6652b8e371001d3ecc38ad64afc60fc21cfba281e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["dettaglio"]) ? $context["dettaglio"] : $this->getContext($context, "dettaglio")), "html", null, true);
        
        $__internal_f99d51f4ce5846466732ac6652b8e371001d3ecc38ad64afc60fc21cfba281e9->leave($__internal_f99d51f4ce5846466732ac6652b8e371001d3ecc38ad64afc60fc21cfba281e9_prof);

    }

    // line 6
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_9b1c3074258157dca2ea0a1c2f3679aad7f036bb49e63a5318de7b988c5a6d67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b1c3074258157dca2ea0a1c2f3679aad7f036bb49e63a5318de7b988c5a6d67->enter($__internal_9b1c3074258157dca2ea0a1c2f3679aad7f036bb49e63a5318de7b988c5a6d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 7
        echo "
<section class=\"top\">
   <h4>Nuovo ordine</h4>
</section>
<section class=\"form\">
    ";
        // line 12
        if ( !((isset($context["dettaglio"]) ? $context["dettaglio"] : $this->getContext($context, "dettaglio")) == "allegato")) {
            // line 13
            echo "    <form method=\"post\" action=";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuovoordine");
            echo ">
    ";
        } else {
            // line 15
            echo "    <form enctype=\"multipart/form-data\" method=\"post\" action=";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuovoordine");
            echo ">
    ";
        }
        // line 17
        echo "        <table>
             <tbody>
                <tr valign=\"form\">
                    <td height=\"254\" width=\"254\">
                        <div class=\"field-box\">
                            <label>";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["dettaglio"]) ? $context["dettaglio"] : $this->getContext($context, "dettaglio")), "html", null, true);
        echo ":</label>\t\t\t\t\t\t\t
                            <td height=\"300\" width=\"300\">
                                ";
        // line 24
        if ( !((isset($context["dettaglio"]) ? $context["dettaglio"] : $this->getContext($context, "dettaglio")) == "allegato")) {
            // line 25
            echo "                                <input name=";
            echo twig_escape_filter($this->env, (isset($context["dettaglio"]) ? $context["dettaglio"] : $this->getContext($context, "dettaglio")), "html", null, true);
            echo " id=\"extra\" placeholder=\"Inserisci ";
            echo twig_escape_filter($this->env, (isset($context["dettaglio"]) ? $context["dettaglio"] : $this->getContext($context, "dettaglio")), "html", null, true);
            echo "...\" class=\"span8\" rows=\"8\" style=\"margin: 0px 0px 10px; height: 110px; width: 250px; position:static; resize:none;\">
                                ";
        } else {
            // line 27
            echo "                                <input type=\"file\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["dettaglio"]) ? $context["dettaglio"] : $this->getContext($context, "dettaglio")), "html", null, true);
            echo "\" id=\"extra\"  class=\"span8\" rows=\"8\" style=\"margin: 0px 0px 10px; height: 110px; width: 250px; position:static; resize:none;\">
                                ";
        }
        // line 29
        echo "                            </td>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
                            
        <input type=\"submit\" class=\"btn-flat primary\" >  
    </form>
</section>
";
        
        $__internal_9b1c3074258157dca2ea0a1c2f3679aad7f036bb49e63a5318de7b988c5a6d67->leave($__internal_9b1c3074258157dca2ea0a1c2f3679aad7f036bb49e63a5318de7b988c5a6d67_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Prinkino:inserimento.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 29,  96 => 27,  88 => 25,  86 => 24,  81 => 22,  74 => 17,  68 => 15,  62 => 13,  60 => 12,  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"::base.html.twig\" %}

{% block title %}{{dettaglio}}{% endblock %}

{% block corpo %}

<section class=\"top\">
   <h4>Nuovo ordine</h4>
</section>
<section class=\"form\">
    {%if not(dettaglio==\"allegato\") %}
    <form method=\"post\" action={{path('nuovoordine')}}>
    {%else%}
    <form enctype=\"multipart/form-data\" method=\"post\" action={{path('nuovoordine')}}>
    {%endif%}
        <table>
             <tbody>
                <tr valign=\"form\">
                    <td height=\"254\" width=\"254\">
                        <div class=\"field-box\">
                            <label>{{dettaglio}}:</label>\t\t\t\t\t\t\t
                            <td height=\"300\" width=\"300\">
                                {%if not(dettaglio==\"allegato\") %}
                                <input name={{dettaglio}} id=\"extra\" placeholder=\"Inserisci {{dettaglio}}...\" class=\"span8\" rows=\"8\" style=\"margin: 0px 0px 10px; height: 110px; width: 250px; position:static; resize:none;\">
                                {%else%}
                                <input type=\"file\" name=\"{{dettaglio}}\" id=\"extra\"  class=\"span8\" rows=\"8\" style=\"margin: 0px 0px 10px; height: 110px; width: 250px; position:static; resize:none;\">
                                {%endif%}
                            </td>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
                            
        <input type=\"submit\" class=\"btn-flat primary\" >  
    </form>
</section>
{% endblock %}
", "AppBundle:Prinkino:inserimento.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Prinkino/inserimento.html.twig");
    }
}
