@extends('admin.layouts.app')

@section('title', 'Larablog | Posting')

@section('head')
  <link rel="stylesheet" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('main-content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tabel Posting
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

     <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Data Postingan</h3>
            </div>
            @include('includes.messages')
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Sub Judul</th>
                  <th>Slug</th>
                  {{-- <th style="width: 20%">Konten</th> --}}
                  <th style="text-align: center;">Gambar</th>
                  <th>Created At</th>
                  <th style="text-align: center;">Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($posts as $post)
                  <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $post->judul }}</td>
                    <td>{{ $post->subjudul }}</td>
                    <td>{{ $post->slug }}</td>
                    {{-- <td>{{ substr($post->konten, 0,50) }}</td> --}}
                    <td style="text-align: center; width: 15%"><img src="{{ Storage::disk('local')->url($post->image) }}" alt="" style="width: 25%;height: 15%"></td>
                    <td>{{ $post->created_at }}</td>
                    <td style="text-align: center;">
                      <a href="{{ route('post.show', $post->id) }}" class="btn btn-success"><i class="fa fa-eye"></i> View</a>
                      
                      <a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>

                      <form action="{{ route('post.destroy',$post->id) }}" method="post" style="display: inline;" onsubmit="return confirm('Kamu yakin ingin menghapus?')">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                      <button class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
                      </form>
                    </td>
                  </tr>
                    
                  @endforeach
                </tbody>

              </table>
                  <a href="{{ route('post.create') }}" class="btn btn-success"><i class="fa fa-pencil"></i> Tambah</a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

@section('footer')
  <script src="{{ asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

  <script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

@endsection