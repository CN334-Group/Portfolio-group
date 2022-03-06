@extends('layouts.admin_layout')
@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Create</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
            <form action="{{ route('admin.portfolios.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{ method_field('PUT') }}
                {{-- Form for Update Main --}}
                <div class="row">
                    {{-- Update Background Image --}}
                    <div class="from-group col-md3 mt-3">
                        <h3>Big Image</h3>
                        <img style="height: 30vh" src="{{asset('assets/img/logo lot of good.png')}}" class="img-thumbnail">
                        <input class="mt-3" type="file" name="big_image">
                    </div>

                    <div class="from-group col-md3 mt-3">
                        <h3>Small Image</h3>
                        <img style="height: 20vh" src="{{asset('assets/img/lotofgoods logo.png')}}" class="img-thumbnail">
                        <input class="mt-3" type="file" name="small_image">
                    </div>

                    {{-- Update Title and Sub Title --}}
                    <div class="form-group col-md4 mt-3">
                        <div class="mb-3">
                            <label for="title">
                                <h4>Title</h4>
                            </label>
                            <input type="text" class="form-control" id="title" name="title" value="">
                        </div>
                        <div class="mb-5">
                            <label for="sub_title">
                                <h4>Sub Title</h4>
                            </label>
                            <input type="text" class="form-control" id="sub_title" name="sub_title" value="">
                        </div>

                        <div class="from-group col-md6 mt-3">
                            <h3>Description</h3>
                            <textarea class="form-control" name="descriprion" rows="5"></textarea>
                        </div>

                    </div>
                </div>
                <input type="submit" name="submit" class="btn btn-primary mt-5">
        </div>
        </form>
    </main>
@endsection
