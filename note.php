

<?php 

session_start();
    
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    

    <title>Document</title>
</head>


<body  class="d-grid gap-3">



<a style="width:200px" id="bouton" name="bouton" class="btn btn-dark position-relative" type="submit" href="index.html" >Retour
<svg width="1em" height="1em" viewBox="0 0 16 16" class="position-absolute top-100 start-50 translate-middle mt-1 bi bi-caret-down-fill" fill="#212529" xmlns="http://www.w3.org/2000/svg"><path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/></svg>
</a>
<?php if (isset ($_SESSION["notes"])  ): ?>
<?php foreach( $_SESSION["notes"] as $notes): ?>

    <div style="width:900px" class="w-75 p-3" class="p-2 bg-light border">

    <div class="w-75 p-3" style="background-color: #adb5bd" class="bg-success p-2 text-white">
     <?= $notes[0] ? $notes[0] : "No Title" ?>
     <p  align="end" class="text-muted"  >  <font size="-1"> <?= $notes[1]  ?>  </font> </p>
    
    </div>
<div  class="w-75 p-3" style="background-color: #eee;" class="bg-success p-2"> <?= $notes[2] ? $notes[2] : "..." ?></div>   

</div>
 </div >




<?php endforeach; ?>


<?php endif ; ?>









<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">

    
</script></html>

</body>

