<?php
namespace Application\Model;

class City {
    public function exchangeArray($data) {
        $this->city_id = (!empty($data['city_id'])) ? $data['city_id'] : null;
        $this->state_id = (!empty($data['state_id'])) ? $data['state_id'] : null;
        $this->city_name = (!empty($data['city_name'])) ? $data['city_name'] : null;
    }
}
