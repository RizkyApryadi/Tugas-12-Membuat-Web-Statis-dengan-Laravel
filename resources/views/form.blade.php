
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <label>First Name:</label><br>
    <input type="text" name="firstName"><br><br>
    
    <label>Last Name:</label><br>
    <input type="text" name="lastName"><br><br>

    <label>Gender:</label><br>
    <input type="radio" name="gender" value="male"> Male<br>
    <input type="radio" name="gender" value="female"> Female<br>
    <input type="radio" name="gender" value="other"> Other<br><br>

    <label>Nationality:</label><br>
    <select name="nationality">
        <option value="">None</option>
        <option value="Indonesia">Indonesia</option>
        <option value="Malaysia">Malaysia</option>
        <option value="Singapura">Singapura</option>
        <option value="Jepang">Jepang</option>
    </select><br><br>

    <label>Language Spoken:</label><br>
    <input type="checkbox"> Bahasa<br>
    <input type="checkbox"> English<br>
    <input type="checkbox"> Other<br><br>

    <label for="bio">Bio:</label><br>
    <textarea name="message" rows="10" cols="30"></textarea><br><br>

    <a href="{{ route('welcome') }}">
        <button type="button">Sign Up</button>
    </a>
</body>
</html>
