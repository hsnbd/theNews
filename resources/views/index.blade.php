@extends('master')


@section('slider')
    @include('main.slider')
@endsection

@section('content')
  <div class="posts">
      <div class="left-posts">



          <div class="world-news">
              <div class="main-title-head">
                  <h3>from   around   the   world</h3>
                  <a href="singlepage.html">More  +</a>
                  <div class="clearfix"></div>
              </div>
              <div class="world-news-grids">
@foreach($allData[1] as $wNews)
  {{-- a href="{{URL::route('news.show', ['l' => $wNews->news_link, 'id' => $wNews->id,])}}"> --}}
                  <div class="world-news-grid">
                      <img src="/news/images/{{$wNews->id}}_cover_image.jpg" alt="Generic placeholder image">
                      <a href="/news/show/{{$wNews->id}}?l={{$wNews->news_link}}" class="title">
                        {{str_limit($wNews->title, $limit = 40, $end = '...')}}
                      </a>
                      <p>{!!str_limit(strip_tags(File::get("news/file/{$wNews->id}_news.txt")), $limit = 200, $end = '...')!!}</p>
                      <a href="/news/show/{{$wNews->id}}?l={{$wNews->news_link}}">Read More</a>
                  </div>
@endforeach
                  <div class="clearfix"></div>
              </div>
          </div>


          <div class="latest-articles">
              <div class="main-title-head">
                  <h3>latest    articles</h3>
                  <a href="singlepage.html">More  +</a>
                  <div class="clearfix"></div>
              </div>
              <div class="world-news-grids">

@foreach ($allData[0] as $i => $lNews)
                  <div class="world-news-grid">
                      <img src="/news/images/{{$lNews->id}}_cover_image.jpg" alt="Generic placeholder image">
                      <a href="/news/show/{{$lNews->id}}?l={{$lNews->news_link}}" class="title">
                        {{str_limit($lNews->title, $limit = 40, $end = '...')}}
                      </a>
                      <p>{!!str_limit(strip_tags(File::get("news/file/{$lNews->id}_news.txt")), $limit = 200, $end = '...')!!}</p>
                      <a href="/news/show/{{$lNews->id}}?l={{$lNews->news_link}}">Read More</a>
                  </div>
@php
  if($i == 2) break;
