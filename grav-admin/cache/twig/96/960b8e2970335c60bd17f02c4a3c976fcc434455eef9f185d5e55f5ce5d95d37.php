<?php

/* partials/pagebase.html.twig */
class __TwigTemplate_339f1e9c1131dbf29416e5907b4626dfb70ce4d842233b177ed3a5b5e0923eae extends Twig_Template
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
        // line 36
        echo "  </head>
  <body>
    ";
        // line 39
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 53
        echo "
    ";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo "
    ";
        // line 61
        $this->displayBlock('footer', $context, $blocks);
        // line 99
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
      ";
        // line 16
        echo "      <link rel=\"icon\" type=\"image/png\" href=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png");
        echo "\" />

      ";
        // line 19
        echo "      <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" integrity=\"sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy\" crossorigin=\"anonymous\">
      <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
      <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>

      ";
        // line 24
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "      ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

      ";
        // line 29
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
        echo "      ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

    ";
    }

    // line 24
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 25
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/custom.css", 1 => 100), "method");
        // line 26
        echo "      ";
    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        // line 30
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 100), "method");
        // line 31
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/custom.js", 1 => 100), "method");
        // line 32
        echo "      ";
    }

    // line 39
    public function block_header($context, array $blocks = array())
    {
        // line 40
        echo "      ";
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 52
        echo "    ";
    }

    // line 40
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 41
        echo "        <nav class=\"navbar sticky-top navbar-expand-lg navbar-dark py-3\">
          ";
        // line 43
        echo "          <div class=\"navbar-brand pl-5\">AMS Wellness</div>
          <button class=\"navbar-toggler mr-5\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
          </button>
          <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            ";
        // line 48
        $this->loadTemplate("partials/navigation.html.twig", "partials/pagebase.html.twig", 48)->display($context);
        // line 49
        echo "          </div>
        </nav>
      ";
    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        // line 55
        echo "    <div class=\"container-fluid\">
      ";
        // line 57
        echo "      ";
        $this->displayBlock('content', $context, $blocks);
        // line 58
        echo "    </div>
    ";
    }

    // line 57
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    // line 61
    public function block_footer($context, array $blocks = array())
    {
        // line 62
        echo "    <div class=\"container-fluid footer\">
      <div class=\"container text-center\">
        <div class=\"row pt-4\">
          <div class=\"col-lg-6 col-md-6 col-sm-12\">
            ";
        // line 67
        echo "            <h3> VICE </h3>
            ";
        // line 70
        echo "            <p> <strong>Location:</strong> AMS Nest 3107, UBC <br>
                <strong>Office Hours:</strong> Tue,Thu: 13:30 - 15:30 <br> or by Appointment <br>
                <strong>Email:</strong> vice@ams.ubc.ca <br>
                <strong>Phone Number:</strong> 604.827.1728
            </p>
          </div>
          <div class=\"col-lg-6 col-md-6 col-sm-12\">
            ";
        // line 78
        echo "            <h3> Speakeasy </h3>
            ";
        // line 81
        echo "            <p> <strong>Location:</strong> AMS Nest 3107, UBC <br>
                <strong>Office Hours:</strong> Mon-Fri: 11:00 - 19:00 <br> or by Appointment <br>
                <strong>Email:</strong> speak@ams.ubc.ca <br>
                <strong>Phone Number:</strong> 604.822.9246
            </p>
          </div>
        </div>
        ";
        // line 89
        echo "        <hr>
        <div class=\"row\">
          <div class=\"col-lg-12 col-md-12 col-sm-12\">
            ";
        // line 93
        echo "            <p> Copyright &copy; 2018 VICE and Speakeasy. All Rights Reserved. Website By <a id=\"ctc\" href=\"https://codethechangeubc.org/\" target=\"_blank\"> Code the Change UBC </a> </p>
          </div>
        </div>
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
        return array (  227 => 93,  222 => 89,  213 => 81,  210 => 78,  201 => 70,  198 => 67,  192 => 62,  189 => 61,  183 => 57,  178 => 58,  175 => 57,  172 => 55,  169 => 54,  163 => 49,  161 => 48,  154 => 43,  151 => 41,  148 => 40,  144 => 52,  141 => 40,  138 => 39,  134 => 32,  131 => 31,  128 => 30,  125 => 29,  121 => 26,  118 => 25,  115 => 24,  107 => 33,  105 => 29,  99 => 27,  97 => 24,  90 => 19,  84 => 16,  81 => 13,  79 => 12,  67 => 8,  64 => 7,  58 => 99,  56 => 61,  53 => 60,  51 => 54,  48 => 53,  45 => 39,  41 => 36,  39 => 7,  34 => 5,  29 => 2,  27 => 1,);
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

      {# To add a favicon, put the image file into the folder at themes/ams-wellness/images,
      and insert the path like so {{ url('theme://images/someFile.someExtension') }} #}
      <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/logo.png') }}\" />

      {# Bootstrap #}
      <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css\" integrity=\"sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy\" crossorigin=\"anonymous\">
      <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
      <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js\" integrity=\"sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4\" crossorigin=\"anonymous\"></script>

      {% block stylesheets %}
        {% do assets.addCss('theme://css/custom.css', 100) %}
      {% endblock %}
      {{ assets.css() }}

      {% block javascripts %}
        {% do assets.addJs('jquery', 100) %}
        {% do assets.addJs('theme://js/custom.js', 100) %}
      {% endblock %}
      {{ assets.js() }}

    {% endblock %}
  </head>
  <body>
    {# The navigation bar's base code #}
    {% block header %}
      {% block header_navigation %}
        <nav class=\"navbar sticky-top navbar-expand-lg navbar-dark py-3\">
          {# The text below displays in the navigation bar to the far left #}
          <div class=\"navbar-brand pl-5\">AMS Wellness</div>
          <button class=\"navbar-toggler mr-5\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
          </button>
          <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            {% include 'partials/navigation.html.twig' %}
          </div>
        </nav>
      {% endblock %}
    {% endblock %}

    {% block body %}
    <div class=\"container-fluid\">
      {# All of the page's content is inserted here #}
      {% block content %} {% endblock %}
    </div>
    {% endblock %}

    {% block footer %}
    <div class=\"container-fluid footer\">
      <div class=\"container text-center\">
        <div class=\"row pt-4\">
          <div class=\"col-lg-6 col-md-6 col-sm-12\">
            {# Change the text below to update the contact information for VICE #}
            <h3> VICE </h3>
            {# The <strong>...</strong elements bold the text in between them,
                 The <br> elements create a line break #}
            <p> <strong>Location:</strong> AMS Nest 3107, UBC <br>
                <strong>Office Hours:</strong> Tue,Thu: 13:30 - 15:30 <br> or by Appointment <br>
                <strong>Email:</strong> vice@ams.ubc.ca <br>
                <strong>Phone Number:</strong> 604.827.1728
            </p>
          </div>
          <div class=\"col-lg-6 col-md-6 col-sm-12\">
            {# Change the text below to update the contact information for Speakeasy #}
            <h3> Speakeasy </h3>
            {# The <strong>...</strong elements bold the text in between them,
                 The <br> elements create a line break #}
            <p> <strong>Location:</strong> AMS Nest 3107, UBC <br>
                <strong>Office Hours:</strong> Mon-Fri: 11:00 - 19:00 <br> or by Appointment <br>
                <strong>Email:</strong> speak@ams.ubc.ca <br>
                <strong>Phone Number:</strong> 604.822.9246
            </p>
          </div>
        </div>
        {# Delete the <hr> element to get rid of the line between the contact information and the copyright information #}
        <hr>
        <div class=\"row\">
          <div class=\"col-lg-12 col-md-12 col-sm-12\">
            {# The text displayed at the very bottom of the footer, make sure to change the year when needed #}
            <p> Copyright &copy; 2018 VICE and Speakeasy. All Rights Reserved. Website By <a id=\"ctc\" href=\"https://codethechangeubc.org/\" target=\"_blank\"> Code the Change UBC </a> </p>
          </div>
        </div>
      </div>
    </div>
    {% endblock %}
  </body>
</html>
", "partials/pagebase.html.twig", "/Users/pchauhan/Desktop/VICE 2.0/grav-admin/user/themes/ams-wellness/templates/partials/pagebase.html.twig");
    }
}
