<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\FornecedorController;
use Illuminate\Support\Facades\Route;



Route::get('/', 'PrincipalController@principal')->name("site.index");

Route::get('/sobre','SobreNosController@sobre')->name("site.sobrenos");

Route::get('/contato','ContatoController@contato')->name("site.contato");

Route::get('/login', function(){
         echo "Login";
})->name("site.login");

Route::prefix('/app')->group(function(){

    Route::get('/clientes',function(){
        echo "clientes";
    })->name("app.clientes");

    Route::get('/fornecedores','FornecedorController@index')->name("app.fornecedores");

    Route::get('/produtos', function(){
        echo "produtos";
    })->name("app.produtos");
    
});

Route::get('/teste/{p1}/{p2}','TesteController@teste')->name("teste");


Route::fallback(function(){
    echo 'rota nao encontrada, <a href="/"> Clique aqui </a>para ser redirecionado ';
});
