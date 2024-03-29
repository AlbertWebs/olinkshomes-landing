<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DropzoneController;

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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index_page'])->name('homepage');
Route::get('/contact-us', [HomeController::class, 'contact_us'])->name('contact-us');
Route::get('/our-services', [HomeController::class, 'services'])->name('our-services');
Route::get('/our-work', [HomeController::class, 'work'])->name('our-work');
Route::get('/about-us', [HomeController::class, 'about_us'])->name('about-us');
Route::get('/our-team', [HomeController::class, 'team'])->name('our-team');


Auth::routes();


Route::get('admin', [AdminsController::class, 'index'])->name('admin.home')->middleware('is_admin');
Route::get('admin/home', [AdminsController::class, 'index'])->name('admin.home')->middleware('is_admin');
// SiteSettings
Route::get('admin/credentials', [AdminsController::class, 'systemsCredentials'])->middleware('is_admin');
Route::get('admin/SiteSettings', [AdminsController::class, 'SiteSettings'])->middleware('is_admin');
Route::get('admin/SocialMediaSettings', [AdminsController::class, 'SocialMediaSettings'])->middleware('is_admin');
Route::get('admin/logo-and-favicon', [AdminsController::class, 'logo_and_favicon'])->middleware('is_admin');
Route::post('admin/logo-and-favicon-update', [AdminsController::class, 'logo_and_favicon_update'])->middleware('is_admin');

Route::get('admin/get-subcategories/{id}',  [AdminsController::class, 'get_subcategories'])->middleware('is_admin');
Route::get('admin/gets-subcategories/{id}',  [AdminsController::class, 'gets_subcategories'])->middleware('is_admin');


// Banners
Route::get('admin/banners', [AdminsController::class, 'banners'])->middleware('is_admin');
Route::get('admin/editBanner/{id}', [AdminsController::class, 'editBanner'])->middleware('is_admin');
Route::post('admin/edit_Banner/{id}', [AdminsController::class, 'edit_Banner'])->middleware('is_admin');

// mailerSettings
Route::get('admin/mailerSettings', [AdminsController::class, 'mailerSettings'])->middleware('is_admin');

// Terms and Conditions
Route::get('admin/terms', [AdminsController::class, 'terms'])->middleware('is_admin');
Route::get('admin/addTerms', [AdminsController::class, 'addTerms'])->middleware('is_admin');
Route::get('admin/editTerm/{id}', [AdminsController::class, 'editTerm'])->middleware('is_admin');
Route::post('admin/add_term', [AdminsController::class, 'add_term'])->middleware('is_admin');
Route::post('admin/edit_term/{id}', [AdminsController::class, 'edit_term'])->middleware('is_admin');
Route::get('admin/delete_term/{id}', [AdminsController::class, 'delete_term'])->middleware('is_admin');

// Privacy Policy
Route::get('admin/privacy', [AdminsController::class, 'privacy'])->middleware('is_admin');
Route::get('admin/addPrivacy', [AdminsController::class, 'addPrivacy'])->middleware('is_admin');
Route::get('admin/editPrivacy/{id}', [AdminsController::class, 'editPrivacy'])->middleware('is_admin');
Route::post('admin/add_privacy', [AdminsController::class, 'add_privacy'])->middleware('is_admin');
Route::post('admin/edit_privacy/{id}', [AdminsController::class, 'edit_privacy'])->middleware('is_admin');
Route::get('admin/delete_privacy/{id}', [AdminsController::class, 'delete_privacy'])->middleware('is_admin');

// Portfolio
Route::get('admin/portfolios', [AdminsController::class, 'portfolios'])->middleware('is_admin');
Route::get('admin/addPortfolio', [AdminsController::class, 'addPortfolio'])->middleware('is_admin');
Route::get('admin/editPortfolio/{id}', [AdminsController::class, 'editPortfolio'])->middleware('is_admin');
Route::post('admin/add_portfolio', [AdminsController::class, 'add_portfolio'])->middleware('is_admin');
Route::post('admin/edit_portfolio/{id}', [AdminsController::class, 'edit_portfolio'])->middleware('is_admin');
Route::get('admin/delete_portfolio/{id}', [AdminsController::class, 'delete_portfolio'])->middleware('is_admin');

