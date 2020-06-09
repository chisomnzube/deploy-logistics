<?php

namespace App\Http\Controllers;


use App\Comment;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post;
use Illuminate\Support\Facades\Storage;
use TCG\Voyager\Facades\Voyager;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (request()->category) 
            {
                $category = Category::where('slug', request()->category)->firstOrFail();
                $posts = Post::where('category_id', $category->id)->where('status', 'PUBLISHED')->orderBy('id', 'desc')->paginate(6);
            }else
                {
                    $posts = Post::orderBy('id', 'desc')->paginate(6);
                }

        return view('blog-index')->with([
                    'posts' => $posts,
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
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->where('status', 'PUBLISHED')->firstOrFail();
        $comments = Comment::where('post_id', $post->id)->where('ref', 0)->orderBy('id', 'desc')->get()->take(6);
        $posts = Post::where('status', 'PUBLISHED')->orderBy('id', 'desc')->get()->take(4);
        //$posts = Post::all()->sortByDesc('id')->take(4);
        $categorys = Category::all();

        return view('blog-single')->with([
                    'post' => $post,
                    'comments' => $comments,
                    'posts' => $posts,
                    'categorys' => $categorys,
                ]);
    }

    public function search(Request $request)
        {
            $request->validate([
                'post' => 'required|min:3',
            ]);

            $search = $request->input('post');

            $posts = Post::search($search)->where('status', 'PUBLISHED')->paginate(6);                     


            return view('search-blog')->with([
                    'posts' => $posts,
                    'search' => $search,
                ]);
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function download($id)
    {
        $dl = Post::find($id);
        $path = json_decode($dl->document)[0]->download_link;
        //return Response::download('http://www.iknowbakerr.com/storage/'.$path);

       // return response()->download('http://www.iknowbakerr.com//storage/'.$path);
       
       return Storage::disk('public')->download($path);
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
