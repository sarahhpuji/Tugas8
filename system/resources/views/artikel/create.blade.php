@extends('templateAdmin.base')

@section('content')

	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Tambah Data Artikel
				</div>
				<div class="card-body">
					<form action="{{url('artikel')}}" method="post">
						@csrf
					<div class="form-group">
						<label for="" class="control-label">Judul Artikel</label>
						<input type="text" class="form-control" name="judul">
					</div>
							<div class="form-group">
								<label for="" class="control-label">Penulis Artikel</label>
								<input type="text" class="form-control" name="penulis">
							</div>

					<div class="form-group">
						<label for="" class="control-label">Isi Artikel</label>
						<textarea name="isi" class="form-control"></textarea>

					<button class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection