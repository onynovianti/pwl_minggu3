@extends('layouts.main') 

@section('content')
<!-- Tabel Biodata -->
<table class="table table-striped">
	<thead>
		<tr>
			<th>DESKRIPSI SINGKAT</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>
				<img src="{{ $alamat_gambar }}" class="img-fluid img-thumbnail" width=350 height="350">
			</td>
			<td>Saya adalah mahasiswi Politeknik Negeri Malang, Jurusan Teknologi Informasi, Prodi D-IV Teknik Informatika. Saya belajar mengenai Pemrograman, Jaringan Komputer, Basis Data, dan banyak lainnya.</td>
		</tr>
	</tbody>
	<thead>
		<tr>
			<th>INFORMASI UMUM</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th>Nama Lengkap</th>
			<td>{{ $nama }}</td>
		</tr>
		<tr>
			<th>Tempat, Tanggal Lahir</th>
			<td>{{ $ttl }}</td>
		</tr>
		<tr>
			<th>Alamat</th>
			<td>{{ $alamat }}</td>
		</tr>
	</tbody>
	<thead>
		<tr>
			<th>PENDIDIKAN</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>2008-2014</td>
			<td> SDN Sumberpucung 07</td>
		</tr>
		<tr>
			<td>2014-2017</td>
			<td> SMPN 2 Sumberpucung</td>
		<tr>
			<td>2017-2020</td>
			<td> SMK Brantas Karangkates</td>
		</tr>
		<tr>
			<th>Nama Lengkap</th>
			<td>Ony Novianti</td>
		</tr>
	</tbody>
	<thead>
		<tr>
			<th>KONTAK</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Email</td>
			<td>onynovianti26@gmail.com</td>
		</tr>
		<tr>
			<td>Facebook</td>
			<td>ony novianti</td>
		</tr>
		<tr>
			<td>Instagram</td>
			<td>onynovianti</td>
		</tr>
		<tr>
			<td>Nomor HP</td>
			<td>088217762015</td>
		</tr>
	</tbody>
</table> 
@endsection