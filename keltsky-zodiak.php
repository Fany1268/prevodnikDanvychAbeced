<?php
$keltskyZodiak = [
    ['datum' => '24.12.-20.1.', 'strom' => 'Jabloň', 'charakteristika' => 'Láskyplný a citlivý.'],
    ['datum' => '21.1.-17.2.', 'strom' => 'Jedle', 'charakteristika' => 'Tajemný a důstojný.'],
    ['datum' => '18.2.-17.3.', 'strom' => 'Jilm', 'charakteristika' => 'Ušlechtilý a upřímný.'],
    ['datum' => '18.3.-14.4.', 'strom' => 'Olše', 'charakteristika' => 'Odvážný a cílevědomý.'],
    ['datum' => '15.4.-12.5.', 'strom' => 'Javor', 'charakteristika' => 'Nezávislý a tvořivý.'],
    ['datum' => '13.5.-9.6.', 'strom' => 'Jasan', 'charakteristika' => 'Intuitivní a energický.'],
    ['datum' => '10.6.-7.7.', 'strom' => 'Habr', 'charakteristika' => 'Precizní a praktický.'],
    ['datum' => '8.7.-4.8.', 'strom' => 'Jabloň', 'charakteristika' => 'Láskyplný a citlivý.'],
    ['datum' => '5.8.-1.9.', 'strom' => 'Cedr', 'charakteristika' => 'Sebevědomý a odvážný.'],
    ['datum' => '2.9.-29.9.', 'strom' => 'Borovice', 'charakteristika' => 'Silný a věrný.'],
    ['datum' => '30.9.-27.10.', 'strom' => 'Ořešák', 'charakteristika' => 'Vášnivý a vnímavý.'],
    ['datum' => '28.10.-24.11.', 'strom' => 'Kaštan', 'charakteristika' => 'Spravedlivý a diplomatický.'],
    ['datum' => '25.11.-23.12.', 'strom' => 'Smrk', 'charakteristika' => 'Čestný a vytrvalý.']
];
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">




</head>
<body>


<title>Keltský horoskop</title>
    <script>
        const keltskyZodiak = [
            { start: '12-24', end: '01-20', strom: 'Jabloň', charakteristika: 'Láskyplný a citlivý.' },
            { start: '01-21', end: '02-17', strom: 'Jedle', charakteristika: 'Tajemný a důstojný.' },
            { start: '02-18', end: '03-17', strom: 'Jilm', charakteristika: 'Ušlechtilý a upřímný.' },
            { start: '03-18', end: '04-14', strom: 'Olše', charakteristika: 'Odvážný a cílevědomý.' },
            { start: '04-15', end: '05-12', strom: 'Javor', charakteristika: 'Nezávislý a tvořivý.' },
            { start: '05-13', end: '06-09', strom: 'Jasan', charakteristika: 'Intuitivní a energický.' },
            { start: '06-10', end: '07-07', strom: 'Habr', charakteristika: 'Precizní a praktický.' },
            { start: '07-08', end: '08-04', strom: 'Jabloň', charakteristika: 'Láskyplný a citlivý.' },
            { start: '08-05', end: '09-01', strom: 'Cedr', charakteristika: 'Sebevědomý a odvážný.' },
            { start: '09-02', end: '09-29', strom: 'Borovice', charakteristika: 'Silný a věrný.' },
            { start: '09-30', end: '10-27', strom: 'Ořešák', charakteristika: 'Vášnivý a vnímavý.' },
            { start: '10-28', end: '11-24', strom: 'Kaštan', charakteristika: 'Spravedlivý a diplomatický.' },
            { start: '11-25', end: '12-23', strom: 'Smrk', charakteristika: 'Čestný a vytrvalý.' }
        ];

        function najdiZnamení() {
            let datum = document.getElementById('datum').value;
            let [rok, mesic, den] = datum.split('-');
            let formattedDate = mesic + '-' + den;
            
            for (let znamení of keltskyZodiak) {
                if ((formattedDate >= znamení.start && formattedDate <= znamení.end) || 
                    (znamení.start > znamení.end && (formattedDate >= znamení.start || formattedDate <= znamení.end))) {
                    


                    document.getElementById('vysledek').innerHTML = `
    <h1 style="color: white;">Strom: ${znamení.strom}</h1>
    <p style="color: white;">Charakteristika: ${znamení.charakteristika}</p>
`;return;

                }
            }
            document.getElementById('vysledek').innerHTML = 'Nenalezeno';
        }
    </script>
<style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .container {
            text-align: center;
        }
        input, button {
            margin: 5px;
            padding: 8px;
        }
        .result {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>

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
    background-color: #888888; /* Světle šedé pozadí */
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







    <h2>Keltský horoskop</h2>
    <input type="date" id="datum">
    <button onclick="najdiZnamení()">Zjistit znamení</button>
    <div id="vysledek"></div>

    <h1>Další horoskopy</h1>
    <ul>
        <li><a href="index.php">Starověká písma</a></li>
        <li><a href="zodiak.php">Západní zodiak</a></li>
        <li><a href="cinsky-zodiak.php">Čínský zodiak</a></li>
        <li><a href="indicky_zodiak.php">Indický zodiak</a></li>
        <li><a href="egyptsky_zodiak.php">Egyptský zodiak</a></li>
        <li><a href="numerologie.php">Numerologie</a></li>
    </ul>

    <h3>Tabulka znamení</h3>
    <table table border='1'style='color: white; border-radius: 10px;'>
        <tr>
            <th>Období</th>
            <th>Strom</th>
            <th>Charakteristika</th>
        </tr>
        <?php foreach ($keltskyZodiak as $znameni): ?>
        <tr>
            <td><?php echo $znameni['datum']; ?></td>
            <td><?php echo $znameni['strom']; ?></td>
            <td><?php echo $znameni['charakteristika']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
