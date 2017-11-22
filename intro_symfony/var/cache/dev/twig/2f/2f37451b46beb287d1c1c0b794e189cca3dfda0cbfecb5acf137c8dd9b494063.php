<?php

/* fruit/details.html.twig */
class __TwigTemplate_0f9f2935264c634011c43cde8709e65d83fd85f08d440b12c4253764c9b1fb06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fruit/details.html.twig", 1);
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
        $__internal_fc73e25d546830dc07a3c4fed585642298a275516d482db51f5053affc4471fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc73e25d546830dc07a3c4fed585642298a275516d482db51f5053affc4471fd->enter($__internal_fc73e25d546830dc07a3c4fed585642298a275516d482db51f5053affc4471fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fruit/details.html.twig"));

        $__internal_b8e9a2659f487293b0d6d993a5d1f59709b04f85227181bfb2daac45026ed38f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8e9a2659f487293b0d6d993a5d1f59709b04f85227181bfb2daac45026ed38f->enter($__internal_b8e9a2659f487293b0d6d993a5d1f59709b04f85227181bfb2daac45026ed38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fruit/details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc73e25d546830dc07a3c4fed585642298a275516d482db51f5053affc4471fd->leave($__internal_fc73e25d546830dc07a3c4fed585642298a275516d482db51f5053affc4471fd_prof);

        
        $__internal_b8e9a2659f487293b0d6d993a5d1f59709b04f85227181bfb2daac45026ed38f->leave($__internal_b8e9a2659f487293b0d6d993a5d1f59709b04f85227181bfb2daac45026ed38f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8ebd0dfcc6de64ce0ee212a241565d8a20ba8560f01a4b126f515377fcc075d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8ebd0dfcc6de64ce0ee212a241565d8a20ba8560f01a4b126f515377fcc075d->enter($__internal_e8ebd0dfcc6de64ce0ee212a241565d8a20ba8560f01a4b126f515377fcc075d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_257048fc04d6fff740b9b836d1634dfc3ee92f95343acd6ce00097d70303d2cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_257048fc04d6fff740b9b836d1634dfc3ee92f95343acd6ce00097d70303d2cc->enter($__internal_257048fc04d6fff740b9b836d1634dfc3ee92f95343acd6ce00097d70303d2cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h3>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["fruit"] ?? $this->getContext($context, "fruit")), "name", array()), "html", null, true);
        echo "</h3>

<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-6\">
      <div>
        <strong>Origine: </strong>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["fruit"] ?? $this->getContext($context, "fruit")), "origin", array()), "html", null, true);
        echo "
      </div>
      <div>
        <strong>Comestible: </strong>
        ";
        // line 15
        if ($this->getAttribute(($context["fruit"] ?? $this->getContext($context, "fruit")), "comestible", array())) {
            echo " oui
        ";
        } else {
            // line 16
            echo " non
        ";
        }
        // line 18
        echo "      </div>
      <div>
        ";
        // line 20
        if ($this->getAttribute(($context["fruit"] ?? $this->getContext($context, "fruit")), "producer", array())) {
            // line 21
            echo "        <strong>Producteur: </strong>
        <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("producer_details", array("id" => $this->getAttribute($this->getAttribute(($context["fruit"] ?? $this->getContext($context, "fruit")), "producer", array()), "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["fruit"] ?? $this->getContext($context, "fruit")), "producer", array()), "name", array()), "html", null, true);
            echo "
        </a>
        ";
        }
        // line 26
        echo "      </div>
      <div>
        ";
        // line 28
        if ((twig_length_filter($this->env, $this->getAttribute(($context["fruit"] ?? $this->getContext($context, "fruit")), "retailors", array())) > 0)) {
            // line 29
            echo "          <strong>Détaillants: </strong>
          ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["fruit"] ?? $this->getContext($context, "fruit")), "retailors", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 31
                echo "            <div>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "name", array()), "html", null, true);
                echo "</div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "        ";
        }
        // line 34
        echo "      </div>
      <div>
        ";
        // line 36
        if ((twig_length_filter($this->env, $this->getAttribute(($context["fruit"] ?? $this->getContext($context, "fruit")), "category", array())) > 0)) {
            // line 37
            echo "          <strong>Catégories: </strong>
          ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["fruit"] ?? $this->getContext($context, "fruit")), "category", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 39
                echo "            <div>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "name", array()), "html", null, true);
                echo "</div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "        ";
        }
        // line 42
        echo "      </div>

    </div>
    <div class=\"col-md-6\">

    </div>
  </div>
</div>

";
        
        $__internal_257048fc04d6fff740b9b836d1634dfc3ee92f95343acd6ce00097d70303d2cc->leave($__internal_257048fc04d6fff740b9b836d1634dfc3ee92f95343acd6ce00097d70303d2cc_prof);

        
        $__internal_e8ebd0dfcc6de64ce0ee212a241565d8a20ba8560f01a4b126f515377fcc075d->leave($__internal_e8ebd0dfcc6de64ce0ee212a241565d8a20ba8560f01a4b126f515377fcc075d_prof);

    }

    public function getTemplateName()
    {
        return "fruit/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 42,  143 => 41,  134 => 39,  130 => 38,  127 => 37,  125 => 36,  121 => 34,  118 => 33,  109 => 31,  105 => 30,  102 => 29,  100 => 28,  96 => 26,  90 => 23,  86 => 22,  83 => 21,  81 => 20,  77 => 18,  73 => 16,  68 => 15,  61 => 11,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

<h3>{{fruit.name}}</h3>

<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-6\">
      <div>
        <strong>Origine: </strong>{{fruit.origin}}
      </div>
      <div>
        <strong>Comestible: </strong>
        {% if fruit.comestible %} oui
        {% else %} non
        {% endif %}
      </div>
      <div>
        {% if fruit.producer %}
        <strong>Producteur: </strong>
        <a href=\"{{path('producer_details', {'id': fruit.producer.id})}}\">
          {{fruit.producer.name}}
        </a>
        {% endif %}
      </div>
      <div>
        {% if fruit.retailors | length > 0 %}
          <strong>Détaillants: </strong>
          {% for r in fruit.retailors %}
            <div>{{r.name}}</div>
          {% endfor %}
        {% endif %}
      </div>
      <div>
        {% if fruit.category | length > 0 %}
          <strong>Catégories: </strong>
          {% for c in fruit.category %}
            <div>{{c.name}}</div>
          {% endfor %}
        {% endif %}
      </div>

    </div>
    <div class=\"col-md-6\">

    </div>
  </div>
</div>

{% endblock %}
", "fruit/details.html.twig", "/var/www/html/poec-agefos-php/intro_symfony/app/Resources/views/fruit/details.html.twig");
    }
}
