<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href= "<?php echo base_url("assets/css/bootstrap.min.css");?>" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<?php
$this-> load-> view ('layout/header');
?>

    <div class= "container">
    <div class= "card text-dark bg-light mb-3" style="max-width: 18rem;">
        <div class= "card-header"> Hello <?= $nama; ?>!</div>
        <div class= "card-body">
            <h5 class= "card-title"> Hobi : </h5>
            <h5>
                <ul>
                    <?php foreach($Hobi as $i){?>
                        <li><?php echo $i ?></li>
                    <?php } ?>
            </h5>
    </div>
</div>

</div>
        <script scr = "<?php echo base_url("assets/cjs/bootstrap.min.js");?> "></script>
</body>
</html>