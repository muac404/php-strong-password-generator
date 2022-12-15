<?php

    $_GET = ["number"]; 
    $alphabet = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
    $numbers = ["0","1","2","3","4","5","6","7","8","9"];
    $simbols = ["£","$","%","!","&", "?"];

    
    for ($i = 0; $i < 4; $i++) {
        $rand_keys = array_rand($alphabet, 1);
       
    }
    // return $pass; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   
   
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
   <div class="pass-container">
    <h1 class="mt-3 text-center">PHP STRONG PASSWORD GENERATOR</h1>

    <form>

    <div class="mt-3mb-3">
        <label for="exampleInputEmail1" class="form-label">Lunghezza password</label>
        <input type="number" class="form-control input-zone" id="InputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Min: 3</div>
    </div>
   
    
    <button type="submit" class="btn btn-primary mt-3">Genera</button>
    <button type="reset" class="btn btn-secondary mt-3">Annulla</button>

    </form>
    <div>
        <?php echo $rand_keys; ?>
    </div>
   </div>
</body>
</html>