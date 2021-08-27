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




<form action="{{route('student.update',['student'=>$student->id])}}" method="POST">
	@csrf
	@method('PUT')
	<div class="form-group row">
		<label class="col-sm-2 col-form-label" for="name">Tên student</label>
		<input type="text" name="fullname" id="fullname" class="form-control col-sm-10" value="{{$student->fullname}}">
	</div>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label" for="name">DOB</label>
		<input type="date" name="DOB" id="DOB" class="form-control col-sm-10" value="{{$student->DOB}}">
	</div>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label" for="name">Giới tính</label>
		<input type="radio" name="sex" id="sex" class="form-control col-sm-10" value="{{$student->sex}}">
		<input type="radio" name="sex" id="sex" class="form-control col-sm-10" value="{{$student->sex}}">
	</div>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label" for="name">Ảnh thẻ</label>
		<input type="file" name="avatar" id="avatar" class="form-control col-sm-10">
	</div>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label" for="name">Địa chỉ</label>
		<input type="text" name="address" id="address" class="form-control col-sm-10" value="{{$student->address}}">
	</div>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label" for="name">Class_id</label>
		<input type="number" name="class_id" id="class_id" class="form-control col-sm-10" value="{{$student->class_id}}">
	</div>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label" for="description">Mô tả</label>
		<textarea name="description" id="description" class="form-control col-sm-10">{{$student->description}}</textarea> 
	</div>
	<div class="form-group row">
		
		<input type="submit"  class="form-control col-sm-2" value="thêm">
		<input type="submit"  class="form-control col-sm-2" value="nhập lại">
	</div>
</form>
@endsection