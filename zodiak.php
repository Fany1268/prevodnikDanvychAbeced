<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Zodiakální znamení podle měsíců</title>
    <link rel="stylesheet" href="style.css">
    

    <style>
        .symbol {
            font-size: 48px; /* Zvýšená velikost symbolu */
            margin-bottom: 20px;
        }

        /* stylyzace výstupu popisu znamení */
.output-cinsky {
    font-size: 2em;
    font-weight: bold;
    margin-top: 20px;
    padding: 10px;
    border-radius: 15px;        /* Zaoblení rohů */
    border: 1px solid #000;
    display: inline-block;
    background-color: #888888; /* Světle šedé pozadí */
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
</head>
<body>
    <h1>Zodiakální znamení podle měsíců</h1>
    <form method="POST" action="">
        <label for="znamenie">Vyberte znamení:</label>
        <select name="znamenie" id="znamenie">


            

            <?php
                // Seznam znamení zodiaku se správným pořadím
                $zodiak = [
                    'vodnář' => ['symbol' => '♒', 'datum' => '20. ledna – 18. února', 'planeta' => 'Uran', 'vlastnosti' => 'Nezávislý, inovativní, přátelský'],
                    'ryby' => ['symbol' => '♓', 'datum' => '19. února – 20. března', 'planeta' => 'Neptun', 'vlastnosti' => 'Empatický, citlivý, intuitivní'],
                    'beran' => ['symbol' => '♈', 'datum' => '21. března – 19. dubna', 'planeta' => 'Mars', 'vlastnosti' => 'Odvážný, energický, impulzivní'],
                    'byk' => ['symbol' => '♉', 'datum' => '20. dubna – 20. května', 'planeta' => 'Venuše', 'vlastnosti' => 'Spolehlivý, trpělivý, smyslný'],
                    'blizenec' => ['symbol' => '♊', 'datum' => '21. května – 20. června', 'planeta' => 'Merkur', 'vlastnosti' => 'Komunikativní, zvědavý, přizpůsobivý'],
                    'rak' => ['symbol' => '♋', 'datum' => '21. června – 22. července', 'planeta' => 'Měsíc', 'vlastnosti' => 'Citlivý, ochranitelský, intuitivní'],
                    'lev' => ['symbol' => '♌', 'datum' => '23. července – 22. srpna', 'planeta' => 'Slunce', 'vlastnosti' => 'Sebevědomý, kreativní, vášnivý'],
                    'panna' => ['symbol' => '♍', 'datum' => '23. srpna – 22. září', 'planeta' => 'Merkur', 'vlastnosti' => 'Precizní, analytický, skromný'],
                    'vahy' => ['symbol' => '♎', 'datum' => '23. září – 23. října', 'planeta' => 'Venuše', 'vlastnosti' => 'Diplomatický, spravedlivý, společenský'],
                    'stir' => ['symbol' => '♏', 'datum' => '24. října – 22. listopadu', 'planeta' => 'Pluto', 'vlastnosti' => 'Intenzivní, vášnivý, tajemný'],
                    'strelec' => ['symbol' => '♐', 'datum' => '23. listopadu – 21. prosince', 'planeta' => 'Jupiter', 'vlastnosti' => 'Optimistický, dobrodružný, filozofický'],
                    'kozoroh' => ['symbol' => '♑', 'datum' => '22. prosince – 19. ledna', 'planeta' => 'Saturn', 'vlastnosti' => 'Cílevědomý, disciplinovaný, praktický']
                ];

                // Uložení zvoleného znamení, pokud bylo odesláno
                $vybrane_znamenie = $_POST['znamenie'] ?? '';

                // Vygenerování možností ve výběrovém poli
                foreach ($zodiak as $key => $data) {
                    $selected = ($vybrane_znamenie === $key) ? 'selected' : '';
                    echo "<option value='$key' $selected>" . ucfirst($key) . " ({$data['datum']})</option>";
                }
            ?>
        </select>
        <button type="submit">Zobrazit symbol</button>
    </form>

    <?php
        if (!empty($vybrane_znamenie) && isset($zodiak[$vybrane_znamenie])) {
            echo "<div class='output-cinsky'>";
            echo "<h2>Symbol pro znamení: " . ucfirst($vybrane_znamenie) . "</h2>";
            echo "<div class='symbol'>" . $zodiak[$vybrane_znamenie]['symbol'] . "</div>";
            echo "<p>Trvá od: " . $zodiak[$vybrane_znamenie]['datum'] . "</p>";
            echo "<p>Planeta vládnoucí znamení: " . $zodiak[$vybrane_znamenie]['planeta'] . "</p>";

            echo "<p>Typické vlastnosti: " . $zodiak[$vybrane_znamenie]['vlastnosti'] . "</p>";
            echo "</div>";
        }
    ?>

<h1>Vyberte typ písma nebo horoskopu</h1>
    <ul>
        <li><a href="index.php">Starověké písmo</a></li>
        
        <li><a href="cinsky-zodiak.php">Čínský zodiak</a></li>
        <li><a href="keltsky-zodiak.php">Keltský zodiak</a></li>
        <li><a href="indicky_zodiak.php">Indický zodiak</a></li>
        <li><a href="egyptsky_zodiak.php">Egyptský zodiak</a></li>
        <li><a href="numerologie.php">Numerologie</a></li>
    </ul>

</body>
</html>
