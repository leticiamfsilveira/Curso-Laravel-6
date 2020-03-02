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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/product/{slug}', 'HomeController@single')->name('product.single');

Route::group(['middleware' => ['auth']], function(){

    Route::prefix('admin')->namespace('Admin')->name('admin.')->group(function(){

//    Route::prefix('stores')->name('stores.')->group(function(){
//
//        Route::get('', 'StoreController@index')->name('index');
//        Route::get('/create', 'StoreController@create')->name('create');
//        Route::post('/store', 'StoreController@store')->name('store');
//        Route::get('/{store}/edit', 'StoreController@edit')->name('edit');
//        Route::post('/update/{store}', 'StoreController@update')->name('update');
//        Route::get('/destroy/{store}', 'StoreController@destroy')->name('destroy');
//
//    });
        Route::resource('stores', 'StoreController');
        Route::resource('products', 'ProductController');
        Route::resource('categories', 'CategoryController');

        Route::post('photos/remove', 'ProductPhotoController@removePhoto')->name('photo.remove');

    });
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');//->middleware('auth');
Route::get('/model', function () {
//  $products = \App\Product::all(); //select * from products

//  ------------ active record --------------
//  $user = new \App\User(); cria novo usuário
//  $user = \App\User::find(1); //busca o usuário pelo id
//  $user->name = 'Usuário Teste Editado';
//  $user->email = 'email@teste.com';
//  $user->password = bcrypt('12345678');

//  $user->save(); //salva as alterações ou inserções
//  return
    //\App\User::all(); // retorna todos os usuários em uma Collection
    //\App\User::find(3); //retorna o usuário com base no id
    //\App\User::where('name', 'Clemens Greenfelder')->get(); // select * from users where name = 'Clemens Greenfelder'
    //\App\User::paginate(10) //paginar dados com  laravel

//  ------------ mass assigment (atribuição em massa) -------------
//  $user = \App\User::create([
//      'name' => 'Letícia Fernandes',
//      'email' => 'lemayara16@gmail.com',
//      'password' => bcrypt('123456789')
//  ]);

//  ------------ mass update (atualização em massa) -------------
//  $user = \App\User::find(141);
//  $user->update([
//      'name' => 'Atualizando com Mass Update'
//  ]); //true ou false

//  ----------------------------  Pegar a loja de um usuário ---------------------
    // $user = \App\User::find(4);
    // return $user->store; // O objecto único (Store) se for Collection de Dados (Objetos)

//  ----------------------------- Pegar os produtos de uma loja -------------------
    // $loja = \App\Store::find(1);
    // return $loja->products | $loja->products()->where('id', 1)->get();

//  ----------------------------- Pegar as lojas de uma categoria ------------------
    // $categoria = \App\Category::find(1);
    // return $categoria->products;

// ------------------------------ Criar uma loja para um usuário --------------------
//    $user = \App\User::find(10);
//    $store = $user->store()->create([
//        'name' => 'loja teste',
//        'description' => 'loja teste de produtos de informática',
//        'mobile_phone' => 'xx-xxxxx-xxxx',
//        'phone' => 'xx-xxxxx-xxxx',
//        'slug' => 'loja-teste',
//    ]);
//
//    dd($store);

// ------------------------------ Criar um produto para uma loja --------------------
//    $store = \App\Store::find(41);
//    $product = $store->products()->create([
//        'name' => 'notebook dell',
//        'description' => 'core i5 10gb',
//        'body' => 'qualquer coisa',
//        'price' => 2999.90,
//        'slug' => 'notebook-dell',
//    ]);
//
//    dd($product);

// ------------------------------ Criar uma categoria -------------------------------
//    \App\Category::create([
//        'name' => 'games',
//        'description' => null,
//        'slug' => 'games',
//    ]);
//
//    \App\Category::create([
//        'name' => 'notebooks',
//        'description' => null,
//        'slug' => 'notebooks',
//    ]);
//
//    return \App\Category::all();

// ------------- Adicionar um produto para uma categoria ou vice-versa --------------
    // $product = \App\Product::find(41);

    // dd($product->categories()->sync([2])); // remove e adiciona automaticamente
    // detach ->retorna a quantidade de itens removidos
    // attach->adiciona

    return \App\User::all();
});
