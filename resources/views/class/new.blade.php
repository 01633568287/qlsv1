@extends('../layouts.app')
@section('content')
<h3>THÊM LỚP</h3>
<div>
	<ul>
		@foreach($errors->all() as $error)
		<li style="color: red">{{$error}}</li>

		@endforeach
	</ul>
</div>




<form action="{{route('class.store')}}" method="POST">
	@csrf
	@method('POST')
	<div class="form-group row">
		<label class="col-sm-2 col-form-label" for="name">Tên lớp</label>
		<input type="text" name="name" id="name" class="form-control col-sm-10">
	</div>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label" for="description">Mô tả</label>
		<textarea name="description" id="description" class="form-control col-sm-10"></textarea> 
	</div>
	<div class="form-group row">
		
		<input type="submit"  class="form-control col-sm-2" value="thêm">
		<input type="submit"  class="form-control col-sm-2" value="nhập lại">
	</div>
</form>
@endsection