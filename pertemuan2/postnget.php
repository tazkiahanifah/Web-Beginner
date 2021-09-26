<form action="postnget.php" method="GET">
    Nama: <br>
    <input type="text" name="nama"> <br>
    Alamat: <br>
    <input type="text" name="alamat"> <br>
    Tanggal Lahir: <br>
    <input type="date" name="ttl"> <br> <br>
    <input type="submit" value="Submit">
</form>

<?php 
if ($_GET["nama"] !== null){
    $nama = $_GET["nama"];
    echo "Nama: " . $nama;
} else {
    $nama = " ";
}
echo "<br>";

if ($_GET["alamat"] !== null){
    $alamat = $_GET["alamat"];
    echo "Alamat: " . $alamat;
} else {
    $alamat = " ";
}
echo "<br>";

if ($_GET["ttl"] !== null){
    $ttl = $_GET["ttl"];
    echo "Tanggal Lahir: " . $ttl;
    echo "<br>";
    $lahir = new DateTime($ttl);
    $today = new DateTime('');
    $diff = $today->diff($lahir);
    echo "Usia: " . $diff->y . " Tahun " . $diff->m .  " Bulan " . $diff->d . " Hari";
} else {
    $ttl = " ";
}

?>