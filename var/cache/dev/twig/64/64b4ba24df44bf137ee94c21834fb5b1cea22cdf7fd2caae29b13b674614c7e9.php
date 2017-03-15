<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_45dce907d27a40e6934735514931f4cfa806c6c8455173bf727c6611838b4700 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_4556d32c2c58d05452b57f143f1b35521fbab792589c52ca89e887b4dc238cac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4556d32c2c58d05452b57f143f1b35521fbab792589c52ca89e887b4dc238cac->enter($__internal_4556d32c2c58d05452b57f143f1b35521fbab792589c52ca89e887b4dc238cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_1925bbe9ceae1ed155903aedc0924b5a876bdcddcf9121fabd2572015aa31fa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1925bbe9ceae1ed155903aedc0924b5a876bdcddcf9121fabd2572015aa31fa5->enter($__internal_1925bbe9ceae1ed155903aedc0924b5a876bdcddcf9121fabd2572015aa31fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4556d32c2c58d05452b57f143f1b35521fbab792589c52ca89e887b4dc238cac->leave($__internal_4556d32c2c58d05452b57f143f1b35521fbab792589c52ca89e887b4dc238cac_prof);

        
        $__internal_1925bbe9ceae1ed155903aedc0924b5a876bdcddcf9121fabd2572015aa31fa5->leave($__internal_1925bbe9ceae1ed155903aedc0924b5a876bdcddcf9121fabd2572015aa31fa5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_93bad65bd4e3bb0ceffbd5d1c1e892098a695b22eed6e9f080f84d16e918a8cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93bad65bd4e3bb0ceffbd5d1c1e892098a695b22eed6e9f080f84d16e918a8cd->enter($__internal_93bad65bd4e3bb0ceffbd5d1c1e892098a695b22eed6e9f080f84d16e918a8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_220f6e5f42680fc4a82441cc55000ea029fa297ace2506160a93b70781f6565d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_220f6e5f42680fc4a82441cc55000ea029fa297ace2506160a93b70781f6565d->enter($__internal_220f6e5f42680fc4a82441cc55000ea029fa297ace2506160a93b70781f6565d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_220f6e5f42680fc4a82441cc55000ea029fa297ace2506160a93b70781f6565d->leave($__internal_220f6e5f42680fc4a82441cc55000ea029fa297ace2506160a93b70781f6565d_prof);

        
        $__internal_93bad65bd4e3bb0ceffbd5d1c1e892098a695b22eed6e9f080f84d16e918a8cd->leave($__internal_93bad65bd4e3bb0ceffbd5d1c1e892098a695b22eed6e9f080f84d16e918a8cd_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a713814ed127e5ca7cc9c1a7109f0caee79be05f72da76352b8eeddbc11ac7fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a713814ed127e5ca7cc9c1a7109f0caee79be05f72da76352b8eeddbc11ac7fa->enter($__internal_a713814ed127e5ca7cc9c1a7109f0caee79be05f72da76352b8eeddbc11ac7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b40bfa27a337568ae163c6f718763e14a10c198ea93ce910381cf8b0b07bf105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b40bfa27a337568ae163c6f718763e14a10c198ea93ce910381cf8b0b07bf105->enter($__internal_b40bfa27a337568ae163c6f718763e14a10c198ea93ce910381cf8b0b07bf105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_b40bfa27a337568ae163c6f718763e14a10c198ea93ce910381cf8b0b07bf105->leave($__internal_b40bfa27a337568ae163c6f718763e14a10c198ea93ce910381cf8b0b07bf105_prof);

        
        $__internal_a713814ed127e5ca7cc9c1a7109f0caee79be05f72da76352b8eeddbc11ac7fa->leave($__internal_a713814ed127e5ca7cc9c1a7109f0caee79be05f72da76352b8eeddbc11ac7fa_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8dcca121d9bdab138d0b611c0919912e13a44d85104cea9e96c8e6164a20c2b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dcca121d9bdab138d0b611c0919912e13a44d85104cea9e96c8e6164a20c2b3->enter($__internal_8dcca121d9bdab138d0b611c0919912e13a44d85104cea9e96c8e6164a20c2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f1e1776cefeb6a788a1bcfdeaf79de2eebd9f7ecc84bf07b1ab2cbebd7086164 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1e1776cefeb6a788a1bcfdeaf79de2eebd9f7ecc84bf07b1ab2cbebd7086164->enter($__internal_f1e1776cefeb6a788a1bcfdeaf79de2eebd9f7ecc84bf07b1ab2cbebd7086164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_f1e1776cefeb6a788a1bcfdeaf79de2eebd9f7ecc84bf07b1ab2cbebd7086164->leave($__internal_f1e1776cefeb6a788a1bcfdeaf79de2eebd9f7ecc84bf07b1ab2cbebd7086164_prof);

        
        $__internal_8dcca121d9bdab138d0b611c0919912e13a44d85104cea9e96c8e6164a20c2b3->leave($__internal_8dcca121d9bdab138d0b611c0919912e13a44d85104cea9e96c8e6164a20c2b3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\Users\\fabio\\Desktop\\Nuova cartella\\Inprint\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
