<?php

/**
 * Verifies comment visibility and shortcut output boundaries.
 *
 * Related production files: Helper/CommentVisibilityHelper.php,
 * Helper/ShortcutHelper.php, Template/comment/show-latest.php,
 * Template/layout/glancer.php, and Template/config/settings.php.
 */

use Kanboard\Core\Security\Role;

$visibilityHelper = $container['helper']->commentVisibilityHelper;
$shortcutHelper = $container['helper']->shortcutHelper;

glancerAssertTrue($visibilityHelper->isVisible(array('visibility' => Role::APP_USER), ''), 'Public viewers may see standard comments.');
glancerAssertFalse($visibilityHelper->isVisible(array('visibility' => Role::APP_MANAGER), ''), 'Public viewers must not see manager comments.');
glancerAssertFalse($visibilityHelper->isVisible(array('visibility' => Role::APP_MANAGER), Role::APP_USER), 'Standard users must not see manager comments.');
glancerAssertFalse($visibilityHelper->isVisible(array('visibility' => Role::APP_ADMIN), Role::APP_MANAGER), 'Managers must not see administrator comments.');
glancerAssertTrue($visibilityHelper->isVisible(array('visibility' => Role::APP_ADMIN), Role::APP_ADMIN), 'Administrators may see administrator comments.');

glancerAssertSame('https://example.com/docs?q=glancer', $shortcutHelper->getSafeUrl('https://example.com/docs?q=glancer'), 'Valid HTTPS shortcuts must remain unchanged.');
glancerAssertSame('http://example.com/', $shortcutHelper->getSafeUrl('http://example.com/'), 'Valid HTTP shortcuts must remain available.');
glancerAssertSame('', $shortcutHelper->getSafeUrl('javascript:alert(1)'), 'Script URLs must be rejected.');
glancerAssertSame('', $shortcutHelper->getSafeUrl('//example.com/path'), 'Protocol-relative URLs must be rejected.');
glancerAssertSame('', $shortcutHelper->getSafeUrl('https://example.com/" onmouseover="alert(1)'), 'Attribute-breaking URLs must be rejected.');
glancerAssertSame('fa-newspaper-o', $shortcutHelper->getSafeIconClass('fa-newspaper-o'), 'One Font Awesome icon class must remain valid.');
glancerAssertSame('', $shortcutHelper->getSafeIconClass('fa-book onclick=alert(1)'), 'Icon classes containing attributes must be rejected.');

$commentTemplate = file_get_contents($pluginRoot . '/Template/comment/show-latest.php');
$controller = file_get_contents($pluginRoot . '/Controller/TaskCommentViewController.php');
$layoutTemplate = file_get_contents($pluginRoot . '/Template/layout/glancer.php');
$settingsTemplate = file_get_contents($pluginRoot . '/Template/config/settings.php');

glancerAssertTrue(strpos($commentTemplate, 'commentVisibilityHelper->isVisible') !== false, 'The active comment template must enforce visibility before rendering.');
glancerAssertTrue(strpos($controller, 'isProjectAccessible') !== false, 'Search redirects must enforce project membership before disclosing a destination.');
glancerAssertTrue(strpos($controller, 'commentVisibilityHelper->isVisible') !== false, 'Comment searches must enforce visibility before disclosing a destination.');
glancerAssertTrue(strpos($commentTemplate, 'comment-reply-content-') !== false, 'The current Kanboard Reply contract must remain available.');
glancerAssertTrue(strpos($commentTemplate, '$this->text->e(trim($formattedComment))') !== false, 'Formatted comment clipboard data must be attribute-escaped.');
glancerAssertTrue(strpos($layoutTemplate, 'rel="noopener noreferrer"') !== false, 'Shortcut links must always include both privacy relations.');
glancerAssertTrue(strpos($layoutTemplate, '$this->text->e($shortcutTitle)') !== false, 'Shortcut titles must be attribute-escaped.');
glancerAssertSame(3, substr_count($layoutTemplate, '$this->form->csrf()'), 'Every ID search form must include a CSRF token.');
glancerAssertFalse(strpos($settingsTemplate, "t('Allow tracking')") !== false, 'The settings page must not offer to disable mandatory link privacy.');
