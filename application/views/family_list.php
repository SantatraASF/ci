<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../asset/css/main.css">
</head>
<body>

    <?php foreach ($users as $i): ?>


        <a href="<?php echo site_url('hello/test') ?>"><h1> <?= $i['Nom'] ?> </h1></a>
    
        <p><?= $i['prenom'] ?></p>

        <img id="image"  class="blur" src="../../asset/img/thumb/<?=$i['thumbnail']?>" style="width:300px">


    <?php endforeach ?>



    <script type="text/javascript"src="../../asset/js/image.js" > </script>
</body>



</html>