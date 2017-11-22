<?php

/* fruit/index.html.twig */
class __TwigTemplate_d21eb80562e73d78c64f7d8aa5fb36ca9cb13266abe43c84ee8f19fbdc35eee1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "fruit/index.html.twig", 1);
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
        $__internal_d5bf109f8d9f1dbd7e7c7664cbff4c6dade779b3685573e84d3f67f8deeacce5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5bf109f8d9f1dbd7e7c7664cbff4c6dade779b3685573e84d3f67f8deeacce5->enter($__internal_d5bf109f8d9f1dbd7e7c7664cbff4c6dade779b3685573e84d3f67f8deeacce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fruit/index.html.twig"));

        $__internal_e787561038b4c1a9ccaa445d516735e34b45a5b3d22a25fd29bf2efa2e72dba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e787561038b4c1a9ccaa445d516735e34b45a5b3d22a25fd29bf2efa2e72dba2->enter($__internal_e787561038b4c1a9ccaa445d516735e34b45a5b3d22a25fd29bf2efa2e72dba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "fruit/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5bf109f8d9f1dbd7e7c7664cbff4c6dade779b3685573e84d3f67f8deeacce5->leave($__internal_d5bf109f8d9f1dbd7e7c7664cbff4c6dade779b3685573e84d3f67f8deeacce5_prof);

        
        $__internal_e787561038b4c1a9ccaa445d516735e34b45a5b3d22a25fd29bf2efa2e72dba2->leave($__internal_e787561038b4c1a9ccaa445d516735e34b45a5b3d22a25fd29bf2efa2e72dba2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6e57d7f5e59cb03aeff0bb8353919e840862ab59bf8fc7c90bde4ce6acbc40c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6e57d7f5e59cb03aeff0bb8353919e840862ab59bf8fc7c90bde4ce6acbc40c->enter($__internal_c6e57d7f5e59cb03aeff0bb8353919e840862ab59bf8fc7c90bde4ce6acbc40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3dde543847e34032f727458a233fb24518f81d11b1dd56d6cfc34d0ce38d088e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dde543847e34032f727458a233fb24518f81d11b1dd56d6cfc34d0ce38d088e->enter($__internal_3dde543847e34032f727458a233fb24518f81d11b1dd56d6cfc34d0ce38d088e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
  <h2>Ajouter un fruit</h2>

  <button id=\"btnHideForm\" type=\"button\">Afficher le formulaire</button>
  <form style=\"display:none\" class=\"form-inline well\" method=\"post\">
    <div class=\"form-group\">
      <input type=\"text\" name=\"name\" placeholder=\"Nom\">
    </div>
    <div class=\"form-group\">
      <input type=\"text\" name=\"origin\" placeholder=\"Origine\">
    </div>
    <div class=\"form-group\">
      <label for=\"comestible\">Comestible</label>
      <input type=\"checkbox\" name=\"comestible\">
    </div>
    <div class=\"form-group\">
      <select name=\"producer_id\">
        <!-- afficher autant d'options qu'il y a de producteurs enregistrés -->
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["producers"] ?? $this->getContext($context, "producers")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 23
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "name", array()), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "      </select>
    </div>
    <div class=\"form-group\">
      <p>Catégories</p>
      ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 30
            echo "        <input name=\"categories[]\" type=\"checkbox\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "name", array()), "html", null, true);
            echo "
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </div>
    <input type=\"submit\" name=\"submit\" value=\"Enregisrer\">
  </form>

  <hr>
  <h2>Liste des fruits</h2>
  <table class=\"table table-bordered table-striped\">
    <tr>
      <th>Nom</th>
      <th>Origine</th>
      <th>Comestible</th>
      <th>Producteur</th>
      <th style=\"display:none\">Détaillants</th>
      <th>Actions</th>
    </tr>
    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fruits"] ?? $this->getContext($context, "fruits")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 48
            echo "      <tr>
        <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "name", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "origin", array()), "html", null, true);
            echo "</td>
        <td>
          ";
            // line 52
            if (($this->getAttribute($context["f"], "comestible", array()) == 1)) {
                // line 53
                echo "            oui
          ";
            } else {
                // line 55
                echo "            non
          ";
            }
            // line 57
            echo "        </td>
        <td>
          ";
            // line 59
            if ($this->getAttribute($context["f"], "producer", array())) {
                // line 60
                echo "            ";
                // line 64
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["f"], "producer", array()), "name", array()), "html", null, true);
                echo "
          ";
            }
            // line 66
            echo "        </td>
        <td style=\"display:none\">
          ";
            // line 68
            if ((twig_length_filter($this->env, $this->getAttribute($context["f"], "retailors", array())) > 0)) {
                // line 69
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["f"], "retailors", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                    // line 70
                    echo "             <div>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "name", array()), "html", null, true);
                    echo "</div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 72
                echo "          ";
            }
            // line 73
            echo "        </td>
        <td>
          <a
            class=\"btn btn-default btn-xs\"
            href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fruit_details", array("id" => $this->getAttribute($context["f"], "id", array()))), "html", null, true);
            echo "\">Détails</a>
          <a
            class=\"btn btn-primary btn-xs\"
            href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fruit_update", array("id" => $this->getAttribute($context["f"], "id", array()))), "html", null, true);
            echo "\">Modifier</a>
          <a
            class=\"btn btn-danger btn-xs\"
            href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fruit_delete", array("id" => $this->getAttribute($context["f"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a>
        </td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "  </table>

