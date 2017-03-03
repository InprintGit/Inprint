<?php

/* AppBundle:Amministratore:specifiche.html.twig */
class __TwigTemplate_49dd27060de6c6d5e4bd0f86a195cee983af2bf62b04c1fcb50c40e63408055a extends Twig_Template
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
        $__internal_6adb122db2ee4ca10c0ecd378fec2e9fbc1c7c6c8b47dfda2027b363c0d6f15e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6adb122db2ee4ca10c0ecd378fec2e9fbc1c7c6c8b47dfda2027b363c0d6f15e->enter($__internal_6adb122db2ee4ca10c0ecd378fec2e9fbc1c7c6c8b47dfda2027b363c0d6f15e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Amministratore:specifiche.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attributi"]) ? $context["attributi"] : $this->getContext($context, "attributi")));
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
            // line 2
            echo " <div id=\"Attributo";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\"
    <label>Attributo ";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo ":  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nome", array()), "html", null, true);
            echo "</label>
    <select id=\"valAttributo";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" name=\"valAttributo";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\">
    ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "valori", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item2"]) {
                // line 6
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item2"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item2"], "nome", array()), "html", null, true);
                echo "</option>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    </select>
 </div>   
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
        
        $__internal_6adb122db2ee4ca10c0ecd378fec2e9fbc1c7c6c8b47dfda2027b363c0d6f15e->leave($__internal_6adb122db2ee4ca10c0ecd378fec2e9fbc1c7c6c8b47dfda2027b363c0d6f15e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Amministratore:specifiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 8,  60 => 6,  56 => 5,  50 => 4,  44 => 3,  39 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%for item in attributi%}
 <div id=\"Attributo{{loop.index}}\"
    <label>Attributo {{loop.index}}:  {{item.nome}}</label>
    <select id=\"valAttributo{{loop.index}}\" name=\"valAttributo{{loop.index}}\">
    {%for item2 in item.valori%}
        <option value=\"{{item2.id}}\">{{item2.nome}}</option>
    {% endfor %}
    </select>
 </div>   
{% endfor %}
", "AppBundle:Amministratore:specifiche.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Amministratore/specifiche.html.twig");
    }
}
