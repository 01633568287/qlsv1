@extends('../layouts.app')

@section('content')
<h3>{{__('class.index.title')}}</h3>




<table class="table table-striped">
	<tr>
		<th>{{__('class.index.No.')}}</th>
		<th>{{__('class.index.name')}}</th>
		<th>{{__('class.index.description')}}</th>
		<th>{{__('class.index.action')}}</th>
	</tr>

	{{ $count = 1; }}
	@foreach($classes as $class)
	<tr>
		<td>{{$count++}}</td>
		<td>{{$class->name}}</td>
		<td>{{$class->description}}</td>
		<td>
			<a href="{{route('class.edit', ['class'=>$class->id])}}">
				<button>{{__('class.index.edit')}}</button>
			</a> |

			<form action="{{route('class.destroy', ['class' => $class->id])}}" method="POST">
				@method('DELETE')
				<input type="submit" value="{{__('class.index.delete')}}">
				@csrf
			</form>
		</td>
	</tr>
	@endforeach

</table>

<div>
	{{$classes->onEachSide(5)->links()}}
</div>





@endsection