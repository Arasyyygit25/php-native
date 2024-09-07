<!-- tinggal manggil function nya, tidak perlu copas 1/ satu -->
 <?php
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");

    function query($query){
      global $conn;
      // paramater ada 2 yaitu connection lalu query nya, lalu result  adalah lemari nya
      $result = mysqli_query($conn, $query);
      // siapkan wadah kosong
      $rows = []; 
      // lalu ketika wadahnya diambil menggunakan looping
      while ($row = mysqli_fetch_assoc($result) ) { //baju yang diambil setiap looping nya
         $rows[] = $row; //menambahkan elemen baru di akhir setiap array
      }
      return $rows;
    }
 ?>