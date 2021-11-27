<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>
  <h1>Metode Associative Array</h1>

  <?php
    $data = array("nama" =>"Husri",
                  "umur" =>20,
                  "kerja" =>"pengacara"
    );

     $data2 = array("istri" =>"belum ada",
                  "laptop" =>"Lenovo"
    );
    print_r( array_merge($data, $data2));

  ?>
  </body>
</html> 