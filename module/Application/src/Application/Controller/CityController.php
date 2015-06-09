<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class CityController extends AbstractActionController
{
    protected $cityTable;

    public function listAction()
    {
        $state_id = $this->getRequest()->getQuery('state_id');
        $category = $this->getRequest()->getQuery('category');
        return new ViewModel(array(
            'cities'=> $this->getCityTable()->fetchByStateId($state_id),
            'category' => $category,
        ));
    }

    public function getCityTable() {
        if (!$this->cityTable) {
            $sm = $this->getServiceLocator();
            $this->cityTable = $sm->get('Application\Model\CityTable');
        }
        return $this->cityTable;
    }
}
