<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Cache\Storage\Adapter\Zen;
use Zend\Cache\Storage\Plugin\ExceptionHandler;

class ServiceController extends AbstractActionController
{
    public function testAction()
    {
        // Or manually:
        $cache  = new Apc();
        $cache->getOptions()->setTtl(3600);

        $plugin = new ExceptionHandler();
        $plugin->getOptions()->setThrowExceptions(false);
        $cache->addPlugin($plugin);

        if(!$results = $cache->getItem('results')) {
            $api = new \Dailymotion();
            $result = $api->get(
                '/videos',
                array('fields' => array('id', 'title', 'owner'))
            );
            $cache->setItem('results', $result);
            echo count($result)." items loaded from remote.";
        } else {
            echo count($results)." items loaded from cache.";
            echo "<pre>";
            echo $results;
            echo "</pre>";
        }

        return new ViewModel();
    }
}
