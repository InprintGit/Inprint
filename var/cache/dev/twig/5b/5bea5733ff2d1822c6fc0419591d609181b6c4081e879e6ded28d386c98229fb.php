<?php

/* AppBundle:Amministratore:nuovoattributo.html.twig */
class __TwigTemplate_c6e70783ddf5dbd264f1f708c464177dd548ca7d78d342022b8174f01cc12698 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Amministratore:Abase.html.twig", "AppBundle:Amministratore:nuovoattributo.html.twig", 1);
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
        $__internal_cb9824305c50639d783be1f903be98d6115ea56a06ba65b3f31114da9168f96f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb9824305c50639d783be1f903be98d6115ea56a06ba65b3f31114da9168f96f->enter($__internal_cb9824305c50639d783be1f903be98d6115ea56a06ba65b3f31114da9168f96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Amministratore:nuovoattributo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb9824305c50639d783be1f903be98d6115ea56a06ba65b3f31114da9168f96f->leave($__internal_cb9824305c50639d783be1f903be98d6115ea56a06ba65b3f31114da9168f96f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_595af7aa629b81519192ca0a774c088d5fa44a9ba501e93f891b12696343f489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_595af7aa629b81519192ca0a774c088d5fa44a9ba501e93f891b12696343f489->enter($__internal_595af7aa629b81519192ca0a774c088d5fa44a9ba501e93f891b12696343f489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_595af7aa629b81519192ca0a774c088d5fa44a9ba501e93f891b12696343f489->leave($__internal_595af7aa629b81519192ca0a774c088d5fa44a9ba501e93f891b12696343f489_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_e7b4aa8272af8d050cf6a7932a3f3562f3c6675ee0b6014c1027e1ed97f5baf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7b4aa8272af8d050cf6a7932a3f3562f3c6675ee0b6014c1027e1ed97f5baf4->enter($__internal_e7b4aa8272af8d050cf6a7932a3f3562f3c6675ee0b6014c1027e1ed97f5baf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Nuovo attributo";
        
        $__internal_e7b4aa8272af8d050cf6a7932a3f3562f3c6675ee0b6014c1027e1ed97f5baf4->leave($__internal_e7b4aa8272af8d050cf6a7932a3f3562f3c6675ee0b6014c1027e1ed97f5baf4_prof);

    }

    // line 13
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_abe82edeedfcbc2086e9059e64fd437cb4d8903f56f1354041d1be7e732b9d35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abe82edeedfcbc2086e9059e64fd437cb4d8903f56f1354041d1be7e732b9d35->enter($__internal_abe82edeedfcbc2086e9059e64fd437cb4d8903f56f1354041d1be7e732b9d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

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
                                <input id=\"nome\" value=\"\" placeholder=\"\" class=\"span6\" style=\"width:240px\" type=\"text\" required>
                            </div>
                            <div class=\"field-box\" id=\"divNum\">
                                <label>Numero Valori:</label>
                                <input onchange=\"attivaConferma()\" id=\"num\" value=\"\" class=\"span6\" style=\"width:240px\" type=\"number\">
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </form>
    </table>
    <a id=\"conferma\" class=\"btn-flat primary\" onclick=\"conferma()\">Conferma</a>
</section>
";
        
        $__internal_abe82edeedfcbc2086e9059e64fd437cb4d8903f56f1354041d1be7e732b9d35->leave($__internal_abe82edeedfcbc2086e9059e64fd437cb4d8903f56f1354041d1be7e732b9d35_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Amministratore:nuovoattributo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 14,  70 => 13,  58 => 11,  49 => 7,  42 => 4,  36 => 3,  11 => 1,);
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
                                <input id=\"nome\" value=\"\" placeholder=\"\" class=\"span6\" style=\"width:240px\" type=\"text\" required>
                            </div>
                            <div class=\"field-box\" id=\"divNum\">
                                <label>Numero Valori:</label>
                                <input onchange=\"attivaConferma()\" id=\"num\" value=\"\" class=\"span6\" style=\"width:240px\" type=\"number\">
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </form>
    </table>
    <a id=\"conferma\" class=\"btn-flat primary\" onclick=\"conferma()\">Conferma</a>
</section>
{% endblock %}", "AppBundle:Amministratore:nuovoattributo.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Amministratore/nuovoattributo.html.twig");
    }
}
