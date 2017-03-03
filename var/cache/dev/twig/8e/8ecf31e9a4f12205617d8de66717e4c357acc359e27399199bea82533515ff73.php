<?php

/* AppBundle:Amministratore:categoria.html.twig */
class __TwigTemplate_8d552a35e9af8b2d5ca5c761f2d3c62f4759a1fd882461beeeba0ab7a56af665 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Amministratore:Abase.html.twig", "AppBundle:Amministratore:categoria.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'title' => array($this, 'block_title'),
            'corpo' => array($this, 'block_corpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:Amministratore:Abase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9231a4964742070b22a857ba0d379d86dbdb476f25fb5eabbb3a8d404b9b9cb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9231a4964742070b22a857ba0d379d86dbdb476f25fb5eabbb3a8d404b9b9cb9->enter($__internal_9231a4964742070b22a857ba0d379d86dbdb476f25fb5eabbb3a8d404b9b9cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Amministratore:categoria.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9231a4964742070b22a857ba0d379d86dbdb476f25fb5eabbb3a8d404b9b9cb9->leave($__internal_9231a4964742070b22a857ba0d379d86dbdb476f25fb5eabbb3a8d404b9b9cb9_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_86bfa59a318071d896fba3170a719fd66249044a630e02a9ced96c3bcc491c69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86bfa59a318071d896fba3170a719fd66249044a630e02a9ced96c3bcc491c69->enter($__internal_86bfa59a318071d896fba3170a719fd66249044a630e02a9ced96c3bcc491c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 4
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/js/salvaCategoria.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_86bfa59a318071d896fba3170a719fd66249044a630e02a9ced96c3bcc491c69->leave($__internal_86bfa59a318071d896fba3170a719fd66249044a630e02a9ced96c3bcc491c69_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae1c85e6ca5045717cb4d9f2567c628644a78d96ca4804ad9f5ecbc9e736f2fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae1c85e6ca5045717cb4d9f2567c628644a78d96ca4804ad9f5ecbc9e736f2fb->enter($__internal_ae1c85e6ca5045717cb4d9f2567c628644a78d96ca4804ad9f5ecbc9e736f2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "categoria";
        
        $__internal_ae1c85e6ca5045717cb4d9f2567c628644a78d96ca4804ad9f5ecbc9e736f2fb->leave($__internal_ae1c85e6ca5045717cb4d9f2567c628644a78d96ca4804ad9f5ecbc9e736f2fb_prof);

    }

    // line 10
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_01f33fb9d019dfc704b2ebf596798e3e9ae9d97f3c5362017e42b3ffd9b85502 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01f33fb9d019dfc704b2ebf596798e3e9ae9d97f3c5362017e42b3ffd9b85502->enter($__internal_01f33fb9d019dfc704b2ebf596798e3e9ae9d97f3c5362017e42b3ffd9b85502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 11
        echo "<div id=\"content\">    
    <div class=\"span12\" >
        <h4> Categoria - ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "id", array()), "html", null, true);
        echo "</h4>
    </div>
    <section>
        <table>
            <tr>
                <td align=\"right\">\t        \t\t\t    \t\t\t
                    <a href=\"nuovocliente.html\" id=\"modal_addclient\" class=\"btn-flat primary\" role=\"button\" style=\"border-radius:2px;\">Modifica</a>
                    <a onclick=\"elimina(";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "id", array()), "html", null, true);
        echo ");\" id=\"modal_addclient\" class=\"btn-flat primary\" role=\"button\" disabled style=\"border-radius:2px;\">Elimina</a>
                </td>
            </tr>
        </table>        
    </section>
    <section class=\"t1\" >
        <table class=\"table table-hover\">
            <thead> 
                <tr>
                    <th class=\"span2\">Nome</th>
                    <th class=\"span2\">Padre</th>
                    <th class=\"span2\">Descrizione</th>
                    <th class=\"span2\">Numero sottocategoria</th>
                    <th class=\"span2\">Numero producibili</th>
                </tr>
            </thead>
            <tbody>
                <tr class=\"first\">
                    <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "nome", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "CategoriaPadreId", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "descrizione", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 41
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["figli"]) ? $context["figli"] : $this->getContext($context, "figli"))), "html", null, true);
        echo "</td>
                    <td>";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["producibili"]) ? $context["producibili"] : $this->getContext($context, "producibili")), "html", null, true);
        echo "</td>\t\t\t\t\t\t        
                </tr>
            </tbody>
        </table>\t\t\t\t\t\t\t\t\t\t 
    </section>
    <div class=\"span12\">
        <h4>figli</h4>
    </div>
    <section class=\"t1\" >
        <table class=\"table table-hover\">
            <thead> 
                <tr>
                    <th class=\"span2\">Id</th>
                    <th class=\"span2\">Nome</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["figli"]) ? $context["figli"] : $this->getContext($context, "figli")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 61
            echo "                <tr class=\"first\">
                    <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nome", array()), "html", null, true);
            echo "</td>
                    <td><a class=\"btn-flat primary\" href=";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Acategoria", array("idCategoria" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo " >Apri</a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "\t
            </tbody>
        </table>
    </section>
