<div class="container-fluid">
    <h3><i class="fas fa-edit"></i> Edit Data Barang</h3>
    <?php foreach ($barang as $brg) : ?>
        <form action="<?php echo base_url() . 'admin/data_barang/update'; ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama">Nama Barang</label>
                <input type="hidden" class="form-control" name="idbrg" value="<?php echo $brg->id_brg; ?>">
                <input type="text" class="form-control" name="nama_brg" value="<?php echo $brg->nama_brg; ?>">
            </div>
            <div class="form-group">
                <label for="ket">Keterangan</label>
                <input type="text" class="form-control" name="keterangan" value="<?php echo $brg->keterangan; ?>">
            </div>
            <div class="form-group">
                <label for="kat">Kategori</label>
                <!-- <input type="text" class="form-control" name="kategori" value="<?php //echo $brg->kategori;
                                                                                    ?>">-->
                <select class="form-control" name="kategori">
                    <option <?php if ($brg->kategori == 'Aksesoris') echo 'selected'; ?>> Aksesoris</option>
                    <option <?php if ($brg->kategori == 'Sepatu Pria') echo 'selected'; ?>> Sepatu Pria</option>
                    <option <?php if ($brg->kategori == 'Sepatu Wanita') echo 'selected'; ?>> Sepatu Wanita</option>
                    <option <?php if ($brg->kategori == 'Sepatu Anak') echo 'selected'; ?>> Sepatu Anak</option>
                    <option <?php if ($brg->kategori == 'Peralatan Olahraga') echo 'selected'; ?>> Peralatan Olahraga</option>>
                    
                </select>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" class="form-control" name="harga" value="<?php echo $brg->harga; ?>">
            </div>
            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="number" class="form-control" name="stok" value="<?php echo $brg->stok; ?>">
            </div>
            <div class="form-group">
                <label for="fotoskr">Foto Produk</label>
                <input type="hidden" class="form-control" name="fotoskr" value="<?php echo $brg->gambar; ?>"><br />
                <img src="<?php echo base_url(); ?>uploads/<?php echo $brg->gambar; ?>" width="200">
            </div>
            <div class="form-group">
                <label for="foto">Upload Foto Produk Baru</label>
                <input type="file" class="form-control" name="gambar_brg">
            </div>

            <!-- <button type="reset" class="btn btn-danger">Reset</button>-->
            <input type="button" class="btn btn-warning" onclick="location.href='<?php echo base_url() . 'admin/data_barang'; ?>';" value="Batal" />
            <button type="submit" class="btn btn-success">Update</button>
            <!--</form>-->
        </form>
        <br/>
    <?php endforeach; ?>
</div>