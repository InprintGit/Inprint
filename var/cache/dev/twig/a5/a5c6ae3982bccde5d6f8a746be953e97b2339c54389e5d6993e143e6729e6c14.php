<?php

/* base.html.twig */
class __TwigTemplate_65f5dbb1623f701f1802f32a52d321a842e8cb38ca4e7faa0c14a9e95b23b5b6 extends Twig_Template
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
        $__internal_77e596f2ad8db8f8d2416fb6fd76ea710afb83438dc814635487cc60d693af04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77e596f2ad8db8f8d2416fb6fd76ea710afb83438dc814635487cc60d693af04->enter($__internal_77e596f2ad8db8f8d2416fb6fd76ea710afb83438dc814635487cc60d693af04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_77e596f2ad8db8f8d2416fb6fd76ea710afb83438dc814635487cc60d693af04->leave($__internal_77e596f2ad8db8f8d2416fb6fd76ea710afb83438dc814635487cc60d693af04_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c34708aa53bebdfa20f1bf982c4d039f6703691647f0451a7cef046344cb9758 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c34708aa53bebdfa20f1bf982c4d039f6703691647f0451a7cef046344cb9758->enter($__internal_c34708aa53bebdfa20f1bf982c4d039f6703691647f0451a7cef046344cb9758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Prinkino";
        
        $__internal_c34708aa53bebdfa20f1bf982c4d039f6703691647f0451a7cef046344cb9758->leave($__internal_c34708aa53bebdfa20f1bf982c4d039f6703691647f0451a7cef046344cb9758_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c0f2184de020df93a7b0e871bfbf4d81da787b1d3823dc828e644bfa2c7a243a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0f2184de020df93a7b0e871bfbf4d81da787b1d3823dc828e644bfa2c7a243a->enter($__internal_c0f2184de020df93a7b0e871bfbf4d81da787b1d3823dc828e644bfa2c7a243a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/monitor.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        
        $__internal_c0f2184de020df93a7b0e871bfbf4d81da787b1d3823dc828e644bfa2c7a243a->leave($__internal_c0f2184de020df93a7b0e871bfbf4d81da787b1d3823dc828e644bfa2c7a243a_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b7a1d4ab68096b5269df74ebd65348b48e97304242f2556d7ead331d5fcb7a43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7a1d4ab68096b5269df74ebd65348b48e97304242f2556d7ead331d5fcb7a43->enter($__internal_b7a1d4ab68096b5269df74ebd65348b48e97304242f2556d7ead331d5fcb7a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "            <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js\"></script>
            <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/base.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_b7a1d4ab68096b5269df74ebd65348b48e97304242f2556d7ead331d5fcb7a43->leave($__internal_b7a1d4ab68096b5269df74ebd65348b48e97304242f2556d7ead331d5fcb7a43_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_ecf29c82592c3834b5c8c5d5a911b08746ee366464105456861e309a4533e617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecf29c82592c3834b5c8c5d5a911b08746ee366464105456861e309a4533e617->enter($__internal_ecf29c82592c3834b5c8c5d5a911b08746ee366464105456861e309a4533e617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ecf29c82592c3834b5c8c5d5a911b08746ee366464105456861e309a4533e617->leave($__internal_ecf29c82592c3834b5c8c5d5a911b08746ee366464105456861e309a4533e617_prof);

    }

    // line 18
    public function block_header($context, array $blocks = array())
    {
        $__internal_c6a002f937e4f7839395bb3a89b5f348b869b5b3737414b394f3feea9776e030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6a002f937e4f7839395bb3a89b5f348b869b5b3737414b394f3feea9776e030->enter($__internal_c6a002f937e4f7839395bb3a89b5f348b869b5b3737414b394f3feea9776e030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_c6a002f937e4f7839395bb3a89b5f348b869b5b3737414b394f3feea9776e030->leave($__internal_c6a002f937e4f7839395bb3a89b5f348b869b5b3737414b394f3feea9776e030_prof);

    }

    // line 39
    public function block_aside($context, array $blocks = array())
    {
        $__internal_a20393817b6a9b4007d2a0eb6843007ff442c123c4c10f4ca6e04ba947888aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a20393817b6a9b4007d2a0eb6843007ff442c123c4c10f4ca6e04ba947888aac->enter($__internal_a20393817b6a9b4007d2a0eb6843007ff442c123c4c10f4ca6e04ba947888aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

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
        
        $__internal_a20393817b6a9b4007d2a0eb6843007ff442c123c4c10f4ca6e04ba947888aac->leave($__internal_a20393817b6a9b4007d2a0eb6843007ff442c123c4c10f4ca6e04ba947888aac_prof);

    }

    // line 65
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_1a889876a1d15c8a9a0a8410a33ef81c0f5607f82bc35c2aee2e86e04af408f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a889876a1d15c8a9a0a8410a33ef81c0f5607f82bc35c2aee2e86e04af408f1->enter($__internal_1a889876a1d15c8a9a0a8410a33ef81c0f5607f82bc35c2aee2e86e04af408f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 66
        echo "                   ";
        
        $__internal_1a889876a1d15c8a9a0a8410a33ef81c0f5607f82bc35c2aee2e86e04af408f1->leave($__internal_1a889876a1d15c8a9a0a8410a33ef81c0f5607f82bc35c2aee2e86e04af408f1_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
            <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js\"></script>
            <script src=\"{{ asset('js/base.js') }}\"></script>
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


", "base.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\app\\Resources\\views\\base.html.twig");
    }
}
