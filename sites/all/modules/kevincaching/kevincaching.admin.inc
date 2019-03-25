<?php
/**
 * @return mixed
 */
function kevincaching_admin_data() {
    $header = array(
        'name' => 'Name'
    );

    $cryptoCurrencies = getCryptoCurrencies();
    foreach($cryptoCurrencies as $key => $cryptoCurrency) {
        $options[$cryptoCurrency->id] = array(
            'name' => $cryptoCurrency->name,
        );
    }

    $form['nodes'] = array(
        '#type' => 'tableselect',
        '#header' => $header,
        '#options' => $options,
        '#empty' => t('No content available.'),
    );

    return $form;
}

function getCryptoCurrencies() {
    $cryptoCurrencies = db_query('SELECT * FROM crypto_currencies order  by id desc');

    return $cryptoCurrencies;
}