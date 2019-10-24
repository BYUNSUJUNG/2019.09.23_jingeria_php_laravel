<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;

class MenusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $menus = Menu::all();
      return view('menus.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('menus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'user_id'=> 'required|integer',
        'title'=>'required',
        'file'=>'required',
        'content'=>'required',
        'price'=> 'required|integer'
      ]);
      $menus = new Menu([
        'user_id' => $request->get('user_id'),
        'title' => $request->get('title'),
        'file' => $request->get('file'),
        'content' => $request->get('content'),
        'price' => $request->get('price')
      ]);
      $menus->save();
      return redirect('/menus')->with('success', 'Stock has been added');
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
        $menu = Menu::find($id);

        return view('menus/edit', compact('menu'));
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
          $request->validate([
            'user_id'=> 'required|integer',
            'title'=>'required',
            'file'=>'required',
            'content'=>'required',
            'price'=> 'required|integer'
          ]);
    
          $menu = menu::find($id);
          $menu->user_id = $request->get('user_id');
          $menu->title = $request->get('title');
          $menu->file = $request->get('file');
          $menu->content = $request->get('content');
          $menu->price = $request->get('price');
          $menu->save();
    
          return redirect('/menus')->with('success', 'Stock has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
         $menu = Menu::find($id);
         $menu->delete();
    
         return redirect('/menus')->with('success', 'Stock has been deleted Successfully');
    }
    
}