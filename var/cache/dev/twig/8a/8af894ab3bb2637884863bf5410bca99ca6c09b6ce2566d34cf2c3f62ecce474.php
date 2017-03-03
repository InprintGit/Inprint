<?php

/* AppBundle:Amministratore:TabellaGruppo.html.twig */
class __TwigTemplate_98754bedd99a9d26027d40be632d577767b3e718616792b916556a3f8be350cd extends Twig_Template
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
        $__internal_36028f363e0298fb765d981d9180ba7ca174375f521ead7b50602d1d6ffccbda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36028f363e0298fb765d981d9180ba7ca174375f521ead7b50602d1d6ffccbda->enter($__internal_36028f363e0298fb765d981d9180ba7ca174375f521ead7b50602d1d6ffccbda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Amministratore:TabellaGruppo.html.twig"));

        // line 1
        echo "<table class=\"table table-hover\">
    <thead> 
        <tr>
            <th class=\"span2\">Id</th>
            <th class=\"span2\">Nome</th>
            <th class=\"span2\"></th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["set"]) ? $context["set"] : $this->getContext($context, "set")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "        <tr class=\"first\">
            <td> ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo " </td>
            <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nome", array()), "html", null, true);
            echo "</td>\t\t\t\t\t\t        
            <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=\"ordine.html\">Cambia</a></td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </tbody>
</table>";
        
        $__internal_36028f363e0298fb765d981d9180ba7ca174375f521ead7b50602d1d6ffccbda->leave($__internal_36028f363e0298fb765d981d9180ba7ca174375f521ead7b50602d1d6ffccbda_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Amministratore:TabellaGruppo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 17,  44 => 13,  40 => 12,  37 => 11,  33 => 10,  22 => 1,);
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
            <th class=\"span2\">Id</th>
            <th class=\"span2\">Nome</th>
            <th class=\"span2\"></th>
        </tr>
    </thead>
    <tbody>
    {%for item in set%}
        <tr class=\"first\">
            <td> {{item.id}} </td>
            <td>{{item.nome}}</td>\t\t\t\t\t\t        
            <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=\"ordine.html\">Cambia</a></td>
        </tr>
    {%endfor%}
    </tbody>
</table>", "AppBundle:Amministratore:TabellaGruppo.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Amministratore/TabellaGruppo.html.twig");
    }
}
