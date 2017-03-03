<?php

/* AppBundle:Amministratore:nuovoProducibile.html.twig */
class __TwigTemplate_caa0da490b91d5876d5f3131ee0393e3e791647573e4ca9f6e8f64e94cacccf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Amministratore:Abase.html.twig", "AppBundle:Amministratore:nuovoProducibile.html.twig", 1);
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
        $__internal_8186665be8131a62ee0cc24dc212d8f6e2e60c3bc1cc0b27c269202f2556d706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8186665be8131a62ee0cc24dc212d8f6e2e60c3bc1cc0b27c269202f2556d706->enter($__internal_8186665be8131a62ee0cc24dc212d8f6e2e60c3bc1cc0b27c269202f2556d706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Amministratore:nuovoProducibile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8186665be8131a62ee0cc24dc212d8f6e2e60c3bc1cc0b27c269202f2556d706->leave($__internal_8186665be8131a62ee0cc24dc212d8f6e2e60c3bc1cc0b27c269202f2556d706_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d9cca61116948536de9dabf091c3300cd5794587f45e6e3652942f50ae0e8700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9cca61116948536de9dabf091c3300cd5794587f45e6e3652942f50ae0e8700->enter($__internal_d9cca61116948536de9dabf091c3300cd5794587f45e6e3652942f50ae0e8700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Nuova Producibile";
        
        $__internal_d9cca61116948536de9dabf091c3300cd5794587f45e6e3652942f50ae0e8700->leave($__internal_d9cca61116948536de9dabf091c3300cd5794587f45e6e3652942f50ae0e8700_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2ab3f2e8c67f38ff3d8440fe08af84a6e9c91a8407e6786af33ff103960d2cfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ab3f2e8c67f38ff3d8440fe08af84a6e9c91a8407e6786af33ff103960d2cfc->enter($__internal_2ab3f2e8c67f38ff3d8440fe08af84a6e9c91a8407e6786af33ff103960d2cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/js/salvaProducibile.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/js/AlberoCategorieCheck.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_2ab3f2e8c67f38ff3d8440fe08af84a6e9c91a8407e6786af33ff103960d2cfc->leave($__internal_2ab3f2e8c67f38ff3d8440fe08af84a6e9c91a8407e6786af33ff103960d2cfc_prof);

    }

    // line 13
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_903f7fb6e7d50480c84ecfae67427b679eaaa19ee88c7d9744d1b77ddff443a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_903f7fb6e7d50480c84ecfae67427b679eaaa19ee88c7d9744d1b77ddff443a9->enter($__internal_903f7fb6e7d50480c84ecfae67427b679eaaa19ee88c7d9744d1b77ddff443a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 14
        echo "
<section class=\"top\">
\t<h4>Nuovo Producibile</h4>
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
                        </div>
                         <div class=\"field-box\" id=\"divCompenso\">
                            <label>Inserisci Compenso Grafico:</label>
                            <input name=\"compenso\" type=\"number\" step=\"0.01\" id=\"compenso\" value=\"\" class=\"span6\" style=\"width:240px\" type=\"text\">
                        </div>
                        <div class=\"field-box\" id=\"divImmagine\">
                            <label>Inserisci immaggine:</label>
                            <input name=\"immagine\" type=\"file\" id=\"immagine\" value=\"\" class=\"span6\" style=\"width:240px\" type=\"text\">
                        </div> 
                        <div class=\"field-box\" id='divGruppo'>
                            <label>Seleziona Gruppo-Attributi:</label>
                            <select id=\"gruppo\">
                                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Gruppi"]) ? $context["Gruppi"] : $this->getContext($context, "Gruppi")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "                                <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nome", array()), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                            </select>
                        </div>\t
                    </td>
                </tr>
                <tr>
                    <td id=\"divAlbero\">
                        <label>Seleziona Categorie:</label>
                        <div id=\"tree-container\">
                            <!-- L'abero verrà caricato qui, non inserire codice in questo div -->
                        </div>
                        <div id=\"divCategorie\"></div>
                    </td>
                </tr>
            </tbody>
            <a id=\"invia\" type=\"submit\" class=\"btn-flat primary\" onclick=salva();>Invia</a>
        </form>\t
    </table>
</section>
    <script>
        var categorieAlbero;
        \$(\"#divAlbero\").toggle();
        \$(\"#divCompenso\").toggle();
        \$(\"#divImmagine\").toggle();
        \$(\"#divDescrizione\").toggle();
        \$(\"#divGruppo\").toggle();
        \$(\"#tree-container\").on(\"select_node.jstree\",function(evt, data){
            \$(\"#invia\").show();
            console.log(\"top:\");  
            console.log(\$(\"#tree-container\").jstree('get_top_checked'));
            console.log(\"bottom\");
            console.log(\$(\"#tree-container\").jstree('get_bottom_checked'));
            categorie=\$(\"#tree-container\").jstree('get_bottom_checked');
            temp=\"Categorie selezionate:  \";
            categorieAlbero=categorie;
            for(i=0 ; i < categorie.length ; i++){
                node = \$('#tree-container').jstree(true).get_node(categorie[i]);
                temp=temp+\"      \"+node.text;
                categorieAlbero=categorieAlbero.concat(node.parents)
                
                }
            console.log(categorieAlbero);
            temp=temp + \"</br> appartiene, inoltre a tutte le categorie superiori a quelle selezionate.\"
            \$(\"#divCategorie\").html(temp);
    }
      
);
    </script>
";
        
        $__internal_903f7fb6e7d50480c84ecfae67427b679eaaa19ee88c7d9744d1b77ddff443a9->leave($__internal_903f7fb6e7d50480c84ecfae67427b679eaaa19ee88c7d9744d1b77ddff443a9_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Amministratore:nuovoProducibile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 46,  118 => 44,  114 => 43,  83 => 14,  77 => 13,  68 => 10,  64 => 9,  60 => 8,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
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

{% block title %}Nuova Producibile{% endblock %}

{% block javascripts %}
    {{parent()}}

    <script src=\"{{ asset(\"Amministratore/dist/jstree.min.js\") }}\"></script>
    <script src=\"{{ asset(\"Amministratore/js/salvaProducibile.js\") }}\"></script>
     <script src=\"{{ asset(\"Amministratore/js/AlberoCategorieCheck.js\") }}\"></script>
{% endblock %}

{% block corpo %}

<section class=\"top\">
\t<h4>Nuovo Producibile</h4>
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
                        </div>
                         <div class=\"field-box\" id=\"divCompenso\">
                            <label>Inserisci Compenso Grafico:</label>
                            <input name=\"compenso\" type=\"number\" step=\"0.01\" id=\"compenso\" value=\"\" class=\"span6\" style=\"width:240px\" type=\"text\">
                        </div>
                        <div class=\"field-box\" id=\"divImmagine\">
                            <label>Inserisci immaggine:</label>
                            <input name=\"immagine\" type=\"file\" id=\"immagine\" value=\"\" class=\"span6\" style=\"width:240px\" type=\"text\">
                        </div> 
                        <div class=\"field-box\" id='divGruppo'>
                            <label>Seleziona Gruppo-Attributi:</label>
                            <select id=\"gruppo\">
                                {%for item in Gruppi%}
                                <option value=\"{{item.id}}\">{{item.nome}}</option>
                                {%endfor%}
                            </select>
                        </div>\t
                    </td>
                </tr>
                <tr>
                    <td id=\"divAlbero\">
                        <label>Seleziona Categorie:</label>
                        <div id=\"tree-container\">
                            <!-- L'abero verrà caricato qui, non inserire codice in questo div -->
                        </div>
                        <div id=\"divCategorie\"></div>
                    </td>
                </tr>
            </tbody>
            <a id=\"invia\" type=\"submit\" class=\"btn-flat primary\" onclick=salva();>Invia</a>
        </form>\t
    </table>
</section>
    <script>
        var categorieAlbero;
        \$(\"#divAlbero\").toggle();
        \$(\"#divCompenso\").toggle();
        \$(\"#divImmagine\").toggle();
        \$(\"#divDescrizione\").toggle();
        \$(\"#divGruppo\").toggle();
        \$(\"#tree-container\").on(\"select_node.jstree\",function(evt, data){
            \$(\"#invia\").show();
            console.log(\"top:\");  
            console.log(\$(\"#tree-container\").jstree('get_top_checked'));
            console.log(\"bottom\");
            console.log(\$(\"#tree-container\").jstree('get_bottom_checked'));
            categorie=\$(\"#tree-container\").jstree('get_bottom_checked');
            temp=\"Categorie selezionate:  \";
            categorieAlbero=categorie;
            for(i=0 ; i < categorie.length ; i++){
                node = \$('#tree-container').jstree(true).get_node(categorie[i]);
                temp=temp+\"      \"+node.text;
                categorieAlbero=categorieAlbero.concat(node.parents)
                
                }
            console.log(categorieAlbero);
            temp=temp + \"</br> appartiene, inoltre a tutte le categorie superiori a quelle selezionate.\"
            \$(\"#divCategorie\").html(temp);
    }
      
);
    </script>
{% endblock %}
", "AppBundle:Amministratore:nuovoProducibile.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Amministratore/nuovoProducibile.html.twig");
    }
}
