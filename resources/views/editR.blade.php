<!doctype html>
<html lang=en>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Edit Restaurant</title>
        <body>

        <h1>
            Modify Restaurant
        </h1>

        </body>

        <form action="{{ route('update',['id' => $res->id]) }}" method="POST">
            {{csrf_field()}}
            
            Shop Name:<br>
            <input type="text" name="name" value="{{ $res->name }}" >
            <br>
            Description:<br>
            <input type="text" name="description"  value="{{ $res->description }}"> 
            <br>
            Contact Number:<br>
            <input type="number" name="contactNumber" value="{{ $res->contactNumber }}">
            <br>
            Shop Image:<br>
            <input type="text" name="shopImage" value="{{ $res->shopImage }}">
            <br><br>
            <input type="submit" value="Update">
        </form>
