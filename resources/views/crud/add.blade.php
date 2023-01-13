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
            <div class="card p-5" style="border-radius:0px;">
                <form action="{{url('add_member')}}" method="post">
                    @csrf
                    <input type="text" name="name" id="" style="border-radius:0px;" placeholder="Member Name?" class="form-control">
                    <br>
                    <input type="text" name="lname" id="" style="border-radius:0px;" placeholder="Member Last-Name?" class="form-control">
                    <br>
                    <input type="number" name="phone" id="" style="border-radius:0px;" placeholder="Member Phone?" class="form-control">
                    <br>
                    <input type="email" name="email" id="" style="border-radius:0px;" placeholder="Member Email?" class="form-control">
                    <br>
                    <input type="password" name="Password" id="" style="border-radius:0px;" placeholder="Give the Password!" class="form-control">
                    <br>
                    <input type="submit" value="ADD" class="btn btn-success w-100" style="border-radius:0px;">
                </form>
            </div>

        </div>
    </div>
    </main>

@endsection
