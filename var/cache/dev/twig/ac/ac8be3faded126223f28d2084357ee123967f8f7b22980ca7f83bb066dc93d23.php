<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_60b558f13f212622b71429dd386fc723affe025f7fe41bce03aef6d62d5c4bda extends Twig_Template
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
        $__internal_257c5eb53258d176fd0a218c62b3341bd6b9303b58b12fd16a25bf4cd98e4bc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_257c5eb53258d176fd0a218c62b3341bd6b9303b58b12fd16a25bf4cd98e4bc8->enter($__internal_257c5eb53258d176fd0a218c62b3341bd6b9303b58b12fd16a25bf4cd98e4bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_75db17256e358a4ad1165db5f867591621e95dedfec90c345a4eff1470897002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75db17256e358a4ad1165db5f867591621e95dedfec90c345a4eff1470897002->enter($__internal_75db17256e358a4ad1165db5f867591621e95dedfec90c345a4eff1470897002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_257c5eb53258d176fd0a218c62b3341bd6b9303b58b12fd16a25bf4cd98e4bc8->leave($__internal_257c5eb53258d176fd0a218c62b3341bd6b9303b58b12fd16a25bf4cd98e4bc8_prof);

        
        $__internal_75db17256e358a4ad1165db5f867591621e95dedfec90c345a4eff1470897002->leave($__internal_75db17256e358a4ad1165db5f867591621e95dedfec90c345a4eff1470897002_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f0553ab40542eacd6b608f11f36379bb33e6d17252d5cdfc65546a5c56da61f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0553ab40542eacd6b608f11f36379bb33e6d17252d5cdfc65546a5c56da61f5->enter($__internal_f0553ab40542eacd6b608f11f36379bb33e6d17252d5cdfc65546a5c56da61f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bdafeffb65a2771bcda5c20c89a089e8a8ccd64775efd645278d86c03f481c03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdafeffb65a2771bcda5c20c89a089e8a8ccd64775efd645278d86c03f481c03->enter($__internal_bdafeffb65a2771bcda5c20c89a089e8a8ccd64775efd645278d86c03f481c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bdafeffb65a2771bcda5c20c89a089e8a8ccd64775efd645278d86c03f481c03->leave($__internal_bdafeffb65a2771bcda5c20c89a089e8a8ccd64775efd645278d86c03f481c03_prof);

        
        $__internal_f0553ab40542eacd6b608f11f36379bb33e6d17252d5cdfc65546a5c56da61f5->leave($__internal_f0553ab40542eacd6b608f11f36379bb33e6d17252d5cdfc65546a5c56da61f5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e8e7f87164fb3491220e4eb32cef250f93c395a9a2927a632e7f503b310219cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8e7f87164fb3491220e4eb32cef250f93c395a9a2927a632e7f503b310219cb->enter($__internal_e8e7f87164fb3491220e4eb32cef250f93c395a9a2927a632e7f503b310219cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7141db18e05140305bedf08728bc8106d9d54591471e8cd978ddeec845717b4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7141db18e05140305bedf08728bc8106d9d54591471e8cd978ddeec845717b4d->enter($__internal_7141db18e05140305bedf08728bc8106d9d54591471e8cd978ddeec845717b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7141db18e05140305bedf08728bc8106d9d54591471e8cd978ddeec845717b4d->leave($__internal_7141db18e05140305bedf08728bc8106d9d54591471e8cd978ddeec845717b4d_prof);

        
        $__internal_e8e7f87164fb3491220e4eb32cef250f93c395a9a2927a632e7f503b310219cb->leave($__internal_e8e7f87164fb3491220e4eb32cef250f93c395a9a2927a632e7f503b310219cb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_30ce4eb672848c9b86d0f007e086630071cf1e0ee46c4920397eb3ab49785da1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30ce4eb672848c9b86d0f007e086630071cf1e0ee46c4920397eb3ab49785da1->enter($__internal_30ce4eb672848c9b86d0f007e086630071cf1e0ee46c4920397eb3ab49785da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0938f294a7c0972ad500a259bbb36e6122ee6441a68dd131bf56eff838c98d03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0938f294a7c0972ad500a259bbb36e6122ee6441a68dd131bf56eff838c98d03->enter($__internal_0938f294a7c0972ad500a259bbb36e6122ee6441a68dd131bf56eff838c98d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0938f294a7c0972ad500a259bbb36e6122ee6441a68dd131bf56eff838c98d03->leave($__internal_0938f294a7c0972ad500a259bbb36e6122ee6441a68dd131bf56eff838c98d03_prof);

        
        $__internal_30ce4eb672848c9b86d0f007e086630071cf1e0ee46c4920397eb3ab49785da1->leave($__internal_30ce4eb672848c9b86d0f007e086630071cf1e0ee46c4920397eb3ab49785da1_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\fabio\\Desktop\\Nuova cartella\\Inprint\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
