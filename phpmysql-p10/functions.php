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
      $nama = htmlspecialchars($data["nama"]); //fungsi dari htmlspecialchars, adalah menjaga security web agar ketika menginputkan data lalu menulis dengan query yang aneh aneh akan diolah terlebih dahulu lalu berubah mmenjadi text html
      $nim = htmlspecialchars($data["nim"]);
      $email = htmlspecialchars($data["email"]);
      $jurusan = htmlspecialchars($data["jurusan"]);

      //query insert data, jika tidak ditampung ke dalam variabel maka akan error perkara kutip, jadi kita tidak perlu mikir kutip error nya
      $query = "INSERT INTO mahasiswa
                    VALUES
                    ('', '$nama', '$nim', '$email', '$jurusan') 
                    ";
        mysqli_query($conn, $query);
      //cek apakah data berhasil di tambahkan atau tidak
        return mysqli_affected_rows($conn);
    }

    function hapus($id){
      global $conn;
      mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
      
      return mysqli_affected_rows($conn);
    }





 ?>