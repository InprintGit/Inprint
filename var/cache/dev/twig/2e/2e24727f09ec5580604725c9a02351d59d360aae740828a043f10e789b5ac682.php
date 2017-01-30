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
        $__internal_6d7771eaa6df2e61e329197d57e77386d60b573c99a1dacf6eb882eb0a4f0666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d7771eaa6df2e61e329197d57e77386d60b573c99a1dacf6eb882eb0a4f0666->enter($__internal_6d7771eaa6df2e61e329197d57e77386d60b573c99a1dacf6eb882eb0a4f0666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_6d7771eaa6df2e61e329197d57e77386d60b573c99a1dacf6eb882eb0a4f0666->leave($__internal_6d7771eaa6df2e61e329197d57e77386d60b573c99a1dacf6eb882eb0a4f0666_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8fd99994dcab8144c11460b64250928307614a1e1294f4464250ccd9c71be63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8fd99994dcab8144c11460b64250928307614a1e1294f4464250ccd9c71be63->enter($__internal_b8fd99994dcab8144c11460b64250928307614a1e1294f4464250ccd9c71be63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Prinkino";
        
        $__internal_b8fd99994dcab8144c11460b64250928307614a1e1294f4464250ccd9c71be63->leave($__internal_b8fd99994dcab8144c11460b64250928307614a1e1294f4464250ccd9c71be63_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_12822034acf7d060f2d867fc32ff51fe67019c6bc336d06b708a6ba55c1669de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12822034acf7d060f2d867fc32ff51fe67019c6bc336d06b708a6ba55c1669de->enter($__internal_12822034acf7d060f2d867fc32ff51fe67019c6bc336d06b708a6ba55c1669de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/monitor.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        
        $__internal_12822034acf7d060f2d867fc32ff51fe67019c6bc336d06b708a6ba55c1669de->leave($__internal_12822034acf7d060f2d867fc32ff51fe67019c6bc336d06b708a6ba55c1669de_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a527f9bd91f8768aba6d117bbd2588a3c8cb37152c3aaf632d7c1cbb7258edda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a527f9bd91f8768aba6d117bbd2588a3c8cb37152c3aaf632d7c1cbb7258edda->enter($__internal_a527f9bd91f8768aba6d117bbd2588a3c8cb37152c3aaf632d7c1cbb7258edda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "            <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js)\"></script>
            <script href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/js/base.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_a527f9bd91f8768aba6d117bbd2588a3c8cb37152c3aaf632d7c1cbb7258edda->leave($__internal_a527f9bd91f8768aba6d117bbd2588a3c8cb37152c3aaf632d7c1cbb7258edda_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7e759b604a2deda0d30cdebe2a5befc2bf9fb0086ad06aa34d4a155c02e7a45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7e759b604a2deda0d30cdebe2a5befc2bf9fb0086ad06aa34d4a155c02e7a45->enter($__internal_f7e759b604a2deda0d30cdebe2a5befc2bf9fb0086ad06aa34d4a155c02e7a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f7e759b604a2deda0d30cdebe2a5befc2bf9fb0086ad06aa34d4a155c02e7a45->leave($__internal_f7e759b604a2deda0d30cdebe2a5befc2bf9fb0086ad06aa34d4a155c02e7a45_prof);

    }

    // line 18
    public function block_header($context, array $blocks = array())
    {
        $__internal_1e6100e418f95cd3ff5911f758bb669bab0f4e6225003fd4f0601de304693e90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e6100e418f95cd3ff5911f758bb669bab0f4e6225003fd4f0601de304693e90->enter($__internal_1e6100e418f95cd3ff5911f758bb669bab0f4e6225003fd4f0601de304693e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_1e6100e418f95cd3ff5911f758bb669bab0f4e6225003fd4f0601de304693e90->leave($__internal_1e6100e418f95cd3ff5911f758bb669bab0f4e6225003fd4f0601de304693e90_prof);

    }

    // line 39
    public function block_aside($context, array $blocks = array())
    {
        $__internal_00244238c5b9a77fe12482586c32b393ac3564f7442f66ae2141eab971bc8814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00244238c5b9a77fe12482586c32b393ac3564f7442f66ae2141eab971bc8814->enter($__internal_00244238c5b9a77fe12482586c32b393ac3564f7442f66ae2141eab971bc8814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

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
        
        $__internal_00244238c5b9a77fe12482586c32b393ac3564f7442f66ae2141eab971bc8814->leave($__internal_00244238c5b9a77fe12482586c32b393ac3564f7442f66ae2141eab971bc8814_prof);

    }

    // line 65
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_09fdda30e1978b5e8ef76b2aff79e22e2f8cfd10012dff752ef3e7a053094803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09fdda30e1978b5e8ef76b2aff79e22e2f8cfd10012dff752ef3e7a053094803->enter($__internal_09fdda30e1978b5e8ef76b2aff79e22e2f8cfd10012dff752ef3e7a053094803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 66
        echo "                   ";
        
        $__internal_09fdda30e1978b5e8ef76b2aff79e22e2f8cfd10012dff752ef3e7a053094803->leave($__internal_09fdda30e1978b5e8ef76b2aff79e22e2f8cfd10012dff752ef3e7a053094803_prof);

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
