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
        $__internal_1651fe6a7218ace1954998405c30e05dad9645d5e23d8c81dc096c42c6f5298d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1651fe6a7218ace1954998405c30e05dad9645d5e23d8c81dc096c42c6f5298d->enter($__internal_1651fe6a7218ace1954998405c30e05dad9645d5e23d8c81dc096c42c6f5298d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Prinkino:prodotto.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1651fe6a7218ace1954998405c30e05dad9645d5e23d8c81dc096c42c6f5298d->leave($__internal_1651fe6a7218ace1954998405c30e05dad9645d5e23d8c81dc096c42c6f5298d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc96ec37038594ca45ffda9e2cb458774b45819e0ece6412521dd9faecfa4b82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc96ec37038594ca45ffda9e2cb458774b45819e0ece6412521dd9faecfa4b82->enter($__internal_cc96ec37038594ca45ffda9e2cb458774b45819e0ece6412521dd9faecfa4b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Prodotto'";
        
        $__internal_cc96ec37038594ca45ffda9e2cb458774b45819e0ece6412521dd9faecfa4b82->leave($__internal_cc96ec37038594ca45ffda9e2cb458774b45819e0ece6412521dd9faecfa4b82_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ecbd34ca4755781e5f40a70dbb3f795e254977b0c2dfc049f1aba00caed3b5ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecbd34ca4755781e5f40a70dbb3f795e254977b0c2dfc049f1aba00caed3b5ef->enter($__internal_ecbd34ca4755781e5f40a70dbb3f795e254977b0c2dfc049f1aba00caed3b5ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "     ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
     <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/prodotto.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_ecbd34ca4755781e5f40a70dbb3f795e254977b0c2dfc049f1aba00caed3b5ef->leave($__internal_ecbd34ca4755781e5f40a70dbb3f795e254977b0c2dfc049f1aba00caed3b5ef_prof);

    }

    // line 9
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_9b89fce00c465f6dc29087ff830222d863371f9a4e66e27c87c24689b7f4713b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b89fce00c465f6dc29087ff830222d863371f9a4e66e27c87c24689b7f4713b->enter($__internal_9b89fce00c465f6dc29087ff830222d863371f9a4e66e27c87c24689b7f4713b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

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
                <div class=\"panel-heading\">
                    <form action=";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("articolo", array("idproducibile" => (isset($context["idproducibile"]) ? $context["idproducibile"] : $this->getContext($context, "idproducibile")), "precedente" => (isset($context["precedente"]) ? $context["precedente"] : $this->getContext($context, "precedente")))), "html", null, true);
        echo ">
                        <div class=\"row\">
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
                                                    <div style=\"width: 254px\" id=\"s2id_selectCountry1470146739\" class=\"select2-container select2\"> 
                                                        <select name=\"pval\" style=\"width: 254px;\" class=\"select2\" id=\"selectCountry1470146739\">
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
                                    <input type=\"submit\" style=\"color: rgb(70, 70, 70); font-weight: bold; \" href=\"NewOrdineCatalogo/clienti.html\" class=\"add_carrello btn btn-lg col-xs-10 col-sm-12 col-xs-offset-1 col-sm-offset-0 top-20 bottom-5 btn-cart-custom\" data-invalid=\"vai avanti\" data-valid=\"Vai avanti\" data-position=\"right-btn\">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>\t        
    </div>
";
        
        $__internal_9b89fce00c465f6dc29087ff830222d863371f9a4e66e27c87c24689b7f4713b->leave($__internal_9b89fce00c465f6dc29087ff830222d863371f9a4e66e27c87c24689b7f4713b_prof);

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
        return array (  122 => 35,  111 => 33,  107 => 32,  95 => 23,  90 => 21,  82 => 16,  74 => 10,  68 => 9,  59 => 7,  54 => 6,  48 => 5,  36 => 4,  11 => 2,);
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
                <div class=\"panel-heading\">
                    <form action={{ path('articolo', {'idproducibile':idproducibile, 'precedente':precedente})}}>
                        <div class=\"row\">
                            <h4>{{attributo.Nome}}</h4>
                            <div class=\"col-xs-12\">
                                <div class=\"feature-slick slick slick-initialized slick-slider\" id=\"11360\">
                                    <div aria-live=\"polite\" class=\"slick-list draggable\">
                                        <div class=\"slick-track\" style=\"opacity: 1; width: 236px; left: 0px;\" role=\"listbox\">
                                            <div class=\"item col-xs-6 col-sm-3 col-md-1-5th  slick-slide slick-current slick-active\" id=\"11362\" data-slick-index=\"0\" aria-hidden=\"false\" tabindex=\"-1\" role=\"option\" aria-describedby=\"slick-slide10\" style=\"width: 118px;\">
                                                <div class=\"field-box\" align=\"left\">                                    
                                                    <div style=\"width: 254px\" id=\"s2id_selectCountry1470146739\" class=\"select2-container select2\"> 
                                                        <select name=\"pval\" style=\"width: 254px;\" class=\"select2\" id=\"selectCountry1470146739\">
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
                                    <input type=\"submit\" style=\"color: rgb(70, 70, 70); font-weight: bold; \" href=\"NewOrdineCatalogo/clienti.html\" class=\"add_carrello btn btn-lg col-xs-10 col-sm-12 col-xs-offset-1 col-sm-offset-0 top-20 bottom-5 btn-cart-custom\" data-invalid=\"vai avanti\" data-valid=\"Vai avanti\" data-position=\"right-btn\">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>\t        
    </div>
{% endblock %}                        ", "AppBundle:Prinkino:prodotto.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Prinkino/prodotto.html.twig");
    }
}
