<!doctype html>
<html lang=en>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Create new Restaurant</title>
        <body>

        <h1>
            Create Restaurant
        </h1>

        </body>

        <form action="/restauranthome/store" method="POST">
            {{csrf_field()}}
            Shop Name:<br>
            <input type="text" name="name">
            <br>
            Description:<br>
            <input type="text" name="description">
            <br>
            Contact Number:<br>
            <input type="number" name="contactNumber">
            <br>
            Shop Image:<br>
            <input type="text" name="shopImage">
            <br><br>
            <input type="submit" value="Submit">
        </form>
