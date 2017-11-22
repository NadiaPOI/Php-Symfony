<?php

/* test/fruits.html.twig */
class __TwigTemplate_70ece2a6fe5ab3489b07c26cb35f841f6f3889152624286713155bd702a79aec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "test/fruits.html.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c46c445eaf03260ccbe04aaec9d26b9e1de52ad7d6d9e0bdfd9b31411eb02ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c46c445eaf03260ccbe04aaec9d26b9e1de52ad7d6d9e0bdfd9b31411eb02ec->enter($__internal_1c46c445eaf03260ccbe04aaec9d26b9e1de52ad7d6d9e0bdfd9b31411eb02ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "test/fruits.html.twig"));

        $__internal_1ce188f903cdbb450311ef19eaf9dff3001769cfb47102a5cc28f6210ea551e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ce188f903cdbb450311ef19eaf9dff3001769cfb47102a5cc28f6210ea551e3->enter($__internal_1ce188f903cdbb450311ef19eaf9dff3001769cfb47102a5cc28f6210ea551e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "test/fruits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c46c445eaf03260ccbe04aaec9d26b9e1de52ad7d6d9e0bdfd9b31411eb02ec->leave($__internal_1c46c445eaf03260ccbe04aaec9d26b9e1de52ad7d6d9e0bdfd9b31411eb02ec_prof);

        
        $__internal_1ce188f903cdbb450311ef19eaf9dff3001769cfb47102a5cc28f6210ea551e3->leave($__internal_1ce188f903cdbb450311ef19eaf9dff3001769cfb47102a5cc28f6210ea551e3_prof);

    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        $__internal_815a97878e64e515723526f2c60fd3118af786f8a6b908491b88a17f9c9baff3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_815a97878e64e515723526f2c60fd3118af786f8a6b908491b88a17f9c9baff3->enter($__internal_815a97878e64e515723526f2c60fd3118af786f8a6b908491b88a17f9c9baff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_45446cf44a3136f44b51242f489339eb517b5953d8f0ae0e0384833fd426eb2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45446cf44a3136f44b51242f489339eb517b5953d8f0ae0e0384833fd426eb2f->enter($__internal_45446cf44a3136f44b51242f489339eb517b5953d8f0ae0e0384833fd426eb2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 4
        echo "<style>
  .not-comestible {
    color: orange
  }
</style>
";
        
        $__internal_45446cf44a3136f44b51242f489339eb517b5953d8f0ae0e0384833fd426eb2f->leave($__internal_45446cf44a3136f44b51242f489339eb517b5953d8f0ae0e0384833fd426eb2f_prof);

        
        $__internal_815a97878e64e515723526f2c60fd3118af786f8a6b908491b88a17f9c9baff3->leave($__internal_815a97878e64e515723526f2c60fd3118af786f8a6b908491b88a17f9c9baff3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d49e5621215704d37c90f595c0143d8853e87b282e1a35453716f0a25274ca8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d49e5621215704d37c90f595c0143d8853e87b282e1a35453716f0a25274ca8c->enter($__internal_d49e5621215704d37c90f595c0143d8853e87b282e1a35453716f0a25274ca8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a15218299101a8be44a8431fd3de0278e1b3c4faa77bc9276b82395802d49a9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a15218299101a8be44a8431fd3de0278e1b3c4faa77bc9276b82395802d49a9b->enter($__internal_a15218299101a8be44a8431fd3de0278e1b3c4faa77bc9276b82395802d49a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "<!-- <h1>Liste de fruits (version dynamique, TWIG)</h1> -->

<h1>";
        // line 14
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo "</h1>

<p>
  Message en provenance du controlleur:
  <strong>";
        // line 18
        echo twig_escape_filter($this->env, ($context["message"] ?? $this->getContext($context, "message")), "html", null, true);
        echo "</strong>
</p>

<ul>
  ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fruits"] ?? $this->getContext($context, "fruits")));
        foreach ($context['_seq'] as $context["_key"] => $context["fruit"]) {
            // line 23
            echo "  <li>";
            echo twig_escape_filter($this->env, $context["fruit"], "html", null, true);
            echo "</li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fruit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</ul>

<select>
  ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fruits2"] ?? $this->getContext($context, "fruits2")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 29
            echo "  <option>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "name", array()), "html", null, true);
            echo "</option>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "</select>

<table class=\"table table-bordered table-striped\">
  ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fruits2"] ?? $this->getContext($context, "fruits2")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 35
            echo "  <tr>
    <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "name", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "origin", array()), "html", null, true);
            echo "</td>
    <td>
      ";
            // line 39
            if ( !$this->getAttribute($context["f"], "comestible", array())) {
                echo " <span>Non </span> ";
            }
            echo " comestible
    </td>
  </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "</table>

<table class=\"table table-bordered table-striped\">
  ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fruits3"] ?? $this->getContext($context, "fruits3")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 47
            echo "  <tr>
    <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "name", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "getOrigin", array(), "method"), "html", null, true);
            echo "</td>
    <td>
      ";
            // line 51
            if ($this->getAttribute($context["f"], "comestible", array())) {
                // line 52
                echo "      Aucun risque connu
      ";
            } else {
                // line 54
                echo "      <span class=\"not-comestible\">Dangereux</span>
      ";
            }
            // line 56
            echo "    </td>
    <td>
      ";
            // line 58
            if ($this->getAttribute($context["f"], "wiki", array())) {
                // line 59
                echo "      <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "wiki", array()), "html", null, true);
                echo "\" target=\"_blank\">Article wikipedia</a>
      ";
            }
            // line 61
            echo "    </td>
  </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "</table>



";
        // line 68
        if (($context["toto"] ?? $this->getContext($context, "toto"))) {
            // line 69
            echo "  <p>Toto est vrai</p>
";
        } else {
            // line 71
            echo "  <p>Toto n'est pas vrai (vaut false ou null)</p>
";
        }
        // line 73
        echo "
";
        
        $__internal_a15218299101a8be44a8431fd3de0278e1b3c4faa77bc9276b82395802d49a9b->leave($__internal_a15218299101a8be44a8431fd3de0278e1b3c4faa77bc9276b82395802d49a9b_prof);

        
        $__internal_d49e5621215704d37c90f595c0143d8853e87b282e1a35453716f0a25274ca8c->leave($__internal_d49e5621215704d37c90f595c0143d8853e87b282e1a35453716f0a25274ca8c_prof);

    }

    public function getTemplateName()
    {
        return "test/fruits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 73,  219 => 71,  215 => 69,  213 => 68,  207 => 64,  199 => 61,  193 => 59,  191 => 58,  187 => 56,  183 => 54,  179 => 52,  177 => 51,  172 => 49,  168 => 48,  165 => 47,  161 => 46,  156 => 43,  144 => 39,  139 => 37,  135 => 36,  132 => 35,  128 => 34,  123 => 31,  114 => 29,  110 => 28,  105 => 25,  96 => 23,  92 => 22,  85 => 18,  78 => 14,  74 => 12,  65 => 11,  50 => 4,  41 => 3,  11 => 1,);
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

{% block css %}
<style>
  .not-comestible {
    color: orange
  }
</style>
{% endblock %}

{% block body %}
<!-- <h1>Liste de fruits (version dynamique, TWIG)</h1> -->

<h1>{{ title }}</h1>

<p>
  Message en provenance du controlleur:
  <strong>{{ message }}</strong>
</p>

<ul>
  {% for fruit in fruits %}
  <li>{{ fruit }}</li>
  {% endfor %}
</ul>

<select>
  {% for f in fruits2 %}
  <option>{{ f.name }}</option>
  {% endfor %}
</select>

<table class=\"table table-bordered table-striped\">
  {% for f in fruits2 %}
  <tr>
    <td>{{ f.name }}</td>
    <td>{{ f.origin }}</td>
    <td>
      {% if not f.comestible %} <span>Non </span> {% endif %} comestible
    </td>
  </tr>
  {% endfor %}
</table>

<table class=\"table table-bordered table-striped\">
  {% for f in fruits3 %}
  <tr>
    <td>{{ f.name }}</td>
    <td>{{ f.getOrigin() }}</td>
    <td>
      {% if f.comestible %}
      Aucun risque connu
      {% else %}
      <span class=\"not-comestible\">Dangereux</span>
      {% endif %}
    </td>
    <td>
      {% if f.wiki %}
      <a href=\"{{f.wiki}}\" target=\"_blank\">Article wikipedia</a>
      {% endif %}
    </td>
  </tr>
  {% endfor %}
</table>



{% if toto %}
  <p>Toto est vrai</p>
{% else %}
  <p>Toto n'est pas vrai (vaut false ou null)</p>
{% endif %}

{% endblock %}
", "test/fruits.html.twig", "/var/www/html/poec-agefos-php/intro_symfony/app/Resources/views/test/fruits.html.twig");
    }
}
