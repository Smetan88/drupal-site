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

/* themes/contrib/bartik/templates/paragraph--single_signpost.html.twig */
class __TwigTemplate_3dbd873d67589711017df2d3f82aed42 extends Template
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
        // line 6
        echo "
<div class=\"multipost__content\">
  <div class=\"multipost__content-img\">
    <picture>
      ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_desktop_image", [], "any", false, false, true, 10)) {
            // line 11
            echo "        <source media=\"(min-width: 769px)\" srcset=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_desktop_image", [], "any", false, false, true, 11)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#items"] ?? null) : null), "entity", [], "any", false, false, true, 11), "uri", [], "any", false, false, true, 11), "value", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "\" />
      ";
        }
        // line 13
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_mobile_image", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
        echo "
    </picture>
  </div>
  <div class=\"multipost__content-text\">
    <p class=\"multipost__content-text--person\">";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_author", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "</p>
    <h3 class=\"multipost__content-text--title\">
      ";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_title_post", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "
    </h3>
    <p class=\"multipost__content-text--description\">
      ";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_description_post", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
        echo "
    </p>
    ";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
        echo "
    <p class=\"multipost__content-text--hint\">
      ";
        // line 26
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_hint_post", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
        echo "
    </p>
  </div>
</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/bartik/templates/paragraph--single_signpost.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  82 => 26,  77 => 24,  72 => 22,  66 => 19,  61 => 17,  53 => 13,  47 => 11,  45 => 10,  39 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/bartik/templates/paragraph--single_signpost.html.twig", "/opt/drupal/web/themes/contrib/bartik/templates/paragraph--single_signpost.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 10);
        static $filters = array("escape" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
