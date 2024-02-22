<x-layout>

    <x-head title="Anime"/>
   
    {{-- Cards sezione anime --}}
    <div class="container mt-5">
      <div class="row justify-content-center">
              @foreach ($animes as $anime)
                 <div class="col-12 col-md-6">
                   <x-card
                   img="{{$anime['img']}}"
                   title="{{$anime['title']}}"
                   link="{{route('det.anime' , ['title' => $anime['title']])}}"
                   />
                 </div>  
              @endforeach          
        </div>
    </div>
  </x-layout>





  
    