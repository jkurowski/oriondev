<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;

use Illuminate\Auth\Access\AuthorizationException;

// CMS
use App\Http\Controllers\Front\ArticleController;

use App\Http\Controllers\Admin\Gallery\ImageController;
use App\Http\Controllers\Admin\Gallery\IndexController as GalleryController;
use App\Http\Controllers\Admin\Developro\Property\PropertyController;
use App\Http\Controllers\Admin\Developro\Floor\FloorController;
use App\Http\Controllers\Admin\Developro\Building\BuildingController;
use App\Http\Controllers\Front\Developro\InvestmentController;

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

Auth::routes();

Route::get('/register', function () {
    abort(404);
});
Route::post('/register', function () {
    abort(404);
});

Route::get('routes', function () {
    Artisan::call('route:list');

    return '<pre>' . Artisan::output() . '</pre>';
});
//
//Route::get('/email/verify/{id}/{hash}', function ($id, $hash) {
//    // Pobierz użytkownika na podstawie ID z URL
//    $user = User::find($id);
//
//    if (!$user) {
//        throw new AuthorizationException('User not found');
//    }
//
//    // Sprawdź, czy hash e-maila zgadza się z tym, który jest w URL
//    if (!hash_equals(sha1($user->getEmailForVerification()), $hash)) {
//        throw new AuthorizationException('Invalid verification link');
//    }
//
//    // Jeśli hash pasuje, zweryfikuj e-mail użytkownika
//    $user->markEmailAsVerified();
//    $user->active = 1;
//    $user->save();
//
//    // Przekieruj użytkownika na stronę logowania
//    return redirect('/login')->with('verified', true);
//})->middleware(['signed'])->name('verification.verify');
//
//Route::get('/email/verify', function () {
//    return view('auth.verify-email');
//})->name('verification.notice');
//
//Route::post('/email/verification-notification', function (Request $request) {
//    $request->user()->sendEmailVerificationNotification();
//    return back()->with('message', 'Wiadomość z link aktywacyjnym wysłana!');
//})->middleware(['throttle:6,1'])->name('verification.send');
//

