<?php

/* AppBundle:Prinkino:attributo.html.twig */
class __TwigTemplate_2778909d33a0d6bc0d1babdc2a43e0212488a82148754d5b19589ce690f0ffda extends Twig_Template
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
        $__internal_77193aa7eac4e16b0aa6fcc423b377b07f04e40737f3d6725ca5bc01735f9cd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77193aa7eac4e16b0aa6fcc423b377b07f04e40737f3d6725ca5bc01735f9cd6->enter($__internal_77193aa7eac4e16b0aa6fcc423b377b07f04e40737f3d6725ca5bc01735f9cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Prinkino:attributo.html.twig"));

        // line 1
        echo "<h4>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["attributo"]) ? $context["attributo"] : $this->getContext($context, "attributo")), "Nome", array()), "html", null, true);
        echo "</h4>
<div class=\"col-xs-12\">
    <div class=\"feature-slick slick slick-initialized slick-slider\" id=\"11360\">
        <div aria-live=\"polite\" class=\"slick-list draggable\">
            <div class=\"slick-track\" style=\"opacity: 1; width: 236px; left: 0px;\" role=\"listbox\">
                <div class=\"item col-xs-6 col-sm-3 col-md-1-5th  slick-slide slick-current slick-active\" id=\"11362\" data-slick-index=\"0\" aria-hidden=\"false\" tabindex=\"-1\" role=\"option\" aria-describedby=\"slick-slide10\" style=\"width: 118px;\">
                    <div class=\"field-box\" align=\"left\">                                    
                        <div style=\"width: 254px\" class=\"select2-container select2\"> 
                            <select name=\"pval";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["precedente"]) ? $context["precedente"] : $this->getContext($context, "precedente")), "html", null, true);
        echo "\" style=\"width: 254px;\" class=\"select2\" id=\"pval";
        echo twig_escape_filter($this->env, (isset($context["precedente"]) ? $context["precedente"] : $this->getContext($context, "precedente")), "html", null, true);
        echo "\">
                            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["valori"]) ? $context["valori"] : $this->getContext($context, "valori")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "                                <option value=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "idvalore", array()), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "valore", array()), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_77193aa7eac4e16b0aa6fcc423b377b07f04e40737f3d6725ca5bc01735f9cd6->leave($__internal_77193aa7eac4e16b0aa6fcc423b377b07f04e40737f3d6725ca5bc01735f9cd6_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Prinkino:attributo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 13,  44 => 11,  40 => 10,  34 => 9,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h4>{{attributo.Nome}}</h4>
<div class=\"col-xs-12\">
    <div class=\"feature-slick slick slick-initialized slick-slider\" id=\"11360\">
        <div aria-live=\"polite\" class=\"slick-list draggable\">
            <div class=\"slick-track\" style=\"opacity: 1; width: 236px; left: 0px;\" role=\"listbox\">
                <div class=\"item col-xs-6 col-sm-3 col-md-1-5th  slick-slide slick-current slick-active\" id=\"11362\" data-slick-index=\"0\" aria-hidden=\"false\" tabindex=\"-1\" role=\"option\" aria-describedby=\"slick-slide10\" style=\"width: 118px;\">
                    <div class=\"field-box\" align=\"left\">                                    
                        <div style=\"width: 254px\" class=\"select2-container select2\"> 
                            <select name=\"pval{{precedente}}\" style=\"width: 254px;\" class=\"select2\" id=\"pval{{precedente}}\">
                            {%for item in valori%}
                                <option value={{item.idvalore}}>{{item.valore}}</option>
                            {%endfor%}
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
", "AppBundle:Prinkino:attributo.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Prinkino/attributo.html.twig");
    }
}
