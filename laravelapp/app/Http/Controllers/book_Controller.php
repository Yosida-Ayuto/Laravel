<?php

namespace App\Http\Controllers;
use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Valiidator;
use Illuminate\Http\Request\BookRequest;

class book_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $items = DB::table('books')->simplePaginate(5);
        return view('book.index',['items'=>$items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     */

    public function add()
    {
        return view ('book.add');
    } 

    public function create(Request $request)
    {
        $this->validate($request,Book::$rules);
        $book = new Book;
        $form = $request ->all();
        unset ($form['_token']);
        $book->fill($form)->save();
        return redirect('/book');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
         $book= Book::find($request->id);
        return view('book.edit',['form'=>$book]);
   }
    public function update(Request $request)
    {
        $this->validate($request,Book::$rules);
        $book =Book::find($request->id);
        $form = $request ->all();
        unset ($form ['_token']);
        $book->fill($form)->save();
        return redirect('/book');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
         $book= Book::find($request->id);
        return view('book.del',['form'=>$book]);
   }

    public function destroy(Request $request)
    {
        Book::find($request->id)->delete();
        return redirect('/book');
   }

}
