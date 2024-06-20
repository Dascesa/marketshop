<x-layout_base>
<!-- Tela no Marketshop -->

<!-- Fotos do menu varias opções -->
<x-menu></x-menu>
<div class="carousel w-full">
  <div id="slide1" class="carousel-item relative w-full">
    <img src="https://http2.mlstatic.com/D_NQ_797422-MLA75400551648_042024-OO.webp" class="w-full" />
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
      <a href="#slide4" class="btn btn-circle">❮</a> 
      <a href="#slide2" class="btn btn-circle">❯</a>
    </div>
  </div> 

  <div id="slide2" class="carousel-item relative w-full">
    <img src="https://http2.mlstatic.com/D_NQ_667836-MLA74349586053_022024-OO.webp" class="w-full" />
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
      <a href="#slide1" class="btn btn-circle">❮</a> 
      <a href="#slide3" class="btn btn-circle">❯</a>
    </div>
  </div> 

  <div id="slide3" class="carousel-item relative w-full">
    <img src="https://http2.mlstatic.com/D_NQ_806000-MLA75393863908_042024-OO.webp" class="w-full" />
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
      <a href="#slide2" class="btn btn-circle">❮</a> 
      <a href="#slide4" class="btn btn-circle">❯</a>
    </div>
  </div> 
  
  <div id="slide4" class="carousel-item relative w-full">
    <img src="https://http2.mlstatic.com/D_NQ_859602-MLA75368444934_042024-OO.webp" class="w-full" />
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
      <a href="#slide3" class="btn btn-circle">❮</a> 
      <a href="#slide1" class="btn btn-circle">❯</a>
    </div>
  </div>
</div>
<!-- Final das fotos do menu -->

<div class="bg-white rounded-md shadow-md m-6 p-6">
<div class="font-bold text-lg">
  Ofertas do Dia
</div>

<div class="grid grid-cols-4 gap-5">
    @foreach($listaProdutos as $produto)
    <div class="card bg-base-100 shadow-xl">
  <figure><img class="aspect-square w-full object-cover" src="{{
    strpos($produto->foto, 'produtos') ===0 ?
      asset('fotos/'.$produto->foto) : $produto->foto}}" alt="Shoes" />
    </figure>

    <div class="card-body">
    <h2 class="card-title">{{$produto->nome}}</h2>
    <p>{{$produto->descricao}}</p>
      <div class="card-actions justify-end">
         <button class="btn btn-primary"> <div>R${{((number_format($produto->preco, 2, ',' , '.')))}}</div></button>
         
     </div>
   </div>
  </div>
  
    @endforeach
  </div>
  </div>
<!-- for variavel = inicio até onde até onde; -->
  
<!-- Menu de Tela -->
<!-- Final do menu de tela -->


<footer class="w-full flex p-10 bg-neutral text-neutral-content items-center">
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

</x-layout_base>