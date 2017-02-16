<?php

/* AppBundle:Amministratore:Abase.html.twig */
class __TwigTemplate_ae2dc826a94d05eda5778852e448079d09b0f6dc2d53b3a7ae1d551861f4b7f0 extends Twig_Template
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
        $__internal_92ce8eb5cc7787fc83bb7095645a138324773ef5b605ec67133aed7d40f3e5af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92ce8eb5cc7787fc83bb7095645a138324773ef5b605ec67133aed7d40f3e5af->enter($__internal_92ce8eb5cc7787fc83bb7095645a138324773ef5b605ec67133aed7d40f3e5af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Amministratore:Abase.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html>
    <head>
    \t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <title>Amministratore</title>
        <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "  </head>
    <body>
    ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 58
        echo "</html>
";
        
        $__internal_92ce8eb5cc7787fc83bb7095645a138324773ef5b605ec67133aed7d40f3e5af->leave($__internal_92ce8eb5cc7787fc83bb7095645a138324773ef5b605ec67133aed7d40f3e5af_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_244cfc2dc9f436dadd504cc5bc090c281ab73dde8cc1ba8ac71fc8fac185afb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_244cfc2dc9f436dadd504cc5bc090c281ab73dde8cc1ba8ac71fc8fac185afb0->enter($__internal_244cfc2dc9f436dadd504cc5bc090c281ab73dde8cc1ba8ac71fc8fac185afb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Amministratore";
        
        $__internal_244cfc2dc9f436dadd504cc5bc090c281ab73dde8cc1ba8ac71fc8fac185afb0->leave($__internal_244cfc2dc9f436dadd504cc5bc090c281ab73dde8cc1ba8ac71fc8fac185afb0_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cf95f5aaf77dc81a1f692a575b1e25f3e3248c29670a4d4f0d4d6408594e7d70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf95f5aaf77dc81a1f692a575b1e25f3e3248c29670a4d4f0d4d6408594e7d70->enter($__internal_cf95f5aaf77dc81a1f692a575b1e25f3e3248c29670a4d4f0d4d6408594e7d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/style/monitor.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css\">
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/dist/style.min.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_cf95f5aaf77dc81a1f692a575b1e25f3e3248c29670a4d4f0d4d6408594e7d70->leave($__internal_cf95f5aaf77dc81a1f692a575b1e25f3e3248c29670a4d4f0d4d6408594e7d70_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2e8ff4ef7cbbe4ab4a283b19d087d8cff153604742eb0a9a1dfd738de0a415e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e8ff4ef7cbbe4ab4a283b19d087d8cff153604742eb0a9a1dfd738de0a415e3->enter($__internal_2e8ff4ef7cbbe4ab4a283b19d087d8cff153604742eb0a9a1dfd738de0a415e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/js/base.js"), "html", null, true);
        echo "\"></script>
    
     
            
        ";
        
        $__internal_2e8ff4ef7cbbe4ab4a283b19d087d8cff153604742eb0a9a1dfd738de0a415e3->leave($__internal_2e8ff4ef7cbbe4ab4a283b19d087d8cff153604742eb0a9a1dfd738de0a415e3_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4867ba7de26f00ab6523280406a1d943804d425e48dfe503b1f037de2cfb656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4867ba7de26f00ab6523280406a1d943804d425e48dfe503b1f037de2cfb656->enter($__internal_c4867ba7de26f00ab6523280406a1d943804d425e48dfe503b1f037de2cfb656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "        <header>
            ";
        // line 25
        $this->displayBlock('header', $context, $blocks);
        // line 29
        echo "        </header>
        <div class=\"conteiner\">
\t        <div class=\"aside\">    
                    ";
        // line 32
        $this->displayBlock('aside', $context, $blocks);
        // line 44
        echo "\t        </div>
\t        <div id=\"corpo\">
                ";
        // line 46
        $this->displayBlock('corpo', $context, $blocks);
        // line 50
        echo "   
\t        </div>
\t        <footer>
            \t<p> inprint s.r.l.</p>
\t        </footer>
\t    </div>
    </body>
    ";
        
        $__internal_c4867ba7de26f00ab6523280406a1d943804d425e48dfe503b1f037de2cfb656->leave($__internal_c4867ba7de26f00ab6523280406a1d943804d425e48dfe503b1f037de2cfb656_prof);

    }

    // line 25
    public function block_header($context, array $blocks = array())
    {
        $__internal_d58f50bff7057228f4546ca141a4084766cef586bbf422b6d439dad8bec34bb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d58f50bff7057228f4546ca141a4084766cef586bbf422b6d439dad8bec34bb9->enter($__internal_d58f50bff7057228f4546ca141a4084766cef586bbf422b6d439dad8bec34bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 26
        echo "        \t<img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/src/prink.png"), "html", null, true);
        echo "\" id=\"logo\">
        \t<nav class=\"menu\">
            ";
        
        $__internal_d58f50bff7057228f4546ca141a4084766cef586bbf422b6d439dad8bec34bb9->leave($__internal_d58f50bff7057228f4546ca141a4084766cef586bbf422b6d439dad8bec34bb9_prof);

    }

    // line 32
    public function block_aside($context, array $blocks = array())
    {
        $__internal_6b8dbb376d63c1d354fa39930e330dbb94d9f1223d833101474b6991dcf657f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b8dbb376d63c1d354fa39930e330dbb94d9f1223d833101474b6991dcf657f3->enter($__internal_6b8dbb376d63c1d354fa39930e330dbb94d9f1223d833101474b6991dcf657f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        echo "  
                    <nav class=\"menu\" id=\"laterale\">
                        <ul>
                            <li><a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Ahome");
        echo "\"><img class=\"icon\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/src/home.ico"), "html", null, true);
        echo "\">Home</a></li>  
                            <li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Aarticoli");
        echo "\"><img class=\"icon\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/src/catalogo.ico"), "html", null, true);
        echo "\">Gestisci articolo</a></li>                 
                            <li><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Aattributi");
        echo "\"><img class=\"icon\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/src/catalogo.ico"), "html", null, true);
        echo "\">Gestisci attributi</a></li> \t                        
                            <li><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Acategorie");
        echo "\"><img class=\"icon\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/src/catalogo.ico"), "html", null, true);
        echo "\">Gestisci categoria</a></li>
                            <li><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Aproducibili");
        echo "\"><img class=\"icon\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/src/catalogo.ico"), "html", null, true);
        echo "\">Gestisci producibili</a></li>
                            <li><a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Aproducibili");
        echo "\"><img class=\"icon\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/src/catalogo.ico"), "html", null, true);
        echo "\">Gestisci producibili</a></li> 
                        </ul> 
