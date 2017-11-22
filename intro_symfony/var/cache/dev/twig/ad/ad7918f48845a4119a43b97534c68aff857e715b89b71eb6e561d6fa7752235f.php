<?php

/* AppBundle:Retailor:add.html.twig */
class __TwigTemplate_deb09df18bc0e7fe5139831c256b22f83119d58248fc7668c129d94a599a4923 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Retailor:add.html.twig", 1);
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
        $__internal_c50ecd5b3da46b8699291e5baf02b02813062c1fa83413c33fab7bc968ba0f6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c50ecd5b3da46b8699291e5baf02b02813062c1fa83413c33fab7bc968ba0f6f->enter($__internal_c50ecd5b3da46b8699291e5baf02b02813062c1fa83413c33fab7bc968ba0f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Retailor:add.html.twig"));

        $__internal_e2599b75aa5426dc367351dc52b3afb65f672073e1ed6f75b9160feef9e36143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2599b75aa5426dc367351dc52b3afb65f672073e1ed6f75b9160feef9e36143->enter($__internal_e2599b75aa5426dc367351dc52b3afb65f672073e1ed6f75b9160feef9e36143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Retailor:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c50ecd5b3da46b8699291e5baf02b02813062c1fa83413c33fab7bc968ba0f6f->leave($__internal_c50ecd5b3da46b8699291e5baf02b02813062c1fa83413c33fab7bc968ba0f6f_prof);

        
        $__internal_e2599b75aa5426dc367351dc52b3afb65f672073e1ed6f75b9160feef9e36143->leave($__internal_e2599b75aa5426dc367351dc52b3afb65f672073e1ed6f75b9160feef9e36143_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4222980623851f47fe91a3ca7e9b51febbd237ae80491f6de04b49ae8ab1b33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4222980623851f47fe91a3ca7e9b51febbd237ae80491f6de04b49ae8ab1b33->enter($__internal_c4222980623851f47fe91a3ca7e9b51febbd237ae80491f6de04b49ae8ab1b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_02f4a607438ce9a1c4307c208eb6021c3b0682249bb4c387aa99fe795c825d39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02f4a607438ce9a1c4307c208eb6021c3b0682249bb4c387aa99fe795c825d39->enter($__internal_02f4a607438ce9a1c4307c208eb6021c3b0682249bb4c387aa99fe795c825d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h2>Ajout d'un détaillant</h2>
";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_02f4a607438ce9a1c4307c208eb6021c3b0682249bb4c387aa99fe795c825d39->leave($__internal_02f4a607438ce9a1c4307c208eb6021c3b0682249bb4c387aa99fe795c825d39_prof);

        
        $__internal_c4222980623851f47fe91a3ca7e9b51febbd237ae80491f6de04b49ae8ab1b33->leave($__internal_c4222980623851f47fe91a3ca7e9b51febbd237ae80491f6de04b49ae8ab1b33_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Retailor:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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

<h2>Ajout d'un détaillant</h2>
{{ form_start(form) }}
{{ form_end(form) }}
{% endblock %}
", "AppBundle:Retailor:add.html.twig", "/var/www/html/poec-agefos-php/intro_symfony/src/AppBundle/Resources/views/Retailor/add.html.twig");
    }
}
