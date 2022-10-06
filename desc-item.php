<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>DESKRIPSI - MOUNTAIN COM</title>
   <link rel="stylesheet" href="style.css">
   <style>
      .section {
         width: 60%;
         margin: 20px auto 50px auto;
         padding: 20px;
      }

      footer {
         position: relative;
         bottom: 0;
      }

      footer p {
         text-align: center;
         color: rgba(255, 255, 255, 0.8);
         font-size: 12px;
         padding-top: 30px;
      }
   </style>
</head>

<body>
   <header>
      <div class="bayangan-header">
         <h1 id="flex1">DESKRIPSI ITEM</h1>
      </div>
   </header>

   <section>
      <?php
      $id = $_GET['id'];
      ?>

      <div class="section">

         <?php
         if ($id == 1) {
         ?>
            <img src="img/macbookpro.jpg" class="gd" alt="">
            <h3 id="nama" class="updist"><?php echo $_GET['nama'] ?></h3>
            <h4 class="updist"><?php echo $_GET['harga'] ?></h4>
            <p id="deskripsi">Laptop Apple MacBook Pro 15 Inch 2018 adalah ultrabook dengan bobot 1.83kg dan layar 15.4" beresolusi 2880 x 1800pixels. Laptop ini sudah didukung dengan kartu grafis Radeon Pro 555X dan sistem operasi macOS untuk hasilkan performa maksimal</p>
         <?php
         }
         if ($id == 2) {
         ?>

            <div class="box">
               <img src="img/airm1.jpg" class="gd" alt="">
               <h3 id="nama" class="updist"><?php echo $_GET['nama'] ?></h3>
               <h4 class="updist"><?php echo $_GET['harga'] ?></h4>
               <p id="deskripsi">Apple Macbook Air M1 2020 adalah laptop dengan layar 13.3" dan resolusi 2560 x 1600pixels yang dilengkapi spesifikasi mumpuni. Laptop ini ditenagai prosesor Apple M1 dan kartu grafis Apple M1 GPU. Hadir dengan berat 1.3kg, performa laptop Apple ini juga didukung RAM 8GB serta sistem operasi macOS.</p>
            </div>
         <?php
         }
         if ($id == 3) {
         ?>
            <div class="box">
               <img src="img/acernitro.jpg" class="gd" alt="">
               <h3 id="nama" class="updist"><?php echo $_GET['nama'] ?></h3>
               <h4 class="updist"><?php echo $_GET['harga'] ?></h4>
               <p id="deskripsi">Acer Nitro 5 adalah laptop dengan layar 15.6" dan resolusi 1920 x 1080pixels yang dilengkapi spesifikasi mumpuni. Laptop dengan berat 2.48kg ini ditenagai kartu grafis NVIDIA® GeForce RTX™ 3060 dan didukung sistem operasi Windows 10 Home</p>
            </div>
         <?php
         }
         if ($id == 4) {
         ?>
            <div class="box">
               <img src="img/asustufgaming.jpg" class="gd" alt="">
               <h3 id="nama" class="updist"><?php echo $_GET['nama'] ?></h3>
               <h4 class="updist"><?php echo $_GET['harga'] ?></h4>
               <p id="deskripsi">ASUS TUF Gaming F15 merupakan laptop gaming yang dibekali layar IPS 15.6" dengan resolusi 1920 x 1080pixels. Laptop ASUS ini juga didukung dengan konfigurasi grafis NVIDIA® GeForce® GTX 1650 Ti.</p>
            </div>
         <?php
         }
         ?>
      </div>
      
   </section>
   <footer>
      <p>Copyright &copy; 2017-2022 MOUNTAIN COM</p>
   </footer>
</body>

</html>
