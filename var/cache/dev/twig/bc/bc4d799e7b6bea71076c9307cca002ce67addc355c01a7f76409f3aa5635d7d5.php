<?php

/* ::base.html.twig */
class __TwigTemplate_3ea59ae5df692ebf5ad296f987e9a2f56f8e14ea50d3bb5fece9bed50b91a10a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'aside' => array($this, 'block_aside'),
            'corpo' => array($this, 'block_corpo'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35b8b36b0ff3379022f0192b5164ae11028c051f15128fd6fed63389a31a03d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35b8b36b0ff3379022f0192b5164ae11028c051f15128fd6fed63389a31a03d1->enter($__internal_35b8b36b0ff3379022f0192b5164ae11028c051f15128fd6fed63389a31a03d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_7175cb8b27155eb84535a62ddee0d38232f27330544b6d2534ff3a3080b65885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7175cb8b27155eb84535a62ddee0d38232f27330544b6d2534ff3a3080b65885->enter($__internal_7175cb8b27155eb84535a62ddee0d38232f27330544b6d2534ff3a3080b65885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" class=\"no-js\">

<head>   
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "        
    ";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
        echo "  
</head>
    <body>
        <div class=\"container\">
            ";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 129
        echo "         ";
        $this->displayBlock('corpo', $context, $blocks);
        // line 131
        echo "        </body>
    </div>
</html>



\t\t
            ";
        
        $__internal_35b8b36b0ff3379022f0192b5164ae11028c051f15128fd6fed63389a31a03d1->leave($__internal_35b8b36b0ff3379022f0192b5164ae11028c051f15128fd6fed63389a31a03d1_prof);

        
        $__internal_7175cb8b27155eb84535a62ddee0d38232f27330544b6d2534ff3a3080b65885->leave($__internal_7175cb8b27155eb84535a62ddee0d38232f27330544b6d2534ff3a3080b65885_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9581e4a3a0055a85c27c2a7cf6bbd9dc1b3475b93865679fd03c1ebc4acd68f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9581e4a3a0055a85c27c2a7cf6bbd9dc1b3475b93865679fd03c1ebc4acd68f7->enter($__internal_9581e4a3a0055a85c27c2a7cf6bbd9dc1b3475b93865679fd03c1ebc4acd68f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cb104fde329dd2dfeaf8e5ac1473a5f8f37e86b9a41749d04e7efd2db56ecfbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb104fde329dd2dfeaf8e5ac1473a5f8f37e86b9a41749d04e7efd2db56ecfbc->enter($__internal_cb104fde329dd2dfeaf8e5ac1473a5f8f37e86b9a41749d04e7efd2db56ecfbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Prinkino";
        
        $__internal_cb104fde329dd2dfeaf8e5ac1473a5f8f37e86b9a41749d04e7efd2db56ecfbc->leave($__internal_cb104fde329dd2dfeaf8e5ac1473a5f8f37e86b9a41749d04e7efd2db56ecfbc_prof);

        
        $__internal_9581e4a3a0055a85c27c2a7cf6bbd9dc1b3475b93865679fd03c1ebc4acd68f7->leave($__internal_9581e4a3a0055a85c27c2a7cf6bbd9dc1b3475b93865679fd03c1ebc4acd68f7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b845c714516c835e8abc9d99c80468bc05211fa7a9ab7e1294f8241539323083 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b845c714516c835e8abc9d99c80468bc05211fa7a9ab7e1294f8241539323083->enter($__internal_b845c714516c835e8abc9d99c80468bc05211fa7a9ab7e1294f8241539323083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_eefc99b1004038a926e6908300e3a24e2b18252fbcbe011db4e77df63c3a7151 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eefc99b1004038a926e6908300e3a24e2b18252fbcbe011db4e77df63c3a7151->enter($__internal_eefc99b1004038a926e6908300e3a24e2b18252fbcbe011db4e77df63c3a7151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/normalize.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/set1.css"), "html", null, true);
        echo "\" />
         <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/set2.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/buttons.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/component.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/component2.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/demo.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/demo2.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/step.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/ricerca.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/cs-select.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/cs-skin-boxes.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/cs-skin-underline.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/organicfoodicons.css"), "html", null, true);
        echo "\" />
        <link rel=\"shortcut icon\" href=\"favicon.ico\">
    ";
        
        $__internal_eefc99b1004038a926e6908300e3a24e2b18252fbcbe011db4e77df63c3a7151->leave($__internal_eefc99b1004038a926e6908300e3a24e2b18252fbcbe011db4e77df63c3a7151_prof);

        
        $__internal_b845c714516c835e8abc9d99c80468bc05211fa7a9ab7e1294f8241539323083->leave($__internal_b845c714516c835e8abc9d99c80468bc05211fa7a9ab7e1294f8241539323083_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9f16a91074e5009744ab0efcb70acda6402df8808b7c56dee9df820c79546ef1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f16a91074e5009744ab0efcb70acda6402df8808b7c56dee9df820c79546ef1->enter($__internal_9f16a91074e5009744ab0efcb70acda6402df8808b7c56dee9df820c79546ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0745487ee589c0be6ccd2fd003a8ac7b759d2ea32fb1faa171009c196c05744c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0745487ee589c0be6ccd2fd003a8ac7b759d2ea32fb1faa171009c196c05744c->enter($__internal_0745487ee589c0be6ccd2fd003a8ac7b759d2ea32fb1faa171009c196c05744c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 25
        echo "        <script src=";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/js/modernizr-custom.js"), "html", null, true);
        echo "></script>
        

        <script src=";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/js/classie.js"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/js/uisearch.js"), "html", null, true);
        echo "></script>
     ";
        
        $__internal_0745487ee589c0be6ccd2fd003a8ac7b759d2ea32fb1faa171009c196c05744c->leave($__internal_0745487ee589c0be6ccd2fd003a8ac7b759d2ea32fb1faa171009c196c05744c_prof);

        
        $__internal_9f16a91074e5009744ab0efcb70acda6402df8808b7c56dee9df820c79546ef1->leave($__internal_9f16a91074e5009744ab0efcb70acda6402df8808b7c56dee9df820c79546ef1_prof);

    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3f7f3ea25b8eac6a1940d7a57e4f3dccaa7e839ab24208cac494dcb4cdaf551 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3f7f3ea25b8eac6a1940d7a57e4f3dccaa7e839ab24208cac494dcb4cdaf551->enter($__internal_a3f7f3ea25b8eac6a1940d7a57e4f3dccaa7e839ab24208cac494dcb4cdaf551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ed6dda5a021bd721578bdbbf6956d883c731450a726a3976fc6be19b512e1cfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed6dda5a021bd721578bdbbf6956d883c731450a726a3976fc6be19b512e1cfb->enter($__internal_ed6dda5a021bd721578bdbbf6956d883c731450a726a3976fc6be19b512e1cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 38
        echo "\t    <header class=\"bp-header cf\">
                ";
        // line 39
        $this->displayBlock('header', $context, $blocks);
        // line 48
        echo "            </header>
                <button class=\"action action--open\" aria-label=\"Open Menu\"><span class=\"icon icon--menu\"></span></button>
                 ";
        // line 50
        $this->displayBlock('aside', $context, $blocks);
        // line 126
        echo "\t\t\t</div>
\t\t</nav> 
\t\t ";
        
        $__internal_ed6dda5a021bd721578bdbbf6956d883c731450a726a3976fc6be19b512e1cfb->leave($__internal_ed6dda5a021bd721578bdbbf6956d883c731450a726a3976fc6be19b512e1cfb_prof);

        
        $__internal_a3f7f3ea25b8eac6a1940d7a57e4f3dccaa7e839ab24208cac494dcb4cdaf551->leave($__internal_a3f7f3ea25b8eac6a1940d7a57e4f3dccaa7e839ab24208cac494dcb4cdaf551_prof);

    }

    // line 39
    public function block_header($context, array $blocks = array())
    {
        $__internal_721affba795a09405e4419617fb109601697e48e1f2324ccf852834ed8f173ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_721affba795a09405e4419617fb109601697e48e1f2324ccf852834ed8f173ed->enter($__internal_721affba795a09405e4419617fb109601697e48e1f2324ccf852834ed8f173ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_5513673f81483a12f2500ff0b62116c6c5d0dbb3b181f459bb6ffe0f7f220dfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5513673f81483a12f2500ff0b62116c6c5d0dbb3b181f459bb6ffe0f7f220dfc->enter($__internal_5513673f81483a12f2500ff0b62116c6c5d0dbb3b181f459bb6ffe0f7f220dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 40
        echo "                <div class=\"dummy-logo\">
                    <div class=\"dummy-icon foodicon foodicon--coconut\"></div>
                    <h2 class=\"dummy-heading\">Inprink</h2>
                </div>
                <div class=\"bp-header__main\">
                    <span class=\"bp-header__present\">Inprink <span class=\"bp-tooltip bp-icon bp-icon--about\" data-content=\"The Blueprints are a collection of basic and minimal website concepts, components, plugins and layouts with minimal style for easy adaption and usage, or simply for inspiration.\"></span></span>
                </div>
                ";
        
        $__internal_5513673f81483a12f2500ff0b62116c6c5d0dbb3b181f459bb6ffe0f7f220dfc->leave($__internal_5513673f81483a12f2500ff0b62116c6c5d0dbb3b181f459bb6ffe0f7f220dfc_prof);

        
        $__internal_721affba795a09405e4419617fb109601697e48e1f2324ccf852834ed8f173ed->leave($__internal_721affba795a09405e4419617fb109601697e48e1f2324ccf852834ed8f173ed_prof);

    }

    // line 50
    public function block_aside($context, array $blocks = array())
    {
        $__internal_5817c3039a16085232adafbec6878f49c13a91f237985b963f11802c17d5baf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5817c3039a16085232adafbec6878f49c13a91f237985b963f11802c17d5baf8->enter($__internal_5817c3039a16085232adafbec6878f49c13a91f237985b963f11802c17d5baf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        $__internal_b941fd167cb4549b61996aac5370108915607e49cf96bdca3914d5f8fff2b402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b941fd167cb4549b61996aac5370108915607e49cf96bdca3914d5f8fff2b402->enter($__internal_b941fd167cb4549b61996aac5370108915607e49cf96bdca3914d5f8fff2b402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "aside"));

        echo " 
                    <nav id=\"ml-menu\" class=\"menu\">
\t\t\t<button class=\"action action--close\" aria-label=\"Close Menu\"><span class=\"icon icon--cross\"></span></button>
\t\t\t<div class=\"menu__wrap\">
\t\t\t\t
\t\t\t\t<ul data-menu=\"main\" class=\"menu__level\">\t\t\t\t\t
                                         <li> <a href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\" >Home</a></li>
                                         <li> <a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("catalogo");
        echo "\" >Catalogo</a></li>
                                         <li> <a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuovocliente");
        echo "\" >Nuovo cliente</a></li>
                                         <li> <a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuovoordine");
        echo "\" >Nuovo ordine...</a></li>
                                         <li> <a href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ordini");
        echo "\" >Ordini</a></li>
                                         <li> <a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clienti");
        echo "\" >Clienti</a></li>
                                         

\t\t\t\t</ul>
\t\t\t\t                                 
\t\t\t\t<ul data-menu=\"submenu-1\" class=\"menu__level\">
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" data-submenu=\"submenu-1-1\" href=\"#\">Secondo livello</a></li>
\t\t\t\t</ul>
\t\t\t\t  
\t\t\t\t<ul data-menu=\"submenu-1-1\" class=\"menu__level\">
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t</ul>
\t\t\t\t 
\t\t\t\t<ul data-menu=\"submenu-2\" class=\"menu__level\">
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" data-submenu=\"submenu-2-1\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t</ul>
\t\t\t\t 
\t\t\t\t<ul data-menu=\"submenu-2-1\" class=\"menu__level\">
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t</ul>
\t\t\t\t 
\t\t\t\t<ul data-menu=\"submenu-3\" class=\"menu__level\">
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" data-submenu=\"submenu-3-1\" href=\"#\">Secondo livello</a></li>
\t\t\t\t</ul>
\t\t\t\t 
\t\t\t\t<ul data-menu=\"submenu-3-1\" class=\"menu__level\">
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t</ul>
\t\t\t\t
\t\t\t\t<ul data-menu=\"submenu-4\" class=\"menu__level\">
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" data-submenu=\"submenu-4-1\" href=\"#\">Selection</a></li>
\t\t\t\t</ul>
\t\t\t\t 
\t\t\t\t<ul data-menu=\"submenu-4-1\" class=\"menu__level\">
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Terzo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Terzo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Terzo livello</a></li>
\t\t\t\t</ul>   
                                ";
        
        $__internal_b941fd167cb4549b61996aac5370108915607e49cf96bdca3914d5f8fff2b402->leave($__internal_b941fd167cb4549b61996aac5370108915607e49cf96bdca3914d5f8fff2b402_prof);

        
        $__internal_5817c3039a16085232adafbec6878f49c13a91f237985b963f11802c17d5baf8->leave($__internal_5817c3039a16085232adafbec6878f49c13a91f237985b963f11802c17d5baf8_prof);

    }

    // line 129
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_61e0e3328492ff6a4fc542360f45b5b4502dc79287811701346b69efe627d31f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61e0e3328492ff6a4fc542360f45b5b4502dc79287811701346b69efe627d31f->enter($__internal_61e0e3328492ff6a4fc542360f45b5b4502dc79287811701346b69efe627d31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        $__internal_5c511d88261053c210f84415b54ff004d82dd504babdf5d82e84e97851fcf076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c511d88261053c210f84415b54ff004d82dd504babdf5d82e84e97851fcf076->enter($__internal_5c511d88261053c210f84415b54ff004d82dd504babdf5d82e84e97851fcf076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 130
        echo "        ";
        
        $__internal_5c511d88261053c210f84415b54ff004d82dd504babdf5d82e84e97851fcf076->leave($__internal_5c511d88261053c210f84415b54ff004d82dd504babdf5d82e84e97851fcf076_prof);

        
        $__internal_61e0e3328492ff6a4fc542360f45b5b4502dc79287811701346b69efe627d31f->leave($__internal_61e0e3328492ff6a4fc542360f45b5b4502dc79287811701346b69efe627d31f_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  388 => 130,  379 => 129,  304 => 61,  300 => 60,  296 => 59,  292 => 58,  288 => 57,  284 => 56,  268 => 50,  251 => 40,  242 => 39,  230 => 126,  228 => 50,  224 => 48,  222 => 39,  219 => 38,  210 => 37,  198 => 31,  194 => 30,  190 => 29,  186 => 28,  179 => 25,  170 => 24,  157 => 20,  153 => 19,  149 => 18,  145 => 17,  141 => 16,  137 => 15,  133 => 14,  129 => 13,  125 => 12,  121 => 11,  117 => 10,  113 => 9,  109 => 8,  104 => 7,  95 => 6,  77 => 5,  60 => 131,  57 => 129,  55 => 37,  49 => 33,  47 => 24,  44 => 23,  42 => 6,  38 => 5,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\" class=\"no-js\">

<head>   
    <title>{% block title %}Prinkino{% endblock %}</title>
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
        <script src={{asset(\"prinkino/js/modernizr-custom.js\")}}></script>
        

        <script src={{asset(\"prinkino/js/classie.js\")}}></script>
        <script src={{asset(\"prinkino/js/dummydata.js\")}}></script>
        <script src={{asset(\"prinkino/js/main.js\")}}></script>
        <script src={{asset(\"prinkino/js/uisearch.js\")}}></script>
     {% endblock %}
  
</head>
    <body>
        <div class=\"container\">
            {% block body %}
\t    <header class=\"bp-header cf\">
                {% block header %}
                <div class=\"dummy-logo\">
                    <div class=\"dummy-icon foodicon foodicon--coconut\"></div>
                    <h2 class=\"dummy-heading\">Inprink</h2>
                </div>
                <div class=\"bp-header__main\">
                    <span class=\"bp-header__present\">Inprink <span class=\"bp-tooltip bp-icon bp-icon--about\" data-content=\"The Blueprints are a collection of basic and minimal website concepts, components, plugins and layouts with minimal style for easy adaption and usage, or simply for inspiration.\"></span></span>
                </div>
                {% endblock %}
            </header>
                <button class=\"action action--open\" aria-label=\"Open Menu\"><span class=\"icon icon--menu\"></span></button>
                 {% block aside %} 
                    <nav id=\"ml-menu\" class=\"menu\">
\t\t\t<button class=\"action action--close\" aria-label=\"Close Menu\"><span class=\"icon icon--cross\"></span></button>
\t\t\t<div class=\"menu__wrap\">
\t\t\t\t
\t\t\t\t<ul data-menu=\"main\" class=\"menu__level\">\t\t\t\t\t
                                         <li> <a href=\"{{ path('home') }}\" >Home</a></li>
                                         <li> <a href=\"{{ path('catalogo') }}\" >Catalogo</a></li>
                                         <li> <a href=\"{{ path('nuovocliente') }}\" >Nuovo cliente</a></li>
                                         <li> <a href=\"{{ path('nuovoordine') }}\" >Nuovo ordine...</a></li>
                                         <li> <a href=\"{{ path('ordini') }}\" >Ordini</a></li>
                                         <li> <a href=\"{{ path('clienti') }}\" >Clienti</a></li>
                                         

\t\t\t\t</ul>
\t\t\t\t                                 
\t\t\t\t<ul data-menu=\"submenu-1\" class=\"menu__level\">
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" data-submenu=\"submenu-1-1\" href=\"#\">Secondo livello</a></li>
\t\t\t\t</ul>
\t\t\t\t  
\t\t\t\t<ul data-menu=\"submenu-1-1\" class=\"menu__level\">
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t</ul>
\t\t\t\t 
\t\t\t\t<ul data-menu=\"submenu-2\" class=\"menu__level\">
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" data-submenu=\"submenu-2-1\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t</ul>
\t\t\t\t 
\t\t\t\t<ul data-menu=\"submenu-2-1\" class=\"menu__level\">
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t</ul>
\t\t\t\t 
\t\t\t\t<ul data-menu=\"submenu-3\" class=\"menu__level\">
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" data-submenu=\"submenu-3-1\" href=\"#\">Secondo livello</a></li>
\t\t\t\t</ul>
\t\t\t\t 
\t\t\t\t<ul data-menu=\"submenu-3-1\" class=\"menu__level\">
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t</ul>
\t\t\t\t
\t\t\t\t<ul data-menu=\"submenu-4\" class=\"menu__level\">
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Secondo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" data-submenu=\"submenu-4-1\" href=\"#\">Selection</a></li>
\t\t\t\t</ul>
\t\t\t\t 
\t\t\t\t<ul data-menu=\"submenu-4-1\" class=\"menu__level\">
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Terzo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Terzo livello</a></li>
\t\t\t\t\t<li class=\"menu__item\"><a class=\"menu__link\" href=\"#\">Terzo livello</a></li>
\t\t\t\t</ul>   
                                {% endblock %}
\t\t\t</div>
\t\t</nav> 
\t\t {% endblock %}
         {% block corpo %}
        {% endblock %}
        </body>
    </div>
</html>



\t\t
            ", "::base.html.twig", "C:\\Users\\fabio\\Desktop\\Nuova cartella\\Inprint\\app/Resources\\views/base.html.twig");
    }
}
