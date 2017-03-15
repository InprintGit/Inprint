<?php

/* AppBundle:Prinkino:cliente.html.twig */
class __TwigTemplate_9ba5e66be1701dc790fece42b80f4d8d550422ac9ce864d21c2c8bcada9fbe62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Prinkino:cliente.html.twig", 1);
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
        $__internal_707d62d5ebf51ab49081dbbc5b3a43e3b1c448a7baa36965253d76db5bc55670 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_707d62d5ebf51ab49081dbbc5b3a43e3b1c448a7baa36965253d76db5bc55670->enter($__internal_707d62d5ebf51ab49081dbbc5b3a43e3b1c448a7baa36965253d76db5bc55670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Prinkino:cliente.html.twig"));

        $__internal_7f2d43d293d56faab8d77fd4f0890008631d8f2645e1031b7552b04f381d89f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f2d43d293d56faab8d77fd4f0890008631d8f2645e1031b7552b04f381d89f9->enter($__internal_7f2d43d293d56faab8d77fd4f0890008631d8f2645e1031b7552b04f381d89f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Prinkino:cliente.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_707d62d5ebf51ab49081dbbc5b3a43e3b1c448a7baa36965253d76db5bc55670->leave($__internal_707d62d5ebf51ab49081dbbc5b3a43e3b1c448a7baa36965253d76db5bc55670_prof);

        
        $__internal_7f2d43d293d56faab8d77fd4f0890008631d8f2645e1031b7552b04f381d89f9->leave($__internal_7f2d43d293d56faab8d77fd4f0890008631d8f2645e1031b7552b04f381d89f9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ab4c182cd77a63f8fcde996bc42aa45cf48b67a3b6de99c506544f018518b89f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab4c182cd77a63f8fcde996bc42aa45cf48b67a3b6de99c506544f018518b89f->enter($__internal_ab4c182cd77a63f8fcde996bc42aa45cf48b67a3b6de99c506544f018518b89f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_58e21468bbf0fe44a18c187f5c146cf8dbc412d327da7634e13ac2ce6e2f5224 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58e21468bbf0fe44a18c187f5c146cf8dbc412d327da7634e13ac2ce6e2f5224->enter($__internal_58e21468bbf0fe44a18c187f5c146cf8dbc412d327da7634e13ac2ce6e2f5224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Analisi Cliente";
        
        $__internal_58e21468bbf0fe44a18c187f5c146cf8dbc412d327da7634e13ac2ce6e2f5224->leave($__internal_58e21468bbf0fe44a18c187f5c146cf8dbc412d327da7634e13ac2ce6e2f5224_prof);

        
        $__internal_ab4c182cd77a63f8fcde996bc42aa45cf48b67a3b6de99c506544f018518b89f->leave($__internal_ab4c182cd77a63f8fcde996bc42aa45cf48b67a3b6de99c506544f018518b89f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fc7919b3ebb5807d967924c9adfdad199d175dca364215243ec195e61172e083 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc7919b3ebb5807d967924c9adfdad199d175dca364215243ec195e61172e083->enter($__internal_fc7919b3ebb5807d967924c9adfdad199d175dca364215243ec195e61172e083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_afc236cab41521cacdec7decdbb8e5565b044608030cb543f3e642c099b2cd03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afc236cab41521cacdec7decdbb8e5565b044608030cb543f3e642c099b2cd03->enter($__internal_afc236cab41521cacdec7decdbb8e5565b044608030cb543f3e642c099b2cd03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/normalize.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/set1.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/buttons.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/demo.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/demo2.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/step.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/component.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/component2.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/ricerca.css"), "html", null, true);
        echo "\" />


 ";
        
        $__internal_afc236cab41521cacdec7decdbb8e5565b044608030cb543f3e642c099b2cd03->leave($__internal_afc236cab41521cacdec7decdbb8e5565b044608030cb543f3e642c099b2cd03_prof);

        
        $__internal_fc7919b3ebb5807d967924c9adfdad199d175dca364215243ec195e61172e083->leave($__internal_fc7919b3ebb5807d967924c9adfdad199d175dca364215243ec195e61172e083_prof);

    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6a1157f14db91d452a79b0f093717be30704bfb6402b3ef4be9c99820a1e77d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a1157f14db91d452a79b0f093717be30704bfb6402b3ef4be9c99820a1e77d2->enter($__internal_6a1157f14db91d452a79b0f093717be30704bfb6402b3ef4be9c99820a1e77d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e00606f1d73ce33a98dcd6762e93993dbee50fbb180e6670513f07e6260a9895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e00606f1d73ce33a98dcd6762e93993dbee50fbb180e6670513f07e6260a9895->enter($__internal_e00606f1d73ce33a98dcd6762e93993dbee50fbb180e6670513f07e6260a9895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 23
        echo "        <script src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/js/modernizr-custom.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/js/classie.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/js/uisearch.js"), "html", null, true);
        echo "></script>
";
        
        $__internal_e00606f1d73ce33a98dcd6762e93993dbee50fbb180e6670513f07e6260a9895->leave($__internal_e00606f1d73ce33a98dcd6762e93993dbee50fbb180e6670513f07e6260a9895_prof);

        
        $__internal_6a1157f14db91d452a79b0f093717be30704bfb6402b3ef4be9c99820a1e77d2->leave($__internal_6a1157f14db91d452a79b0f093717be30704bfb6402b3ef4be9c99820a1e77d2_prof);

    }

    // line 28
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_80cf5a3912dd1f2f21fc969e25ed1a48954ccc654385541796550a488f4c8678 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80cf5a3912dd1f2f21fc969e25ed1a48954ccc654385541796550a488f4c8678->enter($__internal_80cf5a3912dd1f2f21fc969e25ed1a48954ccc654385541796550a488f4c8678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        $__internal_3f1583802ae3b74a65ab7033caebb8a29759b33fdc34e1b1d8ca6a66b9654f46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f1583802ae3b74a65ab7033caebb8a29759b33fdc34e1b1d8ca6a66b9654f46->enter($__internal_3f1583802ae3b74a65ab7033caebb8a29759b33fdc34e1b1d8ca6a66b9654f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 29
        echo "
<div class=\"content\">
    <form id=\"msform\"> 
        <ul id=\"progressbar\">
            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 6));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            if (($context["i"] <= 6)) {
                // line 34
                echo "            <li class=\"active\"> fase ";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</li>
            ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 36
            echo "            <li> fase i </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </ul>    \t\t\t                   
    </form>   \t
    <div class=\"column\">
        <div id=\"sb-search\" class=\"sb-search\">
            <form>
                <input class=\"sb-search-input\" placeholder=\"Search\" type=\"text\" value=\"\" name=\"search\" id=\"search\">
                <input class=\"sb-search-submit\" type=\"submit\" value=\"\">
                <span class=\"sb-icon-search\"></span>
            </form>
        </div>
    </div>\t
    <div class=\"component2\">\t
        <h1>Analisi cliente</h1>\t\t
            <table>
                <thead>
                    <tr>
                        <th>Dati del cliente</th>\t\t\t\t\t\t\t
                    </tr>
                </thead>
                <thead>
                    <tr>
                        <th>Data di<br> nascita</br></th>
                        <th>Codice <br>cliente</br></th>
                        <th>Codice <br>fiscale</br> </th>
                        <th>Indirizzo </th>
                        <th>Città </th>
                        <th>Telefono </th>
                        <th>Mail </th>
                        <th>fax </th>

                    </tr>
                </thead>
                <tbody>\t\t\t\t\t\t\t
                        <tr>
                            <td class=\"user-datadinascita\">";
        // line 72
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "dataNascita", array()), "d-m-Y"), "html", null, true);
        echo "</td>
                            <td class=\"user-codicecliente\">";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "codicecliente", array()), "html", null, true);
        echo "</td>
                            <td class=\"user-codicefiscale\">";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "codiceFiscale", array()), "html", null, true);
        echo "</td>
                            <td class=\"user-indirizzo\">";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "via", array()), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "numeroCivico", array()), "html", null, true);
        echo "</td>
                            <td class=\"user-indirizzo\">";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "citta", array()), "html", null, true);
        echo "</td>
                            <td class=\"user-telefono\">";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "telefono", array()), "html", null, true);
        echo "</td>
                            <td class=\"user-telefono\">";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "mail", array()), "html", null, true);
        echo "</td>
                            <td class=\"user-telefono\">";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "fax", array()), "html", null, true);
        echo "</td>                                                           
                        </tr>\t\t\t\t\t\t\t
                </tbody>
            </table>
            <div class=\"box bg-3\">
                    <button class=\"button button--nanuk button--border-thin button--round-s\">
                            <span>A</span><span>g</span><span>g</span><span>i</span><span>u</span><span>n</span><span>g</span><span>i</span><span></span><span>O</span><span>r</span><span>d</span><span>i</span><span>n</span><span>e</span>
                    </button>
                    <button class=\"button button--nanuk button--border-thin button--round-s\">
                            <span>M</span><span>o</span><span>d</span><span>i</span><span>f</span><span>i</span><span>c</span><span>a</span><span></span><span>D</span><span>a</span><span>t</span><span>i</span>
                    </button>
            </div>
            <table>\t
                <thead>
                        <tr>\t\t\t\t\t\t\t
                                <th>Ordini effettuati</th>\t\t\t\t\t\t\t
                        </tr>
                </thead>
                <thead>
                    <tr>
                        <th>Data <br>ordine</br></th>
                        <th>Grafica<br></th>
                        <th>Stato <br></th>\t\t\t\t\t\t\t
                        <th>Codice <br>articolo</br></th>\t
                        <th>Codice <br>ordine</br></th>
                        <th>Studio <br>grafico</br></th>
                        <th>Sito di<br> produzione</br></th>
                        
                    </tr>
                </thead>
                <tbody>
                        ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ordini"]) ? $context["ordini"] : $this->getContext($context, "ordini")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 111
            echo "                    <tr>
                        <td class=\"user-data\">";
            // line 112
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "data", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                        <td class=\"user-email\"><a  href=";
            // line 113
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("immagine", array("idgrafica" => $this->getAttribute($context["item"], "idgrafica", array()), "idcliente" => (isset($context["idcliente"]) ? $context["idcliente"] : $this->getContext($context, "idcliente")))), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "idgrafica", array()), "html", null, true);
            echo "</a></td>
                        <td class=\"user-phone\">";
            // line 114
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "stato", array()), "html", null, true);
            echo "</td>
                        <td class=\"user-name\"><a  href=";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articolo2", array("idarticolo" => $this->getAttribute($context["item"], "articolo", array()), "idcliente" => (isset($context["idcliente"]) ? $context["idcliente"] : $this->getContext($context, "idcliente")))), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "articolo", array()), "html", null, true);
            echo "</a></td>
                        <td class=\"user-name\"><a  href=";
            // line 116
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ordine", array("idordine" => $this->getAttribute($context["item"], "codiceordine", array()))), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "codiceordine", array()), "html", null, true);
            echo "</a></td>
                        <td class=\"user-name\">";
            // line 117
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "studiografico", array()), "html", null, true);
            echo "</td>
                        <td class=\"user-name\">";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "sitoproduzione", array()), "html", null, true);
            echo "</td>
                    </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "                </tbody>
            </table>
    </div>                    \t\t\t\t
                    <script src=";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/js/main.js"), "html", null, true);
        echo "></script>\t\t\t
                    <script>
                    new UISearch( document.getElementById( 'sb-search' ) );
                    </script>
                    
                    
                    <script>
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
</div>
";
        
        $__internal_3f1583802ae3b74a65ab7033caebb8a29759b33fdc34e1b1d8ca6a66b9654f46->leave($__internal_3f1583802ae3b74a65ab7033caebb8a29759b33fdc34e1b1d8ca6a66b9654f46_prof);

        
        $__internal_80cf5a3912dd1f2f21fc969e25ed1a48954ccc654385541796550a488f4c8678->leave($__internal_80cf5a3912dd1f2f21fc969e25ed1a48954ccc654385541796550a488f4c8678_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Prinkino:cliente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 124,  332 => 121,  323 => 118,  319 => 117,  313 => 116,  307 => 115,  303 => 114,  297 => 113,  293 => 112,  290 => 111,  286 => 110,  252 => 79,  248 => 78,  244 => 77,  240 => 76,  234 => 75,  230 => 74,  226 => 73,  222 => 72,  186 => 38,  179 => 36,  170 => 34,  164 => 33,  158 => 29,  149 => 28,  137 => 25,  133 => 24,  128 => 23,  119 => 22,  105 => 16,  101 => 15,  97 => 14,  93 => 13,  89 => 12,  85 => 11,  81 => 10,  77 => 9,  73 => 8,  70 => 7,  61 => 6,  43 => 3,  11 => 1,);
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

