<?php
//PANGGIL FAIL SAMBUNG KE PANGKALAN DATA
include_once("config.php");

if(isset($_POST['Submit'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $id = $_POST['id'];
    
    
//TAMBAH REKOD KE PANGKALAN DATA
    $result = mysqli_query($mysqli, "INSERT INTO produk(nama,harga,id) "
            . "VALUES('$nama','$harga','$id')");
    
//PAPAR MESEJ IKA TAMBAH REKOD BERJAYA
echo "<script>alert('Tambah maklumat berjaya'); "
    . "window.location='index.php'</script>";

}
 else {
    

?>

<html>
<head>
<title>TAMBAH REKOD</title>
</head>
<body>
<center> <h2>TAMBAH REKOD BARANGAN DAN HARGA</h2>
    <fieldset>
        <form action="add.php" method="post" name="form1">
            <table width="25%" border="0">
                <tr>
                    <td>Nama Produk</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                
                
                <tr>
                    <td>Harga</td>
                    <td><input type="text" name="harga"></td>
                </tr>
                <tr>
                    <td>ID</td>
                    <td><input type="text" name="id"></td>
                </tr
                <tr>
                    <td>Jenis</td>
                    <td><input type="text" name="jenis"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Submit" value="Add"></td>
                </tr>
            </table>
        </form>
       
        <BR><a href="index.php">Kembali ke Laman Utama</a>
    </fieldset>
</center>
<?php
 }
 ?>

</body>

</html>



