<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/exam/templates/views/views-view--news--block.html.twig */
class __TwigTemplate_2e75ccc793ae4c3bf8b4966431b1dc8db310d48e674a4e810f03360118a4c4e0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["classes"] = [0 => "view", 1 => ("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 3
($context["id"] ?? null), 3, $this->source))), 2 => ("view-id-" . $this->sandbox->ensureToStringAllowed(        // line 4
($context["id"] ?? null), 4, $this->source)), 3 => ("view-display-id-" . $this->sandbox->ensureToStringAllowed(        // line 5
($context["display_id"] ?? null), 5, $this->source)), 4 => ((        // line 6
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null), 6, $this->source))) : (""))];
        // line 8
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 8), 8, $this->source), "html", null, true);
        echo ">
  ";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 9, $this->source), "html", null, true);
        echo "
  ";
        // line 10
        if (($context["title"] ?? null)) {
            // line 11
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 11, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 13
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 13, $this->source), "html", null, true);
        echo "
  ";
        // line 14
        if (($context["header"] ?? null)) {
            // line 15
            echo "    <div class=\"view-header\">
      ";
            // line 16
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 16, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 19
        echo "  ";
        if (($context["exposed"] ?? null)) {
            // line 20
            echo "    <div class=\"view-filters container\">
      ";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 21, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 24
        echo "  ";
        if (($context["attachment_before"] ?? null)) {
            // line 25
            echo "    <div class=\"attachment attachment-before\">
      ";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 26, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 29
        echo "
  ";
        // line 30
        if (($context["rows"] ?? null)) {
            // line 31
            echo "    <div class=\"view-content container row\">
      ";
            // line 32
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 32, $this->source), "html", null, true);
            echo "
    </div>
  ";
        } elseif (        // line 34
($context["empty"] ?? null)) {
            // line 35
            echo "    <div class=\"view-empty\">
      ";
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 36, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 39
        echo "
  ";
        // line 40
        if (($context["pager"] ?? null)) {
            // line 41
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 41, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 43
        echo "  ";
        if (($context["attachment_after"] ?? null)) {
            // line 44
            echo "    <div class=\"attachment attachment-after\">
      ";
            // line 45
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 45, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 48
        echo "  ";
        if (($context["more"] ?? null)) {
            // line 49
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 49, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 51
        echo "  ";
        if (($context["footer"] ?? null)) {
            // line 52
            echo "    <div class=\"view-footer\">
      ";
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 53, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 56
        echo "  ";
        if (($context["feed_icons"] ?? null)) {
            // line 57
            echo "    <div class=\"feed-icons\">
      ";
            // line 58
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 58, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 61
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/exam/templates/views/views-view--news--block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 61,  176 => 58,  173 => 57,  170 => 56,  164 => 53,  161 => 52,  158 => 51,  152 => 49,  149 => 48,  143 => 45,  140 => 44,  137 => 43,  131 => 41,  129 => 40,  126 => 39,  120 => 36,  117 => 35,  115 => 34,  110 => 32,  107 => 31,  105 => 30,  102 => 29,  96 => 26,  93 => 25,  90 => 24,  84 => 21,  81 => 20,  78 => 19,  72 => 16,  69 => 15,  67 => 14,  62 => 13,  56 => 11,  54 => 10,  50 => 9,  45 => 8,  43 => 6,  42 => 5,  41 => 4,  40 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set classes = [
  'view',
  'view-' ~ id|clean_class,
  'view-id-' ~ id,
  'view-display-id-' ~ display_id,
  dom_id ? 'js-view-dom-id-' ~ dom_id,
] %}
<div{{ attributes.addClass(classes) }}>
  {{ title_prefix }}
  {% if title %}
    {{ title }}
  {% endif %}
  {{ title_suffix }}
  {% if header %}
    <div class=\"view-header\">
      {{ header }}
    </div>
  {% endif %}
  {% if exposed %}
    <div class=\"view-filters container\">
      {{ exposed }}
    </div>
  {% endif %}
  {% if attachment_before %}
    <div class=\"attachment attachment-before\">
      {{ attachment_before }}
    </div>
  {% endif %}

  {% if rows %}
    <div class=\"view-content container row\">
      {{ rows }}
    </div>
  {% elseif empty %}
    <div class=\"view-empty\">
      {{ empty }}
    </div>
  {% endif %}

  {% if pager %}
    {{ pager }}
  {% endif %}
  {% if attachment_after %}
    <div class=\"attachment attachment-after\">
      {{ attachment_after }}
    </div>
  {% endif %}
  {% if more %}
    {{ more }}
  {% endif %}
  {% if footer %}
    <div class=\"view-footer\">
      {{ footer }}
    </div>
  {% endif %}
  {% if feed_icons %}
    <div class=\"feed-icons\">
      {{ feed_icons }}
    </div>
  {% endif %}
</div>
", "themes/custom/exam/templates/views/views-view--news--block.html.twig", "/var/www/web/themes/custom/exam/templates/views/views-view--news--block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 10);
        static $filters = array("clean_class" => 3, "escape" => 8);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
