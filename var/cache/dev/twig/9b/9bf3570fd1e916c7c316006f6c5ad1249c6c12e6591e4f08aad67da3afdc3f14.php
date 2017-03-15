<?php

/* AppBundle:Prinkino:catalogo.html.twig */
class __TwigTemplate_5f736c205f1b479412188d504102cb09264ff183328870d8fb33e6259b43bdea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Prinkino:catalogo.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'corpo' => array($this, 'block_corpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b527b7a0df626d558f49fbe659cb0e59b5f2813ece10b36365447dc18e928f61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b527b7a0df626d558f49fbe659cb0e59b5f2813ece10b36365447dc18e928f61->enter($__internal_b527b7a0df626d558f49fbe659cb0e59b5f2813ece10b36365447dc18e928f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Prinkino:catalogo.html.twig"));

        $__internal_05fd1cd960b93eb64fd1bfaafd16181147cadeb13178195e219cebffe5ab9be7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05fd1cd960b93eb64fd1bfaafd16181147cadeb13178195e219cebffe5ab9be7->enter($__internal_05fd1cd960b93eb64fd1bfaafd16181147cadeb13178195e219cebffe5ab9be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Prinkino:catalogo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b527b7a0df626d558f49fbe659cb0e59b5f2813ece10b36365447dc18e928f61->leave($__internal_b527b7a0df626d558f49fbe659cb0e59b5f2813ece10b36365447dc18e928f61_prof);

        
        $__internal_05fd1cd960b93eb64fd1bfaafd16181147cadeb13178195e219cebffe5ab9be7->leave($__internal_05fd1cd960b93eb64fd1bfaafd16181147cadeb13178195e219cebffe5ab9be7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_41ac489451afdc39fd171d2f8284dc991e64a3bc62da9d9c50e3990557c10ccf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41ac489451afdc39fd171d2f8284dc991e64a3bc62da9d9c50e3990557c10ccf->enter($__internal_41ac489451afdc39fd171d2f8284dc991e64a3bc62da9d9c50e3990557c10ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_249b64652bbc3b59ebed147fdc4ed7dd6ece128691b40283d51aff7001eec121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_249b64652bbc3b59ebed147fdc4ed7dd6ece128691b40283d51aff7001eec121->enter($__internal_249b64652bbc3b59ebed147fdc4ed7dd6ece128691b40283d51aff7001eec121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Nuova categoria visualizzazione ";
        
        $__internal_249b64652bbc3b59ebed147fdc4ed7dd6ece128691b40283d51aff7001eec121->leave($__internal_249b64652bbc3b59ebed147fdc4ed7dd6ece128691b40283d51aff7001eec121_prof);

        
        $__internal_41ac489451afdc39fd171d2f8284dc991e64a3bc62da9d9c50e3990557c10ccf->leave($__internal_41ac489451afdc39fd171d2f8284dc991e64a3bc62da9d9c50e3990557c10ccf_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d5f79cc08d0a535f81cec9a6bd1956042d871b9b67a9e85839038db745ea96ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5f79cc08d0a535f81cec9a6bd1956042d871b9b67a9e85839038db745ea96ea->enter($__internal_d5f79cc08d0a535f81cec9a6bd1956042d871b9b67a9e85839038db745ea96ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_64353a578ba6279a05b4e61188ee8b51f103f7f6c3a5ae4b14fec31dfea91472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64353a578ba6279a05b4e61188ee8b51f103f7f6c3a5ae4b14fec31dfea91472->enter($__internal_64353a578ba6279a05b4e61188ee8b51f103f7f6c3a5ae4b14fec31dfea91472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "  
     
     ";
        // line 8
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "     
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/normalize.css"), "html", null, true);
        echo "\" />
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/component.css"), "html", null, true);
        echo "\" />
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/demo.css"), "html", null, true);
        echo "\" />
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/set1.css"), "html", null, true);
        echo "\" />
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/buttons.css"), "html", null, true);
        echo "\" />
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/demo2.css"), "html", null, true);
        echo "\" />
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/cs-select.css"), "html", null, true);
        echo "\" />
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/ricerca.css"), "html", null, true);
        echo "\" />
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/component2.css"), "html", null, true);
        echo "\" />
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/step.css"), "html", null, true);
        echo "\" />
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/cs-skin-boxes.css"), "html", null, true);
        echo "\" />
 \t
 ";
        
        $__internal_64353a578ba6279a05b4e61188ee8b51f103f7f6c3a5ae4b14fec31dfea91472->leave($__internal_64353a578ba6279a05b4e61188ee8b51f103f7f6c3a5ae4b14fec31dfea91472_prof);

        
        $__internal_d5f79cc08d0a535f81cec9a6bd1956042d871b9b67a9e85839038db745ea96ea->leave($__internal_d5f79cc08d0a535f81cec9a6bd1956042d871b9b67a9e85839038db745ea96ea_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7cd092e5a233de853562389c2f8e2a69d06887cfe78272a96698f522a025c883 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cd092e5a233de853562389c2f8e2a69d06887cfe78272a96698f522a025c883->enter($__internal_7cd092e5a233de853562389c2f8e2a69d06887cfe78272a96698f522a025c883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d9ce47ae8300883ee4fddbf7dba384275464f4fc579fe774e485f9bf37f0e5f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9ce47ae8300883ee4fddbf7dba384275464f4fc579fe774e485f9bf37f0e5f8->enter($__internal_d9ce47ae8300883ee4fddbf7dba384275464f4fc579fe774e485f9bf37f0e5f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 25
        echo "        
    <script src=";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/js/classie.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/js/modernizr-custom.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/js/uisearch.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/js/dummydata.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/js/main.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/js/selectFx.js"), "html", null, true);
        echo "></script>

";
        
        $__internal_d9ce47ae8300883ee4fddbf7dba384275464f4fc579fe774e485f9bf37f0e5f8->leave($__internal_d9ce47ae8300883ee4fddbf7dba384275464f4fc579fe774e485f9bf37f0e5f8_prof);

        
        $__internal_7cd092e5a233de853562389c2f8e2a69d06887cfe78272a96698f522a025c883->leave($__internal_7cd092e5a233de853562389c2f8e2a69d06887cfe78272a96698f522a025c883_prof);

    }

    // line 36
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_d1a87a4057d49f43ac4f3fa33a5a8f0472d526da8c92db3486fdb72af5f4e985 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1a87a4057d49f43ac4f3fa33a5a8f0472d526da8c92db3486fdb72af5f4e985->enter($__internal_d1a87a4057d49f43ac4f3fa33a5a8f0472d526da8c92db3486fdb72af5f4e985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        $__internal_d9cc8098c0ce6c1b78044564474bbe5cef3ec19b72d58c00ebf105df1c82719b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9cc8098c0ce6c1b78044564474bbe5cef3ec19b72d58c00ebf105df1c82719b->enter($__internal_d9cc8098c0ce6c1b78044564474bbe5cef3ec19b72d58c00ebf105df1c82719b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 37
        echo "    
<div class=\"content\" >
    <div id=\"sb-search\" class=\"sb-search\">
        <form>
            <input class=\"sb-search-input\" placeholder=\"Search\" type=\"text\" value=\"\" name=\"search\" id=\"search\">
            <input class=\"sb-search-submit\" type=\"submit\" value=\"\">
            <span class=\"sb-icon-search\"></span>
        </form>
    </div>
    <div class=\"codrops-top clearfix\">
        <span>Torna indietro</span></a>
        <span class=\"right\"><span>Vai avanti</span></a></span>
    </div>
    
    <div class=\"codrops-header\">
        <div id=\"precedente\">
            <h1>Seleziona Categoria</h1>
        </div>
    </div>
    <div id=\"selezione\">
        <select class=\"cs-select cs-skin-boxes\" onclick=\"SottoCategorie(1)\" >
            <option name=\"\" value=\"\" disabled selected>Seleziona Categoria</option>
            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 60
            echo "            <option name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nome", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "\" data-class=\"color-588c75\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nome", array()), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "        </select>
    </div>
        <section id=\"producibili\">                        
        </section> 
        
        
         <script src=";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/js/selectFx.js"), "html", null, true);
        echo "></script>
             <script src=";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/js/classie.js"), "html", null, true);
        echo "></script>

</div>
             
             
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

                     
                \t<script>
\t\t\t(function() {
\t\t\t\t[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {\t
\t\t\t\t\tnew SelectFx(el, {
\t\t\t\t\t\tstickyPlaceholder: false,
\t\t\t\t\t\tonChange: function(val){
                                                        SottoCategorie(val);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t} );
\t\t\t})();
\t\t</script>
                </body>
";
        
        $__internal_d9cc8098c0ce6c1b78044564474bbe5cef3ec19b72d58c00ebf105df1c82719b->leave($__internal_d9cc8098c0ce6c1b78044564474bbe5cef3ec19b72d58c00ebf105df1c82719b_prof);

        
        $__internal_d1a87a4057d49f43ac4f3fa33a5a8f0472d526da8c92db3486fdb72af5f4e985->leave($__internal_d1a87a4057d49f43ac4f3fa33a5a8f0472d526da8c92db3486fdb72af5f4e985_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Prinkino:catalogo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 69,  233 => 68,  225 => 62,  212 => 60,  208 => 59,  184 => 37,  175 => 36,  162 => 31,  158 => 30,  154 => 29,  150 => 28,  146 => 27,  142 => 26,  139 => 25,  130 => 24,  117 => 19,  113 => 18,  109 => 17,  105 => 16,  101 => 15,  97 => 14,  93 => 13,  89 => 12,  85 => 11,  81 => 10,  77 => 9,  73 => 8,  61 => 6,  43 => 3,  11 => 1,);
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

{% block title %}Nuova categoria visualizzazione {% endblock %}

 
 {% block stylesheets %}  
     
     {{ parent() }}     
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/normalize.css\")}}\" />
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/component.css\")}}\" />
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/demo.css\")}}\" />
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/set1.css\")}}\" />
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/buttons.css\")}}\" />
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/demo2.css\")}}\" />
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/cs-select.css\")}}\" />
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/ricerca.css\")}}\" />
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/component2.css\")}}\" />
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/step.css\")}}\" />
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/cs-skin-boxes.css\")}}\" />
 \t
 {% endblock %}


{% block javascripts %}
        
    <script src={{asset(\"prinkino/js/classie.js\")}}></script>
    <script src={{asset(\"prinkino/js/modernizr-custom.js\")}}></script>
    <script src={{asset(\"prinkino/js/uisearch.js\")}}></script>
    <script src={{asset(\"prinkino/js/dummydata.js\")}}></script>
    <script src={{asset(\"prinkino/js/main.js\")}}></script>
    <script src={{asset(\"prinkino/js/selectFx.js\")}}></script>

{% endblock %}


{% block corpo %}
    
<div class=\"content\" >
    <div id=\"sb-search\" class=\"sb-search\">
        <form>
            <input class=\"sb-search-input\" placeholder=\"Search\" type=\"text\" value=\"\" name=\"search\" id=\"search\">
            <input class=\"sb-search-submit\" type=\"submit\" value=\"\">
            <span class=\"sb-icon-search\"></span>
        </form>
    </div>
    <div class=\"codrops-top clearfix\">
        <span>Torna indietro</span></a>
        <span class=\"right\"><span>Vai avanti</span></a></span>
    </div>
    
    <div class=\"codrops-header\">
        <div id=\"precedente\">
            <h1>Seleziona Categoria</h1>
        </div>
    </div>
    <div id=\"selezione\">
        <select class=\"cs-select cs-skin-boxes\" onclick=\"SottoCategorie(1)\" >
            <option name=\"\" value=\"\" disabled selected>Seleziona Categoria</option>
            {%for item in catalogo%}
            <option name=\"{{item.nome}}\" value=\"{{item.id}}\" data-class=\"color-588c75\">{{item.nome}}</option>
            {%endfor%}
        </select>
    </div>
        <section id=\"producibili\">                        
        </section> 
        
        
         <script src={{asset(\"prinkino/js/selectFx.js\")}}></script>
             <script src={{asset(\"prinkino/js/classie.js\")}}></script>

</div>
             
             
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

                     
                \t<script>
\t\t\t(function() {
\t\t\t\t[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {\t
\t\t\t\t\tnew SelectFx(el, {
\t\t\t\t\t\tstickyPlaceholder: false,
\t\t\t\t\t\tonChange: function(val){
                                                        SottoCategorie(val);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t} );
\t\t\t})();
\t\t</script>
                </body>
{% endblock %}



", "AppBundle:Prinkino:catalogo.html.twig", "C:\\Users\\fabio\\Desktop\\Nuova cartella\\Inprint\\src\\AppBundle/Resources/views/Prinkino/catalogo.html.twig");
    }
}
