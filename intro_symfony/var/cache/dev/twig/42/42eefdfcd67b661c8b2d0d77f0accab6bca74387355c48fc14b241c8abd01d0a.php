<?php

/* default/index.html.twig */
class __TwigTemplate_c12f1c8e427dafa37c304deaf8933f5490e0b276f70ac2796157b4e87ca63c80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_5d2d7bdc8a83709334b2d017fe00ef59e64e836fb34bf324bffb776ea1a05bf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d2d7bdc8a83709334b2d017fe00ef59e64e836fb34bf324bffb776ea1a05bf4->enter($__internal_5d2d7bdc8a83709334b2d017fe00ef59e64e836fb34bf324bffb776ea1a05bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_8308f90434fe03cbc5d64069f4f83e717e3cedc9e0258f7ac9e1731257218928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8308f90434fe03cbc5d64069f4f83e717e3cedc9e0258f7ac9e1731257218928->enter($__internal_8308f90434fe03cbc5d64069f4f83e717e3cedc9e0258f7ac9e1731257218928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d2d7bdc8a83709334b2d017fe00ef59e64e836fb34bf324bffb776ea1a05bf4->leave($__internal_5d2d7bdc8a83709334b2d017fe00ef59e64e836fb34bf324bffb776ea1a05bf4_prof);

        
        $__internal_8308f90434fe03cbc5d64069f4f83e717e3cedc9e0258f7ac9e1731257218928->leave($__internal_8308f90434fe03cbc5d64069f4f83e717e3cedc9e0258f7ac9e1731257218928_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f69679d57a5535446addc4230939837a1c56d13aa14681077506886d2e4e04aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f69679d57a5535446addc4230939837a1c56d13aa14681077506886d2e4e04aa->enter($__internal_f69679d57a5535446addc4230939837a1c56d13aa14681077506886d2e4e04aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_11e215e57d0ff736977d5637fc7b914bd9486de02f0d7ec937710b241c06481c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11e215e57d0ff736977d5637fc7b914bd9486de02f0d7ec937710b241c06481c->enter($__internal_11e215e57d0ff736977d5637fc7b914bd9486de02f0d7ec937710b241c06481c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  <p>J'apprends Symfony et j'en suis fier</p>

";
        
        $__internal_11e215e57d0ff736977d5637fc7b914bd9486de02f0d7ec937710b241c06481c->leave($__internal_11e215e57d0ff736977d5637fc7b914bd9486de02f0d7ec937710b241c06481c_prof);

        
        $__internal_f69679d57a5535446addc4230939837a1c56d13aa14681077506886d2e4e04aa->leave($__internal_f69679d57a5535446addc4230939837a1c56d13aa14681077506886d2e4e04aa_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

  <p>J'apprends Symfony et j'en suis fier</p>

{% endblock %}
", "default/index.html.twig", "/var/www/html/poec-agefos-php/intro_symfony/app/Resources/views/default/index.html.twig");
    }
}
