<?php
class About extends Controllers {
    public function index($nama = 'Adawiyah', $pekerjaan = 'Mahasiswa', $umur = 20) 
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About';
        $this->views('templates/header', $data);
        $this->views('about/index', $data); 
        $this->views('templates/footer');
    }
    
    public function page()
    {
        $data['judul'] = 'Pages';
        $this->views('templates/header', $data);
        $this->views('about/page', $data);
        $this->views('templates/footer');
    }
}
