<?php
// include database connection file
include_once("../koneksi/koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_GET['ProdukID'];
	
	$name=$_POST['NamaProduk'];
	$harga=$_POST['Harga'];
	$stok=$_POST['Stok'];

	// update user data
	$result = mysqli_query($koneksi, "UPDATE produk SET NamaProduk='$name', Harga='$harga', Stok='$stok' WHERE ProdukID=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php?page=stok");
    echo "<script>alert('berhasil')</script>";
}


$id = $_GET['ProdukID'];

// Fetech user data based on id
$result1 = mysqli_query($koneksi, "SELECT * FROM produk WHERE ProdukID=$id");
 
while($produk_data = mysqli_fetch_array($result1))
{
	$name = $produk_data['NamaProduk'];
	$harga = $produk_data['Harga'];
	$stok = $produk_data['Stok'];
}
?>

<div class="row well">
        <div class="col-md-4">
            <div class="card well">
                <div class="card-header">
                    <h3 class="">Edit Barang</h3>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        
                        <div class="mb-3 mt-3">
                            <label for="nama" class="form-label">Nama Produk:</label>
                            <input type="text" class="form-control" id="NamaProduk" value="<?php echo $name; ?>" placeholder="Enter Name" name="NamaProduk">
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="number" class="form-control" id="harga" value="<?php echo $harga; ?>" placeholder="Enter Harga" name="Harga">
                        </div>
                        <div class="mb-3">
                            <label for="stok" class="form-label">Stok</label>
                            <input type="number" class="form-control" id="stok" value="<?php echo $stok; ?>" placeholder="Enter Stok" name="Stok">
                        </div>
                        <button type="submit" name="update" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>