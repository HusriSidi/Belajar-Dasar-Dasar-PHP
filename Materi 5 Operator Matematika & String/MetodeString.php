<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>
  <h1>Metode String</h1>

   <?php
    $nama  = "Sekolah Coding";
    $nama2 = 'Bermain Coding';

    echo "Selamat datang di $nama<br>";

    $angka  =1000;
    $angka2 =3;
    $angka3 =2.64;

    $text = "Hai semuanya di sini!";
    echo  str_repeat( str_replace("Hai", "Hallo" ,$text),10);
   ?>
  </body>
</html>
