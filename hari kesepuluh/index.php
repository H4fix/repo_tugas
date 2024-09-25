<?php

$persegiPanjang = [
    ["Persegi1", 56, 23],
    ["Persegi2", 33, 21],
    ["Persegi3", 65, 42],
    ["Persegi4", 73, 29],
];

echo "<table>";
echo "<tr><th> Persegi Panjang  </th><th> Panjang  </th><th> Lebar  </th><th> Luas  </th></tr>";

foreach ($persegiPanjang as &$persegi) {
    $persegi[] = $persegi[1] * $persegi[2];
    echo "<tr><td>{$persegi[0]}</td><td>{$persegi[1]}</td><td>{$persegi[2]}</td><td>{$persegi[3]}</td></tr>";
}

echo "</table>";

?>