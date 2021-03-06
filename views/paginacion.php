<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <title>Paginación - MVC</title>
</head>
<body>
<main class="contenedor">
<!-- Validate if array($data) is not empty -->
    <?php if(!empty($data)):?>

	    <h2>Paginación</h2>
        <!-- Articles -->
        <section class="articulos">
            <ul>
                <?php foreach($data as $art):?>
                    <li><?= $art['id'] . ' - ' . $art['articulos'];?></li>
                <?php endforeach;?>
            </ul>
        </section>
        
<!-- Else show nothing -->
    <?php else:?>
        <section class="notfound">
            <h2>Nothing found!</h2>
        </section>
    <?php endif;?>

<!-- Validate if array($data) is not empty -->
    <?php if(!empty($data)):?>
    
         <!-- Backward button --> 
    <section class="paginacion">
        <ul>
            <?php if($pageId == 1):?>
                <li class="desactivado">&larr;</li>
            <?php else:?>
                <li class="pageNumber">
                    <a href="?paginas=<?= $pageId - 1;?>">&larr;</a>
                </li>
            <?php endif;?>

    <!-- Pages Number -->
            <?php for($i = 1; $i <= $pageNumber; $i++):?>
                <?php if($pageId == $i):?>
                    <li class="activado pageNumber">
                        <a href="?paginas=<?=$i;?>"><?= $i?></a>
                    </li>
                <?php else:?>
                    <li class="pageNumber">
                        <a href="?paginas=<?=$i;?>"><?= $i?></a>
                    </li>
                <?php endif;?>
            <?php endfor;?>

            <!-- Forward button -->
            <?php if($pageId == $pageNumber):?>
                <li class="desactivado">&rarr;</li>
            <?php else:?>
                <li class="pageNumber">
                    <a href="?paginas=<?= $pageId + 1;?>">&rarr;</a>
                </li>
            <?php endif;?>
    <?php endif;?>
        </ul>
    </section>
</main>
    
<!-- JavaScript -->
<script src="/assets/js/app.js"></script>
</body>
</html>