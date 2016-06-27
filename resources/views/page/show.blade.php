@extends('layouts.index')
@section('content')



<div class="section">
	@foreach($datas as $data)

	<div class="row">
		<div class="col s12">
			<h1>{{ $data->title }}</1>

     <!--        <div class="divider"></div> -->
            <h4>{{$data->description}}</h4>
                
            <a href="{{ url('/page/edit', $data->id) }}" class=""> <i class="material-icons right">mode_edit</i></a>
            <a href="{{ url('/page/delete', $data->id) }}" onclick="return confirm('are you sure to delete this?')" class=""> <i class="material-icons right">delete</i></a>
		</div>
	</div>
	@endforeach


</div>

{{ $datas->render() }}

<div class="fixed-action-btn horizontal" style="bottom: 45px; right: 24px;">
    <a href="{{ url('/page/add') }}" class="btn-floating btn-large red">
      <i class="large material-icons">add</i>
    </a>
 </div>


@endsection