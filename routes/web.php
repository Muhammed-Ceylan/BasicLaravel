<?php

use App\Http\Controllers\Api;

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SupportFormController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, "index"])->name("home");

Route::get('/about', [HomeController::class, "about"])->name("about");

Route::get('/contact', [ContactController::class, "showForm"])->name("contact");
Route::post('/contact', [ContactController::class, "contact"]);
Route::post('/user/{id}/{name}', [ContactController::class, "user"])
    ->name('user')
    ->where(['id' => '[0:9]+', 'name' => '[a:z]+']);

Route::match(['get', 'post'], '/support-form', [SupportFormController::class, "support"])
    ->name("support-form.support");

Route::patch("/users/{id}/update", [UserController::class, "update"])->name("user.update");

/*
    * Patch: Kullanıcının sadece 1 bilgisi güncellenmek isteniyorsa kullanılır.
*/

Route::put("/users/{id}/updateAll", [UserController::class, "updateAll"])->name("user.updateAll");
Route::delete("/user/{id}/delete", [UserController::class, "delete"])->name("user.delete");

Route::any("/everything", function () {
    dd("Accept all route function.");
});

Route::resource("articles", ArticleController::class);
Route::apiResource('api/articles', Api\ArticleController::class);

Route::get("/users/{id}", [UserController::class, "show"])
    ->name("user.show")
    ->whereNumber("id");

Route::get("/user/{role}", [UserController::class, "checkRole"])
    ->name("user.roleCheck")
    ->whereIn("role", ["admin", "user"]);
