@extends('layouts.index')
@section('content')



<div class="section">
  <form action="{{ url('update', $tampiledit->id) }}" method="POST" enctype="multipart/form-data">
    {!! csrf_field() !!}
    <div class="row">
          <div class="input-field col s12">
            <input type="text" class="validate" name="judul" value="{{ $tampiledit->judul }}">
            <label for="title">Judul</label>
          </div>
    </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea" name="isi">{{ $tampiledit->isi }}</textarea>
          <label for="textarea1">Isi</label>
        </div>
      </div>

       <div class="row">
        <div class="input-field col s12">
          <label for="image" >{{ $tampiledit->path }}</label>
         <input type ="file" name="image">
         <input type="hidden" name="_token" value="{{csrf_token()}}">

        </div>
      </div>

      <button type="submit" class="btn btn-flat pink accent-3 waves-effect waves-light white-text right">Submit <i class="material-icons right">send</i></button>
  </form>
</div>

@endsection