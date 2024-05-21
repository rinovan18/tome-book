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

/* @help_topics/bookish_help.profile.html.twig */
class __TwigTemplate_e1d5fe08e0dba4cdab9a6791d6c77f4c extends Template
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
        echo t("Intro", array());
        yield "</h2>
<p>";
        // line 7
        echo t("Thanks for installing Bookish! Bookish is an install profile intended to be used with <a href=\"https://drupal.org/project/tome\">Tome</a>, a static site generator for Drupal.", array());
        yield "</p>
<p>";
        // line 8
        echo t("In terms of functionality, Bookish is similar to the Standard profile. Most of the work in this profile has been to make the editing experience and frontend as modern-feeling as possible.", array());
        yield "</p>
<p>";
        // line 9
        echo t("The feature highlights are:", array());
        yield "</p>
<ul>
  <li>";
        // line 11
        echo t("Ability to filter and crop images on upload, in CKEditor or a field", array());
        yield "</li>
  <li>";
        // line 12
        echo t("Blur-up functionality for images, similar to GatsbyJS", array());
        yield "</li>
  <li>";
        // line 13
        echo t("A theme with dark mode support, built using Single File Components", array());
        yield "</li>
  <li>";
        // line 14
        echo t("Already configured Metatag, Pathauto, Lunr, and Simple XML sitemap integrations", array());
        yield "</li>
  <li>";
        // line 15
        echo t("Ability to embed code snippets in CKEditor that are styled in the frontend", array());
        yield "</li>
  <li>";
        // line 16
        echo t("A simplified toolbar that just lists the default shortcuts", array());
        yield "</li>
</ul>
<p>";
        // line 18
        echo t("All submodules and dependencies are optional, so if you don't want any features, or don't want to use Tome, it's up to you!", array());
        yield "</p>
<p>";
        // line 19
        echo t("Please use the links below to browse through documentation.", array());
        yield "</p>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@help_topics/bookish_help.profile.html.twig";
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
        return array (  87 => 19,  83 => 18,  78 => 16,  74 => 15,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  53 => 9,  49 => 8,  45 => 7,  40 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "@help_topics/bookish_help.profile.html.twig", "/workspace/tome-book/web/profiles/contrib/bookish/modules/bookish_admin/modules/bookish_help/help_topics/bookish_help.profile.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 6);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['trans'],
                [],
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
