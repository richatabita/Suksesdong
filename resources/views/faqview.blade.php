@extends('layouts.index')
@section('content')

<div class="section">
	@foreach($datas as $data)

	<div class="row">
		<div class="col s12">
			<h5>{{ $data->judul }}</h5>

            <div class="divider"></div>
            <p>{{$data->content}}</p>
                
            <a href="{{ url('edit', $data->id) }}" class="btn btn-flat purple darken-4 waves-effect waves-light white-text">Edit <i class="material-icons right">mode_edit</i></a>
            <a href="{{ url('delete', $data->id) }}" onclick="return confirm('Are you sure want to delete this data?')" class="btn btn-flat red darken-4 waves-effect waves-light white-text">Delete <i class="material-icons right">delete</i></a>
		</div>
	</div>
	@endforeach

</div>

<div class="fixed-action-btn horizontal" style="bottom: 45px; right: 24px;">
    <a href="{{ url('faq/add') }}" class="btn-floating btn-large red">
      <i class="large material-icons">add</i>
    </a>
 </div>


@endsection