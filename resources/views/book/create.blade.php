@extends('template.tema')

@section('content')
<div class="container">
<h1 class="text-center">CADASTRAR</h1>
    <form action="{{ route('book-store') }}" method="POST">
    @csrf
     <div class= "form-group">
        <div class= "form-group">
            
            <input type="text" class="form-control" name="title" placeholder="Titulo">
        </div>

        <div class= "form-group">
           
            <input type="text" class="form-control" name="id_user" placeholder="Ano">
        </div>

        <div class= "form-group">
            
            <input type="text" class="form-control" name="pages" placeholder="páginas">
        </div>
    
        <div class= "form-group">
           
            <input type="text" class="form-control" name="price" placeholder="Preço">
        </div>

        <div class= "form-group">
            <input type="submit" name="submit" class="btn btn-primary" value="SALVAR">
        </div>

    </div>
</form>
</div>
@endsection
