<?php

/* AppBundle:ResponsabileProduzione:in_produzione.html.twig */
class __TwigTemplate_6635784a5a042befd14b40e2864ac698a74cabbc7f9b2ba9d08b2aa8f4c9a388 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:ResponsabileProduzione:SPbase.html.twig", "AppBundle:ResponsabileProduzione:in_produzione.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'corpo' => array($this, 'block_corpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:ResponsabileProduzione:SPbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5667991e0511827010315b4908ac196c1ce45407e91cbb88973f39faee67d9bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5667991e0511827010315b4908ac196c1ce45407e91cbb88973f39faee67d9bb->enter($__internal_5667991e0511827010315b4908ac196c1ce45407e91cbb88973f39faee67d9bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:ResponsabileProduzione:in_produzione.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5667991e0511827010315b4908ac196c1ce45407e91cbb88973f39faee67d9bb->leave($__internal_5667991e0511827010315b4908ac196c1ce45407e91cbb88973f39faee67d9bb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f59ff0b067e80e2efec583cc315dbd32075b2ba063faad3bd23445543b95425c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f59ff0b067e80e2efec583cc315dbd32075b2ba063faad3bd23445543b95425c->enter($__internal_f59ff0b067e80e2efec583cc315dbd32075b2ba063faad3bd23445543b95425c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lavori in produzione ";
        
        $__internal_f59ff0b067e80e2efec583cc315dbd32075b2ba063faad3bd23445543b95425c->leave($__internal_f59ff0b067e80e2efec583cc315dbd32075b2ba063faad3bd23445543b95425c_prof);

    }

    // line 5
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_4e0dc6ba3bfe295932758c68dba5b0740f47bf00acd6d3c92472b9b8c2515d3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e0dc6ba3bfe295932758c68dba5b0740f47bf00acd6d3c92472b9b8c2515d3a->enter($__internal_4e0dc6ba3bfe295932758c68dba5b0740f47bf00acd6d3c92472b9b8c2515d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 6
        echo "
<section class=\"top\">
   <h4>LAVORI in produzione</h4>
</section>
<section class=\"ric\">
    <div>
        <h4>Ricerca</h4>
        <input class=\"search\" name=\"\" placeholder=\"nome cliente, numero ordine...\"><a class=\"btn-flat primary\" href=\"\">  Ricerca </a>
    </div>
</section>
<section class=\"t1\" >
    <table class=\"table table-hover\">
        <caption> <h4>Lavori - <span>in Produzione </span></h4></caption>
            <thead> 
                <tr><th class=\"span3\">Descrizione</th><th class=\"span4\">Codice lavorazione</th><th class=\"span4\">data</th><th class=\"span4\">STATO</th><th class=\"span4\"> </th></tr>
            </thead>
            <tbody>
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produzione"]) ? $context["produzione"] : $this->getContext($context, "produzione")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 24
            echo "                <tr class=\"first\">
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "descrizione", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "codiceordine", array()), "html", null, true);
            echo "</td>
                    <td><time datetime=\"2016-07-20\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "data", array()), "html", null, true);
            echo "</time></td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "stato", array()), "html", null, true);
            echo "</td>
                    <td>\t       
                        <a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("SPordine", array("idordine" => $this->getAttribute($context["item"], "codiceordine", array()))), "html", null, true);
            echo "><i class=\"icon-zoom-in\"></i> Analizza</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "            </tbody>
    </table>
</section>
";
        
        $__internal_4e0dc6ba3bfe295932758c68dba5b0740f47bf00acd6d3c92472b9b8c2515d3a->leave($__internal_4e0dc6ba3bfe295932758c68dba5b0740f47bf00acd6d3c92472b9b8c2515d3a_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:ResponsabileProduzione:in_produzione.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 34,  96 => 30,  91 => 28,  87 => 27,  83 => 26,  79 => 25,  76 => 24,  72 => 23,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle:ResponsabileProduzione:SPbase.html.twig\" %}

{% block title %}Lavori in produzione {% endblock %}

{% block corpo %}

<section class=\"top\">
   <h4>LAVORI in produzione</h4>
</section>
<section class=\"ric\">
    <div>
        <h4>Ricerca</h4>
        <input class=\"search\" name=\"\" placeholder=\"nome cliente, numero ordine...\"><a class=\"btn-flat primary\" href=\"\">  Ricerca </a>
    </div>
</section>
<section class=\"t1\" >
    <table class=\"table table-hover\">
        <caption> <h4>Lavori - <span>in Produzione </span></h4></caption>
            <thead> 
                <tr><th class=\"span3\">Descrizione</th><th class=\"span4\">Codice lavorazione</th><th class=\"span4\">data</th><th class=\"span4\">STATO</th><th class=\"span4\"> </th></tr>
            </thead>
            <tbody>
            {%for item in  produzione %}
                <tr class=\"first\">
                    <td>{{item.descrizione}}</td>
                    <td>{{item.codiceordine}}</td>
                    <td><time datetime=\"2016-07-20\">{{item.data}}</time></td>
                    <td>{{item.stato}}</td>
                    <td>\t       
                        <a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href={{ path('SPordine', {'idordine': item.codiceordine})}}><i class=\"icon-zoom-in\"></i> Analizza</a>
                    </td>
                </tr>
            {%endfor%}
            </tbody>
    </table>
</section>
{% endblock %}", "AppBundle:ResponsabileProduzione:in_produzione.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/ResponsabileProduzione/in_produzione.html.twig");
    }
}
