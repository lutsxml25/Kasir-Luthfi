<div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Daftar Barang</h4>
                    <p class="card-description">
                    <!-- Add class <code>.table</code> -->
                        <a href="?page=tambah-barang" title="Tambah Barang" 
                            class="btn btn-primary btn-icon-split btn-sm">
                                <span class="icon text-white-50"><i class="fas fa-plus"></i></span>
                                <span class="text">Tambah Produk</span>
                        </a>
                    </p>

                    <div class="table-responsive">
                        <table class="table" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Foto Produk</th>
                                    <th>Nama Produk</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Terjual</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $no = 1;
                                $sql = $koneksi->query("SELECT * FROM produk");
                                while ($data= $sql->fetch_assoc()) {
                                    
                            ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo "<img src='../foto/".$data['foto']."' width='70' height='70'>"; ?></td>
                                <td><?php echo $data['NamaProduk']?></td>
                                <td>Rp.<?php echo number_format($data['Harga'])?></td>
                                <td><?php echo $data['Stok']?></td>
                                <td><?php echo $data['Terjual']?></td>
                                <td align="center" width="12%"><a href="?page=edit-barang&ProdukID=<?= $data['ProdukID'];?>" class="badge badge-primary p-2" title="Edit"><i class="">Edit</i></a> | <a href="?page=hapus-barang&ProdukID=<?= $data['ProdukID']; ?>" class="badge badge-danger p-2 delete-data" onclick="return confirm('Anda Yakin Ingin Menghapus Barang Ini?')">Delete</i></a></td>
                                <td></td>
                                <td>
                                    
                                </td>
                            </tr>
                            <?php } ?>
                        
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>  
    </div>