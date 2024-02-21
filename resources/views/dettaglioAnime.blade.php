<x-layout>
   
    <x-head title="Dettaglio"/>


    <div class="container mt-5">
        <div class="row justify-content-center">
             <div class="col-6">
                <img class="vh-100" src="{{$anime['img']}}" alt="">
            </div>
            <div class="col-6 d-flex justify-content-center flex-column">
                <h1>
                    {{$anime['title']}}
                </h1>
                <h2>
                    {{$anime['trama']}}
                </h2>
                <a href="{{route('homepage')}}" class="btn btn-primary">Torna alla Home</a>
            </div>         
        </div>
    </div>
  </x-layout>





    