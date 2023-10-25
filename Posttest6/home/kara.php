<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Informasi Game</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="karast.css">

</head>
<body>
    <div class="container">
        <h1>Form Informasi Game</h1>
        <form action="kara2.php" method="post" enctype="multipart/form-data">
            <div class="input-group">
                <p>add image : <input type="file" name="file"> </p>
                <label for="game_name">Nama Karakter:</label>
                <input type="text" id="game_name" name="game_name" required>
            </div>
            <div class="input-group">
                <label for="name_kar">Role Karakter:</label>
                <input type="text" id="name_kar" name="name_kar" required>
            </div>
            <div class="input-group">
                <label for="release_year">Tahun Rilis:</label>
                <input type="number" id="release_year" name="release_year" min="1900" max="2099" required>
            </div>
            <div class="input-group">
                <label>Jenis Synergy:</label>
                <input type="radio" id="action" name="game_type" value="Action" required>
                <label for="action">Explosive</label>
                <input type="radio" id="rpg" name="game_type" value="RPG">
                <label for="rpg">Piercing</label>
                <input type="radio" id="rpg" name="game_type" value="RPG">
                <label for="rpg">Mystic</label>
                <input type="radio" id="rpg" name="game_type" value="RPG">
                <label for="rpg">Sonic</label>
            </div>
            <div class="input-group">
                <label for="description">Deskripsi Karakter:</label>
                <textarea id="description" name="description" rows="4" required></textarea>
            </div>
            <div class="input-group">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>
