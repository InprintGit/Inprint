<?php

/* AppBundle:ResponsabileProduzione:home.html.twig */
class __TwigTemplate_657f931f1cf276930fca108eb3e584a56673bf091c124275da75027a2ab0c4ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:ResponsabileProduzione:SPbase.html.twig", "AppBundle:ResponsabileProduzione:home.html.twig", 1);
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
        $__internal_44da790144f6e7c0f6cd85faf97b5a9013eaccb78fcea89869905f8e2341a28f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44da790144f6e7c0f6cd85faf97b5a9013eaccb78fcea89869905f8e2341a28f->enter($__internal_44da790144f6e7c0f6cd85faf97b5a9013eaccb78fcea89869905f8e2341a28f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:ResponsabileProduzione:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44da790144f6e7c0f6cd85faf97b5a9013eaccb78fcea89869905f8e2341a28f->leave($__internal_44da790144f6e7c0f6cd85faf97b5a9013eaccb78fcea89869905f8e2341a28f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa8b9c7d06e830523362abe3dee45cbf20c58bd4b7092d4982f28009dadc44e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa8b9c7d06e830523362abe3dee45cbf20c58bd4b7092d4982f28009dadc44e2->enter($__internal_fa8b9c7d06e830523362abe3dee45cbf20c58bd4b7092d4982f28009dadc44e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
        $__internal_fa8b9c7d06e830523362abe3dee45cbf20c58bd4b7092d4982f28009dadc44e2->leave($__internal_fa8b9c7d06e830523362abe3dee45cbf20c58bd4b7092d4982f28009dadc44e2_prof);

    }

    // line 5
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_fa611c486761cf23495442a9eec75d4233fe536afae4dc4b5e144bd60a90db13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa611c486761cf23495442a9eec75d4233fe536afae4dc4b5e144bd60a90db13->enter($__internal_fa611c486761cf23495442a9eec75d4233fe536afae4dc4b5e144bd60a90db13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 6
        echo "
<section class=\"top\">
    <h4>Benvenuto Responsabile produzione</h4>
</section>
    <section class=\"ric\">
        <div>
            <h4>Ricerca</h4>
            <input class=\"search\" name=\"\" placeholder=\"nome cliente, numero ordine...\"><a class=\"btn-flat primary\" href=\"\">  Ricerca </a>
        </div>
    </section>
    <section class=\"t1\" >
        <table class=\"table table-hover\">
            <caption> <h4>Lavori - <span>da eseguire </span></h4></caption>
            <thead> 
                <tr><th class=\"span3\">Descrizione</th><th class=\"span4\">Codice lavorazione</th><th class=\"span4\">data</th><th class=\"span4\">STATO</th><th class=\"span4\"> </th></tr>
            </thead>
            <tbody>
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eseguire"]) ? $context["eseguire"] : $this->getContext($context, "eseguire")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 24
            echo "                <tr class=\"first\">
                    <td> ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "descrizione", array()), "html", null, true);
            echo "  </td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "codiceordine", array()), "html", null, true);
            echo "</td>
                    <td><time datetime=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "data", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "data", array()), "html", null, true);
            echo " </time></td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "stato", array()), "html", null, true);
            echo "</td>
                    <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("SPordine", array("idordine" => $this->getAttribute($context["item"], "codiceordine", array()))), "html", null, true);
            echo "><i class=\"icon-zoom-in\"></i> Analizza</a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            </tbody>
        </table>
    </section>
    <section class=\"t1\" >
        <table class=\"table table-hover\">
            <caption> <h4>Lavori - <span>in produzione </span></h4></caption>
            <thead> 
                <tr><th class=\"span3\">Descrizione</th><th class=\"span4\">Codice lavorazione</th><th class=\"span4\">data</th><th class=\"span4\">STATO</th><th class=\"span4\"></th></tr>
            </thead>
            <tbody>
            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produzione"]) ? $context["produzione"] : $this->getContext($context, "produzione")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 43
            echo "                <tr class=\"first\">
                    <td> ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "descrizione", array()), "html", null, true);
            echo "  </td>
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "codiceordine", array()), "html", null, true);
            echo "</td>
                    <td><time datetime=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "data", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "data", array()), "html", null, true);
            echo " </time></td>
                    <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "stato", array()), "html", null, true);
            echo "</td>
                    <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("SPordine", array("idordine" => $this->getAttribute($context["item"], "codiceordine", array()))), "html", null, true);
            echo "><i class=\"icon-zoom-in\"></i> Analizza</a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                <tr class=\"dettagli\" id=\"dettagli11\"> <td colspan=\"4\"> il presente div contiene i dettagli dell'elemento 1 </td></tr>
            </tbody>
        </table>
    </section>
