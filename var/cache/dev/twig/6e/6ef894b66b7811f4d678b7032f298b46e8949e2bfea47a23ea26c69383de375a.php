<?php

/* AppBundle:Prinkino:ordine.html.twig */
class __TwigTemplate_09242a12c29ce66751267b02f063f0898c410a36ea5f18cf24e4e788a10d16a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Prinkino:ordine.html.twig", 1);
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
        $__internal_7013de8b317a73577605e0c63cc190020525545ea2335fd59543d105da1f9ddc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7013de8b317a73577605e0c63cc190020525545ea2335fd59543d105da1f9ddc->enter($__internal_7013de8b317a73577605e0c63cc190020525545ea2335fd59543d105da1f9ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Prinkino:ordine.html.twig"));

        $__internal_b035e30b7e6ea529f9a8fc474a3a718cc1f741ad5c2b86a616b20b32ff2db44e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b035e30b7e6ea529f9a8fc474a3a718cc1f741ad5c2b86a616b20b32ff2db44e->enter($__internal_b035e30b7e6ea529f9a8fc474a3a718cc1f741ad5c2b86a616b20b32ff2db44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Prinkino:ordine.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7013de8b317a73577605e0c63cc190020525545ea2335fd59543d105da1f9ddc->leave($__internal_7013de8b317a73577605e0c63cc190020525545ea2335fd59543d105da1f9ddc_prof);

        
        $__internal_b035e30b7e6ea529f9a8fc474a3a718cc1f741ad5c2b86a616b20b32ff2db44e->leave($__internal_b035e30b7e6ea529f9a8fc474a3a718cc1f741ad5c2b86a616b20b32ff2db44e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6ed094b1e372c8afb67026ebeb834c532bae3a19d892a03f22bdf2168e18e97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6ed094b1e372c8afb67026ebeb834c532bae3a19d892a03f22bdf2168e18e97->enter($__internal_f6ed094b1e372c8afb67026ebeb834c532bae3a19d892a03f22bdf2168e18e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4de219f50c759b33a843768ce5216151b8eaeb55fd7b43d5e8afc25da11d5023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4de219f50c759b33a843768ce5216151b8eaeb55fd7b43d5e8afc25da11d5023->enter($__internal_4de219f50c759b33a843768ce5216151b8eaeb55fd7b43d5e8afc25da11d5023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Dettagli ordine";
        
        $__internal_4de219f50c759b33a843768ce5216151b8eaeb55fd7b43d5e8afc25da11d5023->leave($__internal_4de219f50c759b33a843768ce5216151b8eaeb55fd7b43d5e8afc25da11d5023_prof);

        
        $__internal_f6ed094b1e372c8afb67026ebeb834c532bae3a19d892a03f22bdf2168e18e97->leave($__internal_f6ed094b1e372c8afb67026ebeb834c532bae3a19d892a03f22bdf2168e18e97_prof);

    }

    // line 5
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_22c47162e001057799cc843c2dd8b63a2da414c34da13b3d374f8723f8a326f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22c47162e001057799cc843c2dd8b63a2da414c34da13b3d374f8723f8a326f9->enter($__internal_22c47162e001057799cc843c2dd8b63a2da414c34da13b3d374f8723f8a326f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        $__internal_3feba55debd086cf9d21a236efd8298b112f02ca1c67d36e8cb96bb7e269114f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3feba55debd086cf9d21a236efd8298b112f02ca1c67d36e8cb96bb7e269114f->enter($__internal_3feba55debd086cf9d21a236efd8298b112f02ca1c67d36e8cb96bb7e269114f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 6
        echo "
<div class=\"content\">    
    <div class=\"component2\">
         <form id=\"msform\"> 
            <ul id=\"progressbar\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 6));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            if (($context["i"] <= 6)) {
                // line 12
                echo "                <li class=\"active\"> fase ";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</li>
                ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 14
            echo "                <li> fase i </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "            </ul>    \t\t\t                   
        </form>            
        <h2>Dettagli ordine</span></h2>\t
         ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ordine"]) ? $context["ordine"] : $this->getContext($context, "ordine")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 20
            echo "            <h3 style=\"font-weight: 300; margin-top:10px;\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "codiceordine", array()), "html", null, true);
            echo "- ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nome", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "cognome", array()), "html", null, true);
            echo "</h3>
            <table>\t\t\t\t
                <thead>\t\t\t\t\t\t
                        <tr>
                                <th>Data <br>ordine</br></th>
                                <th>Grafica</th>
                                <th>Stato </th>\t\t\t\t\t\t\t
                                <th>Articolo</th>
                                <th>Quantità</th>
                                <th>Studio<br>grafico<br></th>
                                <th>Sito di <br>produzione<br></th>
                                <th>Importo</th>
                        </tr>\t
                </thead>
                <tbody>
                    <tr>
                            <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "data", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                            <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("immagine", array("idgrafica" => $this->getAttribute($context["item"], "idgrafica", array()), "idcliente" => $this->getAttribute($context["item"], "idcliente", array()))), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "idgrafica", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "stato", array()), "html", null, true);
            echo "</td>
                            <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articolo2", array("idarticolo" => $this->getAttribute($context["item"], "articolo", array()), "idcliente" => $this->getAttribute($context["item"], "idcliente", array()))), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "articolo", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quantita", array()), "html", null, true);
            echo "</td>
                            <td> ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "studiografico", array()), "html", null, true);
            echo "</td>
                            <td><span >";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "sitoproduzione", array()), "html", null, true);
            echo "</span></td>
                            <td> ";
            // line 43
            $context["prezzot"] = (($this->getAttribute($context["item"], "quantita", array()) * $this->getAttribute($context["item"], "prezzo", array())) - $this->getAttribute($context["item"], "sconto", array()));
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["prezzot"]) ? $context["prezzot"] : $this->getContext($context, "prezzot")), "html", null, true);
            echo "</td>
                    </tr>
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                </tbody>
            </table>           
            <table>\t
                <thead>
                        <tr>\t\t\t\t\t\t\t
                                <th>Eventi ordine</th>\t\t\t\t\t\t\t
                        </tr>
                </thead>
                <thead>

                        <tr>
                                <th>Data</th>
                                <th>Ora</th>
                                <th>Tipo </th>\t\t\t\t\t\t\t
                                <th>Descrizione</th>
                        </tr>
                </thead>
                <tbody>
                      ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eventi"]) ? $context["eventi"] : $this->getContext($context, "eventi")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo " 
                    <tr style=\"font-size:14px; cursor:pointer; \">
                        <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "data", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                        <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "data", array()), "H:i:s"), "html", null, true);
            echo "</td>
                        <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nome", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "Descrizione", array()), "html", null, true);
            echo "</td>
                     </tr>\t
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "\t
                </tbody>
            </table>    
                 <div class=\"box bg-3\">
                    <button class=\"button button--nanuk button--border-thin button--round-s\">
                            <span>R</span><span>i</span><span>p</span><span>e</span><span>t</span><span>i</span><span>O</span><span>r</span><span>d</span><span>i</span><span>n</span><span>e</span>
                    </button>
                    <button class=\"button button--nanuk button--border-thin button--round-s\">
                    <span>M</span><span>o</span><span>d</span><span>i</span><span>f</span><span>i</span><span>c</span><span>a</span><span>O</span><span>r</span><span>d</span><span>i</span><span>n</span><span>e</span>
                    </button>
                     <script src=";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/js/classie.js"), "html", null, true);
        echo "></script>
                    <script src=";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/js/uisearch.js"), "html", null, true);
        echo "></script>
                   
            </div>
    </div>
               
