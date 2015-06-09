<?php
namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;
use Zend\Db\Sql\Select;

class CityTable {
    protected $tableGateway;
    
    public function __construct(TableGateway $tableGateway) {
        $this->tableGateway = $tableGateway;
    }
    
    public function fetchAll() {
        $resultSet = $this->tableGateway->select();
        return $resultSet;
    }

    public function fetchTest() {
        $resultSet = $this->tableGateway->select();
        return $resultSet;
    }

    public function fetchByStateId($state_id) {
        $state_id = (int)$state_id;
        $resultSet = $this->tableGateway->select(array('state_id = ?' => $state_id));
        return $resultSet;
    }
    
    public function getCity($id) {
        $id = (int) $id;
        $rowset = $this->tableGateway->select(array('city_id' => $id));
        $row = $rowset->current();
        if (!$row) {
            throw new \Exception("Could not find row $id");
        }
        return $row;
    }
    
    public function deleteCity($id) {
        $this->tableGateway->delete(array('city_id' => (int) $id));
    }
}
