<x-layout>
    <x-head title="Manga"/>
  @dd(Route::currentRouteName())

    {{-- Inizio sezione card --}}
    <div class="container mt-5">
        <div class="row justify-content-center">
                @foreach ($mangas as $manga)
                 <div class="col-12 col-md-6">
                   <div class="card" style="width: 18rem;">
                      <img src="{{$manga['img']}}" class="card-img-top"    alt="...">
                      <div class="card-body">
                         <h5 class="card-title">{{$manga['title']}}</h5>
                         <a href="{{route('det.manga' , ['title' => $manga['title']])}}" class="btn btn-primary">Dettaglio</a>
                     </div>
                   </div> 
                 </div>  
                @endforeach          
        </div>
    </div>
    {{-- Fine sezione card --}}

  </x-layout>



