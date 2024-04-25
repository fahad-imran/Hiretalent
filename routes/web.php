<?php

use Whoops\Run;
use Carbon\Language;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CheckEmailController;
use App\Http\Controllers\GoogleAccountController;
use App\Http\Controllers\EmployeeRequestController;
use App\Http\Controllers\TermAndConditionController;
use App\Http\Controllers\SubmitOwnSkillSetController;
use App\Http\Controllers\EmailVerificationOptController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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

// Route::get('/', function () {
//     return view('welcome');
// });
//$URL = Request::url();

// if(!Http::get($URL)->successful()){
//     return redirect('/');
//  }



Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//General Routes
//route for FrontController
Route::get('/', [FrontController::class, 'index'])->name('website');
Route::get('/register-ok', [FrontController::class, 'index']);
Route::get('blog', [FrontController::class, 'blog'])->name('blog');
Route::get('/services', [FrontController::class, 'services'])->name('services');
Route::get('/it-services', [FrontController::class, 'outitconsultingservices'])->name('ouritconsultingservices');
Route::get('/requests', [FrontController::class, 'requests'])->middleware('auth')->name('requests');

Route::get('service/{slug}', [FrontController::class, 'serviceDetail'])->name('skillset.detail');
Route::get('expertise/featur', [FrontController::class, 'expertiseFeatur'])->name('expertise.featur');
Route::get('/booking-ok', [FrontController::class, 'resoureBookingSuccess'])->middleware(['auth'])->name('resoure.book.success');

//route for ProfileController
Route::get('/profile', [ProfileController::class, 'profile'])->middleware('auth')->name('profile');
Route::post('profile/update', [ProfileController::class, 'updateProfile'])->middleware('auth')->name('profile.update');

//route for EmployeeRequestController
Route::get('employee/request', [EmployeeRequestController::class, 'employeeRequest'])->middleware('auth')->name('store.employee.request');
Route::get('employee/request/update', [EmployeeRequestController::class, 'UpdateemployeeRequest'])->middleware('auth')->name('update.employee.request');
Route::get('edit/employee/request', [EmployeeRequestController::class, 'editEmployeeRequest'])->name('edit.employee.request');
Route::get('cancelled', [EmployeeRequestController::class, 'cancelled'])->name('cancelled');
//Route for BlogController
Route::group(['prefix' => 'blog'], function () {
    Route::get('/blog-1', [BlogController::class, 'blog1'])->name('blog.blog1');
    Route::get('blog2', [BlogController::class, 'blog2'])->name('blog.blog2');
});
//Route for ContactUsController
Route::get('/contact', [ContactUsController::class, 'contact_us'])->name('contact_us');
Route::get('/contact/thankyou', [ContactUsController::class, 'contact_us'])->name('contact_us');
Route::post('/contact-us/store', [ContactUsController::class, 'contactUsStore'])->name('store.contact.us');

//Route fot SubmitOwnSkillsetController
Route::post('submit/own/skillset', [SubmitOwnSkillSetController::class, 'SubmitOwnSkillset'])->middleware('auth')->name('submit.own.skillset');

//Route for term and condition
Route::get('terms-conditions', [TermAndConditionController::class, 'termAndCondition'])->name('term.condition');
Route::get('privacy-policy', [TermAndConditionController::class, 'privacyPolicy'])->name('privacy.policy');
//Route for GoogleAccountControllr
Route::get('auth/google', [GoogleAccountController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleAccountController::class, 'handleGoogleCallback']);
//Route for FacebookController
Route::get('auth/facebook', [FacebookController::class, 'facebookRedirect']);
Route::get('auth/facebook/callback', [FacebookController::class, 'callbackFromFacebook']);
///
//route for GuestController
Route::get('guest', [GuestController::class, 'guest'])->name('guest');
Route::post('email-validate', [CheckEmailController::class, 'checkEmail'])->name('checkEmail');

//route for change LanguageController
Route::get('language/{locale}', [LanguageController::class, 'lang']);

Route::fallback(function () {
    return view('404');
});

