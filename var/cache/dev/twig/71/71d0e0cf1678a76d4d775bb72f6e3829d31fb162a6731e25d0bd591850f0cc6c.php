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
        $__internal_6e6760d063c563e22c27506dfb7d9b3c8a4460b24991cb937a61912b1f0cfa2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e6760d063c563e22c27506dfb7d9b3c8a4460b24991cb937a61912b1f0cfa2f->enter($__internal_6e6760d063c563e22c27506dfb7d9b3c8a4460b24991cb937a61912b1f0cfa2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e6760d063c563e22c27506dfb7d9b3c8a4460b24991cb937a61912b1f0cfa2f->leave($__internal_6e6760d063c563e22c27506dfb7d9b3c8a4460b24991cb937a61912b1f0cfa2f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_65f10dd1deb1cb3d237c72eea744b8db87ebc22557834914dd39bd264094727e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65f10dd1deb1cb3d237c72eea744b8db87ebc22557834914dd39bd264094727e->enter($__internal_65f10dd1deb1cb3d237c72eea744b8db87ebc22557834914dd39bd264094727e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_65f10dd1deb1cb3d237c72eea744b8db87ebc22557834914dd39bd264094727e->leave($__internal_65f10dd1deb1cb3d237c72eea744b8db87ebc22557834914dd39bd264094727e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a3f74caa0848379bf515ecb829aa118134bfe00c0f4d72e41177a6f32f2c5d94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3f74caa0848379bf515ecb829aa118134bfe00c0f4d72e41177a6f32f2c5d94->enter($__internal_a3f74caa0848379bf515ecb829aa118134bfe00c0f4d72e41177a6f32f2c5d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a3f74caa0848379bf515ecb829aa118134bfe00c0f4d72e41177a6f32f2c5d94->leave($__internal_a3f74caa0848379bf515ecb829aa118134bfe00c0f4d72e41177a6f32f2c5d94_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_75fd932757d89c7b5ca02ee2151cecb6703113601b5006fe73afcfd38c434cd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75fd932757d89c7b5ca02ee2151cecb6703113601b5006fe73afcfd38c434cd2->enter($__internal_75fd932757d89c7b5ca02ee2151cecb6703113601b5006fe73afcfd38c434cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_75fd932757d89c7b5ca02ee2151cecb6703113601b5006fe73afcfd38c434cd2->leave($__internal_75fd932757d89c7b5ca02ee2151cecb6703113601b5006fe73afcfd38c434cd2_prof);

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
