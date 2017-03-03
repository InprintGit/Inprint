<?php

/* AppBundle:Prinkino:prova.html.twig */
class __TwigTemplate_bd8b0e65646b253d55898b3d211711ff3d47c642133bdfb71214b2496a7405c6 extends Twig_Template
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
        $__internal_5d489e03286299f2575b23564906b438d5b4d2a849661a220ed4d57976004028 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d489e03286299f2575b23564906b438d5b4d2a849661a220ed4d57976004028->enter($__internal_5d489e03286299f2575b23564906b438d5b4d2a849661a220ed4d57976004028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Prinkino:prova.html.twig"));

        // line 1
        echo "<!-- Gestione tabella ricerca clienti!-->
<div class=\"row-fluid\" id=\"boxTable\">
    <table id=\"tabella\" class=\"table table-hover\">
        <thead>
            <tr>
                <th class=\"span3\">Nome</th>
                <th class=\"span2\"><span class=\"line\"></span>Codice Cliente</th>
                <th class=\"span2\"><span class=\"line\"></span>Codice Fiscale</th>
                <th class=\"span2\"><span class=\"line\"></span>Mail</th>
                <th class=\"span2\"><span class=\"line\"></span>Ordini effettuati</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clienti"]) ? $context["clienti"] : $this->getContext($context, "clienti")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 15
            echo "                <tr class=\"first\">
                    <td style=\"cursor:pointer;\" >";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nome", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "cognome", array()), "html", null, true);
            echo "</td>
                    <td style=\"cursor:pointer;\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "codicecliente", array()), "html", null, true);
            echo "</td>
                    <td style=\"cursor:pointer;\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "codiceFiscale", array()), "html", null, true);
            echo "</td>
                    <td style=\"cursor:pointer;\" >";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "mail", array()), "html", null, true);
            echo "</td>
                    <td style=\"cursor:pointer;\">
                        <a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cliente", array("idcliente" => $this->getAttribute($context["item"], "codicecliente", array()))), "html", null, true);
            echo "><i class=\"icon-zoom-in\"></i> Analizza</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </tbody>
    </table>
</div>";
        
        $__internal_5d489e03286299f2575b23564906b438d5b4d2a849661a220ed4d57976004028->leave($__internal_5d489e03286299f2575b23564906b438d5b4d2a849661a220ed4d57976004028_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Prinkino:prova.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 25,  63 => 21,  58 => 19,  54 => 18,  50 => 17,  44 => 16,  41 => 15,  37 => 14,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Gestione tabella ricerca clienti!-->
<div class=\"row-fluid\" id=\"boxTable\">
    <table id=\"tabella\" class=\"table table-hover\">
        <thead>
            <tr>
                <th class=\"span3\">Nome</th>
                <th class=\"span2\"><span class=\"line\"></span>Codice Cliente</th>
                <th class=\"span2\"><span class=\"line\"></span>Codice Fiscale</th>
                <th class=\"span2\"><span class=\"line\"></span>Mail</th>
                <th class=\"span2\"><span class=\"line\"></span>Ordini effettuati</th>
            </tr>
        </thead>
        <tbody>
            {%for item in clienti%}
                <tr class=\"first\">
                    <td style=\"cursor:pointer;\" >{{item.nome}} {{item.cognome}}</td>
                    <td style=\"cursor:pointer;\">{{item.codicecliente}}</td>
                    <td style=\"cursor:pointer;\">{{item.codiceFiscale}}</td>
                    <td style=\"cursor:pointer;\" >{{item.mail}}</td>
                    <td style=\"cursor:pointer;\">
                        <a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href={{ path('cliente', {'idcliente': item.codicecliente})}}><i class=\"icon-zoom-in\"></i> Analizza</a>
                    </td>
                </tr>
            {%endfor%}
        </tbody>
    </table>
</div>", "AppBundle:Prinkino:prova.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Prinkino/prova.html.twig");
    }
}
