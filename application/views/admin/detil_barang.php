<div class="container-fluid">
    <h3><i class="fas fa-search-plus"></i> Detail Data Barang</h3>
    <section class="content">
        <table class="table table-hover">
            <tr>
                <th>Nama Barang</th>
                <td><?php echo $detil->nama_brg ;?></td>
            </tr>
            <tr>
                <th>Keterangan</th>
                <td><?php echo $detil->keterangan ;?></td>
            </tr>
            <tr>
                <th>Kategori</th>
                <td><?php echo $detil->kategori ;?></td>
            </tr>
            <tr>
                <th>Harga</th>
                <td><?php echo $detil->harga ;?></td>
            </tr>
            <tr>
                <th>Stok</th>
                <td><?php echo $detil->stok ;?></td>
            </tr>
            <tr>
                <th>Foto Produk</th>
                <td><img src="<?php echo base_url(); ?>uploads/<?php echo $detil->gambar; ?>" width="200"></td>
            </tr>
        </table>
        <input type="button" class="btn btn-warning" onclick="location.href='<?php echo base_url() . 'admin/data_barang'; ?>';" value="Kembali" />
    
    </section>
    <br/>
    
</div>