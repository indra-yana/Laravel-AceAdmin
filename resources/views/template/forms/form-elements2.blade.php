@extends('template.layouts.app_layout')

@extends('template.layouts.section_top_nav')
@extends('template.layouts.section_sidebar')
@extends('template.layouts.section_footer')

@section('title', 'Form Elements2')

@section('styles')
  <!-- Add custom styles here -->
  <link rel="stylesheet" href="{{ asset('ace-master/assets/css/bootstrap-duallistbox.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('ace-master/assets/css/bootstrap-multiselect.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('ace-master/assets/css/select2.min.css') }}" />
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
          <a href="#">Forms</a>
        </li>
        <li class="active">Form Elements 2</li>
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
        <h1>More Elements </h1>
      </div><!-- /.page-header -->

      <div class="row">
        <div class="col-xs-12">
          <!-- PAGE CONTENT BEGINS -->
          <form class="form-horizontal" role="form">
            <div class="form-group">
              <label class="col-sm-3 control-label no-padding-top"> Star Rating </label>

              <div class="col-sm-9">
                <div class="rating inline"></div>

                <div class="hr hr-16 hr-dotted"></div>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right">Typeahead.js</label>

              <div class="col-sm-9">
                <div class="pos-rel">
                  <input class="typeahead scrollable" type="text" placeholder="States of USA" />
                </div>
              </div>
            </div>

            <div class="space-6"></div>

            <div class="form-group">
              <label class="control-label col-xs-12 col-sm-3 no-padding-right" for="food">Bootstrap Multiselect</label>

              <div class="col-xs-12 col-sm-9">
                <select id="food" class="multiselect" multiple="">
                  <option value="cheese">Cheese</option>
                  <option value="tomatoes">Tomatoes</option>
                  <option value="mozarella">Mozzarella</option>
                  <option value="mushrooms">Mushrooms</option>
                  <option value="pepperoni">Pepperoni</option>
                </select>
              </div>
            </div>

            <div class="hr hr-16 hr-dotted"></div>

            <div class="form-group">
              <label class="col-sm-3 control-label no-padding-top" for="duallist"> Dual listbox </label>

              <div class="col-sm-8">
                <select multiple="multiple" size="10" name="duallistbox_demo1[]" id="duallist">
                  <option value="option1">Option 1</option>
                  <option value="option2">Option 2</option>
                  <option value="option3" selected="selected">Option 3</option>
                  <option value="option4">Option 4</option>
                  <option value="option5">Option 5</option>
                  <option value="option6" selected="selected">Option 6</option>
                  <option value="option7">Option 7</option>
                  <option value="option8">Option 8</option>
                  <option value="option9">Option 9</option>
                  <option value="option0">Option 10</option>
                </select>

                <div class="hr hr-16 hr-dotted"></div>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-xs-12 col-sm-3 no-padding-right"> Select2 </label>

              <div class="col-xs-12 col-sm-9">
                <select multiple="" id="state" name="state" class="select2" data-placeholder="Click to Choose...">
                  <option value="AL">Alabama</option>
                  <option value="AK">Alaska</option>
                  <option value="AZ">Arizona</option>
                  <option value="AR">Arkansas</option>
                  <option value="CA">California</option>
                  <option value="CO">Colorado</option>
                  <option value="CT">Connecticut</option>
                  <option value="DE">Delaware</option>
                  <option value="FL">Florida</option>
                  <option value="GA">Georgia</option>
                  <option value="HI">Hawaii</option>
                  <option value="ID">Idaho</option>
                  <option value="IL">Illinois</option>
                  <option value="IN">Indiana</option>
                  <option value="IA">Iowa</option>
                  <option value="KS">Kansas</option>
                  <option value="KY">Kentucky</option>
                  <option value="LA">Louisiana</option>
                  <option value="ME">Maine</option>
                  <option value="MD">Maryland</option>
                  <option value="MA">Massachusetts</option>
                  <option value="MI">Michigan</option>
                  <option value="MN">Minnesota</option>
                  <option value="MS">Mississippi</option>
                  <option value="MO">Missouri</option>
                  <option value="MT">Montana</option>
                  <option value="NE">Nebraska</option>
                  <option value="NV">Nevada</option>
                  <option value="NH">New Hampshire</option>
                  <option value="NJ">New Jersey</option>
                  <option value="NM">New Mexico</option>
                  <option value="NY">New York</option>
                  <option value="NC">North Carolina</option>
                  <option value="ND">North Dakota</option>
                  <option value="OH">Ohio</option>
                  <option value="OK">Oklahoma</option>
                  <option value="OR">Oregon</option>
                  <option value="PA">Pennsylvania</option>
                  <option value="RI">Rhode Island</option>
                  <option value="SC">South Carolina</option>
                  <option value="SD">South Dakota</option>
                  <option value="TN">Tennessee</option>
                  <option value="TX">Texas</option>
                  <option value="UT">Utah</option>
                  <option value="VT">Vermont</option>
                  <option value="VA">Virginia</option>
                  <option value="WA">Washington</option>
                  <option value="WV">West Virginia</option>
                  <option value="WI">Wisconsin</option>
                  <option value="WY">Wyoming</option>
                </select>

                <span class="inline pull-right">
                  <span class="grey">style:</span>

                  <span class="btn-toolbar inline middle no-margin">
                    <span id="select2-multiple-style" data-toggle="buttons" class="btn-group no-margin">
                      <label class="btn btn-xs btn-yellow active">
                        1
                        <input type="radio" value="1" />
                      </label>

                      <label class="btn btn-xs btn-yellow">
                        2
                        <input type="radio" value="2" />
                      </label>
                    </span>
                  </span>
                </span>
              </div>
            </div>
          </form>

          <!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.page-content -->
  </div>
