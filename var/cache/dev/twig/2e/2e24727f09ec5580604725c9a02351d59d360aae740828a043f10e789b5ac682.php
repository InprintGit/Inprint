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
        $__internal_0ebf2691314dca00a30a6f1e66367ebacf53b2dc3261b4729d7a769a4d8d4397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ebf2691314dca00a30a6f1e66367ebacf53b2dc3261b4729d7a769a4d8d4397->enter($__internal_0ebf2691314dca00a30a6f1e66367ebacf53b2dc3261b4729d7a769a4d8d4397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 15
        echo "        
    </head>
    <body>
        ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 75
        echo "    </body>
</html>


";
        
        $__internal_0ebf2691314dca00a30a6f1e66367ebacf53b2dc3261b4729d7a769a4d8d4397->leave($__internal_0ebf2691314dca00a30a6f1e66367ebacf53b2dc3261b4729d7a769a4d8d4397_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_874c1e729fe49bca0db54b3a0a984eb15ad90aae01bf477f45bd8433cd7abbc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_874c1e729fe49bca0db54b3a0a984eb15ad90aae01bf477f45bd8433cd7abbc2->enter($__internal_874c1e729fe49bca0db54b3a0a984eb15ad90aae01bf477f45bd8433cd7abbc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Prinkino";
        
        $__internal_874c1e729fe49bca0db54b3a0a984eb15ad90aae01bf477f45bd8433cd7abbc2->leave($__internal_874c1e729fe49bca0db54b3a0a984eb15ad90aae01bf477f45bd8433cd7abbc2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8a627aae468a5d44ffef66e5eb461d19646bf9064e57021dd6f8c3a6881aaa0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a627aae468a5d44ffef66e5eb461d19646bf9064e57021dd6f8c3a6881aaa0c->enter($__internal_8a627aae468a5d44ffef66e5eb461d19646bf9064e57021dd6f8c3a6881aaa0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/monitor.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        
        $__internal_8a627aae468a5d44ffef66e5eb461d19646bf9064e57021dd6f8c3a6881aaa0c->leave($__internal_8a627aae468a5d44ffef66e5eb461d19646bf9064e57021dd6f8c3a6881aaa0c_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_900e761691cd01cc021b651d88c6379bce317e9ec72c71de22322c829f4c7de3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_900e761691cd01cc021b651d88c6379bce317e9ec72c71de22322c829f4c7de3->enter($__internal_900e761691cd01cc021b651d88c6379bce317e9ec72c71de22322c829f4c7de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "            <script type=\"text/javascript\" charset=\"utf8\" src=\"http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js\"></script>
            <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/js/prova.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/js/catalogo.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/js/attributo.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_900e761691cd01cc021b651d88c6379bce317e9ec72c71de22322c829f4c7de3->leave($__internal_900e761691cd01cc021b651d88c6379bce317e9ec72c71de22322c829f4c7de3_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2364cd372e4b300f2e5a168bcf5b3e4b15f280b2833f600364a0a4b4bd8c6ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2364cd372e4b300f2e5a168bcf5b3e4b15f280b2833f600364a0a4b4bd8c6ef->enter($__internal_c2364cd372e4b300f2e5a168bcf5b3e4b15f280b2833f600364a0a4b4bd8c6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "            <header>
                ";
        // line 20
        $this->displayBlock('header', $context, $blocks);
        // line 38
        echo "            </header>
            <div class=\"conteiner\">
                <div class=\"aside\">  
\t            ";
        // line 41
        $this->displayBlock('aside', $context, $blocks);
        // line 51
        echo "\t        </div>
                <div id=\"corpo\">
                    ";
        // line 53
        if ( !(null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "ordine"), "method"))) {
            // line 54
            echo "                        ";
            $context["k"] = twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "ordine"), "method"));
            // line 55
            echo "                        <form id=\"msform\"> 
                            <ul id=\"progressbar\">
                                ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 58
                echo "                                    ";
                if (($context["i"] <= (isset($context["k"]) ? $context["k"] : $this->getContext($context, "k")))) {
                    // line 59
                    echo "                                        <li class=\"active\"> fase ";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</li>
                                        ";
                } else {
                    // line 61
                    echo "                                        <li> fase ";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo " </li>
                                    ";
                }
                // line 63
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                              </ul>    \t\t\t                   
                          </form>
                    ";
        }
        // line 66
        echo "                   
                    ";
        // line 67
        $this->displayBlock('corpo', $context, $blocks);
        // line 69
        echo "                </div>
                <footer>
           \t\t<p> inprint s.r.l.</p>
\t    \t</footer>
            </div>
            ";
        
        $__internal_c2364cd372e4b300f2e5a168bcf5b3e4b15f280b2833f600364a0a4b4bd8c6ef->leave($__internal_c2364cd372e4b300f2e5a168bcf5b3e4b15f280b2833f600364a0a4b4bd8c6ef_prof);

    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
        $__internal_144d1baf09460e4c4c962c42c3b19f724b32a55ccf0b287889c9a1c884c0fd4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_144d1baf09460e4c4c962c42c3b19f724b32a55ccf0b287889c9a1c884c0fd4b->enter($__internal_144d1baf09460e4c4c962c42c3b19f724b32a55ccf0b287889c9a1c884c0fd4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 21
        echo "                    <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/src/prink.png"), "html", null, true);
        echo "\" id=\"logo\">
                    <nav class=\"menu\">
                        <ul>
                            ";
        // line 24
        if ((null === $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "ordine"), "method"))) {
            // line 25
            echo "                                <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
            echo "\">Home</a></li>
                                <li><a href=\"";
            // line 26
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuovocliente");
            echo "\">Nuovo Cliente</a></li>
                                <li><a href=\"";
            // line 27
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuovoordine");
            echo "\">Nuovo Ordine</a></li>
                                <li><a href=\"";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ordini");
            echo "\">Gestione ordine</a></li>
                            ";
        } else {
            // line 30
            echo "                                 <li><a href=\" ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("annulla");
            echo "\" >Annulla</a></li>
                                <li><a href=\"";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sospendi");
            echo "\">Sospendi</a></li>
                                <li><a href=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visualizza");
            echo "\">Visualizza</a></li>
                                <li><a href=\"";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuovoordine");
            echo "\">Continua</a></li>
                            ";
        }
        // line 35
        echo "                        </ul>
                    </nav>
                ";
        
        $__internal_144d1baf09460e4c4c962c42c3b19f724b32a55ccf0b287889c9a1c884c0fd4b->leave($__internal_144d1baf09460e4c4c962c42c3b19f724b32a55ccf0b287889c9a1c884c0fd4b_prof);

    }

    // line 41
    public function block_aside($context, array $blocks = array())
    {
        $__internal_9d3ea32883389587b019e40141e968b539e5c1ef5810460c2c7a62c07a29d99b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d3ea32883389587b019e40141e968b539e5c1ef5810460c2c7a62c07a29d99b->enter($__internal_9d3ea32883389587b019e40141e968b539e5c1ef5810460c2c7a62c07a29d99b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        echo "    
                        <nav class=\"menu\" id=\"laterale\">
                                <ul>
                                    <li><a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\"><img class=\"icon\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/src/home.ico"), "html", null, true);
        echo "\">Home</a></li>
                                    <li><a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("catalogo");
        echo "\"><img class=\"icon\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/src/catalogo.ico"), "html", null, true);
        echo "\">Catalogo</a></li>
                                    <li><a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clienti");
        echo "\"><img class=\"icon\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/src/clienti.ico"), "html", null, true);
        echo "\">Clienti</a></li>
                                    <li><a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ordini");
        echo "\"><img class=\"icon\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/src/ordini.ico"), "html", null, true);
        echo "\">Ordini</a></li>
                                </ul> 
                        </nav>
                    ";
        
        $__internal_9d3ea32883389587b019e40141e968b539e5c1ef5810460c2c7a62c07a29d99b->leave($__internal_9d3ea32883389587b019e40141e968b539e5c1ef5810460c2c7a62c07a29d99b_prof);

    }

    // line 67
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_a3f94d9b1d94cf57a33de27c0ccbce4fc76b73b411532ab0d5536b893b00589e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3f94d9b1d94cf57a33de27c0ccbce4fc76b73b411532ab0d5536b893b00589e->enter($__internal_a3f94d9b1d94cf57a33de27c0ccbce4fc76b73b411532ab0d5536b893b00589e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 68
        echo "                   ";
        
        $__internal_a3f94d9b1d94cf57a33de27c0ccbce4fc76b73b411532ab0d5536b893b00589e->leave($__internal_a3f94d9b1d94cf57a33de27c0ccbce4fc76b73b411532ab0d5536b893b00589e_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  301 => 68,  295 => 67,  282 => 47,  276 => 46,  270 => 45,  264 => 44,  254 => 41,  245 => 35,  240 => 33,  236 => 32,  232 => 31,  227 => 30,  222 => 28,  218 => 27,  214 => 26,  209 => 25,  207 => 24,  200 => 21,  194 => 20,  182 => 69,  180 => 67,  177 => 66,  172 => 64,  166 => 63,  160 => 61,  154 => 59,  151 => 58,  147 => 57,  143 => 55,  140 => 54,  138 => 53,  134 => 51,  132 => 41,  127 => 38,  125 => 20,  122 => 19,  116 => 18,  107 => 13,  103 => 12,  99 => 11,  96 => 10,  90 => 9,  80 => 7,  74 => 6,  62 => 5,  51 => 75,  49 => 18,  44 => 15,  41 => 9,  39 => 6,  35 => 5,  29 => 1,);
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
            <script type=\"text/javascript\" charset=\"utf8\" src=\"http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js\"></script>
            <script src=\"{{ asset('prinkino/js/prova.js') }}\"></script>
            <script src=\"{{ asset('prinkino/js/catalogo.js') }}\"></script>
            <script src=\"{{ asset('prinkino/js/attributo.js') }}\"></script>
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
