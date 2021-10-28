<?php

 #membuat class 
 class person {
     #membuat property
     public $nama; #pubic = modifry
     public $jurusan;
     public $alamat; 
     //membuat constructor
     public function __construct($nama, $alamat, $jurusan)
     {
         $this -> nama = $nama;
         $this -> jurusan = $jurusan;
         $this -> alamat = $alamat;
     }


     #membuat method
     #set nama untuk mengatur atau memberikan nilai nama
     public function setNama($data) //set untuk mengatur nila
     {
         $this->nama = $data; //this mengakses properti yang ada di dalem objek class person
     }
     #get nama untukmendapatkan data nama
     #this mengacu pada variable di dalam objek
     public function getNama () //get untuk mendapatkan nilai
     {
        return $this ->nama;

    }
    public function getjurusan()
    {
        return $this ->jurusan;
    }
 }
 #tujuan method mengubah perilaku di dalam objek

 #membuat object 
 $aufa = new person("aufa billa", "informatika", "depok"); 
 $ismail = new person("ismil", "informatika","bogor");

 #mengakses method

echo $ismail->getNama();
echo $ismail->getjurusan();
  echo '<br>';

 echo $aufa->getnama();
 echo $aufa->getjurusan();

 //         latihan
 
 class sekolah {
    public $kelas;
    public $nim;
    public function __construct($kelas,$nim)
    {
        $this ->kelas = $kelas;
        $this ->nim = $nim;
    }
    public function getsemua() //hanya bisa ngereturn satu
    {
        return $this-> kelas;
        return $this -> nim;
    }
 }

 $kelas1 = new sekolah('wlewel','100');
 $kelas2 = new sekolah('kelas2','102');
echo '<br>';
 echo $kelas1->getsemua();
 echo "<br>";
 echo $kelas2->getsemua();