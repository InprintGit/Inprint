<?php

/* AppBundle:Amministratore:nuovoArticolo.html.twig */
class __TwigTemplate_107bb255d7420f3f848786937d5ff6e129121dbe73fb0b02ab35e9e050aaeca5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Amministratore:Abase.html.twig", "AppBundle:Amministratore:nuovoArticolo.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
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
        $__internal_bb21bbffe6d32869da91e436fbd1021df2b090b7a18e9c191da0f8978c019a6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb21bbffe6d32869da91e436fbd1021df2b090b7a18e9c191da0f8978c019a6d->enter($__internal_bb21bbffe6d32869da91e436fbd1021df2b090b7a18e9c191da0f8978c019a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Amministratore:nuovoArticolo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb21bbffe6d32869da91e436fbd1021df2b090b7a18e9c191da0f8978c019a6d->leave($__internal_bb21bbffe6d32869da91e436fbd1021df2b090b7a18e9c191da0f8978c019a6d_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c3cfb7bc78a2a4fb0520f3e3458d3a0779140a44f0ac5c853032daa9b86de7c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3cfb7bc78a2a4fb0520f3e3458d3a0779140a44f0ac5c853032daa9b86de7c3->enter($__internal_c3cfb7bc78a2a4fb0520f3e3458d3a0779140a44f0ac5c853032daa9b86de7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 5
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/js/articolo.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_c3cfb7bc78a2a4fb0520f3e3458d3a0779140a44f0ac5c853032daa9b86de7c3->leave($__internal_c3cfb7bc78a2a4fb0520f3e3458d3a0779140a44f0ac5c853032daa9b86de7c3_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_be5cb2fc17b3d3f8e1aa954f7d4a329e7ff914a76b41e27906b7dd9fc1b86e53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be5cb2fc17b3d3f8e1aa954f7d4a329e7ff914a76b41e27906b7dd9fc1b86e53->enter($__internal_be5cb2fc17b3d3f8e1aa954f7d4a329e7ff914a76b41e27906b7dd9fc1b86e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Nuovo Articolo";
        
        $__internal_be5cb2fc17b3d3f8e1aa954f7d4a329e7ff914a76b41e27906b7dd9fc1b86e53->leave($__internal_be5cb2fc17b3d3f8e1aa954f7d4a329e7ff914a76b41e27906b7dd9fc1b86e53_prof);

    }

    // line 11
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_d004d1d920c6c1cb77de4b26438f23dd130e23d86c77b1ec7579204d6a3524ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d004d1d920c6c1cb77de4b26438f23dd130e23d86c77b1ec7579204d6a3524ae->enter($__internal_d004d1d920c6c1cb77de4b26438f23dd130e23d86c77b1ec7579204d6a3524ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 12
        echo "<section class=\"top\">
    <h4>Nuovo Articolo </h4>
</section>
<section class=\"form\" id=\"ContentNuovo\">
    <table>
        <form method=\"post\">
            <tbody>
                <tr valign=\"top\">
                    <td height=\"260\" width=\"285\">
                        <div id=\"cont\"> 
                            <div class=\"field-box\">
                                <label>Nome :</label>
                                <input name=\"nome\" id=\"nome\" value=\"\" placeholder=\"\" class=\"span6\" style=\"width:240px\" type=\"text\" required>
                            </div>
                            <div class=\"field-box\">
                                <label>Prezzo :</label>
                                <input name=\"prezzo\" id=\"prezzo\" value=\"\" placeholder=\"\" class=\"span6\" style=\"width:240px\" type=\"number\" step=\"0.01\" required>
                            </div>
                            <div class=\"field-box\" id=\"divNum\">
                                <label>Producibile:</label>
                                <select name=\"producibile\" id=\"producibile\" onchange=\"caricaSpecifiche()\">
                                    <option value=\"0\"></option> 
                                    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["producibili"]) ? $context["producibili"] : $this->getContext($context, "producibili")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 35
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nome", array()), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                                </select>
                            </div>
                            <div id=\"divSpecifiche\">
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </form>
        <input type=\"submit\" id=\"conferma\" class=\"btn-flat primary\" onclick=\"salva()\">
    </table>
</section>
";
        
        $__internal_d004d1d920c6c1cb77de4b26438f23dd130e23d86c77b1ec7579204d6a3524ae->leave($__internal_d004d1d920c6c1cb77de4b26438f23dd130e23d86c77b1ec7579204d6a3524ae_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Amministratore:nuovoArticolo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 37,  102 => 35,  98 => 34,  74 => 12,  68 => 11,  56 => 9,  47 => 6,  42 => 5,  36 => 4,  11 => 1,);
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


{% block javascripts %}
    {{parent()}}
    <script src=\"{{ asset(\"Amministratore/js/articolo.js\") }}\"></script>
{%endblock%}

{% block title %}Nuovo Articolo{% endblock %}

{% block corpo %}
<section class=\"top\">
    <h4>Nuovo Articolo </h4>
</section>
<section class=\"form\" id=\"ContentNuovo\">
    <table>
        <form method=\"post\">
            <tbody>
                <tr valign=\"top\">
                    <td height=\"260\" width=\"285\">
                        <div id=\"cont\"> 
                            <div class=\"field-box\">
                                <label>Nome :</label>
                                <input name=\"nome\" id=\"nome\" value=\"\" placeholder=\"\" class=\"span6\" style=\"width:240px\" type=\"text\" required>
                            </div>
                            <div class=\"field-box\">
                                <label>Prezzo :</label>
                                <input name=\"prezzo\" id=\"prezzo\" value=\"\" placeholder=\"\" class=\"span6\" style=\"width:240px\" type=\"number\" step=\"0.01\" required>
                            </div>
                            <div class=\"field-box\" id=\"divNum\">
                                <label>Producibile:</label>
                                <select name=\"producibile\" id=\"producibile\" onchange=\"caricaSpecifiche()\">
                                    <option value=\"0\"></option> 
                                    {%for item in producibili%}
                                    <option value=\"{{item.id}}\">{{item.nome}}</option>
                                    {%endfor%}
                                </select>
                            </div>
                            <div id=\"divSpecifiche\">
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </form>
        <input type=\"submit\" id=\"conferma\" class=\"btn-flat primary\" onclick=\"salva()\">
    </table>
</section>
{% endblock %}
", "AppBundle:Amministratore:nuovoArticolo.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Amministratore/nuovoArticolo.html.twig");
    }
}
