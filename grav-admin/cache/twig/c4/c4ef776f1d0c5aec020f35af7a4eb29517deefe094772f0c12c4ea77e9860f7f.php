<?php

/* modular/base.html.twig */
class __TwigTemplate_124cc891fcecb06b55486414f4b7280e901a9b3b18ea6d899686ed2cc67f01a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
";
    }

    public function getTemplateName()
    {
        return "modular/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ page.content }}
", "modular/base.html.twig", "/Users/pchauhan/Desktop/VICE 2.0/grav-admin/user/themes/ams-wellness/templates/modular/base.html.twig");
    }
}