{% block title %}Analisi Cliente{% endblock %}


    {% block stylesheets %}

<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/normalize.css\")}}\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/set1.css\")}}\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/buttons.css\")}}\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/demo.css\")}}\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/demo2.css\")}}\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/step.css\")}}\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/component.css\")}}\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/component2.css\")}}\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset(\"prinkino/style/ricerca.css\")}}\" />


 {% endblock %}
 
 
 {% block javascripts %}
        <script src={{asset(\"prinkino/js/modernizr-custom.js\")}}></script>
        <script src={{asset(\"prinkino/js/classie.js\")}}></script>
        <script src={{asset(\"prinkino/js/uisearch.js\")}}></script>
{% endblock %}

{% block corpo %}

<div class=\"content\">
    <form id=\"msform\"> 
        <ul id=\"progressbar\">
            {% for i in 1..6 if i<=6 %}
            <li class=\"active\"> fase {{ i }}</li>
            {% else %}
            <li> fase i </li>
            {% endfor %}
        </ul>    \t\t\t                   
    </form>   \t
    <div class=\"column\">
        <div id=\"sb-search\" class=\"sb-search\">
            <form>
                <input class=\"sb-search-input\" placeholder=\"Search\" type=\"text\" value=\"\" name=\"search\" id=\"search\">
                <input class=\"sb-search-submit\" type=\"submit\" value=\"\">
                <span class=\"sb-icon-search\"></span>
            </form>
        </div>
    </div>\t
    <div class=\"component2\">\t
        <h1>Analisi cliente</h1>\t\t
            <table>
                <thead>
                    <tr>
                        <th>Dati del cliente</th>\t\t\t\t\t\t\t
                    </tr>
                </thead>
                <thead>
                    <tr>
                        <th>Data di<br> nascita</br></th>
                        <th>Codice <br>cliente</br></th>
                        <th>Codice <br>fiscale</br> </th>
                        <th>Indirizzo </th>
                        <th>Città </th>
                        <th>Telefono </th>
                        <th>Mail </th>
                        <th>fax </th>

                    </tr>
                </thead>
                <tbody>\t\t\t\t\t\t\t
                        <tr>
                            <td class=\"user-datadinascita\">{{cliente.dataNascita|date('d-m-Y')}}</td>
                            <td class=\"user-codicecliente\">{{cliente.codicecliente}}</td>
                            <td class=\"user-codicefiscale\">{{cliente.codiceFiscale}}</td>
                            <td class=\"user-indirizzo\">{{cliente.via}},{{cliente.numeroCivico}}</td>
                            <td class=\"user-indirizzo\">{{cliente.citta}}</td>
                            <td class=\"user-telefono\">{{cliente.telefono}}</td>
                            <td class=\"user-telefono\">{{cliente.mail}}</td>
                            <td class=\"user-telefono\">{{cliente.fax}}</td>                                                           
                        </tr>\t\t\t\t\t\t\t
                </tbody>
            </table>
            <div class=\"box bg-3\">
                    <button class=\"button button--nanuk button--border-thin button--round-s\">
                            <span>A</span><span>g</span><span>g</span><span>i</span><span>u</span><span>n</span><span>g</span><span>i</span><span></span><span>O</span><span>r</span><span>d</span><span>i</span><span>n</span><span>e</span>
                    </button>
                    <button class=\"button button--nanuk button--border-thin button--round-s\">
                            <span>M</span><span>o</span><span>d</span><span>i</span><span>f</span><span>i</span><span>c</span><span>a</span><span></span><span>D</span><span>a</span><span>t</span><span>i</span>
                    </button>
            </div>
            <table>\t
                <thead>
                        <tr>\t\t\t\t\t\t\t
                                <th>Ordini effettuati</th>\t\t\t\t\t\t\t
                        </tr>
                </thead>
                <thead>
                    <tr>
                        <th>Data <br>ordine</br></th>
                        <th>Grafica<br></th>
                        <th>Stato <br></th>\t\t\t\t\t\t\t
                        <th>Codice <br>articolo</br></th>\t
                        <th>Codice <br>ordine</br></th>
                        <th>Studio <br>grafico</br></th>
                        <th>Sito di<br> produzione</br></th>
                        
                    </tr>
                </thead>
                <tbody>
                        {%for item in ordini%}
                    <tr>
                        <td class=\"user-data\">{{item.data|date('d-m-Y')}}</td>
                        <td class=\"user-email\"><a  href={{ path('immagine', {'idgrafica': item.idgrafica, 'idcliente': idcliente} )}}>{{item.idgrafica}}</a></td>
                        <td class=\"user-phone\">{{item.stato}}</td>
                        <td class=\"user-name\"><a  href={{ path('articolo2', {'idarticolo': item.articolo, 'idcliente': idcliente} )}}>{{item.articolo}}</a></td>
                        <td class=\"user-name\"><a  href={{path('ordine',{'idordine':item.codiceordine})}}>{{item.codiceordine}}</a></td>
                        <td class=\"user-name\">{{item.studiografico}}</td>
                        <td class=\"user-name\">{{item.sitoproduzione}}</td>
                    </tr>
                        {%endfor%}
                </tbody>
            </table>
    </div>                    \t\t\t\t
                    <script src={{asset(\"prinkino/js/main.js\")}}></script>\t\t\t
                    <script>
                    new UISearch( document.getElementById( 'sb-search' ) );
                    </script>
                    
                    
                    <script>
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
</div>
{% endblock %}", "AppBundle:Prinkino:cliente.html.twig", "C:\\Users\\fabio\\Desktop\\Nuova cartella\\Inprint\\src\\AppBundle/Resources/views/Prinkino/cliente.html.twig");
    }
}
