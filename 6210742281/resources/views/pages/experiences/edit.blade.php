@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
            <form action="{{ route('admin.experiences.update' ,$experience->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- Form for Update Main --}}
                <div class="row">
                    {{-- Update Background Image --}}
                    <div class="from-group col-md3 mt-3">
                        <h3>Image</h3>
                        <img style="height: 30vh" src="{{url($experience->image)}}"
                            class="img-thumbnail">
                        <input class="mt-3" type="file" name="big_image">
                    </div>



                    {{-- Update Title and Sub Title --}}
                    <div class="form-group col-md4 mt-3">
                        <div class="mb-3">
                            <label for="date">
                                <h4>Date</h4>
                            </label>
                            <input type="text" class="form-control" id="date" name="date" value="{{$experience->date}}">
                            
                        </div>
                        <div class="mb-5">
                            <label for="title">
                                <h4>Title</h4>
                            </label>
                            <input type="text" class="form-control" id="title" name="title" value="{{$experience->title}}">
                        </div>

                        <div class="from-group col-md6 mt-3">
                            <h3>Description</h3>
                            <textarea class="form-control" name="description" rows="5">{{$experience->description}}</textarea>
                        </div>

                    </div>
                </div>
        </form>
    </main>
@endsection