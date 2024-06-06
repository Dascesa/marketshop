<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Produto;

Route::get('/home', function () {
    return view('welcome');
});

// Route::view('/', 'home');
Route::get('/', function() {
    // dd(Produto::all());
    $listaProdutos = Produto::all();

    return view('home', compact('listaProdutos'));
});

// USUARIO
Route::view('/cria-conta', 'cria-conta');

Route::view('/testedeconteudo', 'teste');

Route::post('/salva-usuario', 
function(Request $request) {
    //dd($request);

    $usuario = new User();
    $usuario->name = $request->nome;
    $usuario->email = $request->email;
    $usuario->password = $request->senha; 
    $usuario-> save();
    dd("Usuário Salvo com Sucesso 😊👍");

})->name('salva-usuario');

// PRODUTOS
Route::view('/cadastra-produto', 'cadastra-produto');

// PRODUTO NOVO
Route::post('/salva-produto',
function (Request $request) {
    //dd($request);

    $produto = new Produto();
    $produto->nome = $request->nome;
    $produto->descricao = $request->descricao;
    $produto->preco = $request->preco;

    //pega o arquivo enviado
    $file = request()->file('foto');
    //salva na pasta fotos, subpasta produtos
    $foto=$file->store('produtos', ['disk' => 'fotos']);

    //adiciona foto ao produto
    $produto->foto = $foto;

    //pega id do usuario que salvou a foto
    $produto->user_id =1;
    //SERA MODIFICADO PARA PEGAR O USUARIO LOGADO

    //$produto->save();
    $produto->save();
    dd("Salvo com sucesso!!");

}
)->name('salva-produto');