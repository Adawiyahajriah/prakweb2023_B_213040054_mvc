<?php 

class Controllers {
    public function views($view, $data = [])
    {
        require_once '../app/views/' .$view . '.php';
    }
}