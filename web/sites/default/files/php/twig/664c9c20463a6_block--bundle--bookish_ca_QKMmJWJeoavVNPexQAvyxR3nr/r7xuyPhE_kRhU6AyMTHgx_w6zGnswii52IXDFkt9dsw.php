<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* profiles/contrib/bookish/themes/bookish_theme/templates/block--bundle--bookish_callout.html.twig */
class __TwigTemplate_e446045a0bfb715cd12204534ff178f2 extends Template
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
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield from         $this->loadTemplate("sfc--bk-callout.html.twig", "profiles/contrib/bookish/themes/bookish_theme/templates/block--bundle--bookish_callout.html.twig", 28)->unwrap()->yield(CoreExtension::merge($context, ["text" => Drupal\twig_tweak\TwigTweakExtension::viewFilter(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_0 =         // line 29
($context["content"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#block_content"] ?? null) : null), "body", [], "any", false, false, true, 29), ["label" => "hidden", "type" => "text_default"]), "image" => Drupal\twig_tweak\TwigTweakExtension::viewFilter(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_1 =         // line 33
($context["content"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#block_content"] ?? null) : null), "field_image", [], "any", false, false, true, 33), ["label" => "hidden", "type" => "bookish_image", "settings" => ["image_style" => "callout_block"]])]));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "profiles/contrib/bookish/themes/bookish_theme/templates/block--bundle--bookish_callout.html.twig";
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
        return array (  42 => 33,  41 => 29,  40 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/bookish/themes/bookish_theme/templates/block--bundle--bookish_callout.html.twig", "/workspace/tome-book/web/profiles/contrib/bookish/themes/bookish_theme/templates/block--bundle--bookish_callout.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 28);
        static $filters = array("view" => 29);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                ['view'],
                [],
                $this->source
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
