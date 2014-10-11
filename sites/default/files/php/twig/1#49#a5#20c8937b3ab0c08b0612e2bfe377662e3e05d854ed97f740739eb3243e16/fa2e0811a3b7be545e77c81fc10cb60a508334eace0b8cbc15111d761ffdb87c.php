<?php

/* core/modules/system/templates/region.html.twig */
class __TwigTemplate_49a520c8937b3ab0c08b0612e2bfe377662e3e05d854ed97f740739eb3243e16 extends Twig_Template
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
        $context["classes"] = array(0 => "region", 1 => ("region-" . drupal_html_class((isset($context["region"]) ? $context["region"] : null))));
        // line 23
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 24
            echo "  <div";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
            echo ">
    ";
            // line 25
            echo twig_drupal_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/region.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 25,  21 => 23,  49 => 25,  42 => 23,  27 => 20,  23 => 24,  97 => 45,  91 => 42,  88 => 41,  86 => 40,  83 => 39,  80 => 38,  76 => 36,  73 => 35,  71 => 34,  65 => 31,  60 => 30,  54 => 28,  52 => 27,  48 => 25,  45 => 24,  41 => 22,  38 => 21,  36 => 22,  32 => 21,  26 => 16,  24 => 15,  19 => 18,);
    }
}
