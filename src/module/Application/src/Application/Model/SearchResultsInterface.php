<?php
/**
 * Created by PhpStorm.
 * User: Myers
 * Date: 16/11/2017
 * Time: 06:59
 */

namespace Application\Model;

interface SearchResultsInterface
{
    public function __construct(array $raw_data);


    public function getIterator() ;

    /**
     * @return int
     */
    public function getPage();

    /**
     * @return bool
     */
    public function getHasMore();

    /**
     * @return int
     */
    public function getTotal();
}