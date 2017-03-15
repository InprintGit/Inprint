<?php

/* AppBundle:Prinkino:clienti.html.twig */
class __TwigTemplate_4dd7049c04d2a48946221dcd9b653759a7139af10d066f36fe5845388af8b57c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Prinkino:clienti.html.twig", 1);
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
        $__internal_8fcbfb3d67a156465158417ef2eb1ffd9c90afcae4209dc32ec8213c2bd59bb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fcbfb3d67a156465158417ef2eb1ffd9c90afcae4209dc32ec8213c2bd59bb7->enter($__internal_8fcbfb3d67a156465158417ef2eb1ffd9c90afcae4209dc32ec8213c2bd59bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Prinkino:clienti.html.twig"));

        $__internal_ae88912ec8cc9ae734565146b94a70fdb029a97587bee6b9d4f7f9a325cc1de9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae88912ec8cc9ae734565146b94a70fdb029a97587bee6b9d4f7f9a325cc1de9->enter($__internal_ae88912ec8cc9ae734565146b94a70fdb029a97587bee6b9d4f7f9a325cc1de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Prinkino:clienti.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fcbfb3d67a156465158417ef2eb1ffd9c90afcae4209dc32ec8213c2bd59bb7->leave($__internal_8fcbfb3d67a156465158417ef2eb1ffd9c90afcae4209dc32ec8213c2bd59bb7_prof);

        
        $__internal_ae88912ec8cc9ae734565146b94a70fdb029a97587bee6b9d4f7f9a325cc1de9->leave($__internal_ae88912ec8cc9ae734565146b94a70fdb029a97587bee6b9d4f7f9a325cc1de9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf55fc2512f6278862218e90f731e585fd6c2f7acd791860d1fdd661f130f0a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf55fc2512f6278862218e90f731e585fd6c2f7acd791860d1fdd661f130f0a3->enter($__internal_bf55fc2512f6278862218e90f731e585fd6c2f7acd791860d1fdd661f130f0a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ec8086682a407a9a05b406857a53230d0c79a985fcb1b8252bc89aaf2ac4028f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec8086682a407a9a05b406857a53230d0c79a985fcb1b8252bc89aaf2ac4028f->enter($__internal_ec8086682a407a9a05b406857a53230d0c79a985fcb1b8252bc89aaf2ac4028f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Clienti";
        
        $__internal_ec8086682a407a9a05b406857a53230d0c79a985fcb1b8252bc89aaf2ac4028f->leave($__internal_ec8086682a407a9a05b406857a53230d0c79a985fcb1b8252bc89aaf2ac4028f_prof);

        
        $__internal_bf55fc2512f6278862218e90f731e585fd6c2f7acd791860d1fdd661f130f0a3->leave($__internal_bf55fc2512f6278862218e90f731e585fd6c2f7acd791860d1fdd661f130f0a3_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f2e1b1119e601ecdb6488743b675cc64fd02a9c2068f5af1c1e64fb68ef87e47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2e1b1119e601ecdb6488743b675cc64fd02a9c2068f5af1c1e64fb68ef87e47->enter($__internal_f2e1b1119e601ecdb6488743b675cc64fd02a9c2068f5af1c1e64fb68ef87e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fa9bd0c5897c9abedcf911b31e8ce214dfc170eead4d47546ebe504a94d13a42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa9bd0c5897c9abedcf911b31e8ce214dfc170eead4d47546ebe504a94d13a42->enter($__internal_fa9bd0c5897c9abedcf911b31e8ce214dfc170eead4d47546ebe504a94d13a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_fa9bd0c5897c9abedcf911b31e8ce214dfc170eead4d47546ebe504a94d13a42->leave($__internal_fa9bd0c5897c9abedcf911b31e8ce214dfc170eead4d47546ebe504a94d13a42_prof);

        
        $__internal_f2e1b1119e601ecdb6488743b675cc64fd02a9c2068f5af1c1e64fb68ef87e47->leave($__internal_f2e1b1119e601ecdb6488743b675cc64fd02a9c2068f5af1c1e64fb68ef87e47_prof);

    }

    // line 19
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_f9218d98efb37a161e610023ebbd68124e73bf610ffbf887d4291b4345eb66ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9218d98efb37a161e610023ebbd68124e73bf610ffbf887d4291b4345eb66ba->enter($__internal_f9218d98efb37a161e610023ebbd68124e73bf610ffbf887d4291b4345eb66ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        $__internal_aa36148affde8eaf03267cb8c9c6f311ad6516a61b427a140bad756f1c96105c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa36148affde8eaf03267cb8c9c6f311ad6516a61b427a140bad756f1c96105c->enter($__internal_aa36148affde8eaf03267cb8c9c6f311ad6516a61b427a140bad756f1c96105c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

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
   \t
    <div class=\"column\">       
       
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
    \t\t
    <div class=\"component2\"> 
        <h2>Rubrica clienti</h2>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Codice cliente</th>
                    <th>Codice fiscale </th>
                    <th>Mail</th>
                    <th><th>
                    <!--        <th>Ordini effettuati</th> -->\t
                    \t\t\t\t\t\t\t
                </tr>
            </thead>
            <tbody>
                     ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clienti"]) ? $context["clienti"] : $this->getContext($context, "clienti")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 62
            echo "                <tr>
                    <td class=\"user-nome\">";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nome", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "cognome", array()), "html", null, true);
            echo "</td>
                    <td class=\"user-codicecliente\">";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "codicecliente", array()), "html", null, true);
            echo "</td>
                    <td class=\"user-codicefiscale\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "codiceFiscale", array()), "html", null, true);
            echo "</td>
                    <td class=\"user-mail\">";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "mail", array()), "html", null, true);
            echo "</td> 
                    <td> <a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cliente", array("idcliente" => $this->getAttribute($context["item"], "codicecliente", array()))), "html", null, true);
            echo "><i class=\"icon-zoom-in\"></i> Analizza</a><td>
                   
                </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "            </tbody>
        </table>
              <button></button>
                <a href=\"nuovocliente\" class=\"button button--nanuk button--border-thin button--round-s\"><span>N</span><span>u</span><span>o</span><span>v</span><span>o</span><span>C</span><span>l</span><span>i</span><span>e</span><span>n</span><span>t</span><span>e</span></a>         
              
    </div
</div>
             <script src=";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/js/classie.js"), "html", null, true);
        echo "></script>
             <script src=";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/js/uisearch.js"), "html", null, true);
        echo "></script>
              <script src=";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/js/dummydata.js"), "html", null, true);
        echo "></script>
               <script src=";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/js/main.js"), "html", null, true);
        echo "></script>
