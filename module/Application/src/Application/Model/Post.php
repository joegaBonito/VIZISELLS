<?php
namespace Application\Model;

class Post {
    public function exchangeArray($data) {
        $this->post_title = (!empty($data['post_title'])) ? $data['post_title'] : null;
        $this->post_id = (!empty($data['post_id'])) ? $data['post_id'] : null;
        $this->post_head = (!empty($data['post_head'])) ? $data['post_head'] : null;
        $this->post_thumb = (!empty($data['post_thumb'])) ? $data['post_thumb'] : null;
        $this->post_body = (!empty($data['post_body'])) ? $data['post_body'] : null;
    }
}
