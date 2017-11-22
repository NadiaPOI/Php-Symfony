<?php

/* AppBundle:Category:add.html.twig */
class __TwigTemplate_60c28189a314af1159028c519970a0a12b48e2b125d7d297bba22daab71ab837 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Category:add.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4dd36860b1087b1a5185abadc4af9ea4d9e6ca1d0a2465a885a207dd60a8e62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4dd36860b1087b1a5185abadc4af9ea4d9e6ca1d0a2465a885a207dd60a8e62->enter($__internal_f4dd36860b1087b1a5185abadc4af9ea4d9e6ca1d0a2465a885a207dd60a8e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Category:add.html.twig"));

        $__internal_ccb265c117f747449ea9e250eec91c87221410572fe57b7688f98200d902c63e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccb265c117f747449ea9e250eec91c87221410572fe57b7688f98200d902c63e->enter($__internal_ccb265c117f747449ea9e250eec91c87221410572fe57b7688f98200d902c63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Category:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4dd36860b1087b1a5185abadc4af9ea4d9e6ca1d0a2465a885a207dd60a8e62->leave($__internal_f4dd36860b1087b1a5185abadc4af9ea4d9e6ca1d0a2465a885a207dd60a8e62_prof);

        
        $__internal_ccb265c117f747449ea9e250eec91c87221410572fe57b7688f98200d902c63e->leave($__internal_ccb265c117f747449ea9e250eec91c87221410572fe57b7688f98200d902c63e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_77d559a40b33c6514cb43172d1ab135836646863c3222aa84954d090e2284846 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77d559a40b33c6514cb43172d1ab135836646863c3222aa84954d090e2284846->enter($__internal_77d559a40b33c6514cb43172d1ab135836646863c3222aa84954d090e2284846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4c551327ca24d9d56841f7bd455f56c9264b0caa286e060968dfc82151cc860c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c551327ca24d9d56841f7bd455f56c9264b0caa286e060968dfc82151cc860c->enter($__internal_4c551327ca24d9d56841f7bd455f56c9264b0caa286e060968dfc82151cc860c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h2>Ajout d'une catégorie</h2>
";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_4c551327ca24d9d56841f7bd455f56c9264b0caa286e060968dfc82151cc860c->leave($__internal_4c551327ca24d9d56841f7bd455f56c9264b0caa286e060968dfc82151cc860c_prof);

        
        $__internal_77d559a40b33c6514cb43172d1ab135836646863c3222aa84954d090e2284846->leave($__internal_77d559a40b33c6514cb43172d1ab135836646863c3222aa84954d090e2284846_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Category:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block body %}
<h2>Ajout d'une catégorie</h2>
{{ form_start(form)}}
{{ form_end(form)}}
{% endblock %}
", "AppBundle:Category:add.html.twig", "/var/www/html/poec-agefos-php/intro_symfony/src/AppBundle/Resources/views/Category/add.html.twig");
    }
}
