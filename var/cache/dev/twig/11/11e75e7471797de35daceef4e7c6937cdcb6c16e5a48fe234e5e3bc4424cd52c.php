<?php

/* AppBundle:Amministratore:AriepilogoCategoria.html.twig */
class __TwigTemplate_198a5bd91d0906c319f092c62e022a1d812ff83aab51f0a24a88d33115ef0ef6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Amministratore:Abase.html.twig", "AppBundle:Amministratore:AriepilogoCategoria.html.twig", 1);
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
        $__internal_f853a05e6c234b22c92e2df112cc06128767ace2d480dbba6456aafdcc1eac09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f853a05e6c234b22c92e2df112cc06128767ace2d480dbba6456aafdcc1eac09->enter($__internal_f853a05e6c234b22c92e2df112cc06128767ace2d480dbba6456aafdcc1eac09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Amministratore:AriepilogoCategoria.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f853a05e6c234b22c92e2df112cc06128767ace2d480dbba6456aafdcc1eac09->leave($__internal_f853a05e6c234b22c92e2df112cc06128767ace2d480dbba6456aafdcc1eac09_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e95d9b14ddddbde9c63602a59cfe0e0567696bfa50e2843a796fdc240887db40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e95d9b14ddddbde9c63602a59cfe0e0567696bfa50e2843a796fdc240887db40->enter($__internal_e95d9b14ddddbde9c63602a59cfe0e0567696bfa50e2843a796fdc240887db40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Riepilogo categoria";
        
        $__internal_e95d9b14ddddbde9c63602a59cfe0e0567696bfa50e2843a796fdc240887db40->leave($__internal_e95d9b14ddddbde9c63602a59cfe0e0567696bfa50e2843a796fdc240887db40_prof);

    }

    // line 4
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_6923ca077400d0f4207819db2d14a300e56c09c3e1a7de9697eeccc1402943b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6923ca077400d0f4207819db2d14a300e56c09c3e1a7de9697eeccc1402943b9->enter($__internal_6923ca077400d0f4207819db2d14a300e56c09c3e1a7de9697eeccc1402943b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 5
        echo "
<section class=\"top\">
\t<h4>Riepilogo inserimento categoria </h4>
</section>

<section class=\"form\">
    <table>
        <tbody>
            <tr valign=\"top\">
                <td height=\"260\" width=\"285\">
                    <div class=\"field-box\">
                        <label>Nome:</label>
                            <input type=\"text\" name=\"textfield\" disabled=\"true\" placeholder=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "nome", array()), "html", null, true);
        echo "\"> \t\t\t\t\t\t\t\t\t 
                    </div>
                    <div class=\"field-box\">
                        <label>Descrizione:</label>
                            <input type=\"text\" name=\"textfield\" disabled=\"true\" placeholder=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "descrizione", array()), "html", null, true);
        echo "\"> \t\t\t\t\t\t\t\t\t
                    </div>
                    <div class=\"field-box\">
                        <label>File:</label>
                        <input type=\"text\" name=\"textfield\" disabled=\"true\" placeholder=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "file", array()), "html", null, true);
        echo "\">\t\t\t\t\t\t\t\t\t
                    </div>
                    <div class=\"field-box\">
                        <label>Padre:</label>
                        <input type=\"text\" name=\"textfield\" disabled=\"true\" placeholder=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "padre", array()), "html", null, true);
        echo "\">\t\t\t\t\t\t\t\t\t
                    </div>
                </td>
            </tr>    
        </tbody>
    </table>
    <a class=\"btn-flat primary\" href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Acategorie");
        echo "\">Annulla </a>
    <a class=\"btn-flat primary\" href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Aconferma");
        echo "\">Conferma </a>
</section>
";
        
        $__internal_6923ca077400d0f4207819db2d14a300e56c09c3e1a7de9697eeccc1402943b9->leave($__internal_6923ca077400d0f4207819db2d14a300e56c09c3e1a7de9697eeccc1402943b9_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Amministratore:AriepilogoCategoria.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 36,  97 => 35,  88 => 29,  81 => 25,  74 => 21,  67 => 17,  53 => 5,  47 => 4,  35 => 2,  11 => 1,);
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
{% block title %}Riepilogo categoria{% endblock %}

{% block corpo %}

<section class=\"top\">
\t<h4>Riepilogo inserimento categoria </h4>
</section>

<section class=\"form\">
    <table>
        <tbody>
            <tr valign=\"top\">
                <td height=\"260\" width=\"285\">
                    <div class=\"field-box\">
                        <label>Nome:</label>
                            <input type=\"text\" name=\"textfield\" disabled=\"true\" placeholder=\"{{categoria.nome}}\"> \t\t\t\t\t\t\t\t\t 
                    </div>
                    <div class=\"field-box\">
                        <label>Descrizione:</label>
                            <input type=\"text\" name=\"textfield\" disabled=\"true\" placeholder=\"{{categoria.descrizione}}\"> \t\t\t\t\t\t\t\t\t
                    </div>
                    <div class=\"field-box\">
                        <label>File:</label>
                        <input type=\"text\" name=\"textfield\" disabled=\"true\" placeholder=\"{{categoria.file}}\">\t\t\t\t\t\t\t\t\t
                    </div>
                    <div class=\"field-box\">
                        <label>Padre:</label>
                        <input type=\"text\" name=\"textfield\" disabled=\"true\" placeholder=\"{{categoria.padre}}\">\t\t\t\t\t\t\t\t\t
                    </div>
                </td>
            </tr>    
        </tbody>
    </table>
    <a class=\"btn-flat primary\" href=\"{{ path('Acategorie') }}\">Annulla </a>
    <a class=\"btn-flat primary\" href=\"{{ path('Aconferma') }}\">Conferma </a>
</section>
{% endblock %}", "AppBundle:Amministratore:AriepilogoCategoria.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Amministratore/AriepilogoCategoria.html.twig");
    }
}
