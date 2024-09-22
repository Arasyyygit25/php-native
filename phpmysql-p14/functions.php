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

     //upload gambar
     $gambar = upload();
     if( !$gambar ){
      return false;
     }

      //query insert data, jika tidak ditampung ke dalam variabel maka akan error perkara kutip, jadi kita tidak perlu mikir kutip error nya
      $query = "INSERT INTO mahasiswa
                    VALUES
                    ('', '$nama', '$nim', '$email', '$jurusan', '$gambar') 
                    ";
        mysqli_query($conn, $query);
      //cek apakah data berhasil di tambahkan atau tidak
        return mysqli_affected_rows($conn);
    }

    function upload(){
      // ambil dulu isi dari $_files, tiap tiap data nya kita masukkan ke dalam variabel
      $namaFile = $_FILES['gambar']['name'];
      $ukuranFile = $_FILES['gambar']['size'];
      $error = $_FILES['gambar']['error'];
      $tmpName = $_FILES['gambar']['tmp_name'];

      //cek apakah tidak ada gambar di upload
      if( $error === 4 ) {
        echo"<script>
              alert('pilih gambar terlebih dahulu!');
              </script>";
        return false; //setelah pesan nya tampil kita berhentikan function nya, supaya ngasih tau kalau function upload nya gagal jadi function tambah nya gagal juga 
      }

      // cek apakah yang diupload adalah gambar
      $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
      $ekstensiGambar = explode('.', $namaFile); //memecah sebuah string menjadi Array, dengan delimiter
      $ekstensiGambar = strtolower(end($ekstensiGambar));

      if( !in_array($ekstensiGambar, $ekstensiGambarValid) ){
        echo "<script>
              alert('yang anda upload bukan gambar!');
            </script>";
            return false;
      }

      // cek jika ukurannya terlalu besar
      if ( $ukuranFile > 1000000){
        echo "<script>
              alert('Ukuran Gambar Terlalu Besar!');
              </script>";
            return false;
      }

      //lolos pengecekan, gambar siap di upload
      //generate nama gambar baru (paling gampang bangkitkan bilangan random, kita ambil bilangan itu)
      $namaFileBaru = uniqid(); //akan membangkitkan string random/angka yang akan menjadi nama file gambar kita (jika kembar namanya)
      $namaFileBaru .= '.';
      $namaFileBaru .= $ekstensiGambar;
      move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
      return $namaFileBaru; //jika gambar berhasil di upload maka data akan berisi nama file nya di database nya
    }

    function ubah($data) {
      global $conn;

      // ambil data dari tiap elemen dalam form, ditampung dalam variabel
      $id = $data["id"];
      $nama = htmlspecialchars($data["nama"]); //fungsi dari htmlspecialchars, adalah menjaga security web agar ketika menginputkan data lalu menulis dengan query yang aneh aneh akan diolah terlebih dahulu lalu berubah mmenjadi text html
      $nim = htmlspecialchars($data["nim"]);
      $email = htmlspecialchars($data["email"]);
      $jurusan = htmlspecialchars($data["jurusan"]);
      $gambarLama = htmlspecialchars($data["gambarLama"]);

      //cek apakah user pilih gambar baru atau tidak
      if( $_FILES['gambar']['error'] === 4 ){ 
        $gambar = $gambarLama;
      } else {
        $gambar = upload();
      }
      

      //query insert data, jika tidak ditampung ke dalam variabel maka akan error perkara kutip, jadi kita tidak perlu mikir kutip error nya
      $query = "UPDATE mahasiswa SET
                  nama = '$nama',
                  nim = '$nim',
                  email = '$email',
                  jurusan = '$jurusan'
                  gambar = '$gambar'
                  WHERE id = $id
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


    function cari($keyword){
      $query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%' OR 
                                              nim  LIKE '%$keyword%' OR 
                                              jurusan  LIKE '%$keyword%'
                ";
    return query($query);
    }
    

    function registrasi($data){
      global $conn;

      $username = strtolower(stripslashes($data["username"])); //fungsi stripslashes adalah sebuah fungsi untuk melindungi inputan dari karakter tertentu.
      $password = mysqli_real_escape_string($conn, $data["password"]); //untuk memungkinkan user nya untuk memasukkan password ada tanda kutipnya, lalu tanda kutipnya dimasukkan ke dalam database secara aman
      $password2 = mysqli_real_escape_string($conn, $data["password2"]); 

      // cek username sudah ada atau belum

      $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
      if( mysqli_fetch_assoc($result) ){
        echo "<script>
            alert('Username Telah Terdaftar!');
        </script>";
        return false;
      }

      // cek konfirmasi password

      if($password !== $password2 ){
        echo "<script>
              alert('konfirmasi password tidak sesuai!');
              </script>";
              return false;
      }

      //- enkripsi password -
      //password_default, adalah algoritma yang dipilih secara default oleh phpnya, algoritma akan terus berubah ketika ada pengamanan baru
      $password = password_hash($password, PASSWORD_DEFAULT); //jangan pake md5 lagi karena password jika menggunakan md5 lalu copas ke google, maka akan langsung mengetahui passwordnya

      //tambahkan userbaru ke database
      mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");
      return mysqli_affected_rows($conn);
    }


 ?>