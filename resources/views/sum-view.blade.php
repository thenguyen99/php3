<form action="{{ route('sum') }}" method="POST">
	{{csrf_field()}}
	<input type="Number" placeholder="N 1" name="n_1" >
	<input type="Number" placeholder="N 2" name="n_2" >
	<input type="Number" placeholder="N 3" name="n_3" >
	<button type="submit">Ket qua pt bac 2</button>
      
</form>