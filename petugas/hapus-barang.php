<?php
// include database connection file
include_once("../koneksi/koneksi.php");
 
// Get id from URL to delete that user
$id = $_GET['ProdukID'];
 
// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM produk WHERE ProdukID=$id");

// After delete redirect to Home, so that latest user list will be displayed.

echo "<script>location:index.php?page=stok';</script>";
echo "<script>alert('Berhasil Dihapus')</script>";

?>