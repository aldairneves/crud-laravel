<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\ModelBook;
use App\Models\User;
use App\Http\Requests\BookRequest;

class BookController extends Controller
{
    public function index()
    {
        $book=ModelBook::all();
        // dd ($book);
        return view('book.index',['book' => $book]);
    }

    public function create()
    {
        return view('book.create');
    }
    public function store(Request $request)
    {
        ModelBook::create($request->all());
        return redirect()->route('book-index');
    }
    public function edit($id)
    {
        $book = ModelBook::where('id',$id)->first();
        if(!empty($book))
        {
            return view('book.edit', ['book'=>$book]);
        }
        else
        {
            return redirect()->route('book-index');
        }
    }
    public function update(Request $request, $id)
    {
        // dd($id);
        $data = [
            'title' => $request->title,
            'id_user' => $request->id_user,
            'pages' => $request->pages,
            'price' => $request->price,
        ];
        ModelBook::where('id', $id)->update($data);
        return redirect()->route('book-index');
}
    public function destroy($id)

      {
        ModelBook::where('id', $id)->delete();
         return redirect()->route('book-index');
      }
 }