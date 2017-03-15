<?php

/* AppBundle:Prinkino:home.html.twig */
class __TwigTemplate_e3bcf09a0c955dd7e5f49410c1456b73dd983bc8cc044e8273b43712cbbee035 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Prinkino:home.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'corpo' => array($this, 'block_corpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c8341adb9de3b54b9410bf1e986aa078f20af7e6c4417501988927c3d846d09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c8341adb9de3b54b9410bf1e986aa078f20af7e6c4417501988927c3d846d09->enter($__internal_2c8341adb9de3b54b9410bf1e986aa078f20af7e6c4417501988927c3d846d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Prinkino:home.html.twig"));

        $__internal_6049324db2e7ccd8a51e68d69bce71c39e8f7eedcd607368158d539aca070ca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6049324db2e7ccd8a51e68d69bce71c39e8f7eedcd607368158d539aca070ca8->enter($__internal_6049324db2e7ccd8a51e68d69bce71c39e8f7eedcd607368158d539aca070ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Prinkino:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c8341adb9de3b54b9410bf1e986aa078f20af7e6c4417501988927c3d846d09->leave($__internal_2c8341adb9de3b54b9410bf1e986aa078f20af7e6c4417501988927c3d846d09_prof);

        
        $__internal_6049324db2e7ccd8a51e68d69bce71c39e8f7eedcd607368158d539aca070ca8->leave($__internal_6049324db2e7ccd8a51e68d69bce71c39e8f7eedcd607368158d539aca070ca8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f3d8eabcfeb421c03be4b4a58aa6afaf080dd7410f461dd8c44cb01ed66b3f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f3d8eabcfeb421c03be4b4a58aa6afaf080dd7410f461dd8c44cb01ed66b3f1->enter($__internal_0f3d8eabcfeb421c03be4b4a58aa6afaf080dd7410f461dd8c44cb01ed66b3f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_652f0a096f0f8d8e26dcf5fc55b5716c70c200a6b9b01cdec0c2f99f61c53e40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_652f0a096f0f8d8e26dcf5fc55b5716c70c200a6b9b01cdec0c2f99f61c53e40->enter($__internal_652f0a096f0f8d8e26dcf5fc55b5716c70c200a6b9b01cdec0c2f99f61c53e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Prinkino";
        
        $__internal_652f0a096f0f8d8e26dcf5fc55b5716c70c200a6b9b01cdec0c2f99f61c53e40->leave($__internal_652f0a096f0f8d8e26dcf5fc55b5716c70c200a6b9b01cdec0c2f99f61c53e40_prof);

        
        $__internal_0f3d8eabcfeb421c03be4b4a58aa6afaf080dd7410f461dd8c44cb01ed66b3f1->leave($__internal_0f3d8eabcfeb421c03be4b4a58aa6afaf080dd7410f461dd8c44cb01ed66b3f1_prof);

    }

    // line 7
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_ddf28d3fc193e021ee01a865f1f7f5fa476b572859bd773a049a9a750c40ffc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddf28d3fc193e021ee01a865f1f7f5fa476b572859bd773a049a9a750c40ffc4->enter($__internal_ddf28d3fc193e021ee01a865f1f7f5fa476b572859bd773a049a9a750c40ffc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        $__internal_9e168e8bc5bba8ddb2536a3530807a5cab667ead05624e4a6c2e7322bdb93519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e168e8bc5bba8ddb2536a3530807a5cab667ead05624e4a6c2e7322bdb93519->enter($__internal_9e168e8bc5bba8ddb2536a3530807a5cab667ead05624e4a6c2e7322bdb93519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 8
        echo "    
<div class=\"content\">
    <div id=\"sb-search\" class=\"sb-search\">
        <form>
            <input class=\"sb-search-input\" placeholder=\"Search\" type=\"text\" value=\"\" name=\"search\" id=\"search\">
            <input class=\"sb-search-submit\" type=\"submit\" value=\"\">
            <span class=\"sb-icon-search\"></span>
        </form>
    </div>
    
     <h2>Avanzamento Ordine</h2>
        <form id=\"msform\">             
            <ul id=\"progressbar\">
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 6));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            if (($context["i"] <= 6)) {
                // line 22
                echo "                <li class=\"active\"> fase ";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</li>
                ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 24
            echo "                <li> fase i </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            </ul>    \t\t\t                   
        </form>
            <div class=\"container\">               
                <table>
                 <thead>
                            <tr>
                                <th>Ordini in arrivo</th>\t\t
                            </tr>
                        </thead>                
                    
                        <thead>\t\t    \t\t\t
                            <tr>
                                <th>Cliente</th>
                                <th>Numero</th>
                                <th>Track Number </th>
                                <th>Data arrivo</th>
                                <th></th>
                            </tr>
                        </thead>
                            <tbody>
                                ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arrivo"]) ? $context["arrivo"] : $this->getContext($context, "arrivo")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 47
            echo "                                <tr class=\"first\">
                                    <td class=\"user-name\">";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "cliente", array()), "html", null, true);
            echo "</td>
                                    <td class=\"user-email\">";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numero", array()), "html", null, true);
            echo "</td>
                                    <td class=\"user-phone\"> ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "tracknumber", array()), "html", null, true);
            echo "</td>
                                    <td class=\"user-name\"><time datetime=\"";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "data", array()), "d-m-Y"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "data", array()), "d-m-Y"), "html", null, true);
            echo "</time></td>                                   
                                </tr>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    \t
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                            </tbody>
                    </table>
