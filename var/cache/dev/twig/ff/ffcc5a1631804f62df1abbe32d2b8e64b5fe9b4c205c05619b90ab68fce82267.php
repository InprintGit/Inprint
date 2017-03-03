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
        $__internal_f8295d619f09132aaa27a5a28e6ca6d53c4365a04f25407aa37d240c9d3baf25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8295d619f09132aaa27a5a28e6ca6d53c4365a04f25407aa37d240c9d3baf25->enter($__internal_f8295d619f09132aaa27a5a28e6ca6d53c4365a04f25407aa37d240c9d3baf25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Amministratore:Abase.html.twig"));

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
        // line 22
        echo "  </head>
    <body>
    ";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        // line 59
        echo "</html>
";
        
        $__internal_f8295d619f09132aaa27a5a28e6ca6d53c4365a04f25407aa37d240c9d3baf25->leave($__internal_f8295d619f09132aaa27a5a28e6ca6d53c4365a04f25407aa37d240c9d3baf25_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_5208301929123e1777b1251c28c07490221392e0dad75ba0aff016683fc8e028 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5208301929123e1777b1251c28c07490221392e0dad75ba0aff016683fc8e028->enter($__internal_5208301929123e1777b1251c28c07490221392e0dad75ba0aff016683fc8e028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Amministratore";
        
        $__internal_5208301929123e1777b1251c28c07490221392e0dad75ba0aff016683fc8e028->leave($__internal_5208301929123e1777b1251c28c07490221392e0dad75ba0aff016683fc8e028_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2f5327e0de106c7afc124668e0cc8246098654afd651e177c949695e8e625eca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f5327e0de106c7afc124668e0cc8246098654afd651e177c949695e8e625eca->enter($__internal_2f5327e0de106c7afc124668e0cc8246098654afd651e177c949695e8e625eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_2f5327e0de106c7afc124668e0cc8246098654afd651e177c949695e8e625eca->leave($__internal_2f5327e0de106c7afc124668e0cc8246098654afd651e177c949695e8e625eca_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_edd6dd1cb17007510be04e8e2c30dd68ab49c3fcdf7680129c48706b8ae63537 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edd6dd1cb17007510be04e8e2c30dd68ab49c3fcdf7680129c48706b8ae63537->enter($__internal_edd6dd1cb17007510be04e8e2c30dd68ab49c3fcdf7680129c48706b8ae63537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "            <script type=\"text/javascript\" charset=\"utf8\" src=\"http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js\"></script>
            <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/js/base.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/js/SearchAmministratore.js"), "html", null, true);
        echo "\"></script>
     
            
        ";
        
        $__internal_edd6dd1cb17007510be04e8e2c30dd68ab49c3fcdf7680129c48706b8ae63537->leave($__internal_edd6dd1cb17007510be04e8e2c30dd68ab49c3fcdf7680129c48706b8ae63537_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_421285bcc764461670894ca7c65d8d931da101bacd5a98f98ea67c73890358b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_421285bcc764461670894ca7c65d8d931da101bacd5a98f98ea67c73890358b8->enter($__internal_421285bcc764461670894ca7c65d8d931da101bacd5a98f98ea67c73890358b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "        <header>
            ";
        // line 26
        $this->displayBlock('header', $context, $blocks);
        // line 30
        echo "        </header>
        <div class=\"conteiner\">
\t        <div class=\"aside\">    
                    ";
        // line 33
        $this->displayBlock('aside', $context, $blocks);
        // line 45
        echo "\t        </div>
\t        <div id=\"corpo\">
                ";
        // line 47
        $this->displayBlock('corpo', $context, $blocks);
        // line 51
        echo "   
\t        </div>
\t        <footer>
            \t<p> inprint s.r.l.</p>
\t        </footer>
\t    </div>
    </body>
    ";
        
        $__internal_421285bcc764461670894ca7c65d8d931da101bacd5a98f98ea67c73890358b8->leave($__internal_421285bcc764461670894ca7c65d8d931da101bacd5a98f98ea67c73890358b8_prof);

    }

    // line 26
    public function block_header($context, array $blocks = array())
    {
        $__internal_58104d058e220d3df6e940f918a61940efd34ebfeff2a2ad346b8806d11cecbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58104d058e220d3df6e940f918a61940efd34ebfeff2a2ad346b8806d11cecbc->enter($__internal_58104d058e220d3df6e940f918a61940efd34ebfeff2a2ad346b8806d11cecbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 27
        echo "        \t<img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/src/prink.png"), "html", null, true);
        echo "\" id=\"logo\">
        \t<nav class=\"menu\">
            ";
        
        $__internal_58104d058e220d3df6e940f918a61940efd34ebfeff2a2ad346b8806d11cecbc->leave($__internal_58104d058e220d3df6e940f918a61940efd34ebfeff2a2ad346b8806d11cecbc_prof);

    }

    // line 33
    public function block_aside($context, array $blocks = array())
    {
        $__internal_32e3a4cb5d672cc626ef149c1580215c28c966d03103b204f135013c0c8ef8e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32e3a4cb5d672cc626ef149c1580215c28c966d03103b204f135013c0c8ef8e6->enter($__internal_32e3a4cb5d672cc626ef149c1580215c28c966d03103b204f135013c0c8ef8e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        echo "  
                    <nav class=\"menu\" id=\"laterale\">
                        <ul>
                            <li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Ahome");
        echo "\"><img class=\"icon\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/src/home.ico"), "html", null, true);
        echo "\">Home</a></li>  
                            <li><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Aarticoli");
        echo "\"><img class=\"icon\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/src/catalogo.ico"), "html", null, true);
        echo "\">Gestisci articolo</a></li>                 
                            <li><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Aattributi");
        echo "\"><img class=\"icon\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/src/catalogo.ico"), "html", null, true);
        echo "\">Gestisci attributi</a></li> \t                        
                            <li><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Acategorie");
        echo "\"><img class=\"icon\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/src/catalogo.ico"), "html", null, true);
        echo "\">Gestisci categoria</a></li>
                            <li><a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Aproducibili");
        echo "\"><img class=\"icon\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/src/catalogo.ico"), "html", null, true);
        echo "\">Gestisci producibili</a></li>
                            <li><a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Aset");
        echo "\"><img class=\"icon\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/src/catalogo.ico"), "html", null, true);
        echo "\">Gestisci set-attributi</a></li> 
                        </ul> 
