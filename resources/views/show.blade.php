<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    @include('partials/css')

</head>
<body>
    <div class="main-content">

        <div class="container">
            <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h3>{{ $book->judul }}</h3>
                </div>
                <div class="card-body">
                    <img src="{{Storage::url($book->image)}}" alt="{{ $book->judul }}" class="img-thumbnail"
                        style="max-width: 300px;">
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <h3 class="mt-3">Judul :</h3>
                            </div>
                            <div class="col-12 col-md-9">
                                <h3 class="mt-3">{{ $book->judul }}</h3>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <p class="mt-3">Pengarang :</p>
                            </div>
                            <div class="col-12 col-md-9">
                                <p class="mt-3">{{ $book->pengarang }}</p>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <p class="mt-3">Penerbit :</p>
                            </div>
                            <div class="col-12 col-md-9">
                                <p class="mt-3">{{ $book->penerbit}}</p>
                            </div>
                        </div>
                </br>
                <a href="{{ route('buku.public.index') }}" class="btn btn-secondary">Kembali</a>
                
            </div>
            
        </div>
    </div>
    
</div>
</div>
</div>
</body>
</html>