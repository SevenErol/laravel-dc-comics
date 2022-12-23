@extends ('layouts.app')

@section('content')

<section id="all_cards">

    <div class="container position-relative">

        <div class="row p-3 g-5">

            @foreach ($comics as $key => $comic)

            <div class="col-2">

                <div class="card">

                    <a href="{{ route ('about/{id}', ['id' => $comic['id']])}}"><img class="card-img-top" src="{{ $comic['thumb']}}"></a>

                </div>

                <h5 class="text-white text-center"><a href="#">{{ $comic['series']}}</a></h5>

            </div>

            @endforeach

        </div>

        <div class="centered_button">
            <button>LOAD MORE</button>
        </div>

        <div class="disclaimer d-flex justify-content-center align-items-center">
            <p class="m-0">CURRENT SERIES</p>
        </div>

    </div>

</section>


@endsection