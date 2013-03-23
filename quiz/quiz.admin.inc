<?php

function quiz_admin_form($form, &$form_state){

  $form = array();

  $form['quiz_ajax'] = array(
    '#type' => 'checkbox',
    '#default_value' => variable_get('quiz_ajax', 1),
    '#title' => t('Enable ajax'),
    '#description' => t('Use ajax to load the next question.'),
  );

  return system_settings_form($form);

}