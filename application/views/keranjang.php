<div class="container-fluid">
    <h4 class="mb-2"><i class="fas fa-shopping-cart"></i> Keranjang belanja</h4>
    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Sub-Total</th>
        </tr>

        <?php
        $no = 1;
        foreach ($this->cart->contents() as $items) :
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $items['name']; ?></td>
                <td><?php echo $items['qty']; ?></td>
                <td align="right">Rp. <?php echo number_format($items['price'], 0, ',', '.'); ?></td>
                <td align="right">RP. <?php echo number_format($items['subtotal'], 0, ',', '.'); ?></td>
            </tr>

        <?php endforeach; ?>
        <tr>
            <td colspan="4"></td>
            <td align="right">Rp. <?php echo number_format($this->cart->total(), 0, ',', '.'); ?></td>
        </tr>
    </table>
    <div align="right">
        <a href="<?php echo base_url('dashboard/hapus_keranjang'); ?>"><div class="btn btn-danger btn-sm">Hapus Keranjang</div></a>
        <a href="<?php echo base_url('dashboard/index'); ?>"><div class="btn btn-primary btn-sm">Lanjutkan Belanja</div></a>
        <a href="<?php echo base_url('dashboard/pembayaran'); ?>"><div class="btn btn-success btn-sm">Pembayaran</div></a>
    </div>
</div>