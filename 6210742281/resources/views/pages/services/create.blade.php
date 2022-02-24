@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Create</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
            <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- Form for Update Main --}}
                <div class="row">

                    {{-- Update Title and Sub Title --}}
                    <div class="form-group col-md4 mt-3">
                        <div class="mb-3">
                            <label for="icon">
                                <h4>Font Awesome Icon</h4>
                            </label>
                            <input type="text" class="form-control" id="icon" name="icon">
                        </div>
                        <div class="mb-5">
                            <label for="title">
                                <h4>Title</h4>
                            </label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="mb-5">
                            <label for="descriprion">
                                <h4>Description</h4>
                            </label>
                            <textarea type="text" class="form-control" id="descriprion" name="descriprion"></textarea>
                        </div>
                    </div>
                </div>
                <input type="submit" name="submit" class="btn btn-primary mt-5">
        </div>
        </form>
    </main>
@endsection