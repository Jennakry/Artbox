<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>

<body>
<?php include('header.php'); ?>

<main>

    <?php include_once('oeuvres.php');
    /* Boucle pour les oeuvres */ 
    foreach($oeuvres as $oeuvre):
    /* Si */
        if($oeuvre['id'] == ($_GET['id'])): ?>
    
            <article id="detail-oeuvre">
                <div id="img-oeuvre">
                    <img src="<?php echo $oeuvre['image']; ?>"/>
                <div id="contenu-oeuvre">
                    <h1><?php echo $oeuvre['title']; ?></h1>
                        <p class="description"><?php echo $oeuvre['description']; ?></p>
                        <p class="description-complete"> <?php echo $oeuvre['description-complete']; ?>
                        </p>
                </div>
            </article>
        <?php endif;
        endforeach;?>

</main>

    <?php include ('footer.php'); ?>

</body>
</html>
