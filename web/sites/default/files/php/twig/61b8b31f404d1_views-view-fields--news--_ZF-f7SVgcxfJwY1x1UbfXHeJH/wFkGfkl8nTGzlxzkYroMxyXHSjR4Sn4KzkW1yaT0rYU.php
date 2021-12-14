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

/* themes/custom/exam/templates/views/views-view-fields--news--block.html.twig */
class __TwigTemplate_7840d3ac98d366efee9d86cefad29ecd1e1094e7525b7208a955d062224fadf1 extends \Twig\Template
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
        echo "<div class=\"block-news__wrapper\">
  <div class=\"block-news__date\">
    ";
        // line 3
        $context["created"] = twig_date_converter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "created", [], "any", false, false, true, 3), "content_1", [], "any", false, false, true, 3), "raw", [], "any", false, false, true, 3), 3, $this->source));
        // line 4
        echo "    <div class=\"block-news__month\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["created"] ?? null), 4, $this->source), "M"), "html", null, true);
        echo "</div>
    <div class=\"block-news__day\">";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["created"] ?? null), 5, $this->source), "d"), "html", null, true);
        echo "</div>
    <div class=\"block-news__year\">";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["created"] ?? null), 6, $this->source), "Y"), "html", null, true);
        echo "</div>
  </div>
  <div class=\"block-news__author d-flex justify-content-between\">
    <div>
      ";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "user_picture_1", [], "any", false, false, true, 10), "content", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "
      <span class=\"align-top\">
          <span class=\"text-gray\">WRITER</span>
          <span
            class=\"block-news__name\">";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_first_name", [], "any", false, false, true, 14), "content", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_last_name", [], "any", false, false, true, 14), "content", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
        echo " / </span>
          <span class=\"text-primary\">";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "field_position", [], "any", false, false, true, 15), "content", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo "</span>
        </span>
    </div>
    <div class=\"block-news__ago\">";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "created", [], "any", false, false, true, 18), "content", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "</div>
  </div>
  <div class=\"block-news__content\">
    <h2>";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "title_1", [], "any", false, false, true, 21), "content", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo "</h2>
    <p>";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "body", [], "any", false, false, true, 22), "content", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
        echo "</p>
    <div class=\"block-news__link\">";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "view_node", [], "any", false, false, true, 23), "content", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        echo "</div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/exam/templates/views/views-view-fields--news--block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 23,  90 => 22,  86 => 21,  80 => 18,  74 => 15,  68 => 14,  61 => 10,  54 => 6,  50 => 5,  45 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"block-news__wrapper\">
  <div class=\"block-news__date\">
    {% set created = date(fields.created.content_1.raw) %}
    <div class=\"block-news__month\">{{ created | date(\"M\") }}</div>
    <div class=\"block-news__day\">{{ created | date(\"d\") }}</div>
    <div class=\"block-news__year\">{{ created | date(\"Y\") }}</div>
  </div>
  <div class=\"block-news__author d-flex justify-content-between\">
    <div>
      {{ fields.user_picture_1.content }}
      <span class=\"align-top\">
          <span class=\"text-gray\">WRITER</span>
          <span
            class=\"block-news__name\">{{ fields.field_first_name.content }} {{ fields.field_last_name.content }} / </span>
          <span class=\"text-primary\">{{ fields.field_position.content }}</span>
        </span>
    </div>
    <div class=\"block-news__ago\">{{ fields.created.content }}</div>
  </div>
  <div class=\"block-news__content\">
    <h2>{{ fields.title_1.content }}</h2>
    <p>{{ fields.body.content }}</p>
    <div class=\"block-news__link\">{{ fields.view_node.content }}</div>
  </div>
</div>
", "themes/custom/exam/templates/views/views-view-fields--news--block.html.twig", "/var/www/web/themes/custom/exam/templates/views/views-view-fields--news--block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 3);
        static $filters = array("escape" => 4, "date" => 4);
        static $functions = array("date" => 3);

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape', 'date'],
                ['date']
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
