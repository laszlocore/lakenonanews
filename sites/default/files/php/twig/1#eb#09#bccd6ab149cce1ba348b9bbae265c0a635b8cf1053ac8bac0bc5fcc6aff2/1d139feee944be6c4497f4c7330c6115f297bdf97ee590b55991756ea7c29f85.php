<?php

/* core/modules/file/templates/file-widget.html.twig */
class __TwigTemplate_eb09bccd6ab149cce1ba348b9bbae265c0a635b8cf1053ac8bac0bc5fcc6aff2 extends Twig_Template
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
        // line 15
        echo "<div";
        echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">
  ";
        // line 16
        echo twig_drupal_escape_filter($this->env, (isset($context["element"]) ? $context["element"] : null), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/file/templates/file-widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 16,  19 => 15,);
    }
}
