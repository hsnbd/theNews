<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\News;
use App\Comments;

class PublicNewsController extends Controller
{
  public function __construct()
  {
    \View::share('allData', $this->CallRaw("home"));
  }
  public function index()
  {
      // $allData = $this->CallRaw("home");
      // dd($allData[0]);
      return view('index');
  }
  public static function CallRaw($procName, $parameters = null, $isExecute = false)
  {
        $syntax = '';
        for ($i = 0; $i < count($parameters); $i++) {
          $syntax .= (!empty($syntax) ? ',' : '') . '?';
        }
        $syntax = 'CALL ' . $procName . '(' . $syntax . ');';

        $pdo = DB::connection()->getPdo();
        $pdo->setAttribute(\PDO::ATTR_EMULATE_PREPARES, true);
        $stmt = $pdo->prepare($syntax, [\PDO::ATTR_CURSOR => \PDO::CURSOR_SCROLL]);
        for ($i = 0; $i < count($parameters); $i++) {
          $stmt->bindValue((1 + $i), $parameters[$i]);
        }
        $exec = $stmt->execute();
        if (!$exec)
          return $pdo->errorInfo();
        if ($isExecute)
          return $exec;

        $results = [];
        do {
          try {
            $results[] = $stmt->fetchAll(\PDO::FETCH_OBJ);
          } catch (\Exception $ex) {

          }
        } while ($stmt->nextRowset());


        if (1 === count($results))
          return $results[0];
        return $results;
    }


    public function view(Request $request)
    {
      // $allData = \View::share('allData', $this->CallRaw("home"));
      $getNews = DB::table('news')->where('id', $request->id)->get();
      $title = $getNews[0]->title;

      $getComment = DB::table('comments')->where('newsId', $request->id)->get();
    //   dd($getComment);
      return \View::make("single-news", compact("getNews", "title", "getComment"));
    }

    public function storeComment(Request $request)
    {
        $this->validate($request,
        [
          "name" => "required",
          "email" => "required",
          "comment" => "required"
      ]);

      $data = array(
          "newsId" => $request->newsId,
          "name" => $request->name,
          "email" => $request->email,
          "comment" => $request->comment
        );

       Comments::create($data);

       return redirect()->back();
    }
}
