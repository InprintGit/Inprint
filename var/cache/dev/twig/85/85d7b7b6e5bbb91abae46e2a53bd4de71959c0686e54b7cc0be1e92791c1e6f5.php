<?php

/* AppBundle:Amministratore:Aarticoli.html.twig */
class __TwigTemplate_abc531ab6781bc27dcd51cdb986a0b2528969460188c07a1454e2a2489a1cbd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Amministratore:Abase.html.twig", "AppBundle:Amministratore:Aarticoli.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'corpo' => array($this, 'block_corpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:Amministratore:Abase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47f06569e297fab734e73a334ecb8d3c3d6d2ba15937c3c1df126592b4861ae2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47f06569e297fab734e73a334ecb8d3c3d6d2ba15937c3c1df126592b4861ae2->enter($__internal_47f06569e297fab734e73a334ecb8d3c3d6d2ba15937c3c1df126592b4861ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Amministratore:Aarticoli.html.twig"));

        $__internal_cf4eabcabc618bb9cda5bc9c2f681bee641671a4cf55d37f7616f18479e77478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf4eabcabc618bb9cda5bc9c2f681bee641671a4cf55d37f7616f18479e77478->enter($__internal_cf4eabcabc618bb9cda5bc9c2f681bee641671a4cf55d37f7616f18479e77478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Amministratore:Aarticoli.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47f06569e297fab734e73a334ecb8d3c3d6d2ba15937c3c1df126592b4861ae2->leave($__internal_47f06569e297fab734e73a334ecb8d3c3d6d2ba15937c3c1df126592b4861ae2_prof);

        
        $__internal_cf4eabcabc618bb9cda5bc9c2f681bee641671a4cf55d37f7616f18479e77478->leave($__internal_cf4eabcabc618bb9cda5bc9c2f681bee641671a4cf55d37f7616f18479e77478_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_089eb58e102fe4c6f8268e23cc6984e07f583e04e35809d1c0ccc06c508261c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_089eb58e102fe4c6f8268e23cc6984e07f583e04e35809d1c0ccc06c508261c8->enter($__internal_089eb58e102fe4c6f8268e23cc6984e07f583e04e35809d1c0ccc06c508261c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f3af7f83111ec04225090fef8523201377597f7edc076c72f55e7e2867c0d0a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3af7f83111ec04225090fef8523201377597f7edc076c72f55e7e2867c0d0a2->enter($__internal_f3af7f83111ec04225090fef8523201377597f7edc076c72f55e7e2867c0d0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Articoli visualizzazione";
        
        $__internal_f3af7f83111ec04225090fef8523201377597f7edc076c72f55e7e2867c0d0a2->leave($__internal_f3af7f83111ec04225090fef8523201377597f7edc076c72f55e7e2867c0d0a2_prof);

        
        $__internal_089eb58e102fe4c6f8268e23cc6984e07f583e04e35809d1c0ccc06c508261c8->leave($__internal_089eb58e102fe4c6f8268e23cc6984e07f583e04e35809d1c0ccc06c508261c8_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_59b6102688c0409f854d2fee9cdd96545b551c217862a71d3d84cd30f21dd1fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59b6102688c0409f854d2fee9cdd96545b551c217862a71d3d84cd30f21dd1fd->enter($__internal_59b6102688c0409f854d2fee9cdd96545b551c217862a71d3d84cd30f21dd1fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c92b6db019efac5a5ac4b7c0de8aef893b4ed97dec93f55cfc33519e420b3a20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c92b6db019efac5a5ac4b7c0de8aef893b4ed97dec93f55cfc33519e420b3a20->enter($__internal_c92b6db019efac5a5ac4b7c0de8aef893b4ed97dec93f55cfc33519e420b3a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/normalize.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/set1.css"), "html", null, true);
        echo "\" />
         <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/set2.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/buttons.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/component.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/component2.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/demo.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/demo2.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/step.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/ricerca.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/cs-select.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/cs-skin-boxes.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/cs-skin-underline.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/organicfoodicons.css"), "html", null, true);
        echo "\" />
        <link rel=\"shortcut icon\" href=\"favicon.ico\">
    ";
        
        $__internal_c92b6db019efac5a5ac4b7c0de8aef893b4ed97dec93f55cfc33519e420b3a20->leave($__internal_c92b6db019efac5a5ac4b7c0de8aef893b4ed97dec93f55cfc33519e420b3a20_prof);

        
        $__internal_59b6102688c0409f854d2fee9cdd96545b551c217862a71d3d84cd30f21dd1fd->leave($__internal_59b6102688c0409f854d2fee9cdd96545b551c217862a71d3d84cd30f21dd1fd_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2f46a6fdb185dff0fe45f9004e431157c56896733d66672e3f9f4b6882dd5de4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f46a6fdb185dff0fe45f9004e431157c56896733d66672e3f9f4b6882dd5de4->enter($__internal_2f46a6fdb185dff0fe45f9004e431157c56896733d66672e3f9f4b6882dd5de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ea5c50f3e62f2a97ab82f501c940e330e2a7414c112a97ddb53d8e5e43e79a8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea5c50f3e62f2a97ab82f501c940e330e2a7414c112a97ddb53d8e5e43e79a8f->enter($__internal_ea5c50f3e62f2a97ab82f501c940e330e2a7414c112a97ddb53d8e5e43e79a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 24
        echo "            <script src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/js/modernizr.custom.js"), "html", null, true);
        echo "></script>

    
    ";
        
        $__internal_ea5c50f3e62f2a97ab82f501c940e330e2a7414c112a97ddb53d8e5e43e79a8f->leave($__internal_ea5c50f3e62f2a97ab82f501c940e330e2a7414c112a97ddb53d8e5e43e79a8f_prof);

        
        $__internal_2f46a6fdb185dff0fe45f9004e431157c56896733d66672e3f9f4b6882dd5de4->leave($__internal_2f46a6fdb185dff0fe45f9004e431157c56896733d66672e3f9f4b6882dd5de4_prof);

    }

    // line 29
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_018fc350071eb52f3bcee52c2424ef855c9549abc9c8cb47d3b069187b894b41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_018fc350071eb52f3bcee52c2424ef855c9549abc9c8cb47d3b069187b894b41->enter($__internal_018fc350071eb52f3bcee52c2424ef855c9549abc9c8cb47d3b069187b894b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        $__internal_19bd707ac52e104b99bab30c9253bfc966b6523c0ecd34a50b06791973c6f6b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19bd707ac52e104b99bab30c9253bfc966b6523c0ecd34a50b06791973c6f6b7->enter($__internal_19bd707ac52e104b99bab30c9253bfc966b6523c0ecd34a50b06791973c6f6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        echo " 


    <div id=\"sb-search\" class=\"sb-search\">
        <form>
                <input class=\"sb-search-input\" placeholder=\"Search\" type=\"text\" value=\"\" name=\"search\" id=\"search\">
                <input class=\"sb-search-submit\" type=\"submit\" value=\"\">
                <span class=\"sb-icon-search\"></span>
                <script src=";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/js/uisearch.js"), "html", null, true);
        echo "></script>
                        <script>
                        new UISearch( document.getElementById( 'sb-search' ) );
                        </script>
        </form>
    </div>
    <div class=\"component2\">
        <h2>Gestisci articoli</span></h2>
            <table>\t\t\t\t
                <thead>\t\t\t\t\t\t
                    <tr>
                        <th>Id</th>
                        <th>Denominazione</th>
                        <th>Prezzo vendita</th>
                        <th>Gruppo attributi</th>\t\t\t\t\t\t\t\t
                        <th></th>
                    </tr>\t
                </thead>
                <tbody>
                        ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articoli"]) ? $context["articoli"] : $this->getContext($context, "articoli")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 57
            echo "                    <tr>
                        <td class=\"user-id\">";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "</td>
                        <td class=\"user-denominazione\">";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "denominazione", array()), "html", null, true);
            echo "</td>
                        <td class=\"user-prezzo\">";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "prezzoVendita", array()), "html", null, true);
            echo "</td>
                        <td class=\"user-attributi\">";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "producibileId", array()), "html", null, true);
            echo "</td>
                        <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=\"ordine.html\">Cambia</a></td>
                    </tr>   
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                </tbody>
            </table>
            <div class=\"box bg-3\">
                <script src=";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/js/classie.js"), "html", null, true);
        echo "></script>
                <script src=";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/js/uisearch.js"), "html", null, true);
        echo "></script>

                   
            </div>
    </div>

        <script src=";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/js/classie.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/js/dummydata.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/js/main.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/js/uisearch.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/js/modernizr.custom.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/js/modernizr-custom.js"), "html", null, true);
        echo "></script>

