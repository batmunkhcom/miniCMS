<?php
/**
 * User: zach
 * Date: 7/25/13
 * Time: 2:15 PM
 */

namespace Elasticsearch\Common\Exceptions;

/**
 * NoShardAvailableException
 *
 * @category Elasticsearch
 * @package  Elasticsearch\Common\Exceptions
 * @author   Zachary Tong <zachary.tong@elasticsearch.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elasticsearch.org
 */
class NoShardAvailableException extends \Exception implements ElasticsearchException
{
}
