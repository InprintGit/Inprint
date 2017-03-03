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
            'javascripts' => array($this, 'block_javascripts'),
            'corpo' => array($this, 'block_corpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:Amministratore:Abase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_facfdc5afd5c4540749f1b71df0553ab629c96b99db04f17a46fd834eb340716 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_facfdc5afd5c4540749f1b71df0553ab629c96b99db04f17a46fd834eb340716->enter($__internal_facfdc5afd5c4540749f1b71df0553ab629c96b99db04f17a46fd834eb340716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Amministratore:Anuovacategoria.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_facfdc5afd5c4540749f1b71df0553ab629c96b99db04f17a46fd834eb340716->leave($__internal_facfdc5afd5c4540749f1b71df0553ab629c96b99db04f17a46fd834eb340716_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d0ecb11cf549032d4aa06d393e39b7aef91bdbfdb95db05f69198fd972bc39de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0ecb11cf549032d4aa06d393e39b7aef91bdbfdb95db05f69198fd972bc39de->enter($__internal_d0ecb11cf549032d4aa06d393e39b7aef91bdbfdb95db05f69198fd972bc39de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Nuova Categoria";
        
        $__internal_d0ecb11cf549032d4aa06d393e39b7aef91bdbfdb95db05f69198fd972bc39de->leave($__internal_d0ecb11cf549032d4aa06d393e39b7aef91bdbfdb95db05f69198fd972bc39de_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_eac4bde4f0d604ea321b35f41a2ae075474f50ce3362eadcd7d3e324ad0afb03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eac4bde4f0d604ea321b35f41a2ae075474f50ce3362eadcd7d3e324ad0afb03->enter($__internal_eac4bde4f0d604ea321b35f41a2ae075474f50ce3362eadcd7d3e324ad0afb03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/dist/jstree.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/js/salvaCategoria.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/js/AlberoCategorie.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_eac4bde4f0d604ea321b35f41a2ae075474f50ce3362eadcd7d3e324ad0afb03->leave($__internal_eac4bde4f0d604ea321b35f41a2ae075474f50ce3362eadcd7d3e324ad0afb03_prof);

    }

    // line 13
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_35a54ce5978efb9aed30315d26badf3a8b6dfaff629d4db58c93c30734eda3e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35a54ce5978efb9aed30315d26badf3a8b6dfaff629d4db58c93c30734eda3e2->enter($__internal_35a54ce5978efb9aed30315d26badf3a8b6dfaff629d4db58c93c30734eda3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 14
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
        
        $__internal_35a54ce5978efb9aed30315d26badf3a8b6dfaff629d4db58c93c30734eda3e2->leave($__internal_35a54ce5978efb9aed30315d26badf3a8b6dfaff629d4db58c93c30734eda3e2_prof);

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
        return array (  83 => 14,  77 => 13,  68 => 10,  64 => 9,  60 => 8,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
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

{% block javascripts %}
    {{parent()}}

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
