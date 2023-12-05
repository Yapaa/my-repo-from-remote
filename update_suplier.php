<?php
include "../config/connection.php";
if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];
    $exe = mysqli_query($conn, "UPDATE suplier SET nama='$nama', no_telp='$no_telp', alamat='$alamat' WHERE id=$id");
    header("Location: ../operator/suplier.php");
}
?>
<?php
$id = $_GET['customerId'];
$exe = mysqli_query($conn, "SELECT * FROM suplier WHERE id=$id");
while($data = mysqli_fetch_array($exe))
 {
     $nama = $data['nama'];
     $no_telp = $data['no_telp'];
     $alamat = $data['alamat'];
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
        <form method="post" action="update_suplier.php" name="formupload">
            <input type="hidden" name="id" value="<?php echo $_GET['customerId']; ?>">
            <div style="width: 100%; display: block; margin-top: 10px; margin-bottom: 10px;">
                <div style="margin-bottom: 5px;">
                    <label>
                        Nama :
                    </label>
                </div>
                <input type="text" style="width: 15%; border: 2px solid black; border-radius: 5px;" name="nama" value="<?php echo $nama; ?>">
            </div>
            <div style="width: 100%; display: block; margin-top: 10px; margin-bottom: 10px;">
                <div style="margin-bottom: 5px;">
                    <label>
                        No. Telp :
                    </label>
                </div>
                <input type="text" style="width: 15%; border: 2px solid black; border-radius: 5px;" name="no_telp" value="<?php echo $no_telp; ?>">
            </div>
            <div style="width: 100%; display: block; margin-top: 10px; margin-bottom: 10px;">
                <div style="margin-bottom: 5px;">
                    <label>
                        Alamat :
                    </label>
                </div>
                <input type="text" style="width: 20%; border: 2px solid black; border-radius: 5px;" name="alamat" value="<?php echo $alamat; ?>">
            </div>
            <div>
                <input type="submit" name="update" style="background: blue; border-radius: 5px; padding: 5px; border: 2px solid blue; color: white;" value="Simpan"></input>
                <a href='../operator/suplier.php' style="border: 2px solid red; padding: 5px; border-radius: 5px; color: white; background-color: red; text-decoration: none;">Cancel</a>
            </div>
        </form>
    </body>
</html>