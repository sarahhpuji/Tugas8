@extends('templateClient.base')

@section('content')
	<div class="Blog-bg">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="Blogheading">
                     <h3>Blog Pariwisata</h3>
                  </div>
               </div>
            </div>
         </div>
      </div>



      <!-- section --> 
      <div class="section layout_padding_bg light_silver">
         <div class="container">
            
            <div class="row">
               <div class="col-md-12">
                  <div class="card">
                     <div class="card-header">
                        Daftar Artikel
                     </div>
                  <table class="table">
                  <thead>
                     <th>No</th>
                     <th>Judul Artikel</th>
                     <th>Penulis</th>
                     <th>Isi Artikel</th>
                  </thead>
                  <tbody>
                     @foreach($list_artikel as $artikel)
                   <tr>
                     <td>{{$loop->iteration}}</td>
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
         </div>
      </div>
   </div>
      <!-- end section -->

<!-- section -->
	 @include('templateClient.section.comment')

@endsection