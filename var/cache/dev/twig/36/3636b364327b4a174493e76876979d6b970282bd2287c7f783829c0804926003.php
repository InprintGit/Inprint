<?php

/* AppBundle:ResponsabileProduzione:daeseguire.html.twig */
class __TwigTemplate_c89d029783b6482ffa89b5f460808294a3f7529ebc4cc2f6209bb539c5107b66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:ResponsabileProduzione:SPbase.html.twig", "AppBundle:ResponsabileProduzione:daeseguire.html.twig", 1);
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
        $__internal_edfa976b65f6d9cdfa0b221aea9bea7586ed67e8ed1794c2e3f5c62501403729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edfa976b65f6d9cdfa0b221aea9bea7586ed67e8ed1794c2e3f5c62501403729->enter($__internal_edfa976b65f6d9cdfa0b221aea9bea7586ed67e8ed1794c2e3f5c62501403729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:ResponsabileProduzione:daeseguire.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edfa976b65f6d9cdfa0b221aea9bea7586ed67e8ed1794c2e3f5c62501403729->leave($__internal_edfa976b65f6d9cdfa0b221aea9bea7586ed67e8ed1794c2e3f5c62501403729_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc35123afba1642e275e6c5938130a99a7759ac7c7dcc7b12ae0eb945fd2868d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc35123afba1642e275e6c5938130a99a7759ac7c7dcc7b12ae0eb945fd2868d->enter($__internal_cc35123afba1642e275e6c5938130a99a7759ac7c7dcc7b12ae0eb945fd2868d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lavori da eseguire";
        
        $__internal_cc35123afba1642e275e6c5938130a99a7759ac7c7dcc7b12ae0eb945fd2868d->leave($__internal_cc35123afba1642e275e6c5938130a99a7759ac7c7dcc7b12ae0eb945fd2868d_prof);

    }

    // line 6
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_f7a6a4903a68254f447bc645d4bf51bd9211ba556bb9d7ceed1cf08cfd72e211 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7a6a4903a68254f447bc645d4bf51bd9211ba556bb9d7ceed1cf08cfd72e211->enter($__internal_f7a6a4903a68254f447bc645d4bf51bd9211ba556bb9d7ceed1cf08cfd72e211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 7
        echo "
<section class=\"top\">
   <h4>LAVORI DA ESEGUIRE</h4>
      </section>
\t\t    <section class=\"ric\">
\t\t    \t  <div>
\t\t    \t\t<h4>Ricerca</h4>
\t\t    \t\t<input class=\"search\" name=\"\" placeholder=\"nome cliente, numero ordine...\"><a class=\"btn-flat primary\" href=\"\">  Ricerca </a>
\t\t\t\t  </div>
\t\t    </section>
\t            <section class=\"t1\" >
\t               <table class=\"table table-hover\">
\t\t\t\t\t    <caption> <h4>Lavori - <span>da eseguire </span></h4></caption>
\t\t\t\t\t\t    <thead> 
\t\t\t\t\t\t    \t<tr><th class=\"span3\">Descrizione</th><th class=\"span4\">Codice lavorazione</th><th class=\"span4\">data</th><th class=\"span4\">STATO</th><th class=\"span4\"> </th></tr>
\t\t\t\t\t    \t</thead>
\t\t\t\t\t    <tbody>
\t\t\t\t\t            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eseguire"]) ? $context["eseguire"] : $this->getContext($context, "eseguire")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 25
            echo "\t\t\t\t\t    \t<tr class=\"first\">
\t\t\t\t\t\t        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "descrizione", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "codiceordine", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t        <td><time datetime=\"2016-07-20\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "data", array()), "html", null, true);
            echo "</time></td>
\t\t\t\t\t\t        <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "stato", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t        <td>\t       
        \t\t\t\t\t\t<a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href=";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("SPordine", array("idordine" => $this->getAttribute($context["item"], "codiceordine", array()))), "html", null, true);
            echo "><i class=\"icon-zoom-in\"></i> Analizza</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t    </tr>
\t\t\t\t\t\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t\t\t\t\t   </tbody>
\t\t\t\t   </table>
\t\t\t\t</section>
\t\t";
        
        $__internal_f7a6a4903a68254f447bc645d4bf51bd9211ba556bb9d7ceed1cf08cfd72e211->leave($__internal_f7a6a4903a68254f447bc645d4bf51bd9211ba556bb9d7ceed1cf08cfd72e211_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:ResponsabileProduzione:daeseguire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 35,  96 => 31,  91 => 29,  87 => 28,  83 => 27,  79 => 26,  76 => 25,  72 => 24,  53 => 7,  47 => 6,  35 => 4,  11 => 1,);
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


{% block title %}Lavori da eseguire{% endblock %}

{% block corpo %}

<section class=\"top\">
   <h4>LAVORI DA ESEGUIRE</h4>
      </section>
\t\t    <section class=\"ric\">
\t\t    \t  <div>
\t\t    \t\t<h4>Ricerca</h4>
\t\t    \t\t<input class=\"search\" name=\"\" placeholder=\"nome cliente, numero ordine...\"><a class=\"btn-flat primary\" href=\"\">  Ricerca </a>
\t\t\t\t  </div>
\t\t    </section>
\t            <section class=\"t1\" >
\t               <table class=\"table table-hover\">
\t\t\t\t\t    <caption> <h4>Lavori - <span>da eseguire </span></h4></caption>
\t\t\t\t\t\t    <thead> 
\t\t\t\t\t\t    \t<tr><th class=\"span3\">Descrizione</th><th class=\"span4\">Codice lavorazione</th><th class=\"span4\">data</th><th class=\"span4\">STATO</th><th class=\"span4\"> </th></tr>
\t\t\t\t\t    \t</thead>
\t\t\t\t\t    <tbody>
\t\t\t\t\t            {%for item in  eseguire %}
\t\t\t\t\t    \t<tr class=\"first\">
\t\t\t\t\t\t        <td>{{item.descrizione}}</td>
\t\t\t\t\t\t        <td>{{item.codiceordine}}</td>
\t\t\t\t\t\t        <td><time datetime=\"2016-07-20\">{{item.data}}</time></td>
\t\t\t\t\t\t        <td>{{item.stato}}</td>
\t\t\t\t\t\t        <td>\t       
        \t\t\t\t\t\t<a class=\"btn-flat primary\" style=\"border-radius:2px; cursor:pointer; margin-right:18px; padding: 3px 5px 3px 3px;\" href={{ path('SPordine', {'idordine': item.codiceordine})}}><i class=\"icon-zoom-in\"></i> Analizza</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t    </tr>
\t\t\t\t\t\t        {%endfor%}
\t\t\t\t\t   </tbody>
\t\t\t\t   </table>
\t\t\t\t</section>
\t\t{% endblock %}", "AppBundle:ResponsabileProduzione:daeseguire.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/ResponsabileProduzione/daeseguire.html.twig");
    }
}
