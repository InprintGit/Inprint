<?php

/* AppBundle:Amministratore:TabellaAttributi.html.twig */
class __TwigTemplate_a74cbbf6a684ec409e10053320c3a16cef08e0c80c61b790d8546bd06148a292 extends Twig_Template
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
        $__internal_f556a3f845ab72658086d1f896bc5dcd4b878e6880b8703717ed0defa9e9f752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f556a3f845ab72658086d1f896bc5dcd4b878e6880b8703717ed0defa9e9f752->enter($__internal_f556a3f845ab72658086d1f896bc5dcd4b878e6880b8703717ed0defa9e9f752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Amministratore:TabellaAttributi.html.twig"));

        // line 1
        echo "<table class=\"table table-hover\">
    <thead> 
        <tr><th class=\"span2\">Id</th><th class=\"span2\">Nome</th><th class=\"span2\">Numero valori</th></tr>
    </thead>
    <tbody>
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attributi"]) ? $context["attributi"] : $this->getContext($context, "attributi")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 7
            echo "        <tr class=\"first\">
            <td> ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo " </td>
            <td>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nome", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "valori", array()), "html", null, true);
            echo "</td>\t\t\t\t\t\t        
            <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=\"ordine.html\">Cambia</a></td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </tbody>
</table>";
        
        $__internal_f556a3f845ab72658086d1f896bc5dcd4b878e6880b8703717ed0defa9e9f752->leave($__internal_f556a3f845ab72658086d1f896bc5dcd4b878e6880b8703717ed0defa9e9f752_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Amministratore:TabellaAttributi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 14,  44 => 10,  40 => 9,  36 => 8,  33 => 7,  29 => 6,  22 => 1,);
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
        <tr><th class=\"span2\">Id</th><th class=\"span2\">Nome</th><th class=\"span2\">Numero valori</th></tr>
    </thead>
    <tbody>
    {%for item in attributi%}
        <tr class=\"first\">
            <td> {{item.id}} </td>
            <td>{{item.nome}}</td>
            <td>{{item.valori}}</td>\t\t\t\t\t\t        
            <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=\"ordine.html\">Cambia</a></td>
        </tr>
    {%endfor%}
    </tbody>
</table>", "AppBundle:Amministratore:TabellaAttributi.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Amministratore/TabellaAttributi.html.twig");
    }
}
