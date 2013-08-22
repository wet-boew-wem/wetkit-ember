<?php

/**
 * Implements THEME_form_system_theme_settings_alter().
 */
function wetkit_ember_form_system_theme_settings_alter(&$form, &$form_state) {
  $form['wetkit_ember'] = array(
    '#type' => 'fieldset',
    '#title' => t('WxT Ember settings'),
    '#description' => t('If checked, the fade-in effect between page loads will not occur.'),
  );
  $form['wetkit_ember']['wetkit_ember_no_fadein_effect'] = array(
    '#type' => 'checkbox',
    '#title' => t('Disable fade-in effect'),
    '#default_value' => theme_get_setting('wetkit_ember_no_fadein_effect'),
    '#description' => t('Check here if you want the theme to fade in pages when they load.'),
  );
}
