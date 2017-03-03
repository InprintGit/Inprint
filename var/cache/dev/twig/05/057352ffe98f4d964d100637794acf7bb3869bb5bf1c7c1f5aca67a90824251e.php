<?php

/* AppBundle:Amministratore:TabellaProducibile.html.twig */
class __TwigTemplate_0cf3b2d75cad78172ddf4471643ce642774f40ee7e8c97903301db26475f32e3 extends Twig_Template
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
        $__internal_22843529054f55a6b58485ee30dee685ae5a4cca62df55bc4fb51037d92eeceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22843529054f55a6b58485ee30dee685ae5a4cca62df55bc4fb51037d92eeceb->enter($__internal_22843529054f55a6b58485ee30dee685ae5a4cca62df55bc4fb51037d92eeceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Amministratore:TabellaProducibile.html.twig"));

        // line 1
        echo "<table class=\"table table-hover\">
    <thead> 
        <tr>
            <th class=\"span2\">Codice</th>
            <th class=\"span2\">Nome</th>
            <th class=\"span2\">Descrizione</th>
            <th class=\"span2\">Gruppo</th>
            <th class=\"span2\">Compenso Grafico</th>
            <th class=\"span2\"></th>  
        </tr>
    </thead>
    <tbody>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["producibili"]) ? $context["producibili"] : $this->getContext($context, "producibili")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 14
            echo "        <tr class=\"first\">
            <td> ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo " </td>
            <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nome", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "descrizione", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "gruppoId", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "compensoGrafico", array()), "html", null, true);
            echo "</td>
            <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=\"ordine.html\">Cambia</a></td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </tbody>
</table>";
        
        $__internal_22843529054f55a6b58485ee30dee685ae5a4cca62df55bc4fb51037d92eeceb->leave($__internal_22843529054f55a6b58485ee30dee685ae5a4cca62df55bc4fb51037d92eeceb_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Amministratore:TabellaProducibile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 23,  59 => 19,  55 => 18,  51 => 17,  47 => 16,  43 => 15,  40 => 14,  36 => 13,  22 => 1,);
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
    <thead> 
        <tr>
            <th class=\"span2\">Codice</th>
            <th class=\"span2\">Nome</th>
            <th class=\"span2\">Descrizione</th>
            <th class=\"span2\">Gruppo</th>
            <th class=\"span2\">Compenso Grafico</th>
            <th class=\"span2\"></th>  
        </tr>
    </thead>
    <tbody>
    {%for item in producibili%}
        <tr class=\"first\">
            <td> {{item.id}} </td>
            <td>{{item.nome}}</td>
            <td>{{item.descrizione}}</td>
            <td>{{item.gruppoId}}</td>
            <td>{{item.compensoGrafico}}</td>
            <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=\"ordine.html\">Cambia</a></td>
        </tr>
    {%endfor%}
    </tbody>
</table>", "AppBundle:Amministratore:TabellaProducibile.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Amministratore/TabellaProducibile.html.twig");
    }
}
