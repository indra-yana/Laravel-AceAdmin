@extends('layouts.app_layout')

@extends('layouts.section_top_nav')
@extends('layouts.section_sidebar')
@extends('layouts.section_footer')

@section('title', 'Content Slider')

@section('styles')
  <!-- Add custom styles here -->
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
          <a href="#">UI &amp; Elements</a>
        </li>
        <li class="active">Content Sliders</li>
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
        <h1>Content sliders based on Bootstrap modals
        </h1>
      </div><!-- /.page-header -->

      <div class="row">
        <div class="col-xs-12">
          <!-- PAGE CONTENT BEGINS -->
          <div class="alert alert-info">
            <button class="close" data-dismiss="alert">
              <i class="ace-icon fa fa-times"></i>
            </button>
            You can use any button to toggle sliders!
          </div>

          <div id="top-menu" class="modal aside" data-fixed="true" data-placement="top" data-background="true" data-backdrop="invisible" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body container">
                  <div class="row">
                    <div class="col-sm-5 col-sm-offset-1 white">
                      <h3 class="lighter">Bootstrap Grid &amp; Elements</h3>
                      With invisible backdrop
                    </div>

                    <div class="col-sm-5 text-center line-height-2">
                      <a class="btn btn-app btn-Default no-radius" href="#">
                        <i class="ace-icon fa fa-pencil-square-o bigger-230"></i>
                        Default
                        <span class="label label-light arrowed-in-right badge-left">11</span>
                      </a>

                      &nbsp; &nbsp;
                      <a class="btn btn-info btn-app no-radius" href="#">
                        <i class="ace-icon fa fa-cog bigger-230"></i>
                        Mailbox
                        <span class="label label-danger arrowed-in">6+</span>
                      </a>

                      &nbsp; &nbsp;
                      <a class="btn btn-app btn-light no-radius" href="#">
                        <i class="ace-icon fa fa-print bigger-230"></i>
                        Print
                      </a>
                    </div>
                  </div>
                </div>
              </div><!-- /.modal-content -->

              <button class="btn btn-inverse btn-app btn-xs ace-settings-btn aside-trigger" data-target="#top-menu" data-toggle="modal" type="button">
                <i data-icon1="fa-chevron-down" data-icon2="fa-chevron-up" class="ace-icon fa fa-chevron-down bigger-110 icon-only"></i>
              </button>
            </div><!-- /.modal-dialog -->
          </div>

          <div id="bottom-menu" class="modal aside" data-fixed="true" data-placement="bottom" data-background="true" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body container">
                  <div class="row">
                    <div class="col-sm-5 col-sm-offset-1 white">
                      <h3 class="lighter">Bootstrap Grid &amp; Elements</h3>
                      With dark modal backdrop
                    </div>
                  </div>
                </div>
              </div><!-- /.modal-content -->

              <button class="btn btn-yellow btn-app btn-xs ace-settings-btn aside-trigger" data-target="#bottom-menu" data-toggle="modal" type="button">
                <i data-icon2="fa-chevron-down" data-icon1="fa-chevron-up" class="ace-icon fa fa-chevron-up bigger-110 icon-only"></i>
              </button>
            </div><!-- /.modal-dialog -->
          </div>

          <div id="right-menu" class="modal aside" data-body-scroll="false" data-offset="true" data-placement="right" data-fixed="true" data-backdrop="false" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header no-padding">
                  <div class="table-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                      <span class="white">&times;</span>
                    </button>
                    Based on Modal boxes
                  </div>
                </div>

                <div class="modal-body">
                  <h3 class="lighter">Custom Elements and Content</h3>

                  <br />
                  With no modal backdrop
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  1
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  2
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  3
                </div>
              </div><!-- /.modal-content -->

              <button class="aside-trigger btn btn-info btn-app btn-xs ace-settings-btn" data-target="#right-menu" data-toggle="modal" type="button">
                <i data-icon1="fa-plus" data-icon2="fa-minus" class="ace-icon fa fa-plus bigger-110 icon-only"></i>
              </button>
            </div><!-- /.modal-dialog -->
          </div>
          <a href="#my-modal" role="button" class="bigger-125 bg-primary white" data-toggle="modal">
            &nbsp; Content Slider inside Modal Box &nbsp;
          </a>

          <div id="my-modal" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h3 class="smaller lighter blue no-margin">A modal with a slider in it!</h3>
                </div>

                <div class="modal-body">
                  Some content
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  1
                  <br />
                  <br />
                  <br />
                  <br />
                  <br />
                  2
                </div>

                <div class="modal-footer">
                  <button class="btn btn-sm btn-danger pull-right" data-dismiss="modal">
                    <i class="ace-icon fa fa-times"></i>
                    Close
                  </button>
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div>

          <div id="aside-inside-modal" class="modal" data-placement="bottom" data-background="true" data-backdrop="false" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  <div class="row">
                    <div class="col-xs-12 white">
                      <h3 class="lighter no-margin">Inside another modal</h3>

                      <br />
                      <br />
                    </div>
                  </div>
                </div>
              </div><!-- /.modal-content -->

              <button class="btn btn-default btn-app btn-xs ace-settings-btn aside-trigger" data-target="#aside-inside-modal" data-toggle="modal" type="button">
                <i data-icon2="fa-arrow-down" data-icon1="fa-arrow-up" class="ace-icon fa fa-arrow-up bigger-110 icon-only"></i>
              </button>
            </div><!-- /.modal-dialog -->
          </div>

          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />

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
      $('.modal.aside').ace_aside();
        
      $('#aside-inside-modal').addClass('aside').ace_aside({container: '#my-modal > .modal-dialog'});
      
      //$('#top-menu').modal('show')
      
      $(document).one('ajaxloadstart.page', function(e) {
        //in ajax mode, remove before leaving page
        $('.modal.aside').remove();
        $(window).off('.aside')
      });
      
      //make content sliders resizable using jQuery UI (you should include jquery ui files)
      //$('#right-menu > .modal-dialog').resizable({handles: "w", grid: [ 20, 0 ], minWidth: 200, maxWidth: 600});
    });
  </script>
@endsection