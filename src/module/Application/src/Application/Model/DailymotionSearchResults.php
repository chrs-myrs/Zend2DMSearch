<?php
/**
 * Created by PhpStorm.
 * User: Myers
 * Date: 16/11/2017
 * Time: 06:59
 */

namespace Application\Model;


class DailymotionSearchResults implements SearchResultsInterface, \IteratorAggregate
{
    private $page, $limit, $explicit, $total, $has_more;
    /** @var array[] $list */
    private $list;

    /**
     * SearchResults constructor.
     * @param $raw_data array
     */
    public function __construct(array $raw_data)
    {
        foreach($raw_data as $key=>$value) {
            $this->$key = $value;
        }
    }


    public function getIterator() {
        return new \ArrayIterator($this->list);
    }

    /**
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @return bool
     */
    public function getHasMore()
    {
        return $this->has_more;
    }

    /**
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }
}