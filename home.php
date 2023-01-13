 <?php

  include 'template/header.php';
  include 'database/dbmateri.php';
  // session_start();
  ?>


 <!-- carousel -->



 <div id="carouselExampleCaptions" class="carousel slide mt-2 " data-ride="carousel">
   <ol class="carousel-indicators">
     <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
     <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
     <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
   </ol>
   <div class="carousel-inner">
     <div class="carousel-item active">
       <img src="assets/img/1.jpg" class="d-block w-100" alt="...">
       <div class="carousel-caption d-none d-md-block">
         <h5>First slide label</h5>
         <p>Some representative placeholder content for the first slide.</p>
       </div>
     </div>
     <div class="carousel-item">
       <img src="assets/img/2.jpg" class="d-block w-100" alt="...">
       <div class="carousel-caption d-none d-md-block">
         <h5>Second slide label</h5>
         <p>Some representative placeholder content for the second slide.</p>
       </div>
     </div>
     <div class="carousel-item">
       <img src="assets/img/3.png" class="d-block w-100" alt="...">
       <div class="carousel-caption d-none d-md-block">
         <h5>Third slide label</h5>
         <p>Some representative placeholder content for the third slide.</p>
       </div>
     </div>
   </div>
   <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
     <span class="sr-only">Previous</span>
   </button>
   <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
     <span class="carousel-control-next-icon" aria-hidden="true"></span>
     <span class="sr-only">Next</span>
   </button>
 </div>

 <div class="row mt-4">
   <div class="col">
     <div class="mx-auto">
       <!--justify content pada d-flex digunakan untuk -->
       <div class="d-flex justify-content-center">
         <img src="assets/img/1.jpg" alt="" width="500px" height="300px">
       </div>
     </div>
   </div>
   <div class="col mr-3 d-flex align-items-center border bg-white">
     <div class="mx-auto">

       <p class=" text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta,
         tempora ratione
         consectetur nobis ullam
         quasi consequuntur similique officiis. Obcaecati ab, dolorum rem officia et vel perspiciatis nihil error
         similique deserunt.</p>
     </div>
   </div>
 </div>

 <div class="mt-4">
   <hr>
   <h3 class="text-center"><strong>AKU SERIPEtraskhtak jshr</strong> </h3>
   <h5 class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error adipisci, recusandae
     accusantium quisquam cum, mollitia nihil expedita perferendis debitis aliquam omnis id numquam, blanditiis atque
     delectus est nesciunt culpa quae! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui modi dicta nisi
     quo optio neque tempora, sapiente magnam accusantium veritatis culpa doloremque amet, sunt at dignissimos
     molestiae voluptates? Aliquid, id! Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt quis,
     doloribus ducimus libero optio minus facilis pariatur aliquam dolorum quia eligendi quam vitae qui soluta
     dolores voluptas inventore numquam ratione.</h5>
   <hr>
 </div>

 <a href="database/tambahmateri.php?tambah">tambah materi</a><br><br>
 <table border=2>
   <thead>
     <tr>
       <th>ID</th>
       <th>Nama</th>
       <th>deksripsi</th>
       <th>joinbelajar</th>
       <th>Opsi</th>
     </tr>
   </thead>
   <tbody>
     <?php while ($baris = $hasil->fetch_assoc()) {
      ?>

       <tr>
         <td><?= $baris["id"] ?></td>
         <td><?= $baris["judul"] ?></td>
         <td> <?= $baris["deskripsi"] ?></td>
         <td> <?= $baris["belajar_pertama_kali"] ?></td>
         <td><a href="database/updatemateri.php?id=<?= $baris["id"] ?>">Update</a> <a href="database/hapusmateri.php?id=<?= $baris["id"] ?>">Hapus</a></td>
       </tr>
     <?php
      } ?>
   </tbody>
 </table>

 <?php if (isset($_GET['hapus'])) {
  ?>
   <div class="alert alert-danger alert-dismissible fade show" role="alert">
     <strong>Berhasil!</strong> Data berhasil dihapus.
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
       <span aria-hidden="true">&times;</span>
     </button>
   </div>
 <?php }
  ?>

 <?php if (isset($_GET['tambah'])) {
  ?>
   <div class="alert alert-danger alert-dismissible fade show" role="alert">
     <strong>Berhasil!</strong> Data berhasil ditambah.
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
       <span aria-hidden="true">&times;</span>
     </button>
   </div>
 <?php }
  ?>

 <?php if (isset($_GET['ubah'])) {
  ?>
   <div class="alert alert-danger alert-dismissible fade show" role="alert">
     <strong>Berhasil!</strong> Data berhasil diubah.
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
       <span aria-hidden="true">&times;</span>
     </button>
   </div>
 <?php }
  ?>

 <!-- opsi row dan column 1 -->
 <!-- <div class="container">
  <div class="row">
    <div class="col-2 col-sm-9">
      ID
      <div class="col-9 col-sm-6">
      Judul
      <div class="row">
        <div class="col-8 col-sm-6">
            belajar pertama kali dibuat dulu baru dibuat deskripsi
        </div>
        <div class="col-4 col-sm-6">
          update dan hapus
        </div>
          
        </div>
      </div>    
    </div>
  </div>
</div> -->

 <!-- opsi row dan column 2 -->
 <!-- <div class="container border=2">
  <div class="row row-cols-5">
    <div class="col-sm-1">ID</div>
    <div class="col-sm-1">Judul</div>
    <div class="col-lg-6">deskripsi</div>
    <div class="col-sm-2">tanggal</div>
    <div class="col-sm-2">Opsi</div>
  <div class="row">
  <div class="col-sm-1">1</div>
    <div class="col-sm-1">phython</div>
    <div class="col-lg-6">aslkfdjsla jlvdsnwa;jfiwqjhqowihrosnlvkcnsavlna;fh</div>
    <div class="col-sm-2">09 februari 2300</div>
    <div class="col-sm-2">Update dan hapus</div>
  </div>
  </div>
</div> -->
 <div class="card text-center mt-4">

   <div class="card-body">
     <h5 class="card-title">Jejak digital</h5>
     <p class="card-text">Dengan paksaan dan sedikit usaha akhirnya selesai</p>
     <a href="https://youtube.com" class="btn btn-outline-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
         <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
       </svg> Youtube
     </a>

   </div>

 </div>

 </div>



 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
 <script>
   $(".remove").click(function() {
     var id = $(this).parents("tr").attr("id");
     if (confirm('Are you sure to delete this record ?')) {
       $.ajax({
         url: '/delete.php',
         type: 'GET',
         data: {
           id: id
         },
         error: function() {
           alert('Something is wrong');
         },
         success: function(data) {
           $("#" + id).remove();
           alert("Record deleted successfully");
         }
       });
     }
   });
 </script>
 </body>

 </html>