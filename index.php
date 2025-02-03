<?php

require_once "Prepisovac.php";

$typy = ['runy' => 'Runy', 'hlaholice' => 'Hlaholice', 'hieroglyfy' => 'Hieroglyfy'];
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
</body>
</html>