</div>
<script src=";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/js/main.js"), "html", null, true);
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
";
        
        $__internal_3feba55debd086cf9d21a236efd8298b112f02ca1c67d36e8cb96bb7e269114f->leave($__internal_3feba55debd086cf9d21a236efd8298b112f02ca1c67d36e8cb96bb7e269114f_prof);

        
        $__internal_22c47162e001057799cc843c2dd8b63a2da414c34da13b3d374f8723f8a326f9->leave($__internal_22c47162e001057799cc843c2dd8b63a2da414c34da13b3d374f8723f8a326f9_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Prinkino:ordine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 88,  237 => 82,  233 => 81,  221 => 71,  212 => 69,  208 => 68,  204 => 67,  200 => 66,  193 => 64,  173 => 46,  162 => 43,  158 => 42,  154 => 41,  150 => 40,  144 => 39,  140 => 38,  134 => 37,  130 => 36,  106 => 20,  102 => 19,  97 => 16,  90 => 14,  81 => 12,  75 => 11,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}Dettagli ordine{% endblock %}

{% block corpo %}

<div class=\"content\">    
    <div class=\"component2\">
         <form id=\"msform\"> 
            <ul id=\"progressbar\">
                {% for i in 1..6 if i<=6 %}
                <li class=\"active\"> fase {{ i }}</li>
                {% else %}
                <li> fase i </li>
                {% endfor %}
            </ul>    \t\t\t                   
        </form>            
        <h2>Dettagli ordine</span></h2>\t
         {%for item in ordine%}
            <h3 style=\"font-weight: 300; margin-top:10px;\">{{item.codiceordine}}- {{item.nome}} {{item.cognome}}</h3>
            <table>\t\t\t\t
                <thead>\t\t\t\t\t\t
                        <tr>
                                <th>Data <br>ordine</br></th>
                                <th>Grafica</th>
                                <th>Stato </th>\t\t\t\t\t\t\t
                                <th>Articolo</th>
                                <th>Quantità</th>
                                <th>Studio<br>grafico<br></th>
                                <th>Sito di <br>produzione<br></th>
                                <th>Importo</th>
                        </tr>\t
                </thead>
                <tbody>
                    <tr>
                            <td>{{item.data|date('d-m-Y')}}</td>
                            <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href={{ path('immagine', {'idgrafica': item.idgrafica, 'idcliente': item.idcliente} )}}>{{item.idgrafica}}</a></td>
                            <td>{{item.stato}}</td>
                            <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href={{ path('articolo2', {'idarticolo': item.articolo, 'idcliente': item.idcliente} )}}>{{item.articolo}}</a></td>
                            <td>{{item.quantita}}</td>
                            <td> {{item.studiografico}}</td>
                            <td><span >{{item.sitoproduzione}}</span></td>
                            <td> {% set prezzot=item.quantita*item.prezzo-item.sconto%} {{ prezzot }}</td>
                    </tr>
                     {%endfor%}
                </tbody>
            </table>           
            <table>\t
                <thead>
                        <tr>\t\t\t\t\t\t\t
                                <th>Eventi ordine</th>\t\t\t\t\t\t\t
                        </tr>
                </thead>
                <thead>

                        <tr>
                                <th>Data</th>
                                <th>Ora</th>
                                <th>Tipo </th>\t\t\t\t\t\t\t
                                <th>Descrizione</th>
                        </tr>
                </thead>
                <tbody>
                      {%for item in eventi %} 
                    <tr style=\"font-size:14px; cursor:pointer; \">
                        <td>{{item.data|date('d-m-Y')}}</td>
                        <td>{{item.data|date('H:i:s')}}</td>
                        <td>{{item.nome}}</td>
                        <td>{{item.Descrizione}}</td>
                     </tr>\t
                        {%endfor%}\t
                </tbody>
            </table>    
                 <div class=\"box bg-3\">
                    <button class=\"button button--nanuk button--border-thin button--round-s\">
                            <span>R</span><span>i</span><span>p</span><span>e</span><span>t</span><span>i</span><span>O</span><span>r</span><span>d</span><span>i</span><span>n</span><span>e</span>
                    </button>
                    <button class=\"button button--nanuk button--border-thin button--round-s\">
                    <span>M</span><span>o</span><span>d</span><span>i</span><span>f</span><span>i</span><span>c</span><span>a</span><span>O</span><span>r</span><span>d</span><span>i</span><span>n</span><span>e</span>
                    </button>
                     <script src={{asset(\"prinkino/js/classie.js\")}}></script>
                    <script src={{asset(\"prinkino/js/uisearch.js\")}}></script>
                   
            </div>
    </div>
               
</div>
<script src={{asset(\"prinkino/js/main.js\")}}></script>
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
{% endblock %}", "AppBundle:Prinkino:ordine.html.twig", "C:\\Users\\fabio\\Desktop\\Nuova cartella\\Inprint\\src\\AppBundle/Resources/views/Prinkino/ordine.html.twig");
    }
}
