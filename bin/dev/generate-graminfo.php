#!/usr/bin/env php
<?php
require_once(__DIR__ . '/../init.php');

try {
    phpMorphy_Generator_GramInfo::generate(PHPMORPHY_DIR);
} catch (Exception $e) {
    echo $e;
    exit(1);
}
