<?php

$all_users = ['allowed_roles' => ['SUP_ADM', 'SUB_ADM']];
$sup_only = ['allowed_roles' => 'SUP_ADM'];


Route::get('/', array_merge(['uses' => 'Superbackend\SuperBackendController@index'], $all_users))->name('admin.home');


$real_path = realpath(__DIR__) . DIRECTORY_SEPARATOR . 'admin_routes' . DIRECTORY_SEPARATOR;
include_once($real_path . 'admin_user.php');
include_once($real_path . 'site_setting.php');
include_once($real_path . 'country.php');
include_once($real_path . 'company.php');
include_once($real_path . 'company_user.php');
include_once($real_path . 'company_contract.php');
include_once($real_path . 'branch.php');
include_once($real_path . 'branch_user.php');
include_once($real_path . 'branch_contract.php');
include_once($real_path . 'province.php');
include_once($real_path . 'industry.php');
include_once($real_path . 'package.php');
include_once($real_path . 'product.php');
include_once($real_path . 'transaction.php');
include_once($real_path . 'gateway_setting.php');
include_once($real_path . 'payment_method.php');
include_once($real_path . 'type_quickpresse.php');
include_once($real_path . 'type_contenu_eblast.php');
