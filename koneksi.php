<?php
    //koneksi ke database
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "dbsmp";

    $koneksi = mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));


    function registrasi($data) {
        global $koneksi;

        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($koneksi, $data["password"]);
        $password2 = mysqli_real_escape_string($koneksi, $data["password2"]);

        //cek user yang sudah ada
        $result = mysqli_query($koneksi, "SELECT username FROM users WHERE username = '$username'");
        if(mysqli_fatch_assoc($result)){
            echo "<script>
                alert('username sudah tersedia!');
                </script>";

            return false;
        }
    
        //cek konfirmasi password
        if($password !== $password2 ) {
            echo "<script>
                alert('konfirmasi password tidak sesuai !');
                </script>";
            return false;
        }

        //enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);
        
        //tambahkan ke database
        mysqli_query($koneksi, "INSERT INTO users VALUES('', '$username', '$password' )");

        return mysqli_affected_rows($koneksi);
    }

?>