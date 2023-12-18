<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS Pemweb</title>
    <link rel="stylesheet" href="style.css">
</head>

<script>
    function highlightInput(tes){
        tes.style.background = "lightblue";
    }
    function backgroundWarnaInput(tes){
        tes.style.background = "white";
    }    
    function submitForm(){
        var result = confirm('Apakah anda yakin untuk submit ?');
        if (result == false){
            event.preventDefault();
        }
    }
</script>

<body class="bg">

    <nav class="navbar">
        <div class="nav">
            <div><a href=index.html class="title1">Home</a></div>
            <div><a class="title1">120140012</a></div>
            <div><a class="title1">Table</a></div>
        </div>
    </nav>

    <nav class="box2">
    <?php
        $host = "localhost";
        $username = "id21685187_root";
        $password = "Test_123";
        $dbname = "id21685187_pemweb";
        echo "<p> Database : </p>";
        $mysqli = new mysqli($host, $username, $password, $dbname);
        $query = "SELECT * FROM mhs";
        $result = $mysqli->query($query);
        
        echo '<table style="margin-left:30px" border="1" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Nama</font> </td> 
          <td> <font face="Arial">NIM</font> </td> 
          <td> <font face="Arial">Gender</font> </td> 
          <td> <font face="Arial">Punya Laptop</font> </td> 
          <td> <font face="Arial">Punya Motor</font> </td> 
          <td> <font face="Arial">Punya Mobil</font> </td> 
          <td> <font face="Arial">Browser</font> </td> 
          <td> <font face="Arial">IP Adress</font> </td> 
      </tr>';
        
        if ($result = $mysqli->query($query)) {
            while ($row = $result->fetch_assoc()) {
                $nama = $row["nama"];
                $nim = $row["nim"];
                $gender = $row["gender"];
                $laptop = $row["laptop"];
                $motor = $row["motor"]; 
                $mobil = $row["mobil"];
                $browser = $row["browser"];
                $ip = $row["ip"];
    
                echo '<tr> 
                  <td>'.$nama.'</td> 
                  <td>'.$nim.'</td> 
                  <td>'.$gender.'</td> 
                  <td>'.$laptop.'</td> 
                  <td>'.$motor.'</td>
                  <td>'.$mobil.'</td> 
                  <td>'.$browser.'</td> 
                  <td>'.$ip.'</td> 
                </tr>';
    }
    $result->free();
} 
        
    ?>
    </nav>

    
</body>

</html>

