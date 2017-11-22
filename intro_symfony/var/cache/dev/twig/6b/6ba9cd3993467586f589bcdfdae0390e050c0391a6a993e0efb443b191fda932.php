<?php

/* fruit/update.html.twig */
class __TwigTemplate_8d05c2644116d151a92bff63be674550335a4a9e312eb7b1304d564a068c3917 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fruit/update.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbcddd0ec5b1bc7a862f1592bd16cbfb0433a571493e8ba9468dd45d2a0ba314 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbcddd0ec5b1bc7a862f1592bd16cbfb0433a571493e8ba9468dd45d2a0ba314->enter($__internal_dbcddd0ec5b1bc7a862f1592bd16cbfb0433a571493e8ba9468dd45d2a0ba314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fruit/update.html.twig"));

        $__internal_4ab56289f4cd5df9a2e9b669935553188ef180cbac3c487872563947eb3ddb88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ab56289f4cd5df9a2e9b669935553188ef180cbac3c487872563947eb3ddb88->enter($__internal_4ab56289f4cd5df9a2e9b669935553188ef180cbac3c487872563947eb3ddb88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fruit/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbcddd0ec5b1bc7a862f1592bd16cbfb0433a571493e8ba9468dd45d2a0ba314->leave($__internal_dbcddd0ec5b1bc7a862f1592bd16cbfb0433a571493e8ba9468dd45d2a0ba314_prof);

        
        $__internal_4ab56289f4cd5df9a2e9b669935553188ef180cbac3c487872563947eb3ddb88->leave($__internal_4ab56289f4cd5df9a2e9b669935553188ef180cbac3c487872563947eb3ddb88_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5eda5918e713a27a5423605ec9f7552181379d558c0ffe0885ad6dc5a038f115 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eda5918e713a27a5423605ec9f7552181379d558c0ffe0885ad6dc5a038f115->enter($__internal_5eda5918e713a27a5423605ec9f7552181379d558c0ffe0885ad6dc5a038f115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_626ab03b55295d457437cabe9a71df43ff1c0b1b451cb6b19add0bb5aeeab961 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_626ab03b55295d457437cabe9a71df43ff1c0b1b451cb6b19add0bb5aeeab961->enter($__internal_626ab03b55295d457437cabe9a71df43ff1c0b1b451cb6b19add0bb5aeeab961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  <h2>Modification du fruit</h2>

  <form class=\"form-inline\" method=\"post\">
    <div class=\"form-group\">
      <input type=\"text\" name=\"name\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["fruit"] ?? $this->getContext($context, "fruit")), "name", array()), "html", null, true);
        echo "\">
    </div>
    <div class=\"form-group\">
      <input type=\"text\" name=\"origin\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["fruit"] ?? $this->getContext($context, "fruit")), "origin", array()), "html", null, true);
        echo "\">
    </div>
    <div class=\"form-group\">
      <label for=\"comestible\">Comestible</label>
      ";
        // line 16
        if (($this->getAttribute(($context["fruit"] ?? $this->getContext($context, "fruit")), "comestible", array()) == 1)) {
            // line 17
            echo "        <input type=\"checkbox\" name=\"comestible\" checked>
      ";
        } else {
            // line 19
            echo "        <input type=\"checkbox\" name=\"comestible\">
      ";
        }
        // line 21
        echo "    </div>
    <input type=\"submit\" name=\"submit\" value=\"Mettre à jour\">
  </form>

";
        
        $__internal_626ab03b55295d457437cabe9a71df43ff1c0b1b451cb6b19add0bb5aeeab961->leave($__internal_626ab03b55295d457437cabe9a71df43ff1c0b1b451cb6b19add0bb5aeeab961_prof);

        
        $__internal_5eda5918e713a27a5423605ec9f7552181379d558c0ffe0885ad6dc5a038f115->leave($__internal_5eda5918e713a27a5423605ec9f7552181379d558c0ffe0885ad6dc5a038f115_prof);

    }

    public function getTemplateName()
    {
        return "fruit/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 21,  75 => 19,  71 => 17,  69 => 16,  62 => 12,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

  <h2>Modification du fruit</h2>

  <form class=\"form-inline\" method=\"post\">
    <div class=\"form-group\">
      <input type=\"text\" name=\"name\" value=\"{{ fruit.name }}\">
    </div>
    <div class=\"form-group\">
      <input type=\"text\" name=\"origin\" value=\"{{ fruit.origin }}\">
    </div>
    <div class=\"form-group\">
      <label for=\"comestible\">Comestible</label>
      {% if fruit.comestible == 1 %}
        <input type=\"checkbox\" name=\"comestible\" checked>
      {% else %}
        <input type=\"checkbox\" name=\"comestible\">
      {% endif %}
    </div>
    <input type=\"submit\" name=\"submit\" value=\"Mettre à jour\">
  </form>

{% endblock %}
", "fruit/update.html.twig", "/var/www/html/poec-agefos-php/intro_symfony/app/Resources/views/fruit/update.html.twig");
    }
}
