@extends('template.home')

@section('title')
    IPB Univercity
@endsection

@section('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
@endsection

@section('content')
<h1 class="text-center">Mata Kuliah</h1>
<a class="btn btn-primary mb-2 ml-5"  href="/matkul/create"  role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Create Mata Kuliah</a>

<div class="container mt-5">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Mata Kuliah</th>
                <th>Semester</th>
                <th>Mata Kuliah</th>
                <th>jurusan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($matkuls as $matkl)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$matkl->kd_matkul}}</td>
              <td>{{$matkl->semester}}</td>
              <td>{{$matkl->nm_matkul}}</td>
              <td>{{$matkl->jurusan}}</td>
              <td>
                <a href="/edit/matkul/{{$matkl->id}}"class="btn btn-success">Edit</a>
               <form action="/delete/matkul/{{$matkl->id}}" method="post">
               @csrf
               @method('DELETE')
               <button type="submit" class="btn btn-danger">Delete</button>
               </form>
              </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>  
@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
@endsection
