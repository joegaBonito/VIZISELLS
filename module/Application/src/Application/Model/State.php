<?php
namespace Application\Model;

class State {
    public function exchangeArray($data) {
        $this->state_id = (!empty($data['state_id'])) ? $data['state_id'] : null;
        $this->state_name = (!empty($data['state_name'])) ? $data['state_name'] : null;
    }
}
