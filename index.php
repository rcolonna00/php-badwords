<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $paragraph = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque officiis iusto aliquam et illum quis dolore dolores eius facere, quibusdam, ratione excepturi corporis iure asperiores soluta, nostrum aspernatur impedit deleniti!';
        $myParagraphLength = strlen($paragraph);
        $word = $_GET["word"];
        $final = $paragraph . $word;
        $copyright = str_replace($word, '***', $final);
    ?>

    <p>
        <?php 
            echo $paragraph;
        ?>
    </p>

    <p>
        <?php 
            echo $myParagraphLength;
        ?>
    </p>

    <p>
        <?php 
            echo $copyright;
        ?>
    </p>

</body>
</html>