// Frequently Asked Questions
Route::get('admin/faq', [AdminsController::class, 'faq'])->middleware('is_admin');
Route::get('admin/addFaq', [AdminsController::class, 'addFaq'])->middleware('is_admin');
Route::get('admin/editFaq/{id}', [AdminsController::class, 'editFaq'])->middleware('is_admin');
Route::post('admin/add_Faq', [AdminsController::class, 'add_Faq'])->middleware('is_admin');
Route::post('admin/edit_Faq/{id}', [AdminsController::class, 'edit_Faq'])->middleware('is_admin');
Route::get('admin/delete_Faq/{id}', [AdminsController::class, 'delete_Faq'])->middleware('is_admin');

// Risks Declaration
Route::get('admin/editRisk', [AdminsController::class, 'editRisk'])->middleware('is_admin');
Route::post('admin/edit_Risk', [AdminsController::class, 'edit_Risk'])->middleware('is_admin');

// Video Upload
Route::post('/admin/store-file', [FileController::class, 'store'])->middleware('store-file');

// How It Works
Route::get('admin/how', [AdminsController::class, 'how'])->middleware('is_admin');
Route::get('admin/addHow', [AdminsController::class, 'addHow'])->middleware('is_admin');
Route::get('admin/editHow/{id}', [AdminsController::class, 'editHow'])->middleware('is_admin');
Route::post('admin/add_How', [AdminsController::class, 'add_How'])->middleware('is_admin');
Route::post('admin/edit_How/{id}', [AdminsController::class, 'edit_How'])->middleware('is_admin');
Route::get('admin/delete_How/{id}', [AdminsController::class, 'delete_How'])->middleware('is_admin');

// Courses
Route::get('admin/courses', [AdminsController::class, 'courses'])->middleware('is_admin');
Route::get('admin/addCourse', [AdminsController::class, 'addCourse'])->middleware('is_admin');
Route::get('admin/editCourse/{id}', [AdminsController::class, 'editCourse'])->middleware('is_admin');
Route::post('admin/add_Course', [AdminsController::class, 'add_Course'])->middleware('is_admin');
Route::post('admin/edit_Course/{id}', [AdminsController::class, 'edit_Course'])->middleware('is_admin');
Route::get('admin/delete_Course/{id}', [AdminsController::class, 'delete_Course'])->middleware('is_admin');

// Topics
Route::get('admin/topics', [AdminsController::class, 'topics'])->middleware('is_admin');
Route::get('admin/addTopic', [AdminsController::class, 'addTopic'])->middleware('is_admin');
Route::get('admin/editTopic/{id}', [AdminsController::class, 'editTopic'])->middleware('is_admin');
Route::post('admin/add_Topic', [AdminsController::class, 'add_Topic'])->middleware('is_admin');
Route::post('admin/edit_Topic/{id}', [AdminsController::class, 'edit_Topic'])->middleware('is_admin');
Route::get('admin/delete_Topic/{id}', [AdminsController::class, 'delete_Topic'])->middleware('is_admin');

// Copyright Statement
Route::get('admin/editCopyright', [AdminsController::class, 'copyright'])->middleware('is_admin');
Route::post('admin/edit_Copyright', [AdminsController::class, 'edit_copyright'])->middleware('is_admin');

// Sliders
Route::get('admin/sliders', [AdminsController::class, 'slider'])->middleware('is_admin');
Route::get('admin/addSlider', [AdminsController::class, 'addSlider'])->middleware('is_admin');
Route::post('admin/add_Slider', [AdminsController::class, 'add_Slider'])->middleware('is_admin');
Route::get('admin/editSlider/{id}', [AdminsController::class, 'editSlider'])->middleware('is_admin');
Route::post('admin/edit_Slider/{id}', [AdminsController::class, 'edit_Slider'])->middleware('is_admin');
Route::get('admin/deleteSlider/{id}', [AdminsController::class, 'deleteSlider'])->middleware('is_admin');


