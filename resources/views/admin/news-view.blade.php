@extends('admin.master')

@section('content')
<style type="text/css">
    .news-item {
        padding: 10px;
        box-shadow: 0 0 10px #ccc;
    }
    .news-item img {
        width: 100%;
    }
    .news-item h1 {
        color: red;
    }
    .news-item p {
        font-size: 1.4em;
        line-height: 1.8em;
    }
    .news-item .status {
        padding: 10px 0;
    }

</style>

    <div class="right_col" role="main">
      <div class="">
        <div class="page-title">
          <div class="title_left">

@foreach($getNews as $news)
            <a href="/admin">Admin</a>
            <a href="/admin/news"> > News</a>
            <a href="{{URL::route('news.show', ['l' => $news->news_link, 'id' => $news->id,])}}"> > {{$news->title}}</a><br />

            <h3 style="display:inline-block;">Today's News &nbsp;&nbsp;&nbsp; |  &nbsp;&nbsp;&nbsp;  </h3>

            <a href="/admin/news/new" class="btn btn-sm btn-info">Create New News</a>
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



        <div class="x_content">



            <div class="col-md-12 news-item">

                <div class="status row">
                    <div class="col-md-6">
                        <a href=""><i class="fa fa-eye"></i> Total View: 130</a>
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        <a href=""><i class="fa fa-thumbs-o-up"></i> Total Like: 130</a>
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        <a href=""><i class="fa fa-commenting-o"></i> Total Comment: 130</a>
                    </div>

                    <div class="col-md-6">
                        <a href="{{URL::route('news.edit', ['l' => $news->news_link, 'id' => $news->id,])}}"><i class="fa fa-edit"></i> Edit News</a>
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        <a href="{{URL::route('news.destroy', ['id' => $news->id,])}}"><i class="fa fa-trash"></i> Delete News</a>
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        <a href=""><i class="fa fa-shopping-basket"></i> Move TO Draft</a>
                    </div>
                </div>
                <div class="clearfix"></div>

                <img src="/news/images/{{$news->id}}_cover_image.jpg" alt="Generic placeholder image">
                <h1>{{$news->title}}</h1>
                <p>{!!File::get("news/file/{$news->id}_news.txt")!!}</p>
            </div>
@endforeach

         </div>









        </div>
    </div>
  <!-- /page content -->
@endsection
