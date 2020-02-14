<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class MainController extends Controller
{
    public $post;

    public function __construct()
    {
        $this->post = new Post();
    }

    public function index()
    {
        $show = $this->post->showAll();
        return view('home', ['show' => $show]);
    }

    public function admin(Request $request)
    {
        $id = $request->input('id');
        if(isset($id)){
            $show = $this->post->select1($id);
        }else{
            $show = $this->post->showAll();
        }
        
        return view('admin', ['show' => $show]);
    }

    public function insert(Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');
        $this->post->insert1($title, $content);
        return redirect('admin');
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $title = $request->input('title');
        $content = $request->input('content');
        $this->post->update1($id, $title, $content);
        return redirect('admin');
    }

    public function delete(Request $request)
    {
        $id = $request->input('id');
        $this->post->delete1($id);
        return redirect('admin');
    }


}
