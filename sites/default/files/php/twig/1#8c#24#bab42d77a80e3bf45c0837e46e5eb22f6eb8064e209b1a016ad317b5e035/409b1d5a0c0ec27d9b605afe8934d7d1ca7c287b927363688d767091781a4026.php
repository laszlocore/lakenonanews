<?php

/* core/modules/filter/templates/text-format-wrapper.html.twig */
class __TwigTemplate_8c24bab42d77a80e3bf45c0837e46e5eb22f6eb8064e209b1a016ad317b5e035 extends Twig_Template
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
        // line 18
        echo "<div class=\"text-format-wrapper form-item\">
  ";
        // line 19
        echo twig_drupal_escape_filter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true);
        echo "
  ";
        // line 20
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 21
            echo "    ";
            // line 22
            $context["classes"] = array(0 => (((isset($context["aria_description"]) ? $context["aria_description"] : null)) ? ("description") : ("")));
            // line 26
            echo "    <div";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true);
            echo "</div>
  ";
        }
        // line 28
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/filter/templates/text-format-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 28,  22 => 19,  114 => 61,  112 => 60,  109 => 59,  103 => 58,  99 => 56,  97 => 55,  94 => 54,  90 => 52,  79 => 50,  77 => 46,  75 => 45,  71 => 44,  68 => 43,  66 => 42,  63 => 41,  58 => 39,  53 => 38,  51 => 33,  46 => 31,  42 => 30,  35 => 27,  32 => 26,  27 => 24,  26 => 20,  54 => 34,  49 => 32,  45 => 31,  39 => 29,  36 => 28,  30 => 22,  28 => 21,  24 => 24,  21 => 22,  19 => 18,);
    }
}
