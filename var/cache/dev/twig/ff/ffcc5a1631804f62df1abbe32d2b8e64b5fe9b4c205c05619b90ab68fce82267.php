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
        $__internal_66c84d3bc304a3e2c7bd8a0c9fb192d535ec280976e13e8e2df9e7901044bf5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66c84d3bc304a3e2c7bd8a0c9fb192d535ec280976e13e8e2df9e7901044bf5e->enter($__internal_66c84d3bc304a3e2c7bd8a0c9fb192d535ec280976e13e8e2df9e7901044bf5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Amministratore:Abase.html.twig"));

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
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
        echo "  </head>
    <body>
    ";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "</html>
";
        
        $__internal_66c84d3bc304a3e2c7bd8a0c9fb192d535ec280976e13e8e2df9e7901044bf5e->leave($__internal_66c84d3bc304a3e2c7bd8a0c9fb192d535ec280976e13e8e2df9e7901044bf5e_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ef2b5e8f176b672c351b54e7bd6ea1118177326d5ba1fcbd123b25d9806146b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ef2b5e8f176b672c351b54e7bd6ea1118177326d5ba1fcbd123b25d9806146b->enter($__internal_6ef2b5e8f176b672c351b54e7bd6ea1118177326d5ba1fcbd123b25d9806146b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Amministratore";
        
        $__internal_6ef2b5e8f176b672c351b54e7bd6ea1118177326d5ba1fcbd123b25d9806146b->leave($__internal_6ef2b5e8f176b672c351b54e7bd6ea1118177326d5ba1fcbd123b25d9806146b_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4805c756f11c4194048aedb59ba54b72a648e55b1026edb47f994405966eeb96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4805c756f11c4194048aedb59ba54b72a648e55b1026edb47f994405966eeb96->enter($__internal_4805c756f11c4194048aedb59ba54b72a648e55b1026edb47f994405966eeb96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/style/monitor.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        
        $__internal_4805c756f11c4194048aedb59ba54b72a648e55b1026edb47f994405966eeb96->leave($__internal_4805c756f11c4194048aedb59ba54b72a648e55b1026edb47f994405966eeb96_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7248fdd6be92198d6d9d65c734372074326bc55c48dc941c8e340251d40c03fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7248fdd6be92198d6d9d65c734372074326bc55c48dc941c8e340251d40c03fb->enter($__internal_7248fdd6be92198d6d9d65c734372074326bc55c48dc941c8e340251d40c03fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "            <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js\"></script>
            <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/js/base.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_7248fdd6be92198d6d9d65c734372074326bc55c48dc941c8e340251d40c03fb->leave($__internal_7248fdd6be92198d6d9d65c734372074326bc55c48dc941c8e340251d40c03fb_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_a93e23232027c0719bf415e732fe9fa40c7c8416b2e2d93b83174e9fffd6e894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a93e23232027c0719bf415e732fe9fa40c7c8416b2e2d93b83174e9fffd6e894->enter($__internal_a93e23232027c0719bf415e732fe9fa40c7c8416b2e2d93b83174e9fffd6e894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "        <header>
            ";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 25
        echo "        </header>
        <div class=\"conteiner\">
\t        <div class=\"aside\">    
                    ";
        // line 28
        $this->displayBlock('aside', $context, $blocks);
        // line 39
        echo "\t        </div>
\t        <div id=\"corpo\">
                ";
        // line 41
        $this->displayBlock('corpo', $context, $blocks);
        // line 45
        echo "   
\t        </div>
\t        <footer>
            \t<p> inprint s.r.l.</p>
\t        </footer>
\t    </div>
    </body>
    ";
        
        $__internal_a93e23232027c0719bf415e732fe9fa40c7c8416b2e2d93b83174e9fffd6e894->leave($__internal_a93e23232027c0719bf415e732fe9fa40c7c8416b2e2d93b83174e9fffd6e894_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_681ec47ef2c8966a88295c5385377bac111582bd5a9aa4cbb813304870cf7915 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_681ec47ef2c8966a88295c5385377bac111582bd5a9aa4cbb813304870cf7915->enter($__internal_681ec47ef2c8966a88295c5385377bac111582bd5a9aa4cbb813304870cf7915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "        \t<img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Operatore/src/prink.png"), "html", null, true);
        echo "\" id=\"logo\">
        \t<nav class=\"menu\">
            ";
        
        $__internal_681ec47ef2c8966a88295c5385377bac111582bd5a9aa4cbb813304870cf7915->leave($__internal_681ec47ef2c8966a88295c5385377bac111582bd5a9aa4cbb813304870cf7915_prof);

    }

    // line 28
    public function block_aside($context, array $blocks = array())
    {
        $__internal_5eabe42a136774c696e20a3faf3ad3c20c9631f7b0ea859f6c1a3a5fdf7b0b5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eabe42a136774c696e20a3faf3ad3c20c9631f7b0ea859f6c1a3a5fdf7b0b5d->enter($__internal_5eabe42a136774c696e20a3faf3ad3c20c9631f7b0ea859f6c1a3a5fdf7b0b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        echo "  
                    <nav class=\"menu\" id=\"laterale\">
                        <ul>
                            <li><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Ahome");
        echo "\"><img class=\"icon\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/src/home.ico"), "html", null, true);
        echo "\">Home</a></li>  
                            <li><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Aarticoli");
        echo "\"><img class=\"icon\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/src/catalogo.ico"), "html", null, true);
        echo "\">Gestisci articolo</a></li>                 
                            <li><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Aattributi");
        echo "\"><img class=\"icon\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/src/catalogo.ico"), "html", null, true);
        echo "\">Gestisci attributi</a></li> \t                        
                            <li><a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Acategorie");
        echo "\"><img class=\"icon\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/src/catalogo.ico"), "html", null, true);
        echo "\">Gestisci categoria</a></li>
                            <li><a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Aproducibili");
        echo "\"><img class=\"icon\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/src/catalogo.ico"), "html", null, true);
        echo "\">Gestisci producibili</a></li> \t                            
                        </ul> 
