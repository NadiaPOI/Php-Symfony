<?php

/* AppBundle:Retailor:index.html.twig */
class __TwigTemplate_e2a9faa67e60544185cecf23cc471d808f569b3f990d9c0200243c546a8e0e74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Retailor:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_237bef6f84ed6799311447eb71899eb2cc2884bc2f1a5541e5f690ebe4169754 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_237bef6f84ed6799311447eb71899eb2cc2884bc2f1a5541e5f690ebe4169754->enter($__internal_237bef6f84ed6799311447eb71899eb2cc2884bc2f1a5541e5f690ebe4169754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Retailor:index.html.twig"));

        $__internal_2497ec8a24225f467c727fb0e3684dd543754f5c0a7ed7d6e018f192449126da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2497ec8a24225f467c727fb0e3684dd543754f5c0a7ed7d6e018f192449126da->enter($__internal_2497ec8a24225f467c727fb0e3684dd543754f5c0a7ed7d6e018f192449126da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Retailor:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_237bef6f84ed6799311447eb71899eb2cc2884bc2f1a5541e5f690ebe4169754->leave($__internal_237bef6f84ed6799311447eb71899eb2cc2884bc2f1a5541e5f690ebe4169754_prof);

        
        $__internal_2497ec8a24225f467c727fb0e3684dd543754f5c0a7ed7d6e018f192449126da->leave($__internal_2497ec8a24225f467c727fb0e3684dd543754f5c0a7ed7d6e018f192449126da_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7bfed728536e0d834db54f79109e3f8f528ec3e57b37e62a8f9578ac920bcd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7bfed728536e0d834db54f79109e3f8f528ec3e57b37e62a8f9578ac920bcd2->enter($__internal_a7bfed728536e0d834db54f79109e3f8f528ec3e57b37e62a8f9578ac920bcd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0c63837f3142250ec592ab5aa905ee6844bc47233613da523baffc5dd949d560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c63837f3142250ec592ab5aa905ee6844bc47233613da523baffc5dd949d560->enter($__internal_0c63837f3142250ec592ab5aa905ee6844bc47233613da523baffc5dd949d560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Retailor:index";
        
        $__internal_0c63837f3142250ec592ab5aa905ee6844bc47233613da523baffc5dd949d560->leave($__internal_0c63837f3142250ec592ab5aa905ee6844bc47233613da523baffc5dd949d560_prof);

        
        $__internal_a7bfed728536e0d834db54f79109e3f8f528ec3e57b37e62a8f9578ac920bcd2->leave($__internal_a7bfed728536e0d834db54f79109e3f8f528ec3e57b37e62a8f9578ac920bcd2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e7d905079fa649ce189a369592e5cdbfc297139d1cfa91d2ae736d227b995fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e7d905079fa649ce189a369592e5cdbfc297139d1cfa91d2ae736d227b995fa->enter($__internal_8e7d905079fa649ce189a369592e5cdbfc297139d1cfa91d2ae736d227b995fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_107b7060d3d163c579334b5d902293704f265f4ced5b8752467fbf4e6059a35e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_107b7060d3d163c579334b5d902293704f265f4ced5b8752467fbf4e6059a35e->enter($__internal_107b7060d3d163c579334b5d902293704f265f4ced5b8752467fbf4e6059a35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Retailor:index page</h1>
";
        
        $__internal_107b7060d3d163c579334b5d902293704f265f4ced5b8752467fbf4e6059a35e->leave($__internal_107b7060d3d163c579334b5d902293704f265f4ced5b8752467fbf4e6059a35e_prof);

        
        $__internal_8e7d905079fa649ce189a369592e5cdbfc297139d1cfa91d2ae736d227b995fa->leave($__internal_8e7d905079fa649ce189a369592e5cdbfc297139d1cfa91d2ae736d227b995fa_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Retailor:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}AppBundle:Retailor:index{% endblock %}

{% block body %}
<h1>Welcome to the Retailor:index page</h1>
{% endblock %}
", "AppBundle:Retailor:index.html.twig", "/var/www/html/poec-agefos-php/intro_symfony/src/AppBundle/Resources/views/Retailor/index.html.twig");
    }
}
