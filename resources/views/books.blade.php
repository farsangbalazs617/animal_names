@extends('layouts.main')

@section('content')
    
    
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">István Fekete novels</h1>
            <p class="lead text-muted">He is perhaps best known for his youth novel Tüskevár ("Thorn Castle", 1957), about two city boys' summer holiday at the corner of Lake Balaton and Zala River, their experiences, adventures, contact with Nature in its genuine form. They are helped by an old man on their gradual journey into manhood. This novel was awarded the Attila József Prize in 1960, was made into a film in 1967 (see its IMDb entry) and was voted to be the 8th most liked novel of Hungary in the Big Read in 2005. Its sequel was Téli berek ("Winter Grove", 1959).</p>
        </div>
        </div>
    </section>

    <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          @foreach ($novels as $novel)
            <div class="col">
            <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="{{'#a88' . str_pad(dechex(mt_rand(0, 0xFFF)), 3, '0', STR_PAD_LEFT)}}"></rect><text class="fw-bold" x="10%" y="50%" fill="#eceeef" dy=".3em">{{$novel->title}}</text></svg>
                <div class="card-body">
                <p class="card-text fs-6 fw-light fst-italic">{{$novel->pyear}}</p>
                <p class="card-text text-muted"><b>Publisher: </b>{{$novel->publisher}}</p>
                </div>
                @if (count($novel->animals) > 0)
                <div class="card-footer bg-light">
                    <p>
                        <a class="btn btn-outline-dark rounded-0" data-bs-toggle="collapse" href="#collapse{{$novel->id}}" role="button" aria-expanded="false" aria-controls="collapse{{$novel->id}}">
                            Animals in the novel
                        </a>
                    </p>
                    <div class="collapse" id="collapse{{$novel->id}}">
                        <ul class="list-group list-group-flush">
                            @foreach ($novel->animals as $animal)
                                <li class="list-group-item bg-light">{{$animal->aname}} - {{$animal->species}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @else
                    <div class="card-footer bg-light">
                        <p>
                        <button type="button" class="btn btn-outline-dark rounded-0" disabled>
                            No animal data
                        </button>
                    </p>
                    </div>
                @endif
            </div>
            </div>
          @endforeach  
      </div>
    </div>
  </div>
    

@endsection