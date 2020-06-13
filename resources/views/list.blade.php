
@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employees list</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
 h2,td,th {
  font-family: "Times New Roman", Times, serif;

 }
 td {
  font-size: 24px;
 }
 #myInput {
  background-image: url('/css/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 30%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  margin-bottom: 12px; /* Add some space below the input */
  float:right;
}



</style>
</head>
<body>


<div class="container">
<form class="form-inline ml-3"id="myInput">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" id="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
  
  <h2>Employees List</h2>
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Attandence</th>
       
      </tr>
    </thead>
    <tbody id="table">
      <tr>
        <td>12345</td>
        <td>John</td>
        <td> <a class="btn btn-primary " href="/history"> See history</a> </td>
        
      </tr>
      <tr>
        <td>356763</td>
        <td>Mary</td>
        <td>03:55</td>
      
      </tr>
      <tr>
        <td>99633</td>
        <td>July</td>
        <td>03:00</td>
       
      </tr>
      
    </tbody>
  </table>
 
</div>

</body>
 <script>
 var $rows = $('#table tr');
$('#search').keyup(function() {
    var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
    
    $rows.show().filter(function() {
        var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
        return !~text.indexOf(val);
    }).hide();
});
 
 </script>
</html>
@endsection