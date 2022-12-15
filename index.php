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
    <h1 class="text-center">PHP STRONG PASSWORD GENERATOR</h1>

    <form>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Lunghezza password</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Inserisci minimo 3 caratteri.</div>
    </div>
   
    
    <button type="submit" class="btn btn-primary">Genera</button>
    <button type="reset" class="btn btn-secondary">Annulla</button>

    </form>
   </div>
</body>
</html>