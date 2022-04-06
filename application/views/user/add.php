<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

        <!-- load bootstrap css file -->
        <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
</head>
<body>
    <?php
    $this->load -> view ('layout/header');
    ?>
    <h3> Tambah user </h3>

    <div class= 'container'>
    <form action="<?php echo base_url('user/insert') ?>" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="judul" class="form-label">nama</label>
                                    <input type="text" name="nama" class="form-control" id="nama">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">email</label>
                                    <input type="text" name="email" class="form-control" id="email">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">password</label>
                                    <input type="text" name="password" class="form-control" id="pasword">
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">alamat</label>
                                    <input type="text" name="alamat" class="form-control" id="alamat">
                                </div>
                                <div class="mb-3">
                                    <label for="telepon" class="form-label">telepon</label>
                                    <input type="number" name="telepon" class="form-control" id="telepon">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
    </div>

    <!-- load bootstrap js file -->
 <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
</body>
</html>