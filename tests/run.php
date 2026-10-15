<?php

// phpcs:ignoreFile PSR1.Files.SideEffects.FoundWithSymbols -- This executable test bootstrap must define Kanboard constants.

/**
 * Runs Glancer's focused production regression checks against a Kanboard checkout.
 *
 * Related test files: TestAssertions.php, SecurityRegressionTest.php,
 * NavigationRegressionTest.php, and UiRegressionTest.php.
 */

$kanboardRoot = isset($argv[1]) ? realpath($argv[1]) : false;

if ($kanboardRoot === false || !is_file($kanboardRoot . '/app/common.php')) {
    fwrite(STDERR, "Usage: php tests/run.php <kanboard-root>\n");
    exit(2);
}

$pluginRoot = dirname(__DIR__);

define('PLUGINS_DIR', $kanboardRoot . '/plugins');
define('DB_FILENAME', ':memory:');

require $kanboardRoot . '/app/common.php';
require __DIR__ . '/TestAssertions.php';

$pluginName = 'Glancer';
$loadedPlugins = $container['pluginLoader']->getPlugins();
$incompatiblePlugins = $container['pluginLoader']->getIncompatiblePlugins();

glancerAssertFalse(isset($incompatiblePlugins[$pluginName]), 'Glancer must be compatible with the tested Kanboard release.');
glancerAssertTrue(isset($loadedPlugins[$pluginName]), 'Glancer must load before its regression checks run.');

require __DIR__ . '/SecurityRegressionTest.php';
require __DIR__ . '/NavigationRegressionTest.php';
require __DIR__ . '/UiRegressionTest.php';

echo 'Glancer regression checks passed on Kanboard ' . APP_VERSION . ' with PHP ' . PHP_VERSION . PHP_EOL;
