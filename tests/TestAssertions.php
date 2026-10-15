<?php

/**
 * Provides assertion helpers for Glancer's focused regression tests.
 *
 * Related test runner: tests/run.php.
 */

function glancerAssertTrue($condition, $message)
{
    if (!$condition) {
        throw new RuntimeException($message);
    }
}

function glancerAssertFalse($condition, $message)
{
    glancerAssertTrue(!$condition, $message);
}

function glancerAssertSame($expected, $actual, $message)
{
    if ($expected !== $actual) {
        throw new RuntimeException($message . ' Expected ' . var_export($expected, true) . ', got ' . var_export($actual, true) . '.');
    }
}
