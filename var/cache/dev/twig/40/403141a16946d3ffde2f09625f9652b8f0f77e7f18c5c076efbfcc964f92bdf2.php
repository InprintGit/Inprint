<?php

/* AppBundle:Prinkino:catalogo.html.twig */
class __TwigTemplate_e86c6c06de8a22c10822aa25b436ca8a2d9b92decabf8ffe0d04883931ef21dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Prinkino:catalogo.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'corpo' => array($this, 'block_corpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dae056ae6997db01c64d49b51f7eea5bce1bcc9a07144ac55317ab233e0e2055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dae056ae6997db01c64d49b51f7eea5bce1bcc9a07144ac55317ab233e0e2055->enter($__internal_dae056ae6997db01c64d49b51f7eea5bce1bcc9a07144ac55317ab233e0e2055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Prinkino:catalogo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dae056ae6997db01c64d49b51f7eea5bce1bcc9a07144ac55317ab233e0e2055->leave($__internal_dae056ae6997db01c64d49b51f7eea5bce1bcc9a07144ac55317ab233e0e2055_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5c71edf9df9d2b925a27ff765af1155b9cc46f14a8f9f2d30ba5dcb20c272214 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c71edf9df9d2b925a27ff765af1155b9cc46f14a8f9f2d30ba5dcb20c272214->enter($__internal_5c71edf9df9d2b925a27ff765af1155b9cc46f14a8f9f2d30ba5dcb20c272214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
            <link rel=\"shortcut icon\" href=\"../favicon.ico\">
\t\t<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/css/normalize.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/css/demo.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/css/cs-select.css"), "html", null, true);
        echo "\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/css/cs-skin-boxes.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_5c71edf9df9d2b925a27ff765af1155b9cc46f14a8f9f2d30ba5dcb20c272214->leave($__internal_5c71edf9df9d2b925a27ff765af1155b9cc46f14a8f9f2d30ba5dcb20c272214_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_b6e3caba19795d77a8382d7e61092c9bdc80f33ee8b474f6d855c4360f83b3f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6e3caba19795d77a8382d7e61092c9bdc80f33ee8b474f6d855c4360f83b3f7->enter($__internal_b6e3caba19795d77a8382d7e61092c9bdc80f33ee8b474f6d855c4360f83b3f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Catalogo Prodotti";
        
        $__internal_b6e3caba19795d77a8382d7e61092c9bdc80f33ee8b474f6d855c4360f83b3f7->leave($__internal_b6e3caba19795d77a8382d7e61092c9bdc80f33ee8b474f6d855c4360f83b3f7_prof);

    }

    // line 15
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_69272242d4a539740e09b78ad19754ee8962db689503aaa7d4d431a847a35c24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69272242d4a539740e09b78ad19754ee8962db689503aaa7d4d431a847a35c24->enter($__internal_69272242d4a539740e09b78ad19754ee8962db689503aaa7d4d431a847a35c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 16
        echo "    <body class=\"color-7\">
\t\t<div class=\"container\">
\t\t\t
\t\t\t<div class=\"codrops-header\">
                            <div id=\"precedente\">
\t\t\t\t<h1>Seleziona Categoria</h1>
                            </div>
\t\t\t</div>
\t\t\t<div id=\"selezione\">
\t\t\t\t<select class=\"cs-select cs-skin-boxes\" onclick=\"SottoCategorie(1)\" >
                                    <option name\"\" value=\"\" disabled selected>Seleziona Categoria</option>
                                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 28
            echo "                                    <option name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nome", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "\" data-class=\"color-588c75\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nome", array()), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t\t\t\t</select>
                        </div>
                        <section id=\"producibili\">
                                
                        </section>

\t\t\t\t\t\t\t
\t\t</div>
\t\t<script src=\"prinkino/js/classie.js\"></script>
\t\t<script src=\"prinkino/js/selectFx.js\"></script>
\t\t<script>
\t\t\t(function() {
\t\t\t\t[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {\t
\t\t\t\t\tnew SelectFx(el, {
\t\t\t\t\t\tstickyPlaceholder: false,
\t\t\t\t\t\tonChange: function(val){
                                                        SottoCategorie(val);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t} );
\t\t\t})();
\t\t</script>
\t</body>
";
        
        $__internal_69272242d4a539740e09b78ad19754ee8962db689503aaa7d4d431a847a35c24->leave($__internal_69272242d4a539740e09b78ad19754ee8962db689503aaa7d4d431a847a35c24_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Prinkino:catalogo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 30,  105 => 28,  101 => 27,  88 => 16,  82 => 15,  70 => 13,  61 => 10,  57 => 9,  53 => 8,  49 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block stylesheets %}
     {{ parent() }}
            <link rel=\"shortcut icon\" href=\"../favicon.ico\">
\t\t<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/css/normalize.css\")}}\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/css/demo.css\")}}\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/css/cs-select.css\")}}\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/css/cs-skin-boxes.css\")}}\" />
{% endblock %}

{% block title %}Catalogo Prodotti{% endblock %}

{% block corpo %}
    <body class=\"color-7\">
\t\t<div class=\"container\">
\t\t\t
\t\t\t<div class=\"codrops-header\">
                            <div id=\"precedente\">
\t\t\t\t<h1>Seleziona Categoria</h1>
                            </div>
\t\t\t</div>
\t\t\t<div id=\"selezione\">
\t\t\t\t<select class=\"cs-select cs-skin-boxes\" onclick=\"SottoCategorie(1)\" >
                                    <option name\"\" value=\"\" disabled selected>Seleziona Categoria</option>
                                    {%for item in catalogo%}
                                    <option name=\"{{item.nome}}\" value=\"{{item.id}}\" data-class=\"color-588c75\">{{item.nome}}</option>
                                    {%endfor%}
\t\t\t\t</select>
                        </div>
                        <section id=\"producibili\">
                                
                        </section>

\t\t\t\t\t\t\t
\t\t</div>
\t\t<script src=\"prinkino/js/classie.js\"></script>
\t\t<script src=\"prinkino/js/selectFx.js\"></script>
\t\t<script>
\t\t\t(function() {
\t\t\t\t[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {\t
\t\t\t\t\tnew SelectFx(el, {
\t\t\t\t\t\tstickyPlaceholder: false,
\t\t\t\t\t\tonChange: function(val){
                                                        SottoCategorie(val);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t} );
\t\t\t})();
\t\t</script>
\t</body>
{% endblock %}", "AppBundle:Prinkino:catalogo.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Prinkino/catalogo.html.twig");
    }
}
