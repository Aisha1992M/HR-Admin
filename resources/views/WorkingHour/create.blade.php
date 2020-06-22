@extends('layout')
@section('content')
<html>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <style>
    .card-header {
      background-color: #343a40;
      color: #FFFFFF;
      text-align: left;
      font-family: "Times New Roman", Times, serif;
      font-size: 30px;
    }

    .control-label col-4 {
      font-family: "Times New Roman", Times, serif;
    }

    input[type=text] {
      width: 200px;

    }

    #p3 {
      text-align: right;

    }
  </style>
</head>


<body>
  <div class="container">

    <div class="card">
      <div class="card-header">Shift Setup </div>
      <div class="card-body">

        <form action="{{ route('WorkingHour.store') }}" method="POST">
          @csrf
          <input type="hidden" value="{{Auth::user()->id}}" name="user_id"/>
          <label for="days">Working Day:</label>
          <input type="date" class="form-control" name="day">
          <label for="time">Time in:</label>
          <input type="time" class="form-control" name="start_time">
          <label for="time">Time late:</label>
          <input type="number" class="form-control" name="peried">
          <label for="time">Time out:</label>
          <input type="time" class="form-control" name="finish_time">
          <label for="time">Early leaving:</label>
          <input type="number" class="form-control" name="periodOut">
          <button type="submit" class="btn btn-primary float-right"> submit</button>

        </form>
      </div>

    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>
@endsection