\t<!--    </div>  da vedere questo div-->
            <section class=\"t5\">
                <table class=\"table\" table-hover>
                        <thead>
                            <tr>
                                <th>Ordini sospesi</th>\t\t
                            </tr>
                        </thead>
                         <thead>
                            <tr>
                                <th>Cliente</th>
                                <th></th>
                                <th>Stato</th>
                                <th></th>
                            <tr>
                        </thead>
                        <tbody>
                            <tr class=\"first\">
                            ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sospeso"]) ? $context["sospeso"] : $this->getContext($context, "sospeso")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 75
            echo "                            <td> <a href=";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visualizza", array("idsospeso" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "cliente", array()), "html", null, true);
            echo "</a><td>
                            <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "stato", array()), "html", null, true);
            echo "</td>
                            <td><progress id=\"mioLoader\" max=\"5\" value=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "stato", array()), "html", null, true);
            echo "\"><span>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "stato", array()), "html", null, true);
            echo "</span>%</progress></td>                          
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                        </tbody>\t
                </table>
            </section>
        </div>
                        
    </div>
                       
    <!-- /view -->
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

\t
\t\t<script>
\t\t\tnew UISearch( document.getElementById( 'sb-search' ) );
\t\t</script>
                




\t\t
<!--Inserire le funiozni e gli script-->
";
        
        $__internal_9e168e8bc5bba8ddb2536a3530807a5cab667ead05624e4a6c2e7322bdb93519->leave($__internal_9e168e8bc5bba8ddb2536a3530807a5cab667ead05624e4a6c2e7322bdb93519_prof);

        
        $__internal_ddf28d3fc193e021ee01a865f1f7f5fa476b572859bd773a049a9a750c40ffc4->leave($__internal_ddf28d3fc193e021ee01a865f1f7f5fa476b572859bd773a049a9a750c40ffc4_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Prinkino:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 80,  194 => 77,  190 => 76,  183 => 75,  179 => 74,  157 => 54,  146 => 51,  142 => 50,  138 => 49,  134 => 48,  131 => 47,  127 => 46,  105 => 26,  98 => 24,  89 => 22,  83 => 21,  68 => 8,  59 => 7,  41 => 3,  11 => 1,);
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

{% block title %}Prinkino{% endblock %}



{% block corpo %}
    
<div class=\"content\">
    <div id=\"sb-search\" class=\"sb-search\">
        <form>
            <input class=\"sb-search-input\" placeholder=\"Search\" type=\"text\" value=\"\" name=\"search\" id=\"search\">
            <input class=\"sb-search-submit\" type=\"submit\" value=\"\">
            <span class=\"sb-icon-search\"></span>
        </form>
    </div>
    
     <h2>Avanzamento Ordine</h2>
        <form id=\"msform\">             
            <ul id=\"progressbar\">
                {% for i in 1..6 if i<=6 %}
                <li class=\"active\"> fase {{ i }}</li>
                {% else %}
                <li> fase i </li>
                {% endfor %}
            </ul>    \t\t\t                   
        </form>
            <div class=\"container\">               
                <table>
                 <thead>
                            <tr>
                                <th>Ordini in arrivo</th>\t\t
                            </tr>
                        </thead>                
                    
                        <thead>\t\t    \t\t\t
                            <tr>
                                <th>Cliente</th>
                                <th>Numero</th>
                                <th>Track Number </th>
                                <th>Data arrivo</th>
                                <th></th>
                            </tr>
                        </thead>
                            <tbody>
                                {%for item in arrivo%}
                                <tr class=\"first\">
                                    <td class=\"user-name\">{{item.cliente}}</td>
                                    <td class=\"user-email\">{{item.numero}}</td>
                                    <td class=\"user-phone\"> {{item.tracknumber}}</td>
                                    <td class=\"user-name\"><time datetime=\"{{item.data|date('d-m-Y')}}\">{{item.data|date('d-m-Y')}}</time></td>                                   
                                </tr>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t    \t
                                    {%endfor%}
                            </tbody>
                    </table>
\t<!--    </div>  da vedere questo div-->
            <section class=\"t5\">
                <table class=\"table\" table-hover>
                        <thead>
                            <tr>
                                <th>Ordini sospesi</th>\t\t
                            </tr>
                        </thead>
                         <thead>
                            <tr>
                                <th>Cliente</th>
                                <th></th>
                                <th>Stato</th>
                                <th></th>
                            <tr>
                        </thead>
                        <tbody>
                            <tr class=\"first\">
                            {%for item in sospeso%}
                            <td> <a href={{ path('visualizza', {'idsospeso': item.id})}}>{{item.cliente}}</a><td>
                            <td>{{item.stato}}</td>
                            <td><progress id=\"mioLoader\" max=\"5\" value=\"{{item.stato}}\"><span>{{item.stato}}</span>%</progress></td>                          
                            </tr>
                            {%endfor%}
                        </tbody>\t
                </table>
            </section>
        </div>
                        
    </div>
                       
    <!-- /view -->
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

\t
\t\t<script>
\t\t\tnew UISearch( document.getElementById( 'sb-search' ) );
\t\t</script>
                




\t\t
<!--Inserire le funiozni e gli script-->
{% endblock %}", "AppBundle:Prinkino:home.html.twig", "C:\\Users\\fabio\\Desktop\\Nuova cartella\\Inprint\\src\\AppBundle/Resources/views/Prinkino/home.html.twig");
    }
}
