@extends ('layouts.app_admin')

@section ('content')

<div class="container p-3">


    <h1 class="text-center">Complete the form to add a new Comic</h1>

    <form action="{{ route ('index.store') }}" method="post">

        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Comic title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="description">Comic description</label>
            <textarea class="form-control" placeholder="Leave a description" id="description" name="description" style="height: 150px"></textarea>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Comic thumb</label>
            <input type="url" class="form-control" id="thumb" name="thumb">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Comic price</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>
        <div class="mb-3">
            <label for="serie" class="form-label">Comic series</label>
            <input type="text" class="form-control" id="serie" name="serie">
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Comic sale date</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Comic type</label>
            <input type="text" class="form-control" id="type" name="type">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


@endsection