<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_b26448be0d591a58ae0d5f41a4f1537495fd9114ed0151e4a313ffc23af651ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f173437ea423c18edc8dbe21d4bdc2b9321eab2154deabe33c4f7f53d8be689c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f173437ea423c18edc8dbe21d4bdc2b9321eab2154deabe33c4f7f53d8be689c->enter($__internal_f173437ea423c18edc8dbe21d4bdc2b9321eab2154deabe33c4f7f53d8be689c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f173437ea423c18edc8dbe21d4bdc2b9321eab2154deabe33c4f7f53d8be689c->leave($__internal_f173437ea423c18edc8dbe21d4bdc2b9321eab2154deabe33c4f7f53d8be689c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9e583b058075db8b50a13632cf8188921e61d84f97256f749ba158ca6b8946e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e583b058075db8b50a13632cf8188921e61d84f97256f749ba158ca6b8946e4->enter($__internal_9e583b058075db8b50a13632cf8188921e61d84f97256f749ba158ca6b8946e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9e583b058075db8b50a13632cf8188921e61d84f97256f749ba158ca6b8946e4->leave($__internal_9e583b058075db8b50a13632cf8188921e61d84f97256f749ba158ca6b8946e4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
