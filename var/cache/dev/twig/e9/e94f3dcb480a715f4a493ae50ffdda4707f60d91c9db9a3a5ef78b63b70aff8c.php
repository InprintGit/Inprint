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
        $__internal_25b8e2696aa3ad773a2cdcc0efaa7fcc7c87905e7da18c7e98efbf9b55b456cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25b8e2696aa3ad773a2cdcc0efaa7fcc7c87905e7da18c7e98efbf9b55b456cb->enter($__internal_25b8e2696aa3ad773a2cdcc0efaa7fcc7c87905e7da18c7e98efbf9b55b456cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Login:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25b8e2696aa3ad773a2cdcc0efaa7fcc7c87905e7da18c7e98efbf9b55b456cb->leave($__internal_25b8e2696aa3ad773a2cdcc0efaa7fcc7c87905e7da18c7e98efbf9b55b456cb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2bb6373c35fd654db6dc3291d8f891ed1ecf3d8ae831a511564460d16e597a01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bb6373c35fd654db6dc3291d8f891ed1ecf3d8ae831a511564460d16e597a01->enter($__internal_2bb6373c35fd654db6dc3291d8f891ed1ecf3d8ae831a511564460d16e597a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Login";
        
        $__internal_2bb6373c35fd654db6dc3291d8f891ed1ecf3d8ae831a511564460d16e597a01->leave($__internal_2bb6373c35fd654db6dc3291d8f891ed1ecf3d8ae831a511564460d16e597a01_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_756f9dc197076fcbbb414eeff7b953871e30f0b6dbe46688cb5f9cc9414f0af8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_756f9dc197076fcbbb414eeff7b953871e30f0b6dbe46688cb5f9cc9414f0af8->enter($__internal_756f9dc197076fcbbb414eeff7b953871e30f0b6dbe46688cb5f9cc9414f0af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_756f9dc197076fcbbb414eeff7b953871e30f0b6dbe46688cb5f9cc9414f0af8->leave($__internal_756f9dc197076fcbbb414eeff7b953871e30f0b6dbe46688cb5f9cc9414f0af8_prof);

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
