<?php

$data = [
  ["PHP", "MySQL"],
  ["JavaScript", "MongoDB"],
  ["C#", "MSSQL"]
];

$languages = [];
foreach ($data as $item) {
    $languages[] = $item[0];
}

print_r($languages);

echo "<ul>";
foreach ($languages as $lang) {
    echo "<li>$lang";
}
echo "</ul>";