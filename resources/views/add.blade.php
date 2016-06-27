@extends('layouts.index')
@section('content')



  <form action="{{ url('store') }}" method="POST" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <div class="row">
          <div class="input-field col s12">
            <input type="text" class="validate" name="judul">
            <label for="title">Judul</label>
          </div>
    </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea" name="isi"></textarea>
          <label for="textarea1">Isi</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <label for="image" >Image</label>
         <input type ="file" name="image" class="validate" >
         <input type="hidden" name="_token" value="{{csrf_token()}}">
        </div>
      </div>
      <button type="submit" class="btn btn-flat pink accent-3 waves-effect waves-light white-text right">Add<i class="material-icons right">send</i></button>
  </form>


@endsection