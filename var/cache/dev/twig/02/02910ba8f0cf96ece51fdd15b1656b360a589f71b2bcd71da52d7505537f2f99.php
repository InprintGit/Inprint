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
        $__internal_a03180dca0ba9368ab9c876c756903f8022710776bd6db14cd1fa9886b11b908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a03180dca0ba9368ab9c876c756903f8022710776bd6db14cd1fa9886b11b908->enter($__internal_a03180dca0ba9368ab9c876c756903f8022710776bd6db14cd1fa9886b11b908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Amministratore:nuovoProducibile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a03180dca0ba9368ab9c876c756903f8022710776bd6db14cd1fa9886b11b908->leave($__internal_a03180dca0ba9368ab9c876c756903f8022710776bd6db14cd1fa9886b11b908_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_90a68601be19bcfd61eee1b47b81853edbdab271fc00c561dc1093b03d99dde9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90a68601be19bcfd61eee1b47b81853edbdab271fc00c561dc1093b03d99dde9->enter($__internal_90a68601be19bcfd61eee1b47b81853edbdab271fc00c561dc1093b03d99dde9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Nuova Producibile";
        
        $__internal_90a68601be19bcfd61eee1b47b81853edbdab271fc00c561dc1093b03d99dde9->leave($__internal_90a68601be19bcfd61eee1b47b81853edbdab271fc00c561dc1093b03d99dde9_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_652f6339f7f8d5cff07d87b581e5407023d3f8c42305cb8f6d268b37e84917cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_652f6339f7f8d5cff07d87b581e5407023d3f8c42305cb8f6d268b37e84917cb->enter($__internal_652f6339f7f8d5cff07d87b581e5407023d3f8c42305cb8f6d268b37e84917cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/js/salvaProducibile.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/js/AlberoCategorieCheck.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_652f6339f7f8d5cff07d87b581e5407023d3f8c42305cb8f6d268b37e84917cb->leave($__internal_652f6339f7f8d5cff07d87b581e5407023d3f8c42305cb8f6d268b37e84917cb_prof);

    }

    // line 14
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_13b585a654747c648b8169ead782fc301073cb24c3a341a74755700430cded9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13b585a654747c648b8169ead782fc301073cb24c3a341a74755700430cded9e->enter($__internal_13b585a654747c648b8169ead782fc301073cb24c3a341a74755700430cded9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 15
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
                        </div>\t
                        <div class=\"field-box\" id=\"divImmagine\">
                            <label>Inserisci immaggine:</label>
                            <input name=\"immagine\" type=\"file\" id=\"immagine\" value=\"\" class=\"span6\" style=\"width:240px\" type=\"text\">
                        </div>
                        <div class=\"field-box\" id='divGruppo'>
                            <label>Seleziona Gruppo-Attributi:</label>
                            <select id=\"gruppo\">
                                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Gruppi"]) ? $context["Gruppi"] : $this->getContext($context, "Gruppi")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 41
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
        // line 43
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
        
        \$(\"#divAlbero\").toggle();
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
            for(i=0 ; i < categorie.length ; i++){
                node = \$('#tree-container').jstree(true).get_node(categorie[i]);
                temp=temp+\"      \"+node.text;
                
                categorie=categorie.concat(node.parents)
                
                }
            console.log(categorie);
            temp=temp + \"</br> appartiene, inoltre a tutte le categorie superiori a quelle selezionate.\"
            \$(\"#divCategorie\").html(temp);
    }
      
);
    </script>
";
        
        $__internal_13b585a654747c648b8169ead782fc301073cb24c3a341a74755700430cded9e->leave($__internal_13b585a654747c648b8169ead782fc301073cb24c3a341a74755700430cded9e_prof);

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
        return array (  126 => 43,  115 => 41,  111 => 40,  84 => 15,  78 => 14,  69 => 11,  65 => 10,  61 => 9,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
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

{% block stylesheets %}
    {{parent()}}
    <script type=\"text/javascript\" charset=\"utf8\" src=\"http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js\"></script>

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
                        </div>\t
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
        
        \$(\"#divAlbero\").toggle();
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
            for(i=0 ; i < categorie.length ; i++){
                node = \$('#tree-container').jstree(true).get_node(categorie[i]);
                temp=temp+\"      \"+node.text;
                
                categorie=categorie.concat(node.parents)
                
                }
            console.log(categorie);
            temp=temp + \"</br> appartiene, inoltre a tutte le categorie superiori a quelle selezionate.\"
            \$(\"#divCategorie\").html(temp);
    }
      
);
    </script>
{% endblock %}
", "AppBundle:Amministratore:nuovoProducibile.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Amministratore/nuovoProducibile.html.twig");
    }
}
