<?php

/* AppBundle:Login:login.html.twig */
class __TwigTemplate_82ab93197fa47ef0f33a7969168f6b7b335bbef3ba2c1841a1488874a0112bac extends Twig_Template
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
        $__internal_80123685f9ea6452064ccc084b0c0dacb2adf10964076ea97c825870f53f2f9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80123685f9ea6452064ccc084b0c0dacb2adf10964076ea97c825870f53f2f9e->enter($__internal_80123685f9ea6452064ccc084b0c0dacb2adf10964076ea97c825870f53f2f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Login:login.html.twig"));

        $__internal_342c769793840851232c087fc442401440923004968e5aea09185cd9ed4e53f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_342c769793840851232c087fc442401440923004968e5aea09185cd9ed4e53f4->enter($__internal_342c769793840851232c087fc442401440923004968e5aea09185cd9ed4e53f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Login:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80123685f9ea6452064ccc084b0c0dacb2adf10964076ea97c825870f53f2f9e->leave($__internal_80123685f9ea6452064ccc084b0c0dacb2adf10964076ea97c825870f53f2f9e_prof);

        
        $__internal_342c769793840851232c087fc442401440923004968e5aea09185cd9ed4e53f4->leave($__internal_342c769793840851232c087fc442401440923004968e5aea09185cd9ed4e53f4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ab9f342722075c78740992576f3efc6cd2f5b857854f005ed59e83f3d213148 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ab9f342722075c78740992576f3efc6cd2f5b857854f005ed59e83f3d213148->enter($__internal_8ab9f342722075c78740992576f3efc6cd2f5b857854f005ed59e83f3d213148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_51e1e2507d985503bdbc0c85dcf8817f563341151fce4ed0501332ca69bf15cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51e1e2507d985503bdbc0c85dcf8817f563341151fce4ed0501332ca69bf15cc->enter($__internal_51e1e2507d985503bdbc0c85dcf8817f563341151fce4ed0501332ca69bf15cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Login";
        
        $__internal_51e1e2507d985503bdbc0c85dcf8817f563341151fce4ed0501332ca69bf15cc->leave($__internal_51e1e2507d985503bdbc0c85dcf8817f563341151fce4ed0501332ca69bf15cc_prof);

        
        $__internal_8ab9f342722075c78740992576f3efc6cd2f5b857854f005ed59e83f3d213148->leave($__internal_8ab9f342722075c78740992576f3efc6cd2f5b857854f005ed59e83f3d213148_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0b887ec25ca0cb885b4ba3c6137745da922a2c51d334dfa06130326cfc5d806 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0b887ec25ca0cb885b4ba3c6137745da922a2c51d334dfa06130326cfc5d806->enter($__internal_d0b887ec25ca0cb885b4ba3c6137745da922a2c51d334dfa06130326cfc5d806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b964c62dfb3f1625e3fd822612cb574790921df65333a3fa856d2dae1b1f9c0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b964c62dfb3f1625e3fd822612cb574790921df65333a3fa856d2dae1b1f9c0a->enter($__internal_b964c62dfb3f1625e3fd822612cb574790921df65333a3fa856d2dae1b1f9c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b964c62dfb3f1625e3fd822612cb574790921df65333a3fa856d2dae1b1f9c0a->leave($__internal_b964c62dfb3f1625e3fd822612cb574790921df65333a3fa856d2dae1b1f9c0a_prof);

        
        $__internal_d0b887ec25ca0cb885b4ba3c6137745da922a2c51d334dfa06130326cfc5d806->leave($__internal_d0b887ec25ca0cb885b4ba3c6137745da922a2c51d334dfa06130326cfc5d806_prof);

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
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
", "AppBundle:Login:login.html.twig", "C:\\Users\\fabio\\Desktop\\Nuova cartella\\Inprint\\src\\AppBundle/Resources/views/Login/login.html.twig");
    }
}
