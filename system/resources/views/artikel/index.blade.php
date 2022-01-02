@extends('templateAdmin.base')


      @section('content')
        
        <div  class="container">
            <div class="card">
                @include('templateAdmin.utils.notif')
				<div class="card-header">
          			<strong>Filter</strong>
       			 </div>
				<div class="card-body">
            		<form action="{{ url('artikel/filter') }}" method="POST">
              		@csrf
              		<div class="form-group">
                    	<label for="" class="control-label">Judul Artikel</label>
                    	<input type="text" class="form-control" name="nama" value="{{ $nama ?? "" }}">
              		</div>

					<div class="form-group">
						<label for="" class="control-label">Penulis</label>
						<input type="text" class="form-control" name="stok" value="{{ $stok ?? "" }}">
					</div>
				<div>
                  <button class="btn btn-dark float-right" ><i class="fa fa-search"></i> Filter</button>
                </form>
            </div>
          </div>
            	<div class="card-header">
            		<strong>Data Artikel</strong>
            		<a href="{{url('artikel/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah Data</a>
            	</div>
            	<div class="card-body">
            		<table class="table">
            			<thead>
            				<tr>
            					<th>No</th>
            					<th>Aksi</th>
            					<th>Judul Artikel</th>
                                <th>Penulis Artikel</th>
                                <th>Isi Artikel</th>
            				</tr>
            			</thead>
            			<tbody>
            				@foreach($list_artikel as $artikel)
            				<tr>
            					<td>{{$loop->iteration}}</td>
            					<td>
            						<div class="btn-group">
            							<a href="{{url('artikel', $artikel->id)}}" class="btn btn-dark btn-sm"><i class="fa fa-info"></i></a>
            							<a href="{{url('artikel', $artikel->id)}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                        @include('templateAdmin.utils.delete', ['url' => url('artikel', $artikel->id)])
            						</div>
            					</td>
            					<td>{{$artikel->judul}}</td>
                                <td>{{$artikel->penulis}}</td>
                                <td>{{$artikel->isi}}</td>   
            				</tr>
            				@endforeach
            			</tbody>
            		</table>
            	</div>
            </div>
          </div>




@endsection