@extends('template.home')

@section('title')
    IPB Univercity
@endsection

@section('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
@endsection

@section('content')
<div class="container mt-5" style="width: 33%;">
  <form class="mb-4" action="/update/transkrip/{{$transkrip->id}}" method="POST">
    @csrf
      <h1 class="text-center mb-4">Transkrip Nilai</h1>
      <div class="form-group">
          <label for="">NIM</label>
          <input value="{{$transkrip->nim}}" type="text" class="form-control" name="nim">
      </div>
      <div class="form-group">
          <label for="">Nama Mahasiswa</label>
          <input value="{{$transkrip->name_mhs}}" type="text" class="form-control" name="name_mhs">
      </div>
      <div class="form-group">
          <label for="">Semester</label>
          <input value="{{$transkrip->semester}}" type="text" class="form-control" name="semester">
      </div>
      <div class="form-group">
        <label for="">Kode Mata Kuliah</label>
        <input value="{{$transkrip->kd_matkul}}" type="text" class="form-control" name="kd_matkul">
    </div>
    <div class="form-group">
      <label for="">Grade</label>
      <input value="{{$transkrip->grade}}" type="text" class="form-control" name="grade">
  </div>
      <button type="submit" id="btn-submit" class="btn btn-primary mt-3" style="width: 100%;">Submit</button>
  </form>
</div>
@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
@endsection
