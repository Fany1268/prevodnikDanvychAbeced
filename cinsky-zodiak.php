<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Čínský zodiak</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Čínský zodiak</h1>
    <form method="POST" action="">
        <label for="rok">Zadejte rok narození:</label>
        <label for="rok" style="font-size: 26px; font-weight: bold; color: white;">Zadejte rok narození:</label>

        <input type="number" name="rok" id="rok" required>
        <button type="submit">Zjistit znamení</button>
    </form>

    <style>

/* stylyzace výstupu popisu znamení */
.output-cinsky {
    font-size: 2em;
    font-weight: bold;
    margin-top: 20px;
    padding: 10px;
    border-radius: 15px;        /* Zaoblení rohů */
    border: 1px solid #000;
    display: inline-block;
    background-color: #BCBBC1; /* Světle šedé pozadí */
}

        /* Zvětšení vstupního pole na stejnou šířku jako tlačítko */
        #rok {
            width: 150px; /* Šířka vstupního pole (nastaveno na šířku tlačítka) */
            padding: 10px;
        }

        button {
            padding: 10px 20px; /* Upravení velikosti tlačítka pro lepší vzhled */
        }


        .symbol {
            font-size: 48px; /* Zvýšená velikost symbolu */
            margin-bottom: 20px;
        }

        ul {
    list-style: none;
    padding: 0;
    text-align: center;
}

ul li {
    display: inline-block;
    margin: 5px;
}

