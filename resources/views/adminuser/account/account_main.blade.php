@extends('adminuser.layouts.master')

@section('title', 'mainPage')

@section('myContent')
    <div class="container-lg p-3 p-sm-3 p-lg-3">
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-6 offset-sm-3 offset-lg-3">
                <h4 class="mx-auto">Welcome to Your account! Let's create Your Profile!</h4>

                <div class="row d-flex justify-content-center mx-auto">
                    <div class="img col-12 text-center col-sm-6 col-lg-6">
                        @if (Auth::user()->image == null)
                        <img src="{{asset('img/blank-profile.webp')}}" class="img-thumbnail rounded-circle" alt="" height="150" width="150">
                        @else
                        <img src="{{asset('storage/' . Auth::user()->image)}}" class="img-thumbnail rounded-circle" alt="" height="150" width="150">
                        @endif
                    </div>
                    <div class="button mt-1 mt-sm-1 mt-lg-1 text-center col-12 col-sm-6 col-lg-6">
                        <div class="name">
                            <h4>Aung Ko Zin</h4>
                        </div>
                        <div class="form-group">
                            <p class="btn btn-success form-control">User Info</p>
                        </div>
                    </div>
                </div>

                    <div class="form-group">
                        <div class=" row d-flex justify-content-evenly">
                            <div class="form-group col-12 col-sm-6">
                                <label for="exampleInputEmail1" class="form-label mt-4">Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->name}}" disabled placeholder="Enter email">
                            </div>
                            <div class="form-group col-12 col-sm-6">
                                <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
                                <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->email}}" disabled placeholder="Enter email">
                            </div>
                        </div>
                        <div class=" row d-flex justify-content-evenly">
                            <div class="form-group col-12 col-sm-6">
                                <label for="exampleInputEmail1" class="form-label mt-4">Phone</label>
                                <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->phone}}" disabled placeholder="Enter email">
                            </div>
                            <div class="form-group col-12 col-sm-6">
                                <label for="exampleInputEmail1" class="form-label mt-4">Address</label>
                                <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->address}}" disabled placeholder="Enter email">
                            </div>
                        </div>
                        <div class=" row d-flex justify-content-evenly">
                            <div class="form-group col-12 col-sm-6">
                                <label for="exampleInputEmail1" class="form-label mt-4">Gender</label>
                                <select class="form-control" name="gender" id="" disabled>
                                    <option value=""></option>
                                    <option value="male" @if ($data->gender == 'male')
                                        selected
                                    @endif>Male</option>
                                    <option value="female" @if ($data->gender == 'female')

                                    @endif>Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="button text-center mt-3 mt-sm-3 mt-lg-3">
                            <a href="{{route('account#editPage', Auth::user()->id)}}" class="btn btn-success">Edit Your Info</a>
                        </div>
                    </div>

            </div>
        </div>
    </div>
@endsection
