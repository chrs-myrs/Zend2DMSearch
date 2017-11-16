<?php
/**
 * Created by PhpStorm.
 * User: Myers
 * Date: 16/11/2017
 * Time: 06:58
 */

namespace Application\Model;


class DailymotionSearchAgentInterface implements SearchAgentInterface
{
    /**
     * @param $search_term
     * @param $page
     * @param $item_limit
     * @return DailymotionSearchResults
     */
    public function query($search_term, $page = 1, $item_limit = 10) {
        $api = new \Dailymotion();
        $result = $api->get(
            '/videos',
            array('page' => $page, 'search' => $search_term, 'fields' => array('id', 'title', 'owner', 'channel', 'url', 'thumbnail_240_url'), 'limit' => $item_limit)
        );

        //echo "<pre>".print_r($result, true)."</pre>";
        return new DailymotionSearchResults($result);

    }
}