</div>
";
        
        $__internal_01f33fb9d019dfc704b2ebf596798e3e9ae9d97f3c5362017e42b3ffd9b85502->leave($__internal_01f33fb9d019dfc704b2ebf596798e3e9ae9d97f3c5362017e42b3ffd9b85502_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Amministratore:categoria.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 66,  162 => 64,  158 => 63,  154 => 62,  151 => 61,  147 => 60,  126 => 42,  122 => 41,  118 => 40,  114 => 39,  110 => 38,  89 => 20,  79 => 13,  75 => 11,  69 => 10,  57 => 8,  48 => 6,  42 => 4,  36 => 3,  11 => 1,);
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

{% block javascripts %}
    {{parent()}}

    <script src=\"{{ asset(\"Amministratore/js/salvaCategoria.js\") }}\"></script>
{% endblock %}
{% block title %}categoria{% endblock %}
    
{% block corpo %}
<div id=\"content\">    
    <div class=\"span12\" >
        <h4> Categoria - {{categoria.id}}</h4>
    </div>
    <section>
        <table>
            <tr>
                <td align=\"right\">\t        \t\t\t    \t\t\t
                    <a href=\"nuovocliente.html\" id=\"modal_addclient\" class=\"btn-flat primary\" role=\"button\" style=\"border-radius:2px;\">Modifica</a>
                    <a onclick=\"elimina({{categoria.id}});\" id=\"modal_addclient\" class=\"btn-flat primary\" role=\"button\" disabled style=\"border-radius:2px;\">Elimina</a>
                </td>
            </tr>
        </table>        
    </section>
    <section class=\"t1\" >
        <table class=\"table table-hover\">
            <thead> 
                <tr>
                    <th class=\"span2\">Nome</th>
                    <th class=\"span2\">Padre</th>
                    <th class=\"span2\">Descrizione</th>
                    <th class=\"span2\">Numero sottocategoria</th>
                    <th class=\"span2\">Numero producibili</th>
                </tr>
            </thead>
            <tbody>
                <tr class=\"first\">
                    <td>{{categoria.nome}}</td>
                    <td>{{categoria.CategoriaPadreId}}</td>
                    <td>{{categoria.descrizione}}</td>
                    <td>{{figli|length}}</td>
                    <td>{{producibili}}</td>\t\t\t\t\t\t        
                </tr>
            </tbody>
        </table>\t\t\t\t\t\t\t\t\t\t 
    </section>
    <div class=\"span12\">
        <h4>figli</h4>
    </div>
    <section class=\"t1\" >
        <table class=\"table table-hover\">
            <thead> 
                <tr>
                    <th class=\"span2\">Id</th>
                    <th class=\"span2\">Nome</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            {%for item in figli%}
                <tr class=\"first\">
                    <td>{{item.id}}</td>
                    <td>{{item.nome}}</td>
                    <td><a class=\"btn-flat primary\" href={{ path('Acategoria', {'idCategoria': item.id})}} >Apri</a></td>
                </tr>
            {%endfor%}\t
            </tbody>
        </table>
    </section>
</div>
{% endblock %}", "AppBundle:Amministratore:categoria.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Amministratore/categoria.html.twig");
    }
}
