<?php

/* core/modules/block/templates/block.html.twig */
class __TwigTemplate_a1264ddcf7ffcef95e88464e7b1b428d58829af153411275bc64b83f95b93b97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 37
        $context["classes"] = array(0 => "block", 1 => ("block-" . drupal_html_class($this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "provider"))));
        // line 42
        echo "<div";
        echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true);
        echo ">
  ";
        // line 43
        echo twig_drupal_escape_filter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true);
        echo "
  ";
        // line 44
        if ((isset($context["label"]) ? $context["label"] : null)) {
            // line 45
            echo "    <h2";
            echo twig_drupal_escape_filter($this->env, (isset($context["title_attributes"]) ? $context["title_attributes"] : null), "html", null, true);
            echo ">";
            echo twig_drupal_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</h2>
  ";
        }
        // line 47
        echo "  ";
        echo twig_drupal_escape_filter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true);
        echo "
  ";
        // line 48
        $this->displayBlock('content', $context, $blocks);
        // line 51
        echo "</div>
";
    }

    // line 48
    public function block_content($context, array $blocks = array())
    {
        // line 49
        echo "    ";
        echo twig_drupal_escape_filter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "core/modules/block/templates/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 48,  33 => 45,  22 => 42,  20 => 37,  45 => 28,  39 => 26,  110 => 100,  105 => 98,  93 => 93,  87 => 91,  78 => 87,  76 => 86,  72 => 85,  65 => 81,  62 => 80,  54 => 77,  48 => 51,  42 => 71,  40 => 70,  35 => 69,  27 => 43,  141 => 70,  134 => 68,  125 => 65,  120 => 64,  116 => 103,  111 => 62,  107 => 99,  104 => 60,  99 => 96,  90 => 92,  85 => 53,  81 => 88,  77 => 50,  74 => 49,  70 => 47,  66 => 45,  60 => 43,  57 => 42,  49 => 39,  46 => 48,  43 => 37,  26 => 31,  31 => 44,  28 => 21,  24 => 30,  59 => 35,  56 => 49,  51 => 40,  41 => 47,  37 => 25,  32 => 27,  30 => 26,  25 => 24,  23 => 65,  29 => 67,  21 => 19,  19 => 15,);
    }
}
