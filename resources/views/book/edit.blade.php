@extends('template.tema')

@section('content')
<div class="container">
<h1 class="text-center">Editar</h1>
    <form action="{{ route('book-update',['id' => $book->id] ) }}" method="POST">
    @csrf
    @method('PUT')
     <div class= "form-group">
        <div class= "form-group">
            
            <input type="text" class="form-control" name="title" value="{{ $book->title}}" placeholder="Titulo">
        </div>

        <div class= "form-group">
           
            <input type="text" class="form-control" name="id_user" value="{{ $book->id_user}}" placeholder="Ano">
        </div>

        <div class= "form-group">
            
            <input type="text" class="form-control" name="pages" value="{{ $book->pages}}" placeholder="páginas">
        </div>
    
        <div class= "form-group">
           
            <input type="text" class="form-control" name="price" value="{{ $book->price}}" placeholder="Preço">
        </div>

        <div class= "form-group">
            <input type="submit" name="submit" class="btn btn-success" value="Atualizar" />
        </div>

    </div>
</form>
</div>
@endsection
