<?php

/* core/modules/system/templates/status-report.html.twig */
class __TwigTemplate_d339d639af156942a155f6f503ed230968ec3f4ef29bd1ce90c3a219807d436f extends Twig_Template
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
        // line 20
        echo "<table class=\"system-status-report\">
  <thead>
    <tr class=\"visually-hidden\">
      <th>";
        // line 23
        echo twig_render_var(t("Status"));
        echo "</th><th>";
        echo twig_render_var(t("Component"));
        echo "</th><th>";
        echo twig_render_var(t("Details"));
        echo "</th>
    </tr>
  </thead>
  <tbody>
  ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["requirements"]) ? $context["requirements"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["requirement"]) {
            // line 28
            echo "    <tr class=\"";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["requirement"]) ? $context["requirement"] : null), "severity_class"), "html", null, true);
            echo "\">
      <td class=\"status-icon\">
        <div title=\"";
            // line 30
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["requirement"]) ? $context["requirement"] : null), "severity_title"), "html", null, true);
            echo "\">
          <span class=\"visually-hidden\">";
            // line 31
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["requirement"]) ? $context["requirement"] : null), "severity_title"), "html", null, true);
            echo "</span>
        </div>
      </td>
      <td class=\"status-title\">";
            // line 34
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["requirement"]) ? $context["requirement"] : null), "title"), "html", null, true);
            echo "</td>
      <td class=\"status-value\">
        ";
            // line 36
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["requirement"]) ? $context["requirement"] : null), "value"), "html", null, true);
            echo "
        ";
            // line 37
            if ($this->getAttribute((isset($context["requirement"]) ? $context["requirement"] : null), "description")) {
                // line 38
                echo "          <div class=\"description\">";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["requirement"]) ? $context["requirement"] : null), "description"), "html", null, true);
                echo "</div>
        ";
            }
            // line 40
            echo "      </td>
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['requirement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "  </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/status-report.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 43,  72 => 40,  66 => 38,  64 => 37,  60 => 36,  55 => 34,  49 => 31,  45 => 30,  39 => 28,  35 => 27,  24 => 23,  19 => 20,);
    }
}
