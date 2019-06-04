@extends('layouts.app_layout')

@extends('layouts.section_top_nav')
@extends('layouts.section_sidebar')
@extends('layouts.section_footer')

@section('title', 'Gallery')

@section('styles')
  <!-- Add custom styles here -->
  <link rel="stylesheet" href="{{ asset('ace-master/assets/css/colorbox.min.css') }}" />
@endsection

@section('section_content')
<div class="main-content">
  <div class="main-content-inner">
    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
      <ul class="breadcrumb">
        <li>
          <i class="ace-icon fa fa-home home-icon"></i>
          <a href="#">Home</a>
        </li>
        <li class="active">Gallery</li>
      </ul><!-- /.breadcrumb -->

      <div class="nav-search" id="nav-search">
        <form class="form-search">
          <span class="input-icon">
            <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
            <i class="ace-icon fa fa-search nav-search-icon"></i>
          </span>
        </form>
      </div><!-- /.nav-search -->
    </div>

    <div class="page-content">
      <div class="ace-settings-container" id="ace-settings-container">
        <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
          <i class="ace-icon fa fa-cog bigger-130"></i>
        </div>

        <div class="ace-settings-box clearfix" id="ace-settings-box">
          <div class="pull-left width-50">
            <div class="ace-settings-item">
              <div class="pull-left">
                <select id="skin-colorpicker" class="hide">
                  <option data-skin="no-skin" value="#438EB9">#438EB9</option>
                  <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                  <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                  <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                </select>
              </div>
              <span>&nbsp; Choose Skin</span>
            </div>

            <div class="ace-settings-item">
              <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
              <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
            </div>

            <div class="ace-settings-item">
              <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
              <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
            </div>

            <div class="ace-settings-item">
              <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
              <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
            </div>

            <div class="ace-settings-item">
              <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
              <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
            </div>

            <div class="ace-settings-item">
              <input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
              <label class="lbl" for="ace-settings-add-container">
                Inside
                <b>.container</b>
              </label>
            </div>
          </div><!-- /.pull-left -->

          <div class="pull-left width-50">
            <div class="ace-settings-item">
              <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
              <label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
            </div>

            <div class="ace-settings-item">
              <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
              <label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
            </div>

            <div class="ace-settings-item">
              <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
              <label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
            </div>
          </div><!-- /.pull-left -->
        </div><!-- /.ace-settings-box -->
      </div><!-- /.ace-settings-container -->

      <div class="page-header">
        <h1>
          Gallery
          <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            responsive photo gallery using colorbox
          </small>
        </h1>
      </div><!-- /.page-header -->

      <div class="row">
        <div class="col-xs-12">
          <!-- PAGE CONTENT BEGINS -->
          <div>
            <ul class="ace-thumbnails clearfix">
              <li>
                <a href="{{ asset('ace-master/assets/images/gallery/image-1.jpg') }}" title="Photo Title" data-rel="colorbox">
                  <img width="150" height="150" alt="150x150" src="{{ asset('ace-master/assets/images/gallery/thumb-1.jpg') }}" />
                </a>

                <div class="tags">
                  <span class="label-holder">
                    <span class="label label-info">breakfast</span>
                  </span>

                  <span class="label-holder">
                    <span class="label label-danger">fruits</span>
                  </span>

                  <span class="label-holder">
                    <span class="label label-success">toast</span>
                  </span>

                  <span class="label-holder">
                    <span class="label label-warning arrowed-in">diet</span>
                  </span>
                </div>

                <div class="tools">
                  <a href="#">
                    <i class="ace-icon fa fa-link"></i>
                  </a>

                  <a href="#">
                    <i class="ace-icon fa fa-paperclip"></i>
                  </a>

                  <a href="#">
                    <i class="ace-icon fa fa-pencil"></i>
                  </a>

                  <a href="#">
                    <i class="ace-icon fa fa-times red"></i>
                  </a>
                </div>
              </li>

              <li>
                <a href="{{ asset('ace-master/assets/images/gallery/image-2.jpg') }}" data-rel="colorbox">
                  <img width="150" height="150" alt="150x150" src="{{ asset('ace-master/assets/images/gallery/thumb-2.jpg') }}" />
                  <div class="text">
                    <div class="inner">Sample Caption on Hover</div>
                  </div>
                </a>
              </li>

              <li>
                <a href="{{ asset('ace-master/assets/images/gallery/image-3.jpg') }}" data-rel="colorbox">
                  <img width="150" height="150" alt="150x150" src="{{ asset('ace-master/assets/images/gallery/thumb-3.jpg') }}" />
                  <div class="text">
                    <div class="inner">Sample Caption on Hover</div>
                  </div>
                </a>

                <div class="tools tools-bottom">
                  <a href="#">
                    <i class="ace-icon fa fa-link"></i>
                  </a>

                  <a href="#">
                    <i class="ace-icon fa fa-paperclip"></i>
                  </a>

                  <a href="#">
                    <i class="ace-icon fa fa-pencil"></i>
                  </a>

                  <a href="#">
                    <i class="ace-icon fa fa-times red"></i>
                  </a>
                </div>
              </li>

              <li>
                <a href="{{ asset('ace-master/assets/images/gallery/image-4.jpg') }}" data-rel="colorbox">
                  <img width="150" height="150" alt="150x150" src="{{ asset('ace-master/assets/images/gallery/thumb-4.jpg') }}" />
                  <div class="tags">
                    <span class="label-holder">
                      <span class="label label-info arrowed">fountain</span>
                    </span>

                    <span class="label-holder">
                      <span class="label label-danger">recreation</span>
                    </span>
                  </div>
                </a>

                <div class="tools tools-top">
                  <a href="#">
                    <i class="ace-icon fa fa-link"></i>
                  </a>

                  <a href="#">
                    <i class="ace-icon fa fa-paperclip"></i>
                  </a>

                  <a href="#">
                    <i class="ace-icon fa fa-pencil"></i>
                  </a>

                  <a href="#">
                    <i class="ace-icon fa fa-times red"></i>
                  </a>
                </div>
              </li>

              <li>
                <div>
                  <img width="150" height="150" alt="150x150" src="{{ asset('ace-master/assets/images/gallery/thumb-5.jpg') }}" />
                  <div class="text">
                    <div class="inner">
                      <span>Some Title!</span>

                      <br />
                      <a href="{{ asset('ace-master/assets/images/gallery/image-5.jpg') }}" data-rel="colorbox">
                        <i class="ace-icon fa fa-search-plus"></i>
                      </a>

                      <a href="#">
                        <i class="ace-icon fa fa-user"></i>
                      </a>

                      <a href="#">
                        <i class="ace-icon fa fa-share"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>

              <li>
                <a href="{{ asset('ace-master/assets/images/gallery/image-6.jpg') }}" data-rel="colorbox">
                  <img width="150" height="150" alt="150x150" src="{{ asset('ace-master/assets/images/gallery/thumb-6.jpg') }}" />
                </a>

                <div class="tools tools-right">
                  <a href="#">
                    <i class="ace-icon fa fa-link"></i>
                  </a>

                  <a href="#">
                    <i class="ace-icon fa fa-paperclip"></i>
                  </a>

                  <a href="#">
                    <i class="ace-icon fa fa-pencil"></i>
                  </a>

                  <a href="#">
                    <i class="ace-icon fa fa-times red"></i>
                  </a>
                </div>
              </li>

              <li>
                <a href="{{ asset('ace-master/assets/images/gallery/image-1.jpg') }}" data-rel="colorbox">
                  <img width="150" height="150" alt="150x150" src="{{ asset('ace-master/assets/images/gallery/thumb-1.jpg') }}" />
                </a>

                <div class="tools">
                  <a href="#">
                    <i class="ace-icon fa fa-link"></i>
                  </a>

                  <a href="#">
                    <i class="ace-icon fa fa-paperclip"></i>
                  </a>

                  <a href="#">
                    <i class="ace-icon fa fa-pencil"></i>
                  </a>

                  <a href="#">
                    <i class="ace-icon fa fa-times red"></i>
                  </a>
                </div>
              </li>

              <li>
                <a href="{{ asset('ace-master/assets/images/gallery/image-2.jpg') }}" data-rel="colorbox">
                  <img width="150" height="150" alt="150x150" src="{{ asset('ace-master/assets/images/gallery/thumb-2.jpg') }}" />
                </a>

                <div class="tools tools-top in">
                  <a href="#">
                    <i class="ace-icon fa fa-link"></i>
                  </a>

                  <a href="#">
                    <i class="ace-icon fa fa-paperclip"></i>
                  </a>

                  <a href="#">
                    <i class="ace-icon fa fa-pencil"></i>
                  </a>

                  <a href="#">
                    <i class="ace-icon fa fa-times red"></i>
                  </a>
                </div>
              </li>
            </ul>
          </div><!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.page-content -->
  </div>
