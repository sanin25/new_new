<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Page;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        return view('admin/index');
    }
    public function add(Request $request){
        if ($request->isMethod('post')) {
           $title =  $request->title;
           $descr =  $request->descr;;
           $slug =  $request->slug;
           $catid =  $request->selectcat;
           $check =  $request->check;

            $page = new Page;

            $page->title = $title;
            $page->descr = $descr;
            $page->slug = $slug;
            $page->cat_id = $catid;
            $page->act = $check;

            $page->save();
        }
        return view('admin/add');
    }
}
