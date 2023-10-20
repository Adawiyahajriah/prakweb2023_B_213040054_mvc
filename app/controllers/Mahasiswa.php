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

    public function detail($id)
    {
        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $this->views('templates/header', $data);
        $this->views('mahasiswa/detail', $data);
        $this->views('templates/footer');
    }

//     public function detail($id)
// {
//     $data['judul'] = 'Detail Mahasiswa';
//     $mahasiswaModel = $this->model('Mahasiswa_model');
//     $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
//     $this->views('templates/header', $data);
//     $this->views('mahasiswa/detail', $data);
//     $this->views('templates/footer');
// }

}