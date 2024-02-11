<?php

use Illuminate\Support\Facades\Route;

// use App\Models\Coustomer;
use App\Http\Controllers\FormController;

// use
//     App\Http\Controllers\DemoController;
// use App\Http\Controllers\SingleActionController;
// use App\Http\Controllers\PhotoController;
// use
//     App\Http\Controllers\RegisteraController;
use App\Http\Controllers\HomeBill;

use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;




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

// Route::get("/home", function () {  
//     return view("home");
// });
// Route::get("/about", function () {
//     return view("about");
// });
// Route::get("course", function () {
//     return view("course");
// });

// Route::get("/home", [DemoController::class, "index"]);
// Route::get("/course", SingleActionController::class);
// Route::resource('photo', PhotoController::class);
// Route::get('/register', [RegisteraController::class, 'index']);
// Route::post('/register', [RegisteraController::class, 'register']);
// Route::get('/coustomer', function () {
//     $coutomers = Coustomer::all();
//     echo "<pre>";
//     print_r($coutomers->toArray());
// });
// Route::get('/form', [FormController::class, "show"]);
// Route::post('/form', [FormController::class, "store"]);
// Route::post('/form/view', [FormController::class, "view"]);

// Route::get('/homebill ', [HomeBill::class, "index"]);
// Route::post('/homebill', [HomeBill::class, "store"]);
// Route::get("/homebill/view/{id?}", [HomeBill::class, "view"]);
// Route::get("/homebill/delete/{id}", [HomeBill::class, "delete"]);
// Route::get("/homebill/edit/{id}", [HomeBill::class, "edit"]);
// Route::post("/homebill/update/{id}", [HomeBill::class, 'update']);
// Route::get("/homebill/create", [HomeBill::class, "create"]);
// Route::get("/homebill/trash", [HomeBill::class, "trash"]);
// Route::get('/homebill/pdelete/{id}', [HomeBill::class, "pdelete"]);
// Route::get('homebill/restore/{id}', [HomeBill::class, "restore"]);

// Route::get("/get-all-session", function () {
//     $session = session()->all();
//     p($session):
// });
// Route::get("/set-session", function (Request $request) {
//     $request->session()->put('username', 'pranav');
//     $request->session()->put('UserId', "123");
//     return redirect('/get-all-session');
// });
// Route::get('destroy', function () {
//     session()->forget(['username', 'UserId']);
//     return redirect('/get-all-session');
// });
// Route::get('task/create', [TaskController::class, "create"]);
// Route::get('task/alltask', [TaskController::class, "show"]);
// Route::post('task/create', [TaskController::class, "store"]);
// Route::get('task/delete/{id}', [TaskController::class, "erase"]);
// Route::get('task/edit/{id}', [TaskController::class, "edit"]);
// Route::post('task/update/{id}', [TaskController::class, "update"]);
// Route::get('task/trash', [TaskController::class, 'trash']);
// Route::get('task/restore/{id}', [TaskController::class, "restore"]);
// Route::get('task/pdelete/{id}', [TaskController::class, "pdelete"]);
Route::group(
    ['prefix' => 'task', 'middleware' => 'gaurd'],
    function () {
        Route::get('create', [TaskController::class, "create"]);
        Route::get('alltask', [TaskController::class, "show"]);
        Route::post('create', [TaskController::class, "store"]);
        Route::get('delete/{id}', [TaskController::class, "erase"]);
        Route::get('edit/{id}', [TaskController::class, "edit"]);
        Route::post('update/{id}', [TaskController::class, "update"]);
        Route::get('trash', [TaskController::class, 'trash']);
        Route::get('restore/{id}', [TaskController::class, "restore"]);
        Route::get('pdelete/{id}', [TaskController::class, "pdelete"]);
        Route::get('register', [TaskController::class, 'register']);
        Route::post('register', [TaskController::class, 'StoreRegister']);
        Route::get('login', function () {
            return view("login");
        });
        Route::post('/login', [TaskController::class, 'login']);
        Route::get('/logout', [TaskController::class, 'logout']);
        
    }
);
Route::get('noacess', function () {
    echo "acess denied";
});
