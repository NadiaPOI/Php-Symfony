<?php

/* base.html.twig */
class __TwigTemplate_ef6a598e82a5011af52d5b328f0cd2f8830bea5f4c88506ad9e23671aec9697a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0fa9353c02cce9e358f13a379d121e8ffcbae87ac672fddb5b9eb02c0c10ef6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fa9353c02cce9e358f13a379d121e8ffcbae87ac672fddb5b9eb02c0c10ef6a->enter($__internal_0fa9353c02cce9e358f13a379d121e8ffcbae87ac672fddb5b9eb02c0c10ef6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_c4b6fe8b94126ee3caf6f39f9ea22a6a4108c7662df0ddd45a6fc3244e0a6f79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4b6fe8b94126ee3caf6f39f9ea22a6a4108c7662df0ddd45a6fc3244e0a6f79->enter($__internal_c4b6fe8b94126ee3caf6f39f9ea22a6a4108c7662df0ddd45a6fc3244e0a6f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 7
        echo "
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>Intro Symfony par Christophe</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">

        <style>
        /*ul {
          cursor:pointer;
        }
        li:hover > ul {
          display:block !important;
        }*/
        .submenu {
          display: none;
          position: absolute;
          top: 32px;
          left: 15px;
          background-color: #CCC;
          padding: 8px;
          list-style: none;
          border-radius: 4px
        }

        nav ul > li {
          position: relative
        }

        li:hover > ul.submenu {
          display:block
        }
        </style>
        ";
        // line 42
        $this->displayBlock('css', $context, $blocks);
        // line 43
        echo "    </head>
    <body>
      <nav>
        <ul class=\"nav nav-tabs\">
          <li><a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Accueil</a></li>
          <li><a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fruit_admin_page");
        echo "\">Fruits</a></li>
          <li><a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("producer_index");
        echo "\">Producteurs</a></li>
          <li><a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("retailor_index");
        echo "\">Détaillants</a></li>
          <li><a href=\"#\">Test</a>
            <ul class=\"submenu\">
              <li><a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fruits_page");
        echo "\">Fruits</a></li>
              <li><a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fruits_comestibles_page");
        echo "\">Fruits comestibles</a></li>
              <li><a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("example_page");
        echo "\">Exemple</a></li>
            </ul>
          </li>
        </ul>
      </nav>
        ";
        // line 60
        $this->displayBlock('body', $context, $blocks);
        // line 61
        echo "
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 63
        $this->displayBlock('js', $context, $blocks);
        // line 64
        echo "    </body>
</html>
";
        
        $__internal_0fa9353c02cce9e358f13a379d121e8ffcbae87ac672fddb5b9eb02c0c10ef6a->leave($__internal_0fa9353c02cce9e358f13a379d121e8ffcbae87ac672fddb5b9eb02c0c10ef6a_prof);

        
        $__internal_c4b6fe8b94126ee3caf6f39f9ea22a6a4108c7662df0ddd45a6fc3244e0a6f79->leave($__internal_c4b6fe8b94126ee3caf6f39f9ea22a6a4108c7662df0ddd45a6fc3244e0a6f79_prof);

    }

    // line 42
    public function block_css($context, array $blocks = array())
    {
        $__internal_c6661252e799666d6ecbebda47e38b60204793772f74830e9b3ecaab2fecf3e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6661252e799666d6ecbebda47e38b60204793772f74830e9b3ecaab2fecf3e3->enter($__internal_c6661252e799666d6ecbebda47e38b60204793772f74830e9b3ecaab2fecf3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        $__internal_f0dbfb350cff307ec2fbaba94b5e655c1947c2eb168df94fc1c802f165d4f4b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0dbfb350cff307ec2fbaba94b5e655c1947c2eb168df94fc1c802f165d4f4b9->enter($__internal_f0dbfb350cff307ec2fbaba94b5e655c1947c2eb168df94fc1c802f165d4f4b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        
        $__internal_f0dbfb350cff307ec2fbaba94b5e655c1947c2eb168df94fc1c802f165d4f4b9->leave($__internal_f0dbfb350cff307ec2fbaba94b5e655c1947c2eb168df94fc1c802f165d4f4b9_prof);

        
        $__internal_c6661252e799666d6ecbebda47e38b60204793772f74830e9b3ecaab2fecf3e3->leave($__internal_c6661252e799666d6ecbebda47e38b60204793772f74830e9b3ecaab2fecf3e3_prof);

    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
        $__internal_66f49710c5a7827bdc582f1afca8e50fd1ba4d04ba03c40fe5844162597fe746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66f49710c5a7827bdc582f1afca8e50fd1ba4d04ba03c40fe5844162597fe746->enter($__internal_66f49710c5a7827bdc582f1afca8e50fd1ba4d04ba03c40fe5844162597fe746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b300abd9fe1c85a6fb470e001545781511e47b3d30dda79cab5a5dc4387c74a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b300abd9fe1c85a6fb470e001545781511e47b3d30dda79cab5a5dc4387c74a8->enter($__internal_b300abd9fe1c85a6fb470e001545781511e47b3d30dda79cab5a5dc4387c74a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b300abd9fe1c85a6fb470e001545781511e47b3d30dda79cab5a5dc4387c74a8->leave($__internal_b300abd9fe1c85a6fb470e001545781511e47b3d30dda79cab5a5dc4387c74a8_prof);

        
        $__internal_66f49710c5a7827bdc582f1afca8e50fd1ba4d04ba03c40fe5844162597fe746->leave($__internal_66f49710c5a7827bdc582f1afca8e50fd1ba4d04ba03c40fe5844162597fe746_prof);

    }

    // line 63
    public function block_js($context, array $blocks = array())
    {
        $__internal_fa2a8f30c90690279262c15ad2bf31d559c8a88103c423c22586094751bba392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa2a8f30c90690279262c15ad2bf31d559c8a88103c423c22586094751bba392->enter($__internal_fa2a8f30c90690279262c15ad2bf31d559c8a88103c423c22586094751bba392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_05afeb290dae2f620b51387d9c229b9d00f0484b0aeb6cefc071bf4d1d5d187b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05afeb290dae2f620b51387d9c229b9d00f0484b0aeb6cefc071bf4d1d5d187b->enter($__internal_05afeb290dae2f620b51387d9c229b9d00f0484b0aeb6cefc071bf4d1d5d187b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_05afeb290dae2f620b51387d9c229b9d00f0484b0aeb6cefc071bf4d1d5d187b->leave($__internal_05afeb290dae2f620b51387d9c229b9d00f0484b0aeb6cefc071bf4d1d5d187b_prof);

        
        $__internal_fa2a8f30c90690279262c15ad2bf31d559c8a88103c423c22586094751bba392->leave($__internal_fa2a8f30c90690279262c15ad2bf31d559c8a88103c423c22586094751bba392_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 63,  150 => 60,  133 => 42,  121 => 64,  119 => 63,  115 => 62,  112 => 61,  110 => 60,  102 => 55,  98 => 54,  94 => 53,  88 => 50,  84 => 49,  80 => 48,  76 => 47,  70 => 43,  68 => 42,  36 => 13,  28 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# commentaire

{{ }} permet de lire une variable
{% %} permet de définir in bloc d'instructions (exemple: for in, if)

#}

<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>Intro Symfony par Christophe</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">

        <style>
        /*ul {
          cursor:pointer;
        }
        li:hover > ul {
          display:block !important;
        }*/
        .submenu {
          display: none;
          position: absolute;
          top: 32px;
          left: 15px;
          background-color: #CCC;
          padding: 8px;
          list-style: none;
          border-radius: 4px
        }

        nav ul > li {
          position: relative
        }

        li:hover > ul.submenu {
          display:block
        }
        </style>
        {% block css %}{% endblock %}
    </head>
    <body>
      <nav>
        <ul class=\"nav nav-tabs\">
          <li><a href=\"{{ path('homepage') }}\">Accueil</a></li>
          <li><a href=\"{{ path('fruit_admin_page') }}\">Fruits</a></li>
          <li><a href=\"{{ path('producer_index') }}\">Producteurs</a></li>
          <li><a href=\"{{ path('retailor_index') }}\">Détaillants</a></li>
          <li><a href=\"#\">Test</a>
            <ul class=\"submenu\">
              <li><a href=\"{{ path('fruits_page') }}\">Fruits</a></li>
              <li><a href=\"{{ path('fruits_comestibles_page') }}\">Fruits comestibles</a></li>
              <li><a href=\"{{ path('example_page') }}\">Exemple</a></li>
            </ul>
          </li>
        </ul>
      </nav>
        {% block body %}{% endblock %}

    <script src=\"{{asset('js/jquery-3.2.1.min.js')}}\"></script>
    {% block js %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/poec-agefos-php/intro_symfony/app/Resources/views/base.html.twig");
    }
}
