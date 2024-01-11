<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="welcome.php" method="post">
        <h1>Buat account baru</h1>
        <h2>sign up form</h2>

        <label for="zakki">first name</label><br>
        <input type="text" name="first" ><br><br>

        <label for="abdul">last name</label><br>
        <input type="text" name="last"><br><br>

        <label for="siapa">gender</label><br>
        <input type="radio" name="gender" value="male">male<br>
        <input type="radio" name="gender" value="female">female<br><br>

        <label for="sapa">Nationality</label><br>
        <select name="negara" id="sana">
            <option value="indonesia">indonesia</option>
            <option value="malasia">malasia</option>
        </select><br><br>

        <label for="yuk">language spoken</label><br>
        <input type="checkbox" name="bahasa[]" value="indonesia">bahasa indonesia<br>
        <input type="checkbox" name="bahasa[]" value="malasia">malasia <br>
        <br>

        <label for="bio">Bio</label><br>
        <textarea name="bio" id="" cols="30" rows="10"></textarea> <br>
        <button type="submit">sign up</button>
    </form>
    </body>
</html>