<?php
namespace Application\Model;

class State {
    public $id;
    
    public function exchangeArray($data) {
        $this->id = (!empty($data['id'])) ? $data['id'] : null;
    }
}
