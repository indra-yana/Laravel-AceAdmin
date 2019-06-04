@extends('layouts.app_layout')

@extends('layouts.section_top_nav')
@extends('layouts.section_sidebar')
@extends('layouts.section_footer')

@section('title', 'Grid')

@section('styles')
  <!-- Add custom styles here -->
  <style>
      /* styling the grid page's grid elements */
      .center {
        text-align: center;
      }
      .center [class*="col-"] {
        margin-top: 2px;
        margin-bottom: 2px;

        position: relative;
        text-overflow: ellipsis;
      }
      .center [class*="col-"]  div{
        position: relative;
        z-index: 2;
        
          padding-top: 4px;
        padding-bottom: 4px;
        
        display: block;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;

        width: 100%;
      }
      .center [class*="col-"]  div span{
        position: relative;
        z-index: 2;
      }
      .center [class*="col-"] div:before {
        display: block;
        content: "";
        
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 1;
        
        border: 1px solid #DDD;
      }

      .center [class*="col-"] div:hover:before {
        background-color: #FCE6A6;
        border-color: #EFD27A;
      }
  </style>
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

        <li>
          <a href="#">Other Pages</a>
        </li>
        <li class="active">Grid</li>
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
          Grid
          <small>
            <i class="ace-icon fa fa-angle-double-right"></i>
            bootstrap grid sizing
          </small>
        </h1>
      </div><!-- /.page-header -->

      <div class="row">
        <div class="col-xs-12">
          <!-- PAGE CONTENT BEGINS -->
          <div class="center">
            <div class="row">
              <div class="col-xs-12">
                <div>
                  <span>.col-xs-12</span>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-1">
                <div>
                  <span>.col-xs-1</span>
                </div>
              </div>

              <div class="col-xs-11">
                <div>
                  <span>.col-xs-11</span>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-6 col-sm-2">
                <div>
                  <span>.col-xs-6.col-sm-2</span>
                </div>
              </div>

              <div class="col-xs-6 col-sm-10">
                <div>
                  <span>.col-xs-6.col-sm-10</span>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12 col-lg-6">
                <div>
                  <span>.col-xs-12.col-lg-6</span>
                </div>
              </div>

              <div class="col-xs-12 col-lg-6">
                <div>
                  <span>.col-xs-12.col-lg-6</span>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-4">
                <div>
                  <span>.col-xs-4</span>
                </div>
              </div>

              <div class="col-xs-8">
                <div>
                  <span>.col-xs-8</span>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-5">
                <div>
                  <span>.col-xs-5</span>
                </div>
              </div>

              <div class="col-xs-7">
                <div>
                  <span>.col-xs-7</span>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-6">
                <div>
                  <span>.col-xs-6</span>
                </div>
              </div>

              <div class="col-xs-6">
                <div>
                  <span>.col-xs-6</span>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-7">
                <div>
                  <span>.col-xs-7</span>
                </div>
              </div>

              <div class="col-xs-5">
                <div>
                  <span>.col-xs-5</span>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-8">
                <div>
                  <span>.col-xs-8</span>
                </div>
              </div>

              <div class="col-xs-4">
                <div>
                  <span>.col-xs-4</span>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-9">
                <div>
                  <span>.col-xs-9</span>
                </div>
              </div>

              <div class="col-xs-3">
                <div>
                  <span>.col-xs-3</span>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-10">
                <div>
                  <span>.col-xs-10</span>
                </div>
              </div>

              <div class="col-xs-2">
                <div>
                  <span>.col-xs-2</span>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-11">
                <div>
                  <span>.col-xs-11</span>
                </div>
              </div>

              <div class="col-xs-1">
                <div>
                  <span>.col-xs-1</span>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12">
                <div>
                  <span>.col-xs-12</span>
                </div>
              </div>
            </div>
          </div>

          <!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.page-content -->
  </div>
</div>
@endsection

@section('scripts')
  <!-- Add custom scripts here -->
  <script type="text/javascript">
    $(function(){
      //** Do something here with JQuery **//
    });
  </script>
@endsection