<div class="container-fluid">
    <h4>Detail Pesanan <div class="btn btn-success btn-sm">No Invoice : <?php echo $invoi->id; ?></div>
    </h4>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Id Produk</th>
            <th>Nama Produk</th>
            <th>Jumlah Pesanan</th>
            <th>Harga Satuan</th>
            <th>Sub-Total</th>
        </tr>
        <?php
        $total = 0;
        foreach ($pesanan as $psn) :
            $subtotal = $psn->jumlah * $psn->harga;
            $total += $subtotal;
        ?>
            <tr>
                <td><?php echo $psn->id_brg; ?></td>
                <td><?php echo $psn->nama_brg; ?></td>
                <td><?php echo $psn->jumlah; ?></td>

                <td align="right">Rp. <?php echo number_format($psn->harga, 0, ',', '.'); ?></td>
                <td align="right">Rp. <?php echo number_format($subtotal, 0, ',', '.'); ?></td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="4" align="right">Grand Total : </td>
            <td align="right">Rp. <?php echo number_format($total,0,',','.');?></td>
        </tr>
    </table>
    <a href="<?php echo base_url('admin/invoice/index');?>" class="btn btn-warning">Kembali</a>
</div>