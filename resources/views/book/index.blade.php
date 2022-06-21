@extends('template.tema')

@section('content')


    <div clas="row">
         <h1 class="text-center">CRUD</h1>
        </div>
        <div class="col-sm-6">
            <a href="{{ route('book-create') }}" class="btn btn-success">NOVO</a>
        </div>
        </div>
   

    <div class="col-8 m-auto">
    <table class="table table-dark table-hover">
            <thead class="thead-dark">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Titulo do Livro</th>
        <th scope="col">Ano</th>
        <th scope="col">Páginas</th>
        <th scope="col">Preço</th>
        <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($book as $books)
        <tr>
            <th>{{ $books->id }}</th>
            <th>{{ $books->title }}</th>
            <th>{{ $books->id_user }}</th>
            <th>{{ $books->pages }}</th>
            <th>{{ $books->price }}</th>
            <th><a href="{{ route('book-edit', ['id'=>$books->id]) }}"><script src="https://cdn.lordicon.com/xdjxvujz.js"></script><lord-icon
                src="https://cdn.lordicon.com/bxxnzvfm.json"
                trigger="loop"
                delay="800"
                style="width:32px;height:32px"></lord-icon>
            </a>

                <form action="{{ route('book-destroy', ['id'=>$books->id]) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" >Delete</button>
                </form>
            </th>
        </tr>
      @endforeach
    </tbody>
    </table>