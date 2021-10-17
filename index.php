<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>restoran</title>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 sidebar">
                <header>menu</header>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">menu</a></li>
                    <li><a href="">booking</a></li>
                </ul>
            </div>
            <div class="col-10 section">
                <div class="text">
                    <h1>selamat datang</h1>
                    <h3>menu restoran</h3>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">no</th>
                        <th scope="col">nama menu</th>
                        <th scope="col">harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include('koneksi.php');
                        $query=mysqli_query($conn,"select *from menu_ayam");
                        while($tampil=mysqli_fetch_array($query)){
                            echo"
                            <tr>
                            <td>$tampil[id_menu]</td>
                            <td>$tampil[nama_menu]</td>
                            <td>$tampil[harga]</td>
                            </tr>";
                        }
                        ?>
                    </tbody>
                </table>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">no</th>
                        <th scope="col">nama menu</th>
                        <th scope="col">harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include('koneksi.php');
                        $query=mysqli_query($conn,"select *from menu_bebek");
                        while($tampil=mysqli_fetch_array($query)){
                            echo"
                            <tr>
                            <td>$tampil[id_menu]</td>
                            <td>$tampil[nama_menu]</td>
                            <td>$tampil[harga]</td>
                            </tr>";
                        }
                        ?>
                    </tbody>
                </table>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">no</th>
                        <th scope="col">nama menu</th>
                        <th scope="col">harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include('koneksi.php');
                        $query=mysqli_query($conn,"select *from menu_sapi");
                        while($tampil=mysqli_fetch_array($query)){
                            echo"
                            <tr>
                            <td>$tampil[id_menu]</td>
                            <td>$tampil[nama_menu]</td>
                            <td>$tampil[harga]</td>
                            </tr>";
                        }
                        ?>
                    </tbody>
                </table>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">no</th>
                        <th scope="col">nama menu</th>
                        <th scope="col">harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include('koneksi.php');
                        $query=mysqli_query($conn,"select *from minuman");
                        while($tampil=mysqli_fetch_array($query)){
                            echo"
                            <tr>
                            <td>$tampil[id_menu]</td>
                            <td>$tampil[nama_menu]</td>
                            <td>$tampil[harga]</td>
                            </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <footer>
        <div class="container-fluid footer">
            <div class="row">
                <div class="col">
                    <p><b>alamat</b></p>
                    <p>jalan tanjung</p>
                </div>
                <div class="col sosmed">
                    <p><b>media sosial</b></p>
                   <ul>
                       <li><a href="#">instagram</a></li>
                       <li><a href="#">grabfood</a></li>
                       <li><a href="#">gofood</a></li>
                   </ul>
                </div>
                <div class="col sosmed">
                    <p><b>lainnya</b></p>
                   <ul>
                       <li><a href="#">tanya jawab</a></li>
                       <li><a href="#">ada masalah?</a></li>
                    
                   </ul>
                </div>
               
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>