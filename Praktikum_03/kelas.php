<?php

class Mahasiswa {
   private $nama; //access modifier
   private $nim;
   private $semester;

   public function setNama($nama){
    $this->nama = $nama; 
   }

   public function setNim($nim) {
    $this->nim = $nim;
   }

   public function setSemester($semester){
    $this->semester = $semester;
   }
}

$budi = new Mahasiswa();
$budi ->setNama ('Budi Santoso');
$budi ->setNim('0110224106');
$budi ->semester = 4;

echo $budi->nama;