@extends('layout.master') <!-- Ganti 'layout.master' dengan layout yang Anda gunakan -->

@section('judul')
halaman tambah kategori
@endsection

@section('content')

<a href="/kategori/create" class="btn btn-primary btn-sm mb-3">tambah</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">nama</th>
        <th scope="col">action</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($kategori as $key => $value)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $value->nama }}</td>
                <td>
                    <a href="/kategori/{{$value->id}}" class="btn btn-info btn-sm">Detail</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3">Tidak ada data</td>
            </tr>
        @endforelse
    </tbody>
  </table>

@endsection

