@extends('../layouts.app')

@section('content')
<h3>DANH SÁCH CÁC LỚP HỌC</h3>
<table class="table table-striped">
	<tr>
		<th>STT</th>
		<th>Tên student</th>
		<th>Ngày</th>
		<th>Giới tính</th>
		<th>Địa chỉ</th>
		<th>Class_id</th>
		<th>Mô tả</th>
		<th>Thao tác</th>
	</tr>

	{{ $count = 1; }}
	@foreach($students as $student)
	<tr>
		<td>{{$count++}}</td>
		<td>{{$student->fullname}}</td>
		<td>{{$student->DOB}}</td>
		<td>{{$student->sex}}</td>
		<td>{{$student->address}}</td>
		<td>{{$student->class_id}}</td>
		<td>{{$student->description}}</td>
		<td>
			<a href="{{route('student.edit', ['student'=>$student->id])}}">
				<button>Sửa</button>
			</a> |

			<form action="{{route('student.destroy', ['student' => $student->id])}}" method="POST">
				@method('DELETE')
				<input type="submit" value="Xóa">
				@csrf
			</form>
		</td>
	</tr>
	@endforeach

</table>

<div>
	{{$students->onEachSide(5)->links()}}
</div>





@endsection