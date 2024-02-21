<x-layout>

    <x-head title="Anime"/>
   

    {{-- Cards sezione anime --}}
    <div class="container mt-5">
        <div class="row justify-content-center">
                @foreach ($animes as $anime)
                 <div class="col-12 col-md-6">
                   <div class="card" style="width: 18rem;">
                      <img src="{{$anime['img']}}" class="card-img-top"    alt="...">
                      <div class="card-body">
                         <h5 class="card-title">{{$anime ['title']}}</h5>
                         <a href="{{route('det.anime' , ['title' => $anime['title']])}}" class="btn btn-primary">Dettaglio</a>
                     </div>
                   </div> 
                 </div>  
                @endforeach          
        </div>
    </div>
  </x-layout>





  
    