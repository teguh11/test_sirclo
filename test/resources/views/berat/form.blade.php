<form action="{{url()->current()}}" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <table>
    	<tr>
    		<td>Tanggal</td>
    		<td>
			    <input type="text" name="tanggal" value="{{isset($data)?$data[0]->tanggal:''}}">
    		</td>
    	</tr>
    	<tr>
    		<td>Max</td>
    		<td>
			    <input type="text" name="max" value="{{isset($data)?$data[0]->max:''}}">
    		</td>
    	</tr>
    	<tr>
    		<td>Min</td>
    		<td>
					<input type="text" name="min" value="{{isset($data)?$data[0]->min:''}}">
    		</td>
    	</tr>
    	<tr>
    		<td></td>
    		<td>
			    <button type="submit">Simpan</button>
    		</td>
    	</tr>
    </table>
</form>