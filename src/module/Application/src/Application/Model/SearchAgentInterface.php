<?php
/**
 * Created by PhpStorm.
 * User: Myers
 * Date: 16/11/2017
 * Time: 06:58
 */

namespace Application\Model;


interface SearchAgentInterface
{
    /**
     * @param $search_term
     * @param $page
     * @param $item_limit
     * @return SearchResultsInterface
     */
    public function query($search_term, $page = 1, $item_limit = 10);
}