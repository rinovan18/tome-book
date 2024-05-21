<?php

namespace Drupal\highlight_php\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a configuration form for Highlight PHP settings.
 */
class HighlightPhpForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'highlight_php_settings_form';
  }

  /**
   * {@inheritdoc}
   */
  public function getEditableConfigNames() {
    return [
      'highlight_php.settings',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('highlight_php.settings');

    $form['mode'] = [
      '#type' => 'select',
      '#title' => $this->t('Highlight Mode'),
      '#description' => $this->t('How &lt;code&gt; tags are highlighted - "Automatic" will guess the language used, "Manual" will parse the HTML attributes to determine the language.'),
      '#options' => [
        'auto' => $this->t('Automatic'),
        'manual' => $this->t('Manual'),
      ],
      '#default_value' => $config->get('mode'),
      '#required' => TRUE,
    ];

    $form['auto_languages'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Languages'),
      '#description' => $this->t('A space-separated list of languages to auto-detect.'),
      '#default_value' => $config->get('auto_languages'),
      '#states' => [
        'visible' => [
          ':input[name="mode"]' => ['value' => 'auto'],
        ],
        'required' => [
          ':input[name="mode"]' => ['value' => 'auto'],
        ],
      ],
    ];

    $form['manual_regex'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Language Regular Expression'),
      '#description' => $this->t('A regular expression ran against the &lt;code&gt; tag where the first group matches the language to detect. Do not include delimiters.'),
      '#default_value' => $config->get('manual_regex'),
      '#states' => [
        'visible' => [
          ':input[name="mode"]' => ['value' => 'manual'],
        ],
        'required' => [
          ':input[name="mode"]' => ['value' => 'manual'],
        ],
      ],
    ];

    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->messenger()->addStatus($this->t('The configuration options have been saved. You may need to rebuild cache to re-highlight your code.'));

    $this->config('highlight_php.settings')
      ->set('mode', $form_state->getValue('mode'))
      ->set('auto_languages', $form_state->getValue('auto_languages'))
      ->set('manual_regex', $form_state->getValue('manual_regex'))
      ->save();
  }

}
