<?php
// include database connection file
include_once("../koneksi/koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_GET['UserID'];
	
	$Username=$_POST['name'];
	$password= md5($_POST['password']);
    $Level=$_POST['Level'];

	// update user data
	$result = mysqli_query($koneksi, "UPDATE user SET Username='$Username', Password='$password', Level='$Level' WHERE UserID=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php?page=user");
    echo "<script>alert('berhasil')</script>";
}


$id = $_GET['UserID'];

// Fetech user data based on id
$result1 = mysqli_query($koneksi, "SELECT * FROM user WHERE UserID=$id");
 
while($user_data = mysqli_fetch_array($result1))
{
	$name = $user_data['Username'];
	$password = $user_data['Password'];
}
?>
<div class="row well">
        <div class="col-md-4">
            <div class="card well">
                <div class="card-header">
                    <h3 class="">Update User</h3>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        
                        <div class="mb-3 mt-3">
                            <label for="nama" class="form-label">Nama:</label>
                            <input type="text" class="form-control" id="nama" value="<?php echo $name; ?>" placeholder="Enter Name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="pwd" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="pwd" value="<?php echo $password; ?>" placeholder="Enter password" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="level" class="form-label">Level:<span style="color: red;"> *</span></label>
                            <select class="form-control" name="Level" id="Level">
                                <?php if ($data['Level'] == "Administrator") { ?>
                                    <option value="Administrator">Administrator</option>
                                    <option value="Petugas">Petugas</option>
                                <?php } else { ?>
                                    <option value="Petugas">Petugas</option>
                                    <option value="Administrator">Administrator</option>
                                <?php } ?>
                            </select>
                        </div>
                        <button type="submit" name="update" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>