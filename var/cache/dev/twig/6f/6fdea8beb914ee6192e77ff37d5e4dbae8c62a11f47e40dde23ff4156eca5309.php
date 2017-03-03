<?php

/* AppBundle:Amministratore:RiepilogoProducibile.html.twig */
class __TwigTemplate_e399f47a66ae1705534d4e2f9fcd9d3e1d2cc1c9e504ba2f9c00bf52d0e947b1 extends Twig_Template
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
        $__internal_10390bb2978d990f404127ebbe14205dc5e8e4a7cf449f23a529ea058b1152b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10390bb2978d990f404127ebbe14205dc5e8e4a7cf449f23a529ea058b1152b1->enter($__internal_10390bb2978d990f404127ebbe14205dc5e8e4a7cf449f23a529ea058b1152b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Amministratore:RiepilogoProducibile.html.twig"));

        // line 1
        echo "il prodotto \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producibile"]) ? $context["producibile"] : $this->getContext($context, "producibile")), "nome", array()), "html", null, true);
        echo "\" è stato inserito con codice: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producibile"]) ? $context["producibile"] : $this->getContext($context, "producibile")), "id", array()), "html", null, true);
        echo "
<br>inoltre, appartiene alle categorie:

";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["appartenere"]) ? $context["appartenere"] : $this->getContext($context, "appartenere")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "    <br> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "idCategoria", array()), "html", null, true);
            echo " 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_10390bb2978d990f404127ebbe14205dc5e8e4a7cf449f23a529ea058b1152b1->leave($__internal_10390bb2978d990f404127ebbe14205dc5e8e4a7cf449f23a529ea058b1152b1_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Amministratore:RiepilogoProducibile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  31 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("il prodotto \"{{producibile.nome}}\" è stato inserito con codice: {{producibile.id}}
<br>inoltre, appartiene alle categorie:

{%for item in appartenere%}
    <br> {{item.idCategoria}} 
{%endfor%}", "AppBundle:Amministratore:RiepilogoProducibile.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Amministratore/RiepilogoProducibile.html.twig");
    }
}
