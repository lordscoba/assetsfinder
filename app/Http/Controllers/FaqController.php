<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Faq;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $users = User::all();
        // $faqs = Faq::paginate(5);
        $faqs = Faq::all();

        return view('admin.faqs.index', [
            'faqs' => $faqs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.faqs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required|unique:faqs',
            'body' => 'required|unique:faqs',
            
        ]);

        $faqs = Faq::create([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
        ]);
        return redirect('/admin/faqs');
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
        return view('admin.faqs.edit', [
            'faqs' => Faq::findOrFail($id)
        ]);
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
        $request->validate([
        
            'title' => 'required|unique:faqs,title',
            'body' => 'required|unique:faqs,body',
            
        ]);


        $faqs = Faq::where('id', $id)
        ->update([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            
        ]);
        return redirect('/admin/faqs');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {

        //
        $faq->delete();
        // return redirect()->route('faqs.index')
        // ->withSuccess(__('faq delete successfully.'));
    }
}
