<button><a href="/">登出</a></button>
<table border="1">
		<tr>
			<td>編號</td>
			<td>姓名</td>
			<td>電話</td>
			<td>E-mail</td>
			<td>刪除</td>
			<td>更新</td>
		</tr>

	@foreach($fu_data as $data)
		<tr>
			<td>{{ $data->sno }}</td>
			<td>{{ $data->name }}</td>
			<td>{{ $data->phone_number }}</td>
			<td>{{ $data->email }}</td>
			<td>
				<form action="/delete" method="post">
					@csrf
					<input type="hidden" value="{{$data->sno}}" name="sno">
					<input type="submit" onclick="del()" value="刪除">
				</form>
			</td>
			<td>
				<form action="/update" method="post">
					@csrf
					<input type="hidden" name="sno" value="{{$data->sno}}">
					<input type="hidden" name="name" value="{{$data->name}}">
					<input type="hidden" name="phone_number" value="{{$data->phone_number}}">
					<input type="hidden" name="email" value="{{$data->email}}">
					<input type="submit" value="更新">
				</form>
			</td>
		</tr>
	@endforeach
</table>
	<script src="assets/script/btn.js"></script>
