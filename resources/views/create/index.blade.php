<form method="POST" action="{{ route('dashboard.submit') }}">
	@csrf
	<input type="text" name="nama" placeholder="nama">
	<input type="text" name="nim" placeholder="NIM">
	<input type="text" name="deskripsi" placeholder="deskripsi">

	<button type="submit">Submit</button>

</form>