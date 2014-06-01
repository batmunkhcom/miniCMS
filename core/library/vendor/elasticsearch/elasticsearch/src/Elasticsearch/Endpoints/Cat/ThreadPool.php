<?php
/**
 * User: zach
 * Date: 02/10/2014
 * Time: 13:52:08 pm
 */

namespace Elasticsearch\Endpoints\Cat;

use Elasticsearch\Endpoints\AbstractEndpoint;
use Elasticsearch\Common\Exceptions;

/**
 * Class ThreadPool
 *
 * @category Elasticsearch
 * @package Elasticsearch\Endpoints\Cat
 * @author   Zachary Tong <zachary.tong@elasticsearch.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elasticsearch.org
 */

class ThreadPool extends AbstractEndpoint
{
    /**
     * @return string
     */
    protected function getURI()
    {
        $uri   = "/_cat/thread_pool";

        return $uri;
    }


    /**
     * @return string[]
     */
    protected function getParamWhitelist()
    {
        return array(
            'local',
            'master_timeout',
            'h',
            'help',
            'v',
            'full_id',
        );
    }


    /**
     * @return string
     */
    protected function getMethod()
    {
        return 'GET';
    }
}