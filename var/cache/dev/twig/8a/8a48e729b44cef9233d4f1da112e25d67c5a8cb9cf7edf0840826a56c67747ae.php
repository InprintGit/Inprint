<?php

/* AppBundle:Prinkino:home.html.twig */
class __TwigTemplate_b9626ec524e18be82850d388828ad97c0431303c7e5dd79c7ebfb42c00893351 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Prinkino:home.html.twig", 1);
        $this->blocks = array(
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
        $__internal_f10a68716af9d450c1187a8ca0537d1376bc88aabe383bc4a347f06612549e04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f10a68716af9d450c1187a8ca0537d1376bc88aabe383bc4a347f06612549e04->enter($__internal_f10a68716af9d450c1187a8ca0537d1376bc88aabe383bc4a347f06612549e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Prinkino:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f10a68716af9d450c1187a8ca0537d1376bc88aabe383bc4a347f06612549e04->leave($__internal_f10a68716af9d450c1187a8ca0537d1376bc88aabe383bc4a347f06612549e04_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_95090edddf2f4d340597a982bc757062172aab1f211aa4575b085902d73aed92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95090edddf2f4d340597a982bc757062172aab1f211aa4575b085902d73aed92->enter($__internal_95090edddf2f4d340597a982bc757062172aab1f211aa4575b085902d73aed92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Benvenuto Prinkino";
        
        $__internal_95090edddf2f4d340597a982bc757062172aab1f211aa4575b085902d73aed92->leave($__internal_95090edddf2f4d340597a982bc757062172aab1f211aa4575b085902d73aed92_prof);

    }

    // line 5
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_a2a0421473e5169c860d11370fc6d80adab8b1677f0af4e6eabe118b484be019 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2a0421473e5169c860d11370fc6d80adab8b1677f0af4e6eabe118b484be019->enter($__internal_a2a0421473e5169c860d11370fc6d80adab8b1677f0af4e6eabe118b484be019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 6
        echo "
  <section class=\"top\">
      <h4>Benvenuto Prinkino</h4>
  </section>
  <section class=\"t1\" >
 <table class=\"table table-hover\">
    <caption> <h4>Ordini - <span>in arrivo</span></h4></caption>
    <thead> 
    <tr><th class=\"span3\">Cliente</th><th class=\"span4\">Numero</th><th class=\"span4\">trackNumber</th><th class=\"span4\"> Data Arrivo</th></tr>
    </head>
    <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arrivo"]) ? $context["arrivo"] : $this->getContext($context, "arrivo")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo "  
            <tr class=\"first\">
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "cliente", array()), "html", null, true);
            echo " <a href=\"javascript: dettagli(";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo ",1);\"><img ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("prinkino/src/down.png"), "html", null, true);
            echo " class=\"freccia\" id=\"img1";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\"></a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numero", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "tracknumber", array()), "html", null, true);
            echo "</td>
                <td><time datetime=\"2016-07-20\">";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "data", array()), "d-m-Y"), "html", null, true);
            echo "</time></td>
            </tr>
            <tr class=\"dettagli\" id=\"dettagli1";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\"> <td colspan=\"4\"> il presente div contiene i dettagli dell'elemento ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td></tr>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </tbody>
</table>
 </section>
 <section class=\"t2\" >
    <table class=\"table table-hover\"> 
       <caption><h4>Ordini - <span>sospesi</span></h4></caption>
\t     <thead><tr>
                 <th>Cliente</th>
\t         <th>Stato</th>
\t         </tr></thead>
       <tbody>
        <tr class=\"first\">
            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sospeso"]) ? $context["sospeso"] : $this->getContext($context, "sospeso")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            echo "  
                <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("visualizza", array("idsospeso" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "cliente", array()), "html", null, true);
            echo "</a></td>
                <td><progress id=\"mioLoader\" max=\"5\" value=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "stato", array()), "html", null, true);
            echo "\"><span>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "stato", array()), "html", null, true);
            echo "</span>%</progress></td>
            
\t</tr>
\t<tr class=\"dettagli\" id=\"dettagli2";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\"><td> il presente div contiene i dettagli dell'elemento ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo " </td></tr>
\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t </tbody>
   </table>
</section>
    <section class=\"ric\">
\t <h4>Ricerca</h4>
\t <div><input class=\"search\" name=\"\" placeholder=\"nome cliente, numero ordine...\"><a class=\"btn-flat primary\" href=\"\">  Ricerca </a></div>
    </section>
";
        
        $__internal_a2a0421473e5169c860d11370fc6d80adab8b1677f0af4e6eabe118b484be019->leave($__internal_a2a0421473e5169c860d11370fc6d80adab8b1677f0af4e6eabe118b484be019_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Prinkino:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 45,  174 => 43,  166 => 40,  160 => 39,  141 => 38,  127 => 26,  109 => 24,  104 => 22,  100 => 21,  96 => 20,  86 => 19,  66 => 17,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}Benvenuto Prinkino{% endblock %}

{% block corpo %}

  <section class=\"top\">
      <h4>Benvenuto Prinkino</h4>
  </section>
  <section class=\"t1\" >
 <table class=\"table table-hover\">
    <caption> <h4>Ordini - <span>in arrivo</span></h4></caption>
    <thead> 
    <tr><th class=\"span3\">Cliente</th><th class=\"span4\">Numero</th><th class=\"span4\">trackNumber</th><th class=\"span4\"> Data Arrivo</th></tr>
    </head>
    <tbody>
        {%for item in arrivo%}  
            <tr class=\"first\">
                <td>{{item.cliente}} <a href=\"javascript: dettagli({{ loop.index }},1);\"><img {{ asset('prinkino/src/down.png')}} class=\"freccia\" id=\"img1{{ loop.index }}\"></a></td>
                <td>{{item.numero}}</td>
                <td>{{item.tracknumber}}</td>
                <td><time datetime=\"2016-07-20\">{{item.data|date('d-m-Y')}}</time></td>
            </tr>
            <tr class=\"dettagli\" id=\"dettagli1{{ loop.index }}\"> <td colspan=\"4\"> il presente div contiene i dettagli dell'elemento {{ loop.index }}</td></tr>
        {%endfor%}
        </tbody>
</table>
 </section>
 <section class=\"t2\" >
    <table class=\"table table-hover\"> 
       <caption><h4>Ordini - <span>sospesi</span></h4></caption>
\t     <thead><tr>
                 <th>Cliente</th>
\t         <th>Stato</th>
\t         </tr></thead>
       <tbody>
        <tr class=\"first\">
            {%for item in sospeso%}  
                <td><a href=\"{{ path('visualizza', {'idsospeso': item.id}) }}\">{{item.cliente}}</a></td>
                <td><progress id=\"mioLoader\" max=\"5\" value=\"{{ item.stato }}\"><span>{{ item.stato }}</span>%</progress></td>
            
\t</tr>
\t<tr class=\"dettagli\" id=\"dettagli2{{ loop.index }}\"><td> il presente div contiene i dettagli dell'elemento {{ loop.index }} </td></tr>
\t{%endfor%}
\t </tbody>
   </table>
</section>
    <section class=\"ric\">
\t <h4>Ricerca</h4>
\t <div><input class=\"search\" name=\"\" placeholder=\"nome cliente, numero ordine...\"><a class=\"btn-flat primary\" href=\"\">  Ricerca </a></div>
    </section>
{% endblock %}
", "AppBundle:Prinkino:home.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Prinkino/home.html.twig");
    }
}