";
        
        $__internal_fa611c486761cf23495442a9eec75d4233fe536afae4dc4b5e144bd60a90db13->leave($__internal_fa611c486761cf23495442a9eec75d4233fe536afae4dc4b5e144bd60a90db13_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:ResponsabileProduzione:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 51,  143 => 48,  139 => 47,  133 => 46,  129 => 45,  125 => 44,  122 => 43,  118 => 42,  106 => 32,  97 => 29,  93 => 28,  87 => 27,  83 => 26,  79 => 25,  76 => 24,  72 => 23,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}Home{% endblock %}

{% block corpo %}

<section class=\"top\">
    <h4>Benvenuto Responsabile produzione</h4>
</section>
    <section class=\"ric\">
        <div>
            <h4>Ricerca</h4>
            <input class=\"search\" name=\"\" placeholder=\"nome cliente, numero ordine...\"><a class=\"btn-flat primary\" href=\"\">  Ricerca </a>
        </div>
    </section>
    <section class=\"t1\" >
        <table class=\"table table-hover\">
            <caption> <h4>Lavori - <span>da eseguire </span></h4></caption>
            <thead> 
                <tr><th class=\"span3\">Descrizione</th><th class=\"span4\">Codice lavorazione</th><th class=\"span4\">data</th><th class=\"span4\">STATO</th><th class=\"span4\"> </th></tr>
            </thead>
            <tbody>
            {%for item in eseguire%}
                <tr class=\"first\">
                    <td> {{item.descrizione}}  </td>
                    <td>{{item.codiceordine}}</td>
                    <td><time datetime=\"{{item.data}}\">{{item.data}} </time></td>
                    <td>{{item.stato}}</td>
                    <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href={{ path('SPordine', {'idordine': item.codiceordine})}}><i class=\"icon-zoom-in\"></i> Analizza</a></td>
                </tr>
            {%endfor%}
            </tbody>
        </table>
    </section>
    <section class=\"t1\" >
        <table class=\"table table-hover\">
            <caption> <h4>Lavori - <span>in produzione </span></h4></caption>
            <thead> 
                <tr><th class=\"span3\">Descrizione</th><th class=\"span4\">Codice lavorazione</th><th class=\"span4\">data</th><th class=\"span4\">STATO</th><th class=\"span4\"></th></tr>
            </thead>
            <tbody>
            {%for item in produzione%}
                <tr class=\"first\">
                    <td> {{item.descrizione}}  </td>
                    <td>{{item.codiceordine}}</td>
                    <td><time datetime=\"{{item.data}}\">{{item.data}} </time></td>
                    <td>{{item.stato}}</td>
                    <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href={{ path('SPordine', {'idordine': item.codiceordine})}}><i class=\"icon-zoom-in\"></i> Analizza</a></td>
                </tr>
            {%endfor%}
                <tr class=\"dettagli\" id=\"dettagli11\"> <td colspan=\"4\"> il presente div contiene i dettagli dell'elemento 1 </td></tr>
            </tbody>
        </table>
    </section>
{% endblock %}", "AppBundle:ResponsabileProduzione:home.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/ResponsabileProduzione/home.html.twig");
    }
}
