<html>
  <head>
    <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>
   <h1>Loop PHP</h1>

    <?php 

     $hewan = ['Rusa', 'Sapi', 'Domba', 'Kuda'];
     for($i=0; $i < count($hewan); $i++)
     {
       echo "------------------";
       echo $hewan[$i];
       echo "------------- <br>";
     }
    
    ?>
  </body>
</html> 