\t            </nav>
                    ";
        
        $__internal_32e3a4cb5d672cc626ef149c1580215c28c966d03103b204f135013c0c8ef8e6->leave($__internal_32e3a4cb5d672cc626ef149c1580215c28c966d03103b204f135013c0c8ef8e6_prof);

    }

    // line 47
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_5866b193bf7a619f9c49a5c42c6726dda7b0e6a8d59acf3f7c7f9331b6142a74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5866b193bf7a619f9c49a5c42c6726dda7b0e6a8d59acf3f7c7f9331b6142a74->enter($__internal_5866b193bf7a619f9c49a5c42c6726dda7b0e6a8d59acf3f7c7f9331b6142a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        echo " 
                    <div class=\"span12\">
                        <h4>Benvenuto Amministratore</h4>
                    </div>\t        \t 
\t        ";
        
        $__internal_5866b193bf7a619f9c49a5c42c6726dda7b0e6a8d59acf3f7c7f9331b6142a74->leave($__internal_5866b193bf7a619f9c49a5c42c6726dda7b0e6a8d59acf3f7c7f9331b6142a74_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Amministratore:Abase.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  227 => 47,  214 => 41,  208 => 40,  202 => 39,  196 => 38,  190 => 37,  184 => 36,  174 => 33,  163 => 27,  157 => 26,  143 => 51,  141 => 47,  137 => 45,  135 => 33,  130 => 30,  128 => 26,  125 => 25,  119 => 24,  108 => 18,  104 => 17,  101 => 16,  95 => 15,  86 => 13,  80 => 11,  74 => 10,  62 => 9,  54 => 59,  52 => 24,  48 => 22,  45 => 15,  43 => 10,  39 => 9,  29 => 1,);
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
            <script type=\"text/javascript\" charset=\"utf8\" src=\"http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js\"></script>
            <script src=\"{{ asset('Amministratore/js/base.js') }}\"></script>
            <script src=\"{{ asset('Amministratore/js/SearchAmministratore.js') }}\"></script>
     
            
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
                            <li><a href=\"{{ path('Aset') }}\"><img class=\"icon\" src=\"{{ asset('Amministratore/src/catalogo.ico')}}\">Gestisci set-attributi</a></li> 
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
