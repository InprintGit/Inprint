<?php

/* AppBundle:Prinkino:riepilogo.html.twig */
class __TwigTemplate_5a8b49e785e778d33c07158420f7283dd38d0c7f6278f689421205ff016c5c1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Prinkino:riepilogo.html.twig", 2);
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
        $__internal_2ddc35087d1bd0e7ad6696a45cf7378ba8d69a9d91f1e0ccab6eaa21567c607b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ddc35087d1bd0e7ad6696a45cf7378ba8d69a9d91f1e0ccab6eaa21567c607b->enter($__internal_2ddc35087d1bd0e7ad6696a45cf7378ba8d69a9d91f1e0ccab6eaa21567c607b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Prinkino:riepilogo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ddc35087d1bd0e7ad6696a45cf7378ba8d69a9d91f1e0ccab6eaa21567c607b->leave($__internal_2ddc35087d1bd0e7ad6696a45cf7378ba8d69a9d91f1e0ccab6eaa21567c607b_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1bc6ad5a5e417a5827bc0fd1590b9bbd48d0ed87bd934b7f743bdde74e1a1bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1bc6ad5a5e417a5827bc0fd1590b9bbd48d0ed87bd934b7f743bdde74e1a1bb->enter($__internal_a1bc6ad5a5e417a5827bc0fd1590b9bbd48d0ed87bd934b7f743bdde74e1a1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Riepilogo";
        
        $__internal_a1bc6ad5a5e417a5827bc0fd1590b9bbd48d0ed87bd934b7f743bdde74e1a1bb->leave($__internal_a1bc6ad5a5e417a5827bc0fd1590b9bbd48d0ed87bd934b7f743bdde74e1a1bb_prof);

    }

    // line 6
    public function block_corpo($context, array $blocks = array())
    {
        $__internal_de4c9a313c9fd112da3415ea71066e12c2c6cee5b4711dff654e64ddeb7d7aab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de4c9a313c9fd112da3415ea71066e12c2c6cee5b4711dff654e64ddeb7d7aab->enter($__internal_de4c9a313c9fd112da3415ea71066e12c2c6cee5b4711dff654e64ddeb7d7aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "corpo"));

        // line 7
        echo "    
    
    <section class=\"t1\" >
\t         <table class=\"table table-hover\">
                     ";
        // line 11
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "precedente"), "method") == "/visualizza")) {
            // line 12
            echo "                        <caption> <h4>Inserimento - <span>ordine</span></h4></caption>
                     ";
        } else {
            // line 14
            echo "                        <caption> <h4>Coferma - <span>operazione</span></h4></caption>
                     ";
        }
        // line 16
        echo "\t           ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["riepilogo"]) ? $context["riepilogo"] : $this->getContext($context, "riepilogo")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 17
            echo "                        ";
            if ( !($this->getAttribute($context["item"], "tipo", array()) == "bozza")) {
                // line 18
                echo "                            <tr><th class=\"span5\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "tipo", array()), "html", null, true);
                echo "</th><td >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "contenuto", array()), "html", null, true);
                echo "</td></tr>
                        ";
            }
            // line 20
            echo "\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                </table>
                ";
        // line 22
        if (((isset($context["precedente"]) ? $context["precedente"] : $this->getContext($context, "precedente")) == "/nuovocliente")) {
            // line 23
            echo "                    <a href=";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cliente", array("idcliente" => (isset($context["codicecliente"]) ? $context["codicecliente"] : $this->getContext($context, "codicecliente")))), "html", null, true);
            echo " id=\"modal_addclient\" class=\"btn-flat primary\" role=\"button\" style=\"border-radius:2px;\">Modifica</a>
                    <a href=";
            // line 24
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conferma");
            echo " id=\"modal_addclient\" class=\"btn-flat primary\" role=\"button\" style=\"border-radius:2px;\">Conferma</a>
                ";
        } elseif ((        // line 25
(isset($context["precedente"]) ? $context["precedente"] : $this->getContext($context, "precedente")) == "/nuovoordine")) {
            // line 26
            echo "                    <a href=";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
            echo " id=\"modal_addclient\" class=\"btn-flat primary\" role=\"button\" style=\"border-radius:2px;\">Elimina</a>
                    <a href=";
            // line 27
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sospendi");
            echo " id=\"modal_addclient\" class=\"btn-flat primary\" role=\"button\" style=\"border-radius:2px;\">Sospendi</a>
                    <a href=";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("conferma");
            echo " id=\"modal_addclient\" class=\"btn-flat primary\" role=\"button\" style=\"border-radius:2px;\">Conferma</a>
                ";
        }
        // line 30
        echo "                
    </section>
";
        
        $__internal_de4c9a313c9fd112da3415ea71066e12c2c6cee5b4711dff654e64ddeb7d7aab->leave($__internal_de4c9a313c9fd112da3415ea71066e12c2c6cee5b4711dff654e64ddeb7d7aab_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Prinkino:riepilogo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 30,  116 => 28,  112 => 27,  107 => 26,  105 => 25,  101 => 24,  96 => 23,  94 => 22,  91 => 21,  85 => 20,  77 => 18,  74 => 17,  69 => 16,  65 => 14,  61 => 12,  59 => 11,  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
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

{% block title %}Riepilogo{% endblock %}

{% block corpo %}
    
    
    <section class=\"t1\" >
\t         <table class=\"table table-hover\">
                     {% if(app.session.get('precedente')==\"/visualizza\")%}
                        <caption> <h4>Inserimento - <span>ordine</span></h4></caption>
                     {%else%}
                        <caption> <h4>Coferma - <span>operazione</span></h4></caption>
                     {%endif%}
\t           {%for item in riepilogo%}
                        {%if not(item.tipo==\"bozza\")%}
                            <tr><th class=\"span5\">{{item.tipo}}</th><td >{{item.contenuto}}</td></tr>
                        {%endif%}
\t\t  {%endfor%}
                </table>
                {% if precedente==\"/nuovocliente\" %}
                    <a href={{path('cliente', {'idcliente': codicecliente})}} id=\"modal_addclient\" class=\"btn-flat primary\" role=\"button\" style=\"border-radius:2px;\">Modifica</a>
                    <a href={{ path('conferma')}} id=\"modal_addclient\" class=\"btn-flat primary\" role=\"button\" style=\"border-radius:2px;\">Conferma</a>
                {%elseif precedente==\"/nuovoordine\"%}
                    <a href={{ path('home')}} id=\"modal_addclient\" class=\"btn-flat primary\" role=\"button\" style=\"border-radius:2px;\">Elimina</a>
                    <a href={{ path('sospendi')}} id=\"modal_addclient\" class=\"btn-flat primary\" role=\"button\" style=\"border-radius:2px;\">Sospendi</a>
                    <a href={{ path('conferma')}} id=\"modal_addclient\" class=\"btn-flat primary\" role=\"button\" style=\"border-radius:2px;\">Conferma</a>
                {%endif%}
                
    </section>
{% endblock %}", "AppBundle:Prinkino:riepilogo.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Prinkino/riepilogo.html.twig");
    }
}
