@extends ('layouts.app_admin')

@section ('content')

<div class="container p-3">


    <h1 class="text-center">Update the form to change a data</h1>

    <form action="{{ route ('index.update', $index->id) }}" method="post">

        @csrf

        @method ('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Comic title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $index-> title }}">
        </div>
        <div class="mb-3">
            <label for="description">Comic description</label>
            <textarea class="form-control" id="description" name="description" style="height: 170px">{{ $index-> description }}</textarea>
        </div>
        <div class=" mb-3">
            <label for="thumb" class="form-label">Comic thumb</label>
            <input type="url" class="form-control" id="thumb" name="thumb" value="{{ $index-> thumb }}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Comic price</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ $index-> price }}">
        </div>
        <div class="mb-3">
            <label for="serie" class="form-label">Comic series</label>
            <input type="text" class="form-control" id="serie" name="serie" value="{{ $index-> series }}">
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Comic sale date</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ $index-> sale_date }}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Comic type</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ $index-> type }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


@endsection