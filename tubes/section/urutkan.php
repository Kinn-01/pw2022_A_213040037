<style>
    .input-group i {
        font-size: 22px;
    }

</style>

<?php 
if (isset($_POST["harga_naik"])) {
    $jerseay = query("SELECT * FROM jerseay ORDER BY price ASC;");
 }

if (isset($_POST["deskripsi_naik"])) {
    $jerseay = query("SELECT * FROM jerseay ORDER BY tshirt ASC;");
 } 

if (isset($_POST["stok_naik"])) {
    $jerseay = query("SELECT * FROM jerseay ORDER BY stok ASC;");
 } 


if (isset($_POST["harga_turun"])) {
    $jerseay = query("SELECT * FROM jerseay ORDER BY price DESC;");
 }

if (isset($_POST["deskripsi_turun"])) {
    $jerseay = query("SELECT * FROM jerseay ORDER BY tshirt DESC;");
 } 

if (isset($_POST["stok_turun"])) {
    $jerseay = query("SELECT * FROM jerseay ORDER BY stok DESC;");
 } 

?>


<form action="" method="POST">
    <div class="container">
        <div class="col d-inline-flex">
         <div class="input-group">
             <button class="btn btn dropdown-toggle" style="background-color:cyan ;" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-sort-up-alt"></i>&nbsp;</button>
                <ul class="dropdown-menu" style="background-color:cyan ;">
                    <li><button class="dropdown-item" name="harga_naik" type="submit">Harga</button></li>
                    <li><button class="dropdown-item" name="deskripsi_naik" type="submit">Deskripsi</button></li>
                    <li><button class="dropdown-item" name="stok_naik" type="submit">Stock</button></li>
                </ul>
         
             <button class="btn btn-outline dropdown-toggle" style="background-color:cyan ; margin: left 5px;;" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-sort-down"></i>&nbsp;</button>
                <ul class="dropdown-menu" style="background-color:cyan ;">
                    <li><button class="dropdown-item" name="harga_turun" type="submit">Harga</button></li>
                    <li><button class="dropdown-item" name="deskripsi_turun" type="submit">Deskripsi</button></li>
                    <li><button class="dropdown-item" name="stok_turun" type="submit">Stock</button></li>
                </ul>
         </div>
      </div>
 </div>
 </form>