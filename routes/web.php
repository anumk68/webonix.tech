<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PackagesQueryController;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/about-us', [IndexController::class, 'about'])->name('about-us');
Route::get('/best-web-development-agency', [IndexController::class, 'web_development'])->name('web-development');
Route::get('/best-website-design-agency', [IndexController::class, 'web_design'])->name('web-design');
Route::get('/best-seo-agency', [IndexController::class, 'searchEngineOptimization'])->name('search-engine-optimization');
Route::get('/best-local-seo-agency', [IndexController::class, 'localSeo'])->name('local-seo');

Route::get('/seo-service', [IndexController::class, 'seoService'])->name('seo-service');

Route::get('/ecommerce-seo-agency', [IndexController::class, 'e_commerce'])->name('e-commerce-seo');
Route::get('/social-media-marketing-agency', [IndexController::class, 'socialMediaMarketing'])->name('social-media-marketing');
Route::get('/ppc-management-services', [IndexController::class, 'ppc'])->name('ppc-serivce');
Route::get('/digital-content-marketing-creation', [IndexController::class, 'digital_content_marketing'])->name('digital-content-marketing');
Route::get('/blog', [IndexController::class, 'blog'])->name('blog');
Route::get('/contact-us', [IndexController::class, 'contact'])->name('contact-us');
Route::get('/refund-policy', [IndexController::class, 'refund'])->name('refund-policy');
Route::get('/privacy-policy', [IndexController::class, 'privacy'])->name('privacy-policy');
Route::get('/terms-condition', [IndexController::class, 'terms'])->name('terms-condition');
Route::get('/thank-you', [IndexController::class, 'thanks'])->name('thank-you');
Route::post('/send-otp', [IndexController::class, 'sendOtp'])->name('contact.sendOtp');
Route::post('/verify-otp', [IndexController::class, 'verifyOtp'])->name('contact.verifyOtp');
Route::post('/submit-contact', [IndexController::class, 'submitContact'])->name('contact.submit');
Route::get('/website-design-development', [IndexController::class, 'leadingPage'])->name('leading.page');
Route::post('/contact/store', [IndexController::class, 'store'])->name('contact.store');

Route::post('/package-query', [PackagesQueryController::class, 'store'])->name('package.query.store');
Route::post('/contact-submit', [IndexController::class, 'landingsubmitContact'])->name('landingsubmitContact');