// services
Route::get('admin/services', [AdminsController::class, 'services'])->middleware('is_admin');
Route::get('admin/addService', [AdminsController::class, 'addService'])->middleware('is_admin');
Route::post('admin/add_Service', [AdminsController::class, 'add_Service'])->middleware('is_admin');
Route::get('admin/editService/{id}', [AdminsController::class, 'editService'])->middleware('is_admin');
Route::post('admin/edit_Service/{id}', [AdminsController::class, 'edit_Service'])->middleware('is_admin');
Route::get('admin/deleteService/{id}', [AdminsController::class, 'deleteService'])->middleware('is_admin');

// Banners
Route::get('admin/banners', [AdminsController::class, 'banners'])->middleware('is_admin');
Route::get('admin/editBanner/{id}', [AdminsController::class, 'editBanner'])->middleware('is_admin');
Route::post('admin/edit_Banner/{id}', [AdminsController::class, 'edit_Banner'])->middleware('is_admin');

// Messages
Route::get('admin/allMessages', [AdminsController::class, 'allMessages'])->middleware('is_admin');
Route::get('admin/unread', [AdminsController::class, 'unread'])->middleware('is_admin');
Route::post('admin/reply', [AdminsController::class, 'reply'])->middleware('is_admin');
Route::get('admin/read/{id}', [AdminsController::class, 'read'])->middleware('is_admin');
Route::get('admin/deleteMessage/{id}', [AdminsController::class, 'deleteMessage'])->middleware('is_admin');

// Categories
Route::get('admin/categories', [AdminsController::class, 'categories'])->middleware('is_admin');
Route::get('admin/categories/{identifier}', [AdminsController::class, 'categories_identify'])->middleware('is_admin');
Route::get('admin/addCategory', [AdminsController::class, 'addCategory'])->middleware('is_admin');
Route::post('admin/add_Category', [AdminsController::class, 'add_Category'])->middleware('is_admin');
Route::get('admin/editCategories/{id}', [AdminsController::class, 'editCategories'])->middleware('is_admin');
Route::post('admin/edit_Category/{id}', [AdminsController::class, 'edit_Category'])->middleware('is_admin');
Route::get('admin/deleteCategory/{id}', [AdminsController::class, 'deleteCategory'])->middleware('is_admin');

// Categories
Route::get('admin/testimonials', [AdminsController::class, 'testimonials'])->middleware('is_admin');
Route::get('admin/addTestimonial', [AdminsController::class, 'addTestimonial'])->middleware('is_admin');
Route::post('admin/add_Testimonial', [AdminsController::class, 'add_Testimonial'])->middleware('is_admin');
Route::get('admin/editTestimonial/{id}', [AdminsController::class, 'editTestimonial'])->middleware('is_admin');
Route::post('admin/edit_Testimonial/{id}', [AdminsController::class, 'edit_Testimonial'])->middleware('is_admin');

// Signal
Route::get('admin/signals', [AdminsController::class, 'signals'])->middleware('is_admin');
Route::get('admin/addSignal', [AdminsController::class, 'addSignal'])->middleware('is_admin');
Route::post('admin/add_Signal', [AdminsController::class, 'add_Signal'])->middleware('is_admin');
Route::get('admin/editSignal/{id}', [AdminsController::class, 'editSignal'])->middleware('is_admin');
Route::post('admin/edit_Signal/{id}', [AdminsController::class, 'edit_Signal'])->middleware('is_admin');

// Blog
Route::get('admin/blog', [AdminsController::class, 'blog'])->middleware('is_admin');
Route::get('admin/addBlog', [AdminsController::class, 'addBlog'])->middleware('is_admin');
Route::post('admin/add_Blog', [AdminsController::class, 'add_Blog'])->middleware('is_admin');
Route::get('admin/editBlog/{id}', [AdminsController::class, 'editBlog'])->middleware('is_admin');
Route::post('admin/edit_Blog/{id}', [AdminsController::class, 'edit_Blog'])->middleware('is_admin');
Route::get('admin/delete_Blog/{id}', [AdminsController::class, 'delete_Blog'])->middleware('is_admin');