</div>
@endsection

@section('scripts')
  <!-- Add custom scripts here -->
  <script src="{{ asset('ace-master/assets/js/jquery.bootstrap-duallistbox.min.js') }}"></script>
  <script src="{{ asset('ace-master/assets/js/jquery.raty.min.js') }}"></script>
  <script src="{{ asset('ace-master/assets/js/bootstrap-multiselect.min.js') }}"></script>
  <script src="{{ asset('ace-master/assets/js/select2.min.js') }}"></script>
  <script src="{{ asset('ace-master/assets/js/jquery-typeahead.js') }}"></script>

  <script type="text/javascript">
    $(function(){
      //** Do something here with JQuery **//
      var demo1 = $('select[name="duallistbox_demo1[]"]').bootstrapDualListbox({infoTextFiltered: '<span class="label label-purple label-lg">Filtered</span>'});
      var container1 = demo1.bootstrapDualListbox('getContainer');
      container1.find('.btn').addClass('btn-white btn-info btn-bold');
    
      /**var setRatingColors = function() {
        $(this).find('.star-on-png,.star-half-png').addClass('orange2').removeClass('grey');
        $(this).find('.star-off-png').removeClass('orange2').addClass('grey');
      }*/
      $('.rating').raty({
        'cancel' : true,
        'half': true,
        'starType' : 'i'
        /**,
        
        'click': function() {
          setRatingColors.call(this);
        },
        'mouseover': function() {
          setRatingColors.call(this);
        },
        'mouseout': function() {
          setRatingColors.call(this);
        }*/
      })//.find('i:not(.star-raty)').addClass('grey');
      
      
      
      //////////////////
      //select2
      $('.select2').css('width','200px').select2({allowClear:true})
      $('#select2-multiple-style .btn').on('click', function(e){
        var target = $(this).find('input[type=radio]');
        var which = parseInt(target.val());
        if(which == 2) $('.select2').addClass('tag-input-style');
         else $('.select2').removeClass('tag-input-style');
      });
      
      //////////////////
      $('.multiselect').multiselect({
       enableFiltering: true,
       enableHTML: true,
       buttonClass: 'btn btn-white btn-primary',
       templates: {
        button: '<button type="button" class="multiselect dropdown-toggle" data-toggle="dropdown"><span class="multiselect-selected-text"></span> &nbsp;<b class="fa fa-caret-down"></b></button>',
        ul: '<ul class="multiselect-container dropdown-menu"></ul>',
        filter: '<li class="multiselect-item filter"><div class="input-group"><span class="input-group-addon"><i class="fa fa-search"></i></span><input class="form-control multiselect-search" type="text"></div></li>',
        filterClearBtn: '<span class="input-group-btn"><button class="btn btn-default btn-white btn-grey multiselect-clear-filter" type="button"><i class="fa fa-times-circle red2"></i></button></span>',
        li: '<li><a tabindex="0"><label></label></a></li>',
            divider: '<li class="multiselect-item divider"></li>',
            liGroup: '<li class="multiselect-item multiselect-group"><label></label></li>'
       }
      });
    
      
      ///////////////////
        
      //typeahead.js
      //example taken from plugin's page at: https://twitter.github.io/typeahead.js/examples/
      var substringMatcher = function(strs) {
        return function findMatches(q, cb) {
          var matches, substringRegex;
         
          // an array that will be populated with substring matches
          matches = [];
         
          // regex used to determine if a string contains the substring `q`
          substrRegex = new RegExp(q, 'i');
         
          // iterate through the pool of strings and for any string that
          // contains the substring `q`, add it to the `matches` array
          $.each(strs, function(i, str) {
            if (substrRegex.test(str)) {
              // the typeahead jQuery plugin expects suggestions to a
              // JavaScript object, refer to typeahead docs for more info
              matches.push({ value: str });
            }
          });
    
          cb(matches);
        }
       }
    
       $('input.typeahead').typeahead({
        hint: true,
        highlight: true,
        minLength: 1
       }, {
        name: 'states',
        displayKey: 'value',
        source: substringMatcher(ace.vars['US_STATES']),
        limit: 10
       });
        
        
      ///////////////
      
      
      //in ajax mode, remove remaining elements before leaving page
      $(document).one('ajaxloadstart.page', function(e) {
        $('[class*=select2]').remove();
        $('select[name="duallistbox_demo1[]"]').bootstrapDualListbox('destroy');
        $('.rating').raty('destroy');
        $('.multiselect').multiselect('destroy');
      });
    });
  </script>
@endsection