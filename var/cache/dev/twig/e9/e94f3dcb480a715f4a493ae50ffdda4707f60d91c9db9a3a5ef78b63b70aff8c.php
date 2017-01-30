<?php

/* AppBundle:Login:login.html.twig */
class __TwigTemplate_2ab3e51d5f3ca06841c281c389a9a89966cf8f9253e31753415a50cad2903def extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Login:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7be46cbe0ade77dae66491d6bfc6017ff193d2c544465d4b3ce8a49328dbd81b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7be46cbe0ade77dae66491d6bfc6017ff193d2c544465d4b3ce8a49328dbd81b->enter($__internal_7be46cbe0ade77dae66491d6bfc6017ff193d2c544465d4b3ce8a49328dbd81b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Login:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7be46cbe0ade77dae66491d6bfc6017ff193d2c544465d4b3ce8a49328dbd81b->leave($__internal_7be46cbe0ade77dae66491d6bfc6017ff193d2c544465d4b3ce8a49328dbd81b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2eed402b1f9a1b3db432b4c9baf3aa4bf4a9b8bc0e44811b57cdecf3a8db685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2eed402b1f9a1b3db432b4c9baf3aa4bf4a9b8bc0e44811b57cdecf3a8db685->enter($__internal_a2eed402b1f9a1b3db432b4c9baf3aa4bf4a9b8bc0e44811b57cdecf3a8db685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Login";
        
        $__internal_a2eed402b1f9a1b3db432b4c9baf3aa4bf4a9b8bc0e44811b57cdecf3a8db685->leave($__internal_a2eed402b1f9a1b3db432b4c9baf3aa4bf4a9b8bc0e44811b57cdecf3a8db685_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d398b20196069d5aa63ce868c21683d1d2f70c8c484e4aa6fc072b6f1334c40d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d398b20196069d5aa63ce868c21683d1d2f70c8c484e4aa6fc072b6f1334c40d->enter($__internal_d398b20196069d5aa63ce868c21683d1d2f70c8c484e4aa6fc072b6f1334c40d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <form action=\"login\" method=\"post\">
        <div class=\"field-box\">
            <label>Nome Utente</label>
            <input name=\"User\" type=\"text\" value=\"\" placeholder=\"\" class=\"span6\" style=\"width:240px\" type=\"text\">
        </div>
        <div class=\"field-box\">
            <label>Password:</label>
            <input id=\"Password\" type=\"text\" value=\"\" class=\"span6\" style=\"width:240px\" type=\"text\">
        </div>\t\t\t
            <input type=\"submit\" class=\"btn-flat primary\" > 
    </form>\t
";
        
        $__internal_d398b20196069d5aa63ce868c21683d1d2f70c8c484e4aa6fc072b6f1334c40d->leave($__internal_d398b20196069d5aa63ce868c21683d1d2f70c8c484e4aa6fc072b6f1334c40d_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}Login{% endblock %}

{% block body %}
    <form action=\"login\" method=\"post\">
        <div class=\"field-box\">
            <label>Nome Utente</label>
            <input name=\"User\" type=\"text\" value=\"\" placeholder=\"\" class=\"span6\" style=\"width:240px\" type=\"text\">
        </div>
        <div class=\"field-box\">
            <label>Password:</label>
            <input id=\"Password\" type=\"text\" value=\"\" class=\"span6\" style=\"width:240px\" type=\"text\">
        </div>\t\t\t
            <input type=\"submit\" class=\"btn-flat primary\" > 
    </form>\t
{% endblock %}
", "AppBundle:Login:login.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Login/login.html.twig");
    }
}
