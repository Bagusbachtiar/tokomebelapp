<!-- membuat tombol dengan ukuran small berwarna biru  -->
        <!-- data-target setiap modal harus berbeda, karena akan menampilkan data yang berbeda pula
        caranya membedakannya, gunakan id_barang sebagai pembeda data-target di setiap modal -->
        <a href="" class="btn btn-sm btn-info" data-toggle="modal"
            data-target="#modal<?php echo $data['id_barang']; ?>">Edit</a>
        
        <!-- untuk melihat bentuk-bentuk modal kalian bisa mengunjungi laman bootstrap dan cari modal di kotak pencariannya -->
        <!-- id setiap modal juga harus berbeda, cara membedakannya dengan menggunakan id_barang -->
        <div class="modal fade" id="modal<?php echo $data['id_barang']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Barang</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!-- di dalam modal-body terdapat 4 form input yang berisi data.
                    data-data tersebut ditampilkan sama seperti menampilkan data pada tabel. -->
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nama Barang</label>
                                <input type="text" class="form-control" value="<?php echo $data['nama_barang']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Deskripsi Barang</label>
                                <textarea class="form-control" rows="5"><?php echo $data['deskripsi_barang']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Jenis Barang</label>
                                <input type="text" class="form-control" value="<?php echo $data['jenis_barang']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Harga Barang</label>
                                <input type="text" class="form-control" value="<?php echo $data['harga_barang']; ?>">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>