@endphp
@endforeach
                  <div class="clearfix"></div>
              </div>
          </div>
          <div class="gallery">
              <div class="main-title-head">
                  <h3>gallery</h3>
                  <a href="#">More  +</a>
                  <div class="clearfix"></div>
              </div>
              <div class="gallery-/main-themes/images">
                  <div class="course_demo1">
                      <ul id="flexiselDemo1">
                          <li>
                              <a href="single.html"><img src="/news/images/15_cover_image.jpg"></a>
                          </li>
                          <li>
                              <a href="single.html"><img src="/news/images/17_cover_image.jpg"></a>
                          </li>
                          <li>
                              <a href="single.html"><img src="/news/images/18_cover_image.jpg"></a>
                          </li>
                          <li>
                              <a href="single.html"><img src="/news/images/20_cover_image.jpg"></a>
                          </li>
                      </ul>
                  </div>
                  <link rel="stylesheet" href="/main-themes/css/flexslider.css" type="text/css" media="screen" />
                  <script type="text/javascript">
                      $(window).load(function() {
                          $("#flexiselDemo1").flexisel({
                              visibleItems: 3,
                              animationSpeed: 1000,
                              autoPlay: true,
                              autoPlaySpeed: 3000,
                              pauseOnHover: true,
                              enableResponsiveBreakpoints: true,
                              responsiveBreakpoints: {
                                  portrait: {
                                      changePoint: 480,
                                      visibleItems: 2
                                  },
                                  landscape: {
                                      changePoint: 640,
                                      visibleItems: 2
                                  },
                                  tablet: {
                                      changePoint: 768,
                                      visibleItems: 3
                                  }
                              }
                          });

                      });
                  </script>
                  <script type="text/javascript" src="/main-themes/js/jquery.flexisel.js"></script>
              </div>
              <div class="course_demo1">
                  <ul id="flexiselDemo">
                      <li>
                          <a href="single.html"><img src="/news/images/21_cover_image.jpg"></a>
                      </li>
                      <li>
                          <a href="single.html"><img src="/news/images/22_cover_image.jpg"></a>
                      </li>
                      <li>
                          <a href="single.html"><img src="/news/images/23_cover_image.jpg"></a>
                      </li>
                      <li>
                          <a href="single.html"><img src="/news/images/24_cover_image.jpg"></a>
                      </li>
                  </ul>
              </div>
              <link rel="stylesheet" href="/main-themes/css/flexslider.css" type="text/css" media="screen" />
              <script type="text/javascript">
                  $(window).load(function() {
                      $("#flexiselDemo").flexisel({
                          visibleItems: 3,
                          animationSpeed: 1000,
                          autoPlay: true,
                          autoPlaySpeed: 3000,
                          pauseOnHover: true,
                          enableResponsiveBreakpoints: true,
                          responsiveBreakpoints: {
                              portrait: {
                                  changePoint: 480,
                                  visibleItems: 2
                              },
                              landscape: {
                                  changePoint: 640,
                                  visibleItems: 2
                              },
                              tablet: {
                                  changePoint: 768,
                                  visibleItems: 3
                              }
                          }
                      });

                  });
              </script>
              <script type="text/javascript" src="/main-themes/js/jquery.flexisel.js"></script>

          </div>
          <div class="tech-news">
              <div class="main-title-head">
                  <h3>tech     news</h3>
                  <a href="singlepage.html">More  +</a>
                  <div class="clearfix"></div>
              </div>
              <div class="tech-news-grids">
                  <div class="left-tech-news">
                      <div class="tech-news-grid span_66">
                          <a href="singlepage.html">Lorem ipsum dolor sit amet conse ctetur adipiscing elit  </a>
                          <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ... </p>
                          <p>by<a href="#">John Doe </a> | 29 comments</p>
                      </div>
                      <div class="tech-news-grid">
                          <a href="singlepage.html">Lorem ipsum dolor sit amet conse ctetur adipiscing elit  </a>
                          <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ... </p>
                          <p>by<a href="#">John Doe </a> | 29 comments</p>
                      </div>
                  </div>
                  <div class="right-tech-news">
                      <div class="tech-news-grid span_66">
                          <a href="singlepage.html">Lorem ipsum dolor sit amet conse ctetur adipiscing elit  </a>
                          <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ... </p>
                          <p>by<a href="#">John Doe </a> | 29 comments</p>
                      </div>
                      <div class="tech-news-grid">
                          <a href="singlepage.html">Lorem ipsum dolor sit amet conse ctetur adipiscing elit  </a>
                          <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor ... </p>
                          <p>by<a href="#">John Doe </a> | 29 comments</p>
                      </div>
                  </div>
                  <div class="clearfix"></div>
              </div>
          </div>
      </div>
      <div class="right-posts">
          <div class="desk-grid">
              <h3>FROM   THE   desk</h3>
              <div class="desk">
                  <a href="singlepage.html" class="title">Lorem ipsum dolor sit amet, consectetur adipiscing elit </a>
                  <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
                  <p><a href="singlepage.html">Read More</a><span>3 hours ago</span></p>
              </div>
              <div class="desk">
                  <a href="singlepage.html" class="title">Lorem ipsum dolor sit amet, consectetur adipiscing elit </a>
                  <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
                  <p><a href="singlepage.html">Read More</a><span>3 hours ago</span></p>
              </div>
              <div class="desk">
                  <a href="singlepage.html" class="title">Lorem ipsum dolor sit amet, consectetur adipiscing elit </a>
                  <p>Nulla quis lorem neque, mattis venenatis lectus. In interdum ullamcorper dolor eu mattis.</p>
                  <p><a href="singlepage.html">Read More</a><span>3 hours ago</span></p>
              </div>
              <a class="more" href="singlepage.html">More  +</a>
          </div>
          <div class="editorial">
              <h3>editorial</h3>
              <div class="editor">
                  <a href="single.html"><img src="/main-themes/images/e1.jpg" alt="" /></a>
                  <a href="single.html">Lorem ipsum dolor sit amet con se cte tur adipiscing elit</a>
              </div>
              <div class="editor">
                  <a href="single.html"><img src="/main-themes/images/e2.jpg" alt="" /></a>
                  <a href="single.html">Lorem ipsum dolor sit amet con se cte tur adipiscing elit</a>
              </div>
              <div class="editor">
                  <a href="single.html"><img src="/main-themes/images/e1.jpg" alt="" /></a>
                  <a href="single.html">Lorem ipsum dolor sit amet con se cte tur adipiscing elit</a>
              </div>
              <div class="editor">
                  <a href="single.html"><img src="/main-themes/images/e3.jpg" alt="" /></a>
                  <a href="single.html">Lorem ipsum dolor sit amet con se cte tur adipiscing elit</a>
              </div>
          </div>
      </div>
      <div class="clearfix"></div>
  </div>

@endsection
