<!doctype html>
<html lang=en>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Restaurant HomePage</title>

        <style>

        .content{
            test-align: center;
        }

        .title{
            font-size: 60px;
            margin-bottom: 40px;
        }

        </style>

        <body>
        <div class="content">
            <div class="title">
                Manage your restaurant here
            </div>

            <div class="links">
                <p><a href="{{ route('view') }}">View restaurant details</a><p>
                <p><a href="{{ route('create') }}">Create a new restaurant</a><p>
            </div>
        </div>
        </body>
        </html>

      