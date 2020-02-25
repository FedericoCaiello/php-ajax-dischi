<?php
  include 'server.php';
 ?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <ul>
       <?php foreach ($database as $cd) { ?>
         <li>
           <img src="<?php echo $cd["poster"];?>" alt="">
           <p><?php echo $cd["title"];?></p>
           <p><?php echo $cd["author"];?></p>
           <p><?php echo $cd["year"];?></p>
         </li>
       <?php } ?>
     </ul>
   </body>
 </html>
