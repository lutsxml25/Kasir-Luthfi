<div class="row">
        <div class="col-lg-4">
          <div class="card">
            <div class="card-header">
              <form action="" class="form-signin" method="post"> 
              <h3 class="">DAFTAR AKUN</h3>
                <div class="card-body">
                  <form action="" method="post">
                    <div class="mb-3 mt-3">
                    <table for="" class="form-label">id</table>
                       <input type="number" name="id" class="form-control" require autofocus>
                    </div>
                    <div class="mb-3 mt-3">
                      <table for="" class="form-label">Nama</table>
                      <input type="text" name="Username" class="form-control" require autofocus>
                    </div>
                    <div class="mb-3 mt-3">
                      <label for="" class="form-label">Password</label>
                      <input type="password" name="Password" class="form-control" require >
                    </div>
                    <div class="mb-3">
                      <label for="level" class="form-label">Level<span style="color: red;"> *</span></label>
                      <select class="form-control" name="Level" id="Level">
                              <option value="">Pilih Level</option>
                              <option value="Administrator">Administrator</option>
                              <option value="Petugas">Petugas</option>
                      </select>
                    </div>
                    
                      <button name="daftar" class="btn btn-primary" href="user.php">Daftar</button>
                      
                    </div> 
                  </form>
                  <?php 
			include '../koneksi/koneksi.php';
				if(isset($_POST['daftar'])){
          $id = $_POST['id'];
          $Username = $_POST['Username'];
          $Level = $_POST['Level'];
					$Password = md5($_POST['Password']);

					$result=mysqli_query($koneksi,"INSERT INTO user (UserID, Username, Password, Level) VALUES ('$id','$Username','$Password','$Level')");
					if($result){ 
						echo "<script>alert('Berhasil mendaftar akun')</script>";
						echo "<script>location:index.php?page=user';</script>";
					}
				}
			 ?>
                </div>
            </div>
          </div>
        </div>
    </div>