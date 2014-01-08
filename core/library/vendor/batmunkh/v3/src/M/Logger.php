<?php

/**
 * This file is part of the miniCMS package.
 * (c) since 2005 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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
 *
 * @package    miniCMS
 * @subpackage -
 * @author     BATMUNKH Moltov <contact@batmunkh.com>
 * @version    SVN: $Id
 */
class Logger {

    public $logger;
    public $facility;

    public function __construct($facility) {

        if (ENABLE_LOG == 1) {
            $logger = new Gelf\Logger(
                    new \Gelf\Publisher(
                    new \Gelf\Transport\UdpTransport(LOG_SERVER)
                    ), $facility
            );
        } else {
            return;
        }
        $this->logger = $logger;
        $this->facility = $facility;
    }

    /*
     * @param $log_level string aldaanii turul
     *      EMERGENCY
     *      ALERT
     *      CRITICAL
     *      DEBUG
     *      INFO
     *      NOTICE
     *      WARNING
     *      ERROR
     *      */

    public function send($msg, $log_level) {

    }

}
