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

/* sfc--bk-blog-teaser.html.twig */
class __TwigTemplate_cc84efe72337dde2776fe6a7572c6617 extends Template
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\sfc\TwigExtension']->prepareContext($context, "bk_blog_teaser"), "html", null, true);
        if (($context["cache"] ?? null)) {
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cache"] ?? null), 1, $this->source), "html", null, true);
        }
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("sfc/component.bk_blog_teaser"), "html", null, true);
        yield "  ";
        $context["title_element"] = ((($context["title_element"] ?? null)) ? (($context["title_element"] ?? null)) : ("h2"));
        // line 2
        yield "  <article class=\"bk-blog-teaser\" role=\"article\">
    <div class=\"bk-blog-teaser__image\">";
        // line 3
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["image"] ?? null), 3, $this->source), "html", null, true);
        yield "</div>
    <div class=\"bk-blog-teaser__bottom\">
      <div class=\"bk-blog-teaser__title\">
        <";
        // line 6
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_element"] ?? null), 6, $this->source), "html", null, true);
        yield " class=\"bk-blog-teaser__title-element\">
          <a class=\"bk-blog-teaser__link\" href=\"";
        // line 7
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link"] ?? null), 7, $this->source), "html", null, true);
        yield "\">
            ";
        // line 8
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 8, $this->source), "html", null, true);
        yield "
          </a>
        </";
        // line 10
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_element"] ?? null), 10, $this->source), "html", null, true);
        yield ">
      </div>
      <div class=\"bk-blog-teaser__text bk-text\">";
        // line 12
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["text"] ?? null), 12, $this->source), "html", null, true);
        yield "</div>
      <div class=\"bk-blog-teaser__footer\">
        ";
        // line 14
        if (($context["tags"] ?? null)) {
            // line 15
            yield "        <div class=\"bk-blog-teaser__tags\">
          ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["tags"] ?? null), 0, 2));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 17
                yield "            <div class=\"bk-blog-teaser__tag\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["tag"], 17, $this->source), "html", null, true);
                yield "</div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            yield "        </div>
        ";
        }
        // line 21
        yield "        ";
        if (($context["time"] ?? null)) {
            // line 22
            yield "          <div class=\"bk-blog-teaser__byline\">
          ";
            // line 23
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->sandbox->ensureToStringAllowed(($context["time"] ?? null), 23, $this->source), "M j, Y"), "html", null, true);
            yield "
          </div>
        ";
        }
        // line 26
        yield "      </div>
    </div>
  </article>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["cache", "image", "link", "title", "text", "tags", "time"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "sfc--bk-blog-teaser.html.twig";
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
        return array (  114 => 26,  108 => 23,  105 => 22,  102 => 21,  98 => 19,  89 => 17,  85 => 16,  82 => 15,  80 => 14,  75 => 12,  70 => 10,  65 => 8,  61 => 7,  57 => 6,  51 => 3,  48 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "sfc--bk-blog-teaser.html.twig", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "set" => 1, "for" => 16);
        static $filters = array("escape" => 1, "slice" => 16, "date" => 23);
        static $functions = array("sfc_prepare_context" => 1, "attach_library" => 1);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'slice', 'date'],
                ['sfc_prepare_context', 'attach_library'],
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
