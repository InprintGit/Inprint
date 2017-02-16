<?php

/* AppBundle:Prinkino:tabellaProdotti.html.twig */
class __TwigTemplate_80433c2e37f017e1c78e6ca7c91199847faf37ddff3d476279710db785234f0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6679910e168304a42cdd1d8aed45db7455c3d2a75ca431559ec723f1a3528cc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6679910e168304a42cdd1d8aed45db7455c3d2a75ca431559ec723f1a3528cc3->enter($__internal_6679910e168304a42cdd1d8aed45db7455c3d2a75ca431559ec723f1a3528cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Prinkino:tabellaProdotti.html.twig"));

        // line 1
        echo "<table class=\"table table-hover\"> 
    <caption><h4>Ordini - <span>sospesi</span></h4></caption>
    <thead>
        <tr>
            <th>Codice</th>
            <th>Nome</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr class=\"first\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["prodotti"]) ? $context["prodotti"] : $this->getContext($context, "prodotti")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo "  
            <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nome", array()), "html", null, true);
            echo "</td>
            <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articolo", array("idproducibile" => $this->getAttribute($context["item"], "id", array()), "precedente" => 0)), "html", null, true);
            echo "\">Visualizza</a></td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </tbody>
</table>";
        
        $__internal_6679910e168304a42cdd1d8aed45db7455c3d2a75ca431559ec723f1a3528cc3->leave($__internal_6679910e168304a42cdd1d8aed45db7455c3d2a75ca431559ec723f1a3528cc3_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Prinkino:tabellaProdotti.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 18,  49 => 15,  45 => 14,  41 => 13,  35 => 12,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table class=\"table table-hover\"> 
    <caption><h4>Ordini - <span>sospesi</span></h4></caption>
    <thead>
        <tr>
            <th>Codice</th>
            <th>Nome</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr class=\"first\">
        {%for item in prodotti%}  
            <td>{{item.id}}</td>
            <td>{{item.nome}}</td>
            <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=\"{{ path('articolo', {'idproducibile': item.id, 'precedente':0}) }}\">Visualizza</a></td>
        </tr>
        {%endfor%}
    </tbody>
</table>", "AppBundle:Prinkino:tabellaProdotti.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Prinkino/tabellaProdotti.html.twig");
    }
}
