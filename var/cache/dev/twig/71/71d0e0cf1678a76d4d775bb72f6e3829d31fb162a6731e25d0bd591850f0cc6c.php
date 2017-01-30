<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2f29ca92cf9a8f101c31b7206b795fe0048cd521793ccab51a6bfe1c52c6d5e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5830515618e670108c3ece83822fd0c7a27fe2e5403072c564c06d0cb6dcfea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5830515618e670108c3ece83822fd0c7a27fe2e5403072c564c06d0cb6dcfea->enter($__internal_e5830515618e670108c3ece83822fd0c7a27fe2e5403072c564c06d0cb6dcfea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5830515618e670108c3ece83822fd0c7a27fe2e5403072c564c06d0cb6dcfea->leave($__internal_e5830515618e670108c3ece83822fd0c7a27fe2e5403072c564c06d0cb6dcfea_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_532d38532d0b2659c79eeab8a885f4e48776e4b45c6d3eafdc76e144c6e7401e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_532d38532d0b2659c79eeab8a885f4e48776e4b45c6d3eafdc76e144c6e7401e->enter($__internal_532d38532d0b2659c79eeab8a885f4e48776e4b45c6d3eafdc76e144c6e7401e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_532d38532d0b2659c79eeab8a885f4e48776e4b45c6d3eafdc76e144c6e7401e->leave($__internal_532d38532d0b2659c79eeab8a885f4e48776e4b45c6d3eafdc76e144c6e7401e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e34f76c1286c3ea78b84caffdd3ff6c594046a5cdb67adb906cca0d3f8756bd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e34f76c1286c3ea78b84caffdd3ff6c594046a5cdb67adb906cca0d3f8756bd0->enter($__internal_e34f76c1286c3ea78b84caffdd3ff6c594046a5cdb67adb906cca0d3f8756bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e34f76c1286c3ea78b84caffdd3ff6c594046a5cdb67adb906cca0d3f8756bd0->leave($__internal_e34f76c1286c3ea78b84caffdd3ff6c594046a5cdb67adb906cca0d3f8756bd0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8c956a7fa931969ca770e3fff3bfd681b0f5edf4f246a4bf932d5fb228ef905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8c956a7fa931969ca770e3fff3bfd681b0f5edf4f246a4bf932d5fb228ef905->enter($__internal_a8c956a7fa931969ca770e3fff3bfd681b0f5edf4f246a4bf932d5fb228ef905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a8c956a7fa931969ca770e3fff3bfd681b0f5edf4f246a4bf932d5fb228ef905->leave($__internal_a8c956a7fa931969ca770e3fff3bfd681b0f5edf4f246a4bf932d5fb228ef905_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
