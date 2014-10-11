<?php

/* core/modules/views/templates/views-exposed-form.html.twig */
class __TwigTemplate_0959a815e549421dbc87a797e5a1e792579e155bed92ba083a90192697f2a4d9 extends Twig_Template
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
        // line 14
        if ((!twig_test_empty((isset($context["q"]) ? $context["q"] : null)))) {
            // line 15
            echo "  ";
            // line 19
            echo twig_drupal_escape_filter($this->env, (isset($context["q"]) ? $context["q"] : null), "html", null, true);
            echo "
";
        }
        // line 21
        echo "<div class=\"views-exposed-form clearfix\">
  ";
        // line 22
        echo twig_drupal_escape_filter($this->env, (isset($context["form"]) ? $context["form"] : null), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/views/templates/views-exposed-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 22,  28 => 21,  24 => 17,  59 => 35,  56 => 33,  51 => 31,  41 => 29,  37 => 28,  32 => 27,  30 => 26,  25 => 24,  23 => 19,  29 => 24,  21 => 15,  19 => 14,);
    }
}