\t<script>
\t(function() {
\t\tvar menuEl = document.getElementById('ml-menu'),
\t\t\tmlmenu = new MLMenu(menuEl, {
\t\t\t\t// breadcrumbsCtrl : true, // show breadcrumbs
\t\t\t\t// initialBreadcrumb : 'all', // initial breadcrumb text
\t\t\t\tbackCtrl : false, // show back button
\t\t\t\t// itemsDelayInterval : 60, // delay between each menu item sliding animation
\t\t\t\tonItemClick: loadDummyData // callback: item that doesn´t have a submenu gets clicked - onItemClick([event], [inner HTML of the clicked item])
\t\t\t});

\t\t// mobile menu toggle
\t\tvar openMenuCtrl = document.querySelector('.action--open'),
\t\t\tcloseMenuCtrl = document.querySelector('.action--close');

\t\topenMenuCtrl.addEventListener('click', openMenu);
\t\tcloseMenuCtrl.addEventListener('click', closeMenu);

\t\tfunction openMenu() {
\t\t\tclassie.add(menuEl, 'menu--open');
\t\t}

\t\tfunction closeMenu() {
\t\t\tclassie.remove(menuEl, 'menu--open');
\t\t}

\t\t// simulate grid content loading
\t\tvar gridWrapper = document.querySelector('.content');

\t\tfunction loadDummyData(ev, itemName) {
\t\t\tev.preventDefault();

\t\t\tcloseMenu();
\t\t\tgridWrapper.innerHTML = '';
\t\t\tclassie.add(gridWrapper, 'content--loading');
\t\t\tsetTimeout(function() {
\t\t\t\tclassie.remove(gridWrapper, 'content--loading');
\t\t\t\tgridWrapper.innerHTML = '<ul class=\"products\">' + dummyData[itemName] + '<ul>';
\t\t\t}, 700);
\t\t}
\t})();
\t</script>
\t\t<script>
\t\t\tnew UISearch( document.getElementById( 'sb-search' ) );
\t\t</script>
";
        
        $__internal_19bd707ac52e104b99bab30c9253bfc966b6523c0ecd34a50b06791973c6f6b7->leave($__internal_19bd707ac52e104b99bab30c9253bfc966b6523c0ecd34a50b06791973c6f6b7_prof);

        
        $__internal_018fc350071eb52f3bcee52c2424ef855c9549abc9c8cb47d3b069187b894b41->leave($__internal_018fc350071eb52f3bcee52c2424ef855c9549abc9c8cb47d3b069187b894b41_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Amministratore:Aarticoli.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 80,  263 => 79,  259 => 78,  255 => 77,  251 => 76,  247 => 75,  238 => 69,  234 => 68,  229 => 65,  219 => 61,  215 => 60,  211 => 59,  207 => 58,  204 => 57,  200 => 56,  178 => 37,  160 => 29,  145 => 24,  136 => 23,  123 => 19,  119 => 18,  115 => 17,  111 => 16,  107 => 15,  103 => 14,  99 => 13,  95 => 12,  91 => 11,  87 => 10,  83 => 9,  79 => 8,  75 => 7,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle:Amministratore:Abase.html.twig\" %}

{% block title %}Articoli visualizzazione{% endblock %}

    {% block stylesheets %}
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/normalize.css\")}}\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/set1.css\")}}\" />
         <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/set2.css\")}}\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/buttons.css\")}}\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/component.css\")}}\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/component2.css\")}}\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/demo.css\")}}\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/demo2.css\")}}\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/step.css\")}}\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/ricerca.css\")}}\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/cs-select.css\")}}\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/cs-skin-boxes.css\")}}\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/cs-skin-underline.css\")}}\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/organicfoodicons.css\")}}\" />
        <link rel=\"shortcut icon\" href=\"favicon.ico\">
    {% endblock %}

 {% block javascripts %}
            <script src={{asset(\"Amministratore/js/modernizr.custom.js\")}}></script>

    
    {% endblock %}
    
{% block corpo %} 


    <div id=\"sb-search\" class=\"sb-search\">
        <form>
                <input class=\"sb-search-input\" placeholder=\"Search\" type=\"text\" value=\"\" name=\"search\" id=\"search\">
                <input class=\"sb-search-submit\" type=\"submit\" value=\"\">
                <span class=\"sb-icon-search\"></span>
                <script src={{asset(\"Amministratore/js/uisearch.js\")}}></script>
                        <script>
                        new UISearch( document.getElementById( 'sb-search' ) );
                        </script>
        </form>
    </div>
    <div class=\"component2\">
        <h2>Gestisci articoli</span></h2>
            <table>\t\t\t\t
                <thead>\t\t\t\t\t\t
                    <tr>
                        <th>Id</th>
                        <th>Denominazione</th>
                        <th>Prezzo vendita</th>
                        <th>Gruppo attributi</th>\t\t\t\t\t\t\t\t
                        <th></th>
                    </tr>\t
                </thead>
                <tbody>
                        {%for item in articoli%}
                    <tr>
                        <td class=\"user-id\">{{item.id}}</td>
                        <td class=\"user-denominazione\">{{item.denominazione}}</td>
                        <td class=\"user-prezzo\">{{item.prezzoVendita}}</td>
                        <td class=\"user-attributi\">{{item.producibileId}}</td>
                        <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=\"ordine.html\">Cambia</a></td>
                    </tr>   
                        {%endfor%}
                </tbody>
            </table>
            <div class=\"box bg-3\">
                <script src={{asset(\"Amministratore/js/classie.js\")}}></script>
                <script src={{asset(\"Amministratore/js/uisearch.js\")}}></script>

                   
            </div>
    </div>

        <script src={{asset(\"Amministratore/js/classie.js\")}}></script>
        <script src={{asset(\"Amministratore/js/dummydata.js\")}}></script>
        <script src={{asset(\"Amministratore/js/main.js\")}}></script>
        <script src={{asset(\"Amministratore/js/uisearch.js\")}}></script>
        <script src={{asset(\"Amministratore/js/modernizr.custom.js\")}}></script>
        <script src={{asset(\"Amministratore/js/modernizr-custom.js\")}}></script>

\t<script>
\t(function() {
\t\tvar menuEl = document.getElementById('ml-menu'),
\t\t\tmlmenu = new MLMenu(menuEl, {
\t\t\t\t// breadcrumbsCtrl : true, // show breadcrumbs
\t\t\t\t// initialBreadcrumb : 'all', // initial breadcrumb text
\t\t\t\tbackCtrl : false, // show back button
\t\t\t\t// itemsDelayInterval : 60, // delay between each menu item sliding animation
\t\t\t\tonItemClick: loadDummyData // callback: item that doesn´t have a submenu gets clicked - onItemClick([event], [inner HTML of the clicked item])
\t\t\t});

\t\t// mobile menu toggle
\t\tvar openMenuCtrl = document.querySelector('.action--open'),
\t\t\tcloseMenuCtrl = document.querySelector('.action--close');

\t\topenMenuCtrl.addEventListener('click', openMenu);
\t\tcloseMenuCtrl.addEventListener('click', closeMenu);

\t\tfunction openMenu() {
\t\t\tclassie.add(menuEl, 'menu--open');
\t\t}

\t\tfunction closeMenu() {
\t\t\tclassie.remove(menuEl, 'menu--open');
\t\t}

\t\t// simulate grid content loading
\t\tvar gridWrapper = document.querySelector('.content');

\t\tfunction loadDummyData(ev, itemName) {
\t\t\tev.preventDefault();

\t\t\tcloseMenu();
\t\t\tgridWrapper.innerHTML = '';
\t\t\tclassie.add(gridWrapper, 'content--loading');
\t\t\tsetTimeout(function() {
\t\t\t\tclassie.remove(gridWrapper, 'content--loading');
\t\t\t\tgridWrapper.innerHTML = '<ul class=\"products\">' + dummyData[itemName] + '<ul>';
\t\t\t}, 700);
\t\t}
\t})();
\t</script>
\t\t<script>
\t\t\tnew UISearch( document.getElementById( 'sb-search' ) );
\t\t</script>
{% endblock %}", "AppBundle:Amministratore:Aarticoli.html.twig", "C:\\Users\\fabio\\Desktop\\Nuova cartella\\Inprint\\src\\AppBundle/Resources/views/Amministratore/Aarticoli.html.twig");
    }
}
