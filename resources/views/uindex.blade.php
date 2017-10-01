@extends('layouts.sucp')
@section('main')
<body>
<div id="top">  
<h1>Detail information</h1>
<img src="touxiang.jpg">
<table class="table1">
  <thead>
    <tr>
      <th>User Name: XXX</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Female<input type="radio" name="gender" value="female"></td>
    </tr>
    <tr>
    <td>
    Email: 1234556@123.com
    </td>
    </tr>
    <tr>
    <td>
    Detail information: 23 rd qwer NSW 2310
    </td>
    </tr>
    <tr>
		<td>change the detail: <input type="button" name="change" value="change"></td>
    </tr>
	</tbody>
</table>
<hr>
</div>
<div id="mid">
<h1>payment detail</h1>
<table class="table2">
  <thead>
    <tr>
      <th>Num</th>
      <th>Username</th>
      <th>amout</th>
      <th>Total Prices</th>
      <th>Time</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>XXX</td>
      <td>QWE, WEWER, ERTET</td>
      <td>$45</td>
      <td>23/8/2017</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>XXX</td>
      <td>QWE,WER,TRTRTY,TYG</td>
      <td>$60</td>
      <td>27/8/2017</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>XXX</td>
      <td>Larry the Bird</td>
      <td>$12</td>
      <td>31/8/2017</td>
    </tr>
    <tr>
    	<th scope="row">4</th>
        <td>XXX</td>
        <td>asd,eff,fhutoe, shj, ruxs</td>
        <td>$60</td>
        <td>3/9/2017</td>
    </tr>
     <tr>
    	<th scope="row">5</th>
        <td>XXX</td>
        <td>asd,eff,shj, ruxs</td>
        <td>$50</td>
        <td>7/9/2017</td>
    </tr>
     <tr>
    	<th scope="row">6</th>
        <td>XXX</td>
        <td>asd</td>
        <td>$20</td>
        <td>15/9/2017</td>
    </tr>
  </tbody>
</table>
<hr>	
</div>
</body>
</html>
</body>       
        


@endsection