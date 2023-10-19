<?php
class About extends Controllers {
    public function index($nama = 'Adawiyah', $pekerjaan = 'Mahasiswa', $umur = 20) 
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About';
        $this->views('templates/header', $data);
        $this->views('about/index', $data); // Ganti 'home/index' dengan 'about/index' jika itu nama yang benar
        $this->views('templates/footer');
    }
    
    public function page()
    {
        $data['judul'] = 'Pages';
        $this->views('templates/header', $data);
        $this->views('about/page', $data); // Ganti 'about/page' dengan nama yang sesuai
        $this->views('templates/footer');
    }
}
