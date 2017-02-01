<?php

/* AppBundle:Amministratore:Acategorie.html.twig */
class __TwigTemplate_9c18d877d9563508b1a774873b20e43947b47f4aa894001e4d00770f5ade9258 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AppBundle:Amministratore:Abase.html.twig", "AppBundle:Amministratore:Acategorie.html.twig", 2);
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
        $__internal_9aca987399901f452567f65da0d5d2ce31645b52d95d6ec8f2df3f331960b09d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aca987399901f452567f65da0d5d2ce31645b52d95d6ec8f2df3f331960b09d->enter($__internal_9aca987399901f452567f65da0d5d2ce31645b52d95d6ec8f2df3f331960b09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Amministratore:Acategorie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9aca987399901f452567f65da0d5d2ce31645b52d95d6ec8f2df3f331960b09d->leave($__internal_9aca987399901f452567f65da0d5d2ce31645b52d95d6ec8f2df3f331960b09d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_e7df70468a7084f2739339046c66697be6514f6988cd10010f8c5459ab67c70c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7df70468a7084f2739339046c66697be6514f6988cd10010f8c5459ab67c70c->enter($__internal_e7df70468a7084f2739339046c66697be6514f6988cd10010f8c5459ab67c70c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Nuova categoria visualizzazione";
        
        $__internal_e7df70468a7084f2739339046c66697be6514f6988cd10010f8c5459ab67c70c->leave($__internal_e7df70468a7084f2739339046c66697be6514f6988cd10010f8c5459ab67c70c_prof);

    }

    // line 6
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_006630d296365a01dbd8ea48507b1d2ceef8a6ae67b7a8e2ed00958b6d06eef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_006630d296365a01dbd8ea48507b1d2ceef8a6ae67b7a8e2ed00958b6d06eef9->enter($__internal_006630d296365a01dbd8ea48507b1d2ceef8a6ae67b7a8e2ed00958b6d06eef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 7
        echo "<div class=\"span12\">
    <h4>Categorie</h4>
</div>
<section>
    <tr>
        <td align=\"right\">
            <input autocomplete=\"off\" id=\"cerca\" class=\"search order-search\" placeholder=\"Cerca per nome,cognome..\" style=\"width:210px; height:27px; margin-right:8px;\" value=\"\" type=\"text\">\t\t\t\t\t\t\t<a href=\"nuovocliente.html\" id=\"modal_addclient\" class=\"btn-flat primary\" role=\"button\" style=\"border-radius:2px;\">Ricerca</a>
            <a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AnuovaCategoria");
        echo "\">+ Categoria</a>
        </td>
    </tr>
</section>
<section class=\"t1\" >
    <table class=\"table table-hover\">
        <thead> 
            <tr>
                <th class=\"span2\">Id</th>
                <th class=\"span2\">Nome</th>
                <th class=\"span2\">Descrizione</th>
                <th class=\"span2\">Immagine</th>
                <th class=\"span2\">Padre</th> 
            </tr>
        </thead>
        <tbody>
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 31
            echo "            <tr class=\"first\">
                <td> ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo " </td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nome", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "descrizione", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "immagine", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "padre", array()), "html", null, true);
            echo "</td>
                <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=\"ordine.html\">Cambia</a></td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
    </table>
</section>
";
        
        $__internal_006630d296365a01dbd8ea48507b1d2ceef8a6ae67b7a8e2ed00958b6d06eef9->leave($__internal_006630d296365a01dbd8ea48507b1d2ceef8a6ae67b7a8e2ed00958b6d06eef9_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Amministratore:Acategorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 40,  104 => 36,  100 => 35,  96 => 34,  92 => 33,  88 => 32,  85 => 31,  81 => 30,  62 => 14,  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"AppBundle:Amministratore:Abase.html.twig\" %}

{% block title %} Nuova categoria visualizzazione{% endblock %}

{% block corpo %}
<div class=\"span12\">
    <h4>Categorie</h4>
</div>
<section>
    <tr>
        <td align=\"right\">
            <input autocomplete=\"off\" id=\"cerca\" class=\"search order-search\" placeholder=\"Cerca per nome,cognome..\" style=\"width:210px; height:27px; margin-right:8px;\" value=\"\" type=\"text\">\t\t\t\t\t\t\t<a href=\"nuovocliente.html\" id=\"modal_addclient\" class=\"btn-flat primary\" role=\"button\" style=\"border-radius:2px;\">Ricerca</a>
            <a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=\"{{ path('AnuovaCategoria') }}\">+ Categoria</a>
        </td>
    </tr>
</section>
<section class=\"t1\" >
    <table class=\"table table-hover\">
        <thead> 
            <tr>
                <th class=\"span2\">Id</th>
                <th class=\"span2\">Nome</th>
                <th class=\"span2\">Descrizione</th>
                <th class=\"span2\">Immagine</th>
                <th class=\"span2\">Padre</th> 
            </tr>
        </thead>
        <tbody>
        {%for item in categorie%}
            <tr class=\"first\">
                <td> {{item.id}} </td>
                <td>{{item.nome}}</td>
                <td>{{item.descrizione}}</td>
                <td>{{item.immagine}}</td>
                <td>{{item.padre}}</td>
                <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=\"ordine.html\">Cambia</a></td>
            </tr>
        {%endfor%}
        </tbody>
    </table>
</section>
{% endblock %}", "AppBundle:Amministratore:Acategorie.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Amministratore/Acategorie.html.twig");
    }
}
