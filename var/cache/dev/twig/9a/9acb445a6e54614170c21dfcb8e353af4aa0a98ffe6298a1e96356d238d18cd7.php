<?php

/* AppBundle:ResponsabileProduzione:conclusi.html.twig */
class __TwigTemplate_2f54e3fbccd8b179eb64a6c8d884b55497fa84329545fb082f26568e58aa3aca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:ResponsabileProduzione:SPbase.html.twig", "AppBundle:ResponsabileProduzione:conclusi.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'corpo' => array($this, 'block_corpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:ResponsabileProduzione:SPbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e5e106a90433dedc8c30ae6ca8dbfc2e91cea3d6ddbba0b6f50076461298f45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e5e106a90433dedc8c30ae6ca8dbfc2e91cea3d6ddbba0b6f50076461298f45->enter($__internal_2e5e106a90433dedc8c30ae6ca8dbfc2e91cea3d6ddbba0b6f50076461298f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:ResponsabileProduzione:conclusi.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e5e106a90433dedc8c30ae6ca8dbfc2e91cea3d6ddbba0b6f50076461298f45->leave($__internal_2e5e106a90433dedc8c30ae6ca8dbfc2e91cea3d6ddbba0b6f50076461298f45_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dda8496bd5358dbf0c1841de7bc449dfa9840d84949ef42331b4fe2bbafb981a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dda8496bd5358dbf0c1841de7bc449dfa9840d84949ef42331b4fe2bbafb981a->enter($__internal_dda8496bd5358dbf0c1841de7bc449dfa9840d84949ef42331b4fe2bbafb981a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lavori da eseguire";
        
        $__internal_dda8496bd5358dbf0c1841de7bc449dfa9840d84949ef42331b4fe2bbafb981a->leave($__internal_dda8496bd5358dbf0c1841de7bc449dfa9840d84949ef42331b4fe2bbafb981a_prof);

    }

    // line 5
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_b512f3830f31ecfcee8d90992865020ff11b31b69031b73b46955cfc434e45a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b512f3830f31ecfcee8d90992865020ff11b31b69031b73b46955cfc434e45a0->enter($__internal_b512f3830f31ecfcee8d90992865020ff11b31b69031b73b46955cfc434e45a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 6
        echo "
<section class=\"top\">
   <h4>LAVORI in produzione</h4>
</section>
<section class=\"ric\">
    <div>
        <h4>Ricerca</h4>
        <input class=\"search\" name=\"\" placeholder=\"nome cliente, numero ordine...\"><a class=\"btn-flat primary\" href=\"\">  Ricerca </a>
    </div>
</section>
<section class=\"t1\" >
    <table class=\"table table-hover\">
        <caption> <h4>Lavori - <span>Conclusi </span></h4></caption>
            <thead> 
                <tr><th class=\"span3\">Descrizione</th><th class=\"span4\">Codice lavorazione</th><th class=\"span4\">data</th><th class=\"span4\">STATO</th><th class=\"span4\"> </th></tr>
            </thead>
            <tbody>
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["conclusi"]) ? $context["conclusi"] : $this->getContext($context, "conclusi")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 24
            echo "                <tr class=\"first\">
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "descrizione", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "codiceordine", array()), "html", null, true);
            echo "</td>
                    <td><time datetime=\"2016-07-20\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "data", array()), "html", null, true);
            echo "</time></td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "stato", array()), "html", null, true);
            echo "</td>
                    <td>\t       
                        <a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("SPordine", array("idordine" => $this->getAttribute($context["item"], "codiceordine", array()))), "html", null, true);
            echo "><i class=\"icon-zoom-in\"></i> Analizza</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "            </tbody>
    </table>
</section>
";
        
        $__internal_b512f3830f31ecfcee8d90992865020ff11b31b69031b73b46955cfc434e45a0->leave($__internal_b512f3830f31ecfcee8d90992865020ff11b31b69031b73b46955cfc434e45a0_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:ResponsabileProduzione:conclusi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 34,  96 => 30,  91 => 28,  87 => 27,  83 => 26,  79 => 25,  76 => 24,  72 => 23,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle:ResponsabileProduzione:SPbase.html.twig\" %}

{% block title %}Lavori da eseguire{% endblock %}

{% block corpo %}

<section class=\"top\">
   <h4>LAVORI in produzione</h4>
</section>
<section class=\"ric\">
    <div>
        <h4>Ricerca</h4>
        <input class=\"search\" name=\"\" placeholder=\"nome cliente, numero ordine...\"><a class=\"btn-flat primary\" href=\"\">  Ricerca </a>
    </div>
</section>
<section class=\"t1\" >
    <table class=\"table table-hover\">
        <caption> <h4>Lavori - <span>Conclusi </span></h4></caption>
            <thead> 
                <tr><th class=\"span3\">Descrizione</th><th class=\"span4\">Codice lavorazione</th><th class=\"span4\">data</th><th class=\"span4\">STATO</th><th class=\"span4\"> </th></tr>
            </thead>
            <tbody>
            {%for item in  conclusi %}
                <tr class=\"first\">
                    <td>{{item.descrizione}}</td>
                    <td>{{item.codiceordine}}</td>
                    <td><time datetime=\"2016-07-20\">{{item.data}}</time></td>
                    <td>{{item.stato}}</td>
                    <td>\t       
                        <a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href={{ path('SPordine', {'idordine': item.codiceordine})}}><i class=\"icon-zoom-in\"></i> Analizza</a>
                    </td>
                </tr>
            {%endfor%}
            </tbody>
    </table>
</section>
{% endblock %}", "AppBundle:ResponsabileProduzione:conclusi.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/ResponsabileProduzione/conclusi.html.twig");
    }
}
