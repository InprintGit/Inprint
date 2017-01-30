<?php

/* AppBundle:ResponsabileProduzione:operatori.html.twig */
class __TwigTemplate_9a7d98ac670322f357d6e55b74c9425de210dbc13ca773aec92f3df9ff4a768e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:ResponsabileProduzione:BaseOperatori.html.twig", "AppBundle:ResponsabileProduzione:operatori.html.twig", 1);
        $this->blocks = array(
            'Ocorpo' => array($this, 'block_Ocorpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:ResponsabileProduzione:BaseOperatori.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8dbdf19ac255757d269576893e32b26a79cc09db8d5fe33f053274f454f03d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8dbdf19ac255757d269576893e32b26a79cc09db8d5fe33f053274f454f03d7->enter($__internal_a8dbdf19ac255757d269576893e32b26a79cc09db8d5fe33f053274f454f03d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:ResponsabileProduzione:operatori.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8dbdf19ac255757d269576893e32b26a79cc09db8d5fe33f053274f454f03d7->leave($__internal_a8dbdf19ac255757d269576893e32b26a79cc09db8d5fe33f053274f454f03d7_prof);

    }

    // line 2
    public function block_Ocorpo($context, array $blocks = array())
    {
        $__internal_fd7d7b8e7137cdfb4fd4dd23d07120519c7af230b152da4e020c647fc624b204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd7d7b8e7137cdfb4fd4dd23d07120519c7af230b152da4e020c647fc624b204->enter($__internal_fd7d7b8e7137cdfb4fd4dd23d07120519c7af230b152da4e020c647fc624b204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Ocorpo"));

        // line 3
        echo "
    <div id=\"operatore\">
        <section class=\"t1\" >
            <table class=\"table table-hover\">
                <caption> <h4>Elenco- <span>operatori</span></h4></caption>
                <thead> 
                    <tr>
                        <th class=\"span3\">Nome e cognome</th>
                        <th class=\"span4\">Codice lavoratore</th><th class=\"span4\">data nascita</th>
                        <th class=\"span4\"> </th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["operatori"]) ? $context["operatori"] : $this->getContext($context, "operatori")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 17
            echo "                    <tr class=\"first\">
                        <td> ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nome", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "cognome", array()), "html", null, true);
            echo " </td>
                        <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "</td>
                        <td><time datetime=\"2016-07-20\">";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "dataNascita", array()), "d-m-Y"), "html", null, true);
            echo " </time></td>
                        <td>\t       
                            <a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("SPoperatore", array("idOperatore" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "><i class=\"icon-zoom-in\"></i> Visualizza</a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                </tbody>  
            </table>
        </section>
    </div>
";
        
        $__internal_fd7d7b8e7137cdfb4fd4dd23d07120519c7af230b152da4e020c647fc624b204->leave($__internal_fd7d7b8e7137cdfb4fd4dd23d07120519c7af230b152da4e020c647fc624b204_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:ResponsabileProduzione:operatori.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 26,  77 => 22,  72 => 20,  68 => 19,  62 => 18,  59 => 17,  55 => 16,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle:ResponsabileProduzione:BaseOperatori.html.twig\" %}
{%block Ocorpo%}

    <div id=\"operatore\">
        <section class=\"t1\" >
            <table class=\"table table-hover\">
                <caption> <h4>Elenco- <span>operatori</span></h4></caption>
                <thead> 
                    <tr>
                        <th class=\"span3\">Nome e cognome</th>
                        <th class=\"span4\">Codice lavoratore</th><th class=\"span4\">data nascita</th>
                        <th class=\"span4\"> </th>
                    </tr>
                </thead>
                <tbody>
                {%for item in operatori%}
                    <tr class=\"first\">
                        <td> {{item.nome}} {{item.cognome}} </td>
                        <td>{{item.id}}</td>
                        <td><time datetime=\"2016-07-20\">{{item.dataNascita|date('d-m-Y')}} </time></td>
                        <td>\t       
                            <a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href={{ path('SPoperatore', {'idOperatore': item.id})}}><i class=\"icon-zoom-in\"></i> Visualizza</a>
                        </td>
                    </tr>
                {%endfor%}
                </tbody>  
            </table>
        </section>
    </div>
{%endblock%}", "AppBundle:ResponsabileProduzione:operatori.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/ResponsabileProduzione/operatori.html.twig");
    }
}
