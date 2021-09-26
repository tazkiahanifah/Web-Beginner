<?php  
echo "Sekarang Tanggal " . date("d-m-Y") . "<br>";

echo time();

$d = mktime(0,0,0,9,26,2021);
echo "<br>" . date("d/m/Y", $d). "<br>";
$string = strtotime("Januari 24") ;
echo date("m-d-Y", $string). "<br>" . "<br>";

// Array

// Array 1 dimensi
// cara 1
$buah = array("Mangga", "Semangka", "Alpukat");

// cara 2
$hewan = ["Sapi", "Katak", "Beruang"];

// Array 2 dimensi
$kelompok = [
    ["Kia", "ss", "ty", "dnd"],
    ["nbl", "fhr", "rdyn"]
];

// Array Multidimensi
$mahasiswa = [
    [
        "Nama" => "sasa",
        "Alamat" => "ciracas"
    ],
    [
        "Nama" => "kia",
        "Alamat" => "dpk"
    ]
];

// For 
// buah
for ($i = 0; $i < count($buah); $i++){
    echo $buah[$i] . "<br>";
} 

echo "<br>";

// kendaraan
for ($i = 0; $i < count($hewan); $i++){
    echo $hewan[$i] . "<br>";
}
echo "<br>";
//Foreach
//kelompok
foreach ($kelompok as $a){
    echo $a[0]. "<br>";
    echo $a[1]. "<br>";
    echo $a[2]. "<br>";
}

echo "<br>";

// mahasiswa
foreach ($mahasiswa as $mhs){
    echo "Nama: " . $mhs["Nama"] . "<br>";
    echo "Alamat: " . $mhs["Alamat"] . "<br>";
}

var_dump($mahasiswa);
echo "<br>";
print_r($mahasiswa);
?>