<?php
include ("koneksi.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $gender = $_POST['gender'];
        $laptop = $_POST['laptop'];
        $motor = $_POST['motor'];
        $mobil = $_POST['mobil'];
        $browser = mysqli_real_escape_string($conn, $_SERVER['HTTP_USER_AGENT']);
        $ip = $_SERVER['REMOTE_ADDR'];

        $query = "INSERT INTO mhs (nim, nama, gender, laptop, motor, mobil, browser, ip) VALUES ('$nim','$nama','$gender','$laptop','$motor','$mobil','$browser','$ip')";

        if (mysqli_query($conn, $query)) {
            echo "Data berhasil ditambahkan.";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    }
?>  