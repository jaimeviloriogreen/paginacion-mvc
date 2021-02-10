<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Paginación - MVC</title>
</head>
<body>
<main class="contenedor">
	<h2>Paginación</h2>
    <!-- Articles -->
	<section class="articulos">
		<ul>
            <?php foreach($data as $art):?>
                <li><?= $art['id'] . ' - ' . $art['articulos'];?></li>
            <?php endforeach;?>
        </ul>	
	</section>
         <!-- Backward button --> 
    <section class="paginacion">
        <ul>
            <?php if($pageId == 1):?>
                <li class="desactivado">«</li>
            <?php else:?>
                <li>
                    <a href="?paginas=<?= $pageId - 1;?>">«</a>
                </li>
            <?php endif;?>

    <!-- Pages Number -->
            <?php for($i = 1; $i <= $pageNumber; $i++):?>
                <?php if($pageId == $i):?>
                    <li class="activado">
                        <a href="?paginas=<?=$i;?>"><?= $i?></a>
                    </li>
                <?php else:?>
                    <li>
                        <a href="?paginas=<?=$i;?>"><?= $i?></a>
                    </li>
                <?php endif;?>
            <?php endfor;?>

            <!-- Forward button -->
            <?php if($pageId == $pageNumber):?>
                <li class="desactivado">»</li>
            <?php else:?>
                <li>
                    <a href="?paginas=<?= $pageId + 1;?>">»</a>
                </li>
            <?php endif;?>
        </ul>
    </section>
</main>
    
</body>
</html>