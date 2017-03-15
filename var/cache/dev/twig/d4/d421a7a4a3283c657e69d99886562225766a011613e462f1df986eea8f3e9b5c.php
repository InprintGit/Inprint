<?php

/* AppBundle:Prinkino:tabellaProdotti.html.twig */
class __TwigTemplate_e7f447d1caa01220d5cf2423fc8e844c2acafd7c8cb384f095e27497fad3e91c extends Twig_Template
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
        $__internal_05f704036f520933abbf2e8409787b71d5a42c47f56d43cfb084390b91130c8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05f704036f520933abbf2e8409787b71d5a42c47f56d43cfb084390b91130c8d->enter($__internal_05f704036f520933abbf2e8409787b71d5a42c47f56d43cfb084390b91130c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Prinkino:tabellaProdotti.html.twig"));

        $__internal_360c56c21a04a8018bfa06e32eb946ad6819372f933d754d51f7a23a7eb8527f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_360c56c21a04a8018bfa06e32eb946ad6819372f933d754d51f7a23a7eb8527f->enter($__internal_360c56c21a04a8018bfa06e32eb946ad6819372f933d754d51f7a23a7eb8527f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Prinkino:tabellaProdotti.html.twig"));

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
        
        $__internal_05f704036f520933abbf2e8409787b71d5a42c47f56d43cfb084390b91130c8d->leave($__internal_05f704036f520933abbf2e8409787b71d5a42c47f56d43cfb084390b91130c8d_prof);

        
        $__internal_360c56c21a04a8018bfa06e32eb946ad6819372f933d754d51f7a23a7eb8527f->leave($__internal_360c56c21a04a8018bfa06e32eb946ad6819372f933d754d51f7a23a7eb8527f_prof);

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
        return array (  61 => 18,  52 => 15,  48 => 14,  44 => 13,  38 => 12,  25 => 1,);
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
</table>", "AppBundle:Prinkino:tabellaProdotti.html.twig", "C:\\Users\\fabio\\Desktop\\Nuova cartella\\Inprint\\src\\AppBundle/Resources/views/Prinkino/tabellaProdotti.html.twig");
    }
}
