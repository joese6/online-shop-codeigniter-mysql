<html>
<head>
        <title>Laporan Data Produk</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
    <body>
        <div class="container">
        <div class=jumbotron>
<h1 class="text-center">Laporan Data Produk</h1>
        </div>
        
         <table class="table table-bordered">
             <tr>
                 <th>No</th>
                 <th>Nama Produk</th>
                 <th>Keterangan</th>
                 <th>Kategori</th>
                 <th>Harga</th>
                 <th>Stok</th>
             </tr>
             <?php 
                    $no=1;
                    foreach($barang as $brg):
                 ?>
             <tr>
                
                <td><?php echo $no;?></td>
                <td><?php echo $brg->nama_brg;?></td>
                <td><?php echo $brg->keterangan;?></td>
                <td><?php echo $brg->kategori;?></td>
                <td><?php echo $brg->harga;?></td>
                <td><?php echo $brg->stok;?></td>

                     
             </tr>
             <?php 
                        $no++;
                    endforeach;?>
         </table>
         </div>
      
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
    </html>