<?php

/* AppBundle:Prinkino:Bozza.html.twig */
class __TwigTemplate_408eabfbe9a8140904d603e73c6ac74f639f5826e99b0e559b3ea039309fcbd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00d389896bb461207f55c6b800856fed54c8ed5900459364b4c98ed313edaedb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00d389896bb461207f55c6b800856fed54c8ed5900459364b4c98ed313edaedb->enter($__internal_00d389896bb461207f55c6b800856fed54c8ed5900459364b4c98ed313edaedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Prinkino:Bozza.html.twig"));

        // line 1
        echo "<html>
  <head>
    <!-- stylesheet -->
    <link href=";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/bozza/css/literallycanvas.css"), "html", null, true);
        echo " rel=\"stylesheet\">
    <link href=";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/lavagna.css"), "html", null, true);
        echo " rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/monitor.css"), "html", null, true);
        echo " media=\"screen\">

    <!-- dependency: React.js -->
    <script src=";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/bozza/js/Literally1.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/bozza/js/Literally2.js"), "html", null, true);
        echo "></script>

    <!-- Literally Canvas--> 
    <script src=";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/bozza/js/literallycanvas.js"), "html", null, true);
        echo "></script>
  </head>
  <body>
    <!-- where the widget goes. you can do CSS to it. -->
    <!-- note: as of 0.4.13, you cannot use 'literally' as the class name.
         sorry about that. -->
    <div class=\"my-drawing\" ></div>

    <!-- kick it off -->
    <script>
      var elemento= document.getElementsByClassName('my-drawing')[0];
      
      var  lavagna=LC.init(elemento, {imageURLPrefix: '";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/bozza/img"), "html", null, true);
        echo "' });

      function Pulire(){lavagna.clear();}
      function Salva(){
        var immagine=lavagna.getSVGString();
        //immagine contiene un tag svg in html che contiene l'immagine salvata il controllo si occuperà di memorizzare tale file 
       var risposta= {bozza: immagine};
        invia_dati('";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuovoordine");
        echo "', risposta,'post');
    }
    
        function invia_dati(servURL, params, method) {
        method = method || \"post\"; // il metodo POST è usato di default
        var form = document.createElement(\"form\");
        form.setAttribute(\"method\", method);
        form.setAttribute(\"action\", servURL);
        for(var key in params) {
            var hiddenField = document.createElement(\"input\");
            hiddenField.setAttribute(\"type\", \"hidden\");
            hiddenField.setAttribute(\"name\", key);
            hiddenField.setAttribute(\"value\", params[key]);
            form.appendChild(hiddenField);
        }
        document.body.appendChild(form);
        form.submit();
    }
    </script>
    <a class=\"btn-flat success\" onclick=\"Pulire()\" style=\"border-radius:2px; cursor:pointer;\">Pulire lavagna</a>
    <a class=\"btn-flat success\" onclick=\"Salva()\" style=\"border-radius:2px; cursor:pointer;\">Salva immagine</a>
  </body>
</html>
";
        
        $__internal_00d389896bb461207f55c6b800856fed54c8ed5900459364b4c98ed313edaedb->leave($__internal_00d389896bb461207f55c6b800856fed54c8ed5900459364b4c98ed313edaedb_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Prinkino:Bozza.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 32,  66 => 25,  51 => 13,  45 => 10,  41 => 9,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
  <head>
    <!-- stylesheet -->
    <link href={{ asset('prinkino/bozza/css/literallycanvas.css') }} rel=\"stylesheet\">
    <link href={{ asset('prinkino/style/lavagna.css') }} rel=\"stylesheet\">
    <link rel=\"stylesheet\" href={{ asset('prinkino/style/monitor.css') }} media=\"screen\">

    <!-- dependency: React.js -->
    <script src={{ asset('prinkino/bozza/js/Literally1.js') }}></script>
    <script src={{ asset('prinkino/bozza/js/Literally2.js') }}></script>

    <!-- Literally Canvas--> 
    <script src={{ asset('prinkino/bozza/js/literallycanvas.js') }}></script>
  </head>
  <body>
    <!-- where the widget goes. you can do CSS to it. -->
    <!-- note: as of 0.4.13, you cannot use 'literally' as the class name.
         sorry about that. -->
    <div class=\"my-drawing\" ></div>

    <!-- kick it off -->
    <script>
      var elemento= document.getElementsByClassName('my-drawing')[0];
      
      var  lavagna=LC.init(elemento, {imageURLPrefix: '{{ asset('prinkino/bozza/img')}}' });

      function Pulire(){lavagna.clear();}
      function Salva(){
        var immagine=lavagna.getSVGString();
        //immagine contiene un tag svg in html che contiene l'immagine salvata il controllo si occuperà di memorizzare tale file 
       var risposta= {bozza: immagine};
        invia_dati('{{ path('nuovoordine') }}', risposta,'post');
    }
    
        function invia_dati(servURL, params, method) {
        method = method || \"post\"; // il metodo POST è usato di default
        var form = document.createElement(\"form\");
        form.setAttribute(\"method\", method);
        form.setAttribute(\"action\", servURL);
        for(var key in params) {
            var hiddenField = document.createElement(\"input\");
            hiddenField.setAttribute(\"type\", \"hidden\");
            hiddenField.setAttribute(\"name\", key);
            hiddenField.setAttribute(\"value\", params[key]);
            form.appendChild(hiddenField);
        }
        document.body.appendChild(form);
        form.submit();
    }
    </script>
    <a class=\"btn-flat success\" onclick=\"Pulire()\" style=\"border-radius:2px; cursor:pointer;\">Pulire lavagna</a>
    <a class=\"btn-flat success\" onclick=\"Salva()\" style=\"border-radius:2px; cursor:pointer;\">Salva immagine</a>
  </body>
</html>
", "AppBundle:Prinkino:Bozza.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Prinkino/Bozza.html.twig");
    }
}
