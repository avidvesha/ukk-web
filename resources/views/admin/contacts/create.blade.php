@extends('layouts.app')
@section('title', 'Avidvesha | Add New Book')
@section('content')
    <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                @if ($errors->any())
                                <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @endif
                                <div class="card">

                                    <div class="card-header">
                                        <strong>Form Tambah</strong> Data Buku
                                    </div>


                                    <div class="card-body card-block">
                                        <form action="{{ route('buku.store')}}" enctype="multipart/form-data" method="post">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Judul Buku</label>
                                                <input type="text" id="inputjudul" name="judul" placeholder="" class="form-control" value="{{ old('judul') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Pengarang</label>
                                                <input type="text" id="inputpengarang" name="pengarang" placeholder="" class="form-control" value="{{ old('pengarang') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Penerbit</label>
                                                <input type="text" id="inputpenerbit" name="penerbit" placeholder="" class="form-control" value="{{ old('penerbit') }}">
                                            </div>
                                            {{-- <div class="form-group">
                                                <label for="image">Image</label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="gambar" name="gambar"
                                                        onchange="previewImage()">
                                                    <label class="custom-file-label" for="image">Choose file</label>
                                                </div>
                                            </div> --}}
                                            <div class="form-group">
                                                <div class="col col-md-3">
                                                    <label for="image" class=" form-control-label">File input</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="image" name="image" class="form-control">
                                                </div>
                                            </div>

                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary btn-sm ">
                                                    <i class="fa fa-dot-circle-o"></i> Tambah
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        {{-- <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Judul Buku</th>
                                                <th>Pengarang</th>
                                                <th>Penerbit</th>
                                                <th>Gambar</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($books as $index => $book)
                                            <tr>
                                                <td>{{ $index + 1}}</td>
                                                <td>{{ $book->judul}}</td>
                                                <td>{{ $book->pengarang}}</td>
                                                <td>{{ $book->penerbit}}</td>
                                                <td>{{ $book->gambar}}</td>
                                                <td>
                                                    <a href="{{ route('contacts.edit', $book->id)}}"><i class="fas fa-edit"></i></a>
                                                    |
                                                    <a href="{{ route('contacts.destroy', $book->id)}}"><i class="fas fa-trash" style="color: red"></i></a>

                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{ $books->links() }}
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div> --}}
                        
                    </div>
                </div>
            </div>
@endsection