ul li a {
    display: inline-block;
    text-decoration: none;
    padding: 12px 24px;
    font-size: 16px;
    font-weight: bold;
    color: white;
    background: linear-gradient(to bottom, #f0f0f0, #888888); /* Kovový efekt pozadí */
    border-radius: 8px;
    box-shadow: 0 4px #333333, inset 0px 5px 10px rgba(0, 0, 0, 0.4); /* Tmavě šedý stín pro kovový vzhled */
    transition: all 0.2s ease-in-out;
}

ul li a:active {
    box-shadow: 0 2px #1a1a1a, inset 0px 5px 10px rgba(0, 0, 0, 0.4); /* Tmavší stín při aktivaci */
    transform: translateY(2px);
}

select {
    background-color: #f0f0f0; /* Světle šedé pozadí */
    padding: 10px;             /* Vnitřní odsazení kolem textu */
    border: 2px solid #888888; /* Okraje kolem výběrového políčka */
    border-radius: 5px;        /* Zaoblení rohů */
    font-size: 16px;           /* Velikost písma */
}



button {
    background: linear-gradient(to bottom, #f0f0f0, #888888);
    box-shadow: inset 0px 5px 10px rgba(0, 0, 0, 0.4);
}


    </style>


<?php
$zodiak = [
    0 => ['symbol' => '🐀', 'znamenie' => 'Krysa', 'popis' => 'Chytrá, přizpůsobivá, vynalézavá, ale někdy oportunistická.'],
    1 => ['symbol' => '🐂', 'znamenie' => 'Býk', 'popis' => 'Trpělivý, pracovitý, spolehlivý, ale občas tvrdohlavý.'],
    2 => ['symbol' => '🐅', 'znamenie' => 'Tygr', 'popis' => 'Odvážný, energický, nezávislý, ale někdy impulzivní.'],
    3 => ['symbol' => '🐇', 'znamenie' => 'Králík', 'popis' => 'Jemný, citlivý, soucitný, ale může být opatrný.'],
    4 => ['symbol' => '🐉', 'znamenie' => 'Drak', 'popis' => 'Silný, charismatický, ambiciózní, ale někdy dominantní.'],
    5 => ['symbol' => '🐍', 'znamenie' => 'Had', 'popis' => 'Moudrý, tajemný, intuitivní, ale může být rezervovaný.'],
    6 => ['symbol' => '🐎', 'znamenie' => 'Kůň', 'popis' => 'Dynamický, společenský, svobodný duch, ale někdy netrpělivý.'],
    7 => ['symbol' => '🐐', 'znamenie' => 'Koza', 'popis' => 'Laskavá, kreativní, empatická, ale občas nerozhodná.'],
    8 => ['symbol' => '🐒', 'znamenie' => 'Opice', 'popis' => 'Inteligentní, vtipná, vynalézavá, ale může být neklidná.'],
    9 => ['symbol' => '🐓', 'znamenie' => 'Kohout', 'popis' => 'Sebevědomý, pracovitý, přímý, ale někdy kritický.'],
    10 => ['symbol' => '🐕', 'znamenie' => 'Pes', 'popis' => 'Věrný, spravedlivý, čestný, ale může být tvrdohlavý.'],
    11 => ['symbol' => '🐖', 'znamenie' => 'Prase', 'popis' => 'Laskavé, velkorysé, poctivé, ale někdy naivní.'],
];

if (!empty($_POST['rok'])) {
    $rok = intval($_POST['rok']);
    $index = ($rok - 4) % 12;
    $znameni = $zodiak[$index];

    echo "<div class='output-cinsky'>";
    echo "<h2>Vaše znamení: {$znameni['symbol']} {$znameni['znamenie']}</h2>";
    echo "<p>{$znameni['popis']}</p>";
    echo "</div>";
}
?>

<h1>Další horoskopy</h1>
    <ul>
        <li><a href="index.php">Starověká písma</a></li>
        <li><a href="zodiak.php">Západní zodiak</a></li>
        <li><a href="keltsky-zodiak.php">Keltský zodiak</a></li>
        <li><a href="indicky_zodiak.php">Indický zodiak</a></li>
        <li><a href="egyptsky_zodiak.php">Egyptský zodiak</a></li>
        <li><a href="numerologie.php">Numerologie</a></li>
    </ul>

<?php
$zodiak_cinsky = [
    'Krysa' => ['roky' => '1924, 1936, 1948, 1960, 1972, 1984, 1996, 2008, 2020', 'vlastnosti' => 'Inteligentní, mazaný, okouzlující'],
    'Buvol' => ['roky' => '1925, 1937, 1949, 1961, 1973, 1985, 1997, 2009, 2021', 'vlastnosti' => 'Trpělivý, spolehlivý, silný'],
    'Tygr' => ['roky' => '1926, 1938, 1950, 1962, 1974, 1986, 1998, 2010, 2022', 'vlastnosti' => 'Odvážný, sebevědomý, impulsivní'],
    'Zajíc' => ['roky' => '1927, 1939, 1951, 1963, 1975, 1987, 1999, 2011, 2023', 'vlastnosti' => 'Citlivý, laskavý, diplomatický'],
    'Drak' => ['roky' => '1928, 1940, 1952, 1964, 1976, 1988, 2000, 2012, 2024', 'vlastnosti' => 'Charismatický, energický, ambiciózní'],
    'Had' => ['roky' => '1929, 1941, 1953, 1965, 1977, 1989, 2001, 2013, 2025', 'vlastnosti' => 'Moudrý, tajemný, analytický'],
    'Kůň' => ['roky' => '1930, 1942, 1954, 1966, 1978, 1990, 2002, 2014, 2026', 'vlastnosti' => 'Dobrodružný, energický, nezávislý'],
    'Koza' => ['roky' => '1931, 1943, 1955, 1967, 1979, 1991, 2003, 2015, 2027', 'vlastnosti' => 'Kreativní, jemný, soucitný'],
    'Opice' => ['roky' => '1932, 1944, 1956, 1968, 1980, 1992, 2004, 2016, 2028', 'vlastnosti' => 'Chytrý, vynalézavý, zábavný'],
    'Kohout' => ['roky' => '1933, 1945, 1957, 1969, 1981, 1993, 2005, 2017, 2029', 'vlastnosti' => 'Sebevědomý, pracovitý, pečlivý'],
    'Pes' => ['roky' => '1934, 1946, 1958, 1970, 1982, 1994, 2006, 2018, 2030', 'vlastnosti' => 'Lojální, poctivý, ochranitelský'],
    'Vepř' => ['roky' => '1935, 1947, 1959, 1971, 1983, 1995, 2007, 2019, 2031', 'vlastnosti' => 'Upřímný, laskavý, velkorysý']
];

echo "<h1>Čínský zodiak</h1>";
echo "<table border='1'style='color: white;  border-radius: 10px;' >";
echo "<tr><th>Znamení</th><th>Roky</th><th>Vlastnosti</th></tr>";

foreach ($zodiak_cinsky as $znamenie => $info) {
    echo "<tr>";
    echo "<td>$znamenie</td>";
    echo "<td>{$info['roky']}</td>";
    echo "<td>{$info['vlastnosti']}</td>";
    echo "</tr>";
}

echo "</table>";
?>


  
</body>
</html>
