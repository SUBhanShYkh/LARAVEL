@extends('Layout')
@section('main')
<main class="main" id="main">

    <div class="pagetitle">
        <nav class="d-flex justify-content-end">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('index')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{url('members')}}">Members</a></li>
                <li class="breadcrumb-item"><a href="" class="disable">Update</a></li>
            </ol>
        </nav>
    </div>


    <div class="row">
        <div class="col-xl-12">
            <div class="card p-5" style="border-radius:0px;">
                <form action="{{url('update_member')}}" method="post">
                    @csrf
                    <input type="text" value="{{$controller_obj->name}}" name="name" id="" style="border-radius:0px;"class="form-control">
                    <br>
                    <input type="text" value="{{$controller_obj->lname}}" name="lname" id="" style="border-radius:0px;"class="form-control">
                    <br>
                    <input type="number" value="{{$controller_obj->phone}}" name="phone" id="" style="border-radius:0px;"class="form-control">
                    <br>
                    <input type="email" value="{{$controller_obj->email}}" name="email" id="" style="border-radius:0px;"class="form-control">
                    <br>
                    <input type="password" value="{{$controller_obj->pswd}}" name="Password" id="" style="border-radius:0px;" class="form-control">
                    <br>
                    <input type="submit" value="UPDATE" class="btn btn-success w-100" style="border-radius:0px;">
                </form>
            </div>
        </div>
    </div>
    </main>

@endsection
