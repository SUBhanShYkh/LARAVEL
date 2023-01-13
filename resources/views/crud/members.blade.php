@extends('Layout')
@section('main')
<main class="main" id="main">

    <div class="pagetitle">
        <nav class="d-flex justify-content-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card" style="border-radius:0px;">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                    <h1 class="btn btn-outline-dark" style="border-radius:0px;">List Of Members</h1>
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Password</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                    @foreach ($controller_obj as $fetch )
                    <tr>
                        <th>{{$fetch->id}}</th>
                        <th>{{$fetch->name}}</th>
                        <th>{{$fetch->lname}}</th>
                        <th>{{$fetch->email}}</th>
                        <th>{{$fetch->phone}}</th>
                        <th>{{$fetch->pswd}}</th>
                        <th>
                            <a href="{{url('delete')}}/({{$fetch->name}}-{{$fetch->id}})" class="btn btn-danger btn-sm" style="border-radius:0px;">DELETE</a>
                            <a href="{{url('update')}}/({{$fetch->name}}-{{$fetch->id}})" class="btn btn-success btn-sm" style="border-radius:0px;">UPDATE</a>
                        </th>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
    </main>

@endsection
