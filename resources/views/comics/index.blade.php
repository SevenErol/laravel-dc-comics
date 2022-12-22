@extends ('layouts.app_admin')

@section('content')

<div class="container p-3">

    <h2 class="text-center">Data table</h2>

    <div class="text-center mb-5">

        <a href="{{ route ('index.create')}}" class="btn btn-primary">Add new Comic</a>

    </div>

    <div class="row">

        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Thumb</th>
                    <th scope="col">Price</th>
                    <th scope="col">Series</th>
                    <th scope="col">Sale date</th>
                    <th scope="col">Type</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($comics as $comic)
                <tr>
                    <th scope="row">{{ $comic-> id}}</th>
                    <td>{{ $comic-> title}}</td>
                    <td>{{ $comic-> description}}</td>
                    <td>{{ $comic-> thumb}}</td>
                    <td>{{ $comic-> price}}</td>
                    <td>{{ $comic-> series}}</td>
                    <td>{{ $comic-> sale_date}}</td>
                    <td>{{ $comic-> typeb}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>


    </div>
</div>


@endsection