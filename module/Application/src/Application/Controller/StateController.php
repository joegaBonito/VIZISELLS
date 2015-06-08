<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class StateController extends AbstractActionController
{
    protected $stateTable;

    public function listAction()
    {
        return new ViewModel(array(
            'states'=> $this->getStateTable()->fetchAll(),
        ));
    }

    public function getStateTable() {
        if (!$this->stateTable) {
            $sm = $this->getServiceLocator();
            $this->stateTable = $sm->get('Application\Model\StateTable');
        }
        return $this->stateTable;
    }
}
