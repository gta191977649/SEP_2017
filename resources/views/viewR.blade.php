<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Manage Restaurant</title>
        <body>
        @foreach($r1 as $data)
            
         <table>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Contact Number</th>
                <th>Shop Image</th>
            </tr>
            <tr>
                 <p>
                 <td>{{ $data->name }}</td>
                 <td>{{ $data->description }}</td>
                 <td>{{ $data->contactNumber }}</td>
                 <td>{{ $data->shopImage }}</td>
            <a href="{{ route('edit', ['id' => $data->id]) }}">* Edit below</a>
            <form action="{{ route('delete',['id' => $data->id]) }}" method="POST"?>
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <input type="submit" value="Delete">
             </form> 
            </tr>
        @endforeach
        </body>