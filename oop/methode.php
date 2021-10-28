<?php

 #membuat class 
 class person {
     #membuat property
     public $nama; #pubic = modifry
     public $jurusan;
     public $alamat; 
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
 }
 #tujuan method mengubah perilaku di dalam objek

 #membuat object 
 $aufa = new person(); 
 $ismail = new person();

 #mengakses method
 $ismail->setNama ('ismail');
 echo $ismail->getnama();
  echo '<br>';
 $aufa->setNama ('aufa');
 echo $aufa->getnama();


 //  LATIHAN //
#mebuat class

 class orang {
     #membuat properti
     public $nama;
     public $tempat_lahir;
     public $tanggal;
     #membuat fungsi method
     public function settempat_lahir($data){
         $this ->tempat_lahir =  $data;
         $this ->nama = $data;
     }
         
     }

 #membuat object
 $fila = new orang();
 $vina = new orang();
 $rara = new orang();

 #mengakses properti
echo "<br>";
 $fila ->nama ='sausan';
 echo $fila->nama;
 $vina  ->nama ='finak';
echo '<br>';
 #mengakses methode
 $fila ->settempat_lahir ('jakarta');
 echo $fila->tempat_lahir;
echo '<br>';
 $vina ->settempat_lahir ('bandung');
 echo $vina->tempat_lahir;
