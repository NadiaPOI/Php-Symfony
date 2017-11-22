<?php

/* AppBundle:Producer:add.html.twig */
class __TwigTemplate_9c97cbd2abd28a9c6f796bd192db2c48b08c5347317531337b4479c42d227887 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Producer:add.html.twig", 1);
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
        $__internal_a66639da6c05e0742df404d0f03173b1c703721dd40cfef5249d868241763077 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a66639da6c05e0742df404d0f03173b1c703721dd40cfef5249d868241763077->enter($__internal_a66639da6c05e0742df404d0f03173b1c703721dd40cfef5249d868241763077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Producer:add.html.twig"));

        $__internal_30c57fc8baf9e4220c81e98096054de8d3b21c8e309723054a0186ffc8321d12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30c57fc8baf9e4220c81e98096054de8d3b21c8e309723054a0186ffc8321d12->enter($__internal_30c57fc8baf9e4220c81e98096054de8d3b21c8e309723054a0186ffc8321d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Producer:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a66639da6c05e0742df404d0f03173b1c703721dd40cfef5249d868241763077->leave($__internal_a66639da6c05e0742df404d0f03173b1c703721dd40cfef5249d868241763077_prof);

        
        $__internal_30c57fc8baf9e4220c81e98096054de8d3b21c8e309723054a0186ffc8321d12->leave($__internal_30c57fc8baf9e4220c81e98096054de8d3b21c8e309723054a0186ffc8321d12_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_695a8d6a4f91b7d71573d7b5389978c6848bfebc901154af2a6f55f6a840f1b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_695a8d6a4f91b7d71573d7b5389978c6848bfebc901154af2a6f55f6a840f1b2->enter($__internal_695a8d6a4f91b7d71573d7b5389978c6848bfebc901154af2a6f55f6a840f1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8619f1d42c5cedf8dc07b938d3b7f84e5b3d61574a3c67194449494d13056d7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8619f1d42c5cedf8dc07b938d3b7f84e5b3d61574a3c67194449494d13056d7d->enter($__internal_8619f1d42c5cedf8dc07b938d3b7f84e5b3d61574a3c67194449494d13056d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h2>Ajout d'un producteur</h2>
<!-- https://symfony.com/doc/current/form/rendering.html -->

";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

  <div class=\"form-group\">
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'label');
        echo "
    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "perso", "style" => (("border:2px " .         // line 15
($context["color"] ?? $this->getContext($context, "color"))) . " dotted"), "placeholder" =>         // line 16
($context["message"] ?? $this->getContext($context, "message")))));
        // line 19
        echo "
  </div>

  <div class=\"form-group\">
    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'label', array("label" => "Nom"));
        echo "
    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
  </div>

  <div class=\"form-group\">
    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "logo", array()), 'label');
        echo "
    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "logo", array()), 'widget');
        echo "
  </div>

  <div class=\"form-group\">
    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "submit", array()), 'label');
        echo "
    ";
        // line 35
        echo         // line 36
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-xs btn-primary")));
        // line 39
        echo "
  </div>

";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_8619f1d42c5cedf8dc07b938d3b7f84e5b3d61574a3c67194449494d13056d7d->leave($__internal_8619f1d42c5cedf8dc07b938d3b7f84e5b3d61574a3c67194449494d13056d7d_prof);

        
        $__internal_695a8d6a4f91b7d71573d7b5389978c6848bfebc901154af2a6f55f6a840f1b2->leave($__internal_695a8d6a4f91b7d71573d7b5389978c6848bfebc901154af2a6f55f6a840f1b2_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Producer:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 42,  111 => 39,  109 => 36,  108 => 35,  104 => 34,  97 => 30,  93 => 29,  86 => 25,  82 => 24,  78 => 23,  72 => 19,  70 => 16,  69 => 15,  68 => 12,  64 => 11,  60 => 10,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
<h2>Ajout d'un producteur</h2>
<!-- https://symfony.com/doc/current/form/rendering.html -->

{{ form_start(form) }}

  <div class=\"form-group\">
    {{ form_label(form.email) }}
    {{ form_errors(form.email) }}
    {{ form_widget(form.email, {'attr':
      {
        'class': 'perso',
        'style': 'border:2px '~ color ~' dotted',
        'placeholder': message
      }
    })
    }}
  </div>

  <div class=\"form-group\">
    {{ form_label(form.name, 'Nom') }}
    {{ form_errors(form.name) }}
    {{ form_widget(form.name) }}
  </div>

  <div class=\"form-group\">
    {{ form_label(form.logo) }}
    {{ form_widget(form.logo) }}
  </div>

  <div class=\"form-group\">
    {{ form_label(form.submit) }}
    {{
      form_widget(form.submit, {'attr': {
        'class': 'btn btn-xs btn-primary'
      }})
    }}
  </div>

{{ form_end(form) }}

{% endblock %}
", "AppBundle:Producer:add.html.twig", "/var/www/html/poec-agefos-php/intro_symfony/src/AppBundle/Resources/views/Producer/add.html.twig");
    }
}