//route for EmailverificationoptController
Route::get('account/verify/{token}', [EmailVerificationOptController::class, 'verifyOpt'])->name('account.verify.token');
//route for ChangePasswordController
Route::get('/change/password',[ChangePasswordController::class,'index'])->middleware('auth')->name('change.password');
Route::post('/change-password',[ChangePasswordController::class,'store'])->middleware('auth')->name('store.change.password');










//Route for EN Language
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route for English Language
//route for FrontController
Route::get('/en', [FrontController::class, 'index'])->name('website');
Route::get('en/register-ok', [FrontController::class, 'index']);
Route::get('en/blog', [FrontController::class, 'blog'])->name('blog');
Route::get('en/services', [FrontController::class, 'services'])->name('services');
Route::get('en/it-services', [FrontController::class, 'outitconsultingservices'])->name('ouritconsultingservices');
Route::get('en/requests', [FrontController::class, 'requests'])->middleware('auth')->name('requests');


Route::get('en/service/{slug}', [FrontController::class, 'serviceDetail'])->name('skillset.detail');
Route::get('expertise/featur', [FrontController::class, 'expertiseFeatur'])->name('expertise.featur');
Route::get('en/booking-ok', [FrontController::class, 'resoureBookingSuccess'])->middleware(['auth'])->name('resoure.book.success');

//route for ProfileController
Route::get('en/profile', [ProfileController::class, 'profile'])->middleware('auth')->name('profile');
Route::post('profile/update', [ProfileController::class, 'updateProfile'])->middleware('auth')->name('profile.update');

//route for EmployeeRequestController
Route::get('employee/request', [EmployeeRequestController::class, 'employeeRequest'])->middleware('auth')->name('store.employee.request');
Route::get('employee/request/update', [EmployeeRequestController::class, 'UpdateemployeeRequest'])->middleware('auth')->name('update.employee.request');
Route::get('edit/employee/request', [EmployeeRequestController::class, 'editEmployeeRequest'])->name('edit.employee.request');
Route::get('cancelled', [EmployeeRequestController::class, 'cancelled'])->name('cancelled');
//Route for BlogController
Route::group(['prefix' => 'en/blog'], function () {
    Route::get('/how-virtual-hiring', [BlogController::class, 'blog1'])->name('blog.blog1');
    Route::get('programming-languages-and-their-frameworks', [BlogController::class, 'blog2'])->name('blog.blog2');
});
//Route for ContactUsController
Route::get('en/contact', [ContactUsController::class, 'contact_us'])->name('contact_us');
Route::get('en/contact/thank-you', [ContactUsController::class, 'contact_us'])->name('contact_us');
Route::post('/contact-us/store', [ContactUsController::class, 'contactUsStore'])->name('store.contact.us');

//Route fot SubmitOwnSkillsetController
Route::post('submit/own/skillset', [SubmitOwnSkillSetController::class, 'SubmitOwnSkillset'])->middleware('auth')->name('submit.own.skillset');

//Route for term and condition
Route::get('en/terms-conditions', [TermAndConditionController::class, 'termAndCondition'])->name('term.condition');
Route::get('en/privacy-policy', [TermAndConditionController::class, 'privacyPolicy'])->name('privacy.policy');
//Route for GoogleAccountControllr
Route::get('auth/google', [GoogleAccountController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleAccountController::class, 'handleGoogleCallback']);
//Route for FacebookController
Route::get('auth/facebook', [FacebookController::class, 'facebookRedirect']);
Route::get('auth/facebook/callback', [FacebookController::class, 'callbackFromFacebook']);
///
//route for GuestController
Route::get('guest', [GuestController::class, 'guest'])->name('guest');
Route::post('email-validate', [CheckEmailController::class, 'checkEmail'])->name('checkEmail');

//route for change LanguageController
Route::get('language/{locale}', [LanguageController::class, 'lang']);

Route::fallback(function () {
    return view('404');
});

//route for EmailverificationoptController
Route::get('account/verify/{token}', [EmailVerificationOptController::class, 'verifyOpt'])->name('account.verify.token');
Route::get('en/change/password',[ChangePasswordController::class,'index'])->name('change.password');






