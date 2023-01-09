@extends ('layouts.app_admin')

@section ('content')

<div class="container p-3">


    <h1 class="text-center">Update the form to change a data</h1>

    @include('partials.error')

    <form action="{{ route ('index.update', $index->id) }}" method="post">

        @csrf

        @method ('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Comic title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ $index-> title }}">
            @error('title')
            <small id="titleHlper" class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description">Comic description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" style="height: 170px">{{ $index-> description }}</textarea>
            @error('description')
            <small id="descriptionHlper" class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class=" mb-3">
            <label for="thumb" class="form-label">Comic thumb</label>
            <input type="url" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{ $index-> thumb }}">
            @error('thumb')
            <small id="thumbHlper" class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Comic price</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ $index-> price }}">
            @error('price')
            <small id="priceHlper" class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="serie" class="form-label">Comic series</label>
            <input type="text" class="form-control @error('serie') is-invalid @enderror" id="serie" name="serie" value="{{ $index-> series }}">
            @error('serie')
            <small id="serieHlper" class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Comic sale date</label>
            <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date" value="{{ $index-> sale_date }}">
            @error('date')
            <small id="dateHlper" class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Comic type</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{ $index-> type }}">
            @error('type')
            <small id="typeHlper" class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


@endsection