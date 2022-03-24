<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostValidationRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        $categories = Category::all();
        
        return view('front.pages.posts', compact(['posts', 'categories']));
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostValidationRequest $request)
    {
        // dd(Auth::id());
        $userId = Auth::id();
        
        $request->validated();
        
        // dd($request->status);
        if(isset($request->image)) {
            $imgName = time().$request->image->getClientOriginalName();
            $request->image->move(public_path('images'), $imgName);
        }else{
            $imgName=NULL;
        }

        Post::create([
            'title' => $request->input('title'),
            'user_id' => $userId,
            'category_id' => $request->category,
            'image' => $imgName,
            'description' => $request->input('description') ,
            'status' => $request->status,
            'position' => NULL,
            ]
        );
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($title)
    {
        $post = Post::where('slug',$title)->first();
        
        return view('front.pages.single-post', compact('post'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('post.edit', compact('post'));
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
        $post = Post::findOrFail($id);

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'image' => ['mimes:jpg,png,jpeg', 'max:6048'],  
            'status' => ['string'] ,     
        ]);

        if(isset($request->image)) {
            $imgName = time().$request->image->getClientOriginalName();
            $request->image->move(public_path('images'), $imgName);
            $validatedData['image'] = $imgName;
        }
        
        $post->update($validatedData);

        return redirect('/post');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        $post->delete();

        return redirect('/post');
    }
}