</div>
@endsection

@section('scripts')
  <!-- Add custom scripts here -->
  <script src="{{ asset('ace-master/assets/js/jquery.colorbox.min.js') }}"></script>

  <script type="text/javascript">
    $(function(){
      //** Do something here with JQuery **//
      var $overflow = '';
      var colorbox_params = {
        rel: 'colorbox',
        reposition:true,
        scalePhotos:true,
        scrolling:false,
        previous:'<i class="ace-icon fa fa-arrow-left"></i>',
        next:'<i class="ace-icon fa fa-arrow-right"></i>',
        close:'&times;',
        current:'{current} of {total}',
        maxWidth:'100%',
        maxHeight:'100%',
        onOpen:function(){
          $overflow = document.body.style.overflow;
          document.body.style.overflow = 'hidden';
        },
        onClosed:function(){
          document.body.style.overflow = $overflow;
        },
        onComplete:function(){
          $.colorbox.resize();
        }
      };

      $('.ace-thumbnails [data-rel="colorbox"]').colorbox(colorbox_params);
      $("#cboxLoadingGraphic").html("<i class='ace-icon fa fa-spinner orange fa-spin'></i>");//let's add a custom loading icon
      
      
      $(document).one('ajaxloadstart.page', function(e) {
        $('#colorbox, #cboxOverlay').remove();
       });
    });
  </script>
@endsection