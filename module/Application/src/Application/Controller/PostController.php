<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class PostController extends AbstractActionController
{
    protected $postTable;

    public function listAction()
    {
        return new ViewModel(array(
            'posts'=> $this->getPostTable()->fetchAll(),
        ));
    }

    public function getPostTable() {
        if (!$this->postTable) {
            $sm = $this->getServiceLocator();
            $this->postTable = $sm->get('Application\Model\PostTable');
        }
        return $this->postTable;
    }
}
