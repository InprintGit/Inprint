<?php

/* AppBundle:Amministratore:Aattributi.html.twig */
class __TwigTemplate_87f68f6710cb204f91cad75551ceda68b1c6cab1bd5786570068c93ccad7a4d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Amministratore:Abase.html.twig", "AppBundle:Amministratore:Aattributi.html.twig", 1);
        $this->blocks = array(
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
        $__internal_82b6a899809d036357f60654d519e8b940b5bb9747347a26f45ab07ac0241b7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82b6a899809d036357f60654d519e8b940b5bb9747347a26f45ab07ac0241b7f->enter($__internal_82b6a899809d036357f60654d519e8b940b5bb9747347a26f45ab07ac0241b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Amministratore:Aattributi.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82b6a899809d036357f60654d519e8b940b5bb9747347a26f45ab07ac0241b7f->leave($__internal_82b6a899809d036357f60654d519e8b940b5bb9747347a26f45ab07ac0241b7f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c431bcd7343072082d41bd7fe4523913b89781798ab8fae2654d02a6b04aa42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c431bcd7343072082d41bd7fe4523913b89781798ab8fae2654d02a6b04aa42->enter($__internal_0c431bcd7343072082d41bd7fe4523913b89781798ab8fae2654d02a6b04aa42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Attributi visualizzazione";
        
        $__internal_0c431bcd7343072082d41bd7fe4523913b89781798ab8fae2654d02a6b04aa42->leave($__internal_0c431bcd7343072082d41bd7fe4523913b89781798ab8fae2654d02a6b04aa42_prof);

    }

    // line 5
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_5d728fbfffd6156fa906e12d2d67bd09aa68895c481168c90ee9a5fcac9a3c2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d728fbfffd6156fa906e12d2d67bd09aa68895c481168c90ee9a5fcac9a3c2f->enter($__internal_5d728fbfffd6156fa906e12d2d67bd09aa68895c481168c90ee9a5fcac9a3c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 6
        echo "<div class=\"span12\">
\t<h4>Attributi</h4>
</div>
<section>
    <tr>
        <td align=\"right\">
            <input autocomplete=\"off\" id=\"cercaAttributi\" class=\"search order-search\" placeholder=\"Cerca per nome,cognome..\" style=\"width:210px; height:27px; margin-right:8px;\" value=\"\" type=\"text\">\t        \t\t\t    \t\t\t\t        \t\t\t            \t
            <a href=\"nuovocliente.html\" id=\"modal_addclient\" class=\"btn-flat primary\" role=\"button\" style=\"border-radius:2px;\">Ricerca</a>
            <a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Anuovoattributo");
        echo "\">+ Attributo</a>
        </td>
    </tr>
</section>
<section class=\"t1\" id=\"boxTable\" >
    <table class=\"table table-hover\">
        <thead> 
            <tr><th class=\"span2\">Id</th><th class=\"span2\">Nome</th><th class=\"span2\">Numero valori</th></tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attributi"]) ? $context["attributi"] : $this->getContext($context, "attributi")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 25
            echo "            <tr class=\"first\">
                <td> ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo " </td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nome", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "valori", array()), "html", null, true);
            echo "</td>\t\t\t\t\t\t        
                <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AAttributo", array("idAttributo" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo ">Apri</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tbody>
    </table>
</section>
";
        
        $__internal_5d728fbfffd6156fa906e12d2d67bd09aa68895c481168c90ee9a5fcac9a3c2f->leave($__internal_5d728fbfffd6156fa906e12d2d67bd09aa68895c481168c90ee9a5fcac9a3c2f_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Amministratore:Aattributi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 32,  95 => 29,  91 => 28,  87 => 27,  83 => 26,  80 => 25,  76 => 24,  63 => 14,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}Attributi visualizzazione{% endblock %}

{% block corpo %}
<div class=\"span12\">
\t<h4>Attributi</h4>
</div>
<section>
    <tr>
        <td align=\"right\">
            <input autocomplete=\"off\" id=\"cercaAttributi\" class=\"search order-search\" placeholder=\"Cerca per nome,cognome..\" style=\"width:210px; height:27px; margin-right:8px;\" value=\"\" type=\"text\">\t        \t\t\t    \t\t\t\t        \t\t\t            \t
            <a href=\"nuovocliente.html\" id=\"modal_addclient\" class=\"btn-flat primary\" role=\"button\" style=\"border-radius:2px;\">Ricerca</a>
            <a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=\"{{ path('Anuovoattributo') }}\">+ Attributo</a>
        </td>
    </tr>
</section>
<section class=\"t1\" id=\"boxTable\" >
    <table class=\"table table-hover\">
        <thead> 
            <tr><th class=\"span2\">Id</th><th class=\"span2\">Nome</th><th class=\"span2\">Numero valori</th></tr>
        </thead>
        <tbody>
        {%for item in attributi%}
            <tr class=\"first\">
                <td> {{item.id}} </td>
                <td>{{item.nome}}</td>
                <td>{{item.valori}}</td>\t\t\t\t\t\t        
                <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href={{ path('AAttributo', {'idAttributo': item.id})}}>Apri</a></td>
            </tr>
        {%endfor%}
        </tbody>
    </table>
</section>
{% endblock %}", "AppBundle:Amministratore:Aattributi.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Amministratore/Aattributi.html.twig");
    }
}
