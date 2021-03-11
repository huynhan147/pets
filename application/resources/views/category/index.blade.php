@extends('layouts.main')
@section('content')
    <form class="row g-3" action="{{ route('category.upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="formFile" class="form-label">Chọn file để upload</label>
            <input class="form-control" type="file" id="formFile" name="file">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3">Upload</button>
        </div>
    </form>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
        <tr>
            <th scope="row">{{ $category['id'] }}</th>
            <td>{{ $category['name'] }}</td>
            <td>{{ $category['description'] }}</td>
        </tr>
            @endforeach

        </tbody>
    </table>
@endsection
