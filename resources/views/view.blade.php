@extends("theme")
@section("content")
<div class="container">
<div class="row">
<div class="col-12 col-sm-3 col-lg-3 col-xl-3 col-xxl-3" ></div>
<div class="col-12 col-sm-6 col-lg-6 col-xl-6 col-xxl-6" >


<table class="table">

<tr>
    <th>name</th>
    <th>designation</th>
    <th>college</th>
    <th>number</th>

@foreach($faculties as $faculty)


    <tr>
        <td>{{ $faculty->Name }}</td>
        <td>{{ $faculty->designation }}</td>
        <td>{{ $faculty->College }}</td>
        <td>{{ $faculty->ContactNo }}</td>
        <td> <a class="btn btn-success" href="/faculty/{{$faculty->id}}/edit">Edit</a> </td>
    </tr>
@endforeach
   
</tr>

</table>


</div>
<div class="col-12 col-sm-3 col-lg-3 col-xl-3 col-xxl-3" >
</div>
</div>

@endsection