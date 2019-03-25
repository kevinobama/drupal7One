<?php

function kevincaching_create($form, &$form_state) {

    $form['description'] = array(
        '#type' => 'item',
        '#title' => t('Create crypto currencies'),
    );
    // This is the first form element. It's a textfield with a label, "Name"
    $form['name'] = array(
        '#type' => 'textfield',
        '#title' => t('Name'),
    );

    $form['save'] = array(
        '#type' => 'submit',
        '#value' => t('Save'),

    );
    //print_r($items);
    return $form;
}

function kevincaching_form_submit($form, &$form_state) {
    error_log("kevincaching_form_submit", 3, "/var/tmp/php-errors.log");
}