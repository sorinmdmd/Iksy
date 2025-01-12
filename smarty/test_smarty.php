<?php
require __DIR__ . '/vendor/autoload.php';

if (class_exists('Smarty')) {
    echo "Smarty is installed and autoloaded successfully!";
} else {
    echo "Smarty is NOT installed!";
}
