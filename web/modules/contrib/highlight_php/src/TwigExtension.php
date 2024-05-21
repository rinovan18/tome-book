<?php

namespace Drupal\highlight_php;

use Drupal\Component\Utility\Xss;
use Drupal\Core\Render\RendererInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

/**
 * A class providing Drupal Twig extensions.
 */
class TwigExtension extends AbstractExtension {

  /**
   * The renderer.
   *
   * @var \Drupal\Core\Render\RendererInterface
   */
  protected $renderer;

  /**
   * Constructs a TwigExtension object.
   *
   * @param \Drupal\Core\Render\RendererInterface $renderer
   *   The renderer.
   */
  public function __construct(RendererInterface $renderer) {
    $this->renderer = $renderer;
  }

  /**
   * {@inheritdoc}
   */
  public function getFilters() {
    return [
      new TwigFilter('highlight', [$this, 'highlight'], ['is_safe' => ['html']]),
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getName() {
    return 'highlight_php_twig_extension';
  }

  /**
   * Highlights a value.
   *
   * @param mixed $string
   *   The value to be highlighted.
   *
   * @return string|null
   *   The escaped, rendered output, or NULL if there is no valid output.
   */
  public function highlight($string) {
    if ($highlighted = highlight_php_highlight($string)) {
      $template_attached = ['#attached' => ['library' => ['highlight_php/main']]];
      $this->renderer->render($template_attached);
      return Xss::filterAdmin($highlighted);
    }
    return Xss::filterAdmin($string);
  }

}
