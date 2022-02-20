@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">List of Education</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">List of Education</li>
            </ol>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($services) > 0)
                        @foreach ($services as $service)
                            <tr>
                                <th scope="row">{{$service->id}}</th>
                                <td>{{$service->icon}}</td>
                                <td>{{$service->title}}</td>
                                <td>{{$service->descriprion}}</td>
                            </tr>
                        @endforeach
                    @endif

                </tbody>
            </table>
    </main>
@endsection
