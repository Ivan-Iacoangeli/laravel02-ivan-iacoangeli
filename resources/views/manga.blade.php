<x-layout>
    <x-head title="Manga"/>
  

    {{-- Inizio sezione card --}}
    <div class="container mt-5">
        <div class="row justify-content-center">
                @foreach ($mangas as $manga)
                 <div class="col-12 col-md-6">
                  <x-card
                  img="{{$manga['img']}}"
                  title="{{$manga['title']}}"
                  link="{{route('det.manga' , ['title' => $manga['title']])}}"
                  />                
                 </div>  
                @endforeach          
        </div>
    </div>
    {{-- Fine sezione card --}}

  </x-layout>



