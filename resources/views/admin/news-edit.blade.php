@extends('admin.master')

@section('content')

<style type="text/css">
.input-group-addon {
    text-align: center;
    background-color: transparent;
    border: 1px solid transparent;
    border-radius: 1px;
}
.input-group-addon, .input-group-btn {
   width: 10%;
}
</style>

{{-- {{dd($ctg)}} --}}

    <script type="text/javascript" src="/admin-themes/js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript" src="/admin-themes/js/tinymce/tinymce-init.js"></script>


    <!-- page content -->
    <div class="right_col" role="main">
      <div class="">
        <div class="page-title">
          <div class="title_left">

@foreach ($getNews as $news)

            <a href="/admin">Admin</a>
            <a href="/admin/news"> > News</a>
            <a href="{{URL::route('news.edit', ['l' => $news->news_link, 'id' => $news->id,])}}"> > {{$news->title}}</a><br />


            <h3 style="display:inline-block;">News Edit & Update &nbsp;&nbsp;&nbsp; |  &nbsp;&nbsp;&nbsp;  </h3>

            <a href="/admin/news" class="btn btn-sm btn-info">View Today's News</a>
          </div>

          <div class="title_right">
            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>





    <div class="col-md-12 col-sm-12 col-xs-12">



        <form method="post" action="{{URL::route('news.update')}}" enctype="multipart/form-data">
          {{csrf_field()}}
          <input type="hidden" name="id" value="{{$news->id}}">
            <div class="x_panel">



                <div class="form-group row">
                    <label for="title">News Heading * :</label>
                    <input type="text" id="title" class="form-control" name="title" value="{{$news->title}}">
                </div>

                <div class="form-group row">
                    <label for="cover_image">Cover Image * : <img src="/news/images/{{$news->id}}_cover_image.jpg" alt="Generic placeholder image" width="50"></label>
                    <input type="file" id="cover_image" class="form-control" name="cover_image">
                </div>

                <div class="form-group row input-group">
                      <label for="heard">News Category *:</label>
                      <select name="category" id="category" class="form-control">
                          <option value="">Choose..</option>
                          @foreach($ctg as $ctg)
                          <option value="{{$ctg->id}}" {{($news->categories_id == $ctg->id)? "selected" : ""}}>{{$ctg->name}}</option>
                          @endforeach
                      </select>

                      <span class="input-group-addon">
                        <button type="button" class="btn btn-sm btn-primary btn-lg" data-toggle="modal" data-target="#news_cat">
                          Add New category
                        </button>
                      </span>

                </div>

                <div class="form-group row">
                    <textarea id="content" name="content" class="tinymce form-control">
                        {!!File::get("news/file/{$news->id}_news.txt")!!}
                    </textarea>
                </div>


                <div class="form-group">
                   <input type="radio" name="status" value="1" checked> Publish Now
                     &nbsp;
                     &nbsp;
                     &nbsp;
                    <input type="radio" name="status" value="0" > Save To Draft

                    <br />
                    <br />

                    <input class="btn btn-lg btn-primary" type="submit" name="submit" value="Update News">
                </div>

            </div>
        </form>
@endforeach


        <!-- Modal for add category -->
        <div class="modal fade" id="news_cat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <form method="post" action="/admin/category/new">
                  {{csrf_field()}}
                    <div class="input-group">
                      <input class="form-control" name="name" type="text" id="category" placeholder=" Category Name" required />
                      <span class="input-group-addon"><input type="submit" class="btn btn-primary" value="Add Category"/></span>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>


        </div>




      </div>
    </div>
    <!-- /page content -->



@endsection
