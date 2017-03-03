<?php

/* AppBundle:Amministratore:TabellaArticoli.html.twig */
class __TwigTemplate_12493e61debe57f4bd4e53cf8501cc71a74bdbf49bc9a23b2e967054aa17608c extends Twig_Template
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
        $__internal_b70be0be9db571291a0d71b8d074904290c8737dca23d0257695d1f91b83cfba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b70be0be9db571291a0d71b8d074904290c8737dca23d0257695d1f91b83cfba->enter($__internal_b70be0be9db571291a0d71b8d074904290c8737dca23d0257695d1f91b83cfba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Amministratore:TabellaArticoli.html.twig"));

        // line 1
        echo "<table  class=\"table table-hover\">
    <thead> 
        <tr>
            <th class=\"span2\">Id</th>
            <th class=\"span2\">Denominazione</th>
            <th class=\"span2\">Prezzo vendita</th>
            <th class=\"span2\"> Gruppo attributi</th>
            <th class=\"span2\"></th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articoli"]) ? $context["articoli"] : $this->getContext($context, "articoli")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "        <tr class=\"first\">
            <td> ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo " </td>
            <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "denominazione", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "prezzoVendita", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "producibileId", array()), "html", null, true);
            echo "</td>
            <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=\"ordine.html\">Cambia</a></td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </tbody>
</table>";
        
        $__internal_b70be0be9db571291a0d71b8d074904290c8737dca23d0257695d1f91b83cfba->leave($__internal_b70be0be9db571291a0d71b8d074904290c8737dca23d0257695d1f91b83cfba_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Amministratore:TabellaArticoli.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 21,  54 => 17,  50 => 16,  46 => 15,  42 => 14,  39 => 13,  35 => 12,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table  class=\"table table-hover\">
    <thead> 
        <tr>
            <th class=\"span2\">Id</th>
            <th class=\"span2\">Denominazione</th>
            <th class=\"span2\">Prezzo vendita</th>
            <th class=\"span2\"> Gruppo attributi</th>
            <th class=\"span2\"></th>
        </tr>
    </thead>
    <tbody>
        {%for item in articoli%}
        <tr class=\"first\">
            <td> {{item.id}} </td>
            <td>{{item.denominazione}}</td>
            <td>{{item.prezzoVendita}}</td>
            <td>{{item.producibileId}}</td>
            <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=\"ordine.html\">Cambia</a></td>
        </tr>
        {%endfor%}
    </tbody>
</table>", "AppBundle:Amministratore:TabellaArticoli.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Amministratore/TabellaArticoli.html.twig");
    }
}
