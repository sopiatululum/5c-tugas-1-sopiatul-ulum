<?php

use Illuminate\Support\Facades\Route;

Route::get(uri:'/dosen', action:function(){
    $list_namadosen = ["Agung susilo", "Arip solehudin", "Betha Nurina Sari", "Iqbal Maulana", "Mayasari", "Rini Mayasari", "Siska", "Susilawati", "Tesa Nurpadilah", "Yuyun Umaidah"];
    return view(view:'dosen')->with(key:'dosens', value:$list_namadosen);
});

Route::get(uri:'/mahasiswa', action:function(){
    $list_mahasiswa = ["Nabila Aulia Rahma", "Nabila Khairunisa", "Najmil Hayah", "Octavia Salwa", "Putri Rizkika", "Radika Tripena lubis", "Rifky al Fahreza", "Risa Adelia", "Rizal Fahmi Alifa", "Sopiatul Ulum"];
    return view(view:'mahasiswa')->with(key:'mahasiswas', value:$list_mahasiswa);
});

Route::get(uri:'/matakuliah', action:function(){
    $list_matkul = ["Basis Data", "Blockchain", "Cloud Computing", "Data Mining", "Framework", "Metode numerik", "Pancasila", "Pemrograman mobile", "Sistem operasi", "Technopreneur"];
    return view(view:'matakuliah')->with(key:'matkuls', value:$list_matkul);
});




