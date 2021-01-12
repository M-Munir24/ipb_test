@extends('template.home')

@section('title')
    IPB Univercity
@endsection

@section('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
@endsection

@section('content')
<h1 class="text-center">Mahasiswa</h1>
<a class="btn btn-primary mb-2 ml-5" href="/mahasiswa/create"  role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Create Mahadidwa</a>
<div class="container mt-5">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>NIM</th>
                <th>NAMA</th>
                <th>Semester</th>
                <th>jurusan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mahasiswa as $mhs)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$mhs->nim}}</td>
              <td>{{$mhs->name_mhs}}</td>
              <td>{{$mhs->semester}}</td>
              <td>{{$mhs->jurusan}}</td>
              <td>
                <a href="/edit/mhs/{{$mhs->id}}"class="btn btn-success">Edit</a>
               <form action="/delete/mhs/{{$mhs->id}}" method="post">
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
