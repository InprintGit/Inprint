<?php

/* ::base.php.twig */
class __TwigTemplate_117a5cbdcbe35bf8260ffde4fa4c03b5bb5109a85b78e047da74df4cb8062148 extends Twig_Template
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
        $__internal_1808224442320133a89ea91acab5b3e56f8597c8d274c9a6635f1e8407e9de39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1808224442320133a89ea91acab5b3e56f8597c8d274c9a6635f1e8407e9de39->enter($__internal_1808224442320133a89ea91acab5b3e56f8597c8d274c9a6635f1e8407e9de39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.php.twig"));

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
        
        $__internal_1808224442320133a89ea91acab5b3e56f8597c8d274c9a6635f1e8407e9de39->leave($__internal_1808224442320133a89ea91acab5b3e56f8597c8d274c9a6635f1e8407e9de39_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_63d086e56c9b904565fbaa8afc81bb15467cc01d90cc20b0009b5232ffe96413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63d086e56c9b904565fbaa8afc81bb15467cc01d90cc20b0009b5232ffe96413->enter($__internal_63d086e56c9b904565fbaa8afc81bb15467cc01d90cc20b0009b5232ffe96413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Prinkino";
        
        $__internal_63d086e56c9b904565fbaa8afc81bb15467cc01d90cc20b0009b5232ffe96413->leave($__internal_63d086e56c9b904565fbaa8afc81bb15467cc01d90cc20b0009b5232ffe96413_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ce8c35128d722fd040118934386154c7ada0748ab90aec690f0872932e9581f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce8c35128d722fd040118934386154c7ada0748ab90aec690f0872932e9581f3->enter($__internal_ce8c35128d722fd040118934386154c7ada0748ab90aec690f0872932e9581f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/monitor.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        
        $__internal_ce8c35128d722fd040118934386154c7ada0748ab90aec690f0872932e9581f3->leave($__internal_ce8c35128d722fd040118934386154c7ada0748ab90aec690f0872932e9581f3_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1a28d63c1563f26ed34f37740f817285d4612fe264b50a1bdf4245bd7e69d240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a28d63c1563f26ed34f37740f817285d4612fe264b50a1bdf4245bd7e69d240->enter($__internal_1a28d63c1563f26ed34f37740f817285d4612fe264b50a1bdf4245bd7e69d240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "            <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js)\"></script>
            <script href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/js/base.js"), "html", null, true);
        echo "\"></script>
            <?php use_javascript('jquery-1.2.6.min.js') ?>
            <?php include_javascripts() ?>
        ";
        
        $__internal_1a28d63c1563f26ed34f37740f817285d4612fe264b50a1bdf4245bd7e69d240->leave($__internal_1a28d63c1563f26ed34f37740f817285d4612fe264b50a1bdf4245bd7e69d240_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_f39c59aee1b432fd44ee21c76ae21de7cbf218f18a5f25a76a24a3d802153869 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f39c59aee1b432fd44ee21c76ae21de7cbf218f18a5f25a76a24a3d802153869->enter($__internal_f39c59aee1b432fd44ee21c76ae21de7cbf218f18a5f25a76a24a3d802153869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f39c59aee1b432fd44ee21c76ae21de7cbf218f18a5f25a76a24a3d802153869->leave($__internal_f39c59aee1b432fd44ee21c76ae21de7cbf218f18a5f25a76a24a3d802153869_prof);

    }

    // line 20
    public function block_header($context, array $blocks = array())
    {
        $__internal_398c2790276872324e92f2b3d9a27e9e901095d8de21780b0b4c08f524006386 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_398c2790276872324e92f2b3d9a27e9e901095d8de21780b0b4c08f524006386->enter($__internal_398c2790276872324e92f2b3d9a27e9e901095d8de21780b0b4c08f524006386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_398c2790276872324e92f2b3d9a27e9e901095d8de21780b0b4c08f524006386->leave($__internal_398c2790276872324e92f2b3d9a27e9e901095d8de21780b0b4c08f524006386_prof);

    }

    // line 41
    public function block_aside($context, array $blocks = array())
    {
        $__internal_ad547037158f0543957a58c371a3237178fa9249c77c58a6ac14c12960d2bbcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad547037158f0543957a58c371a3237178fa9249c77c58a6ac14c12960d2bbcd->enter($__internal_ad547037158f0543957a58c371a3237178fa9249c77c58a6ac14c12960d2bbcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

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
        
        $__internal_ad547037158f0543957a58c371a3237178fa9249c77c58a6ac14c12960d2bbcd->leave($__internal_ad547037158f0543957a58c371a3237178fa9249c77c58a6ac14c12960d2bbcd_prof);

    }

    // line 67
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_5a52fbb18e775b9f634fdf078520a14c557c84173fa80c5f31ae41927f11af4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a52fbb18e775b9f634fdf078520a14c557c84173fa80c5f31ae41927f11af4f->enter($__internal_5a52fbb18e775b9f634fdf078520a14c557c84173fa80c5f31ae41927f11af4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 68
        echo "                   ";
        
        $__internal_5a52fbb18e775b9f634fdf078520a14c557c84173fa80c5f31ae41927f11af4f->leave($__internal_5a52fbb18e775b9f634fdf078520a14c557c84173fa80c5f31ae41927f11af4f_prof);

    }

    public function getTemplateName()
    {
        return "::base.php.twig";
    }

    public function getDebugInfo()
    {
        return array (  295 => 68,  289 => 67,  276 => 47,  270 => 46,  264 => 45,  258 => 44,  248 => 41,  239 => 35,  234 => 33,  230 => 32,  226 => 31,  221 => 30,  216 => 28,  212 => 27,  208 => 26,  203 => 25,  201 => 24,  194 => 21,  188 => 20,  176 => 69,  174 => 67,  171 => 66,  166 => 64,  160 => 63,  154 => 61,  148 => 59,  145 => 58,  141 => 57,  137 => 55,  134 => 54,  132 => 53,  128 => 51,  126 => 41,  121 => 38,  119 => 20,  116 => 19,  110 => 18,  99 => 11,  96 => 10,  90 => 9,  80 => 7,  74 => 6,  62 => 5,  51 => 75,  49 => 18,  44 => 15,  41 => 9,  39 => 6,  35 => 5,  29 => 1,);
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
            <?php use_javascript('jquery-1.2.6.min.js') ?>
            <?php include_javascripts() ?>
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


", "::base.php.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\app/Resources\\views/base.php.twig");
    }
}