\t            </nav>
                    ";
        
        $__internal_5eabe42a136774c696e20a3faf3ad3c20c9631f7b0ea859f6c1a3a5fdf7b0b5d->leave($__internal_5eabe42a136774c696e20a3faf3ad3c20c9631f7b0ea859f6c1a3a5fdf7b0b5d_prof);

    }

    // line 41
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_70ffabb3d048ba730da59a86bcd456229a4c5c564c2fdffa999967ca3d332872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70ffabb3d048ba730da59a86bcd456229a4c5c564c2fdffa999967ca3d332872->enter($__internal_70ffabb3d048ba730da59a86bcd456229a4c5c564c2fdffa999967ca3d332872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        echo " 
                    <div class=\"span12\">
                        <h4>Benvenuto Amministratore</h4>
                    </div>\t        \t 
\t        ";
        
        $__internal_70ffabb3d048ba730da59a86bcd456229a4c5c564c2fdffa999967ca3d332872->leave($__internal_70ffabb3d048ba730da59a86bcd456229a4c5c564c2fdffa999967ca3d332872_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Amministratore:Abase.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  210 => 41,  197 => 35,  191 => 34,  185 => 33,  179 => 32,  173 => 31,  163 => 28,  152 => 22,  146 => 21,  132 => 45,  130 => 41,  126 => 39,  124 => 28,  119 => 25,  117 => 21,  114 => 20,  108 => 19,  99 => 15,  96 => 14,  90 => 13,  80 => 11,  74 => 10,  62 => 9,  54 => 53,  52 => 19,  48 => 17,  45 => 13,  43 => 10,  39 => 9,  29 => 1,);
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
        {% endblock %}
        {% block javascripts %}
            <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js\"></script>
            <script src=\"{{ asset('Amministratore/js/base.js') }}\"></script>
        {% endblock %}
  </head>
    <body>
    {% block body %}
        <header>
            {% block header%}
        \t<img src=\"{{ asset('Operatore/src/prink.png')}}\" id=\"logo\">
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
                            <li><a href=\"{{ path('Aproducibili') }}\"><img class=\"icon\" src=\"{{ asset('Amministratore/src/catalogo.ico')}}\">Gestisci producibili</a></li> \t                            
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
