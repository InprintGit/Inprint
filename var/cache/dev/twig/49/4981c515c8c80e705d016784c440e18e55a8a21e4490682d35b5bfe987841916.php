<?php

/* AppBundle:Amministratore:Aattributi.html.twig */
class __TwigTemplate_32c1f974a7c86d7c7cba49a4ae96ceb43ad3ea8849ccd3fc7ba9d1222492e910 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Amministratore:Abase.html.twig", "AppBundle:Amministratore:Aattributi.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'corpo' => array($this, 'block_corpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:Amministratore:Abase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ffe50e96d5aa4e19601f8bb4460770e4a3ccff586f420a60c7bda8be46a92a93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffe50e96d5aa4e19601f8bb4460770e4a3ccff586f420a60c7bda8be46a92a93->enter($__internal_ffe50e96d5aa4e19601f8bb4460770e4a3ccff586f420a60c7bda8be46a92a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Amministratore:Aattributi.html.twig"));

        $__internal_6e2f15598c701cbe2a94464f69fd24ea92c6f70bedf74eac26be8f460cb5bf66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e2f15598c701cbe2a94464f69fd24ea92c6f70bedf74eac26be8f460cb5bf66->enter($__internal_6e2f15598c701cbe2a94464f69fd24ea92c6f70bedf74eac26be8f460cb5bf66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Amministratore:Aattributi.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffe50e96d5aa4e19601f8bb4460770e4a3ccff586f420a60c7bda8be46a92a93->leave($__internal_ffe50e96d5aa4e19601f8bb4460770e4a3ccff586f420a60c7bda8be46a92a93_prof);

        
        $__internal_6e2f15598c701cbe2a94464f69fd24ea92c6f70bedf74eac26be8f460cb5bf66->leave($__internal_6e2f15598c701cbe2a94464f69fd24ea92c6f70bedf74eac26be8f460cb5bf66_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3f582a69ff4a9393546b8bca08db1f7ad6c3fe0683ab2d9b5626eefdfd07fc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3f582a69ff4a9393546b8bca08db1f7ad6c3fe0683ab2d9b5626eefdfd07fc6->enter($__internal_c3f582a69ff4a9393546b8bca08db1f7ad6c3fe0683ab2d9b5626eefdfd07fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8040d6737123544b1d829695633b450e0e30aa5e29702f60f984c1dcde77fbf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8040d6737123544b1d829695633b450e0e30aa5e29702f60f984c1dcde77fbf0->enter($__internal_8040d6737123544b1d829695633b450e0e30aa5e29702f60f984c1dcde77fbf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Attributi visualizzazione";
        
        $__internal_8040d6737123544b1d829695633b450e0e30aa5e29702f60f984c1dcde77fbf0->leave($__internal_8040d6737123544b1d829695633b450e0e30aa5e29702f60f984c1dcde77fbf0_prof);

        
        $__internal_c3f582a69ff4a9393546b8bca08db1f7ad6c3fe0683ab2d9b5626eefdfd07fc6->leave($__internal_c3f582a69ff4a9393546b8bca08db1f7ad6c3fe0683ab2d9b5626eefdfd07fc6_prof);

    }

    // line 5
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_cf04fcbdd4b9d3c319be87dc508c3ba58654dd1ce53079f5b9e0d9d667d0738c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf04fcbdd4b9d3c319be87dc508c3ba58654dd1ce53079f5b9e0d9d667d0738c->enter($__internal_cf04fcbdd4b9d3c319be87dc508c3ba58654dd1ce53079f5b9e0d9d667d0738c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        $__internal_8b77214e423756046bbf8eea4010d4714fd8487aa40b64d2afdb8fbfe236d2f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b77214e423756046bbf8eea4010d4714fd8487aa40b64d2afdb8fbfe236d2f9->enter($__internal_8b77214e423756046bbf8eea4010d4714fd8487aa40b64d2afdb8fbfe236d2f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 6
        echo "
<div class=\"content\">
    <div id=\"sb-search\" class=\"sb-search\">
        <form>
            <input class=\"sb-search-input\" placeholder=\"Search\" type=\"text\" value=\"\" name=\"search\" id=\"search\">
            <input class=\"sb-search-submit\" type=\"submit\" value=\"\">
            <span class=\"sb-icon-search\"></span>
            <script src=";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/js/uisearch.js"), "html", null, true);
        echo "></script>
            <script>
                new UISearch( document.getElementById( 'sb-search' ) );
            </script>
        </form>
    </div>
        <div class=\"component2\">
            <h2>Attributi</span></h2>
                <table>\t\t\t\t
                    <thead>\t\t\t\t\t\t
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Numero valori</th>
                            <th></th>
                        </tr>\t
                    </thead>
                    <tbody>
                            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attributi"]) ? $context["attributi"] : $this->getContext($context, "attributi")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 32
            echo "                        <tr><td class=\"user-name\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "</td>
                            <td class=\"user-email\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nome", array()), "html", null, true);
            echo "</td>
                            <td class=\"user-email\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "valori", array()), "html", null, true);
            echo "</td>
                            <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=\"ordine.html\">Cambia</a></td>
                        </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                    </tbody>
                </table>
                <div class=\"box bg-3\">
                    <button class=\"button button--nanuk button--border-thin button--round-s\">
                        <span>E</span><span>l</span><span>i</span><span>m</span><span>i</span><span>n</span><span>a</span>
                    </button>
                    <button class=\"button button--nanuk button--border-thin button--round-s\">
                        <span>M</span><span>o</span><span>d</span><span>i</span><span>f</span><span>i</span><span>c</span><span>a</span>
                    </button>
                    <script src=";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/js/classie.js"), "html", null, true);
        echo "></script>
                    <script src=";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/js/uisearch.js"), "html", null, true);
        echo "></script>
                    <script>
                        new UISearch( document.getElementById( 'sb-search' ) );
                    </script>
                </div>
        </div>
    </div>

