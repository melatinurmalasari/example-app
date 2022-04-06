<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>buku</title>

    <!-- load bootstrap css file -->
     <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
</head>
    <body>
    <?php
    $this->load -> view ('layout/header');
    ?>

 <div class="container">
 <h1><center>koleksi buku</center></h1>
 <a href ="koleksi/add" class="btn btn-success"> Tambah data</a>
 <table class="table table-striped">
 <tr>
      <th> ID </th>
      <th> Judul Buku </th>
      <th> Penulis </th>
      <th> Detail </th>
</tr>
     <?php foreach($list as $item){?>
         <tr>
            <td><?php echo $item ['id'];?></td>
            <td><?php echo $item ['judul'];?></td>        
            <td><?php echo $item ['penulis'];?></td>
            <td>
            <a href="koleksi/detail/<?php echo $item['id']; ?>" class="btn btn-info">Detail</a>
            <a href="koleksi/detail/<?php echo $item['id']; ?>" class="btn btn-warning">Edit</a>
            <a href="koleksi/detail/<?php echo $item['id']; ?>" class="btn btn-danger">Hapus</a>

            </td>

         </tr>        
        <?php } ?>

 </tr>
</div>

<script>
    function konfirmasi(id) {
        let text = "Apakah Anda yakin akan Menghapus data?";
        if (confirm(text) == true) {
            window.location.href = 'koleksi/delete/' + id;
        }
    }
</script>
 <!-- load bootstrap js file -->
 <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>


 </body>
</html>