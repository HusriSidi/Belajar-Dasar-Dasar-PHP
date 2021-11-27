<html>
  <head>
    <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>
   <h1>Loop PHP</h1>

    <?php 

    $data = ['nama' => 'Husri',
              'umur'=>20,
              'sifat'=>'rajin'];
    foreach($data as $key => $value){
      echo $value, "<br>";
    }
    
    ?>
  </body>
</html> 