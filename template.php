<?php

/**
 * Override or insert variables into the page template.
 */
function wetkit_ember_preprocess_page(&$vars) {
  // Custom Logic Based on Theme Selection (Internet, Intranet or Base).
  if (variable_get('wetkit_wetboew_theme', 0) == 2) {
    $theme_prefix = 'base';
  }
  else {
    $theme_prefix = 'gcwu';
  }

  if (module_exists('wetkit_language')) {
    $vars['lang_bar'] = '<div class="breadcrumb-side"><ul><li>' . $vars['menu_lang_bar'] . '</li></ul></div>';
  }
}

/**
 * Modify the menu local tasks to include language switcher.
 */
function wetkit_ember_menu_local_tasks(&$variables) {
  $output = '';
  $lang_bar = '';

  if (!empty($variables['primary'])) {
    $variables['primary']['#prefix'] = '<h2 class="element-invisible">' . t('Primary tabs') . '</h2>';
    $variables['primary']['#prefix'] .= '<ul class="tabs primary">';
    $variables['primary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['primary']);
  }
  if (!empty($variables['secondary'])) {
    if (module_exists('wetkit_language')) {
      $lang_bar = '<li class="language-toggle">' . _wetkit_language_lang_switcher() . '</li>';
    }
    $variables['secondary']['#prefix'] = '<h2 class="element-invisible">' . t('Secondary tabs') . '</h2>';
    $variables['secondary']['#prefix'] .= '<ul class="tabs secondary">';
    $variables['secondary']['#suffix'] = $lang_bar . '</ul>';
    $output .= drupal_render($variables['secondary']);
  }
  else {
    if (module_exists('wetkit_language')) {
      $lang_bar = '<li class="language-toggle">' . _wetkit_language_lang_switcher() . '</li>';
    }
    $variables['secondary']['#prefix'] = '<h2 class="element-invisible">' . t('Secondary tabs') . '</h2>';
    $variables['secondary']['#prefix'] .= '<ul class="tabs secondary">';
    $variables['secondary']['#suffix'] = $lang_bar . '</ul>';
    $output .= drupal_render($variables['secondary']);
  }

  return $output;
}
