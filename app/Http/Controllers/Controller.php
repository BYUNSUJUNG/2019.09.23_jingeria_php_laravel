<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Menu;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function main(Request $request) {
		return view('main');
    }
    public function about(Request $request) {
		return view('about');
    }

    public function menu(Request $request) {
      $menus = Menu::all();
      return view('menus.index', compact('menus'));
    }

    public function menuBurger(Request $request) {
		return view('menus.burger');
    }
    public function menuChicken(Request $request) {
		return view('menus.chicken');
    }
    public function menuView(Request $request) {
		return view('menus.view');
    }
/*
    public function index()
    {
      $menus = Menu::all();
      return view('menus.index', compact('menus'));
    }
*/
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function menuCreate()
    {
       return view('menus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function menuStore(Request $request)
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
      return redirect('/menu')->with('success', 'Stock has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function menuShow($id)
    {

      $menu = Menu::find($id);

      return view('menus.view', compact('menu'));
  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function menuEdit($id)
    {
        $menu = Menu::find($id);

        return view('menus.edit', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function menuUpdate(Request $request, $id)
    {
          $request->validate([
            'user_id'=> 'required|integer',
            'title'=>'required',
            'file'=>'required',
            'content'=>'required',
            'price'=> 'required|integer'
          ]);
    
          $menus = menu::find($id);
          $menus->user_id = $request->get('user_id');
          $menus->title = $request->get('title');
          $menus->file = $request->get('file');
          $menus->content = $request->get('content');
          $menus->price = $request->get('price');
          $menus->save();
    
          return redirect('/menu')->with('success', 'Stock has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function menuDestroy($id)
    {
         $menus = Menu::find($id);
         $menus->delete();
    
         return redirect('/menu')->with('success', 'Stock has been deleted Successfully');
    }
    
    
}

