<?php

namespace App\Http\Controllers;

use id;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => ['required'],
            'caption' => ['required'],
            'image' => ['required'],
        ]);
        
        $imagePath = $this->storeImage($request->file('image'));

        Post::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'caption' => $request->caption,
            'image' => $imagePath

        ]);
        return redirect()->route('home');
    }
    public function storeImage($file): string{
        $fileName = rand() . $file->getClientOriginalName();
        $file->move('upload', $fileName);
        return "/upload/" . $fileName;
    }

    // public function sunting($id){
    //     $post=Post::find($id);
    //     return view('sunting',compact('data'));
    // }
    public function delete($id){
        $data=Post::find($id);
        $data->delete();
        return redirect('home');
    }
}
