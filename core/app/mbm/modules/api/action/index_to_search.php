<?php

/**
 * This file is part of the miniCMS package.
 * (c) 2005-2012 BATMUNKH Moltov <contact@batmunkh.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
//index_to_search parameter iig shalgana
if (post('index_to_search') == 1) {
    $search_db = new D\Model\Repository\UnitOfWork(
            new D\Mapper\SearchMapper($adapter, new D\Model\Collection\EntityCollection), new D\Storage\ObjectStorage
    );

    $search = new D\Model\Search(array(
        'tags' => post('tags'),
        'title' => post('title'),
        'descr' => post('descr'),
        'url' => post('url'),
        'hits' => 0,
        'created_at' => convert_date($date),
    ));
    $search_db->registerNew($search);
    $search_db->commit();
}