<?php

/* AppBundle:Amministratore:modificaAttributo.html.twig */
class __TwigTemplate_f7fa3340681fdd5debeed03a5ed3580a85d32ac9bc14839130844073ab26e383 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Amministratore:Abase.html.twig", "AppBundle:Amministratore:modificaAttributo.html.twig", 1);
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
        $__internal_0208a0e7cb9406dc38ba83f45cea4f4c5140f1cd58413df6fc2935e745bd756e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0208a0e7cb9406dc38ba83f45cea4f4c5140f1cd58413df6fc2935e745bd756e->enter($__internal_0208a0e7cb9406dc38ba83f45cea4f4c5140f1cd58413df6fc2935e745bd756e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Amministratore:modificaAttributo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0208a0e7cb9406dc38ba83f45cea4f4c5140f1cd58413df6fc2935e745bd756e->leave($__internal_0208a0e7cb9406dc38ba83f45cea4f4c5140f1cd58413df6fc2935e745bd756e_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_99b2b272675ff08d85a166e5a8440bd4b2feb8d65144531aeb024e4dd25cea43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99b2b272675ff08d85a166e5a8440bd4b2feb8d65144531aeb024e4dd25cea43->enter($__internal_99b2b272675ff08d85a166e5a8440bd4b2feb8d65144531aeb024e4dd25cea43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <script type=\"text/javascript\" charset=\"utf8\" src=\"http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js\"></script>

    <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Amministratore/js/attributo.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_99b2b272675ff08d85a166e5a8440bd4b2feb8d65144531aeb024e4dd25cea43->leave($__internal_99b2b272675ff08d85a166e5a8440bd4b2feb8d65144531aeb024e4dd25cea43_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c2781067cdb938786dae8c2c04f78a46ea58ccfe615e8b812ee9c05855c9549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c2781067cdb938786dae8c2c04f78a46ea58ccfe615e8b812ee9c05855c9549->enter($__internal_7c2781067cdb938786dae8c2c04f78a46ea58ccfe615e8b812ee9c05855c9549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Nuovo attributo";
        
        $__internal_7c2781067cdb938786dae8c2c04f78a46ea58ccfe615e8b812ee9c05855c9549->leave($__internal_7c2781067cdb938786dae8c2c04f78a46ea58ccfe615e8b812ee9c05855c9549_prof);

    }

    // line 13
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_29db2e97b44c543495536e622b62fed4cf841781d4558d59fcfcb08374315c94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29db2e97b44c543495536e622b62fed4cf841781d4558d59fcfcb08374315c94->enter($__internal_29db2e97b44c543495536e622b62fed4cf841781d4558d59fcfcb08374315c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 14
        echo "<section class=\"top\">
    <h4>Nuovo attributo </h4>
</section>
<section class=\"form\">
    <table>
        <form method=\"post\">
            <tbody>
                <tr valign=\"top\">
                    <td height=\"260\" width=\"285\">
                        <div id=\"cont\"> 
                            <div class=\"field-box\">
                                <label>Nome :</label>
                                <input id=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["attributo"]) ? $context["attributo"] : $this->getContext($context, "attributo")), "id", array()), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["attributo"]) ? $context["attributo"] : $this->getContext($context, "attributo")), "nome", array()), "html", null, true);
        echo "\" placeholder=\"\" class=\"span6\" style=\"width:240px\" type=\"text\" required>
                            </div>
                            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["valori"]) ? $context["valori"] : $this->getContext($context, "valori")));
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
            // line 29
            echo "                            <div class=\"field-box\">
                                <label>Valore ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo " :</label>
                                <input id=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "}\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nome", array()), "html", null, true);
            echo "\" placeholder=\"\" class=\"span6\" style=\"width:240px\" type=\"text\">
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
        // line 34
        echo "                        </div>
                    </td>
                    <a id=\"modifica\" class=\"btn-flat primary\" onclick=\"modifica()\">Modifica</a>
                </tr>
            </tbody>
        </form>
    </table>
</section>
";
        
        $__internal_29db2e97b44c543495536e622b62fed4cf841781d4558d59fcfcb08374315c94->leave($__internal_29db2e97b44c543495536e622b62fed4cf841781d4558d59fcfcb08374315c94_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Amministratore:modificaAttributo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 34,  121 => 31,  117 => 30,  114 => 29,  97 => 28,  90 => 26,  76 => 14,  70 => 13,  58 => 11,  49 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

    <script src=\"{{ asset(\"Amministratore/js/attributo.js\") }}\"></script>
{% endblock %}


{% block title %}Nuovo attributo{% endblock %}

{% block corpo %}
<section class=\"top\">
    <h4>Nuovo attributo </h4>
</section>
<section class=\"form\">
    <table>
        <form method=\"post\">
            <tbody>
                <tr valign=\"top\">
                    <td height=\"260\" width=\"285\">
                        <div id=\"cont\"> 
                            <div class=\"field-box\">
                                <label>Nome :</label>
                                <input id=\"{{attributo.id}}\" value=\"{{attributo.nome}}\" placeholder=\"\" class=\"span6\" style=\"width:240px\" type=\"text\" required>
                            </div>
                            {%for item in valori%}
                            <div class=\"field-box\">
                                <label>Valore {{loop.index}} :</label>
                                <input id=\"{{item.id}}}\" value=\"{{item.nome}}\" placeholder=\"\" class=\"span6\" style=\"width:240px\" type=\"text\">
                            </div>
                            {%endfor%}
                        </div>
                    </td>
                    <a id=\"modifica\" class=\"btn-flat primary\" onclick=\"modifica()\">Modifica</a>
                </tr>
            </tbody>
        </form>
    </table>
</section>
{% endblock %}", "AppBundle:Amministratore:modificaAttributo.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Amministratore/modificaAttributo.html.twig");
    }
}
