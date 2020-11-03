<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-success btn-sm">
                <?php 
                    $grand_total=0;
                    if($keranjang=$this->cart->contents()){
                       foreach($keranjang as $item)
                       $grand_total=$grand_total+$item['subtotal'];
                    }
                    echo "<h4>Total Belanja Anda : Rp. ".number_format($grand_total,0,',','.');
                ?>
            </div><br/><br/>
            <h3>Input Alamat Pengiriman dan Pembayaran</h3>
            <form method="post" action="<?php echo base_url('dashboard/proses_pesanan');?>">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap Anda..." required oninvalid="this.setCustomValidity('Nama Lengkap wajib diisi !')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat Lengkap</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Alamat Lengkap Anda..." required oninvalid="this.setCustomValidity('Alamat Lengkap wajib diisi !')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label for="notelp">No Telepon</label>
                        <input type="number" class="form-control" name="no_telp" placeholder="No Telepon Anda..." required oninvalid="this.setCustomValidity('No Telepon wajib diisi !')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label for="jasper">Jasa Pengiriman</label>
                        <select name="jasper" class="form-control">
                            <option value="JNE">JNE</option>
                            <option value="TIKI">TIKI</option>
                            <option value="JNT">JNT</option>
                            <option value="POS INDONESIA">POS INDONESIA</option>
                            <option value="GO SEND">GO SEND</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="bank">Transfer Bank</label>
                        <select name="bank" class="form-control">
                            <option value="BNI-0988049">BNI-0988049</option>
                            <option value="BRI-094855049">BRI-094855049</option>
                            <option value="BCA-0454988049">BCA-0454988049</option>
                            <option value="MANDIRI-1234988049">MANDIRI-1234988049</option>
                            
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm mb-3">Pesan</button>
            </form>
            
        </div>
        <div class="col-md-2"></div>
    </div>
</div>