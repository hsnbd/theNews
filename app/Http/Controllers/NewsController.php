<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function index()
    {
      $allNews = DB::table('news')->get();
      // dd($allNews);
      return view("admin.news-all", compact('allNews'));
    }

    public function show(Request $request)
    {
      // dd($request->id);
      $getNews = DB::table('news')->where('id', $request->id)->get();
      return view("admin.news-view", compact("getNews"));
    }


    public function create()
    {
      $ctg = DB::table('categories')->get();
      return view("admin.news-new", compact("ctg"));
    }


    public function store(Request $request)
    {
      // dd($request->title, $request->category,$request->content, $request->status);
      $this->validate($request,
      [
        "title" => "required|min:5|max:250",
        "category" => "required",
        "cover_image" => "required",
        "content" => "required",
        "status" => "required"
      ],
      [
          //Custom Validation Message
          'title.required' => 'News Heading Is Importent For Every News',
          'category.required' => 'News Category Required For Well Documention',
          'cover_image.required' => 'Cover Photo Must Be Upload',
          'content.required' => 'Your News Box Is Blank. Please Fill This Field'
      ]
    );

      $news_link = strtolower(preg_replace('/\s+/', '-', $request->title));

      $img = $request->file('cover_image');
        $ext = "";
        if ($img) {
          $ext = strtolower($img->getClientOriginalExtension());
          if ($ext != "jpg" && $ext != "png" && $ext != "gif" && $ext != "jpeg") {
            $ext != "";
          }
        }

      $data = array(
          "categories_id" => $request->category,
          "title" => $request->title,
          "news_link" => $news_link,
          "news_file_link" => "temp_link",
          "img_link" => "temp_link"
        );

      $id = News::create($data)->id;

      if ($ext) {
        $img->move("news/images/", "{$id}_cover_image.{$ext}");
      }
      \File::put("news/file/{$id}_news.txt" , $request->content);

      return redirect("/admin/news/new")->with("message", "News Create Successful");;
    }


    public function destroy($id)
    {

      if(file_exists("news/images/{$id}_cover_image.jpg"))
          unlink("news/images/{$id}_cover_image.jpg");

      if(file_exists("news/file/{$id}_news.txt"))
          unlink("news/file/{$id}_news.txt");


      if(DB::table('news')->where('id', $id)->delete())
          return redirect("/admin/news")->with("message", "Delete Successful");

      return back()->with("message","Something Wrong!!");
    }
}
