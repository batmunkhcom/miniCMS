<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
define('E_FATAL', E_ERROR | E_USER_ERROR | E_PARSE | E_CORE_ERROR | E_COMPILE_ERROR | E_RECOVERABLE_ERROR);

/**
 * Aldaanii medeelliig log server ruu shidne
 */
function my_exception_handler(Exception $e) {

    global $logger;

    if (!$logger) {
        return false;
    }

    $logger->log(
            $e->getCode(), $e->getMessage(), array('exception' => $e, 'domain' => DOMAIN)
    );
}

/**
 * Code	Severity	Keyword             Description         General Description
  0               Emergency           emerg (panic)	System is unusable.	A "panic" condition usually affecting multiple apps/servers/sites. At this level it would usually notify all tech staff on call.
  1               Alert               alert               Action must be taken immediately.	Should be corrected immediately, therefore notify staff who can fix the problem. An example would be the loss of a primary ISP connection.
  2               Critical            crit                Critical conditions.	Should be corrected immediately, but indicates failure in a secondary system, an example is a loss of a backup ISP connection.
  3               Error               err (error)         Error conditions.	Non-urgent failures, these should be relayed to developers or admins; each item must be resolved within a given time.
  4               Warning             warning (warn)	Warning conditions.	Warning messages, not an error, but indication that an error will occur if action is not taken, e.g. file system 85% full - each item must be resolved within a given time.
  5               Notice              notice              Normal but significant condition.	Events that are unusual but not error conditions - might be summarized in an email to developers or admins to spot potential problems - no immediate action required.
  6               Informational       info                Informational messages.	Normal operational messages - may be harvested for reporting, measuring throughput, etc. - no action required.
  7               Debug               debug               Debug-level messages.	Info useful to developers for debugging the application, not useful during operations.
 */

/**
 * PHP aldaanii medeelliig log server ruu shidne
 */
function my_error_shutdown() {

    $error = error_get_last();

    if ($error && ($error['type'] & E_FATAL)) {
        my_error_handler($error['type'], $error['message'], $error['file'], $error['line']);
    }
}

/**
 * PHP aldaanii medeelliig log server ruu shidehed ashiglagdana
 *
 * @param integer $errno Aldaanii dugaar
 * @param string $errstr Aldaanii message
 * @param string $errfile Aldaa zaasan file
 * @param integer $errline Aldaa garch bui murnii dugaar
 */
function my_error_handler($errno, $errstr, $errfile, $errline) {

    global $logger;

    if (!$logger) {
        return false;
    }

    switch ($errno) {

        case E_ERROR: // 1 //
            $typestr = 'E_ERROR';
            $log_level = 3;
            break;
        case E_WARNING: // 2 //
            $typestr = 'E_WARNING';
            $log_level = 4;
            break;
        case E_PARSE: // 4 //
            $typestr = 'E_PARSE';
            $log_level = 3;
            break;
        case E_NOTICE: // 8 //
            $typestr = 'E_NOTICE';
            $log_level = 5;
            break;
        case E_CORE_ERROR: // 16 //
            $typestr = 'E_CORE_ERROR';
            $log_level = 3;
            break;
        case E_CORE_WARNING: // 32 //
            $typestr = 'E_CORE_WARNING';
            $log_level = 4;
            break;
        case E_COMPILE_ERROR: // 64 //
            $typestr = 'E_COMPILE_ERROR';
            $log_level = 2;
            break;
        case E_CORE_WARNING: // 128 //
            $typestr = 'E_COMPILE_WARNING';
            $log_level = 4;
            break;
        case E_USER_ERROR: // 256 //
            $typestr = 'E_USER_ERROR';
            $log_level = 3;
            break;
        case E_USER_WARNING: // 512 //
            $typestr = 'E_USER_WARNING';
            $log_level = 4;
            break;
        case E_USER_NOTICE: // 1024 //
            $typestr = 'E_USER_NOTICE';
            $log_level = 5;
            break;
        case E_STRICT: // 2048 //
            $typestr = 'E_STRICT';
            $log_level = 4;
            break;
        case E_RECOVERABLE_ERROR: // 4096 //
            $typestr = 'E_RECOVERABLE_ERROR';
            $log_level = 3;
            break;
        case E_DEPRECATED: // 8192 //
            $typestr = 'E_DEPRECATED';
            $log_level = 5;
            break;
        case E_USER_DEPRECATED: // 16384 //
            $typestr = 'E_USER_DEPRECATED';
            $log_level = 5;
            break;
    }

    $message = $typestr . ': ' . $errstr . ' in ' . $errfile . ' on line ' . $errline . '';

    $logger->log(
            $log_level, $message, array(
//        'exception' => $e,
        'domain' => DOMAIN,
        'errno' => $errno,
        'errstr' => $errstr,
        'errfile' => $errfile,
        'errline' => $errline
            )
    );
}

/**
 * Log ruu shidne
 * @param $message string aldaanii message
 * @param $error_code aldaanii code
 *      0 - Emergency
 *      1 - Alert
 *      2 - Critical
 *      3 - Error
 *      4 - Warning
 *      5 - Notice
 *      6 - Info
 *      7 - Debug
 *
 * @return null
 */
function log_send($message, $error_code) {

    global $logger;

    if (!$logger) {
        return false;
    }

    $bt = debug_backtrace();

    $logger->log(
            $error_code, $message, array(
        'domain' => DOMAIN,
        'file' => $bt[0]['file'],
        'line' => $bt[0]['line'],
        'uri' => $_SERVER['SCRIPT_FILENAME']
            )
    );
}
