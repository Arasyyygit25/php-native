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


    function tambah($data) {
      global $conn;

      // ambil data dari tiap elemen dalam form, ditampung dalam variabel
      $nama = $_POST["nama"];
      $nim = $_POST["nim"];
      $email = $_POST["email"];
      $jurusan = $_POST["jurusan"];

      //query insert data, jika tidak ditampung ke dalam variabel maka akan error perkara kutip, jadi kita tidak perlu mikir kutip error nya
      $query = "INSERT INTO mahasiswa
                    VALUES
                    ('', '$nama', '$nim', '$email', '$jurusan') 
                    ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }





 ?>