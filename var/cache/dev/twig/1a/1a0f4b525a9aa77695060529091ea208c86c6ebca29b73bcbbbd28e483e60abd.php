<?php

/* AppBundle:Prinkino:nuovocliente.html.twig */
class __TwigTemplate_7699096ebe60c138dea8006e1d7cc8bde8d3b56be83f46aba87606210e89bdd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Prinkino:nuovocliente.html.twig", 2);
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
        $__internal_d2aa881077eb585ad5e1f1f80dfefc0a4f26e3688fd1f4c3b3fbcf2434aad9ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2aa881077eb585ad5e1f1f80dfefc0a4f26e3688fd1f4c3b3fbcf2434aad9ca->enter($__internal_d2aa881077eb585ad5e1f1f80dfefc0a4f26e3688fd1f4c3b3fbcf2434aad9ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Prinkino:nuovocliente.html.twig"));

        $__internal_da0184b348a0fca9d137e76e6c6c7cd843f84fff4bc53fd17be23535aa69d8a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da0184b348a0fca9d137e76e6c6c7cd843f84fff4bc53fd17be23535aa69d8a7->enter($__internal_da0184b348a0fca9d137e76e6c6c7cd843f84fff4bc53fd17be23535aa69d8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Prinkino:nuovocliente.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2aa881077eb585ad5e1f1f80dfefc0a4f26e3688fd1f4c3b3fbcf2434aad9ca->leave($__internal_d2aa881077eb585ad5e1f1f80dfefc0a4f26e3688fd1f4c3b3fbcf2434aad9ca_prof);

        
        $__internal_da0184b348a0fca9d137e76e6c6c7cd843f84fff4bc53fd17be23535aa69d8a7->leave($__internal_da0184b348a0fca9d137e76e6c6c7cd843f84fff4bc53fd17be23535aa69d8a7_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_e94773bab3c7a039a87e8cbb81e2a77223883eca84e89c7674a9480bf6ddb331 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e94773bab3c7a039a87e8cbb81e2a77223883eca84e89c7674a9480bf6ddb331->enter($__internal_e94773bab3c7a039a87e8cbb81e2a77223883eca84e89c7674a9480bf6ddb331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6a5d7bc236bd2ec2794a04e2eb907fdd060f0d4cdb6ab9657fc5a41f5b0d4186 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a5d7bc236bd2ec2794a04e2eb907fdd060f0d4cdb6ab9657fc5a41f5b0d4186->enter($__internal_6a5d7bc236bd2ec2794a04e2eb907fdd060f0d4cdb6ab9657fc5a41f5b0d4186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inserimento Nuovo Cliente";
        
        $__internal_6a5d7bc236bd2ec2794a04e2eb907fdd060f0d4cdb6ab9657fc5a41f5b0d4186->leave($__internal_6a5d7bc236bd2ec2794a04e2eb907fdd060f0d4cdb6ab9657fc5a41f5b0d4186_prof);

        
        $__internal_e94773bab3c7a039a87e8cbb81e2a77223883eca84e89c7674a9480bf6ddb331->leave($__internal_e94773bab3c7a039a87e8cbb81e2a77223883eca84e89c7674a9480bf6ddb331_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_36d278d026a9e687505511f538a7fff834afd77353b669b59999294120d50a4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36d278d026a9e687505511f538a7fff834afd77353b669b59999294120d50a4c->enter($__internal_36d278d026a9e687505511f538a7fff834afd77353b669b59999294120d50a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_06a45fb4af2f8df228be53a8b152bce913be317a70bb48684ac177e0c2742fbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06a45fb4af2f8df228be53a8b152bce913be317a70bb48684ac177e0c2742fbd->enter($__internal_06a45fb4af2f8df228be53a8b152bce913be317a70bb48684ac177e0c2742fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/normalize.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/component.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/buttons.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/set1.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/set2.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/demo.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_06a45fb4af2f8df228be53a8b152bce913be317a70bb48684ac177e0c2742fbd->leave($__internal_06a45fb4af2f8df228be53a8b152bce913be317a70bb48684ac177e0c2742fbd_prof);

        
        $__internal_36d278d026a9e687505511f538a7fff834afd77353b669b59999294120d50a4c->leave($__internal_36d278d026a9e687505511f538a7fff834afd77353b669b59999294120d50a4c_prof);

    }

    // line 19
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_c7d4508edcf585a346a0e88a09b084cad3c62cd3d8b6ea94788360e4edac7d82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7d4508edcf585a346a0e88a09b084cad3c62cd3d8b6ea94788360e4edac7d82->enter($__internal_c7d4508edcf585a346a0e88a09b084cad3c62cd3d8b6ea94788360e4edac7d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        $__internal_6d2e1ff6cce482c7bcd72669f1cfa798ac876531cbc3871e9c5cdb366e776c9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d2e1ff6cce482c7bcd72669f1cfa798ac876531cbc3871e9c5cdb366e776c9e->enter($__internal_6d2e1ff6cce482c7bcd72669f1cfa798ac876531cbc3871e9c5cdb366e776c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 20
        echo "
<div class=\"content\">
    <div class=\"container\" style =\"background:\t#E6E6FA;color: #404d5b;\">
\t<header class=\"codrops-header\">\t\t\t\t
            <h2>Nuovo Cliente</h2>\t\t\t\t
\t</header>
        
        <section class=\"content\">
             <form method=\"post\" action=\"riepilogo\">
            <h3>Inserisci</h3>\t\t\t
            <span class=\"input input--kaede\">
                <input class=\"input__field input__field--kaede\" type=\"text\"  input id=\"name\" name =\"nome\"  />
                <label class=\"input__label input__label--kaede\" for=\"name\">
                    <span class=\"input__label-content input__label-content--kaede\">Nome</span>
                </label>
            </span>
            <span class=\"input input--kaede\">
                <input class=\"input__field input__field--kaede\" type=\"text\"  input id=\"cognome\" name =\"cognome\" />
                <label class=\"input__label input__label--kaede\" for=\"cognome\">
                    <span class=\"input__label-content input__label-content--kaede\">Cognome</span>
                </label>
            </span>
            <span class=\"input input--kaede\">
                <input class=\"input__field input__field--kaede\" type=\"text\"  input id=\"via\" name =\"via\"  />
                <label class=\"input__label input__label--kaede\" for=\"via\">
                    <span class=\"input__label-content input__label-content--kaede\">Indirizzo</span>
                </label>
            </span>
            <span class=\"input input--kaede\">
                <input class=\"input__field input__field--kaede\" type=\"text\"  input id=\"indirizzo_citta\" name =\"citta\" />
                <label class=\"input__label input__label--kaede\" for=\"indirizzo_citta\">
                    <span class=\"input__label-content input__label-content--kaede\">Città</span>
                </label>
            </span>
            <span class=\"input input--kaede\">
                <input class=\"input__field input__field--kaede\" type=\"text\"  input id=\"indirizzo_cap\"  name =\"cap\"/>
                <label class=\"input__label input__label--kaede\" for=\"indirizzo_cap\">
                    <span class=\"input__label-content input__label-content--kaede\">Cap</span>
                </label>
            </span>
            <span class=\"input input--kaede\">
                <input class=\"input__field input__field--kaede\" type=\"text\"  input id=\"indirizzo_provincia\" name =\"numero\"/>
                <label class=\"input__label input__label--kaede\" for=\"indirizzo_provincia\">
                    <span class=\"input__label-content input__label-content--kaede\">Numero Civico</span>
                </label>
            </span>
            <span class=\"input input--kaede\">
                <input class=\"input__field input__field--kaede\" type=\"text\"  input id=\"mail\"  name =\"username\"/>
                <label class=\"input__label input__label--kaede\" for=\"mail\">
                    <span class=\"input__label-content input__label-content--kaede\">Telefono</span>
                </label>
            </span>
            </form>
        </section>
        <div class=\"box bg-3\">\t\t\t\t\t
            <button class=\"button button--nanuk button--border-thin button--round-s\">
                <a class=\"btn-flat primary\" href=\"\"> </a> 
                    <span>C</span><span>o</span><span>n</span><span>f</span><span>e</span><span>r</span><span>m</span><span>a</span>            
            </button>
        </div>
    </div>
</div><!-- /container -->

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
";
        
        $__internal_6d2e1ff6cce482c7bcd72669f1cfa798ac876531cbc3871e9c5cdb366e776c9e->leave($__internal_6d2e1ff6cce482c7bcd72669f1cfa798ac876531cbc3871e9c5cdb366e776c9e_prof);

        
        $__internal_c7d4508edcf585a346a0e88a09b084cad3c62cd3d8b6ea94788360e4edac7d82->leave($__internal_c7d4508edcf585a346a0e88a09b084cad3c62cd3d8b6ea94788360e4edac7d82_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Prinkino:nuovocliente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 20,  102 => 19,  90 => 14,  86 => 13,  82 => 12,  78 => 11,  74 => 10,  69 => 9,  60 => 8,  42 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"::base.html.twig\" %}

{% block title %}Inserimento Nuovo Cliente{% endblock %}



{% block stylesheets %}
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/normalize.css\")}}\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/component.css\")}}\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/buttons.css\")}}\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/set1.css\")}}\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/set2.css\")}}\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/demo.css\")}}\" />
{% endblock %}



{% block corpo %}

<div class=\"content\">
    <div class=\"container\" style =\"background:\t#E6E6FA;color: #404d5b;\">
\t<header class=\"codrops-header\">\t\t\t\t
            <h2>Nuovo Cliente</h2>\t\t\t\t
\t</header>
        
        <section class=\"content\">
             <form method=\"post\" action=\"riepilogo\">
            <h3>Inserisci</h3>\t\t\t
            <span class=\"input input--kaede\">
                <input class=\"input__field input__field--kaede\" type=\"text\"  input id=\"name\" name =\"nome\"  />
                <label class=\"input__label input__label--kaede\" for=\"name\">
                    <span class=\"input__label-content input__label-content--kaede\">Nome</span>
                </label>
            </span>
            <span class=\"input input--kaede\">
                <input class=\"input__field input__field--kaede\" type=\"text\"  input id=\"cognome\" name =\"cognome\" />
                <label class=\"input__label input__label--kaede\" for=\"cognome\">
                    <span class=\"input__label-content input__label-content--kaede\">Cognome</span>
                </label>
            </span>
            <span class=\"input input--kaede\">
                <input class=\"input__field input__field--kaede\" type=\"text\"  input id=\"via\" name =\"via\"  />
                <label class=\"input__label input__label--kaede\" for=\"via\">
                    <span class=\"input__label-content input__label-content--kaede\">Indirizzo</span>
                </label>
            </span>
            <span class=\"input input--kaede\">
                <input class=\"input__field input__field--kaede\" type=\"text\"  input id=\"indirizzo_citta\" name =\"citta\" />
                <label class=\"input__label input__label--kaede\" for=\"indirizzo_citta\">
                    <span class=\"input__label-content input__label-content--kaede\">Città</span>
                </label>
            </span>
            <span class=\"input input--kaede\">
                <input class=\"input__field input__field--kaede\" type=\"text\"  input id=\"indirizzo_cap\"  name =\"cap\"/>
                <label class=\"input__label input__label--kaede\" for=\"indirizzo_cap\">
                    <span class=\"input__label-content input__label-content--kaede\">Cap</span>
                </label>
            </span>
            <span class=\"input input--kaede\">
                <input class=\"input__field input__field--kaede\" type=\"text\"  input id=\"indirizzo_provincia\" name =\"numero\"/>
                <label class=\"input__label input__label--kaede\" for=\"indirizzo_provincia\">
                    <span class=\"input__label-content input__label-content--kaede\">Numero Civico</span>
                </label>
            </span>
            <span class=\"input input--kaede\">
                <input class=\"input__field input__field--kaede\" type=\"text\"  input id=\"mail\"  name =\"username\"/>
                <label class=\"input__label input__label--kaede\" for=\"mail\">
                    <span class=\"input__label-content input__label-content--kaede\">Telefono</span>
                </label>
            </span>
            </form>
        </section>
        <div class=\"box bg-3\">\t\t\t\t\t
            <button class=\"button button--nanuk button--border-thin button--round-s\">
                <a class=\"btn-flat primary\" href=\"\"> </a> 
                    <span>C</span><span>o</span><span>n</span><span>f</span><span>e</span><span>r</span><span>m</span><span>a</span>            
            </button>
        </div>
    </div>
</div><!-- /container -->

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
{% endblock %}", "AppBundle:Prinkino:nuovocliente.html.twig", "C:\\Users\\fabio\\Desktop\\Nuova cartella\\Inprint\\src\\AppBundle/Resources/views/Prinkino/nuovocliente.html.twig");
    }
}