// Payments
Route::get('admin/b2b', [AdminsController::class, 'b2b'])->middleware('is_admin');
Route::get('admin/b2c', [AdminsController::class, 'b2c'])->middleware('is_admin');
Route::get('admin/lnmo_api_response', [AdminsController::class, 'lnmo_api_response'])->middleware('is_admin');
Route::get('admin/mobile_payments', [AdminsController::class, 'mobile_payments'])->middleware('is_admin');
Route::get('admin/reverse_transaction', [AdminsController::class, 'reverse_transaction'])->middleware('is_admin');
Route::get('admin/transaction_status', [AdminsController::class, 'transaction_status'])->middleware('is_admin');
Route::get('admin/accountbalance', [AdminsController::class, 'accountbalance'])->middleware('is_admin');
Route::get('admin/approve-transaction/{id}', [AdminsController::class, 'approve_transaction'])->middleware('is_admin');
Route::get('admin/approve-transaction-stk/{id}', [AdminsController::class, 'approve_transaction_stk'])->middleware('is_admin');

// Enroll Users
Route::get('admin/enroll-users', [AdminsController::class, 'enroll_users'])->middleware('is_admin');
Route::get('admin/enroll-users-post/{id}', [AdminsController::class, 'enroll_users_post'])->middleware('is_admin');
Route::post('admin/enroll-user-now', [AdminsController::class, 'enroll_user_now'])->middleware('is_admin');
Route::get('admin/enroll-users-posts/{email}', [AdminsController::class, 'enroll_users_now'])->middleware('is_admin');

//Manage Users
Route::get('admin/users', [AdminsController::class, 'users'])->middleware('is_admin');
Route::get('admin/admins', [AdminsController::class, 'admins'])->middleware('is_admin');
Route::get('admin/addUser', [AdminsController::class, 'addUser'])->middleware('is_admin');
Route::get('admin/editUser/{id}', [AdminsController::class, 'editUser'])->middleware('is_admin');
Route::post('admin/add_User', [AdminsController::class, 'add_User'])->middleware('is_admin');
Route::post('admin/edit_User/{id}', [AdminsController::class, 'edit_User'])->middleware('is_admin');
Route::get('admin/delete_user/{id}', [AdminsController::class, 'delete_user'])->middleware('is_admin');
Route::get('admin/switchRole/{id}', [AdminsController::class, 'switchRole'])->middleware('is_admin');
Route::get('admin/switchStatus/{id}', [AdminsController::class, 'switchStatus'])->middleware('is_admin');

Route::get('admin/updateSlung', [AdminsController::class, 'updateSlung'])->middleware('is_admin');

Route::get('admin/products', [AdminsController::class, 'products'])->middleware('is_admin');
Route::get('admin/editProduct/{id}', [AdminsController::class, 'editProduct'])->middleware('is_admin');
Route::get('admin/deleteProduct/{id}', [AdminsController::class, 'deleteProduct'])->middleware('is_admin');
Route::post('admin/edit_Product/{id}',  [AdminsController::class, 'edit_Product'])->middleware('is_admin');
Route::get('admin/addProduct',  [AdminsController::class, 'addProduct'])->middleware('is_admin');
Route::post('admin/add_Product',  [AdminsController::class, 'add_Product'])->middleware('is_admin');


//Sub Categories
Route::get('admin/subCategories', [AdminsController::class, 'subCategories'])->middleware('is_admin');
Route::get('admin/subCategories/{identifiers}', [AdminsController::class, 'subCategories'])->middleware('is_admin');
Route::get('admin/editSubCategories/{id}', [AdminsController::class, 'editSubCategories'])->middleware('is_admin');
Route::get('admin/deleteSubCategory/{id}', [AdminsController::class, 'deleteSubCategory'])->middleware('is_admin');
Route::post('admin/edit_SubCategory/{id}',  [AdminsController::class, 'edit_SubCategory'])->middleware('is_admin');
Route::get('admin/addSubCategory',  [AdminsController::class, 'addSubCategory'])->middleware('is_admin');
Route::post('admin/add_SubCategory',  [AdminsController::class, 'add_SubCategory'])->middleware('is_admin');

