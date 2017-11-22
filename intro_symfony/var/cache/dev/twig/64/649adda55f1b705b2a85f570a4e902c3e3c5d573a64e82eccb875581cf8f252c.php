<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6c775e4c4ccdb3af11f3aa2031a382d5c0ed87f26f326c1f292fdbc62fcd4060 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a30ba8dd52c29605893262c0e27cc8bca7091605f0c69d73da5e516189d070f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a30ba8dd52c29605893262c0e27cc8bca7091605f0c69d73da5e516189d070f0->enter($__internal_a30ba8dd52c29605893262c0e27cc8bca7091605f0c69d73da5e516189d070f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d2ac0a4510e225238db1acb973ca858f29b032bee87c7e43746c4ae9088f8ee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2ac0a4510e225238db1acb973ca858f29b032bee87c7e43746c4ae9088f8ee1->enter($__internal_d2ac0a4510e225238db1acb973ca858f29b032bee87c7e43746c4ae9088f8ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a30ba8dd52c29605893262c0e27cc8bca7091605f0c69d73da5e516189d070f0->leave($__internal_a30ba8dd52c29605893262c0e27cc8bca7091605f0c69d73da5e516189d070f0_prof);

        
        $__internal_d2ac0a4510e225238db1acb973ca858f29b032bee87c7e43746c4ae9088f8ee1->leave($__internal_d2ac0a4510e225238db1acb973ca858f29b032bee87c7e43746c4ae9088f8ee1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_65d2a37da2c54533c49e0fc5784900fadd8135fbedba8152c3c6f1619cf1abc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65d2a37da2c54533c49e0fc5784900fadd8135fbedba8152c3c6f1619cf1abc8->enter($__internal_65d2a37da2c54533c49e0fc5784900fadd8135fbedba8152c3c6f1619cf1abc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_469d84171eb7c276b7d34f05f9fc01adaccaf98c4b967d07a22336e06c849410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_469d84171eb7c276b7d34f05f9fc01adaccaf98c4b967d07a22336e06c849410->enter($__internal_469d84171eb7c276b7d34f05f9fc01adaccaf98c4b967d07a22336e06c849410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_469d84171eb7c276b7d34f05f9fc01adaccaf98c4b967d07a22336e06c849410->leave($__internal_469d84171eb7c276b7d34f05f9fc01adaccaf98c4b967d07a22336e06c849410_prof);

        
        $__internal_65d2a37da2c54533c49e0fc5784900fadd8135fbedba8152c3c6f1619cf1abc8->leave($__internal_65d2a37da2c54533c49e0fc5784900fadd8135fbedba8152c3c6f1619cf1abc8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d1d4f6414633c143a8123640e2bafc76bc0e3569a85afdd678dd12b11ca3abcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1d4f6414633c143a8123640e2bafc76bc0e3569a85afdd678dd12b11ca3abcf->enter($__internal_d1d4f6414633c143a8123640e2bafc76bc0e3569a85afdd678dd12b11ca3abcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ceb0266f9078e76e44dddabcf24b77cfaf603ec7b42d2ad3ace916cf1f4fbf69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceb0266f9078e76e44dddabcf24b77cfaf603ec7b42d2ad3ace916cf1f4fbf69->enter($__internal_ceb0266f9078e76e44dddabcf24b77cfaf603ec7b42d2ad3ace916cf1f4fbf69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ceb0266f9078e76e44dddabcf24b77cfaf603ec7b42d2ad3ace916cf1f4fbf69->leave($__internal_ceb0266f9078e76e44dddabcf24b77cfaf603ec7b42d2ad3ace916cf1f4fbf69_prof);

        
        $__internal_d1d4f6414633c143a8123640e2bafc76bc0e3569a85afdd678dd12b11ca3abcf->leave($__internal_d1d4f6414633c143a8123640e2bafc76bc0e3569a85afdd678dd12b11ca3abcf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_85be750d998012b9784c5227f807b15da343268e1882e967c238dd4fb80891f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85be750d998012b9784c5227f807b15da343268e1882e967c238dd4fb80891f9->enter($__internal_85be750d998012b9784c5227f807b15da343268e1882e967c238dd4fb80891f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1fe79e0d45b030e62b51243e89ec7afbf1ca6bc47dee5564ceb219a9e37b8f74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fe79e0d45b030e62b51243e89ec7afbf1ca6bc47dee5564ceb219a9e37b8f74->enter($__internal_1fe79e0d45b030e62b51243e89ec7afbf1ca6bc47dee5564ceb219a9e37b8f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1fe79e0d45b030e62b51243e89ec7afbf1ca6bc47dee5564ceb219a9e37b8f74->leave($__internal_1fe79e0d45b030e62b51243e89ec7afbf1ca6bc47dee5564ceb219a9e37b8f74_prof);

        
        $__internal_85be750d998012b9784c5227f807b15da343268e1882e967c238dd4fb80891f9->leave($__internal_85be750d998012b9784c5227f807b15da343268e1882e967c238dd4fb80891f9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/poec-agefos-php/intro_symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
