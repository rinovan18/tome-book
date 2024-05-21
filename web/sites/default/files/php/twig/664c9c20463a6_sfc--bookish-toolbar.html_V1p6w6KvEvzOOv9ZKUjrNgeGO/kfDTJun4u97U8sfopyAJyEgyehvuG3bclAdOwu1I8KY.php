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

/* sfc--bookish-toolbar.html.twig */
class __TwigTemplate_cafa89eec893ff092e0b26cea75ca688 extends Template
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
        // line 1
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\sfc\TwigExtension']->prepareContext($context, "bookish_toolbar"), "html", null, true);
        if (($context["cache"] ?? null)) {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cache"] ?? null), 1, $this->source), "html", null, true);
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("sfc/component.bookish_toolbar"), "html", null, true);
        yield "  <div class=\"bookish-toolbar-spacer\"></div>
  <nav class=\"bookish-toolbar\" aria-label=\"Toolbar\">
    <div>
      <ul>
        <li>
          <a href=\"";
        // line 6
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        yield "\" class=\"bookish-toolbar__home\" title=\"Home\">
            <span class=\"visually-hidden\">";
        // line 7
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
        yield "</span>
          </a>
        </li>
      </ul>
    </div>
    <div>
      ";
        // line 13
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["shortcuts"] ?? null), 13, $this->source), "html", null, true);
        yield "
    </div>
    <div class=\"bookish-toolbar__logout\">
      <a href=\"";
        // line 16
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getUrl("user.logout"));
        yield "\">
        ";
        // line 17
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Logout"));
        yield "
      </a>
    </div>
  </nav>
  ";
        // line 21
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\sfc\TwigExtension']->cache("route", "contexts"), "html", null, true);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["cache", "shortcuts"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "sfc--bookish-toolbar.html.twig";
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
        return array (  82 => 21,  75 => 17,  71 => 16,  65 => 13,  56 => 7,  52 => 6,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sfc--bookish-toolbar.html.twig", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1);
        static $filters = array("escape" => 1, "t" => 7);
        static $functions = array("sfc_prepare_context" => 1, "attach_library" => 1, "path" => 6, "url" => 16, "sfc_cache" => 21);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                ['sfc_prepare_context', 'attach_library', 'path', 'url', 'sfc_cache'],
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
