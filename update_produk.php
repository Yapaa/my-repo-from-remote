<?php
include "../config/connection.php";
if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $jenis = $_POST['jenis'];
    $harga_beli = $_POST['harga_beli'];
    $harga_jual = $_POST['harga_jual'];
    $stok = $_POST['stok'];
    $id_suplier = $_POST['nama_suplier'];
    $exe = mysqli_query($conn, "UPDATE barang SET jenis='$jenis', harga_beli='$harga_beli', harga_jual='$harga_jual', stok='$stok', id_suplier='$id_suplier' WHERE id=$id");
    header("Location: ../operator/produk.php");
}
?>
<?php
$id = $_GET['customerId'];
$exe = mysqli_query($conn, "SELECT * FROM barang WHERE id=$id");

while($data = mysqli_fetch_array($exe))
 {
    $id = $data['id'];
    $jenis = $data['jenis'];
    $harga_beli = $data['harga_beli'];
    $harga_jual = $data['harga_jual'];
    $stok = $data['stok'];
    $id_suplier = $data['id_suplier'];
 }
?>
<html>
    <head>
        <title>Edit</title>
    </head>
    <body>
        <h2>
            Edit Data Pengguna
        </h2>
        <form method="post" action="update_produk.php" name="formupload">
            <input type="hidden" name="id" value="<?php echo $_GET['customerId']; ?>">
            <div style="width: 100%; display: block; margin-top: 10px; margin-bottom: 10px;">
                <div style="margin-bottom: 5px;">
                    <label>
                        Jenis/Merk :
                    </label>
                </div>
                <input type="text" style="width: 15%; border: 2px solid black; border-radius: 5px;" name="jenis" value="<?php echo $jenis; ?>">
            </div>
            <div style="width: 100%; display: block; margin-top: 10px; margin-bottom: 10px;">
                <div style="margin-bottom: 5px;">
                    <label>
                        Harga Beli :
                    </label>
                </div>
                <input type="text" style="width: 15%; border: 2px solid black; border-radius: 5px;" name="harga_beli" value="<?php echo $harga_beli; ?>">
            </div>
            <div style="width: 100%; display: block; margin-top: 10px; margin-bottom: 10px;">
                <div style="margin-bottom: 5px;">
                    <label>
                        Harga Jual :
                    </label>
                </div>
                <input type="text" style="width: 20%; border: 2px solid black; border-radius: 5px;" name="harga_jual" value="<?php echo $harga_jual; ?>">
            </div>
            <div style="width: 100%; display: block; margin-top: 10px; margin-bottom: 10px;">
                <div style="margin-bottom: 5px;">
                    <label>
                        Stok :
                    </label>
                </div>
                <input type="text" style="width: 20%; border: 2px solid black; border-radius: 5px;" name="stok" value="<?php echo $stok; ?>">
            </div>
            <div style="width: 100%; display: block; margin-top: 10px; margin-bottom: 10px;">
                <div style="margin-bottom: 5px;">
                    <label>
                        id_suplier :
                    </label>
                </div>
                <input type="text" style="width: 20%; border: 2px solid black; border-radius: 5px;" name="nama_suplier" value="<?php echo $id_suplier; ?>">
            </div>
            <div>
                <input type="submit" name="update" style="background: blue; border-radius: 5px; padding: 5px; border: 2px solid blue; color: white;" value="Simpan"></input>
                <a href='../operator/produk.php' style="border: 2px solid red; padding: 5px; border-radius: 5px; color: white; background-color: red; text-decoration: none;">Cancel</a>
            </div>
        </form>
    </body>
</html>