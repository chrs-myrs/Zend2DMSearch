<?php
/**
 * Created by PhpStorm.
 * User: Myers
 * Date: 16/11/2017
 * Time: 06:58
 */

namespace Application\Model;


class SearchAgent
{
    /**
     * @param $search_term
     * @return SearchResults
     */
    public function query($search_term, $page = 1, $item_limit = 10) {
        $api = new \Dailymotion();
        $result = $api->get(
            '/videos',
            array('page' => $page, 'search' => $search_term, 'fields' => array('id', 'title', 'owner', 'url', 'thumbnail_240_url'), 'limit' => $item_limit)
        );

        //echo "<pre>".print_r($result, true)."</pre>";
        return new SearchResults($result);

    }
}