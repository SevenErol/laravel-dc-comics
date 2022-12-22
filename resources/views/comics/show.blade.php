@extends ('layouts.app_admin')

@section ('content')

<div class="container p-3">

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


                <tr>
                    <th scope="row">{{ $index-> id}}</th>
                    <td>{{ $index-> title}}</td>
                    <td>{{ $index-> description}}</td>
                    <td>{{ $index-> thumb}}</td>
                    <td>{{ $index-> price}}</td>
                    <td>{{ $index-> series}}</td>
                    <td>{{ $index-> sale_date}}</td>
                    <td>{{ $index-> type}}</td>
                </tr>

            </tbody>
        </table>
    </div>
</div>


@endsection