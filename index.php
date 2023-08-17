<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Using html and css</title>
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    <form action="php/sendata.php" method ="POST">
        <h2>Feedback Form</h2>
        <div id="inputsbox">
            <label for="">Name<input type="text" name="name">
            </label>
            <label for="">Phone No<input type="number" name="phoneno">
            </label>
            <label for="">Email<input type="email" name="email">
            </label>
            <label for="">Message <textarea name="message"></textarea>
            </label>
            <button name="submitbtn">Submit</button>
        </div>
    </form>
    
</body>
</html>