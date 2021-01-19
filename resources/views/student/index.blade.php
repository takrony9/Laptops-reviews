@extends('master')

@section('content')
<div class="row">
  <div class="col-md-12">
    <br />
    <h3 align="center"> Student data</h3>
<br />
<table class="table table-bordered">

  @foreach($students as $row)

   <tr>
    <td>{{$row['brand']}}</td>
    <td>{{$row['ram']}}</td>

    <td></td>
   </tr>
   @endforeach
  </table>
</div>
</div>

@endsection
