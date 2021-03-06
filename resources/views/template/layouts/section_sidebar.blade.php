@section('section_sidebar')

<div id="sidebar" class="sidebar responsive ace-save-state">
	<script type="text/javascript">
		try{ace.settings.loadState('sidebar')}catch(e){}
	</script>

	<div class="sidebar-shortcuts" id="sidebar-shortcuts">
		<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
			<button class="btn btn-success">
				<i class="ace-icon fa fa-signal"></i>
			</button>

			<button class="btn btn-info">
				<i class="ace-icon fa fa-pencil"></i>
			</button>

			<button class="btn btn-warning">
				<i class="ace-icon fa fa-users"></i>
			</button>

			<button class="btn btn-danger">
				<i class="ace-icon fa fa-cogs"></i>
			</button>
		</div>

		<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
			<span class="btn btn-success"></span>

			<span class="btn btn-info"></span>

			<span class="btn btn-warning"></span>

			<span class="btn btn-danger"></span>
		</div>
	</div><!-- /.sidebar-shortcuts -->

	<ul class="nav nav-list">
		<li class="{{ request()->routeIs('ace-dashboard.index') ? 'active' : '' }}">
			<a href="{{ route('ace-dashboard.index') }}">
				<i class="menu-icon fa fa-tachometer"></i>
				<span class="menu-text"> Dashboard </span>
			</a>

			<b class="arrow"></b>
		</li>

		<li class="{{ request()->routeIs('ui-elements.*') ? 'active open' : '' }}">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-desktop"></i>
				<span class="menu-text">
					UI &amp; Elements
				</span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="{{ request()->routeIs('ui-elements.typography') ? 'active' : '' }}">
					<a href="{{ route('ui-elements.typography') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Typography
					</a>

					<b class="arrow"></b>
				</li>

				<li class="{{ request()->routeIs('ui-elements.elements') ? 'active' : '' }}">
					<a href="{{ route('ui-elements.elements') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Elements
					</a>

					<b class="arrow"></b>
				</li>

				<li class="{{ request()->routeIs('ui-elements.buttons-icons') ? 'active' : '' }}">
					<a href="{{ route('ui-elements.buttons-icons') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Buttons &amp; Icons
					</a>

					<b class="arrow"></b>
				</li>

				<li class="{{ request()->routeIs('ui-elements.content-sliders') ? 'active' : '' }}">
					<a href="{{ route('ui-elements.content-sliders') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Content Sliders
					</a>

					<b class="arrow"></b>
				</li>

				<li class="{{ request()->routeIs('ui-elements.treeview') ? 'active' : '' }}">
					<a href="{{ route('ui-elements.treeview') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Treeview
					</a>

					<b class="arrow"></b>
				</li>

				<li class="{{ request()->routeIs('ui-elements.jquery-ui') ? 'active' : '' }}">
					<a href="{{ route('ui-elements.jquery-ui') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						jQuery UI
					</a>

					<b class="arrow"></b>
				</li>

				<li class="{{ request()->routeIs('ui-elements.nestable-list') ? 'active' : '' }}">
					<a href="{{ route('ui-elements.nestable-list') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Nestable Lists
					</a>

					<b class="arrow"></b>
				</li>

				<li class="">
					<a href="#" class="dropdown-toggle">
						<i class="menu-icon fa fa-caret-right"></i>

						Three Level Menu
						<b class="arrow fa fa-angle-down"></b>
					</a>

					<b class="arrow"></b>

					<ul class="submenu">
						<li class="">
							<a href="#">
								<i class="menu-icon fa fa-leaf green"></i>
								Item #1
							</a>

							<b class="arrow"></b>
						</li>

						<li class="">
							<a href="#" class="dropdown-toggle">
								<i class="menu-icon fa fa-pencil orange"></i>

								4th level
								<b class="arrow fa fa-angle-down"></b>
							</a>

							<b class="arrow"></b>

							<ul class="submenu">
								<li class="">
									<a href="#">
										<i class="menu-icon fa fa-plus purple"></i>
										Add Product
									</a>

									<b class="arrow"></b>
								</li>

								<li class="">
									<a href="#">
										<i class="menu-icon fa fa-eye pink"></i>
										View Products
									</a>

									<b class="arrow"></b>
								</li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</li>

		<li class="{{ request()->routeIs('tables.*') ? 'active open' : '' }}">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-list"></i>
				<span class="menu-text"> Tables </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="{{ request()->routeIs('tables.simple-dynamic') ? 'active' : '' }}">
					<a href="{{ route('tables.simple-dynamic') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Simple &amp; Dynamic
					</a>

					<b class="arrow"></b>
				</li>

				<li class="{{ request()->routeIs('tables.jqgrid-plugin') ? 'active' : '' }}">
					<a href="{{ route('tables.jqgrid-plugin') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						jqGrid plugin
					</a>

					<b class="arrow"></b>
				</li>
			</ul>
		</li>

		<li class="{{ request()->routeIs('forms.*') ? 'active open' : '' }}">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-pencil-square-o"></i>
				<span class="menu-text"> Forms </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="{{ request()->routeIs('forms.form-elements') ? 'active' : '' }}">
					<a href="{{ route('forms.form-elements') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Form Elements
					</a>

					<b class="arrow"></b>
				</li>

				<li class="{{ request()->routeIs('forms.form-elements2') ? 'active' : '' }}">
					<a href="{{ route('forms.form-elements2') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Form Elements 2
					</a>

					<b class="arrow"></b>
				</li>

				<li class="{{ request()->routeIs('forms.wizard-validation') ? 'active' : '' }}">
					<a href="{{ route('forms.wizard-validation') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Wizard &amp; Validation
					</a>

					<b class="arrow"></b>
				</li>

				<li class="{{ request()->routeIs('forms.wysiwg-markdown') ? 'active' : '' }}">
					<a href="{{ route('forms.wysiwg-markdown') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Wysiwyg &amp; Markdown
					</a>

					<b class="arrow"></b>
				</li>

				<li class="{{ request()->routeIs('forms.drop-zone') ? 'active' : '' }}">
					<a href="{{ route('forms.drop-zone') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Dropzone File Upload
					</a>

					<b class="arrow"></b>
				</li>
			</ul>
		</li>

		<li class="{{ request()->routeIs('widgets.widgets') ? 'active' : '' }}">
			<a href="{{ route('widgets.widgets') }}">
				<i class="menu-icon fa fa-list-alt"></i>
				<span class="menu-text"> Widgets </span>
			</a>

			<b class="arrow"></b>
		</li>

		<li class="{{ request()->routeIs('calendar.calendar') ? 'active' : '' }}">
			<a href="{{ route('calendar.calendar') }}">
				<i class="menu-icon fa fa-calendar"></i>

				<span class="menu-text">
					Calendar

					<span class="badge badge-transparent tooltip-error" title="2 Important Events">
						<i class="ace-icon fa fa-exclamation-triangle red bigger-130"></i>
					</span>
				</span>
			</a>

			<b class="arrow"></b>
		</li>

		<li class="{{ request()->routeIs('gallery.gallery') ? 'active' : '' }}">
			<a href="{{ route('gallery.gallery') }}">
				<i class="menu-icon fa fa-picture-o"></i>
				<span class="menu-text"> Gallery </span>
			</a>

			<b class="arrow"></b>
		</li>

		<li class="{{ request()->routeIs('more-pages.*') ? 'active open' : '' }}">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-tag"></i>
				<span class="menu-text"> More Pages </span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="{{ request()->routeIs('more-pages.user-profile') ? 'active' : '' }}">
					<a href="{{ route('more-pages.user-profile') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						User Profile
					</a>

					<b class="arrow"></b>
				</li>

				<li class="{{ request()->routeIs('more-pages.inbox') ? 'active' : '' }}">
					<a href="{{ route('more-pages.inbox') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Inbox
					</a>

					<b class="arrow"></b>
				</li>

				<li class="{{ request()->routeIs('more-pages.pricing-table') ? 'active' : '' }}">
					<a href="{{ route('more-pages.pricing-table') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Pricing Tables
					</a>

					<b class="arrow"></b>
				</li>

				<li class="{{ request()->routeIs('more-pages.invoice') ? 'active' : '' }}">
					<a href="{{ route('more-pages.invoice') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Invoice
					</a>

					<b class="arrow"></b>
				</li>

				<li class="{{ request()->routeIs('more-pages.timeline') ? 'active' : '' }}">
					<a href="{{ route('more-pages.timeline') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Timeline
					</a>

					<b class="arrow"></b>
				</li>

				<li class="{{ request()->routeIs('more-pages.search-result') ? 'active' : '' }}">
					<a href="{{ route('more-pages.search-result') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Search Results
					</a>

					<b class="arrow"></b>
				</li>

				<li class="{{ request()->routeIs('more-pages.email-template') ? 'active' : '' }}">
					<a href="{{ route('more-pages.email-template') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Email Templates
					</a>

					<b class="arrow"></b>
				</li>

				<li class="{{ request()->routeIs('more-pages.login-register') ? 'active' : '' }}">
					<a href="{{ asset('ace-master/login.html') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Login &amp; Register
					</a>

					<b class="arrow"></b>
				</li>
			</ul>
		</li>

		<li class="{{ request()->routeIs('other-pages.*') ? 'active open' : '' }}">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-file-o"></i>

				<span class="menu-text">
					Other Pages

					<span class="badge badge-primary">5</span>
				</span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="{{ request()->routeIs('other-pages.faq') ? 'active' : '' }}">
					<a href="{{ route('other-pages.faq') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						FAQ
					</a>

					<b class="arrow"></b>
				</li>

				<li class="{{ request()->routeIs('other-pages.error-404') ? 'active' : '' }}">
					<a href="{{ route('other-pages.error-404') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Error 404
					</a>

					<b class="arrow"></b>
				</li>

				<li class="{{ request()->routeIs('other-pages.error-500') ? 'active' : '' }}">
					<a href="{{ route('other-pages.error-500') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Error 500
					</a>

					<b class="arrow"></b>
				</li>

				<li class="{{ request()->routeIs('other-pages.grid') ? 'active' : '' }}">
					<a href="{{ route('other-pages.grid') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Grid
					</a>

					<b class="arrow"></b>
				</li>

				<li class="{{ request()->routeIs('other-pages.blank-page') ? 'active' : '' }}">
					<a href="{{ route('other-pages.blank-page') }}">
						<i class="menu-icon fa fa-caret-right"></i>
						Blank Page
					</a>

					<b class="arrow"></b>
				</li>
			</ul>
		</li>
	</ul><!-- /.nav-list -->

	<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
		<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
	</div>
</div>

@endsection
