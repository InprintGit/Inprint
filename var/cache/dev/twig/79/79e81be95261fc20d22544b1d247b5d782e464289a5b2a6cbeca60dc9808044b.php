<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_be4d1cec9070807712a715a9780d24ad57ccc6b94a94437daf23cc99cf8bb023 extends Twig_Template
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
        $__internal_83ef486102097ef756d780995180ed5bfb39bcb8568e0acda82890770e98acfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83ef486102097ef756d780995180ed5bfb39bcb8568e0acda82890770e98acfb->enter($__internal_83ef486102097ef756d780995180ed5bfb39bcb8568e0acda82890770e98acfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_1a14f940cb0bfee061d7a8863a6d804f74d2b5c93e2cb604eb494867a0c9c48d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a14f940cb0bfee061d7a8863a6d804f74d2b5c93e2cb604eb494867a0c9c48d->enter($__internal_1a14f940cb0bfee061d7a8863a6d804f74d2b5c93e2cb604eb494867a0c9c48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83ef486102097ef756d780995180ed5bfb39bcb8568e0acda82890770e98acfb->leave($__internal_83ef486102097ef756d780995180ed5bfb39bcb8568e0acda82890770e98acfb_prof);

        
        $__internal_1a14f940cb0bfee061d7a8863a6d804f74d2b5c93e2cb604eb494867a0c9c48d->leave($__internal_1a14f940cb0bfee061d7a8863a6d804f74d2b5c93e2cb604eb494867a0c9c48d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_37048f7c63f8b006e04e3c64160c64ab56f5afe9b46e01922eeed89db4c0b1b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37048f7c63f8b006e04e3c64160c64ab56f5afe9b46e01922eeed89db4c0b1b2->enter($__internal_37048f7c63f8b006e04e3c64160c64ab56f5afe9b46e01922eeed89db4c0b1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_03dd29c8c980e13f45a1bc6f7f1f148cdc715bad6d1ae4d8078c0f1ba5be8a25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03dd29c8c980e13f45a1bc6f7f1f148cdc715bad6d1ae4d8078c0f1ba5be8a25->enter($__internal_03dd29c8c980e13f45a1bc6f7f1f148cdc715bad6d1ae4d8078c0f1ba5be8a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_03dd29c8c980e13f45a1bc6f7f1f148cdc715bad6d1ae4d8078c0f1ba5be8a25->leave($__internal_03dd29c8c980e13f45a1bc6f7f1f148cdc715bad6d1ae4d8078c0f1ba5be8a25_prof);

        
        $__internal_37048f7c63f8b006e04e3c64160c64ab56f5afe9b46e01922eeed89db4c0b1b2->leave($__internal_37048f7c63f8b006e04e3c64160c64ab56f5afe9b46e01922eeed89db4c0b1b2_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_37ecd06cd049a5b88e7425a23b1d2c8c84bcfbcb760db3a563ce848f7cbbbc19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37ecd06cd049a5b88e7425a23b1d2c8c84bcfbcb760db3a563ce848f7cbbbc19->enter($__internal_37ecd06cd049a5b88e7425a23b1d2c8c84bcfbcb760db3a563ce848f7cbbbc19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5228cd4e539afc3597c7ec02faa2011bf70e555def27ca1c0d604988a2e61b58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5228cd4e539afc3597c7ec02faa2011bf70e555def27ca1c0d604988a2e61b58->enter($__internal_5228cd4e539afc3597c7ec02faa2011bf70e555def27ca1c0d604988a2e61b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5228cd4e539afc3597c7ec02faa2011bf70e555def27ca1c0d604988a2e61b58->leave($__internal_5228cd4e539afc3597c7ec02faa2011bf70e555def27ca1c0d604988a2e61b58_prof);

        
        $__internal_37ecd06cd049a5b88e7425a23b1d2c8c84bcfbcb760db3a563ce848f7cbbbc19->leave($__internal_37ecd06cd049a5b88e7425a23b1d2c8c84bcfbcb760db3a563ce848f7cbbbc19_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_79e2c90fd82372a6121ce988dd0a9923ae61a1341feefde19f01c189b1ac2f93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79e2c90fd82372a6121ce988dd0a9923ae61a1341feefde19f01c189b1ac2f93->enter($__internal_79e2c90fd82372a6121ce988dd0a9923ae61a1341feefde19f01c189b1ac2f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_65950e795c1aa712435a1e4b3483620c11269c56c7797c3bfb9f52a52b342ebf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65950e795c1aa712435a1e4b3483620c11269c56c7797c3bfb9f52a52b342ebf->enter($__internal_65950e795c1aa712435a1e4b3483620c11269c56c7797c3bfb9f52a52b342ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_65950e795c1aa712435a1e4b3483620c11269c56c7797c3bfb9f52a52b342ebf->leave($__internal_65950e795c1aa712435a1e4b3483620c11269c56c7797c3bfb9f52a52b342ebf_prof);

        
        $__internal_79e2c90fd82372a6121ce988dd0a9923ae61a1341feefde19f01c189b1ac2f93->leave($__internal_79e2c90fd82372a6121ce988dd0a9923ae61a1341feefde19f01c189b1ac2f93_prof);

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
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\Users\\fabio\\Desktop\\Nuova cartella\\Inprint\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
