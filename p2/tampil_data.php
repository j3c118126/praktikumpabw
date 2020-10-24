<!DOCTYPE html>

<a href="insert.php" >tambah data</a>
<h2>Daftar data dalam database</h2> 

<?php
    include "koneksi.php";    //MELAKUKAN KONEKSI KE DATABASE
    $r = mysqli_query($kon,"SELECT * FROM mahasiswa"); //MELAKUKAN QUERY KE TABEL
    $i = 0;
    while($brs = mysqli_fetch_assoc($r)){ //MENGAMBIL PER BARIS DARI $r
        echo ++$i.". ".$brs['nama'];
        //tambahan ada di sini untuk edit, br pindahin ke bawah ya anak2 
        echo ' <a href="edit.php?id='.$brs['id'].'">edit</a> ';
        echo ' <a href="delete.php?id='.$brs['id'].'">delete</a><br>';
    }
?>
    
