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

/* modules/contrib/views_style_swiper/templates/views-view-views-style-swiper-style.html.twig */
class __TwigTemplate_b1e1d76dd720892033237910fd2509a0956d32afc8ea1a8db2fa256d8dad6343 extends \Twig\Template
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
        // line 20
        if (($context["title"] ?? null)) {
            // line 21
            echo "  <h3>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 21, $this->source), "html", null, true);
            echo "</h3>
";
        }
        // line 23
        echo "<div class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["row_wrapper"] ?? null), 23, $this->source), "html", null, true);
        echo "\">
";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 25
            echo "  ";
            // line 26
            $context["row_classes"] = [0 => ((            // line 27
($context["default_row_class"] ?? null)) ? ("views-row") : (""))];
            // line 30
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 30), "addClass", [0 => ($context["row_classes"] ?? null)], "method", false, false, true, 30), 30, $this->source), "html", null, true);
            echo ">";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            // line 32
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</div>";
        // line 35
        if (($context["swiper_pagination"] ?? null)) {
            // line 36
            echo "<div class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["swiper_pagination"] ?? null), 36, $this->source), "html", null, true);
            echo "\"></div>";
        }
        // line 38
        if (($context["swiper_button_prev"] ?? null)) {
            // line 39
            echo "<div class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["swiper_button_prev"] ?? null), 39, $this->source), "html", null, true);
            echo "\"></div>";
        }
        // line 41
        if (($context["swiper_button_next"] ?? null)) {
            // line 42
            echo "<div class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["swiper_button_next"] ?? null), 42, $this->source), "html", null, true);
            echo "\"></div>";
        }
        // line 44
        if (($context["swiper_scrollbar"] ?? null)) {
            // line 45
            echo "<div class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["swiper_scrollbar"] ?? null), 45, $this->source), "html", null, true);
            echo "\"></div>";
        }
    }

    public function getTemplateName()
    {
        return "modules/contrib/views_style_swiper/templates/views-view-views-style-swiper-style.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 45,  97 => 44,  92 => 42,  90 => 41,  85 => 39,  83 => 38,  78 => 36,  76 => 35,  74 => 34,  67 => 32,  65 => 31,  61 => 30,  59 => 27,  58 => 26,  56 => 25,  52 => 24,  47 => 23,  41 => 21,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a view of swiper rows.
 *
 * Available variables:
 * - title: The title of this group of rows. May be empty.
 * - rows: A list of the view's row items.
 *   - attributes: The row's HTML attributes.
 *   - content: The row's content.
 * - view: The view object.
 * - default_row_class: A flag indicating whether default classes should be
 *   used on rows.
 *
 * @see template_preprocess_views_view_unformatted()
 *
 * @ingroup themeable
 */
#}
{% if title %}
  <h3>{{ title }}</h3>
{% endif %}
<div class=\"{{ row_wrapper }}\">
{% for row in rows %}
  {%
    set row_classes = [
      default_row_class ? 'views-row',
    ]
  %}
  <div{{ row.attributes.addClass(row_classes) }}>
    {{- row.content -}}
  </div>
{% endfor %}
</div>
{%- if swiper_pagination -%}
<div class=\"{{ swiper_pagination }}\"></div>
{%- endif -%}
{%- if swiper_button_prev -%}
<div class=\"{{ swiper_button_prev }}\"></div>
{%- endif -%}
{%- if swiper_button_next -%}
<div class=\"{{ swiper_button_next }}\"></div>
{%- endif -%}
{%- if swiper_scrollbar -%}
<div class=\"{{ swiper_scrollbar }}\"></div>
{%- endif -%}
", "modules/contrib/views_style_swiper/templates/views-view-views-style-swiper-style.html.twig", "/var/www/web/modules/contrib/views_style_swiper/templates/views-view-views-style-swiper-style.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 20, "for" => 24, "set" => 26);
        static $filters = array("escape" => 21);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape'],
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
