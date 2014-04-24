<?php

/**
 * Renderer class for all In-Place Editor (IPE) behavior.
 */
class panels_renderer_ipe_flex extends panels_renderer_ipe {
  // The IPE operates in normal render mode, not admin mode.
  var $admin = FALSE;

  function render() {
    $output = parent::render();
    return $output;
  }

    /**
   * AJAX command to present a dialog with a list of available content.
   */
  function ajax_select_template($region = NULL) {
    if (!array_key_exists($region, $this->plugins['layout']['regions'])) {
      ctools_modal_render(t('Error'), t('Invalid input'));
    }

    // dsm($region);
    // dsm($this);

    $title = t('Select template for !s', array('!s' => $this->plugins['layout']['regions'][$region]));

    $templates = array();

    if (empty($templates)) {
      $output = t('There are no content types you may add to this display.');
    }
    else {
      //$output = theme('panels_add_content_modal', array('renderer' => $this, 'categories' => $categories, 'category' => $category, 'region' => $region));
    }
    $this->commands[] = ctools_modal_command_display($title, $output);
  }
}