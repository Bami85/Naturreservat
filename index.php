<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Naturreservat</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="form-container">
        <h1>Naturreservat</h1>
        <form action="./results.php" method="POST">
            <label>Antal apor</label>
            <input type="number" name="apa" min="0">

            <label>Antal giraffer</label>
            <input type="number" name="giraffe" min="0">

            <label>Antal tigrar</label>
            <input type="number" name="tiger" min="0">

            <label>Antal kokosnötter</label>
            <input type="number" name="coconut" min="0">
            
            <button type="submit" name="submit">Skicka</button>
        </form>
    </div>

   

</body>
</html>
