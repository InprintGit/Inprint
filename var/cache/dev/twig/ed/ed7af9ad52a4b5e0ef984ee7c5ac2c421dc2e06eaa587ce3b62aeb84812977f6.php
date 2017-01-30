<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3059c4fcd605a06b7aa7098bb7f538bf9e6c3b96884321addff5e7677f54781f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a8934a39148898adc22cec29f8aed113690c54fc8d923dafb4a2db5e38bfccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a8934a39148898adc22cec29f8aed113690c54fc8d923dafb4a2db5e38bfccc->enter($__internal_5a8934a39148898adc22cec29f8aed113690c54fc8d923dafb4a2db5e38bfccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a8934a39148898adc22cec29f8aed113690c54fc8d923dafb4a2db5e38bfccc->leave($__internal_5a8934a39148898adc22cec29f8aed113690c54fc8d923dafb4a2db5e38bfccc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4915d5545204de6569b9b1f5da543dca657a1e553220c707f8aedccb94c63968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4915d5545204de6569b9b1f5da543dca657a1e553220c707f8aedccb94c63968->enter($__internal_4915d5545204de6569b9b1f5da543dca657a1e553220c707f8aedccb94c63968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4915d5545204de6569b9b1f5da543dca657a1e553220c707f8aedccb94c63968->leave($__internal_4915d5545204de6569b9b1f5da543dca657a1e553220c707f8aedccb94c63968_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_93b955d5c4e3b25339a0699dfb4e76b0c25e89f0b757b467c6989846002e8365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93b955d5c4e3b25339a0699dfb4e76b0c25e89f0b757b467c6989846002e8365->enter($__internal_93b955d5c4e3b25339a0699dfb4e76b0c25e89f0b757b467c6989846002e8365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_93b955d5c4e3b25339a0699dfb4e76b0c25e89f0b757b467c6989846002e8365->leave($__internal_93b955d5c4e3b25339a0699dfb4e76b0c25e89f0b757b467c6989846002e8365_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0496f9150605a1ba848af6c583f351f41dfcfbe6d59a95b2c29d1d51eb6902b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0496f9150605a1ba848af6c583f351f41dfcfbe6d59a95b2c29d1d51eb6902b6->enter($__internal_0496f9150605a1ba848af6c583f351f41dfcfbe6d59a95b2c29d1d51eb6902b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0496f9150605a1ba848af6c583f351f41dfcfbe6d59a95b2c29d1d51eb6902b6->leave($__internal_0496f9150605a1ba848af6c583f351f41dfcfbe6d59a95b2c29d1d51eb6902b6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
