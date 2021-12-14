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

/* themes/custom/exam/templates/views/views-view-fields--our-team--block.html.twig */
class __TwigTemplate_10040a1ec5e1808c6c9a920459651ae403bd4b34588409703ccaf9d7e75d5bae extends \Twig\Template
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
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "field_media_image", [], "any", false, false, true, 32), "separator", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
        echo "
<";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_media_image", [], "any", false, false, true, 33), "wrapper_element", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_media_image", [], "any", false, false, true, 33), "wrapper_attributes", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
        echo ">
";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_media_image", [], "any", false, false, true, 34), "content", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
        echo "
</";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_media_image", [], "any", false, false, true, 35), "wrapper_element", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
        echo ">

";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "title", [], "any", false, false, true, 37), "separator", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
        echo "
<";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 38), "wrapper_element", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 38), "wrapper_attributes", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
        echo ">
";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 39), "content", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        echo "
</";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 40), "wrapper_element", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
        echo ">

";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "field_position_term", [], "any", false, false, true, 42), "separator", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
        echo "
<";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_position_term", [], "any", false, false, true, 43), "wrapper_element", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_position_term", [], "any", false, false, true, 43), "wrapper_attributes", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
        echo ">
";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_position_term", [], "any", false, false, true, 44), "content", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
        echo "
</";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_position_term", [], "any", false, false, true, 45), "wrapper_element", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
        echo ">

";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "view_node", [], "any", false, false, true, 47), "separator", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
        echo "
<";
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "view_node", [], "any", false, false, true, 48), "wrapper_element", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "view_node", [], "any", false, false, true, 48), "wrapper_attributes", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
        echo ">
<";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "view_node", [], "any", false, false, true, 49), "element_type", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "view_node", [], "any", false, false, true, 49), "element_attributes", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
        echo ">
";
        // line 50
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "view_node", [], "any", false, false, true, 50), "content", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
        echo "
</";
        // line 51
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "view_node", [], "any", false, false, true, 51), "element_type", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
        echo ">
</";
        // line 52
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "view_node", [], "any", false, false, true, 52), "wrapper_element", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
        echo ">

";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "field_link", [], "any", false, false, true, 54), "separator", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
        echo "
<div class=\"social\">
  <";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_link", [], "any", false, false, true, 56), "wrapper_element", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_link", [], "any", false, false, true, 56), "wrapper_attributes", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
        echo "
  >";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_link", [], "any", false, false, true, 57), "content", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
        echo "
</";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_link", [], "any", false, false, true, 58), "wrapper_element", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
        echo ">
<";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "link_flag", [], "any", false, false, true, 59), "wrapper_element", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "link_flag", [], "any", false, false, true, 59), "wrapper_attributes", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
        echo ">
";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "link_flag", [], "any", false, false, true, 60), "content", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        echo "
</";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "link_flag", [], "any", false, false, true, 61), "wrapper_element", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
        echo ">
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/exam/templates/views/views-view-fields--our-team--block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 61,  143 => 60,  138 => 59,  134 => 58,  130 => 57,  125 => 56,  120 => 54,  115 => 52,  111 => 51,  107 => 50,  102 => 49,  97 => 48,  93 => 47,  88 => 45,  84 => 44,  79 => 43,  75 => 42,  70 => 40,  66 => 39,  61 => 38,  57 => 37,  52 => 35,  48 => 34,  43 => 33,  39 => 32,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display all the fields in a row.
 *
 * Available variables:
 * - view: The view in use.
 * - fields: A list of fields, each one contains:
 *   - content: The output of the field.
 *   - raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - class: The safe class ID to use.
 *   - handler: The Views field handler controlling this field.
 *   - inline: Whether or not the field should be inline.
 *   - wrapper_element: An HTML element for a wrapper.
 *   - wrapper_attributes: List of attributes for wrapper element.
 *   - separator: An optional separator that may appear before a field.
 *   - label: The field's label text.
 *   - label_element: An HTML element for a label wrapper.
 *   - label_attributes: List of attributes for label wrapper.
 *   - label_suffix: Colon after the label.
 *   - element_type: An HTML element for the field content.
 *   - element_attributes: List of attributes for HTML element for field content.
 *   - has_label_colon: A boolean indicating whether to display a colon after
 *     the label.
 *   - element_type: An HTML element for the field content.
 *   - element_attributes: List of attributes for HTML element for field content.
 * - row: The raw result from the query, with all data it fetched.
 *
 * @see template_preprocess_views_view_fields()
 */
#}
{{ field.field_media_image.separator }}
<{{ fields.field_media_image.wrapper_element }}{{ fields.field_media_image.wrapper_attributes }}>
{{ fields.field_media_image.content }}
</{{ fields.field_media_image.wrapper_element }}>

{{ field.title.separator }}
<{{ fields.title.wrapper_element }}{{ fields.title.wrapper_attributes }}>
{{ fields.title.content }}
</{{ fields.title.wrapper_element }}>

{{ field.field_position_term.separator }}
<{{ fields.field_position_term.wrapper_element }}{{ fields.field_position_term.wrapper_attributes }}>
{{ fields.field_position_term.content }}
</{{ fields.field_position_term.wrapper_element }}>

{{ field.view_node.separator }}
<{{ fields.view_node.wrapper_element }}{{ fields.view_node.wrapper_attributes }}>
<{{ fields.view_node.element_type }}{{ fields.view_node.element_attributes }}>
{{ fields.view_node.content }}
</{{ fields.view_node.element_type }}>
</{{ fields.view_node.wrapper_element }}>

{{ field.field_link.separator }}
<div class=\"social\">
  <{{ fields.field_link.wrapper_element }}{{ fields.field_link.wrapper_attributes }}
  >{{ fields.field_link.content }}
</{{ fields.field_link.wrapper_element }}>
<{{ fields.link_flag.wrapper_element }}{{ fields.link_flag.wrapper_attributes }}>
{{ fields.link_flag.content }}
</{{ fields.link_flag.wrapper_element }}>
</div>
", "themes/custom/exam/templates/views/views-view-fields--our-team--block.html.twig", "/var/www/web/themes/custom/exam/templates/views/views-view-fields--our-team--block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 32);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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