<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Application\Model\DailymotionSearchAgentInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    const ITEM_LIMIT = 12;

    public function indexAction()
    {
        return new ViewModel();
    }

    public function searchAction() {
        $query = $this->params()->fromRoute('query');
        if(!$query) $this->redirect()->toRoute('search', array('query' => $this->getRequest()->getQuery('q')));
        $page = $this->params()->fromRoute('page');
        //if(!$query) $this->redirect()->toRoute('home');

        $agent = new DailymotionSearchAgentInterface();
        $results = $agent->query($query, $page, self::ITEM_LIMIT);

        $view = new ViewModel();
        $view ->setVariable('query', $query);
        $view ->setVariable('results', $results);

        return $view;
    }
}
