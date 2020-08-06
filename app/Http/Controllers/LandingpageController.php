<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Contact;
use App\FeaturedProject;
use App\NewsSubscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use TCG\Voyager\Models\Post;

class LandingpageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::where('status', 'PUBLISHED')->orderBy('id', 'desc')->get()->take(3);
        $projects = FeaturedProject::all()->sortByDesc('id');

        return view('index')->with([
                    'posts' => $posts,
                    'projects' => $projects,
                ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('about-us');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function whyUs()
    {
        return view('why-us');
    } 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cargo()
    {
        return view('project-cargo');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function agency()
    {
        return view('oem-agency');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function consultancy()
    {
        return view('consultancy');
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
     * Store a newly created resource in storage.
     *
     * @param  int  $postId
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function comment(Request $request, $postId)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email',
            'body' => 'required|string',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        Comment::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'body' => $request->input('body'),
            'post_id' => $postId,
            'ref' => 0,
        ]);

        return back()->with('success_message', 'Thanks for your comment!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  int  $postId
     * @param  int  $commentId
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function commentRef(Request $request, $postId, $commentId)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email',
            'body' => 'required|string',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        Comment::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'body' => $request->input('body'),
            'post_id' => $postId,
            'ref' => $commentId,
        ]);

        return back()->with('success_message', 'Thanks for your comment!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeSubscription(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255|unique:news_subscriptions,email',
        ]);

        NewsSubscription::create([
            'email' => $request->input('email'),
        ]);

        return back()->with('success_message', 'You have successfully subscribed to our NewsLetter!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeContact(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string',
            'body' => 'required|string',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        // to insert main image
        if($request->hasFile('image')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image')->storeAs('public/contact', $fileNameToStore); 
            // resizing an uploaded file            
            //Image::make(Input::file('image'))->resize(890, 593)->save('storage/contact/' . $fileNameToStore); 

            Contact::create([
                'name' => $request->input('name'),
                'phone' => $request->input('phone'),
                'email' => $request->input('email'),
                'body' => $request->input('body'),
                'file' => 'contact/'.$fileNameToStore,
            ]);

        }else
            {                
                Contact::create([
                    'name' => $request->input('name'),
                    'phone' => $request->input('phone'),
                    'email' => $request->input('email'),
                    'body' => $request->input('body'),
                ]);
            }


        return back()->with('success_message', 'Submitted successfully, We will get back to you shortly!');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $name
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function projects($name, $id)
    {
        $project = FeaturedProject::find($id);

        return view('projects-single')->with([
                    'project' => $project,
                ]);
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
