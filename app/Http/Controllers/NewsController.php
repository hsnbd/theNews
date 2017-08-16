<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function index()
    {
      return view("admin.news-all")
          ->with('allNews', DB::table('news')->get())
          ->with('title', "View Today's News");
    }

    public function show(Request $request)
    {
      // if($request->ajax()) {
      //       return view('viewing_times.view_times',compact('viewing_times','catalogue_sections'))->renderSections()['content'];
      //  }
      // dd($request->id);
      $getNews = DB::table('news')->where('id', $request->id)->get();

      $title = $getNews[0]->title;
      return \View::make("admin.news-view", compact("getNews", "title"));
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

      // $news_link = strtolower(preg_replace('/\s+/', '-', $request->title));
      // $news_link = strtolower(str_replace(' ', '_', $request->title));
      // str_slug()
      $news_link = strtolower(preg_replace('/\s+/u', '-', trim($request->title)));

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

      return redirect("/admin/news/new")->with("message", "News Create Successful");
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

    public function edit(Request $request)
    {
        $ctg = DB::table('categories')->get();
        $getNews = DB::table('news')->where('id', $request->id)->get();

        $title = ucwords($getNews[0]->title);
        return view("admin.news-edit", compact("ctg", "getNews", "title"));
    }

    public function update(Request $request)
    {
      $id = $request->id;
      $this->validate($request,
          [
            "title" => "required|min:5|max:250",
            "category" => "required",
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


      $ext = "";
      if ($request->file('cover_image')) {

        $img = $request->file('cover_image');
        $ext = strtolower($img->getClientOriginalExtension());
        //check valid image
        if($ext != "jpg" && $ext != "png" && $ext != "gif" && $ext != "jpeg") $ext != "";

        //check image
        $imgcheck = glob("news/images/{$id}_cover_image.*");
        if(file_exists($imgcheck[0]))
            unlink($imgcheck[0]);

        //move image to store
        $img->move("news/images/", "{$id}_cover_image.{$ext}");
      }
      //check file
      $filecheck = glob("news/file/{$id}_news.*");
      if(file_exists($filecheck[0]))
          unlink($filecheck[0]);

      //store file
      \File::put("news/file/{$id}_news.txt" , $request->content);


      $data = array(
          "categories_id" => $request->category,
          "title" => $request->title,
          "news_link" => $news_link,
          "news_file_link" => "temp_link",
          "img_link" => "temp_link"
        );

      DB::table('news')->where('id', $id)->update($data);

      return redirect("/admin/news")->with("message", "News Update Successful");
    }

}
