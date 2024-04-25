<x-layout_base>
<!-- Tela do criar conta -->

<style>
  .teste{
background-color: #DFDBE5;
background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0 10h10v10H0V10zM10 0h10v10H10V0z' fill='%230ccdfb' fill-opacity='0.4' fill-rule='evenodd'/%3E%3C/svg%3E");
  }
</style>

<label class="flex cursor-pointer gap-2 ">
  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"/><path d="M12 1v2M12 21v2M4.2 4.2l1.4 1.4M18.4 18.4l1.4 1.4M1 12h2M21 12h2M4.2 19.8l1.4-1.4M18.4 5.6l1.4-1.4"/></svg>
  <input type="checkbox" value="synthwave" class="toggle theme-controller"/>
  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
</label>

<!-- Menu -->
<div class="max-w-md m-auto">

<form class="teste" action="{{route('salva-usuario')}}" method="POST">
  @csrf
<!-- Usuario -->
<div class="divider divider-accent"></div>
<label class="input input-bordered flex items-center gap-2 justify-center flex">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70"><path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" /></svg>
  <input type="text" name="nome" class="grow" placeholder="Username" />
</label>

<!-- Email -->
<div class="divider divider-secondary"></div>
<label class="input input-bordered flex items-center gap-2 justify-center">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70"><path d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z" /><path d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z" /></svg>
  <input type="email" name="email" class="grow" placeholder="Email" />
</label>

<!-- Senha -->
<div class="divider divider-warning"></div>
<label class="input input-bordered flex items-center gap-2 justify-center">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70"><path fill-rule="evenodd" d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z" clip-rule="evenodd" /></svg>
  <input type="password" name="senha" name class="grow" value="password" />
</label>
<div class="divider divider-info"></div>

<!-- lembrar da senha -->
<div class="form-control">
  <label class="label cursor-pointer">
    <span class="label-text">Lembrar da Senha</span> 
    <input type="checkbox" checked="checked" class="checkbox" />
  </label>
</div>

<!-- Botão -->
<button type="submit" class="btn btn-primary">Criar conta</button>

<!-- Layout de fundo da tela Marca dágua -->


</form>
<!-- Menu de cima OK -->

<!-- Abaixo é o Menu Abaixo da Tela -->
<footer class="footer grid-rows-2 p-10 bg-neutral text-neutral-content">
  <nav>
    <h6 class="footer-title">Sobre o</h6> 
    <a class="link link-hover">Marketshop</a>
    <a class="link link-hover">Investidores</a>
    <a class="link link-hover">Tendências</a>
    <a class="link link-hover">Blog</a>
  </nav> 
  <nav>
    <h6 class="footer-title">Outros Sites</h6> 
    <a class="link link-hover">Desenvolvidores</a>
    <a class="link link-hover">Nosso Site Marketshop</a>
    <a class="link link-hover">Envios</a>
    <a class="link link-hover">Lojas</a>
  </nav> 
  <nav>
    <h6 class="footer-title">Contato</h6> 
    <a class="link link-hover">Comprar</a>
    <a class="link link-hover">Vender</a>
    <a class="link link-hover">Solução de Problemas</a>
    <a class="link link-hover">Segurança</a>
  </nav> 
  <nav>
    <h6 class="footer-title">Social</h6> 
    <a class="link link-hover">Twitter</a>
    <a class="link link-hover">Instagram</a>
    <a class="link link-hover">Facebook</a>
    <a class="link link-hover">Github</a>
  </nav> 
  <nav>
    <h6 class="footer-title">Minha Conta</h6> 
    <a class="link link-hover">Entre</a>
    <a class="link link-hover">Administrador</a>
    <a class="link link-hover">Vendedor</a>
    <a class="link link-hover">Transportadoras</a>
  </nav> 
  <nav>
    <h6 class="footer-title">Apps</h6> 
    <a class="link link-hover">Mac</a>
    <a class="link link-hover">Windows</a>
    <a class="link link-hover">iPhone</a>
    <a class="link link-hover">Android</a>
  </nav>
</footer>
<!-- Até aqui é o Final do Menu Abaixo da Tela -->



<!-- Div do justificar tudo ao meio -->
</div>
</x-layout_base>