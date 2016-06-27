<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Page;

class PagesController extends Controller
{
    //
    public function index(){
    	$datas = Page::orderBy('id', 'ASC')->paginate(3);
    	return view('page.show')->with('datas',$datas);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.add');
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request){
        $add = new Page();
        $add->title = $request['title'];
        $add->description = $request['description'];
        $add->save();
       return redirect()->to('page/index');
     }

      /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
      public function edit($id){
        $editpage = Page::where('id',$id)->first();
        return view('page.edit')->with('editpage',$editpage);
      }

       /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
       public function update(Request $request, $id){
            $update= Page::where('id',$id)->first();
            $update->title = $request['title'];
            $update->description = $request['description'];
            $update->update();
            return redirect()->to('page/index');
       }

        /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = Page::find($id);
        $hapus->delete();
        return redirect()->to('page/index');
    }


}
