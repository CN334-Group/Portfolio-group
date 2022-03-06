@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">List of Abouts</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">List of Abouts</li>
            </ol>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Date</th>
                        <th scope="col">Title</th>
                        <th scope="col">Image</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($experiences) > 0)
                        @foreach ($experiences as $experience)
                            <tr>
                                <th scope="row">{{ $experience->id }}</th>
                                <td>{{ $experience->date}}</td>
                                <td>{{ $experience->title }}</td>
                                <td>{{ Str::limit(strip_tags($experience->description), 40) }}</td>
                                <td>
                                    <img style="height: 10vh" src="{{ url($experience->big_image) }}" alt="image">
                                </td>
                                <td>
                                    <div class="row">
                                        <div>
                                            <a href="{{ route('admin.experiences.edit', $experience->id) }}"
                                                class="btn btn-primary m-2">Edit</a>
                                        </div>
                                        <div>
                                            <form action="{{ route('admin.experiences.destroy', $experience->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" name="submit" value="Delete" class="btn btn-danger m-2">
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endif

                </tbody>
            </table>
    </main>
@endsection
