@extends ('layouts.app')

@section('content')
	<div class="container page">
		<div class="header" style="display: flex;justify-content: space-between; align-items: center; margin: 20px 0;">
			<div class="header-indicator">
				<p class="h5"><i class="fas fa-door-open"></i> Halaman Kelas</p>
			</div>
			<a href="{{ url('kelas/tambah_kelas') }}" class="btn btn-success">Tambah Baru</a>
		</div>
		<div class="wrap-table">
		<table class="table table-light table-bordered">
	      <thead class="thead">
	        <tr>
	            <th scope="col" style="text-align: center;">ID</th>
	            <th scope="col" style="text-align: center;">Jurusan ID</th>
	            <th scope="col" style="text-align: center;">Nama</th>
	            <th scope="col" style="text-align: center;">Created at</th>
	            <th scope="col" style="text-align: center;">Updated at</th>
	            <th scope="col" style="text-align: center;">Action</th>
	        </tr>
	      </thead>
	        <tbody>
	          @foreach($kelas as $row)
	          <tr>
	            <td style="text-align: center;">{{$row->id}}</td>
	            <td>{{$row->jurusan_id}} <a href="{{ url('jurusan') }}">Lihat Jurusan</a></td>
	            <td>{{$row->nama}}</td>
	            <td>{{$row->created_at}}</td>
	            <td>{{$row->updated_at}}</td>
	            <td style="text-align: center;">
	              <a href="{{url('kelas/ubah_kelas/'.$row->id)}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
	              <a onclick="return confirm('Apakah Anda yakin ingin menghapus kelas {{$row->nama}}?')" href="{{url('kelas/delete/'.$row->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
	            </td>
	          </tr>
	          @endforeach
	        </tbody>
	    </table>
	    </div>
	</div>
@endsection