<?php

/* core/modules/system/templates/field-multiple-value-form.html.twig */
class __TwigTemplate_c67a0582c239e939e5016910d3df29d4e4dce4a72c230b60e6f4eb263baf746d extends Twig_Template
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
        // line 22
        if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
            // line 23
            echo "  <div class=\"form-item\">
    ";
            // line 24
            echo twig_drupal_escape_filter($this->env, (isset($context["table"]) ? $context["table"] : null), "html", null, true);
            echo "
    ";
            // line 25
            if ((isset($context["description"]) ? $context["description"] : null)) {
                // line 26
                echo "      <div class=\"description\">";
                echo twig_drupal_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true);
                echo "</div>
    ";
            }
            // line 28
            echo "    ";
            if ((isset($context["button"]) ? $context["button"] : null)) {
                // line 29
                echo "      <div class=\"clearfix\">";
                echo twig_drupal_escape_filter($this->env, (isset($context["button"]) ? $context["button"] : null), "html", null, true);
                echo "</div>
    ";
            }
            // line 31
            echo "  </div>
";
        } else {
            // line 33
            echo "  ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["elements"]) ? $context["elements"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 34
                echo "    ";
                echo twig_drupal_escape_filter($this->env, (isset($context["element"]) ? $context["element"] : null), "html", null, true);
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/field-multiple-value-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 34,  49 => 33,  45 => 31,  39 => 29,  36 => 28,  30 => 26,  28 => 25,  24 => 24,  21 => 23,  19 => 22,);
    }
}
