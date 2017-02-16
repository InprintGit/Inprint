<?php

/* AppBundle:Prinkino:prodotto.html.twig */
class __TwigTemplate_f323969a455b740557175a1580769f88dd87ab76b034c109b80988988727efec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Prinkino:prodotto.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'corpo' => array($this, 'block_corpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5ede8f5e68e03bfbd3acd051c70bfae4e6a0baf69bb2d9898dd3d734341ac81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5ede8f5e68e03bfbd3acd051c70bfae4e6a0baf69bb2d9898dd3d734341ac81->enter($__internal_e5ede8f5e68e03bfbd3acd051c70bfae4e6a0baf69bb2d9898dd3d734341ac81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Prinkino:prodotto.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5ede8f5e68e03bfbd3acd051c70bfae4e6a0baf69bb2d9898dd3d734341ac81->leave($__internal_e5ede8f5e68e03bfbd3acd051c70bfae4e6a0baf69bb2d9898dd3d734341ac81_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_553452cfbe25bf41f3e283403546ba9608d36d75dc9d26c8063242a1a4eb5763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_553452cfbe25bf41f3e283403546ba9608d36d75dc9d26c8063242a1a4eb5763->enter($__internal_553452cfbe25bf41f3e283403546ba9608d36d75dc9d26c8063242a1a4eb5763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Prodotto'";
        
        $__internal_553452cfbe25bf41f3e283403546ba9608d36d75dc9d26c8063242a1a4eb5763->leave($__internal_553452cfbe25bf41f3e283403546ba9608d36d75dc9d26c8063242a1a4eb5763_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2e5dd3193d34c044587defc8277d91a3a01e18dda501f76e82b7bf4fd11d23f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e5dd3193d34c044587defc8277d91a3a01e18dda501f76e82b7bf4fd11d23f3->enter($__internal_2e5dd3193d34c044587defc8277d91a3a01e18dda501f76e82b7bf4fd11d23f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "     ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
     <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/prodotto.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_2e5dd3193d34c044587defc8277d91a3a01e18dda501f76e82b7bf4fd11d23f3->leave($__internal_2e5dd3193d34c044587defc8277d91a3a01e18dda501f76e82b7bf4fd11d23f3_prof);

    }

    // line 9
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_166f0b046c6b776e1cb72fc3eaff3f0fd8fb94bc96b2055e3c2d72a5cbc9efa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_166f0b046c6b776e1cb72fc3eaff3f0fd8fb94bc96b2055e3c2d72a5cbc9efa8->enter($__internal_166f0b046c6b776e1cb72fc3eaff3f0fd8fb94bc96b2055e3c2d72a5cbc9efa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 10
        echo "
<div class=\"row loading_element\" style=\"visibility: visible;\">
    <div class=\"col-xs-12 top-10\">
        <div id=\"features\">
            <div class=\"panel panel-default feature feature-select\" id=\"ui-10612\">
                <div class=\"panel-heading\">
                    <h4>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["attributo"]) ? $context["attributo"] : $this->getContext($context, "attributo")), "producibile", array()), "html", null, true);
        echo ":</h4>                                
                </div>
            </div>
            <div class=\"panel panel-default feature feature-gallery\" id=\"ui-11360\">
                <div class=\"panel-heading\" id=\"attributo\">
                    <form id=\"form\">
                        <div id=\"select\" class=\"row\">
                            <h4>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["attributo"]) ? $context["attributo"] : $this->getContext($context, "attributo")), "Nome", array()), "html", null, true);
        echo "</h4>
                            <div class=\"col-xs-12\">
                                <div class=\"feature-slick slick slick-initialized slick-slider\" id=\"11360\">
                                    <div aria-live=\"polite\" class=\"slick-list draggable\">
                                        <div class=\"slick-track\" style=\"opacity: 1; width: 236px; left: 0px;\" role=\"listbox\">
                                            <div class=\"item col-xs-6 col-sm-3 col-md-1-5th  slick-slide slick-current slick-active\" id=\"11362\" data-slick-index=\"0\" aria-hidden=\"false\" tabindex=\"-1\" role=\"option\" aria-describedby=\"slick-slide10\" style=\"width: 118px;\">
                                                <div class=\"field-box\" align=\"left\">                                    
                                                    <div style=\"width: 254px\" class=\"select2-container select2\"> 
                                                        <select name=\"pval\" style=\"width: 254px;\" class=\"select2\" id=\"pval1\">
                                                        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["valori"]) ? $context["valori"] : $this->getContext($context, "valori")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 33
            echo "                                                            <option value=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "idvalore", array()), "html", null, true);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "valore", array()), "html", null, true);
            echo "</option>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"panel panel-default feature feature-select\" id=\"ui-9853\">
                            <div class=\"panel-heading\">
                                <div class=\"row\">
                                    <a id=\"ok\" type=\"submit\" onclick=attributo(";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["idproducibile"]) ? $context["idproducibile"] : $this->getContext($context, "idproducibile")), "html", null, true);
        echo ") style=\"color: rgb(70, 70, 70); font-weight: bold; \"  class=\"add_carrello btn btn-lg col-xs-10 col-sm-12 col-xs-offset-1 col-sm-offset-0 top-20 bottom-5 btn-cart-custom\" data-invalid=\"vai avanti\" data-valid=\"Vai avanti\" data-position=\"right-btn\"> ok</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>\t        
    </div>
