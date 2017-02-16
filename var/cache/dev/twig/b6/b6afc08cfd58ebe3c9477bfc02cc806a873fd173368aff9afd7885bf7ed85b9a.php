<?php

/* AppBundle:Amministratore:RiepilogoCategoria.html.twig */
class __TwigTemplate_169e067975b85bbb01e672cd52c062a04d20d5ebc4ed8e4307a9ef71386ae328 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'corpo' => array($this, 'block_corpo'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_232af1bc793db591ed3a6e14342baa6f4102c5c07b13c128d8b362c35c50c13e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_232af1bc793db591ed3a6e14342baa6f4102c5c07b13c128d8b362c35c50c13e->enter($__internal_232af1bc793db591ed3a6e14342baa6f4102c5c07b13c128d8b362c35c50c13e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Amministratore:RiepilogoCategoria.html.twig"));

        // line 1
        $this->displayBlock('corpo', $context, $blocks);
        
        $__internal_232af1bc793db591ed3a6e14342baa6f4102c5c07b13c128d8b362c35c50c13e->leave($__internal_232af1bc793db591ed3a6e14342baa6f4102c5c07b13c128d8b362c35c50c13e_prof);

    }

    public function block_corpo($context, array $blocks = array())
    {
        $__internal_27d09aaee4e424786d7931dd213492f62f383f03e78d143ba2a64f083fd922cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27d09aaee4e424786d7931dd213492f62f383f03e78d143ba2a64f083fd922cc->enter($__internal_27d09aaee4e424786d7931dd213492f62f383f03e78d143ba2a64f083fd922cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 2
        echo "    Salvata
";
        
        $__internal_27d09aaee4e424786d7931dd213492f62f383f03e78d143ba2a64f083fd922cc->leave($__internal_27d09aaee4e424786d7931dd213492f62f383f03e78d143ba2a64f083fd922cc_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Amministratore:RiepilogoCategoria.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block corpo %}
    Salvata
{% endblock %}", "AppBundle:Amministratore:RiepilogoCategoria.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Amministratore/RiepilogoCategoria.html.twig");
    }
}
