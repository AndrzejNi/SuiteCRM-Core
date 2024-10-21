<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
// Check if the list_strings array exists to avoid overwriting it
if (!isset($app_list_strings)) {
    $app_list_strings = array();
}
$app_list_strings['work_mode_dom']['TEST'] = 'Test ';
$app_list_strings['work_mode_dom']['PROD'] = 'Production';
$app_list_strings['work_status_dom']['error'] = 'Error';
$app_list_strings['work_status_dom']['success'] = 'Success';
$app_list_strings['work_stage_dom']['0'] = 'Start';
$app_list_strings['work_stage_dom']['1'] = 'Login';
$app_list_strings['work_stage_dom']['2'] = 'Prepare';
$app_list_strings['work_stage_dom']['3'] = 'Processing';
$app_list_strings['work_stage_dom']['4'] = 'Other';
$app_list_strings['work_stage_dom']['5'] = 'Stop';
$app_list_strings['work_type_dom']['WWW'] = 'WWW ';
$app_list_strings['work_type_dom']['API'] = 'API';
$app_list_strings['work_type_dom']['FORMS'] = 'FORMS';


$app_list_strings['product_type_dom']['Service'] = 'Service';
$app_list_strings['product_type_dom']['Robot'] = 'Robot';
$app_list_strings['product_type_dom']['AI'] = 'AI';