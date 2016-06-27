<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Faq;
class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $datas = Faq::orderBy('id_faq','ASC');
        return view('page.index')->with('datas',$datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('addfaq');
    }
 /**
   *menambah FAQ yang baru
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $add = new Faq();
        $add->judul = $request['judul'];
        $add->content = $request['content'];
        return redirect()->to('page/index');
    }

}