Route::group(['namespace' => 'Front', 'middleware' => 'restrictIp', 'as' => 'front.'], function () {

    //Cron
    Route::get('/cron/{id}', 'Cron\IndexController@updateVOX')->name('cron.vox');

    Route::post('/kontakt', 'ContactController@send')->name('contact.send');

    Route::get('/', 'IndexController@index')->name('index');

    //Route::get('/articles/move', [ArticleController::class, 'move']);
    //Route::get('/investment/move', [InvestmentController::class, 'move']);
    //Route::get('/building/move', [BuildingController::class, 'move']);
    //Route::get('/floor/move', [FloorController::class, 'move']);
    //Route::get('/property/move', [PropertyController::class, 'move']);
    //Route::get('/gallery/move', [GalleryController::class, 'move']);
    //Route::get('/images/move', [ImageController::class, 'move']);
    //Route::get('/plans/move', [InvestmentController::class, 'movePlans']);
//
    Route::get('/dzialki', 'MenuController@dzialki')->name('dzialki');
    Route::get('/o-nas', 'MenuController@onas')->name('o-nas');

//
//    Route::get('/kontakt', 'ContactController@index')->name('contact');
    Route::post('/kontakt/{property}', 'ContactController@property')->name('contact.property');
//
//    Route::post('/clipboard', 'Clipboard\IndexController@store')->name('clipboard.store');
//    Route::post('/clipboard/send', 'Clipboard\IndexController@send')->name('clipboard.send');
//    Route::get('/schowek', 'Clipboard\IndexController@index')->name('clipboard.index');
//    Route::delete('/clipboard', 'Clipboard\IndexController@destroy')->name('clipboard.destroy');

    Route::resource('/o-firmie/aktualnosci', ArticleController::class)->only(['index', 'show']);

//    Route::resources([
//        '/aktualnosci' => 'ArticleController',
//        '/gallery' => 'GalleryController'
//    ]);
//
//    // DeveloPro
    Route::group(['namespace' => 'Developro', 'as' => 'developro.'], function () {
//
//        Route::post('{property}/notifications', 'Property\NotificationController@store')->name('properties.notifications.store');
//        Route::get('/unsubscribe/{hash}', 'Property\NotificationController@unsubscribe')->name('properties.notifications.unsubscribe');
//
        Route::get('/inwestycje-w-sprzedazy', 'IndexController@index')->name('current');
        Route::get('/domy', 'IndexController@houses')->name('houses');
        Route::get('/wyniki-wyszukiwania', 'SearchController@index')->name('search.index');
//
        Route::get('/inwestycje-zrealizowane', 'CompletedController@index')->name('completed');
        Route::get('/inwestycja-zrealizowana/{slug}', 'CompletedController@show')->name('completed.show');

        Route::get('/wynajem', 'Rent\IndexController@index')->name('rent');
        Route::get('/wynajem/{slug}', 'Rent\IndexController@show')->name('rent.show');

        Route::get('/i/{slug}/p/{pageSlug}', 'Page\IndexController@show')->name('page');

//        Route::get('/i/{slug}/dziennik-inwestycji', 'Article\IndexController@index')->name('investment.news');
//        Route::get('/i/{slug}/dziennik-inwestycji/{article}', 'Article\IndexController@show')->name('investment.news.show');
//
//        Route::get('/i/{slug}/galeria', 'Gallery\IndexController@index')->name('investment.gallery');
        Route::get('/i/{slug}/kontakt', 'Contact\IndexController@index')->name('contact');
//
        Route::get('/i/{slug}', 'InvestmentController@show')->name('show');
        Route::get('/i/{slug}/plan-inwestycji', 'InvestmentPlanController@index')->name('plan');
//        Route::get('/i/{slug}/plan-inwestycji-3d', 'InvestmentPlanController@mockup')->name('mockup');
//
//        #Inwestycja budynkowa - pietro
        Route::get('/i/{slug}/{floor},{floorSlug}', 'InvestmentFloorController@index')->name('floor');
//
//        #Inwestycja budynkowa - pietro - mieszkanie
        Route::get('/i/{slug}/{floor},{floorSlug}/{property},{propertySlug},{propertyRooms},{propertyArea}', 'InvestmentPropertyController@index')->name('property');
//
//        #Inwestycja osiedlowa - budynek
        Route::get('/i/{slug}/b/{building}', 'InvestmentBuildingController@index')->name('building');
//
//        #Inwestycja osiedlowa - budynek - pietro
        Route::get('/i/{slug}/b/{building}/{floor},{floorSlug}', 'InvestmentBuildingFloorController@index')->name('building.floor');
//
//        #Inwestycja osiedlowa - budynek - pietro - mieszkanie
        Route::get('/i/{slug}/b/{building},{buildingSlug}/{floor},{floorSlug}/{property},{propertySlug},{propertyRooms},{propertyArea}', 'InvestmentBuildingPropertyController@index')->name('building.floor.property');
// i/lipa-piotrowska/b/60/budynek-a4-sprzedany,393/parter,4313,mieszkanie-a43,3-pokoje?60.16-m2
//        // Inwestycja domkowa
        Route::get('/{slug}/d/{property},{propertySlug},{propertyArea}', 'InvestmentHouseController@index')->name('house');
//
//        //Historia cen
//        Route::get('/historia/{property}', 'History\IndexController@show')->name('history');
//        Route::get('/przynalezne/{property}', 'History\IndexController@others')->name('others');
//        Route::get('/przynalezne/{property}/show', 'History\IndexController@other')->name('others.show');
//        Route::get('/przynalezne/{property}/table', 'History\IndexController@otherTable')->name('others.table');
//
//        //Pages
//        Route::get('/{slug}/{page}', 'Page\IndexController@index')->name('page');
//
//        Route::get('/i/{slug}/json', 'Api\IndexController@json')->name('investment.json');
    });
//
//    // Inline
//    Route::group(['prefix' => '/inline', 'as' => 'inline.'], function () {
//        Route::get('/', 'InlineController@index')->name('index');
//        Route::get('/loadinline/{inline}', 'InlineController@show')->name('show');
//        Route::post('/update/{inline}', 'InlineController@update')->name('update');
//    });
//
});