\t            </nav>
                    ";
        
        $__internal_6b8dbb376d63c1d354fa39930e330dbb94d9f1223d833101474b6991dcf657f3->leave($__internal_6b8dbb376d63c1d354fa39930e330dbb94d9f1223d833101474b6991dcf657f3_prof);

    }

    // line 46
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_810c131565ea77c1250c915caa0f59ba53c4c6783985138e9f33a7721511c227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_810c131565ea77c1250c915caa0f59ba53c4c6783985138e9f33a7721511c227->enter($__internal_810c131565ea77c1250c915caa0f59ba53c4c6783985138e9f33a7721511c227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        echo " 
                    <div class=\"span12\">
                        <h4>Benvenuto Amministratore</h4>
                    </div>\t        \t 
\t        ";
        
        $__internal_810c131565ea77c1250c915caa0f59ba53c4c6783985138e9f33a7721511c227->leave($__internal_810c131565ea77c1250c915caa0f59ba53c4c6783985138e9f33a7721511c227_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Amministratore:Abase.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  222 => 46,  209 => 40,  203 => 39,  197 => 38,  191 => 37,  185 => 36,  179 => 35,  169 => 32,  158 => 26,  152 => 25,  138 => 50,  136 => 46,  132 => 44,  130 => 32,  125 => 29,  123 => 25,  120 => 24,  114 => 23,  101 => 16,  95 => 15,  86 => 13,  80 => 11,  74 => 10,  62 => 9,  54 => 58,  52 => 23,  48 => 21,  45 => 15,  43 => 10,  39 => 9,  29 => 1,);
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
    \t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <title>Amministratore</title>
        <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Amministratore{% endblock %}</title>
        {% block stylesheets %}
            <link href=\"{{ asset('Amministratore/style/monitor.css') }}\" rel=\"stylesheet\" />
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css\">
            <link rel=\"stylesheet\" href=\"{{ asset(\"Amministratore/dist/style.min.css\") }}\" />
        {% endblock %}
        {% block javascripts %}
            <script src=\"{{ asset('Amministratore/js/base.js') }}\"></script>
    
     
            
        {% endblock %}
  </head>
    <body>
    {% block body %}
        <header>
            {% block header%}
        \t<img src=\"{{ asset('Amministratore/src/prink.png')}}\" id=\"logo\">
        \t<nav class=\"menu\">
            {%endblock%}
        </header>
        <div class=\"conteiner\">
\t        <div class=\"aside\">    
                    {% block aside %}  
                    <nav class=\"menu\" id=\"laterale\">
                        <ul>
                            <li><a href=\"{{ path('Ahome') }}\"><img class=\"icon\" src=\"{{ asset('Amministratore/src/home.ico')}}\">Home</a></li>  
                            <li><a href=\"{{ path('Aarticoli') }}\"><img class=\"icon\" src=\"{{ asset('Amministratore/src/catalogo.ico')}}\">Gestisci articolo</a></li>                 
                            <li><a href=\"{{ path('Aattributi') }}\"><img class=\"icon\" src=\"{{ asset('Amministratore/src/catalogo.ico')}}\">Gestisci attributi</a></li> \t                        
                            <li><a href=\"{{ path('Acategorie') }}\"><img class=\"icon\" src=\"{{ asset('Amministratore/src/catalogo.ico')}}\">Gestisci categoria</a></li>
                            <li><a href=\"{{ path('Aproducibili') }}\"><img class=\"icon\" src=\"{{ asset('Amministratore/src/catalogo.ico')}}\">Gestisci producibili</a></li>
                            <li><a href=\"{{ path('Aproducibili') }}\"><img class=\"icon\" src=\"{{ asset('Amministratore/src/catalogo.ico')}}\">Gestisci producibili</a></li> 
                        </ul> 
\t            </nav>
                    {% endblock%}
\t        </div>
\t        <div id=\"corpo\">
                {% block corpo %} 
                    <div class=\"span12\">
                        <h4>Benvenuto Amministratore</h4>
                    </div>\t        \t 
\t        {% endblock %}   
\t        </div>
\t        <footer>
            \t<p> inprint s.r.l.</p>
\t        </footer>
\t    </div>
    </body>
    {% endblock %}
</html>
", "AppBundle:Amministratore:Abase.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Amministratore/Abase.html.twig");
    }
}
