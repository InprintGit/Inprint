<?php

/* AppBundle:Amministratore:TabellaCategoria.html.twig */
class __TwigTemplate_0e11c918b2564bf558f2521e1f133329878344983684d505aa2c377af1bbf8d7 extends Twig_Template
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
        $__internal_e07b977ffb8ab78838f560062bb5cbcf720fdfd9664d312161db5409049a1535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e07b977ffb8ab78838f560062bb5cbcf720fdfd9664d312161db5409049a1535->enter($__internal_e07b977ffb8ab78838f560062bb5cbcf720fdfd9664d312161db5409049a1535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Amministratore:TabellaCategoria.html.twig"));

        // line 1
        echo "<table class=\"table table-hover\">
    <thead> 
        <tr>
            <th class=\"span2\">Id</th>
            <th class=\"span2\">Nome</th>
            <th class=\"span2\">Descrizione</th>
            <th class=\"span2\">Immagine</th>
            <th class=\"span2\">Padre</th> 
        </tr>
    </thead>
    <tbody>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "        <tr class=\"first\">
            <td> ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo " </td>
            <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nome", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "descrizione", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "immagine", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "padre", array()), "html", null, true);
            echo "</td>
            <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=\"ordine.html\">Cambia</a></td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </tbody>
</table>";
        
        $__internal_e07b977ffb8ab78838f560062bb5cbcf720fdfd9664d312161db5409049a1535->leave($__internal_e07b977ffb8ab78838f560062bb5cbcf720fdfd9664d312161db5409049a1535_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Amministratore:TabellaCategoria.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 22,  58 => 18,  54 => 17,  50 => 16,  46 => 15,  42 => 14,  39 => 13,  35 => 12,  22 => 1,);
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
            <th class=\"span2\">Descrizione</th>
            <th class=\"span2\">Immagine</th>
            <th class=\"span2\">Padre</th> 
        </tr>
    </thead>
    <tbody>
    {%for item in categorie%}
        <tr class=\"first\">
            <td> {{item.id}} </td>
            <td>{{item.nome}}</td>
            <td>{{item.descrizione}}</td>
            <td>{{item.immagine}}</td>
            <td>{{item.padre}}</td>
            <td><a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=\"ordine.html\">Cambia</a></td>
        </tr>
    {%endfor%}
    </tbody>
</table>", "AppBundle:Amministratore:TabellaCategoria.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Amministratore/TabellaCategoria.html.twig");
    }
}
