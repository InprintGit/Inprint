<?php

/* AppBundle:Prinkino:riepilogo.html.twig */
class __TwigTemplate_945d782d8f16b833b7b2877a14f2df3af9a7cc450e2f857618ed30b5dc55ab8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Prinkino:riepilogo.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'corpo' => array($this, 'block_corpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b11d452c36749dc7ae2632cfee7ee1a9c4e7fa88b818492ec89b08b258479a1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b11d452c36749dc7ae2632cfee7ee1a9c4e7fa88b818492ec89b08b258479a1b->enter($__internal_b11d452c36749dc7ae2632cfee7ee1a9c4e7fa88b818492ec89b08b258479a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Prinkino:riepilogo.html.twig"));

        $__internal_591e3b13f46bb0b2ef5aa3a5cb7947559d91322a8fafa82df8ea06db503cb61b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_591e3b13f46bb0b2ef5aa3a5cb7947559d91322a8fafa82df8ea06db503cb61b->enter($__internal_591e3b13f46bb0b2ef5aa3a5cb7947559d91322a8fafa82df8ea06db503cb61b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Prinkino:riepilogo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b11d452c36749dc7ae2632cfee7ee1a9c4e7fa88b818492ec89b08b258479a1b->leave($__internal_b11d452c36749dc7ae2632cfee7ee1a9c4e7fa88b818492ec89b08b258479a1b_prof);

        
        $__internal_591e3b13f46bb0b2ef5aa3a5cb7947559d91322a8fafa82df8ea06db503cb61b->leave($__internal_591e3b13f46bb0b2ef5aa3a5cb7947559d91322a8fafa82df8ea06db503cb61b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1aa7494414601e47640bf9fc03295870ce97e440cef91a5055ed6632e3faae0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1aa7494414601e47640bf9fc03295870ce97e440cef91a5055ed6632e3faae0->enter($__internal_e1aa7494414601e47640bf9fc03295870ce97e440cef91a5055ed6632e3faae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4305d477c64edf88ba45c6dc469af05cfbaf52256fea7e3a6e26d15d0bb52ec0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4305d477c64edf88ba45c6dc469af05cfbaf52256fea7e3a6e26d15d0bb52ec0->enter($__internal_4305d477c64edf88ba45c6dc469af05cfbaf52256fea7e3a6e26d15d0bb52ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Rieplilogo";
        
        $__internal_4305d477c64edf88ba45c6dc469af05cfbaf52256fea7e3a6e26d15d0bb52ec0->leave($__internal_4305d477c64edf88ba45c6dc469af05cfbaf52256fea7e3a6e26d15d0bb52ec0_prof);

        
        $__internal_e1aa7494414601e47640bf9fc03295870ce97e440cef91a5055ed6632e3faae0->leave($__internal_e1aa7494414601e47640bf9fc03295870ce97e440cef91a5055ed6632e3faae0_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_77006566d492781f0936d75fa73f9caddd69ad9039c4a6dfd4c45246a463e1fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77006566d492781f0936d75fa73f9caddd69ad9039c4a6dfd4c45246a463e1fa->enter($__internal_77006566d492781f0936d75fa73f9caddd69ad9039c4a6dfd4c45246a463e1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d5d9df38c52927d6a18e19b1e06cd67d482689fd2bc51c24bcff11dc745654b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5d9df38c52927d6a18e19b1e06cd67d482689fd2bc51c24bcff11dc745654b3->enter($__internal_d5d9df38c52927d6a18e19b1e06cd67d482689fd2bc51c24bcff11dc745654b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "        
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/normalize.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/set1.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/buttons.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/demo.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/demo2.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/ricerca.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/component.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/component2.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/step.css"), "html", null, true);
        echo "\" />

        ";
        
        $__internal_d5d9df38c52927d6a18e19b1e06cd67d482689fd2bc51c24bcff11dc745654b3->leave($__internal_d5d9df38c52927d6a18e19b1e06cd67d482689fd2bc51c24bcff11dc745654b3_prof);

        
        $__internal_77006566d492781f0936d75fa73f9caddd69ad9039c4a6dfd4c45246a463e1fa->leave($__internal_77006566d492781f0936d75fa73f9caddd69ad9039c4a6dfd4c45246a463e1fa_prof);

    }

    // line 19
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_5852006d5521eb59da49bb63eab5252d8c93c824104881163d7600a7a86dc8f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5852006d5521eb59da49bb63eab5252d8c93c824104881163d7600a7a86dc8f8->enter($__internal_5852006d5521eb59da49bb63eab5252d8c93c824104881163d7600a7a86dc8f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        $__internal_4fb21e9f90dc80c3aa9dea7e3185059e906df32ca18a94c80cb2a0d9c23e98c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fb21e9f90dc80c3aa9dea7e3185059e906df32ca18a94c80cb2a0d9c23e98c4->enter($__internal_4fb21e9f90dc80c3aa9dea7e3185059e906df32ca18a94c80cb2a0d9c23e98c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 20
        echo "
<div class=\"content\">\t
    <form id=\"msform\"> 
        <ul id=\"progressbar\">
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 6));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            if (($context["i"] <= 6)) {
                // line 25
                echo "            <li class=\"active\"> fase ";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</li>
            ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 27
            echo "            <li> fase i </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </ul>    \t\t\t                   
    </form>

    <div id=\"sb-search\" class=\"sb-search\">
        <form>
            <input class=\"sb-search-input\" placeholder=\"Search\" type=\"text\" value=\"\" name=\"search\" id=\"search\">
            <input class=\"sb-search-submit\" type=\"submit\" value=\"\">
            <span class=\"sb-icon-search\"></span>
            <script>
                new UISearch( document.getElementById( 'sb-search' ) );
            </script>
        </form>
    </div>

    <div class=\"component2\"> 
        <h2>Riepilogo</h2>
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th></th>                                  
                </tr>
            </thead>
            <tbody>
                ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["riepilogo"]) ? $context["riepilogo"] : $this->getContext($context, "riepilogo")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 54
            echo "                <tr><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "tipo", array()), "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "contenuto", array()), "html", null, true);
            echo "</td></tr> 
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "            </tbody>
        </table>
    </div>
</div>
           <script src=";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/js/classie.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/js/uisearch.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/js/dummydata.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/js/main.js"), "html", null, true);
        echo "></script>
        <script>
            new UISearch( document.getElementById( 'sb-search' ) );
        </script>  
           

<script>
(function() {
    var menuEl = document.getElementById('ml-menu'),
        mlmenu = new MLMenu(menuEl, {
            // breadcrumbsCtrl : true, // show breadcrumbs
            // initialBreadcrumb : 'all', // initial breadcrumb text
            backCtrl : false, // show back button
            // itemsDelayInterval : 60, // delay between each menu item sliding animation
            onItemClick: loadDummyData // callback: item that doesn´t have a submenu gets clicked - onItemClick([event], [inner HTML of the clicked item])
        });

    // mobile menu toggle
    var openMenuCtrl = document.querySelector('.action--open'),
        closeMenuCtrl = document.querySelector('.action--close');

    openMenuCtrl.addEventListener('click', openMenu);
    closeMenuCtrl.addEventListener('click', closeMenu);

    function openMenu() {
        classie.add(menuEl, 'menu--open');
    }

    function closeMenu() {
        classie.remove(menuEl, 'menu--open');
    }

    // simulate grid content loading
    var gridWrapper = document.querySelector('.content');

    function loadDummyData(ev, itemName) {
        ev.preventDefault();

        closeMenu();
        gridWrapper.innerHTML = '';
        classie.add(gridWrapper, 'content--loading');
        setTimeout(function() {
            classie.remove(gridWrapper, 'content--loading');
            gridWrapper.innerHTML = '<ul class=\"products\">' + dummyData[itemName] + '<ul>';
        }, 700);
    }
})();
</script>
";
        
        $__internal_4fb21e9f90dc80c3aa9dea7e3185059e906df32ca18a94c80cb2a0d9c23e98c4->leave($__internal_4fb21e9f90dc80c3aa9dea7e3185059e906df32ca18a94c80cb2a0d9c23e98c4_prof);

        
        $__internal_5852006d5521eb59da49bb63eab5252d8c93c824104881163d7600a7a86dc8f8->leave($__internal_5852006d5521eb59da49bb63eab5252d8c93c824104881163d7600a7a86dc8f8_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Prinkino:riepilogo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 63,  209 => 62,  205 => 61,  201 => 60,  195 => 56,  184 => 54,  180 => 53,  154 => 29,  147 => 27,  138 => 25,  132 => 24,  126 => 20,  117 => 19,  104 => 15,  100 => 14,  96 => 13,  92 => 12,  88 => 11,  84 => 10,  80 => 9,  76 => 8,  72 => 7,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}Rieplilogo{% endblock %}

        {% block stylesheets %}
        
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/normalize.css\")}}\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/set1.css\")}}\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/buttons.css\")}}\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/demo.css\")}}\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/demo2.css\")}}\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/ricerca.css\")}}\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/component.css\")}}\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/component2.css\")}}\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/step.css\")}}\" />

        {% endblock %}
        
        {% block corpo %}

<div class=\"content\">\t
    <form id=\"msform\"> 
        <ul id=\"progressbar\">
            {% for i in 1..6 if i<=6 %}
            <li class=\"active\"> fase {{ i }}</li>
            {% else %}
            <li> fase i </li>
            {% endfor %}
        </ul>    \t\t\t                   
    </form>

    <div id=\"sb-search\" class=\"sb-search\">
        <form>
            <input class=\"sb-search-input\" placeholder=\"Search\" type=\"text\" value=\"\" name=\"search\" id=\"search\">
            <input class=\"sb-search-submit\" type=\"submit\" value=\"\">
            <span class=\"sb-icon-search\"></span>
            <script>
                new UISearch( document.getElementById( 'sb-search' ) );
            </script>
        </form>
    </div>

    <div class=\"component2\"> 
        <h2>Riepilogo</h2>
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th></th>                                  
                </tr>
            </thead>
            <tbody>
                {%for item in riepilogo%}
                <tr><td>{{item.tipo}}</td><td>{{item.contenuto}}</td></tr> 
                {%endfor%}
            </tbody>
        </table>
    </div>
</div>
           <script src={{asset(\"prinkino/js/classie.js\")}}></script>
        <script src={{asset(\"prinkino/js/uisearch.js\")}}></script>
        <script src={{asset(\"prinkino/js/dummydata.js\")}}></script>
        <script src={{asset(\"prinkino/js/main.js\")}}></script>
        <script>
            new UISearch( document.getElementById( 'sb-search' ) );
        </script>  
           

<script>
(function() {
    var menuEl = document.getElementById('ml-menu'),
        mlmenu = new MLMenu(menuEl, {
            // breadcrumbsCtrl : true, // show breadcrumbs
            // initialBreadcrumb : 'all', // initial breadcrumb text
            backCtrl : false, // show back button
            // itemsDelayInterval : 60, // delay between each menu item sliding animation
            onItemClick: loadDummyData // callback: item that doesn´t have a submenu gets clicked - onItemClick([event], [inner HTML of the clicked item])
        });

    // mobile menu toggle
    var openMenuCtrl = document.querySelector('.action--open'),
        closeMenuCtrl = document.querySelector('.action--close');

    openMenuCtrl.addEventListener('click', openMenu);
    closeMenuCtrl.addEventListener('click', closeMenu);

    function openMenu() {
        classie.add(menuEl, 'menu--open');
    }

    function closeMenu() {
        classie.remove(menuEl, 'menu--open');
    }

    // simulate grid content loading
    var gridWrapper = document.querySelector('.content');

    function loadDummyData(ev, itemName) {
        ev.preventDefault();

        closeMenu();
        gridWrapper.innerHTML = '';
        classie.add(gridWrapper, 'content--loading');
        setTimeout(function() {
            classie.remove(gridWrapper, 'content--loading');
            gridWrapper.innerHTML = '<ul class=\"products\">' + dummyData[itemName] + '<ul>';
        }, 700);
    }
})();
</script>
{% endblock %}", "AppBundle:Prinkino:riepilogo.html.twig", "C:\\Users\\fabio\\Desktop\\Nuova cartella\\Inprint\\src\\AppBundle/Resources/views/Prinkino/riepilogo.html.twig");
    }
}
