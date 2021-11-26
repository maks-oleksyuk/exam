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

/* themes/custom/exam/templates/layout/page--home.html.twig */
class __TwigTemplate_15e27b38ee81d50d5586321340795d117b6b346278f9c3d1e5042dbabbf740dd extends \Twig\Template
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
        $context["nav_classes"] = ((("navbar navbar-expand-lg" . (((        // line 2
($context["b5_navbar_schema"] ?? null) != "none")) ? ((" navbar-" . $this->sandbox->ensureToStringAllowed(($context["b5_navbar_schema"] ?? null), 2, $this->source))) : (" "))) . (((        // line 3
($context["b5_navbar_schema"] ?? null) != "none")) ? ((((($context["b5_navbar_schema"] ?? null) == "dark")) ? (" text-light") : (" text-dark"))) : (" "))) . (((        // line 4
($context["b5_navbar_bg_schema"] ?? null) != "none")) ? ((" bg-" . $this->sandbox->ensureToStringAllowed(($context["b5_navbar_bg_schema"] ?? null), 4, $this->source))) : (" ")));
        // line 5
        echo "
";
        // line 6
        $context["footer_classes"] = (((" " . (((        // line 7
($context["b5_footer_schema"] ?? null) != "none")) ? ((" footer-" . $this->sandbox->ensureToStringAllowed(($context["b5_footer_schema"] ?? null), 7, $this->source))) : (" "))) . (((        // line 8
($context["b5_footer_schema"] ?? null) != "none")) ? ((((($context["b5_footer_schema"] ?? null) == "dark")) ? (" text-light") : (" text-dark"))) : (" "))) . (((        // line 9
($context["b5_footer_bg_schema"] ?? null) != "none")) ? ((" bg-" . $this->sandbox->ensureToStringAllowed(($context["b5_footer_bg_schema"] ?? null), 9, $this->source))) : (" ")));
        // line 10
        echo "
<header>

  ";
        // line 13
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_branding", [], "any", false, false, true, 13) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_main", [], "any", false, false, true, 13)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_additional", [], "any", false, false, true, 13))) {
            // line 14
            echo "    <nav class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nav_classes"] ?? null), 14, $this->source), "html", null, true);
            echo "\">
      <div class=\"";
            // line 15
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["b5_top_container"] ?? null), 15, $this->source), "html", null, true);
            echo " d-flex\">
        ";
            // line 16
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_branding", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "

        <button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
                aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse justify-content-md-end flex-wrap\" id=\"navbarSupportedContent\">
          ";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_main", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "
          ";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_additional", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            echo "
        </div>
      </div>
    </nav>
  ";
        }
        // line 31
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        echo "

</header>

<main role=\"main\">
  <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 37
        echo "  <div>
    ";
        // line 38
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 38)) {
            // line 39
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 41
        echo "    <div>
      ";
        // line 42
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 42)) {
            // line 43
            echo "        ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
            echo "
      ";
        }
        // line 45
        echo "
      <div>
        ";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
        echo "
      </div>
    </div>
  </div>

</main>

";
        // line 54
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 54)) {
            // line 55
            echo "  <footer class=\"mt-auto ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_classes"] ?? null), 55, $this->source), "html", null, true);
            echo "\">
    <div class=\"";
            // line 56
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["b5_top_container"] ?? null), 56, $this->source), "html", null, true);
            echo "\">
      ";
            // line 57
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
            echo "
    </div>
  </footer>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/exam/templates/layout/page--home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 57,  144 => 56,  139 => 55,  137 => 54,  127 => 47,  123 => 45,  117 => 43,  115 => 42,  112 => 41,  106 => 39,  104 => 38,  101 => 37,  92 => 31,  84 => 26,  80 => 25,  68 => 16,  64 => 15,  59 => 14,  57 => 13,  52 => 10,  50 => 9,  49 => 8,  48 => 7,  47 => 6,  44 => 5,  42 => 4,  41 => 3,  40 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set nav_classes = 'navbar navbar-expand-lg' ~
  (b5_navbar_schema != 'none' ? \" navbar-#{b5_navbar_schema}\" : ' ') ~
  (b5_navbar_schema != 'none' ? (b5_navbar_schema == 'dark' ? ' text-light' : ' text-dark' ) : ' ') ~
  (b5_navbar_bg_schema != 'none' ? \" bg-#{b5_navbar_bg_schema}\" : ' ') %}

{% set footer_classes = ' ' ~
  (b5_footer_schema != 'none' ? \" footer-#{b5_footer_schema}\" : ' ') ~
  (b5_footer_schema != 'none' ? (b5_footer_schema == 'dark' ? ' text-light' : ' text-dark' ) : ' ') ~
  (b5_footer_bg_schema != 'none' ? \" bg-#{b5_footer_bg_schema}\" : ' ') %}

<header>

  {% if page.nav_branding or page.nav_main or page.nav_additional %}
    <nav class=\"{{ nav_classes }}\">
      <div class=\"{{ b5_top_container }} d-flex\">
        {{ page.nav_branding }}

        <button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
                aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse justify-content-md-end flex-wrap\" id=\"navbarSupportedContent\">
          {{ page.nav_main }}
          {{ page.nav_additional }}
        </div>
      </div>
    </nav>
  {% endif %}
  {{ page.header }}

</header>

<main role=\"main\">
  <a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}
  <div>
    {% if page.breadcrumb %}
      {{ page.breadcrumb }}
    {% endif %}
    <div>
      {% if page.breadcrumb %}
        {{ page.breadcrumb }}
      {% endif %}

      <div>
        {{ page.content }}
      </div>
    </div>
  </div>

</main>

{% if page.footer %}
  <footer class=\"mt-auto {{ footer_classes }}\">
    <div class=\"{{ b5_top_container }}\">
      {{ page.footer }}
    </div>
  </footer>
{% endif %}
", "themes/custom/exam/templates/layout/page--home.html.twig", "/var/www/web/themes/custom/exam/templates/layout/page--home.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 13);
        static $filters = array("escape" => 14);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
