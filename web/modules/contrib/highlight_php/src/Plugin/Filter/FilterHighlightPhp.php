<?php

namespace Drupal\highlight_php\Plugin\Filter;

use Drupal\filter\FilterProcessResult;
use Drupal\filter\Plugin\FilterBase;

/**
 * Highlights <code> tags in HTML.
 *
 * @Filter(
 *   id = "filter_highlight_php",
 *   title = @Translation("Highlight &lt;code&gt; tags in HTML."),
 *   type = Drupal\filter\Plugin\FilterInterface::TYPE_TRANSFORM_IRREVERSIBLE,
 *   weight = 10
 * )
 */
class FilterHighlightPhp extends FilterBase {

  /**
   * {@inheritdoc}
   */
  public function process($text, $langcode) {
    if ($highlighted = highlight_php_highlight($text)) {
      $result = new FilterProcessResult($highlighted);
      $result->addAttachments(['library' => ['highlight_php/main']]);
    }
    else {
      $result = new FilterProcessResult($text);
    }

    return $result;
  }

}
