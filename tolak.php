<?php  
require'koneksi.php';

$id = $_GET["id"];

if( tolak ($id) > 0){
    echo "
        <script>
        alert('data behasil ditolak');
        document.location.href = 'Profil.php'
        </script>
        ";
} else{
    echo "
        <script>
        alert('data gagal ditolak');
        document.location.href = 'Profil.php'
        </script>
        ";
}

?>