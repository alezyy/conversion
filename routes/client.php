<?php

$real_path = realpath(__DIR__) . DIRECTORY_SEPARATOR . 'client_routes' . DIRECTORY_SEPARATOR;
include_once($real_path . 'active.php');
include_once($real_path . 'administration.php');
include_once($real_path . 'archives.php');
include_once($real_path . 'eblast.php');
include_once($real_path . 'help.php');
include_once($real_path . 'library.php');
include_once($real_path . 'lists.php');
include_once($real_path . 'reports.php');
include_once($real_path . 'statistics.php');
include_once($real_path . 'templates.php');
