<?php

/* partials/navigation.html.twig */
class __TwigTemplate_0a735f955877adf0e2c81fe71c35a372c69a961ab3cdaa8c06a240cb985eea1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
<title>navigation bar</title>
";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "
</head>

<body>
<div class=\"menu\">
<div class=\"pic\">
<img id=\"logo\" src=\"https://bizcentralusa.com/wp-content/uploads/2016/05/placeholder-sample-logo.png\"> </img>
</div>
";
        // line 39
        echo "
<ul>
    ";
        // line 41
        if ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "dropdown", array()), "enabled", array())) {
            // line 42
            echo "        ";
            echo $this->getAttribute($this, "loop", array(0 => ($context["pages"] ?? null)), "method");
            echo "
    ";
        } else {
            // line 44
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["pages"] ?? null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 45
                echo "            ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("selected") : (""));
                // line 46
                echo "            <li class=\"";
                echo ($context["current_page"] ?? null);
                echo "\">
                <a href=\"";
                // line 47
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">
                    ";
                // line 48
                if ($this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array())) {
                    echo "<i class=\"fa fa-";
                    echo $this->getAttribute($this->getAttribute($context["page"], "header", array()), "icon", array());
                    echo "\"></i>";
                }
                // line 49
                echo "                    ";
                echo $this->getAttribute($context["page"], "menu", array());
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "    ";
        }
        // line 54
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 55
            echo "        <li>
            <a href=\"";
            // line 56
            echo $this->getAttribute($context["mitem"], "url", array());
            echo "\">
                ";
            // line 57
            if ($this->getAttribute($context["mitem"], "icon", array())) {
                echo "<i class=\"fa fa-";
                echo $this->getAttribute($context["mitem"], "icon", array());
                echo "\"></i>";
            }
            // line 58
            echo "                ";
            echo $this->getAttribute($context["mitem"], "text", array());
            echo "
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "</ul>
</div>
</body>
</html>
";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/custom.css", 1 => 100), "method");
    }

    // line 16
    public function getloop($__page__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 17
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", array()), "visible", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 18
                echo "        ";
                $context["current_page"] = ((($this->getAttribute($context["p"], "active", array()) || $this->getAttribute($context["p"], "activeChild", array()))) ? ("selected") : (""));
                // line 19
                echo "        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "children", array()), "visible", array()), "count", array()) > 0)) {
                    // line 20
                    echo "            <li class=\"has-children ";
                    echo ($context["current_page"] ?? null);
                    echo "\">
                <a href=\"";
                    // line 21
                    echo $this->getAttribute($context["p"], "url", array());
                    echo "\">
                    ";
                    // line 22
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array())) {
                        echo "<i class=\"fa fa-";
                        echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array());
                        echo "\"></i>";
                    }
                    // line 23
                    echo "                    ";
                    echo $this->getAttribute($context["p"], "menu", array());
                    echo "
                </a>
                <ul>
                    ";
                    // line 26
                    echo $this->getAttribute($this, "loop", array(0 => $context["p"]), "method");
                    echo "
                </ul>
            </li>
        ";
                } else {
                    // line 30
                    echo "            <li class=\"";
                    echo ($context["current_page"] ?? null);
                    echo "\">
                <a href=\"";
                    // line 31
                    echo $this->getAttribute($context["p"], "url", array());
                    echo "\">
                    ";
                    // line 32
                    if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array())) {
                        echo "<i class=\"fa fa-";
                        echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "icon", array());
                        echo "\"></i>";
                    }
                    // line 33
                    echo "                    ";
                    echo $this->getAttribute($context["p"], "menu", array());
                    echo "
                </a>
            </li>
        ";
                }
                // line 37
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 37,  200 => 33,  194 => 32,  190 => 31,  185 => 30,  178 => 26,  171 => 23,  165 => 22,  161 => 21,  156 => 20,  153 => 19,  150 => 18,  145 => 17,  133 => 16,  128 => 6,  125 => 5,  117 => 62,  106 => 58,  100 => 57,  96 => 56,  93 => 55,  88 => 54,  85 => 53,  74 => 49,  68 => 48,  64 => 47,  59 => 46,  56 => 45,  51 => 44,  45 => 42,  43 => 41,  39 => 39,  28 => 8,  26 => 5,  20 => 1,);
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
<title>navigation bar</title>
{% block stylesheets %}
  {% do assets.addCss('theme://css/custom.css', 100) %}
{% endblock %}
{{ assets.css() }}
</head>

<body>
<div class=\"menu\">
<div class=\"pic\">
<img id=\"logo\" src=\"https://bizcentralusa.com/wp-content/uploads/2016/05/placeholder-sample-logo.png\"> </img>
</div>
{% macro loop(page) %}
    {% for p in page.children.visible %}
        {% set current_page = (p.active or p.activeChild) ? 'selected' : '' %}
        {% if p.children.visible.count > 0 %}
            <li class=\"has-children {{ current_page }}\">
                <a href=\"{{ p.url }}\">
                    {% if p.header.icon %}<i class=\"fa fa-{{ p.header.icon }}\"></i>{% endif %}
                    {{ p.menu }}
                </a>
                <ul>
                    {{ _self.loop(p) }}
                </ul>
            </li>
        {% else %}
            <li class=\"{{ current_page }}\">
                <a href=\"{{ p.url }}\">
                    {% if p.header.icon %}<i class=\"fa fa-{{ p.header.icon }}\"></i>{% endif %}
                    {{ p.menu }}
                </a>
            </li>
        {% endif %}
    {% endfor %}
{% endmacro %}

<ul>
    {% if theme_config.dropdown.enabled %}
        {{ _self.loop(pages) }}
    {% else %}
        {% for page in pages.children.visible %}
            {% set current_page = (page.active or page.activeChild) ? 'selected' : '' %}
            <li class=\"{{ current_page }}\">
                <a href=\"{{ page.url }}\">
                    {% if page.header.icon %}<i class=\"fa fa-{{ page.header.icon }}\"></i>{% endif %}
                    {{ page.menu }}
                </a>
            </li>
        {% endfor %}
    {% endif %}
    {% for mitem in site.menu %}
        <li>
            <a href=\"{{ mitem.url }}\">
                {% if mitem.icon %}<i class=\"fa fa-{{ mitem.icon }}\"></i>{% endif %}
                {{ mitem.text }}
            </a>
        </li>
    {% endfor %}
</ul>
</div>
</body>
</html>
<<<<<<< HEAD
", "partials/navigation.html.twig", "/Users/vanessabayubaskoro/Documents/Code the Change/speakeasy-vice/grav-admin/user/themes/speakeasy-vice/templates/partials/navigation.html.twig");
=======
", "partials/navigation.html.twig", "/Users/andrea/Desktop/CTC VICE/speakeasy-vice/grav-admin/user/themes/speakeasy-vice/templates/partials/navigation.html.twig");
>>>>>>> be71aabc6477676ec0542f94b4cc534b853246e5
    }
}
