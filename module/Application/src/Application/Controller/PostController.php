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
            'posts'=> $this->getPostTable('merchandise')->fetchAll(),
        ));
    }

    public function getPostTable($cate) {
        if (!$this->postTable) {
            $sm = $this->getServiceLocator();
            switch($cate) {
                case 'merchandise':
                $this->postTable = $sm->get('Application\Model\PostMerchandiseTable');
                break;
            }
        }
        return $this->postTable;
    }
}
