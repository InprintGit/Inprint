<?php

/* AppBundle:Prinkino:categoria.html.twig */
class __TwigTemplate_e2b93faa2aa852a4d2f6b7b9273b3d8c2f4cae60a819584317619de86cafa578 extends Twig_Template
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
        $__internal_ee285f69e8089c6e2dd3927c4370e5b3d4f0d5bbe7166623559752fafc0697b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee285f69e8089c6e2dd3927c4370e5b3d4f0d5bbe7166623559752fafc0697b7->enter($__internal_ee285f69e8089c6e2dd3927c4370e5b3d4f0d5bbe7166623559752fafc0697b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Prinkino:categoria.html.twig"));

        // line 1
        echo "<section id=\"selezione\">
    <select class=\"cs-select cs-skin-boxes\" onclick=\"SottoCategorie(1)\" >
        <option name\"\" value=\"\" disabled selected>Seleziona Categoria</option>
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["catalogo"]) ? $context["catalogo"] : $this->getContext($context, "catalogo")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "            <option name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nome", array()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "\" data-class=\"color-588c75\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nome", array()), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </select>
    <script>
\t\t\t(function() {
\t\t\t\t[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {\t
\t\t\t\t\tnew SelectFx(el, {
\t\t\t\t\t\tstickyPlaceholder: false,
\t\t\t\t\t\tonChange: function(val){
                                                        SottoCategorie(val);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t} );
\t\t\t})();
\t\t</script>
</section>";
        
        $__internal_ee285f69e8089c6e2dd3927c4370e5b3d4f0d5bbe7166623559752fafc0697b7->leave($__internal_ee285f69e8089c6e2dd3927c4370e5b3d4f0d5bbe7166623559752fafc0697b7_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Prinkino:categoria.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 7,  31 => 5,  27 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"selezione\">
    <select class=\"cs-select cs-skin-boxes\" onclick=\"SottoCategorie(1)\" >
        <option name\"\" value=\"\" disabled selected>Seleziona Categoria</option>
        {%for item in catalogo%}
            <option name=\"{{item.nome}}\" value=\"{{item.id}}\" data-class=\"color-588c75\">{{item.nome}}</option>
        {%endfor%}
    </select>
    <script>
\t\t\t(function() {
\t\t\t\t[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {\t
\t\t\t\t\tnew SelectFx(el, {
\t\t\t\t\t\tstickyPlaceholder: false,
\t\t\t\t\t\tonChange: function(val){
                                                        SottoCategorie(val);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t} );
\t\t\t})();
\t\t</script>
</section>", "AppBundle:Prinkino:categoria.html.twig", "C:\\Users\\inprink1\\Documents\\NetBeansProjects\\Inprint\\src\\AppBundle/Resources/views/Prinkino/categoria.html.twig");
    }
}
