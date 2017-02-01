<?php

/* AppBundle:Amministratore:Anuovacategoria.html.twig */
class __TwigTemplate_b34067a69bfa55dd46e1a959a12e7687b553761b6353907b511a7a390be2b643 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AppBundle:Amministratore:Abase.html.twig", "AppBundle:Amministratore:Anuovacategoria.html.twig", 2);
        $this->blocks = array(
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
        $__internal_629e3a400f1147e2681ab186e96f03181cef9119b3bc6baa2fa83bbe37def2ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_629e3a400f1147e2681ab186e96f03181cef9119b3bc6baa2fa83bbe37def2ef->enter($__internal_629e3a400f1147e2681ab186e96f03181cef9119b3bc6baa2fa83bbe37def2ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Amministratore:Anuovacategoria.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_629e3a400f1147e2681ab186e96f03181cef9119b3bc6baa2fa83bbe37def2ef->leave($__internal_629e3a400f1147e2681ab186e96f03181cef9119b3bc6baa2fa83bbe37def2ef_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_cea90cd4dff45fd6bb88c11f69d264033b99d3dca99c46f907abc176461281d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cea90cd4dff45fd6bb88c11f69d264033b99d3dca99c46f907abc176461281d7->enter($__internal_cea90cd4dff45fd6bb88c11f69d264033b99d3dca99c46f907abc176461281d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Nuova Categoria";
        
        $__internal_cea90cd4dff45fd6bb88c11f69d264033b99d3dca99c46f907abc176461281d7->leave($__internal_cea90cd4dff45fd6bb88c11f69d264033b99d3dca99c46f907abc176461281d7_prof);

    }

    // line 6
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_6eae0aa8f3af6eacf83c0322311fd6a9c921c9ffd561110bc6ff80b3865f5153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eae0aa8f3af6eacf83c0322311fd6a9c921c9ffd561110bc6ff80b3865f5153->enter($__internal_6eae0aa8f3af6eacf83c0322311fd6a9c921c9ffd561110bc6ff80b3865f5153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 7
        echo "
<section class=\"top\">
\t<h4>Nuovo Categoria</h4>
</section>
<section class=\"form\">
    <table>
        <form method=\"post\" action=\"\" >
            <tbody>
                <tr valign=\"top\">
                    <td height=\"260\" width=\"285\">
                        <div class=\"field-box\">
                            <label>Nome :</label>
                            <input name=\"nome\" id=\"name\" value=\"\" placeholder=\"\" class=\"span6\" style=\"width:240px\" type=\"text\">
                        </div>
                        <div class=\"field-box\">
                            <label>Breve descrizione:</label>
                            <input name=\"descrizione\" id=\"indirizzo_via\" value=\"\" class=\"span6\" style=\"width:240px\" type=\"text\">
                        </div>\t
                        <div class=\"field-box\">
                            <label>Inserisci immaggine:</label>
                            <input name=\"immagine\" type=\"file\" id=\"indirizzo_via\" value=\"\" class=\"span6\" style=\"width:240px\" type=\"text\">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>MaxiCategoria Padre:</label>
                        <select style=\"width: 254px;\" class=\"select2\" id=\"selectCountry1470146739\" name=\"padre\">
                            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 36
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "Nome", array()), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                    </td>
                </tr>
            </tbody>
            <input type=\"submit\" class=\"btn-flat primary\">
        </form>\t
    </table>
</section>
";
        
        $__internal_6eae0aa8f3af6eacf83c0322311fd6a9c921c9ffd561110bc6ff80b3865f5153->leave($__internal_6eae0aa8f3af6eacf83c0322311fd6a9c921c9ffd561110bc6ff80b3865f5153_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Amministratore:Anuovacategoria.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 38,  87 => 36,  83 => 35,  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
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
{% extends \"AppBundle:Amministratore:Abase.html.twig\" %}

{% block title %}Nuova Categoria{% endblock %}

{% block corpo %}

<section class=\"top\">
\t<h4>Nuovo Categoria</h4>
</section>
<section class=\"form\">
    <table>
        <form method=\"post\" action=\"\" >
            <tbody>
                <tr valign=\"top\">
                    <td height=\"260\" width=\"285\">
                        <div class=\"field-box\">
                            <label>Nome :</label>
                            <input name=\"nome\" id=\"name\" value=\"\" placeholder=\"\" class=\"span6\" style=\"width:240px\" type=\"text\">
                        </div>
                        <div class=\"field-box\">
                            <label>Breve descrizione:</label>
                            <input name=\"descrizione\" id=\"indirizzo_via\" value=\"\" class=\"span6\" style=\"width:240px\" type=\"text\">
                        </div>\t
                        <div class=\"field-box\">
                            <label>Inserisci immaggine:</label>
                            <input name=\"immagine\" type=\"file\" id=\"indirizzo_via\" value=\"\" class=\"span6\" style=\"width:240px\" type=\"text\">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>MaxiCategoria Padre:</label>
                        <select style=\"width: 254px;\" class=\"select2\" id=\"selectCountry1470146739\" name=\"padre\">
                            {% for item in categorie %}
                            <option value=\"{{item.id}}\">{{item.Nome}}</option>
                            {% endfor %}
                    </td>
                </tr>
            </tbody>
            <input type=\"submit\" class=\"btn-flat primary\">
        </form>\t
    </table>
</section>
{% endblock %}", "AppBundle:Amministratore:Anuovacategoria.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Amministratore/Anuovacategoria.html.twig");
    }
}