\t<!-- /view -->
        <script src=";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/js/dummydata.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/js/main.js"), "html", null, true);
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
        
        $__internal_8b77214e423756046bbf8eea4010d4714fd8487aa40b64d2afdb8fbfe236d2f9->leave($__internal_8b77214e423756046bbf8eea4010d4714fd8487aa40b64d2afdb8fbfe236d2f9_prof);

        
        $__internal_cf04fcbdd4b9d3c319be87dc508c3ba58654dd1ce53079f5b9e0d9d667d0738c->leave($__internal_cf04fcbdd4b9d3c319be87dc508c3ba58654dd1ce53079f5b9e0d9d667d0738c_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Amministratore:Aattributi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 58,  148 => 57,  136 => 48,  132 => 47,  121 => 38,  111 => 34,  107 => 33,  102 => 32,  98 => 31,  77 => 13,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %} Attributi visualizzazione{% endblock %}

{% block corpo %}

<div class=\"content\">
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
            <h2>Attributi</span></h2>
                <table>\t\t\t\t
                    <thead>\t\t\t\t\t\t
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Numero valori</th>
                            <th></th>
                        </tr>\t
                    </thead>
                    <tbody>
                            {%for item in attributi%}
                        <tr><td class=\"user-name\">{{item.id}}</td>
                            <td class=\"user-email\">{{item.nome}}</td>
                            <td class=\"user-email\">{{item.valori}}</td>
                            <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=\"ordine.html\">Cambia</a></td>
                        </tr>
                            {%endfor%}
                    </tbody>
                </table>
                <div class=\"box bg-3\">
                    <button class=\"button button--nanuk button--border-thin button--round-s\">
                        <span>E</span><span>l</span><span>i</span><span>m</span><span>i</span><span>n</span><span>a</span>
                    </button>
                    <button class=\"button button--nanuk button--border-thin button--round-s\">
                        <span>M</span><span>o</span><span>d</span><span>i</span><span>f</span><span>i</span><span>c</span><span>a</span>
                    </button>
                    <script src={{asset(\"Amministratore/js/classie.js\")}}></script>
                    <script src={{asset(\"Amministratore/js/uisearch.js\")}}></script>
                    <script>
                        new UISearch( document.getElementById( 'sb-search' ) );
                    </script>
                </div>
        </div>
    </div>

\t<!-- /view -->
        <script src={{asset(\"Amministratore/js/dummydata.js\")}}></script>
        <script src={{asset(\"Amministratore/js/main.js\")}}></script>    
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
{% endblock %}", "AppBundle:Amministratore:Aattributi.html.twig", "C:\\Users\\fabio\\Desktop\\Nuova cartella\\Inprint\\src\\AppBundle/Resources/views/Amministratore/Aattributi.html.twig");
    }
}
