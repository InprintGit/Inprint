<?php

/* AppBundle:Amministratore:nuovoGruppo.html.twig */
class __TwigTemplate_06ac3f1e171d4fe8d99e51b526f27d61fd2f2a65d077ae700907a6bc5b1389b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Amministratore:Abase.html.twig", "AppBundle:Amministratore:nuovoGruppo.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'corpo' => array($this, 'block_corpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:Amministratore:Abase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c03422762eac72ef23aa38c12896f8af5ae752c5aacfb3e26a97741fedd105dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c03422762eac72ef23aa38c12896f8af5ae752c5aacfb3e26a97741fedd105dd->enter($__internal_c03422762eac72ef23aa38c12896f8af5ae752c5aacfb3e26a97741fedd105dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Amministratore:nuovoGruppo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c03422762eac72ef23aa38c12896f8af5ae752c5aacfb3e26a97741fedd105dd->leave($__internal_c03422762eac72ef23aa38c12896f8af5ae752c5aacfb3e26a97741fedd105dd_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_83e9efc4b0e4c04295e93dbd572dcbdb578bb382e9156fe4270984e836cc715c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83e9efc4b0e4c04295e93dbd572dcbdb578bb382e9156fe4270984e836cc715c->enter($__internal_83e9efc4b0e4c04295e93dbd572dcbdb578bb382e9156fe4270984e836cc715c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <script type=\"text/javascript\" charset=\"utf8\" src=\"http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js\"></script>
";
        
        $__internal_83e9efc4b0e4c04295e93dbd572dcbdb578bb382e9156fe4270984e836cc715c->leave($__internal_83e9efc4b0e4c04295e93dbd572dcbdb578bb382e9156fe4270984e836cc715c_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_3571bddd18adf2901251e6f59c1ce272572566d981b9f1fc1bde60d69130a7af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3571bddd18adf2901251e6f59c1ce272572566d981b9f1fc1bde60d69130a7af->enter($__internal_3571bddd18adf2901251e6f59c1ce272572566d981b9f1fc1bde60d69130a7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Nuovo Set-attributi";
        
        $__internal_3571bddd18adf2901251e6f59c1ce272572566d981b9f1fc1bde60d69130a7af->leave($__internal_3571bddd18adf2901251e6f59c1ce272572566d981b9f1fc1bde60d69130a7af_prof);

    }

    // line 11
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_05222ac536f3503b1dbc6cad4631a9b3493c7f42a5816b92abc67c9f2b6f3c80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05222ac536f3503b1dbc6cad4631a9b3493c7f42a5816b92abc67c9f2b6f3c80->enter($__internal_05222ac536f3503b1dbc6cad4631a9b3493c7f42a5816b92abc67c9f2b6f3c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 12
        echo "<section class=\"top\">
    <h4>Nuovo Set </h4>
</section>
<section class=\"form\">
    <table>
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AcreaSet", array("numValori" => twig_length_filter($this->env, (isset($context["attributi"]) ? $context["attributi"] : $this->getContext($context, "attributi"))))), "html", null, true);
        echo "\" method=\"post\">
            <tbody>
                <tr valign=\"top\">
                    <td height=\"260\" width=\"285\">
                        <div id=\"cont\"> 
                            <div class=\"field-box\">
                                <label>Nome :</label>
                                <input name=\"name\" id=\"nome\" value=\"\" placeholder=\"\" class=\"span6\" style=\"width:240px\" type=\"text\" >
                            </div>
                            <div class=\"field-box\" id=\"divNum\">
                                <label>Attributi:</label>
                                <fieldset>
                                    ";
        // line 29
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
            // line 30
            echo "                                     <input type=\"checkbox\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "\"/> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nome", array()), "html", null, true);
            echo " <br />
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
        // line 32
        echo "                                </fieldset>
                            </div>
                            <input type=\"submit\"  class=\"btn-flat primary\"  />
                        </div>
                    </td>
                </tr>
            </tbody>
        </form>
    </table>
</section>
";
        
        $__internal_05222ac536f3503b1dbc6cad4631a9b3493c7f42a5816b92abc67c9f2b6f3c80->leave($__internal_05222ac536f3503b1dbc6cad4631a9b3493c7f42a5816b92abc67c9f2b6f3c80_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Amministratore:nuovoGruppo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 32,  110 => 30,  93 => 29,  78 => 17,  71 => 12,  65 => 11,  53 => 9,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle:Amministratore:Abase.html.twig\" %}

{% block stylesheets %}
    {{parent()}}
    <script type=\"text/javascript\" charset=\"utf8\" src=\"http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js\"></script>
{% endblock %}


{% block title %}Nuovo Set-attributi{% endblock %}

{% block corpo %}
<section class=\"top\">
    <h4>Nuovo Set </h4>
</section>
<section class=\"form\">
    <table>
        <form action=\"{{ path('AcreaSet',{\"numValori\": attributi|length}) }}\" method=\"post\">
            <tbody>
                <tr valign=\"top\">
                    <td height=\"260\" width=\"285\">
                        <div id=\"cont\"> 
                            <div class=\"field-box\">
                                <label>Nome :</label>
                                <input name=\"name\" id=\"nome\" value=\"\" placeholder=\"\" class=\"span6\" style=\"width:240px\" type=\"text\" >
                            </div>
                            <div class=\"field-box\" id=\"divNum\">
                                <label>Attributi:</label>
                                <fieldset>
                                    {% for item in attributi %}
                                     <input type=\"checkbox\" name=\"{{loop.index}}\" value=\"{{item.id}}\"/> {{item.nome}} <br />
                                    {%endfor%}
                                </fieldset>
                            </div>
                            <input type=\"submit\"  class=\"btn-flat primary\"  />
                        </div>
                    </td>
                </tr>
            </tbody>
        </form>
    </table>
</section>
{% endblock %}", "AppBundle:Amministratore:nuovoGruppo.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Amministratore/nuovoGruppo.html.twig");
    }
}
