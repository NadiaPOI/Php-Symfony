<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4e3271903e33ece75271e854a17246dc43a169ac90a69a863843468c5ada6dd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_3bc27dd35569bb0ca5265e84a9e3141df613a1592cae2991b512927a5bd4ea99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bc27dd35569bb0ca5265e84a9e3141df613a1592cae2991b512927a5bd4ea99->enter($__internal_3bc27dd35569bb0ca5265e84a9e3141df613a1592cae2991b512927a5bd4ea99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_351faf4f438caf6f30ba55b708f9af8d182e9fe6e6ec534916b8a1c96729fac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_351faf4f438caf6f30ba55b708f9af8d182e9fe6e6ec534916b8a1c96729fac6->enter($__internal_351faf4f438caf6f30ba55b708f9af8d182e9fe6e6ec534916b8a1c96729fac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bc27dd35569bb0ca5265e84a9e3141df613a1592cae2991b512927a5bd4ea99->leave($__internal_3bc27dd35569bb0ca5265e84a9e3141df613a1592cae2991b512927a5bd4ea99_prof);

        
        $__internal_351faf4f438caf6f30ba55b708f9af8d182e9fe6e6ec534916b8a1c96729fac6->leave($__internal_351faf4f438caf6f30ba55b708f9af8d182e9fe6e6ec534916b8a1c96729fac6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9b6c3a0082d2003fb7845a4c0d95795c4659a7006367738a936e1ca49f483822 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b6c3a0082d2003fb7845a4c0d95795c4659a7006367738a936e1ca49f483822->enter($__internal_9b6c3a0082d2003fb7845a4c0d95795c4659a7006367738a936e1ca49f483822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_66553226716c888f7b9c7ad15c916ee9c643c917795d30cd44e20eaf0e06f49a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66553226716c888f7b9c7ad15c916ee9c643c917795d30cd44e20eaf0e06f49a->enter($__internal_66553226716c888f7b9c7ad15c916ee9c643c917795d30cd44e20eaf0e06f49a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_66553226716c888f7b9c7ad15c916ee9c643c917795d30cd44e20eaf0e06f49a->leave($__internal_66553226716c888f7b9c7ad15c916ee9c643c917795d30cd44e20eaf0e06f49a_prof);

        
        $__internal_9b6c3a0082d2003fb7845a4c0d95795c4659a7006367738a936e1ca49f483822->leave($__internal_9b6c3a0082d2003fb7845a4c0d95795c4659a7006367738a936e1ca49f483822_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d1d6e4ee7853952d568e7a1c6ac3833800363076cfccbe99228b79cd655dc48d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1d6e4ee7853952d568e7a1c6ac3833800363076cfccbe99228b79cd655dc48d->enter($__internal_d1d6e4ee7853952d568e7a1c6ac3833800363076cfccbe99228b79cd655dc48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_723306ff1a027ffbde905e53db65d1205ca9f7d6c60efc5338608e61961b58ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_723306ff1a027ffbde905e53db65d1205ca9f7d6c60efc5338608e61961b58ba->enter($__internal_723306ff1a027ffbde905e53db65d1205ca9f7d6c60efc5338608e61961b58ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_723306ff1a027ffbde905e53db65d1205ca9f7d6c60efc5338608e61961b58ba->leave($__internal_723306ff1a027ffbde905e53db65d1205ca9f7d6c60efc5338608e61961b58ba_prof);

        
        $__internal_d1d6e4ee7853952d568e7a1c6ac3833800363076cfccbe99228b79cd655dc48d->leave($__internal_d1d6e4ee7853952d568e7a1c6ac3833800363076cfccbe99228b79cd655dc48d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_009442cfc5a01d8a66c3eb3021aab1ef4e3b4a697fa9bc60163c2f6dc50c1f0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_009442cfc5a01d8a66c3eb3021aab1ef4e3b4a697fa9bc60163c2f6dc50c1f0c->enter($__internal_009442cfc5a01d8a66c3eb3021aab1ef4e3b4a697fa9bc60163c2f6dc50c1f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6af510b536225a60a6b3750af3c198d59af9093aaca05c5cc55a4af70d10b854 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6af510b536225a60a6b3750af3c198d59af9093aaca05c5cc55a4af70d10b854->enter($__internal_6af510b536225a60a6b3750af3c198d59af9093aaca05c5cc55a4af70d10b854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_6af510b536225a60a6b3750af3c198d59af9093aaca05c5cc55a4af70d10b854->leave($__internal_6af510b536225a60a6b3750af3c198d59af9093aaca05c5cc55a4af70d10b854_prof);

        
        $__internal_009442cfc5a01d8a66c3eb3021aab1ef4e3b4a697fa9bc60163c2f6dc50c1f0c->leave($__internal_009442cfc5a01d8a66c3eb3021aab1ef4e3b4a697fa9bc60163c2f6dc50c1f0c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/poec-agefos-php/intro_symfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
