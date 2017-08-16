@extends('master')


@section('content')

@foreach ($getNews as $news)

  <div class="grids">
      <div class="msingle-grid box">
          <div class="grid-header">
              <h3></h3>
              <ul>
              <li><span>Post By Admin on sunday,March 05,2013 width</span></li>
              <li><a href="#">5 comments</a></li>
              </ul>
          </div>

          <div class="singlepage">
              <img src="/news/images/{{$news->id}}_cover_image.jpg" alt="Generic placeholder image">
              <div class="single">
                  <h2>{{$news->title}}</h2>
              </div>
              <p>{!!File::get("news/file/{$news->id}_news.txt")!!}</p>
              <div class="clearfix"> </div>
          </div>



          {{-- <div class="best-review">
              <h4>Best Reader's Review</h4>
              <p>Excellent Movie and great performance by Lorem, one of the finest thriller of recent  like Aldus PageMaker including versions of Lorem Ipsum.</p>
              <p><span>Neeraj Upadhyay (Noida)</span> 16/03/2015 at 12:14 PM</p>
          </div>
          <div class="story-review">
              <h4>REVIEW:</h4>
              <p>So,Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          </div> --}}
      </div>

          <div class="clearfix"> </div>
  </div>

  <ul class="comment-list">
      <h4>All Comments</h4>
      <hr>
      @foreach ($getComment as $comment)
          @if (count($comment) < 1)
              <li>No comment Yet</li>
          @endif

          <li style=" padding: 10px; border-radius: 10px; box-shadow: 0 0 5px #aaa">
              <b>{{$comment->name}} :</b><br />
              {{$comment->comment}}
          </li>
          <br>
      @endforeach
     <div class="clearfix"></div>
  </ul>

   <div class="content-form">
       <h3>Leave a comment</h3>
      <form method="post" action="/news/comment">
          {{ csrf_field() }}
          <input type="hidden" name="newsId" value="{{$news->id}}" />
          <input type="text" name="name" placeholder="Name" required />
          <input type="text" name="email" placeholder="Email" required />
          <textarea placeholder="Message" name="comment"></textarea>
          <input type="submit" value="SEND"/>
      </form>
  </div>

  @endforeach
@endsection
