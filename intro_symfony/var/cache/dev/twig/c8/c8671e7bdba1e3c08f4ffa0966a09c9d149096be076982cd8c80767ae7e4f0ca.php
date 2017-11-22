<?php

/* client.html.twig */
class __TwigTemplate_ef99a169a10c25817b31fc8c94b932114adffc557177d4690c3f57ec2977f286 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "client.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_994ce94d0b25a5832ac816b0479e1096dcd3dc7b098b8e9594ae5ca151a11b35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_994ce94d0b25a5832ac816b0479e1096dcd3dc7b098b8e9594ae5ca151a11b35->enter($__internal_994ce94d0b25a5832ac816b0479e1096dcd3dc7b098b8e9594ae5ca151a11b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client.html.twig"));

        $__internal_2bcb45bd78d9c14d199e31db38982fb6b2cdfbc6a3118c9b16c349afba42196f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bcb45bd78d9c14d199e31db38982fb6b2cdfbc6a3118c9b16c349afba42196f->enter($__internal_2bcb45bd78d9c14d199e31db38982fb6b2cdfbc6a3118c9b16c349afba42196f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_994ce94d0b25a5832ac816b0479e1096dcd3dc7b098b8e9594ae5ca151a11b35->leave($__internal_994ce94d0b25a5832ac816b0479e1096dcd3dc7b098b8e9594ae5ca151a11b35_prof);

        
        $__internal_2bcb45bd78d9c14d199e31db38982fb6b2cdfbc6a3118c9b16c349afba42196f->leave($__internal_2bcb45bd78d9c14d199e31db38982fb6b2cdfbc6a3118c9b16c349afba42196f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aca805ce61d65236776c577a911bba40b30b2d7d0809b1ecee6b0e1f16ffe2cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aca805ce61d65236776c577a911bba40b30b2d7d0809b1ecee6b0e1f16ffe2cd->enter($__internal_aca805ce61d65236776c577a911bba40b30b2d7d0809b1ecee6b0e1f16ffe2cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6295130e0d82d9ca96e51ffd74758651a7ee14b647509705cf309644016a25f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6295130e0d82d9ca96e51ffd74758651a7ee14b647509705cf309644016a25f4->enter($__internal_6295130e0d82d9ca96e51ffd74758651a7ee14b647509705cf309644016a25f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  <h2>Ajax</h2>
  <div id=\"app\">
    <button type=\"button\" id=\"btnTestAjax\">Test Ajax</button>
    <button type=\"button\" id=\"btnListFruits\">Liste des Fruits</button>
    Afficher en tant que
    <select id=\"selectFormat\">
      <option value=\"list\">Liste</option>
      <option value=\"table\">Tableau</option>
    </select>
    <div id=\"fruitDisplay\"></div>
  </div>

";
        
        $__internal_6295130e0d82d9ca96e51ffd74758651a7ee14b647509705cf309644016a25f4->leave($__internal_6295130e0d82d9ca96e51ffd74758651a7ee14b647509705cf309644016a25f4_prof);

        
        $__internal_aca805ce61d65236776c577a911bba40b30b2d7d0809b1ecee6b0e1f16ffe2cd->leave($__internal_aca805ce61d65236776c577a911bba40b30b2d7d0809b1ecee6b0e1f16ffe2cd_prof);

    }

    // line 19
    public function block_js($context, array $blocks = array())
    {
        $__internal_43261334dc723b50025120cdb6476af12e7d282bbf6351c63432247210e4af31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43261334dc723b50025120cdb6476af12e7d282bbf6351c63432247210e4af31->enter($__internal_43261334dc723b50025120cdb6476af12e7d282bbf6351c63432247210e4af31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_c8e6359eedbd3d7ed1758c4cf46de3b231103988975528e96d95c9c2a1d56883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8e6359eedbd3d7ed1758c4cf46de3b231103988975528e96d95c9c2a1d56883->enter($__internal_c8e6359eedbd3d7ed1758c4cf46de3b231103988975528e96d95c9c2a1d56883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 20
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/client.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_c8e6359eedbd3d7ed1758c4cf46de3b231103988975528e96d95c9c2a1d56883->leave($__internal_c8e6359eedbd3d7ed1758c4cf46de3b231103988975528e96d95c9c2a1d56883_prof);

        
        $__internal_43261334dc723b50025120cdb6476af12e7d282bbf6351c63432247210e4af31->leave($__internal_43261334dc723b50025120cdb6476af12e7d282bbf6351c63432247210e4af31_prof);

    }

    public function getTemplateName()
    {
        return "client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 20,  73 => 19,  50 => 4,  41 => 3,  11 => 1,);
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

  <h2>Ajax</h2>
  <div id=\"app\">
    <button type=\"button\" id=\"btnTestAjax\">Test Ajax</button>
    <button type=\"button\" id=\"btnListFruits\">Liste des Fruits</button>
    Afficher en tant que
    <select id=\"selectFormat\">
      <option value=\"list\">Liste</option>
      <option value=\"table\">Tableau</option>
    </select>
    <div id=\"fruitDisplay\"></div>
  </div>

{% endblock%}

{% block js %}
  <script src=\"{{ asset('js/client.js') }}\"></script>
{% endblock %}
", "client.html.twig", "/var/www/html/poec-agefos-php/intro_symfony/app/Resources/views/client.html.twig");
    }
}
