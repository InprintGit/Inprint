<?php

/* ::base.html.twig */
class __TwigTemplate_f353b08277311223a1d550cf23ca60adadf6f86f24d87c5bd2f56a268f40cb2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'aside' => array($this, 'block_aside'),
            'corpo' => array($this, 'block_corpo'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5842326d0b1db05d67ee8901c16ac2c2be6a9333f9f1ac5d2defb7f94f73094b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5842326d0b1db05d67ee8901c16ac2c2be6a9333f9f1ac5d2defb7f94f73094b->enter($__internal_5842326d0b1db05d67ee8901c16ac2c2be6a9333f9f1ac5d2defb7f94f73094b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "        
    </head>
    <body>
        ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 73
        echo "    </body>
</html>


";
        
        $__internal_5842326d0b1db05d67ee8901c16ac2c2be6a9333f9f1ac5d2defb7f94f73094b->leave($__internal_5842326d0b1db05d67ee8901c16ac2c2be6a9333f9f1ac5d2defb7f94f73094b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e86e0dbe4be0fdba6c2020f0a264ddc33f6a1670d739a7639de1e086c6628ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e86e0dbe4be0fdba6c2020f0a264ddc33f6a1670d739a7639de1e086c6628ef->enter($__internal_7e86e0dbe4be0fdba6c2020f0a264ddc33f6a1670d739a7639de1e086c6628ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Prinkino";
        
        $__internal_7e86e0dbe4be0fdba6c2020f0a264ddc33f6a1670d739a7639de1e086c6628ef->leave($__internal_7e86e0dbe4be0fdba6c2020f0a264ddc33f6a1670d739a7639de1e086c6628ef_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_09a2817a52b77969cd8e46187cacb9307a7c4cc159f1b0d2ec9329d5525e4040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09a2817a52b77969cd8e46187cacb9307a7c4cc159f1b0d2ec9329d5525e4040->enter($__internal_09a2817a52b77969cd8e46187cacb9307a7c4cc159f1b0d2ec9329d5525e4040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/monitor.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        
        $__internal_09a2817a52b77969cd8e46187cacb9307a7c4cc159f1b0d2ec9329d5525e4040->leave($__internal_09a2817a52b77969cd8e46187cacb9307a7c4cc159f1b0d2ec9329d5525e4040_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_84fbd3995b7e7eebbcb9f313ddf625e80c6c714bbe6449a266862a1980c8fcf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84fbd3995b7e7eebbcb9f313ddf625e80c6c714bbe6449a266862a1980c8fcf2->enter($__internal_84fbd3995b7e7eebbcb9f313ddf625e80c6c714bbe6449a266862a1980c8fcf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "            <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js)\"></script>
            <script href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/js/base.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_84fbd3995b7e7eebbcb9f313ddf625e80c6c714bbe6449a266862a1980c8fcf2->leave($__internal_84fbd3995b7e7eebbcb9f313ddf625e80c6c714bbe6449a266862a1980c8fcf2_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee33fa81b8cac5603df00a69a9d10fda0d862ad11ea1ac27dbce52437ff114a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee33fa81b8cac5603df00a69a9d10fda0d862ad11ea1ac27dbce52437ff114a9->enter($__internal_ee33fa81b8cac5603df00a69a9d10fda0d862ad11ea1ac27dbce52437ff114a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "            <header>
                ";
        // line 18
        $this->displayBlock('header', $context, $blocks);
        // line 36
        echo "            </header>
            <div class=\"conteiner\">
                <div class=\"aside\">  
\t            ";
        // line 39
        $this->displayBlock('aside', $context, $blocks);
        // line 49
        echo "\t        </div>
                <div id=\"corpo\">
                    ";
        // line 51
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "ordine"), "method"))) {
            // line 52
            echo "                        ";
            $context["k"] = twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "ordine"), "method"));
            // line 53
            echo "                        <form id=\"msform\"> 
                            <ul id=\"progressbar\">
                                ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 56
                echo "                                    ";
                if (($context["i"] <= (isset($context["k"]) ? $context["k"] : $this->getContext($context, "k")))) {
                    // line 57
                    echo "                                        <li class=\"active\"> fase ";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</li>
                                        ";
                } else {
                    // line 59
                    echo "                                        <li> fase ";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo " </li>
                                    ";
                }
                // line 61
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                              </ul>    \t\t\t                   
                          </form>
                    ";
        }
        // line 64
        echo "                   
                    ";
        // line 65
        $this->displayBlock('corpo', $context, $blocks);
        // line 67
        echo "                </div>
                <footer>
           \t\t<p> inprint s.r.l.</p>
\t    \t</footer>
            </div>
            ";
        
        $__internal_ee33fa81b8cac5603df00a69a9d10fda0d862ad11ea1ac27dbce52437ff114a9->leave($__internal_ee33fa81b8cac5603df00a69a9d10fda0d862ad11ea1ac27dbce52437ff114a9_prof);

    }

    // line 18
    public function block_header($context, array $blocks = array())
    {
        $__internal_64d2913efcc282baff83a4a3d7061f8ce03e1583d430e98eec8602fc6f39eb20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64d2913efcc282baff83a4a3d7061f8ce03e1583d430e98eec8602fc6f39eb20->enter($__internal_64d2913efcc282baff83a4a3d7061f8ce03e1583d430e98eec8602fc6f39eb20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 19
        echo "                    <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/src/prink.png"), "html", null, true);
        echo "\" id=\"logo\">
                    <nav class=\"menu\">
                        <ul>
                            ";
        // line 22
        if ((null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "ordine"), "method"))) {
            // line 23
            echo "                                <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
            echo "\">Home</a></li>
                                <li><a href=\"";
            // line 24
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuovocliente");
            echo "\">Nuovo Cliente</a></li>
                                <li><a href=\"";
            // line 25
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuovoordine");
            echo "\">Nuovo Ordine</a></li>
                                <li><a href=\"";
            // line 26
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ordini");
            echo "\">Gestione ordine</a></li>
                            ";
        } else {
            // line 28
            echo "                                 <li><a href=\" ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annulla");
            echo "\" >Annulla</a></li>
                                <li><a href=\"";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sospendi");
            echo "\">Sospendi</a></li>
                                <li><a href=\"";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visualizza");
            echo "\">Visualizza</a></li>
                                <li><a href=\"";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuovoordine");
            echo "\">Continua</a></li>
                            ";
        }
        // line 33
        echo "                        </ul>
                    </nav>
                ";
        
        $__internal_64d2913efcc282baff83a4a3d7061f8ce03e1583d430e98eec8602fc6f39eb20->leave($__internal_64d2913efcc282baff83a4a3d7061f8ce03e1583d430e98eec8602fc6f39eb20_prof);

    }

    // line 39
    public function block_aside($context, array $blocks = array())
    {
        $__internal_a74f3066aa91ef83650b7ddbae9044170f448533be4d107b0e854718e8180b68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a74f3066aa91ef83650b7ddbae9044170f448533be4d107b0e854718e8180b68->enter($__internal_a74f3066aa91ef83650b7ddbae9044170f448533be4d107b0e854718e8180b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        echo "    
                        <nav class=\"menu\" id=\"laterale\">
                                <ul>
                                    <li><a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\"><img class=\"icon\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/src/home.ico"), "html", null, true);
        echo "\">Home</a></li>
                                    <li><a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("catalogo");
        echo "\"><img class=\"icon\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/src/catalogo.ico"), "html", null, true);
        echo "\">Catalogo</a></li>
                                    <li><a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clienti");
        echo "\"><img class=\"icon\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/src/clienti.ico"), "html", null, true);
        echo "\">Clienti</a></li>
                                    <li><a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ordini");
        echo "\"><img class=\"icon\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/src/ordini.ico"), "html", null, true);
        echo "\">Ordini</a></li>
                                </ul> 
                        </nav>
                    ";
        
        $__internal_a74f3066aa91ef83650b7ddbae9044170f448533be4d107b0e854718e8180b68->leave($__internal_a74f3066aa91ef83650b7ddbae9044170f448533be4d107b0e854718e8180b68_prof);

    }

    // line 65
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_2d6935d84dff3fab87fb7295bcec4fd8fb4dbfbf00aac967e40bd81c03441669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d6935d84dff3fab87fb7295bcec4fd8fb4dbfbf00aac967e40bd81c03441669->enter($__internal_2d6935d84dff3fab87fb7295bcec4fd8fb4dbfbf00aac967e40bd81c03441669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 66
        echo "                   ";
        
        $__internal_2d6935d84dff3fab87fb7295bcec4fd8fb4dbfbf00aac967e40bd81c03441669->leave($__internal_2d6935d84dff3fab87fb7295bcec4fd8fb4dbfbf00aac967e40bd81c03441669_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  293 => 66,  287 => 65,  274 => 45,  268 => 44,  262 => 43,  256 => 42,  246 => 39,  237 => 33,  232 => 31,  228 => 30,  224 => 29,  219 => 28,  214 => 26,  210 => 25,  206 => 24,  201 => 23,  199 => 22,  192 => 19,  186 => 18,  174 => 67,  172 => 65,  169 => 64,  164 => 62,  158 => 61,  152 => 59,  146 => 57,  143 => 56,  139 => 55,  135 => 53,  132 => 52,  130 => 51,  126 => 49,  124 => 39,  119 => 36,  117 => 18,  114 => 17,  108 => 16,  99 => 11,  96 => 10,  90 => 9,  80 => 7,  74 => 6,  62 => 5,  51 => 73,  49 => 16,  44 => 13,  41 => 9,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Prinkino{% endblock %}</title>
        {% block stylesheets %}
            <link href=\"{{ asset('prinkino/style/monitor.css') }}\" rel=\"stylesheet\" />
        {% endblock %}
        {% block javascripts %}
            <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js)\"></script>
            <script href=\"{{ asset('prinkino/js/base.js') }}\"></script>
        {% endblock %}
        
    </head>
    <body>
        {% block body %}
            <header>
                {% block header %}
                    <img src=\"{{ asset('prinkino/src/prink.png')}}\" id=\"logo\">
                    <nav class=\"menu\">
                        <ul>
                            {%if app.session.get('ordine') is null %}
                                <li><a href=\"{{ path('home') }}\">Home</a></li>
                                <li><a href=\"{{ path('nuovocliente') }}\">Nuovo Cliente</a></li>
                                <li><a href=\"{{ path('nuovoordine') }}\">Nuovo Ordine</a></li>
                                <li><a href=\"{{ path('ordini') }}\">Gestione ordine</a></li>
                            {%else%}
                                 <li><a href=\" {{ path('annulla')}}\" >Annulla</a></li>
                                <li><a href=\"{{ path('sospendi')}}\">Sospendi</a></li>
                                <li><a href=\"{{ path('visualizza')}}\">Visualizza</a></li>
                                <li><a href=\"{{ path('nuovoordine')}}\">Continua</a></li>
                            {%endif%}
                        </ul>
                    </nav>
                {% endblock %}
            </header>
            <div class=\"conteiner\">
                <div class=\"aside\">  
\t            {% block aside %}    
                        <nav class=\"menu\" id=\"laterale\">
                                <ul>
                                    <li><a href=\"{{ path('home') }}\"><img class=\"icon\" src=\"{{ asset('prinkino/src/home.ico')}}\">Home</a></li>
                                    <li><a href=\"{{ path('catalogo') }}\"><img class=\"icon\" src=\"{{ asset('prinkino/src/catalogo.ico')}}\">Catalogo</a></li>
                                    <li><a href=\"{{ path('clienti') }}\"><img class=\"icon\" src=\"{{ asset('prinkino/src/clienti.ico')}}\">Clienti</a></li>
                                    <li><a href=\"{{ path('ordini') }}\"><img class=\"icon\" src=\"{{ asset('prinkino/src/ordini.ico')}}\">Ordini</a></li>
                                </ul> 
                        </nav>
                    {% endblock %}
\t        </div>
                <div id=\"corpo\">
                    {%if not(app.session.get('ordine') is null) %}
                        {%set k=app.session.get('ordine')|length%}
                        <form id=\"msform\"> 
                            <ul id=\"progressbar\">
                                {% for i in 1..6 %}
                                    {%if i<=k%}
                                        <li class=\"active\"> fase {{ i }}</li>
                                        {% else %}
                                        <li> fase {{ i }} </li>
                                    {%endif%}
                                {% endfor %}
                              </ul>    \t\t\t                   
                          </form>
                    {%endif%}                   
                    {% block corpo %}
                   {% endblock %}
                </div>
                <footer>
           \t\t<p> inprint s.r.l.</p>
\t    \t</footer>
            </div>
            {% endblock %}
    </body>
</html>


", "::base.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\app/Resources\\views/base.html.twig");
    }
}
