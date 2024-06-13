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
    Route::view('/cadastra-produto', 'cadastra-produto')->middleware('auth');

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
    // dd("Salvo com sucesso!!");

    return redirect('/');

})->name('salva-produto')->middleware('auth');

// LOGUIN// 
    Route::view('/login','login')->name("login");
// FINAL LOGAR

Route::post('/logar', function (Request $request)
{
    // Testar se está recebendo os dados)
    // dd($request);

// Verifica se a pessoa preencheu os campos de Login
    $credentials = $request->validate([
            'email' => ['required', 'email'],
               // Verifica se tem Email e se é um Email
                    'senha' => ['required'],
                        // Verifica se tem Senha
    ]);

    // Compara se as informações colocada no Banco de dados são Iguais ao que ele preencheu
        if (Auth::attempt(['email' => $request->email, 'password' => $request->senha]))
        {
            // Cria a Sessão do Usuário Logado
                $request->session()->regenerate();
                    // Redireciona para a tela de Cadastro de Produtos
                        return redirect()->intended('/cadastra-produto');
        }

        else
        {
            dd("Usuário ou senha incorretos");
        }

})->name('logar');

Route::get('/sair', function () {
     Auth::logout();
        return redirect('/');
});