";
        
        $__internal_3dde543847e34032f727458a233fb24518f81d11b1dd56d6cfc34d0ce38d088e->leave($__internal_3dde543847e34032f727458a233fb24518f81d11b1dd56d6cfc34d0ce38d088e_prof);

        
        $__internal_c6e57d7f5e59cb03aeff0bb8353919e840862ab59bf8fc7c90bde4ce6acbc40c->leave($__internal_c6e57d7f5e59cb03aeff0bb8353919e840862ab59bf8fc7c90bde4ce6acbc40c_prof);

    }

    // line 91
    public function block_js($context, array $blocks = array())
    {
        $__internal_7f90234e86b1e6f5fa1735991974e0c18fe0913341e4318b4fd2d82b9d844771 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f90234e86b1e6f5fa1735991974e0c18fe0913341e4318b4fd2d82b9d844771->enter($__internal_7f90234e86b1e6f5fa1735991974e0c18fe0913341e4318b4fd2d82b9d844771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_f70b8467f96c211ceb74c9186ecc11d35512e2d7998f9070bc76a6376bf8a814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f70b8467f96c211ceb74c9186ecc11d35512e2d7998f9070bc76a6376bf8a814->enter($__internal_f70b8467f96c211ceb74c9186ecc11d35512e2d7998f9070bc76a6376bf8a814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 92
        echo "  <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_f70b8467f96c211ceb74c9186ecc11d35512e2d7998f9070bc76a6376bf8a814->leave($__internal_f70b8467f96c211ceb74c9186ecc11d35512e2d7998f9070bc76a6376bf8a814_prof);

        
        $__internal_7f90234e86b1e6f5fa1735991974e0c18fe0913341e4318b4fd2d82b9d844771->leave($__internal_7f90234e86b1e6f5fa1735991974e0c18fe0913341e4318b4fd2d82b9d844771_prof);

    }

    public function getTemplateName()
    {
        return "fruit/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 92,  226 => 91,  214 => 87,  204 => 83,  198 => 80,  192 => 77,  186 => 73,  183 => 72,  174 => 70,  169 => 69,  167 => 68,  163 => 66,  157 => 64,  155 => 60,  153 => 59,  149 => 57,  145 => 55,  141 => 53,  139 => 52,  134 => 50,  130 => 49,  127 => 48,  123 => 47,  106 => 32,  95 => 30,  91 => 29,  85 => 25,  74 => 23,  70 => 22,  50 => 4,  41 => 3,  11 => 1,);
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

  <h2>Ajouter un fruit</h2>

  <button id=\"btnHideForm\" type=\"button\">Afficher le formulaire</button>
  <form style=\"display:none\" class=\"form-inline well\" method=\"post\">
    <div class=\"form-group\">
      <input type=\"text\" name=\"name\" placeholder=\"Nom\">
    </div>
    <div class=\"form-group\">
      <input type=\"text\" name=\"origin\" placeholder=\"Origine\">
    </div>
    <div class=\"form-group\">
      <label for=\"comestible\">Comestible</label>
      <input type=\"checkbox\" name=\"comestible\">
    </div>
    <div class=\"form-group\">
      <select name=\"producer_id\">
        <!-- afficher autant d'options qu'il y a de producteurs enregistrés -->
        {% for p in producers %}
          <option value=\"{{p.id}}\">{{p.name}}</option>
        {% endfor %}
      </select>
    </div>
    <div class=\"form-group\">
      <p>Catégories</p>
      {% for c in categories %}
        <input name=\"categories[]\" type=\"checkbox\" value=\"{{c.id}}\">{{c.name}}
      {% endfor %}
    </div>
    <input type=\"submit\" name=\"submit\" value=\"Enregisrer\">
  </form>

  <hr>
  <h2>Liste des fruits</h2>
  <table class=\"table table-bordered table-striped\">
    <tr>
      <th>Nom</th>
      <th>Origine</th>
      <th>Comestible</th>
      <th>Producteur</th>
      <th style=\"display:none\">Détaillants</th>
      <th>Actions</th>
    </tr>
    {% for f in fruits %}
      <tr>
        <td>{{ f.name }}</td>
        <td>{{ f.origin }}</td>
        <td>
          {% if f.comestible == 1 %}
            oui
          {% else %}
            non
          {% endif %}
        </td>
        <td>
          {% if f.producer %}
            {#
              la propriété producer ne vaut pas NULL :
              on peut accéder à la propriété name de l'objet producer
            #}
            {{ f.producer.name }}
          {% endif %}
        </td>
        <td style=\"display:none\">
          {% if f.retailors | length > 0 %}
            {% for r in f.retailors %}
             <div>{{ r.name }}</div>
            {% endfor %}
          {% endif %}
        </td>
        <td>
          <a
            class=\"btn btn-default btn-xs\"
            href=\"{{ path('fruit_details', {'id': f.id}) }}\">Détails</a>
          <a
            class=\"btn btn-primary btn-xs\"
            href=\"{{ path('fruit_update', {'id': f.id}) }}\">Modifier</a>
          <a
            class=\"btn btn-danger btn-xs\"
            href=\"{{ path('fruit_delete', {'id': f.id}) }}\">Supprimer</a>
        </td>
      </tr>
    {% endfor %}
  </table>

{% endblock %}

{% block js %}
  <script type=\"text/javascript\" src=\"{{ asset('js/script.js') }}\"></script>
{% endblock %}
", "fruit/index.html.twig", "/var/www/html/poec-agefos-php/intro_symfony/app/Resources/views/fruit/index.html.twig");
    }
}
