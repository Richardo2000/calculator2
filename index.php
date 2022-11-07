<!DOCTYPE html>
<html>
<head>
    <title>Калькулятор 2</title>
    <meta charset="utf-8" />
    <style>
         { font-family:Calibri }
        fieldset { margin-bottom: 15px; padding: 10px }
        legend { padding: 0px 3px; font-weight: bold; font-variant: small-caps }
        select { width: 254px }
        input[type=submit] { width: 170px; padding: 10px }
    </style>


<body>

<form action="definition.php" method="post">
    value1 <br><input type="text" name="a"><br>
    Value2 <br><input type="text" name="b"><br>
    <fieldset>
        <legend>Select action</legend>
        <select name="action">
            <option value="add">add</option>
            <option value="subtract">subtract</option>
            <option value="divide">divide</option>
            <option value="multiply">multiply</option>
        </select>
    </fieldset>

    <input type="submit" name="submit" value="Отправить"> </form>

</body>
</html