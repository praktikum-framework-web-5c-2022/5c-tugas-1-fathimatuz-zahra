<?php

use Illuminate\Support\Facades\Route;

//buat data masing2 10

Route::get('/welcome', function(){
    return view('welcome',);
});


Route::get('/dosen', function(){
        $dosen = ["Aji Primajaya", "Adhi Rizal", "Purwantoro", "Ultach Enri", "Dadang Yusup", "Chaerur Rozikin", "Agung Susilo Yuda Irawan", "Carudin", "Yuyun Umaidah", "Asep Jamaludin"];         
        $nidn = ["0026048706", "0007089101", "0408117702", "0001018108", "0424048202", "0020058305", "0015069302", "0013048804", "0005088303", "0010017606"];
        return view('dosen/index',['dosen'=>$dosen, 'nidn'=>$nidn]);
       
});


Route::get('/mahasiswa', function(){
        $mahasiswa = ["Cahya Diantoni", "Fathimatuz Zahra", "Annisa Rahma Putri", "Irna Purnahasanah", "Indira Nur Amalia", "Dellia Deltania", "Fadhillah  Ramadhan", "Diki Candra Permana Yuda", "Irfan Maulana", "Bayu Wildan Bahari","Dwi Putra Ardiansyah", "Dela Amaliya", "Damareindra Ihya Ullummuddien", "Fajri Yanti", "Chendra Muhammad Azhari Sofyan", "Ardianto Nugroho", "Assyifa Khalif", "Farhan Saory", "Faiz Agil Firmansyah", "Arfan Ryo Darmawan", "Ilham Rizki Nurhudaya", "Elvin Alan Pratama", "Fajar Athariq", "Daniel Naibaho"];         
        $npm = ["2010631170060", "2010631170009", "2010631170055", "2010631170014", "2010631170011", "2010631170063", "2010631170066", "2010631170064", "2010631170013", "2010631170059 ","2010631170142", "2010631170062", "2010631170061", "2010631170069", "2010631170140", "2010631170056", "2010631170058", "2010631170008", "2010631170067", "2010631170057", "2010631170010", "2010631170065", "2010631170068", " 2010631170141"];         
        
        return view('mahasiswa/index',['mahasiswa'=>$mahasiswa, 'npm'=>$npm]);
        
});

Route::get('/matakuliah', function(){
    $kodemk = ["FIK61527", "FIK61526", "FIK61555", "FIK61534", "FIK61574", "FIK61522", "FIK61518", "FIK61515", "FIK61516", "FIK61521"];
    $matakuliah = ["Framework Pemrograman Web", "Data Mining", "Blockchain", "Cloud Computing", "Pemrograman Berbasis Mobile", "Kecerdasan Buatan", "Pemrograman Berbasis Web", "Jaringan Komputer", "Keamanan Sistem", "Teori Bahasa dan Automata"];
    $dosenpengampu = ["Aji Primajaya", "Betha Nurina Sari", "Adhi Rizal", "Arif Solehudin", "Purwantoro", "Ultach Enri", "Dadang Yusup", "Chaerur Rozikin", "Agung Susilo Yuda Irawan", "Carudin"];
    $sks = ["3 SKS", "3 SKS", "3 SKS", "3 SKS", "3 SKS", "3 SKS", "3 SKS", "3 SKS", "3 SKS", "3 SKS"];
    return view('matakuliah/index',['matakuliah'=>$matakuliah, 'kodemk'=>$kodemk, 'dosenpengampu'=>$dosenpengampu, 'sks'=>$sks]);
        
});