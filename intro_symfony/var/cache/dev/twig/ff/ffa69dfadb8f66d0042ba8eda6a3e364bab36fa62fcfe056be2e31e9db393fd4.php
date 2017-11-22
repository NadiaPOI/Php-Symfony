<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_5bb381d2016f4fb31ed76213b789caa25a3f81b0f29e559643b0dd7ce9f134c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72beecbdeab038b3e76a991d3c27c4bd156e8c36718c2ab5c580b7db4a8fe717 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72beecbdeab038b3e76a991d3c27c4bd156e8c36718c2ab5c580b7db4a8fe717->enter($__internal_72beecbdeab038b3e76a991d3c27c4bd156e8c36718c2ab5c580b7db4a8fe717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_524208799fd6aa1aa886ea5c591a7d31cef3357a0bb2ff88df7ffde1794be1ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_524208799fd6aa1aa886ea5c591a7d31cef3357a0bb2ff88df7ffde1794be1ae->enter($__internal_524208799fd6aa1aa886ea5c591a7d31cef3357a0bb2ff88df7ffde1794be1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_72beecbdeab038b3e76a991d3c27c4bd156e8c36718c2ab5c580b7db4a8fe717->leave($__internal_72beecbdeab038b3e76a991d3c27c4bd156e8c36718c2ab5c580b7db4a8fe717_prof);

        
        $__internal_524208799fd6aa1aa886ea5c591a7d31cef3357a0bb2ff88df7ffde1794be1ae->leave($__internal_524208799fd6aa1aa886ea5c591a7d31cef3357a0bb2ff88df7ffde1794be1ae_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_54b4d7dcdb71aeddf54ec3e3b39d8eb47608ffeb8ab01ffee9c3e1ee184ad553 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54b4d7dcdb71aeddf54ec3e3b39d8eb47608ffeb8ab01ffee9c3e1ee184ad553->enter($__internal_54b4d7dcdb71aeddf54ec3e3b39d8eb47608ffeb8ab01ffee9c3e1ee184ad553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6992d7d86c856a097a358e697b80a315ebc3ae63c951e2f3e331e8e26b3ca36f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6992d7d86c856a097a358e697b80a315ebc3ae63c951e2f3e331e8e26b3ca36f->enter($__internal_6992d7d86c856a097a358e697b80a315ebc3ae63c951e2f3e331e8e26b3ca36f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6992d7d86c856a097a358e697b80a315ebc3ae63c951e2f3e331e8e26b3ca36f->leave($__internal_6992d7d86c856a097a358e697b80a315ebc3ae63c951e2f3e331e8e26b3ca36f_prof);

        
        $__internal_54b4d7dcdb71aeddf54ec3e3b39d8eb47608ffeb8ab01ffee9c3e1ee184ad553->leave($__internal_54b4d7dcdb71aeddf54ec3e3b39d8eb47608ffeb8ab01ffee9c3e1ee184ad553_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_ffaa3705a7d4c3639d8e3d653aead3b35a4a13de26bf2f1eb6d0650b2f4ddd2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffaa3705a7d4c3639d8e3d653aead3b35a4a13de26bf2f1eb6d0650b2f4ddd2e->enter($__internal_ffaa3705a7d4c3639d8e3d653aead3b35a4a13de26bf2f1eb6d0650b2f4ddd2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f5f0ca032173b0df47cb8deb4be17ba5330ce125dd2bd76471b6882ea39cb32b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5f0ca032173b0df47cb8deb4be17ba5330ce125dd2bd76471b6882ea39cb32b->enter($__internal_f5f0ca032173b0df47cb8deb4be17ba5330ce125dd2bd76471b6882ea39cb32b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_f5f0ca032173b0df47cb8deb4be17ba5330ce125dd2bd76471b6882ea39cb32b->leave($__internal_f5f0ca032173b0df47cb8deb4be17ba5330ce125dd2bd76471b6882ea39cb32b_prof);

        
        $__internal_ffaa3705a7d4c3639d8e3d653aead3b35a4a13de26bf2f1eb6d0650b2f4ddd2e->leave($__internal_ffaa3705a7d4c3639d8e3d653aead3b35a4a13de26bf2f1eb6d0650b2f4ddd2e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_10837b882ba4af77f44d77206d2bc94732eeb21db9e55bab98d83267307f6176 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10837b882ba4af77f44d77206d2bc94732eeb21db9e55bab98d83267307f6176->enter($__internal_10837b882ba4af77f44d77206d2bc94732eeb21db9e55bab98d83267307f6176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ce6b229b9859b853280b8359d6183f92078838e290e6aa96992bfbae12f71d1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce6b229b9859b853280b8359d6183f92078838e290e6aa96992bfbae12f71d1d->enter($__internal_ce6b229b9859b853280b8359d6183f92078838e290e6aa96992bfbae12f71d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ce6b229b9859b853280b8359d6183f92078838e290e6aa96992bfbae12f71d1d->leave($__internal_ce6b229b9859b853280b8359d6183f92078838e290e6aa96992bfbae12f71d1d_prof);

        
        $__internal_10837b882ba4af77f44d77206d2bc94732eeb21db9e55bab98d83267307f6176->leave($__internal_10837b882ba4af77f44d77206d2bc94732eeb21db9e55bab98d83267307f6176_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/poec-agefos-php/intro_symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
