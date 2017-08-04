@extends('admin.master')

@section('content')
    <script type="text/javascript" src="/admin-themes/js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript" src="/admin-themes/js/tinymce/tinymce-init.js"></script>


    <!-- page content -->
    <div class="right_col" role="main">
      <div class="">
        <div class="page-title">
          <div class="title_left">
            <h3 style="display:inline-block;">Create New News &nbsp;&nbsp;&nbsp; |  &nbsp;&nbsp;&nbsp;  </h3>

            <a href="" class="btn btn-sm btn-info">View Today's News</a>
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

        <form>
            <div class="x_panel">



                <div class="form-group">
                    <label for="fullname">News Heading * :</label>
                    <input type="text" id="fullname" class="form-control" name="fullname" required="">
                </div>

                <div class="form-group">
                    <label for="heard">News Category *:</label>
                    <select name="category" id="heard" class="form-control" required="">
                        <option value="">Choose..</option>
                        <option value="press">Press</option>
                        <option value="net">Internet</option>
                        <option value="mouth">Word of mouth</option>
                    </select>
                </div>


                <div class="form-group">
                    <textarea id="news-content" name="news-content" class="tinymce form-control"></textarea>
                </div>


                <div class="form-group">
                   <input type="radio" name="status" value="1" class="js-switch" checked> Publish Now
                     &nbsp;
                     &nbsp;
                     &nbsp;
                    <input type="radio" name="status" value="0" class="js-switch" > Save To Draft

                    <br />
                    <br />

                    <input class="btn btn-lg btn-primary" type="submit" name="submit" value="Create News">
                </div>

            </div>
        </form>


        </div>




      </div>
    </div>
    <!-- /page content -->

@endsection
