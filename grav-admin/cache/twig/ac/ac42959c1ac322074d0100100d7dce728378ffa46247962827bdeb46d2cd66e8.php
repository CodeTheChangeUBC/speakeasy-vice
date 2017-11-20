<?php

/* andrea.html.twig */
class __TwigTemplate_4df0d7d45d34e0e277ba0e65e24b2230e0f1b1490b9046fce3a39cb958daafd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/pagebase.html.twig", "andrea.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/pagebase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
";
    }

    public function getTemplateName()
    {
        return "andrea.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/pagebase.html.twig' %}

{% block content %}
    {{ page.content }}
{% endblock %}
", "andrea.html.twig", "/Users/andrea/Desktop/CTC VICE/speakeasy-vice/grav-admin/user/themes/speakeasy-vice/templates/andrea.html.twig");
    }
}
