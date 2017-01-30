<?php

/* AppBundle:ResponsabileProduzione:SPbase.html.twig */
class __TwigTemplate_095d4b8d36d294cf28d4303266e7f5aa3067129b021781baf71f7a3299a70cef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'js' => array($this, 'block_js'),
            'corpo' => array($this, 'block_corpo'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5fdf8b9a8610e49f70aad54df2ed29870768b69ba66996a662a8620dc8f01ce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fdf8b9a8610e49f70aad54df2ed29870768b69ba66996a662a8620dc8f01ce7->enter($__internal_5fdf8b9a8610e49f70aad54df2ed29870768b69ba66996a662a8620dc8f01ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:ResponsabileProduzione:SPbase.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Responsabile produzione</title>
       ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        <!-- Javascript -->
        ";
        // line 9
        $this->displayBlock('js', $context, $blocks);
        // line 13
        echo "    </head>
    <body>
        <header>
        \t<img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("SitoProduzione/src/prink.png"), "html", null, true);
        echo "\" id=\"logo\">
        \t<nav class=\"menu\">
              <ul>
                  <li><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("SPhome");
        echo "\">Home</a></li>                  
                </ul>
            </nav>
        </header>
        <div class=\"conteiner\">
\t        <div class=\"aside\">  
\t                <nav class=\"menu\" id=\"laterale\">    
\t                    <ul>
\t                        <li><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("SPhome");
        echo "\"><img class=\"icon\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("SitoProduzione/src/home.ico"), "html", null, true);
        echo "\">Home</a></li>
\t                        <li><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("SPdaeseguire");
        echo "\"><img class=\"icon\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("SitoProduzione/src/catalogo.ico"), "html", null, true);
        echo "\">Lavori da eseguire</a></li>
\t                        <li><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("SPinproduzione");
        echo "\"><img class=\"icon\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("SitoProduzione/src/clienti.ico"), "html", null, true);
        echo "\">Lavori in produzione</a></li>
\t                        <li><a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("SPconclusi");
        echo "\"><img class=\"icon\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("SitoProduzione/src/ordini.ico"), "html", null, true);
        echo "\">Lavori conclusi</a></li>\t                        
\t                        <li><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("SPoperatori");
        echo "\"><img class=\"icon\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("SitoProduzione/src/ordini.ico"), "html", null, true);
        echo "\">Operatori</a></li>
\t                    </ul> 
\t            \t</nav>
\t        </div>
                <div id=\"corpo\">
                    ";
        // line 36
        $this->displayBlock('corpo', $context, $blocks);
        // line 38
        echo "    
\t        </div>
\t        <footer>
            \t<p> inprint s.r.l.</p>
\t        </footer>
\t    </div>
    </body>
</html>
";
        
        $__internal_5fdf8b9a8610e49f70aad54df2ed29870768b69ba66996a662a8620dc8f01ce7->leave($__internal_5fdf8b9a8610e49f70aad54df2ed29870768b69ba66996a662a8620dc8f01ce7_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e4a702568079267af3667553e1a721c1bc5d410417cf2b8a8c8c6b6f3db36169 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4a702568079267af3667553e1a721c1bc5d410417cf2b8a8c8c6b6f3db36169->enter($__internal_e4a702568079267af3667553e1a721c1bc5d410417cf2b8a8c8c6b6f3db36169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("SitoProduzione/style/monitor.css"), "html", null, true);
        echo "\" media=\"screen\">
       ";
        
        $__internal_e4a702568079267af3667553e1a721c1bc5d410417cf2b8a8c8c6b6f3db36169->leave($__internal_e4a702568079267af3667553e1a721c1bc5d410417cf2b8a8c8c6b6f3db36169_prof);

    }

    // line 9
    public function block_js($context, array $blocks = array())
    {
        $__internal_f15dbc980a57dc52373c437c4187540e65c4f75a643494ec9940ccdf18809005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f15dbc980a57dc52373c437c4187540e65c4f75a643494ec9940ccdf18809005->enter($__internal_f15dbc980a57dc52373c437c4187540e65c4f75a643494ec9940ccdf18809005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 10
        echo "            <script type=\"text/javascript\" src= ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"), "html", null, true);
        echo "></script>
             <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("SitoProduzione/js/base.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_f15dbc980a57dc52373c437c4187540e65c4f75a643494ec9940ccdf18809005->leave($__internal_f15dbc980a57dc52373c437c4187540e65c4f75a643494ec9940ccdf18809005_prof);

    }

    // line 36
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_11553872926642da6f3e427581f3861eaea46b9245eae05b0afef2402fe4c6f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11553872926642da6f3e427581f3861eaea46b9245eae05b0afef2402fe4c6f7->enter($__internal_11553872926642da6f3e427581f3861eaea46b9245eae05b0afef2402fe4c6f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 37
        echo "                    
                    ";
        
        $__internal_11553872926642da6f3e427581f3861eaea46b9245eae05b0afef2402fe4c6f7->leave($__internal_11553872926642da6f3e427581f3861eaea46b9245eae05b0afef2402fe4c6f7_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:ResponsabileProduzione:SPbase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 37,  147 => 36,  138 => 11,  133 => 10,  127 => 9,  117 => 6,  111 => 5,  96 => 38,  94 => 36,  84 => 31,  78 => 30,  72 => 29,  66 => 28,  60 => 27,  49 => 19,  43 => 16,  38 => 13,  36 => 9,  33 => 8,  31 => 5,  25 => 1,);
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
        <title>Responsabile produzione</title>
       {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('SitoProduzione/style/monitor.css') }}\" media=\"screen\">
       {%endblock%}
        <!-- Javascript -->
        {% block js %}
            <script type=\"text/javascript\" src= {{asset(\"http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js\")}}></script>
             <script src=\"{{ asset('SitoProduzione/js/base.js') }}\"></script>
        {%endblock%}
    </head>
    <body>
        <header>
        \t<img src=\"{{ asset('SitoProduzione/src/prink.png')}}\" id=\"logo\">
        \t<nav class=\"menu\">
              <ul>
                  <li><a href=\"{{ path('SPhome')}}\">Home</a></li>                  
                </ul>
            </nav>
        </header>
        <div class=\"conteiner\">
\t        <div class=\"aside\">  
\t                <nav class=\"menu\" id=\"laterale\">    
\t                    <ul>
\t                        <li><a href=\"{{ path(\"SPhome\")}}\"><img class=\"icon\" src=\"{{ asset('SitoProduzione/src/home.ico')}}\">Home</a></li>
\t                        <li><a href=\"{{ path(\"SPdaeseguire\")}}\"><img class=\"icon\" src=\"{{ asset('SitoProduzione/src/catalogo.ico')}}\">Lavori da eseguire</a></li>
\t                        <li><a href=\"{{ path(\"SPinproduzione\")}}\"><img class=\"icon\" src=\"{{ asset('SitoProduzione/src/clienti.ico')}}\">Lavori in produzione</a></li>
\t                        <li><a href=\"{{ path(\"SPconclusi\")}}\"><img class=\"icon\" src=\"{{ asset('SitoProduzione/src/ordini.ico')}}\">Lavori conclusi</a></li>\t                        
\t                        <li><a href=\"{{ path(\"SPoperatori\")}}\"><img class=\"icon\" src=\"{{ asset('SitoProduzione/src/ordini.ico')}}\">Operatori</a></li>
\t                    </ul> 
\t            \t</nav>
\t        </div>
                <div id=\"corpo\">
                    {%block corpo%}
                    
                    {%endblock%}    
\t        </div>
\t        <footer>
            \t<p> inprint s.r.l.</p>
\t        </footer>
\t    </div>
    </body>
</html>
", "AppBundle:ResponsabileProduzione:SPbase.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/ResponsabileProduzione/SPbase.html.twig");
    }
}