\t\t
\t\t<script>
\t\t\tnew UISearch( document.getElementById( 'sb-search' ) );
\t\t</script>
                
\t
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
        
        $__internal_aa36148affde8eaf03267cb8c9c6f311ad6516a61b427a140bad756f1c96105c->leave($__internal_aa36148affde8eaf03267cb8c9c6f311ad6516a61b427a140bad756f1c96105c_prof);

        
        $__internal_f9218d98efb37a161e610023ebbd68124e73bf610ffbf887d4291b4345eb66ba->leave($__internal_f9218d98efb37a161e610023ebbd68124e73bf610ffbf887d4291b4345eb66ba_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Prinkino:clienti.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 81,  239 => 80,  235 => 79,  231 => 78,  222 => 71,  212 => 67,  208 => 66,  204 => 65,  200 => 64,  195 => 63,  192 => 62,  188 => 61,  154 => 29,  147 => 27,  138 => 25,  132 => 24,  126 => 20,  117 => 19,  104 => 15,  100 => 14,  96 => 13,  92 => 12,  88 => 11,  84 => 10,  80 => 9,  76 => 8,  72 => 7,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
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

{% block title %}Clienti{% endblock %}

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
   \t
    <div class=\"column\">       
       
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
    \t\t
    <div class=\"component2\"> 
        <h2>Rubrica clienti</h2>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Codice cliente</th>
                    <th>Codice fiscale </th>
                    <th>Mail</th>
                    <th><th>
                    <!--        <th>Ordini effettuati</th> -->\t
                    \t\t\t\t\t\t\t
                </tr>
            </thead>
            <tbody>
                     {%for item in clienti%}
                <tr>
                    <td class=\"user-nome\">{{item.nome}}{{item.cognome}}</td>
                    <td class=\"user-codicecliente\">{{item.codicecliente}}</td>
                    <td class=\"user-codicefiscale\">{{item.codiceFiscale}}</td>
                    <td class=\"user-mail\">{{item.mail}}</td> 
                    <td> <a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href={{ path('cliente', {'idcliente': item.codicecliente})}}><i class=\"icon-zoom-in\"></i> Analizza</a><td>
                   
                </tr>
                        {%endfor%}
            </tbody>
        </table>
              <button></button>
                <a href=\"nuovocliente\" class=\"button button--nanuk button--border-thin button--round-s\"><span>N</span><span>u</span><span>o</span><span>v</span><span>o</span><span>C</span><span>l</span><span>i</span><span>e</span><span>n</span><span>t</span><span>e</span></a>         
              
    </div
</div>
             <script src={{asset(\"prinkino/js/classie.js\")}}></script>
             <script src={{asset(\"prinkino/js/uisearch.js\")}}></script>
              <script src={{asset(\"prinkino/js/dummydata.js\")}}></script>
               <script src={{asset(\"prinkino/js/main.js\")}}></script>
\t\t
\t\t<script>
\t\t\tnew UISearch( document.getElementById( 'sb-search' ) );
\t\t</script>
                
\t
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
                
                
 {% endblock %}

", "AppBundle:Prinkino:clienti.html.twig", "C:\\Users\\fabio\\Desktop\\Nuova cartella\\Inprint\\src\\AppBundle/Resources/views/Prinkino/clienti.html.twig");
    }
}
