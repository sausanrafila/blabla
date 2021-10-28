<?php

 #membuat class 
 class person {
     #membuat property
     public $nama; #pubic = modifry
     public $jurusan;
     public $alamat; 
 }

 #membuat object 
 $aufa = new person(); 
 $ismail = new person();

 #mengakses property
 $aufa ->nama = 'aufa billah';
 echo $aufa->nama;

 echo '<br>';

 $ismail ->nama = 'ismail';
 echo $ismail->nama;

