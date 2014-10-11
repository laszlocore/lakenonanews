<?php

/* core/modules/views/templates/views-view-table.html.twig */
class __TwigTemplate_b8f8789d6439ee022d507ea0b4763f03f3a6286775dc0495912d464f1ab04891 extends Twig_Template
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
        // line 29
        echo "<table";
        echo twig_drupal_escape_filter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true);
        echo ">
  ";
        // line 30
        if ((isset($context["caption_needed"]) ? $context["caption_needed"] : null)) {
            // line 31
            echo "    <caption>
    ";
            // line 32
            if ((isset($context["caption"]) ? $context["caption"] : null)) {
                // line 33
                echo "      ";
                echo twig_drupal_escape_filter($this->env, (isset($context["caption"]) ? $context["caption"] : null), "html", null, true);
                echo "
    ";
            } else {
                // line 35
                echo "      ";
                echo twig_drupal_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                echo "
    ";
            }
            // line 37
            echo "    ";
            if (((!twig_test_empty((isset($context["summary"]) ? $context["summary"] : null))) || (!twig_test_empty((isset($context["description"]) ? $context["description"] : null))))) {
                // line 38
                echo "      <details>
        ";
                // line 39
                if ((!twig_test_empty((isset($context["summary"]) ? $context["summary"] : null)))) {
                    // line 40
                    echo "          <summary>";
                    echo twig_drupal_escape_filter($this->env, (isset($context["summary"]) ? $context["summary"] : null), "html", null, true);
                    echo "</summary>
        ";
                }
                // line 42
                echo "        ";
                if ((!twig_test_empty((isset($context["description"]) ? $context["description"] : null)))) {
                    // line 43
                    echo "          ";
                    echo twig_drupal_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true);
                    echo "
        ";
                }
                // line 45
                echo "      </details>
    ";
            }
            // line 47
            echo "    </caption>
  ";
        }
        // line 49
        echo "  ";
        if ((isset($context["header"]) ? $context["header"] : null)) {
            // line 50
            echo "    <thead>
      <tr>
        ";
            // line 52
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["header"]) ? $context["header"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 53
                echo "          <th";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "attributes"), "html", null, true);
                echo " scope=\"col\">
            ";
                // line 54
                echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "content"), "html", null, true);
                echo "
          </th>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "      </tr>
    </thead>
  ";
        }
        // line 60
        echo "  <tbody>
    ";
        // line 61
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 62
            echo "      <tr";
            echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["row"]) ? $context["row"] : null), "attributes"), "html", null, true);
            echo ">
        ";
            // line 63
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["row"]) ? $context["row"] : null), "columns"));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 64
                echo "          <td";
                echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "attributes"), "html", null, true);
                echo ">
            ";
                // line 65
                echo twig_drupal_escape_filter($this->env, $this->getAttribute((isset($context["column"]) ? $context["column"] : null), "content"), "html", null, true);
                echo "
          </td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "  </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "core/modules/views/templates/views-view-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 70,  134 => 68,  125 => 65,  120 => 64,  116 => 63,  111 => 62,  107 => 61,  104 => 60,  99 => 57,  90 => 54,  85 => 53,  81 => 52,  77 => 50,  74 => 49,  70 => 47,  66 => 45,  60 => 43,  57 => 42,  49 => 39,  46 => 38,  43 => 37,  26 => 31,  31 => 33,  28 => 21,  24 => 30,  59 => 35,  56 => 33,  51 => 40,  41 => 29,  37 => 35,  32 => 27,  30 => 26,  25 => 24,  23 => 19,  29 => 32,  21 => 13,  19 => 29,);
    }
}
