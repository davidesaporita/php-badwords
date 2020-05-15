
<!--
    PHP Badwords
    Creare una variabile con un paragrafo di testo.
    Visualizzare a schermo il paragrafo
    Visualizzare a schermo la relativa lunghezza del paragrafo
    Sostituire tutte le ricorrenze, nel paragrafo creato, della badword passata in GET (query string) con tre * (asterschi). 
    -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ehi man<, don't say bad words</title>
</head>
<body>
    
    <?php  
    
    $par = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero quis in, perspiciatis cupiditate inventore dolore similique consequatur eaque dolores quisquam quas? Magnam sunt dolorum exercitationem asperiores! Perferendis perspiciatis corrupti accusantium!";
    $par_length = strlen($par);

    if($_GET['check']) {
        $word_to_replace = $_GET['check'];
        $par_updated = str_ireplace($word_to_replace,'***',$par);
    }

    ?>
    <header>
        <h1>PHP Bad Words</h1>
    </header>

    <main>
        <div>
            <p><?php echo $par_updated ? $par_updated : $par; ?></p>
            <p>Lunghezza paragrafo: <?php echo $par_length; ?> mila chilometri</p>
        </div>
    </main>
    <footer>
        <i>Made by produzione orticola®</i>
    </footer>

</body>
</html>