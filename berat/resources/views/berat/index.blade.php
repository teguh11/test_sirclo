<!DOCTYPE html>
<html>
<head>
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script type="text/javascript">
  	$(document).ready(function() {
	  	$('.delete-user').click(function(e){
	        e.preventDefault() // Don't post the form, unless confirmed
	        if (confirm('Are you sure?')) {
	            // Post the form
	            $(e.target).closest('form').submit() // Post the surrounding form
	        }
	    });
  	})
  </script>
	<title></title>
</head>
<body>
		<div>
			<div style="width: 1200px; margin: auto;">
				<a href="{{route('tambahBerat')}}">Tambah Data</a>
				<table>
					<tr>
						<th>Tanggal</th>
						<th>Max</th>
						<th>Min</th>
						<th>Perbedaan</th>
						<th>action</th>
					</tr>
					@foreach($datas as $index => $value)
						<tr>
								<td>{{$value->tanggal}}</td>
								<td>{{$value->max}}</td>
								<td>{{$value->min}}</td>
								<td>{{$value->max-$value->min}}</td>
								<td>
									<a href="{{route('ubahBerat', ['id' => $value->id])}}">Edit</a>
	    						<form method="POST" action="{{route('deleteBerat', ['id' => $value->id])}}">
	        					{{ csrf_field() }}
	        					{{ method_field('DELETE') }}
	        					<div class="form-group">
	            				<input type="submit" class="btn btn-danger delete-user" value="Delete user">
	        					</div>
	    						</form>
								</td>
						</tr>
					@endforeach
				</table>
			</div>
		</div>
</body>
</html>