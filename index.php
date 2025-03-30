<?php

require_once "Prepisovac.php";

// $typy = ['runy' => 'Runy', 'hlaholice' => 'Hlaholice', 'hieroglyfy' => 'Hieroglyfy'];
// $typ = $_POST['typ'] ?? 'runy';
// $vstup = $_POST['text'] ?? '';
// $vystup = Prepisovac::prepis($vstup, $typ);



// $typy = [
//     'runy' => 'Runy', 'hlaholice' => 'Hlaholice', 'hieroglyfy' => 'Hieroglyfy',
//     'recka' => 'Řecká', 'cyrilice' => 'Cyrilice'
// ];
// $typ = $_POST['typ'] ?? 'runy';
// $vstup = $_POST['text'] ?? '';
// $vystup = Prepisovac::prepis($vstup, $typ);




$typy = ['runy' => 'Runy', 'hlaholice' => 'Hlaholice', 'hieroglyfy' => 'Hieroglyfy', 'ogham' => 'Ogham', 'mayske' => 'Mayské hieroglyfy', 'fenicke' => 'Fénické písmo', 'cyrilice' => 'Cyrilice', 'recka' => 'Řecká abeceda'];
$typ = $_POST['typ'] ?? 'runy';
$vstup = $_POST['text'] ?? '';
$vystup = Prepisovac::prepis($vstup, $typ);


?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Přepisovač</title>
    <link rel="stylesheet" href="style.css">


</head>

<body>

<style>
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
    <form method="post">
    <textarea name="text" placeholder="Zadejte text..."><?php echo htmlspecialchars($vstup); ?></textarea><br>
    <label for="typ">Převést na:</label>
    <select name="typ" id="typ">
        <?php foreach ($typy as $key => $label): ?>
            <option value="<?php echo $key; ?>" <?php echo $typ === $key ? 'selected' : ''; ?>><?php echo $label; ?></option>
        <?php endforeach; ?>

    </select>

    <button type="submit">Převést</button>
    
</form>
<h3>Výsledek:</h3>
<div class="output"><?php echo htmlspecialchars($vystup); ?></div>
<h1>Vyberte typ písma nebo horoskopu</h1>
    <ul>
        
        <li><a href="zodiak.php">Zodiakální znamení</a></li>
        <li><a href="cinsky-zodiak.php">Čínský zodiak</a></li>
        <li><a href="keltsky_zodiak.php">Keltský zodiak</a></li>
        <li><a href="indicky_zodiak.php">Indický zodiak</a></li>
        <li><a href="egyptsky_zodiak.php">Egyptský zodiak</a></li>
        <li><a href="numerologie.php">Numerologie</a></li>
    </ul>
<a href="pocitadlo.html" class="active">Počítadlo dnů</a>
</body>
</html>