Route::get('admin/tags', [AdminsController::class, 'tags'])->middleware('is_admin');
Route::get('admin/editTag/{id}', [AdminsController::class, 'editTag'])->middleware('is_admin');
Route::get('admin/deleteTag/{id}', [AdminsController::class, 'deleteTag'])->middleware('is_admin');
Route::post('admin/edit_Tag/{id}',  [AdminsController::class, 'edit_Tag'])->middleware('is_admin');
Route::get('admin/addTag',  [AdminsController::class, 'addTag'])->middleware('is_admin');
Route::post('admin/add_Tag',  [AdminsController::class, 'add_Tag'])->middleware('is_admin');


Route::get('admin/dropzones/{id}', [DropzoneController::class, 'dropzones']);
Route::get('admin/dropzonese/{id}', [DropzoneController::class, 'dropzonese']);

Route::get('admin/dropzone/{id}', [DropzoneController::class, 'dropzone']);
Route::post('admin/dropzone/store', [DropzoneController::class, 'dropzoneStore'])->name('dropzone.store');
Route::post('admin/dropzones/store', [DropzoneController::class, 'dropzoneStores'])->name('dropzones.store');
Route::get('/photos', [AdminsController::class, 'photos'])->middleware('is_admin');
Route::get('/photosGrid', [AdminsController::class, 'photosGrid'])->middleware('is_admin');
Route::get('/editPhoto/{id}',  [AdminsController::class, 'editPhoto'])->middleware('is_admin');
Route::get('/deletePhoto/{id}',  [AdminsController::class, 'deletePhoto'])->middleware('is_admin');
Route::post('/edit_Photo/{id}',  [AdminsController::class, 'edit_Photo'])->middleware('is_admin');

Route::get('admin/activitylogs', [AdminsController::class, 'activitylogs'])->middleware('is_admin');


Route::get('admin/homes', [AdminsController::class, 'homes'])->middleware('is_admin');
Route::get('admin/homes/destroy', [AdminsController::class, 'homes_destroy'])->middleware('is_admin');
Route::get('admin/editHome/{id}', [AdminsController::class, 'editHome'])->middleware('is_admin');
Route::get('admin/deleteHome/{id}', [AdminsController::class, 'deleteHome'])->middleware('is_admin');
Route::post('admin/edit_Home/{id}',  [AdminsController::class, 'edit_Home'])->middleware('is_admin');
Route::get('admin/addHome',  [AdminsController::class, 'addHome'])->middleware('is_admin');
Route::post('admin/add_Home',  [AdminsController::class, 'add_Home'])->middleware('is_admin');
Route::get('admin/addAmenities',  [AdminsController::class, 'addAmenities'])->middleware('is_admin');
Route::post('admin/add_Amenities',  [AdminsController::class, 'add_Amenities'])->middleware('is_admin');
Route::get('admin/editAmenities/{id}',  [AdminsController::class, 'editAmenities'])->middleware('is_admin');
Route::post('admin/edit_Amenities/{id}',  [AdminsController::class, 'edit_Amenities'])->middleware('is_admin');
Route::get('admin/editGallery/{id}',  [AdminsController::class, 'editGallery'])->middleware('is_admin');
Route::post('admin/edit_Gallery/{id}',  [AdminsController::class, 'edit_Gallery'])->middleware('is_admin');



Route::get('admin/addPlan',  [AdminsController::class, 'addPlan'])->middleware('is_admin');
Route::post('admin/add_Plan',  [AdminsController::class, 'add_Plan'])->middleware('is_admin');

Route::get('admin/addFacts',  [AdminsController::class, 'addFacts'])->middleware('is_admin');
Route::post('admin/add_Facts',  [AdminsController::class, 'add_Facts'])->middleware('is_admin');
Route::get('admin/editFacts/{id}',  [AdminsController::class, 'editFacts'])->middleware('is_admin');
Route::post('admin/edit_Facts/{id}',  [AdminsController::class, 'edit_Facts'])->middleware('is_admin');


Route::get('admin/addGallery',  [AdminsController::class, 'addGallery'])->middleware('is_admin');
Route::post('admin/add_Gallery',  [AdminsController::class, 'add_Gallery'])->middleware('is_admin');

