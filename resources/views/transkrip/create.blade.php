@extends('template.home')

@section('title')
    IPB Univercity
@endsection

@section('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
@endsection

@section('content')
<div class="container mt-5" style="width: 33%;">
  <form class="mb-4" action="/transkrip/store" method="POST">
    @csrf
      <h1 class="text-center mb-4">Transkrip Nilai</h1>
      <div class="form-group">
          <label for="">NIM</label>
          <select class="custom-select" name="nim">
            <option >Choose...</option>
            @foreach ($mahasiswa as $mhs)
            <option  value="{{$mhs->nim}}">{{$mhs->nim}}</option>
            @endforeach
          </select>      </div>
      <div class="form-group">
        <label>Nama Mahasiswa</label>
        <select class="custom-select" name="name_mhs">
          <option >Choose...</option>
          @foreach ($mahasiswa as $mhs)
          <option  value="{{$mhs->name_mhs}}">{{$mhs->name_mhs}}</option>
          @endforeach
        </select>
      </div>
      
      <div class="form-group">
          <label for="">Semester</label>
          <select class="custom-select" name="semester">
            <option >Choose...</option>
            @foreach ($mahasiswa as $mhs)
            <option  value="{{$mhs->semester}}">{{$mhs->semester}}</option>
            @endforeach
          </select>      </div>
      <div class="form-group">
        <label for="">Kode Mata Kuliah</label>
        <select class="custom-select" name="kd_matkul">
          <option >Choose...</option>
          @foreach ($matkuls as $matkul)
          <option  value="{{$matkul->kd_matkul}}">{{$matkul->kd_matkul}}</option>
          @endforeach
        </select>    </div>
    <div class="form-group">
      <label for="">Grade</label>
      <input type="text" class="form-control" name="grade">
  </div>
      <button type="submit" id="btn-submit" class="btn btn-primary mt-3" style="width: 100%;">Submit</button>
  </form>
</div>
@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
@endsection
