<?php
require __DIR__ . '/vendor/autoload.php';

use Smarty\Smarty;

// Instantiate the Smarty object
$smarty = new Smarty();

$smarty->setTemplateDir(__DIR__ . '/templates');
$smarty->setCompileDir(__DIR__ . '/templates_c');
$smarty->setConfigDir(__DIR__ . '/configs');
$smarty->setCacheDir(__DIR__ . '/cache');

// Assign variables for the template
$smarty->assign('name', 'Sorin');

// Display the template
$smarty->display('example.tpl');
