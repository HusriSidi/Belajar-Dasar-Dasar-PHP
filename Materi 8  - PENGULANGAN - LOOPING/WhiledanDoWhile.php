<html>
  <head>
    <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>
   <h1>Loop PHP</h1>

    <?php 

     $hewan = ['Rusa', 'Sapi', 'Domba', 'Kuda'];
    //  for($i=0; $i < count($hewan) - 1; $i++)
    //  {
    //    echo "------------------";
    //    echo $hewan[$i];
    //    echo "----------------- <br>";
    //  }
    //  foreach($hewan as $h){
    //    echo "------------------";
    //    echo "$h";
    //    echo "------------------ <br>";
    //  }
    $i =5;
    do{
      echo $hewan[$i]. "<br>";
      $i++;
      }while( $i < count($hewan));
    
    ?>
  </body>
</html> 


