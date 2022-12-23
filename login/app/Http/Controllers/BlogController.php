<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use DB;


class BlogController extends Controller
{
    public function myblog()
     {
        return view('blog');

    }
    public function store(Request $request)
    {
      
        
        $blog = new Blog();
        $blog->topic = $request->input('topic');
        $blog->subtopic = $request->input('subtopic');
        $blog->image = $request->input('image');
        
       if($request->hasfile('image')){
        $file = $request->file('image');
        $extension = $file->getclientoriginalExtension();
        $filename = time() . '.'. $extension;
        $file->move('uploads/blog/', $filename);
        $blog->image = $filename;
       } else {
        return $request;
        $blog->image = '';
       }
       
       $blog->save();
      /*  Toastr::success('your blog is post :)', 'success'); */ 
       return view('blog')->with('blog',$blog);


    }

    public function display()
    {
      $blog = Blog::all();
      return view('blogpage')->with('blog',$blog);
    }

    public function blogdetails($id)
    {
      $blog =DB::table('blog')->where('id',$id)->first();
      return view('details')->with('blog',$blog);
    }



    public function userblog()
    {
       return view('blog');

   }
   public function userblogs (Request $request)
   {
     
       
       $blog = new Blog();
       $blog->topic = $request->input('topic');
       $blog->subtopic = $request->input('subtopic');
       $blog->image = $request->input('image');
       
      if($request->hasfile('image')){
       $file = $request->file('image');
       $extension = $file->getclientoriginalExtension();
       $filename = time() . '.'. $extension;
       $file->move('uploads/blog/', $filename);
       $blog->image = $filename;
      } else {
       return $request;
       $blog->image = '';
      }

      $blog->save();

      return view('blog')->with('blog',$blog);


   }


 


  public  function blogdashboard()
  {
    $blog = Blog::all();
    if (in_array("admin", $this->guards))
    return view('blogdashboard/login')->with('blog',$blog);
  }

 



    
  public function edit($id)
    {
      $blog =DB::table('blog')->where('id',$id)->first();
      return view('edit',compact('blog'))->with('blog',$blog);
       

   }


    

}
