<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Dodaj zadatak</title></head>
<body>
    <h1>Dodaj novi zadatak</h1>
    <form method="POST" action="/todo/add">
        <input type="text" name="title" placeholder="Unesi naziv" required>
        <button type="submit">Dodaj</button>
    </form>
</body>
</html>