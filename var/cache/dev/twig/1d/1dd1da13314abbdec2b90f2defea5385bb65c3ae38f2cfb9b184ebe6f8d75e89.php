<?php

/* AppBundle:ResponsabileProduzione:BaseOperatori.html.twig */
class __TwigTemplate_23c96cdc906ee489e34ad79fddd8028a01be84c279d0c236d5738e37b83b2477 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:ResponsabileProduzione:SPbase.html.twig", "AppBundle:ResponsabileProduzione:BaseOperatori.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'corpo' => array($this, 'block_corpo'),
            'Oheader' => array($this, 'block_Oheader'),
            'Ocorpo' => array($this, 'block_Ocorpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:ResponsabileProduzione:SPbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8182439b3dd103c7d310ab2ccd3545de0420f04eeecdb55c5a78691b633be05e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8182439b3dd103c7d310ab2ccd3545de0420f04eeecdb55c5a78691b633be05e->enter($__internal_8182439b3dd103c7d310ab2ccd3545de0420f04eeecdb55c5a78691b633be05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:ResponsabileProduzione:BaseOperatori.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8182439b3dd103c7d310ab2ccd3545de0420f04eeecdb55c5a78691b633be05e->leave($__internal_8182439b3dd103c7d310ab2ccd3545de0420f04eeecdb55c5a78691b633be05e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1cd81c4927961111af583bfd11c5a76faa66d31a8eebd3e7aab8e9288232d2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1cd81c4927961111af583bfd11c5a76faa66d31a8eebd3e7aab8e9288232d2b->enter($__internal_b1cd81c4927961111af583bfd11c5a76faa66d31a8eebd3e7aab8e9288232d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Operatori";
        
        $__internal_b1cd81c4927961111af583bfd11c5a76faa66d31a8eebd3e7aab8e9288232d2b->leave($__internal_b1cd81c4927961111af583bfd11c5a76faa66d31a8eebd3e7aab8e9288232d2b_prof);

    }

    // line 5
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_4765b72801218c122ed81abbd5d6e4ce3fcff2cdc2fe578505f8c2826ab648cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4765b72801218c122ed81abbd5d6e4ce3fcff2cdc2fe578505f8c2826ab648cf->enter($__internal_4765b72801218c122ed81abbd5d6e4ce3fcff2cdc2fe578505f8c2826ab648cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 6
        echo "
    ";
        // line 7
        $this->displayBlock('Oheader', $context, $blocks);
        // line 18
        echo "    ";
        $this->displayBlock('Ocorpo', $context, $blocks);
        // line 20
        echo "    
";
        
        $__internal_4765b72801218c122ed81abbd5d6e4ce3fcff2cdc2fe578505f8c2826ab648cf->leave($__internal_4765b72801218c122ed81abbd5d6e4ce3fcff2cdc2fe578505f8c2826ab648cf_prof);

    }

    // line 7
    public function block_Oheader($context, array $blocks = array())
    {
        $__internal_2b11afa28b1984ecc87a417d6a6f1be71f7cd4b22aa0d1ad668582f3d66bb9bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b11afa28b1984ecc87a417d6a6f1be71f7cd4b22aa0d1ad668582f3d66bb9bc->enter($__internal_2b11afa28b1984ecc87a417d6a6f1be71f7cd4b22aa0d1ad668582f3d66bb9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Oheader"));

        // line 8
        echo "    <header style=\" background: linear-gradient(to right,#646464,#b9b9b9)\">
                    <nav class=\"menu\">
                            <ul >
                    <li><a href=\"esterni.html\">Home</a></li>
                    <li><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("SPnuovoOperatore");
        echo "\">Nuovo operatore</a></li>
                    <li><a href=\"enuovo.html\">Gestisci lavoro</a></li>
                </ul>
            </nav>
    </header>
    ";
        
        $__internal_2b11afa28b1984ecc87a417d6a6f1be71f7cd4b22aa0d1ad668582f3d66bb9bc->leave($__internal_2b11afa28b1984ecc87a417d6a6f1be71f7cd4b22aa0d1ad668582f3d66bb9bc_prof);

    }

    // line 18
    public function block_Ocorpo($context, array $blocks = array())
    {
        $__internal_b5480e7a8e436267dfc75e03fe82c5842443d4e49664acae4b2ab9aec0abe3f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5480e7a8e436267dfc75e03fe82c5842443d4e49664acae4b2ab9aec0abe3f8->enter($__internal_b5480e7a8e436267dfc75e03fe82c5842443d4e49664acae4b2ab9aec0abe3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Ocorpo"));

        // line 19
        echo "    ";
        
        $__internal_b5480e7a8e436267dfc75e03fe82c5842443d4e49664acae4b2ab9aec0abe3f8->leave($__internal_b5480e7a8e436267dfc75e03fe82c5842443d4e49664acae4b2ab9aec0abe3f8_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:ResponsabileProduzione:BaseOperatori.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 19,  96 => 18,  83 => 12,  77 => 8,  71 => 7,  63 => 20,  60 => 18,  58 => 7,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle:ResponsabileProduzione:SPbase.html.twig\" %}

{% block title %}Operatori{% endblock %}

{% block corpo %}

    {%block Oheader %}
    <header style=\" background: linear-gradient(to right,#646464,#b9b9b9)\">
                    <nav class=\"menu\">
                            <ul >
                    <li><a href=\"esterni.html\">Home</a></li>
                    <li><a href=\"{{ path('SPnuovoOperatore')}}\">Nuovo operatore</a></li>
                    <li><a href=\"enuovo.html\">Gestisci lavoro</a></li>
                </ul>
            </nav>
    </header>
    {%endblock%}
    {%block Ocorpo%}
    {%endblock%}
    
{% endblock %}", "AppBundle:ResponsabileProduzione:BaseOperatori.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/ResponsabileProduzione/BaseOperatori.html.twig");
    }
}
