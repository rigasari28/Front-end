<?php  
require'koneksi.php';

$id = $_GET["id"];

if( verif ($id) > 0){
    echo "
        <script>
        alert('data behasil diverifikasi');
        document.location.href = 'Profil.php'
        </script>
        ";
} else{
    echo "
        <script>
        alert('data gagal diverifikasi');
        document.location.href = 'Profil.php'
        </script>
        ";
}

?>