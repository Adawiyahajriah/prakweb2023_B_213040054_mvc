<?php 

class Mahasiswa extends Controllers {
    public function index()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->views('templates/header', $data);
        $this->views('mahasiswa/index', $data);
        $this->views('templates/footer');
    }
}