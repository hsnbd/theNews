<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Categories;

class CategoriesController extends Controller
{

  public function store(Request $request)
  {
    $this->validate($request, [
      "name" => "required|min:2|max:100"
    ]);
    $data = array(
        "name" => $request->name
      );
    Categories::create($data);
    return redirect("/admin/news/new")->with("message", "Category Add Successful");;
  }

}

?>
