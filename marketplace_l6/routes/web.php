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
    $helloWorld =  'Hello World';
    return view('welcome', compact('helloWorld'));
});

Route::get('/model', function() {
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
    return ;
});
