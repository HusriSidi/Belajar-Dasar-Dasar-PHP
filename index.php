<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>
   <h1>Materi Pertemuan 4 Dasar-Dasar PHP</h1>
   
   Halo semuanya!

  <?php echo  "Sekolah Koding"; ?>
  </body>
</html> 




<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>
  <h1>Mencampurkan HTML & PHP</h1>

  <?php
  $nama = "Belajar Dasar Dasar PHP";
  $_123 = "Husri Sidi";

  echo "<h1>Sekolah Koding</h1>";
  echo "Halo<br>";
  echo "Member";
  ?>
  Halo semuanya!
  
  </body>
</html> 



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Belajar PHP</title>
  </head>
  <body>
  <h1> Komentar 3 Variabel</h1>

      <?php
        $nama = "Sekolah Koding 123";
        $_123 = "Selamat datang di rumah IT";

        echo "<h1>$_123</h1>";
        echo "Halo ". $nama ."<br>";
        echo "Member";
      ?>
  </body>
</html>



<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>
  <h1>Tipe Data String</h1>

   <?php
    $nama  = "Sekolah Coding";
    $nama2 = 'Bermain Coding';

    echo "Selamat datang di \$nama"; 
   ?>
  </body>
</html>



<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>
  <h1>Tipe Data Integer & Float</h1>

   <?php
    $nama  = "Sekolah Coding";
    $nama2 = 'Bermain Coding';

    echo "Selamat datang di $nama <br>"; 

    $angka  =1000;
    $angka2 =100.123;

    echo $angka + $angka2;
   ?>
  </body>
</html>



<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>
  <h1>Materi Pertemuan  5 Operator Matematika & String</h1>
  <h1>Operator Aritmatika</h1>

   <?php
    $nama  = "Sekolah Coding";
    $nama2 = 'Bermain Coding';

    echo "Selamat datang di $nama<br>";

    $angka  =1000;
    $angka2 =3;
    $angka3 =2;

    $angka *= $angka2;

    echo $angka;
   ?>
  </body>
</html>



<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>
  <h1>Metode Math</h1>

   <?php
    $nama  = "Sekolah Coding";
    $nama2 = 'Bermain Coding';

    echo "Selamat datang di $nama<br>";

    $angka  =1000;
    $angka2 =3;
    $angka3 =2.64;

    echo "angka hari ini adalah ". min($angka3, $angka, $angka2)
   ?>
  </body>
</html>



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





<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>
    <h1>Materi 6 Array Dasar</h1>
    <h1>Perkenalan Array</h1>

  <?php
    $kotak  =array('Kuda', 'kurakura', 'koala');
    $nama   =['Husri', 'Ady', 'Valdo'];

    print_r($kotak);
    echo $nama [0];
     

  ?>
  </body>
</html> 




<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>
    <h1>Metode Array</h1>

  <?php
    $angka  =[5, 10, 2, 1, 6];
    $kotak  =array('Kuda', 'kurakura', 'koala');
    $nama   =['Husri', 'Ady', 'Valdo'];

    sort($angka);
    print_r( $angka);
     

  ?>
  </body>
</html> 



 <html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>
  <h1>Associative Array</h1>

  <?php
    $data = array("nama" =>"hilman",
    "umur" =>21,
    "kerja" =>"pengacara"
    );
  $data['nama'] = "Husri Sidi";
  
  echo "Nama saya " . $data['nama'];
  ?>
  </body>
</html> 




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






 <html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>
  <h1>Materi 7 Array Lanjutan</h1>
  <h1>Array Multidimensi</h1>

  <?php
    $data = array(
      array("programmer", "20", "males"),
      array("designer", "20", "rajin"),
      array("manager", "20", "males banget"),
    );

    print_r($data);

    $data[2][0] ="proyek manager";
    echo $data[2][0];

  ?>
  </body>
</html> 



<html>
  <head>
    <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>
   <h1>Materi 8 PENGULANGAN - LOOPING</h1>
   <h1>Loop PHP</h1>

    <?php 

    for($i=0;$i<5;$i++)
    {

      echo  "-------------------";
      echo  "Husri Sidi";
      echo  "-------------- <br>";
    }
    ?>
  </body>
</html> 




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




<html>
  <head>
    <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>
   <h1>Loop PHP</h1>

    <?php 

     $hewan = ['Rusa', 'Sapi', 'Domba', 'Kuda'];
     for($i=0; $i < count($hewan) - 1; $i++)
     {
       echo "------------------";
       echo $hewan[$i];
       echo "----------------- <br>";
     }
     foreach($hewan as $h){
       echo "------------------";
       echo "$h";
       echo "------------------ <br>";
     }
    
    ?>
  </body>
</html> 




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



 
<html>
  <head>
    <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>
   <h1>Loop PHP</h1>

    <?php 

     $hewan = ['Rusa', 'Sapi', 'Domba', 'Kuda'];
    $i =0;

    while($i < count($hewan)){
      echo $hewan[$i]. "<br>";
      $i++;
    }

    do{
      echo $hewan[$i]. "<br>";
      $i++;
      }while( $i < count($hewan));
    
    ?>
  </body>
</html> 





 


