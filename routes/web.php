<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ChatController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\BackupController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\Blade\HomeController;
use App\Http\Controllers\Blade\RoleController;
use App\Http\Controllers\Blade\UserController;
use App\Http\Controllers\Blade\ApiUserController;
use App\Http\Controllers\Blade\PermissionController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProductController;

Auth::routes(['register' => false]);

// Welcome page
Route::get('/admin', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/statistics', [HomeController::class, 'statistics'])->name('statistics.show');
// Web pages
Route::group(['middleware' => ['auth', 'checkUserRole']], function () {

    Route::get('/optimize-cache', [HomeController::class, 'optimize'])->name('optimize.command');

    Route::get('products/', [ProductController::class, 'index'])->name('products.index');
    Route::get('products/jarayonda', [ProductController::class, 'jarayonda'])->name('products.jarayonda');
    Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('products', [ProductController::class, 'store'])->name('products.store');
 
    Route::get('products/add', [ProductController::class, 'add'])->name('productAdd');
    

    
    Route::get('products/{product}', [ProductController::class, 'show'])->name('products.show');
    Route::get('products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('products/{product}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
    Route::post('products/check-yer-uchastkasi-uniq', [ProductController::class, 'checkYerUchastkasiUniq'])->name('products.checkYerUchastkasiUniq');


    // Permissions
    Route::prefix('permissions')->group(function () {
        Route::get('/', [PermissionController::class, 'index'])->name('permissionIndex');
        Route::get('/add', [PermissionController::class, 'add'])->name('permissionAdd');
        Route::post('/create', [PermissionController::class, 'create'])->name('permissionCreate');
        Route::get('/{id}/edit', [PermissionController::class, 'edit'])->name('permissionEdit');
        Route::post('/update/{id}', [PermissionController::class, 'update'])->name('permissionUpdate');
        Route::delete('/delete/{id}', [PermissionController::class, 'destroy'])->name('permissionDestroy');
    });
    // Roles
    Route::prefix('roles')->group(function () {
        Route::get('/', [RoleController::class, 'index'])->name('roleIndex');
        Route::get('/add', [RoleController::class, 'add'])->name('roleAdd');
        Route::post('/create', [RoleController::class, 'create'])->name('roleCreate');
        Route::get('/{role_id}/edit', [RoleController::class, 'edit'])->name('roleEdit');
        Route::post('/update/{role_id}', [RoleController::class, 'update'])->name('roleUpdate');
        Route::delete('/delete/{id}', [RoleController::class, 'destroy'])->name('roleDestroy');
    });
    // ApiUsers
    Route::prefix('api-users')->group(function () {
        Route::get('/', [ApiUserController::class, 'index'])->name('api-userIndex');
        Route::get('/add', [ApiUserController::class, 'add'])->name('api-userAdd');
        Route::post('/create', [ApiUserController::class, 'create'])->name('api-userCreate');
        Route::get('/show/{id}', [ApiUserController::class, 'show'])->name('api-userShow');
        Route::get('/{id}/edit', [ApiUserController::class, 'edit'])->name('api-userEdit');
        Route::post('/update/{id}', [ApiUserController::class, 'update'])->name('api-userUpdate');
        Route::delete('/delete/{id}', [ApiUserController::class, 'destroy'])->name('api-userDestroy');
        Route::delete('-token/delete/{id}', [ApiUserController::class, 'destroyToken'])->name('api-tokenDestroy');
    });

    // Backup
    Route::prefix('backups')->group(function () {
        Route::get('/', [BackupController::class, 'index'])->name('backup.index');
        Route::get('/{id}', [BackupController::class, 'show'])->name('backup.show');
        Route::any('/download/{filename}', [BackupController::class, 'download'])->name('backup.download');
        Route::delete('/{filename}', [BackupController::class, 'delete'])->name('backup.delete');
        Route::any('/backup-delete', [BackupController::class, 'deleteAll'])->name('backup.deleteAll');
    });
    Route::get('testing', [BackupController::class, 'index'])->name('subject.store');
    // File
    Route::get('/test/download', [FileController::class, 'downloadDocument'])->name('download.document');
    Route::prefix('files')->group(function () {
        Route::get('/doc/{id}', [FileController::class, 'show'])->name('word');
        Route::get('/test/{id}', [FileController::class, 'test'])->name('test.word');

        Route::get('/downloading-excel/{id}', [FileController::class, 'downloadTableData'])->name('download.table.data');
        Route::get('/select-columns', [FileController::class, 'showColumnSelectionForm'])->name('select.columns');
        Route::get('/download-excel', [FileController::class, 'downloadExcel'])->name('download.excel');
    });

    // History
    Route::get('/histories', [HistoryController::class, 'index'])->name('histories.index');

    Route::get('/history', [HistoryController::class, 'index'])->name('history.index');
    Route::get('/request-confirm', [HistoryController::class, 'confirm'])->name('request.confirm');
    Route::get('/history/{id}', [HistoryController::class, 'showHistory'])->name('history.show');

    Route::get('/import/backup', [BackupController::class, 'import'])->name('backup.import');
});

Route::group(['middleware' => ['auth']], function () {
    // Users
    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('userIndex');
        Route::get('/add', [UserController::class, 'add'])->name('userAdd');
        Route::post('/create', [UserController::class, 'create'])->name('userCreate');
        Route::get('/{id}/edit', [UserController::class, 'edit'])->name('userEdit');
        Route::post('/update/{id}', [UserController::class, 'update'])->name('userUpdate');
        Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('userDestroy');
        Route::get('/theme-set/{id}', [UserController::class, 'setTheme'])->name('userSetTheme');
    });

    // Chat
    Route::get('/chat', [ChatController::class, 'index'])->name('chat.index');
    Route::post('/chat', [ChatController::class, 'store'])->name('chat.store');
    Route::put('/chat/{id}', [ChatController::class, 'update'])->name('chat.update');
    Route::delete('/chat/{id}', [ChatController::class, 'destroy'])->name('chat.destroy');
});
Route::get('/gerb/{id}', [FileController::class, 'gerb'])->name('file.mobile');
Route::get('/dopShow/{id}', [FileController::class, 'dop'])->name('dopShow');