Route::get('admin/strtolower',  [AdminsController::class, 'strtolower'])->middleware('is_admin');





// AJAX REQUESTS
Route::post('admin/deleteProductAjax', [AdminsController::class, 'deleteProductAjax'])->middleware('is_admin');
Route::post('admin/deletePortfolioAjax', [AdminsController::class, 'deletePortfolioAjax'])->middleware('is_admin');
Route::post('admin/deleteServiceAjax', [AdminsController::class, 'deleteServiceAjax'])->middleware('is_admin');
Route::post('admin/addCategoryAjaxRequest', [AdminsController::class, 'addCategoryAjaxRequest'])->middleware('is_admin');
Route::post('admin/deleteTagAjax', [AdminsController::class, 'deleteTagAjax'])->middleware('is_admin');
Route::post('admin/deleteSubCategoryAjax', [AdminsController::class, 'deleteSubCategoryAjax'])->middleware('is_admin');
Route::post('admin/deleteBlogAjax', [AdminsController::class, 'deleteBlogAjax'])->middleware('is_admin');
Route::put('admin/updateSiteSettingsAjax', [AdminsController::class, 'updateSiteSettingsAjax'])->middleware('is_admin');
Route::put('admin/updateMailerAjax', [AdminsController::class, 'updateMailerAjax'])->middleware('is_admin');
Route::put('admin/updateSiteSocialMediaAjax', [AdminsController::class, 'updateSiteSocialMediaAjax'])->middleware('is_admin');
Route::put('admin/updateSiteCredentials', [AdminsController::class, 'updateSiteCredentials'])->middleware('is_admin');
Route::post('admin/deleteCategoryAjax', [AdminsController::class, 'deleteCategoryAjax'])->middleware('is_admin');
Route::post('admin/deleteTestimonialAjax', [AdminsController::class, 'deleteTestimonialAjax'])->middleware('is_admin');
Route::post('admin/deleteSliderAjax', [AdminsController::class, 'deleteSliderAjax'])->middleware('is_admin');
Route::post('admin/deleteC2BAjax', [AdminsController::class, 'deleteC2BAjax'])->middleware('is_admin');
Route::post('admin/deleteB2BAjax', [AdminsController::class, 'deleteB2BAjax'])->middleware('is_admin');
Route::post('admin/deleteB2CAjax', [AdminsController::class, 'deleteB2CAjax'])->middleware('is_admin');
Route::post('admin/deleteBalAjax', [AdminsController::class, 'deleteBalAjax'])->middleware('is_admin');
Route::post('admin/deleteSTKAjax', [AdminsController::class, 'deleteSTKAjax'])->middleware('is_admin');
Route::post('admin/deleteReverseAjax', [AdminsController::class, 'deleteReverseAjax'])->middleware('is_admin');
Route::post('admin/deleteTransactionAjax', [AdminsController::class, 'deleteTransactionAjax'])->middleware('is_admin');
Route::post('admin/deleteUserAjax', [AdminsController::class, 'deleteUserAjax'])->middleware('is_admin');
Route::post('admin/deleteFaqAjax', [AdminsController::class, 'deleteFaqAjax'])->middleware('is_admin');
Route::post('admin/deletePrivacyAjax', [AdminsController::class, 'deletePrivacyAjax'])->middleware('is_admin');
Route::post('admin/deleteTermsAjax', [AdminsController::class, 'deleteTermsAjax'])->middleware('is_admin');
Route::post('admin/deleteHowAjax', [AdminsController::class, 'deleteHowAjax'])->middleware('is_admin');
Route::post('admin/deleteCoursesAjax', [AdminsController::class, 'deleteCoursesAjax'])->middleware('is_admin');
Route::post('admin/deleteTopicsAjax', [AdminsController::class, 'deleteTopicsAjax'])->middleware('is_admin');
Route::post('admin/deleteSignalsAjax', [AdminsController::class, 'deleteSignalsAjax'])->middleware('is_admin');
Route::post('admin/deleteHomeAjax', [AdminsController::class, 'deleteHomeAjax'])->middleware('is_admin');


Route::get('admin/destroy', [AdminsController::class, 'destroy'])->middleware('is_admin');

