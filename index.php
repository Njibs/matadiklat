<?php
$submodule = (isset($_GET['s'])) ? $_GET['s'] : "tampil" ;
switch ($submodule) {
    case 'tampil': 
        default:
        include "matadiklat/tampil.php";
        break;   
    case 'tambah':
        include "matadiklat/tambah.php";
        break;
    case 'simpan' :
        include "matadiklat/simpan.php";
        break;       
    case 'edit' :
        include "matadiklat/edit.php";
        break;       
    case 'update' :
        include "matadiklat/update.php";
        break;       
    case 'hapus' :
        include "matadiklat/hapus.php";
        break;
        
  
}