</div>
";
        
        $__internal_166f0b046c6b776e1cb72fc3eaff3f0fd8fb94bc96b2055e3c2d72a5cbc9efa8->leave($__internal_166f0b046c6b776e1cb72fc3eaff3f0fd8fb94bc96b2055e3c2d72a5cbc9efa8_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Prinkino:prodotto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 47,  119 => 35,  108 => 33,  104 => 32,  92 => 23,  82 => 16,  74 => 10,  68 => 9,  59 => 7,  54 => 6,  48 => 5,  36 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"::base.html.twig\" %}

{% block title %}Prodotto'{% endblock %}
{% block stylesheets %}
     {{ parent() }}
     <link href=\"{{ asset('prinkino/style/prodotto.css') }}\" rel=\"stylesheet\" />
{% endblock %}
{% block corpo %}

<div class=\"row loading_element\" style=\"visibility: visible;\">
    <div class=\"col-xs-12 top-10\">
        <div id=\"features\">
            <div class=\"panel panel-default feature feature-select\" id=\"ui-10612\">
                <div class=\"panel-heading\">
                    <h4>{{ attributo.producibile}}:</h4>                                
                </div>
            </div>
            <div class=\"panel panel-default feature feature-gallery\" id=\"ui-11360\">
                <div class=\"panel-heading\" id=\"attributo\">
                    <form id=\"form\">
                        <div id=\"select\" class=\"row\">
                            <h4>{{attributo.Nome}}</h4>
                            <div class=\"col-xs-12\">
                                <div class=\"feature-slick slick slick-initialized slick-slider\" id=\"11360\">
                                    <div aria-live=\"polite\" class=\"slick-list draggable\">
                                        <div class=\"slick-track\" style=\"opacity: 1; width: 236px; left: 0px;\" role=\"listbox\">
                                            <div class=\"item col-xs-6 col-sm-3 col-md-1-5th  slick-slide slick-current slick-active\" id=\"11362\" data-slick-index=\"0\" aria-hidden=\"false\" tabindex=\"-1\" role=\"option\" aria-describedby=\"slick-slide10\" style=\"width: 118px;\">
                                                <div class=\"field-box\" align=\"left\">                                    
                                                    <div style=\"width: 254px\" class=\"select2-container select2\"> 
                                                        <select name=\"pval\" style=\"width: 254px;\" class=\"select2\" id=\"pval1\">
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
                        </div>
                        <div class=\"panel panel-default feature feature-select\" id=\"ui-9853\">
                            <div class=\"panel-heading\">
                                <div class=\"row\">
                                    <a id=\"ok\" type=\"submit\" onclick=attributo({{idproducibile}}) style=\"color: rgb(70, 70, 70); font-weight: bold; \"  class=\"add_carrello btn btn-lg col-xs-10 col-sm-12 col-xs-offset-1 col-sm-offset-0 top-20 bottom-5 btn-cart-custom\" data-invalid=\"vai avanti\" data-valid=\"Vai avanti\" data-position=\"right-btn\"> ok</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>\t        
    </div>
</div>
{% endblock %}                        ", "AppBundle:Prinkino:prodotto.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Prinkino/prodotto.html.twig");
    }
}
