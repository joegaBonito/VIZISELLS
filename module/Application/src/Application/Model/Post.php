<?php
namespace Application\Model;

class Post {
    public function exchangeArray($data) {
        $this->post_title = (!empty($data['post_title'])) ? $data['post_title'] : null;
        $this->post_head = (!empty($data['post_head'])) ? $data['post_head'] : null;
    }
}
