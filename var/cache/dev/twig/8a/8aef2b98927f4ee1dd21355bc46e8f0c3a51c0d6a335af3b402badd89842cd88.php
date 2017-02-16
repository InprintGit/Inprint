<?php

/* AppBundle:Amministratore:Anuovacategoria.html.twig */
class __TwigTemplate_b34067a69bfa55dd46e1a959a12e7687b553761b6353907b511a7a390be2b643 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Amministratore:Abase.html.twig", "AppBundle:Amministratore:Anuovacategoria.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'corpo' => array($this, 'block_corpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:Amministratore:Abase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_211405702c95f4985aa99b5408ccf23c3a1f39b2f1cbfe7630bd0e8ac85680eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_211405702c95f4985aa99b5408ccf23c3a1f39b2f1cbfe7630bd0e8ac85680eb->enter($__internal_211405702c95f4985aa99b5408ccf23c3a1f39b2f1cbfe7630bd0e8ac85680eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Amministratore:Anuovacategoria.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_211405702c95f4985aa99b5408ccf23c3a1f39b2f1cbfe7630bd0e8ac85680eb->leave($__internal_211405702c95f4985aa99b5408ccf23c3a1f39b2f1cbfe7630bd0e8ac85680eb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bae9d6d2bdab66edcb8feb7be0ee5407c563afc2101a7f9d5a650327020d5ee8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bae9d6d2bdab66edcb8feb7be0ee5407c563afc2101a7f9d5a650327020d5ee8->enter($__internal_bae9d6d2bdab66edcb8feb7be0ee5407c563afc2101a7f9d5a650327020d5ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Nuova Categoria";
        
        $__internal_bae9d6d2bdab66edcb8feb7be0ee5407c563afc2101a7f9d5a650327020d5ee8->leave($__internal_bae9d6d2bdab66edcb8feb7be0ee5407c563afc2101a7f9d5a650327020d5ee8_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a72a2ff8a5b52b3460b4f68c8da824c98b56721b7016c56baf5f4f4abb4f8325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a72a2ff8a5b52b3460b4f68c8da824c98b56721b7016c56baf5f4f4abb4f8325->enter($__internal_a72a2ff8a5b52b3460b4f68c8da824c98b56721b7016c56baf5f4f4abb4f8325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <script type=\"text/javascript\" charset=\"utf8\" src=\"http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js\"></script>

    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/dist/jstree.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/js/salvaCategoria.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/js/AlberoCategorie.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_a72a2ff8a5b52b3460b4f68c8da824c98b56721b7016c56baf5f4f4abb4f8325->leave($__internal_a72a2ff8a5b52b3460b4f68c8da824c98b56721b7016c56baf5f4f4abb4f8325_prof);

    }

    // line 14
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_9fbb22e057ab2791133c7df5130eea22a9ea99ab6a36bbfd0a705018de21de25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fbb22e057ab2791133c7df5130eea22a9ea99ab6a36bbfd0a705018de21de25->enter($__internal_9fbb22e057ab2791133c7df5130eea22a9ea99ab6a36bbfd0a705018de21de25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 15
        echo "
<section class=\"top\">
\t<h4>Nuovo Categoria</h4>
</section>
<section class=\"form\" id=\"content\">
    <table>
        <form method=\"post\" action=\"\" >
            <tbody>
                <tr valign=\"top\">
                    <td>
                        <div class=\"field-box\" id='divNome'>
                            <label>Nome :</label>
                            <input name=\"nome\" id=\"nome\" value=\"\" placeholder=\"\" class=\"span6\" style=\"width:240px\" type=\"text\">
                        </div>
                        <div class=\"field-box\" id='divDescrizione'>
                            <label>Breve descrizione:</label>
                            <input name=\"descrizione\" id=\"descrizione\" value=\"\" class=\"span6\" style=\"width:240px\" type=\"text\">
                        </div>\t
                        <div class=\"field-box\" id=\"divImmagine\">
                            <label>Inserisci immaggine:</label>
                            <input name=\"immagine\" type=\"file\" id=\"immagine\" value=\"\" class=\"span6\" style=\"width:240px\" type=\"text\">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td id=\"divAlbero\">
                        <label>MaxiCategoria Padre:</label>
                        <div id=\"tree-container\">
                            <!-- L'abero verrà caricato qui, non inserire codice in questo div -->
                        </div>
                    </td>
                </tr>
            </tbody>
            <a id=\"invia\" type=\"submit\" class=\"btn-flat primary\" onclick=salva();>Invia</a>
        </form>\t
    </table>
</section>
    <script>
        \$(\"#divAlbero\").toggle();
        \$(\"#divImmagine\").toggle();
        \$(\"#divDescrizione\").toggle();
        
        \$(\"#tree-container\").on(\"select_node.jstree\",
     function(evt, data){
         \$(\"#invia\").show();
          console.log(\$(\"#tree-container\").jstree('get_selected'));
     }
);
    </script>
";
        
        $__internal_9fbb22e057ab2791133c7df5130eea22a9ea99ab6a36bbfd0a705018de21de25->leave($__internal_9fbb22e057ab2791133c7df5130eea22a9ea99ab6a36bbfd0a705018de21de25_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Amministratore:Anuovacategoria.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 15,  78 => 14,  69 => 11,  65 => 10,  61 => 9,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
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

{% block title %}Nuova Categoria{% endblock %}

{% block stylesheets %}
    {{parent()}}
    <script type=\"text/javascript\" charset=\"utf8\" src=\"http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js\"></script>

    <script src=\"{{ asset(\"Amministratore/dist/jstree.min.js\") }}\"></script>
    <script src=\"{{ asset(\"Amministratore/js/salvaCategoria.js\") }}\"></script>
     <script src=\"{{ asset(\"Amministratore/js/AlberoCategorie.js\") }}\"></script>
{% endblock %}

{% block corpo %}

<section class=\"top\">
\t<h4>Nuovo Categoria</h4>
</section>
<section class=\"form\" id=\"content\">
    <table>
        <form method=\"post\" action=\"\" >
            <tbody>
                <tr valign=\"top\">
                    <td>
                        <div class=\"field-box\" id='divNome'>
                            <label>Nome :</label>
                            <input name=\"nome\" id=\"nome\" value=\"\" placeholder=\"\" class=\"span6\" style=\"width:240px\" type=\"text\">
                        </div>
                        <div class=\"field-box\" id='divDescrizione'>
                            <label>Breve descrizione:</label>
                            <input name=\"descrizione\" id=\"descrizione\" value=\"\" class=\"span6\" style=\"width:240px\" type=\"text\">
                        </div>\t
                        <div class=\"field-box\" id=\"divImmagine\">
                            <label>Inserisci immaggine:</label>
                            <input name=\"immagine\" type=\"file\" id=\"immagine\" value=\"\" class=\"span6\" style=\"width:240px\" type=\"text\">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td id=\"divAlbero\">
                        <label>MaxiCategoria Padre:</label>
                        <div id=\"tree-container\">
                            <!-- L'abero verrà caricato qui, non inserire codice in questo div -->
                        </div>
                    </td>
                </tr>
            </tbody>
            <a id=\"invia\" type=\"submit\" class=\"btn-flat primary\" onclick=salva();>Invia</a>
        </form>\t
    </table>
</section>
    <script>
        \$(\"#divAlbero\").toggle();
        \$(\"#divImmagine\").toggle();
        \$(\"#divDescrizione\").toggle();
        
        \$(\"#tree-container\").on(\"select_node.jstree\",
     function(evt, data){
         \$(\"#invia\").show();
          console.log(\$(\"#tree-container\").jstree('get_selected'));
     }
);
    </script>
{% endblock %}", "AppBundle:Amministratore:Anuovacategoria.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Amministratore/Anuovacategoria.html.twig");
    }
}
