<?php
/**
 * Created by PhpStorm.
 * User: Myers
 * Date: 15/09/2017
 * Time: 17:01
 */

use PHPUnit_Framework_TestCase as TestCase;

class PhpTaskTest extends TestCase
{
    public function checkApi()
    {
        $agent = new \Application\Model\DailymotionSearchAgentInterface();
        $results = $agent->query('test');
        return count($results) == 10;
    }
}
?>