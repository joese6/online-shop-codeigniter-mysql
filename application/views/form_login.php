
    

<body class="bg-gradient-secondary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block "><img src="<?php echo base_url().'assets/img/sepat.png';?> " class="card-img-top"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Login User SEPATUKU!</h1>
                  </div>
                  <?php echo $this->session->flashdata('pesan'); ?>
                  <form method="post" action="<?php echo base_url('auth/login');?>" class="user">
                    <div class="form-group">
                      <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="ketik username...">
                      <?php echo form_error('username','<div class="text-danger small ml-2">','</div>');?>
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="ketik password...">
                      <?php echo form_error('password','<div class="text-danger small ml-2">','</div>');?>
                    </div>
                    
                    <button type="submit" class="btn btn-info form-control">Login</button>
                   
                  </form>
                  <hr>
                  
                  <div class="text-center">
                    <a class="small" href="<?php echo base_url('registrasi/index');?>">Daftar akun baru!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  

</body>

</html>
