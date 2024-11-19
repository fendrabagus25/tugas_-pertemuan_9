<?php

$mahasiswa = [
    ['nim' => '312310678', 'nama' => 'Fendra Bagus Setiawan', 'kelas' => 'TI.23.CA1'],
   
];

echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr><th>NIM</th><th>Nama</th><th>Kelas</th></tr>";

foreach ($mahasiswa as $mhs) {
    echo "<tr>";
    echo "<td>{$mhs['nim']}</td>";
    echo "<td>{$mhs['nama']}</td>";
    echo "<td>{$mhs['kelas']}</td>";
    echo "</tr>";
}

echo "</table>";
?>