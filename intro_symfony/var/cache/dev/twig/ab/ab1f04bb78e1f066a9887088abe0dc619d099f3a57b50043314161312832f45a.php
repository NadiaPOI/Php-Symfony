<?php

/* AppBundle:Producer:index.html.twig */
class __TwigTemplate_15599efc6e62e0c089689532429d98572874f0cd38f04f893145c20f667b8c6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Producer:index.html.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3879c84c60f98886c3c3d51dea78a599f5f26fbccdfae5cbd71a1f6fb42fc970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3879c84c60f98886c3c3d51dea78a599f5f26fbccdfae5cbd71a1f6fb42fc970->enter($__internal_3879c84c60f98886c3c3d51dea78a599f5f26fbccdfae5cbd71a1f6fb42fc970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Producer:index.html.twig"));

        $__internal_18b46f7988a9c9fec932a4ec961e7ba4076f6abc5fab649167721a3ed6928962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18b46f7988a9c9fec932a4ec961e7ba4076f6abc5fab649167721a3ed6928962->enter($__internal_18b46f7988a9c9fec932a4ec961e7ba4076f6abc5fab649167721a3ed6928962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Producer:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3879c84c60f98886c3c3d51dea78a599f5f26fbccdfae5cbd71a1f6fb42fc970->leave($__internal_3879c84c60f98886c3c3d51dea78a599f5f26fbccdfae5cbd71a1f6fb42fc970_prof);

        
        $__internal_18b46f7988a9c9fec932a4ec961e7ba4076f6abc5fab649167721a3ed6928962->leave($__internal_18b46f7988a9c9fec932a4ec961e7ba4076f6abc5fab649167721a3ed6928962_prof);

    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        $__internal_d226be80c941d2b93b73cb6a66532218e5087da66c15ec80855396c07e6e1602 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d226be80c941d2b93b73cb6a66532218e5087da66c15ec80855396c07e6e1602->enter($__internal_d226be80c941d2b93b73cb6a66532218e5087da66c15ec80855396c07e6e1602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_9df79319e58ef1ac1f3378c62fd6ac93a32fe31546b746704428c88b08130a4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9df79319e58ef1ac1f3378c62fd6ac93a32fe31546b746704428c88b08130a4f->enter($__internal_9df79319e58ef1ac1f3378c62fd6ac93a32fe31546b746704428c88b08130a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 4
        echo "<style>
.logo {width: 75px}
</style>
";
        
        $__internal_9df79319e58ef1ac1f3378c62fd6ac93a32fe31546b746704428c88b08130a4f->leave($__internal_9df79319e58ef1ac1f3378c62fd6ac93a32fe31546b746704428c88b08130a4f_prof);

        
        $__internal_d226be80c941d2b93b73cb6a66532218e5087da66c15ec80855396c07e6e1602->leave($__internal_d226be80c941d2b93b73cb6a66532218e5087da66c15ec80855396c07e6e1602_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_36b35b23c926d6a45aa4bd8a7c191bd713f6810964896402e02f68f96b42a72b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36b35b23c926d6a45aa4bd8a7c191bd713f6810964896402e02f68f96b42a72b->enter($__internal_36b35b23c926d6a45aa4bd8a7c191bd713f6810964896402e02f68f96b42a72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c222ef7bc23f20bdd5350ced72e15baac2889363b28f67860d15fc1dc498d7ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c222ef7bc23f20bdd5350ced72e15baac2889363b28f67860d15fc1dc498d7ad->enter($__internal_c222ef7bc23f20bdd5350ced72e15baac2889363b28f67860d15fc1dc498d7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
<h2>Liste des producteurs</h2>
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["producers"] ?? $this->getContext($context, "producers")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 13
            echo "  <div>
    ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "name", array()), "html", null, true);
            echo "
    ";
            // line 15
            if ($this->getAttribute($context["p"], "logo", array())) {
                // line 16
                echo "      <img class=\"logo\" src=\"";
                echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo/") . $this->getAttribute($context["p"], "logo", array())), "html", null, true);
                echo "\" alt=\"\">
    ";
            }
            // line 18
            echo "  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
";
        
        $__internal_c222ef7bc23f20bdd5350ced72e15baac2889363b28f67860d15fc1dc498d7ad->leave($__internal_c222ef7bc23f20bdd5350ced72e15baac2889363b28f67860d15fc1dc498d7ad_prof);

        
        $__internal_36b35b23c926d6a45aa4bd8a7c191bd713f6810964896402e02f68f96b42a72b->leave($__internal_36b35b23c926d6a45aa4bd8a7c191bd713f6810964896402e02f68f96b42a72b_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Producer:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 20,  95 => 18,  89 => 16,  87 => 15,  83 => 14,  80 => 13,  76 => 12,  72 => 10,  63 => 9,  50 => 4,  41 => 3,  11 => 1,);
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

{% block css %}
<style>
.logo {width: 75px}
</style>
{% endblock %}

{% block body %}

<h2>Liste des producteurs</h2>
{% for p in producers %}
  <div>
    {{ p.name }}
    {% if p.logo %}
      <img class=\"logo\" src=\"{{ asset('img/logo/') ~ p.logo }}\" alt=\"\">
    {% endif %}
  </div>
{% endfor %}

{% endblock %}
", "AppBundle:Producer:index.html.twig", "/var/www/html/poec-agefos-php/intro_symfony/src/AppBundle/Resources/views/Producer/index.html.twig");
    }
}
