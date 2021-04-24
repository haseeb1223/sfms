@extends('layouts.dashboard')

@section('dashboardContent')






<table id="table_id" class="table ">
  <caption>List of users</caption>
  <thead>
    <tr>
      <th scope="col">name</th>
      <th scope="col">father</th>
      <th scope="col">class</th>
      <th scope="col">fee</th>
      <th scope="col">phone</th>

    </tr>
  </thead>
  <tbody>
  @foreach($students as $student)
    <tr>
      <th scope="row">{{$student->name}}</th>
      <td>{{$student->father_name}}</td>
      <td>{{$student->studentClass->number}} {{$student->studentClass->classType->name}}</td>
      <td>{{$student->monthly_fee}}</td>
      <td>{{$student->contact }}</td>

    </tr>
    @endforeach
  </tbody>
</table>
<script>
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
@endsection