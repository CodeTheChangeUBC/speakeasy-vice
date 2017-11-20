<?php

/* partials/pagebase.html.twig */
class __TwigTemplate_dadbe539235cdd97641af31e30adf044f574f2fe46e48d1c906399876082f591 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "
<!DOCTYPE html>

<html lang=\"";
        // line 5
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", array())));
        echo "\">
  <head>
    ";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 28
        echo "  </head>
  <body>
    ";
        // line 30
        $this->displayBlock('header', $context, $blocks);
        // line 39
        echo "
    ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "
    ";
        // line 46
        $this->displayBlock('footer', $context, $blocks);
        // line 73
        echo "  </body>
</html>
";
    }

    // line 7
    public function block_head($context, array $blocks = array())
    {
        // line 8
        echo "      <title>";
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()), "html");
        echo "</title>
      <meta charset=\"UTF-8\"/>
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
      ";
        // line 12
        $this->loadTemplate("partials/metadata.html.twig", "partials/pagebase.html.twig", 12)->display($context);
        // line 13
        echo "
      <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 14
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png");
        echo "\" />

      ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "      ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

      ";
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "      ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

    ";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/custom.css", 1 => 100), "method");
        // line 18
        echo "      ";
    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        // line 22
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 100), "method");
        // line 23
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/javascript.js", 1 => 100), "method");
        // line 24
        echo "      ";
    }

    // line 30
    public function block_header($context, array $blocks = array())
    {
        // line 31
        echo "
        ";
        // line 32
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 38
        echo "    ";
    }

    // line 32
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 33
        echo "          <nav class=\"header\">
            <p> Menu </p>
            ";
        // line 35
        $this->loadTemplate("partials/navigation.html.twig", "partials/pagebase.html.twig", 35)->display($context);
        // line 36
        echo "          </nav>
        ";
    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        // line 41
        echo "      <div class=\"container\">
        ";
        // line 42
        $this->displayBlock('content', $context, $blocks);
        // line 43
        echo "      </div>
    ";
    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 46
    public function block_footer($context, array $blocks = array())
    {
        // line 47
        echo "      <div class=\"footer\">
        <div class=\"contact\">
          <div class=\"contact-info\">
            <h3> VICE </h3>
            <p> <strong>Location:</strong> AMS Nest 3107, UBC <br>
                <strong>Office Hours:</strong> Tue,Thu: 13:30 - 15:30 <br> or by Appointment <br>
                <strong>Email:</strong> vice@ams.ubc.ca <br>
                <strong>Phone Number:</strong> 604-827-1728
            </p>
          </div>
          <div class=\"contact-info\">
            <h3> Speakeasy </h3>
            <p> <strong>Location:</strong> AMS Nest 3107, UBC <br>
                <strong>Office Hours:</strong> Mon-Fri: 11:00 - 19:00 <br> or by Appointment <br>
                <strong>Email:</strong> speak@ams.ubc.ca <br>
                <strong>Phone Number:</strong> 604-822-9246
            </p>
            <p>
          </div>
        </div>
        <div class=\"copyright\">
          <hr>
          <p> &copy 2017 VICE and Speakeasy. All Rights Reserved. </p>
        </div>
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "partials/pagebase.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 47,  174 => 46,  168 => 42,  163 => 43,  161 => 42,  158 => 41,  155 => 40,  150 => 36,  148 => 35,  144 => 33,  141 => 32,  137 => 38,  135 => 32,  132 => 31,  129 => 30,  125 => 24,  122 => 23,  119 => 22,  116 => 21,  112 => 18,  109 => 17,  106 => 16,  98 => 25,  96 => 21,  90 => 19,  88 => 16,  83 => 14,  80 => 13,  78 => 12,  66 => 8,  63 => 7,  57 => 73,  55 => 46,  52 => 45,  50 => 40,  47 => 39,  45 => 30,  41 => 28,  39 => 7,  34 => 5,  29 => 2,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}

<!DOCTYPE html>

<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
  <head>
    {% block head %}
      <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>
      <meta charset=\"UTF-8\"/>
      <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
      {% include 'partials/metadata.html.twig' %}

      <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/logo.png') }}\" />

      {% block stylesheets %}
        {% do assets.addCss('theme://css/custom.css', 100) %}
      {% endblock %}
      {{ assets.css() }}

      {% block javascripts %}
        {% do assets.addJs('jquery', 100) %}
        {% do assets.addJs('theme://js/javascript.js', 100) %}
      {% endblock %}
      {{ assets.js() }}

    {% endblock %}
  </head>
  <body>
    {% block header %}

        {% block header_navigation %}
          <nav class=\"header\">
            <p> Menu </p>
            {% include 'partials/navigation.html.twig' %}
          </nav>
        {% endblock %}
    {% endblock %}

    {% block body %}
      <div class=\"container\">
        {% block content %} {% endblock %}
      </div>
    {% endblock %}

    {% block footer %}
      <div class=\"footer\">
        <div class=\"contact\">
          <div class=\"contact-info\">
            <h3> VICE </h3>
            <p> <strong>Location:</strong> AMS Nest 3107, UBC <br>
                <strong>Office Hours:</strong> Tue,Thu: 13:30 - 15:30 <br> or by Appointment <br>
                <strong>Email:</strong> vice@ams.ubc.ca <br>
                <strong>Phone Number:</strong> 604-827-1728
            </p>
          </div>
          <div class=\"contact-info\">
            <h3> Speakeasy </h3>
            <p> <strong>Location:</strong> AMS Nest 3107, UBC <br>
                <strong>Office Hours:</strong> Mon-Fri: 11:00 - 19:00 <br> or by Appointment <br>
                <strong>Email:</strong> speak@ams.ubc.ca <br>
                <strong>Phone Number:</strong> 604-822-9246
            </p>
            <p>
          </div>
        </div>
        <div class=\"copyright\">
          <hr>
          <p> &copy 2017 VICE and Speakeasy. All Rights Reserved. </p>
        </div>
      </div>
    {% endblock %}
  </body>
</html>
", "partials/pagebase.html.twig", "/Users/mikaylapreete/Documents/VICE/speakeasy-vice/grav-admin/user/themes/speakeasy-vice/templates/partials/pagebase.html.twig");
    }
}
