@extends ('layouts.app')

@section('content')
	<div class="container page">
		<div class="header" style="display: flex;justify-content: space-between; align-items: center; margin: 20px 0;">
			<div class="header-indicator">
				<p class="h5"><i class="fas fa-graduation-cap"></i> Halaman Siswa</p>
			</div>
			<a href="{{ url('siswa/tambah_siswa') }}" class="btn btn-success">Tambah Baru</a>
		</div>
		<div class="wrap-table">
		<table class="table table-light table-bordered">
	      <thead class="thead">
	        <tr>
	            <th scope="col" style="text-align: center;">ID</th>
	            <th scope="col" style="text-align: center;">Nama Siswa</th>
	            <th scope="col" style="text-align: center;">Kelas ID</th>
	            <th scope="col" style="text-align: center;">Jurusan ID</th>
	            <th scope="col" style="text-align: center;">Action</th>
	        </tr>
	      </thead>
	        <tbody>
	          @foreach($siswa as $row)
	          <tr>
	            <td style="text-align: center;">{{$row->id}}</td>
	            <td>{{$row->nama}}</td>
	            <td>{{$row->kelas_id}} <a href="{{ url('kelas') }}">Lihat Kelas</a></td>
	            <td>{{$row->jurusan_id}} <a href="{{ url('jurusan') }}">Lihat Jurusan</a></td>
	            <td style="text-align: center;">
	              <a href="{{url('siswa/ubah_siswa/'.$row->id)}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
	              <a onclick="return confirm('Apakah Anda yakin ingin menghapus siswa {{$row->nama}}?')" href="{{url('siswa/min_count_jurusan/'.$row->id.'/'.$row->jurusan_id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
	            </td>
	          </tr>
	          @endforeach
	        </tbody>
	    </table>
		</div>
	</div>
@endsection