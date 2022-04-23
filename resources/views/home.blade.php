@extends('layouts.main')

@section('content')
    <div class="container my-2">
        <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
            <div class="row">
                <div class="col-md-6 px-0">
                    <h1 class="display-4 fst-italic">István Fekete</h1>
                    <p class="lead my-3">was a Hungarian writer, author of several youth novels and animal stories.</p>
                </div>
                <div class="col-md-6 px-0 d-flex justify-content-center">
                    <img src="{{ asset('images/fekete_istvan.jpeg') }}" height="300" alt="István Fekete">
                </div>
            </div>
            <div class="col-md-12 px-0">
                <p class="lead my-3">He is perhaps best known for his youth novel Tüskevár ("Thorn Castle", 1957), about two city boys' summer holiday at the corner of Lake Balaton and Zala River, their experiences, adventures, contact with Nature in its genuine form. They are helped by an old man on their gradual journey into manhood. This novel was awarded the Attila József Prize in 1960, was made into a film in 1967 (see its IMDb entry) and was voted to be the 8th most liked novel of Hungary in the Big Read in 2005. Its sequel was Téli berek ("Winter Grove", 1959).</p>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col-md-12 p-4 d-flex flex-column position-static">
                    <h3 class="mb-0">Interview with István Fekete</h3>
                    <div class="mb-1 text-muted">Jan 29, 2020</div>
                    <p class="card-text mb-auto">This video was uploaded to youtube.</p>
                    </div>
                    <div class="col-md-12 py-2 d-flex justify-content-center">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/108UBqh8hiE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col-md-12 p-4 d-flex flex-column position-static">
                    <h3 class="mb-0">One of the most known movie from István Fekete book Tüskevár</h3>
                    <div class="mb-1 text-muted">1967</div>
                    <p class="card-text mb-auto">Short video from the Tüskevár movie</p>
                    </div>
                    <div class="col-md-12 py-2 d-flex justify-content-center">
                        <video width="400" controls>
                            <source src="{{asset('videos/tuskevar.mp4')}}" type="video/mp4">
                            Your browser does not support HTML video.
                        </video>
                    </div>
                </div>
            </div>
        </div>
  </div>


@endsection