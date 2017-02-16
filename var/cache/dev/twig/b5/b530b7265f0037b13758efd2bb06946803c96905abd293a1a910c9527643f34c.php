<?php

/* AppBundle:Amministratore:nuoviattributi.html.twig */
class __TwigTemplate_baa5b17b604f249bc3a78f1754e38bbe850fc6ef7d48cab58a3a731a37e27a60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_492797c462b8b76d7ccfd2a65bf040babcdc3f5ea47cb1156b4779edbd9df6ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_492797c462b8b76d7ccfd2a65bf040babcdc3f5ea47cb1156b4779edbd9df6ea->enter($__internal_492797c462b8b76d7ccfd2a65bf040babcdc3f5ea47cb1156b4779edbd9df6ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Amministratore:nuoviattributi.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["n"]) ? $context["n"] : $this->getContext($context, "n"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 2
            echo "<div class=\"field-box\">
    <label>Valore ";
            // line 3
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo " :</label>
    <input id=\"val";
            // line 4
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" value=\"\" placeholder=\"\" class=\"span6\" style=\"width:240px\" type=\"text\">
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_492797c462b8b76d7ccfd2a65bf040babcdc3f5ea47cb1156b4779edbd9df6ea->leave($__internal_492797c462b8b76d7ccfd2a65bf040babcdc3f5ea47cb1156b4779edbd9df6ea_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Amministratore:nuoviattributi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  29 => 3,  26 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%for i in 1..n%}
<div class=\"field-box\">
    <label>Valore {{i}} :</label>
    <input id=\"val{{i}}\" value=\"\" placeholder=\"\" class=\"span6\" style=\"width:240px\" type=\"text\">
</div>
{%endfor%}", "AppBundle:Amministratore:nuoviattributi.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Amministratore/nuoviattributi.html.twig");
    }
}
