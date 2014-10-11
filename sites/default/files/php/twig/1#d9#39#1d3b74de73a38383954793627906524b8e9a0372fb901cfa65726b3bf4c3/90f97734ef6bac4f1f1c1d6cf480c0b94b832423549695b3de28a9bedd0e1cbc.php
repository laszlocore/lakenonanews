<?php

/* core/modules/system/templates/dropbutton-wrapper.html.twig */
class __TwigTemplate_d9391d3b74de73a38383954793627906524b8e9a0372fb901cfa65726b3bf4c3 extends Twig_Template
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
        if ((isset($context["children"]) ? $context["children"] : null)) {
            // line 16
            echo "  ";
            ob_start();
            // line 17
            echo "    <div class=\"dropbutton-wrapper\">
      <div class=\"dropbutton-widget\">
        ";
            // line 19
            echo twig_drupal_escape_filter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true);
            echo "
      </div>
    </div>
  ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/dropbutton-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 19,  24 => 17,  59 => 35,  56 => 33,  51 => 31,  41 => 29,  37 => 28,  32 => 27,  30 => 26,  25 => 24,  23 => 23,  29 => 24,  21 => 16,  19 => 15,);
    }
}
