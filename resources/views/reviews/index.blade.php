@extends('master')

@section('content')
<div class="row">
  <div class="col-md-12">
    <br />
    <h3 align="center"> laptop review</h3>
<br />
<table class="table table-bordered">

  @foreach($review as $row)

   <tr>
   
    <td>{{$row['review']}}</td>

    <td></td>
   </tr>
   @endforeach
  </table>
</div>
</div>

@endsection
