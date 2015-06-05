<?php
namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;

class StateTable {
    protected $tableGateway;
    
    public function __construct(TableGateway $tableGateway) {
        $this->tableGateway = $tableGateway;
    }
    
    public function fetchAll() {
        $resultSet = $this->tableGateway->select();
        return $resultSet;
    }
    
    public function getState($id) {
        $id = (int) $id;
        $rowset = $this->tableGateway->select(array('state_id' => $id));
        $row = $rowset->current();
        if (!$row) {
            throw new \Exception("Could not find row $id");
        }
        return $row;
    }
    
    public function deleteState($id) {
        $this->tableGateway->delete(array('state_id' => (int) $id));
    }
}
