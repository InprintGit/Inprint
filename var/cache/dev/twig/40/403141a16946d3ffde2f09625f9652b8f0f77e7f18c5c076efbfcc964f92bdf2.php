<?php

/* AppBundle:Prinkino:catalogo.html.twig */
class __TwigTemplate_e86c6c06de8a22c10822aa25b436ca8a2d9b92decabf8ffe0d04883931ef21dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Prinkino:catalogo.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'corpo' => array($this, 'block_corpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5b3f7a361bc6ab2aa5633fd7fd773b6b81059c576afdc5b155681fba3ee61ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5b3f7a361bc6ab2aa5633fd7fd773b6b81059c576afdc5b155681fba3ee61ed->enter($__internal_f5b3f7a361bc6ab2aa5633fd7fd773b6b81059c576afdc5b155681fba3ee61ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Prinkino:catalogo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5b3f7a361bc6ab2aa5633fd7fd773b6b81059c576afdc5b155681fba3ee61ed->leave($__internal_f5b3f7a361bc6ab2aa5633fd7fd773b6b81059c576afdc5b155681fba3ee61ed_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f1cbf9cca4b0af748db4d60beb610a8e294a32a158d7968b2b5975f9011ae54e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1cbf9cca4b0af748db4d60beb610a8e294a32a158d7968b2b5975f9011ae54e->enter($__internal_f1cbf9cca4b0af748db4d60beb610a8e294a32a158d7968b2b5975f9011ae54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "     ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
      <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/style/catalogo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_f1cbf9cca4b0af748db4d60beb610a8e294a32a158d7968b2b5975f9011ae54e->leave($__internal_f1cbf9cca4b0af748db4d60beb610a8e294a32a158d7968b2b5975f9011ae54e_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_10ad60a0a1ebc50f3a3c2425e293aa3758c0505be637726a081f87325c2a7927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ad60a0a1ebc50f3a3c2425e293aa3758c0505be637726a081f87325c2a7927->enter($__internal_10ad60a0a1ebc50f3a3c2425e293aa3758c0505be637726a081f87325c2a7927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Catalogo Prodotti";
        
        $__internal_10ad60a0a1ebc50f3a3c2425e293aa3758c0505be637726a081f87325c2a7927->leave($__internal_10ad60a0a1ebc50f3a3c2425e293aa3758c0505be637726a081f87325c2a7927_prof);

    }

    // line 10
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_18e2e5600e40d8ac810f62d7bc399177219d568cdbdccc36cd8b375292e014a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18e2e5600e40d8ac810f62d7bc399177219d568cdbdccc36cd8b375292e014a3->enter($__internal_18e2e5600e40d8ac810f62d7bc399177219d568cdbdccc36cd8b375292e014a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 11
        echo "    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"panel b-a\">
                <div class=\"panel-heading b-b\">
                    <span class=\"font-bold\">Catalogo prodotti</span>
                </div>
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 18
            echo "                <div class=\"row m-n\">
                    <div class=\"col-md-3 b-b b-r\" onmouseover=\"\$(this).find('#hover-rotate').addClass('hovered');\" onmouseout=\"\$(this).find('#hover-rotate').removeClass('hovered');\">
                        <a href=";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("catalogo", array("idCategoria" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo " class=\"block padder-v hover\">
                            <span class=\"i-s i-s-2x pull-left m-r-sm\">
                                <img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["item"], "immagine", array())), "html", null, true);
            echo "\" class=\"i hover-rotate\" id=\"hover-rotate\">
                            </span>
                            <span class=\"clear\">
                                <span class=\"h3 block m-t-xs texta-primary block-title\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "descrizione", array()), "html", null, true);
            echo "</span>
                                <span class=\"h3 block m-t-xs texta-primary\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nome", array()), "html", null, true);
            echo "</span>
                                <small class=\"text-muted text-u-c\"> codice categoria ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "</small>
                            </span>
                        </a>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_18e2e5600e40d8ac810f62d7bc399177219d568cdbdccc36cd8b375292e014a3->leave($__internal_18e2e5600e40d8ac810f62d7bc399177219d568cdbdccc36cd8b375292e014a3_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Prinkino:catalogo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 33,  109 => 27,  105 => 26,  101 => 25,  95 => 22,  90 => 20,  86 => 18,  82 => 17,  74 => 11,  68 => 10,  56 => 8,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block stylesheets %}
     {{ parent() }}
      <link href=\"{{ asset('prinkino/style/catalogo.css') }}\" rel=\"stylesheet\" />
{% endblock %}

{% block title %}Catalogo Prodotti{% endblock %}

{% block corpo %}
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"panel b-a\">
                <div class=\"panel-heading b-b\">
                    <span class=\"font-bold\">Catalogo prodotti</span>
                </div>
                {%for item in catalogo%}
                <div class=\"row m-n\">
                    <div class=\"col-md-3 b-b b-r\" onmouseover=\"\$(this).find('#hover-rotate').addClass('hovered');\" onmouseout=\"\$(this).find('#hover-rotate').removeClass('hovered');\">
                        <a href={{ path('catalogo', {'idCategoria': item.id})}} class=\"block padder-v hover\">
                            <span class=\"i-s i-s-2x pull-left m-r-sm\">
                                <img src=\"{{ asset(item.immagine)}}\" class=\"i hover-rotate\" id=\"hover-rotate\">
                            </span>
                            <span class=\"clear\">
                                <span class=\"h3 block m-t-xs texta-primary block-title\">{{item.descrizione}}</span>
                                <span class=\"h3 block m-t-xs texta-primary\">{{item.nome}}</span>
                                <small class=\"text-muted text-u-c\"> codice categoria {{item.id}}</small>
                            </span>
                        </a>
                    </div>
                </div>
                {%endfor%}
            </div>
        </div>
    </div>
{% endblock %}", "AppBundle:Prinkino:catalogo.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Prinkino/catalogo.html.twig");
    }
}
