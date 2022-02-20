@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Main</li>
            </ol>
            {{-- Form for Update Main --}}
            <div class="row">
                {{-- Update Background Image --}}
                <div class="from-group col-md3 mt-3">
                    <h3>Background Image</h3>
                    <img style="height: 30vh" src="{{url($main->bc_img)}}" class="img-thumbnail">
                    <input class="mt-3" type="file" id="bc_img" name="bc_img">
                </div>

                {{-- Update Title and Sub Title --}}
                <div class="form-group col-md4 mt-3">
                    <div class="mb-3">
                        <label for="title"><h4>Title</h4></label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$main->title}}">
                    </div>
                    <div class="mb-5"> 
                        <label for="title"><h4>Sub Title</h4></label>
                        <input type="text" class="form-control" id="sub_title" name="sub_title"
                        value="{{$main->sub_title}}">
                    </div>

                    <div>
                        <h4>Upload Resume</h4>
                        <input class="mt-2" type="file" id="resume" name="resume"> 
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
