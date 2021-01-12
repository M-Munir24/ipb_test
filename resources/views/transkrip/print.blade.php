@extends('template.home')

@section('title')
    IPB Univercity
@endsection

@section('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
@endsection

@section('content')
<h1 class="text-center">Transkrip Nilai</h1>
<a class="btn btn-primary mb-2 ml-5" href="/transkrip/create"  role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Create Transkrip Nilai</a>
<a class="btn btn-info mb-2 ml-5" href="/transkrip/home"  role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Cetak Transkrip Nilai</a>
<div class="container mt-5" id="app">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>NIM</th>
                <th>Mahasiswa</th>
                <th>Semester</th>
                <th>Kode Mata Kuliah</th>
                <th>Grade</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transkrip as $trnskp)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$trnskp->nim}}</td>
              <td>{{$trnskp->name_mhs}}</td>
              <td>{{$trnskp->semester}}</td>
              <td>{{$trnskp->kd_matkul}}</td>
              <td>{{$trnskp->grade}}</td>
              <td>
                <a href="/edit/transkrip/{{$trnskp->id}}"class="btn btn-success">Edit</a>
               <form action="/delete/transkrip/{{$trnskp->id}}" method="post">
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
<script>
    require('./bootstrap');

window.Vue = require('vue');

const app = new Vue({

    el: '#app',

    methods: {

      printInvoice(){ 

        window.print()

      }
    }
});
</script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
@endsection
