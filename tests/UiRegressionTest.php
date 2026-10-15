<?php

/**
 * Verifies active UI templates, privacy-sensitive logging, and locale keys.
 *
 * Related production files: Assets/js/glancer.js,
 * Assets/js/glancer-plugin-manager-top-btn.js, Assets/css/glancer.css,
 * Template/task/description.php, Template/comment/show-latest.php,
 * Template/event/*-latest.php, and Locale/en_GB/translations.php.
 */

$javascript = file_get_contents($pluginRoot . '/Assets/js/glancer.js');
$stylesheet = file_get_contents($pluginRoot . '/Assets/css/glancer.css');
$descriptionTemplate = file_get_contents($pluginRoot . '/Template/task/description.php');
$locale = require $pluginRoot . '/Locale/en_GB/translations.php';
$layoutHtml = $container['template']->render('glancer:layout/glancer');

glancerAssertFalse(strpos($javascript, "console.info('Text:'") !== false, 'Copied private content must not be written to the browser console.');
glancerAssertTrue(strpos($javascript, 'Intl.DateTimeFormat') !== false, 'The Glancer date must use the browser locale.');
glancerAssertTrue(strpos($descriptionTemplate, '<button type="button" class="copy-bar-html') !== false, 'Description copy actions must be keyboard-operable buttons.');
glancerAssertTrue(strpos($descriptionTemplate, '$this->text->e(trim($formattedDescription))') !== false, 'Formatted task clipboard data must be attribute-escaped.');
glancerAssertSame(3, substr_count($layoutHtml, 'name="csrf_token"'), 'Every rendered ID search form must contain a CSRF token.');
glancerAssertTrue(strpos($stylesheet, '@media (prefers-reduced-motion: reduce)') !== false, 'Reduced-motion preferences must be supported.');
glancerAssertTrue(strpos($stylesheet, '@media (forced-colors: active)') !== false, 'Forced-color mode must retain visible boundaries.');
glancerAssertFalse(strpos($stylesheet, '--link-color-primary:') !== false, 'Plugin styles must not override Kanboard theme variables globally.');
glancerAssertSame('around 5 hours ago', $locale['around 5 hours ago'], 'The five-hour locale must not repeat "ago".');
glancerAssertSame('about 5 years ago', $locale['about 5 years ago'], 'The five-year locale key must match AgeHelper.');
glancerAssertSame('Recent activity', $locale['Last activity'], 'The activity locale key must match the template case.');

foreach (
    array(
        'Template/comment/show-latest.php',
        'Template/event/comment_create-latest.php',
        'Template/event/comment_update-latest.php',
        'Template/event/comment_delete-latest.php',
    ) as $templatePath
) {
    $template = file_get_contents($pluginRoot . '/' . $templatePath);
    glancerAssertFalse((bool) preg_match('/id="(?:CommentSideIcon|JumpComment|CommentActions|CommentTop)"/', $template), $templatePath . ' must not contain repeated component IDs.');
}