Route::get('/language/{lang}', function ($lang) {
    $lang = strtolower($lang);
    if ($lang == 'ru' || $lang == 'uz') {
        session([
            'locale' => $lang
        ]);
    }
    return redirect()->back();
})->name('changelang');

// new -----------------------

Route::get('analytics/index', [AnalyticsController::class, 'index'])->name('analytics.index');
Route::get('analytics/statistic', [AnalyticsController::class, 'statistic'])->name('analytics.statistic');

Route::get('calendar', [CalendarController::class, 'index'])->name('calendar.index');
Route::get('search', [SearchController::class, 'search'])->name('search');

Route::prefix('')->name('frontend.')->group(function () {
    Route::get('/', [FrontendController::class, 'index'])->name('index');
    // Route::get('/investoram', [FrontendController::class, 'investoram'])->name('investoram');
    Route::get('/investoram/{subcategory?}', [FrontendController::class, 'investoram'])->name('investoram');

    Route::get('/zakupki', [FrontendController::class, 'zakupki'])->name('zakupki');
    Route::get('/media', [FrontendController::class, 'media'])->name('media');
    Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
    Route::get('/ustav', [FrontendController::class, 'ustav'])->name('ustav');
    Route::get('/struktura', [FrontendController::class, 'struktura'])->name('struktura');
    Route::get('/supervisory-board', [FrontendController::class, 'supervisory_board'])->name('supervisory_board');
    Route::get('/board', [FrontendController::class, 'board'])->name('board');
    Route::get('/decision-on-the-initial-issue', [FrontendController::class, 'decision'])->name('decision');
    Route::get('/reports', [FrontendController::class, 'reports'])->name('reports');
    Route::get('/balance', [FrontendController::class, 'balance'])->name('balance');
    Route::get('/income', [FrontendController::class, 'income'])->name('income');
    Route::get('/spisok', [FrontendController::class, 'spisok'])->name('spisok');
    Route::get('/share-struktura', [FrontendController::class, 'share_struktura'])->name('share_struktura');
    Route::get('/kodeks', [FrontendController::class, 'kodeks'])->name('kodeks');
});
