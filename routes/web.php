<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('template/dashboard.index');
})->name('ace-dashboard.index');

// Ace templating master
Route::prefix('ace-example')->group(function () {
    // Dashboard
    // Route::get('/', function () {
		// return view('template/dashboard.index');
	// })->name('ace-dashboard.index');

    // UI Element / Typography
	Route::get('typography', function () {
		return view('template/ui-elements.typography');
	})->name('ui-elements.typography');

	// UI Element / Elements
	Route::get('elements', function () {
		return view('template/ui-elements.elements');
	})->name('ui-elements.elements');

	// UI Element / Buttons & Icons
	Route::get('buttons-icons', function () {
		return view('template/ui-elements.buttons-icons');
	})->name('ui-elements.buttons-icons');

	// UI Element / Content Sliders
	Route::get('content-sliders', function () {
		return view('template/ui-elements.content-sliders');
	})->name('ui-elements.content-sliders');

	// UI Element / Treeview
	Route::get('treeview', function () {
		return view('template/ui-elements.treeview');
	})->name('ui-elements.treeview');

	// UI Element / Jquery UI
	Route::get('jquery-ui', function () {
		return view('template/ui-elements.jquery-ui');
	})->name('ui-elements.jquery-ui');

	// UI Element / Nestable List
	Route::get('nestable-list', function () {
		return view('template/ui-elements.nestable-list');
	})->name('ui-elements.nestable-list');

	// Tables / Simple Tables
	Route::get('simple-dynamic', function () {
		return view('template/tables.simple-dynamic');
	})->name('tables.simple-dynamic');

	// Tables / jqgrid plugin
	Route::get('jqgrid-plugin', function () {
		return view('template/tables.jqgrid-plugin');
	})->name('tables.jqgrid-plugin');

	// Forms / form elements
	Route::get('form-elements', function () {
		return view('template/forms.form-elements');
	})->name('forms.form-elements');

	// Forms / form elements 2
	Route::get('form-elements2', function () {
		return view('template/forms.form-elements2');
	})->name('forms.form-elements2');

	// Forms / Wizard & Validation
	Route::get('wizard-validation', function () {
		return view('template/forms.wizard-validation');
	})->name('forms.wizard-validation');

	// Forms / WYSIWG & Markdown
	Route::get('wysiwg-markdown', function () {
		return view('template/forms.wysiwg-markdown');
	})->name('forms.wysiwg-markdown');

	// Forms / Drop Zone
	Route::get('drop-zone', function () {
		return view('template/forms.drop-zone');
	})->name('forms.drop-zone');

	// Widgets
	Route::get('widgets', function () {
		return view('template/widgets.widgets');
	})->name('widgets.widgets');

	// Calendar
	Route::get('calendar', function () {
		return view('template/calendar.calendar');
	})->name('calendar.calendar');

	// Gallery
	Route::get('gallery', function () {
		return view('template/gallery.gallery');
	})->name('gallery.gallery');

	// More Pages / User Profile
	Route::get('user-profile', function () {
		return view('template/more-pages.user-profile');
	})->name('more-pages.user-profile');

	// More Pages / Inbox
	Route::get('inbox', function () {
		return view('template/more-pages.inbox');
	})->name('more-pages.inbox');

	// More Pages / Pricing Table
	Route::get('pricing-table', function () {
		return view('template/more-pages.pricing-table');
	})->name('more-pages.pricing-table');

	// More Pages / Invoice
	Route::get('invoice', function () {
		return view('template/more-pages.invoice');
	})->name('more-pages.invoice');

	// More Pages / Timeline
	Route::get('timeline', function () {
		return view('template/more-pages.timeline');
	})->name('more-pages.timeline');

	// More Pages / Search Result
	Route::get('search-result', function () {
		return view('template/more-pages.search-result');
	})->name('more-pages.search-result');

	// More Pages / E-Mail Template
	Route::get('email-template', function () {
		return view('template/more-pages.email-template');
	})->name('more-pages.email-template');

	// More Pages / Login & Register
	Route::get('login-register', function () {
		return view('template/more-pages.login-register');
	})->name('more-pages.login-register');

	// Other Pages / FAQ
	Route::get('faq', function () {
		return view('template/other-pages.faq');
	})->name('other-pages.faq');

	// Other Pages / error 404
	Route::get('error-404', function () {
		return view('template/other-pages.error-404');
	})->name('other-pages.error-404');

	// Other Pages / error 500
	Route::get('error-500', function () {
		return view('template/other-pages.error-500');
	})->name('other-pages.error-500');

	// Other Pages / Grid
	Route::get('grid', function () {
		return view('template/other-pages.grid');
	})->name('other-pages.grid');

	// Other Pages / Blank Page
	Route::get('blank-page', function () {
		return view('template/other-pages.blank-page');
	})->name('other-pages.blank-page');
});