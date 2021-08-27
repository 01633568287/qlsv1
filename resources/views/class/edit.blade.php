@extends('../layouts.app')
@section('content')
<h3>SỬA LỚP</h3>
<div>
	<ul>
		@foreach($errors->all() as $error)
		<li style="color: red">{{$error}}</li>

		@endforeach
	</ul>
</div>




<form action="{{route('class.update',['class'=>$class->id])}}" method="POST">
	@csrf
	@method('PUT')
	<div class="form-group row">
		<label class="col-sm-2 col-form-label" for="name">Tên lớp</label>
		<input type="text" name="name" id="name" class="form-control col-sm-10" value="{{$class->name}}">
	</div>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label" for="description">Mô tả</label>
		<textarea name="description" id="description" class="form-control col-sm-10">{{$class->description}}</textarea> 
	</div>
	<div class="form-group row">
		
		<input type="submit"  class="form-control col-sm-2" value="Sửa">
		<input type="submit"  class="form-control col-sm-2" value="nhập lại">
	</div>
</form>
@endsection