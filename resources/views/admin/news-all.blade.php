@extends('admin.master')

@section('content')
<style type="text/css">
    .news-item {
        padding: 10px;
    }
    .news-item a {
        padding: 10px;
        display: inline-block;
        box-shadow: 0 0 15px #ccc;
    }
    .news-item img {
        width: 100%;
    }
    .news-item h4 {
        color: red;
    }
</style>

    <div class="right_col" role="main">
      <div class="">
        <div class="page-title">
          <div class="title_left">
            <h3 style="display:inline-block;">Today's News &nbsp;&nbsp;&nbsp; |  &nbsp;&nbsp;&nbsp;  </h3>

            <a href="{{URL::route('news.create')}}" class="btn btn-sm btn-info">Create New News</a>
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
            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">World News</a>
                    </li>
                    <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">National News</a>
                    </li>
                    <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Tech News</a>
                    </li>
                </ul>

              <div id="myTabContent" class="tab-content">

                <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="row news">

                      @foreach($allNews as $news)
                            <div class="col-md-4 news-item">
                                <a href="{{URL::route('news.show', ['news_link' => $news->news_link, 'id' => $news->id,])}}">
                                    <img src="/news/images/{{$news->id}}_cover_image.jpg" alt="Generic placeholder image">
                                    <h4>{{str_limit($news->title, $limit = 40, $end = '...')}}</h4>
                                    <p>{!!str_limit(strip_tags(File::get("news/file/{$news->id}_news.txt")), $limit = 200, $end = '<span style="color:blue">...Click To Read More</span>')!!}</p>
                                </a>
                            </div>
                      @endforeach

                        </div>
                    </div>
                </div>

                <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="row">

                            <div class="col-md-4 news-item">
                                <a href="">
                                    <img src="http://lorempixel.com/320/120/" alt="Generic placeholder image">
                                    <h4>Hello world This is The Heading!</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                                </a>
                            </div>
                            <div class="col-md-4 news-item">
                                <a href="">
                                    <img src="http://lorempixel.com/320/120/" alt="Generic placeholder image">
                                    <h4>Hello world This is The Heading!</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

                <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="row">


                            <div class="col-md-4 news-item">
                                <a href="">
                                    <img src="http://lorempixel.com/320/120/" alt="Generic placeholder image">
                                    <h4>Hello world This is The Heading!</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                                </a>
                            </div>
                            <div class="col-md-4 news-item">
                                <a href="">
                                    <img src="http://lorempixel.com/320/120/" alt="Generic placeholder image">
                                    <h4>Hello world This is The Heading!</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                                </a>
                            </div>
                            <div class="col-md-4 news-item">
                                <a href="">
                                    <img src="http://lorempixel.com/320/120/" alt="Generic placeholder image">
                                    <h4>Hello world This is The Heading!</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                                </a>
                            </div>
                            <div class="col-md-4 news-item">
                                <a href="">
                                    <img src="http://lorempixel.com/320/120/" alt="Generic placeholder image">
                                    <h4>Hello world This is The Heading!</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
              </div>
            </div>

         </div>









        </div>
    </div>
  <!-- /page content -->
@endsection
