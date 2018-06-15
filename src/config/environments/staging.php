<?php

/** 
 * Staging
 */
ini_set('display_errors', 0);
define('WP_DEBUG_DISPLAY', false);
define('SCRIPT_DEBUG', false);

/**
 * Disable all file modifications including updates and update notifications
 */
define('DISALLOW_FILE_MODS', true);

/**
 * WP Local Tools
 */
define('WPLT_SERVER', 'staging');
define('WPLT_ADMINBAR', 'always');
define('WPLT_ROBOTS', 'noindex');

// deactivate a set of plugins
define('WPLT_DISABLED_PLUGINS', serialize(
    [
        'debug-bar/debug-bar.php',
        'debug-bar-timber/debug-bar-timber.php',
        'log-deprecated-notices/log-deprecated-notices.php',
        'wp-sweep/wp-sweep.php',
        'debug-bar/debug-bar.php',
        'what-the-file/what-the-file.php',
        'query-monitor/query-monitor.php',
        'livity/simple-admin.php'
    ]
));
