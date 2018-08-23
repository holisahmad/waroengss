@extends('layouts.fronted')
@section('title', 'Seputar Berita Waroeng SS')
@section('content')

  <!--===| About Us Banner Start|===-->
  <section class="banner-wrapper about-banner">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h1>Berita Perusahaan</h1>
          <p>Waroeng Spesial Sambal SS</p>
        </div>
      </div>
    </div>
  </section>
  <!--===| About Us Banner End|===-->

<!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Anak IT -  Table Kontak</h1>
            @if(Session::has('alert-success'))
                <div class="alert alert-success">
                    <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
                </div>
            @endif
            <hr>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Judul Berita</th>
                    <th>Header Berita</th>
                    <th>Isi Berita</th>
                    <th>Kategori Berita</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($data as $datas)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $datas->judul }}</td>
                        <td>{{ $datas->header }}</td>
                        <td>{{ $datas->isi }}</td>
                        <td>{{ $datas->kelompok }}</td>
                        <td>
                            <form action="{{ route('berita.destroy', $datas->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="{{ route('berita.edit',$datas->id) }}" class=" btn btn-sm btn-primary">Edit</a>
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->

@endsection
