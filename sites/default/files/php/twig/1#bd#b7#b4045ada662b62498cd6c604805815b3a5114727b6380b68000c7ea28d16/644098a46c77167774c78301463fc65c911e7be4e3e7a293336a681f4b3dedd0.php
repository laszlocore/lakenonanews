<?php

/* core/modules/system/templates/menu-local-task.html.twig */
class __TwigTemplate_bdb7b4045ada662b62498cd6c604805815b3a5114727b6380b68000c7ea28d16 extends Twig_Template
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
        echo "<li";
        echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">";
        echo twig_drupal_escape_filter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true);
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/menu-local-task.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 28,  39 => 26,  110 => 100,  105 => 98,  93 => 93,  87 => 91,  78 => 87,  76 => 86,  72 => 85,  65 => 81,  62 => 80,  54 => 77,  48 => 73,  42 => 71,  40 => 70,  35 => 69,  27 => 21,  141 => 70,  134 => 68,  125 => 65,  120 => 64,  116 => 103,  111 => 62,  107 => 99,  104 => 60,  99 => 96,  90 => 92,  85 => 53,  81 => 88,  77 => 50,  74 => 49,  70 => 47,  66 => 45,  60 => 43,  57 => 42,  49 => 39,  46 => 38,  43 => 37,  26 => 31,  31 => 22,  28 => 21,  24 => 30,  59 => 35,  56 => 78,  51 => 40,  41 => 29,  37 => 25,  32 => 27,  30 => 26,  25 => 24,  23 => 65,  29 => 67,  21 => 19,  19 => 18,);
    }
}
