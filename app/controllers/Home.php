<?php

class Home extends Controllers {
    public function index()
    {
        $data['judul'] = 'Home';
        $this->views('templates/header', $data);
        $this->views('home/index');
        $this->views('templates/footer');
    }
}