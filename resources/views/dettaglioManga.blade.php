<x-layout>
    
    <x-head title="Dettaglio"/>



    <div class="container mt-5">
        <div class="row justify-content-center p-5">
             <div class="col-6 col-lg-6">
                <img src="{{$manga['img']}}" alt="">
            </div>
            <div class="col-6 col-lg-6 d-flex justify-content-center flex-column">
                <h1>
                    {{$manga['title']}}
                </h1>
                <h3>
                    {{$manga['trama']}}
                </h3>
                <a href="{{route('homepage')}}" class="btn btn-primary">Torna alla Home</a>
            </div>         
        </div>
    </div>
  </x-layout>





    