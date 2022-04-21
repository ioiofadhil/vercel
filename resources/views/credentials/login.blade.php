@extends('layouts.main')
@section('content')
    <video autoplay muted loop playsinline id="myVideo">
        <source src="https://res.cloudinary.com/ioiofadhil/video/upload/v1647196841/People_walk_on_a_rocky_coast_hqjpew.mp4"
            type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <div class="container login vht-20 text-white vhb-20">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 position-relative">
                @error('link')
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">{{ $message }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @enderror
                <h2 class="text-center fw-bold pb-4">Login</h2>
                <form method="post" action="/login">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" required
                            placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" required
                            placeholder="Enter password">
                    </div>
                    <input type="checkbox" onclick="myFunction()">
                    <p class="d-inline checkbox">Show Password</p>
                    <div class="text-center">
                        <button type="submit" class="btn btn-light my-4">Login</button>
                    </div>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        function myFunction() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
@endsection
