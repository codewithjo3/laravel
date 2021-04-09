<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\BookModel;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("book");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $getbookname=request("bname");
        $getbooktitle=request("btitle");
        $getbookauthor=request("bauthor");
        $getdescription=request("bdescription");
        $getdistributor=request("bdistributor");
        $getprice=request("bprice");


        echo $getbookname;
        echo $getbooktitle;
        echo $getbookauthor;
        echo $getdescription;
        echo $getdistributor;
        echo $getprice;

        $book=new BookModel();
        
        $book->bname=$getbookname;
        $book->btitle=$getbooktitle;
        $book->bauthor=$getbookauthor;
        $book->bdesc=$getdescription;
        $book->bdist=$getdistributor;
        $book->bprice=$getprice;


        $book->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
