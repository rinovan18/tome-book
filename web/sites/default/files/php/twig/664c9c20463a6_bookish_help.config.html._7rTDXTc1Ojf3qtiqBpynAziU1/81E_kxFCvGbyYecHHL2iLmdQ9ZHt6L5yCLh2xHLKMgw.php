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

/* @help_topics/bookish_help.config.html.twig */
class __TwigTemplate_2870e38e68cc4b0454a757fab2fe1264 extends Template
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
        // line 6
        yield "<h2>";
        echo t("Helpful links", array());
        yield "</h2>
<p>";
        // line 7
        echo t("There are a number of configuration pages you can visit to tweak your new site. Here's a list of them:", array());
        yield "</p>
<ul>
  <li><a href=\"";
        // line 9
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("system.site_information_settings"));
        yield "\">";
        echo t("Change the site name", array());
        yield "</a></li>
  <li><a href=\"";
        // line 10
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("system.theme_settings_theme", ["theme" => "bookish_theme"]));
        yield "\">";
        echo t("Change the copyright name and force light/dark mode", array());
        yield "</a></li>
  <li><a href=\"";
        // line 11
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.shortcut_set.customize_form", ["shortcut_set" => "default"]));
        yield "\">";
        echo t("Edit the toolbar links", array());
        yield "</a></li>
  <li><a href=\"";
        // line 12
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.block_content.collection"));
        yield "\">";
        echo t("Edit the default homepage block", array());
        yield "</a></li>
  <li><a href=\"";
        // line 13
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.menu.edit_form", ["menu" => "main"]));
        yield "\">";
        echo t("Edit the main menu", array());
        yield "</a></li>
  <li><a href=\"";
        // line 14
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.image_style.collection"));
        yield "\">";
        echo t("Add/edit image styles", array());
        yield "</a></li>
  <li><a href=\"";
        // line 15
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.metatag_defaults.collection"));
        yield "\">";
        echo t("Edit Metatags (tweak SEO settings)", array());
        yield "</a></li>
  <li><a href=\"";
        // line 16
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.view.edit_form", ["view" => "feed"]));
        yield "\">";
        echo t("Edit RSS feed (set \"Creator\" field to your name)", array());
        yield "</a></li>
  <li><a href=\"";
        // line 17
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("system.admin_content", [], ["query" => ["title" => "social_node"]]));
        yield "\">Find/edit the default social node (the image and body summary here are fallbacks for Metatag)</a></li>
  <li><a href=\"";
        // line 18
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("simple_sitemap.entities"));
        yield "\">";
        echo t("Re-configure your sitemap.xml file", array());
        yield "</a></li>
</ul>
<p>";
        // line 20
        echo t("Did you also know you can press \"alt + D\" or \"alt + k\" to quickly search through admin menus? Try typing \"Blog\" or \"Page\" to see all you can change.", array());
        yield "</p>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/bookish_help.config.html.twig";
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
        return array (  109 => 20,  102 => 18,  98 => 17,  92 => 16,  86 => 15,  80 => 14,  74 => 13,  68 => 12,  62 => 11,  56 => 10,  50 => 9,  45 => 7,  40 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/bookish_help.config.html.twig", "/workspace/tome-book/web/profiles/contrib/bookish/modules/bookish_admin/modules/bookish_help/help_topics/bookish_help.config.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 6);
        static $filters = array();
        static $functions = array("path" => 9);

        try {
            $this->sandbox->checkSecurity(
                ['trans'],
                [],
                ['path'],
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
