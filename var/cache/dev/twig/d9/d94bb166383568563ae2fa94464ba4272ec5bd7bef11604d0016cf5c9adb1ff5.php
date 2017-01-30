<?php

/* AppBundle:Prinkino:inserimento.html.twig */
class __TwigTemplate_f44074012e6ef3157c9fbc94e0dcfd0cb656840de612a95ae714648e2f0a2b40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Prinkino:inserimento.html.twig", 2);
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
        $__internal_9fd1d2cc2250ad482df7c3be0a2e4fda1520b86c8992dcb5a9370287a6edc82e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fd1d2cc2250ad482df7c3be0a2e4fda1520b86c8992dcb5a9370287a6edc82e->enter($__internal_9fd1d2cc2250ad482df7c3be0a2e4fda1520b86c8992dcb5a9370287a6edc82e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Prinkino:inserimento.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fd1d2cc2250ad482df7c3be0a2e4fda1520b86c8992dcb5a9370287a6edc82e->leave($__internal_9fd1d2cc2250ad482df7c3be0a2e4fda1520b86c8992dcb5a9370287a6edc82e_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_781d9d14a2ff3333696ba6077fe7ca60ce14df2ffbb9043d753cc834e7521006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_781d9d14a2ff3333696ba6077fe7ca60ce14df2ffbb9043d753cc834e7521006->enter($__internal_781d9d14a2ff3333696ba6077fe7ca60ce14df2ffbb9043d753cc834e7521006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["dettaglio"]) ? $context["dettaglio"] : $this->getContext($context, "dettaglio")), "html", null, true);
        
        $__internal_781d9d14a2ff3333696ba6077fe7ca60ce14df2ffbb9043d753cc834e7521006->leave($__internal_781d9d14a2ff3333696ba6077fe7ca60ce14df2ffbb9043d753cc834e7521006_prof);

    }

    // line 6
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_45b36dc963c6e00a2d7afc3baf296cf5f503e70cdbf2ee1c0ed46b4cc6efd168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45b36dc963c6e00a2d7afc3baf296cf5f503e70cdbf2ee1c0ed46b4cc6efd168->enter($__internal_45b36dc963c6e00a2d7afc3baf296cf5f503e70cdbf2ee1c0ed46b4cc6efd168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 7
        echo "
<section class=\"top\">
   <h4>Nuovo ordine</h4>
</section>
<section class=\"form\">
    <form method=\"post\" action=";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nuovoordine");
        echo ">
          <table>
             <tbody>
                <tr valign=\"form\">
                    <td height=\"254\" width=\"254\">
                        <div class=\"field-box\">
                            <label>";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["dettaglio"]) ? $context["dettaglio"] : $this->getContext($context, "dettaglio")), "html", null, true);
        echo ":</label>\t\t\t\t\t\t\t
                            <td height=\"300\" width=\"300\">
                                <input name=";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["dettaglio"]) ? $context["dettaglio"] : $this->getContext($context, "dettaglio")), "html", null, true);
        echo " id=\"extra\" placeholder=\"Inserisci ";
        echo twig_escape_filter($this->env, (isset($context["dettaglio"]) ? $context["dettaglio"] : $this->getContext($context, "dettaglio")), "html", null, true);
        echo "...\" class=\"span8\" rows=\"8\" style=\"margin: 0px 0px 10px; height: 110px; width: 250px; position:static; resize:none;\"></textarea>
                            </td>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <input type=\"submit\" class=\"btn-flat primary\" >  
    </form>
</section>
";
        
        $__internal_45b36dc963c6e00a2d7afc3baf296cf5f503e70cdbf2ee1c0ed46b4cc6efd168->leave($__internal_45b36dc963c6e00a2d7afc3baf296cf5f503e70cdbf2ee1c0ed46b4cc6efd168_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Prinkino:inserimento.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 20,  69 => 18,  60 => 12,  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
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

{% block title %}{{dettaglio}}{% endblock %}

{% block corpo %}

<section class=\"top\">
   <h4>Nuovo ordine</h4>
</section>
<section class=\"form\">
    <form method=\"post\" action={{path('nuovoordine')}}>
          <table>
             <tbody>
                <tr valign=\"form\">
                    <td height=\"254\" width=\"254\">
                        <div class=\"field-box\">
                            <label>{{dettaglio}}:</label>\t\t\t\t\t\t\t
                            <td height=\"300\" width=\"300\">
                                <input name={{dettaglio}} id=\"extra\" placeholder=\"Inserisci {{dettaglio}}...\" class=\"span8\" rows=\"8\" style=\"margin: 0px 0px 10px; height: 110px; width: 250px; position:static; resize:none;\"></textarea>
                            </td>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <input type=\"submit\" class=\"btn-flat primary\" >  
    </form>
</section>
{% endblock %}
", "AppBundle:Prinkino:inserimento.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Prinkino/inserimento.html.twig");
    }
}
