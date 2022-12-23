@extends ('layouts.app')

@section ('content')

<div class="container p-5">

    <div class="row">

        <div class="col-8">

            <h2>{{ $comic->title }}</h2>

            <div class="row align-items-center green">


                <div class="col-8">
                    <div class="row row-cols-3 justify-content-between">
                        <div class="col"> US Price: {{ $comic-> price}} $</div>
                        <div class="col">AVAILABLE</div>
                    </div>
                </div>

                <div class="col-4 text-center">
                    <div class="dropdown">
                        <a class="btn dropdown-toggle ms_btn" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Check availability
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>

            </div>

            <p class="m-0 p-0 mt-4">{{ $comic->description}}</p>

        </div>

        <div class="col-4 p-3">
            <img src="{{ $comic->thumb}}" alt="" class="img-fluid">
        </div>
    </div>
</div>



@endsection