//Route for CZ Language
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route for English Language
//route for FrontController
Route::get('/cz', [FrontController::class, 'index'])->name('website');
Route::get('cz/blog', [FrontController::class, 'blog'])->name('blog');
Route::get('cz/services', [FrontController::class, 'services'])->name('services');
Route::get('/it-services', [FrontController::class, 'outitconsultingservices'])->name('ouritconsultingservices');
Route::get('cz/it-services', [FrontController::class, 'outitconsultingservices'])->name('ouritconsultingservices');
Route::get('cz/requests', [FrontController::class, 'requests'])->middleware('auth')->name('requests');


Route::get('cz/service/{slug}', [FrontController::class, 'serviceDetail'])->name('skillset.detail');
//Route::get('service/{slug}/booking-ok', [FrontController::class, 'serviceDetail'])->name('skillset.detail');
Route::get('expertise/featur', [FrontController::class, 'expertiseFeatur'])->name('expertise.featur');
Route::get('cz/booking-ok', [FrontController::class, 'resoureBookingSuccess'])->middleware(['auth'])->name('resoure.book.success');

//route for ProfileController
Route::get('cz/profile', [ProfileController::class, 'profile'])->middleware('auth')->name('profile');
Route::post('profile/update', [ProfileController::class, 'updateProfile'])->middleware('auth')->name('profile.update');

//route for EmployeeRequestController
Route::get('employee/request', [EmployeeRequestController::class, 'employeeRequest'])->middleware('auth')->name('store.employee.request');
Route::get('employee/request/update', [EmployeeRequestController::class, 'UpdateemployeeRequest'])->middleware('auth')->name('update.employee.request');
Route::get('edit/employee/request', [EmployeeRequestController::class, 'editEmployeeRequest'])->name('edit.employee.request');
Route::get('cancelled', [EmployeeRequestController::class, 'cancelled'])->name('cancelled');
//Route for BlogController
Route::group(['prefix' => 'cz/blog'], function () {
    Route::get('/how-virtual-hiring', [BlogController::class, 'blog1'])->name('blog.blog1');
    Route::get('programming-languages-and-their-frameworks', [BlogController::class, 'blog2'])->name('blog.blog2');
});
//Route for ContactUsController
Route::get('cz/contact', [ContactUsController::class, 'contact_us'])->name('contact_us');
Route::get('cz/contact/thank-you', [ContactUsController::class, 'contact_us'])->name('contact_us');
Route::post('/contact-us/store', [ContactUsController::class, 'contactUsStore'])->name('store.contact.us');

//Route fot SubmitOwnSkillsetController
Route::post('submit/own/skillset', [SubmitOwnSkillSetController::class, 'SubmitOwnSkillset'])->middleware('auth')->name('submit.own.skillset');

//Route for term and condition
Route::get('cz/terms-conditions', [TermAndConditionController::class, 'termAndCondition'])->name('term.condition');
Route::get('cz/privacy-policy', [TermAndConditionController::class, 'privacyPolicy'])->name('privacy.policy');
//Route for GoogleAccountControllr
Route::get('auth/google', [GoogleAccountController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleAccountController::class, 'handleGoogleCallback']);
//Route for FacebookController
Route::get('auth/facebook', [FacebookController::class, 'facebookRedirect']);
Route::get('auth/facebook/callback', [FacebookController::class, 'callbackFromFacebook']);
///
//route for GuestController
Route::get('guest', [GuestController::class, 'guest'])->name('guest');
Route::post('email-validate', [CheckEmailController::class, 'checkEmail'])->name('checkEmail');

//route for change LanguageController
Route::get('language/{locale}', [LanguageController::class, 'lang']);

Route::fallback(function () {
    return view('404');
});

//route for EmailverificationoptController
Route::get('account/verify/{token}', [EmailVerificationOptController::class, 'verifyOpt'])->name('account.verify.token');
Route::get('cz/change/password',[ChangePasswordController::class,'index'])->name('change.password');
