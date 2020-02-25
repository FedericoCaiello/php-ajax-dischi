<?php
  include 'server.php';
 ?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="dist/app.css">
     <title></title>
   </head>
   <body>
     <header>
       <div class="container">
           <img src="logo.png" alt="logo">
           <select class="selezione" name="generi">
             <option value="tutto">Tutti i generi</option>
             <option value="jazz">Jazz</option>
             <option value="pop">Pop</option>
             <option value="rock">Rock</option>
             <option value="metal">Metal</option>
           </select>
       </div>
     </header>
     <div class="cds-container container">
         <?php foreach ($database as $cd) { ?>
           <div class="cd">
           <img src="<?php echo $cd["poster"];?>" alt="">
           <h3><?php echo $cd["title"];?></h3>
           <span class="author"><?php echo $cd["author"];?></span>
           <span class="year"><?php echo $cd["year"];?></span>
         </div>
         <?php } ?>
     </div>


   </body>
 </html>
