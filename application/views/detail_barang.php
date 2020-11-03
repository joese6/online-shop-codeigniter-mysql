<div class="container-fluid">
    <div class="card mb-2">
        <h5 class="card-header">Detail Produk</h5>
        <div class="card-body">
            <?php 
                foreach($prod as $prd):
            ?>
            <div class="row">
                <div class="col-md-4"><img src="<?php echo base_url().'/uploads/'.$prd->gambar;?>" class="card-img-top"></div>
                <div class="col-md-8">
                    <table class="table">
                        <tr>
                            <td>Nama Produk</td>
                            <td><strong><?php echo $prd->nama_brg;?></strong></td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td><strong><?php echo $prd->keterangan;?></strong></td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                            <td><strong><?php echo $prd->kategori;?></strong></td>
                        </tr>
                        <tr>
                            <td>Stok</td>
                            <td><strong><?php echo $prd->stok;?></strong></td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td><strong><div class="btn btn-info">Rp. <?php echo number_format($prd->harga,0,',','.');?></div></strong></td>
                        </tr>
                        
                    </table>
                    <?php echo anchor('dashboard/tambah_keranjang/'.$prd->id_brg,'<div class="btn btn-success btn-sm">Tambah ke Keranjang</div>');?>
    <a href="<?php echo base_url('welcome/index'); ?>"><div class="btn btn-warning btn-sm">Kembali</div></a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
   
</div>