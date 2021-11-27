<html>
  <head>
  <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>
  <h1>Materi 7 Array Lanjutan</h1>
  <h1>Super Global array</h1>

   <?php
    echo $_SERVER['SERVER_NAME'];
    die();
    session_start();

     $user ='Husri';
     $password ='123';

     if ( isset($_POST['submit']) ){
       if($_POST['nama']== $user &&
       $_POST['password']==$password){

         setcookie('nama_user', $_POST['nama'], time()+120);

         $SESSION['nama_user'] = $_POST['nama'];

         header('location: profile.php');

         }else{

           echo 'login gagal!';
         }
     }

   ?>
    <form action="index.php" method="post">
     <input type="text" name="nama">
     <input type="password" name="password">
     <input type="submit" name="submit">
    </form>
  </body>
</html>