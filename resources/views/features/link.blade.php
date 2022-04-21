@extends('layouts.main')
<style>
    body {
        background-color: #1c1a21 !important;
    }

    .footer {
        position: fixed;
        bottom: 0;
    }

</style>
@section('content')
    <div class="container vht-20-mobile text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 position-relative">
                    @error('link')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">{{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @enderror
                    @error('url')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">{{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @enderror
                </div>
                <div class="col-md-4"></div>

                <div class="col-md-12 text-center pb-5">

                    <h4>Beautify your links!</h4>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-8 text-dark">

                    <div class="card">
                        <div class="card-header">
                            Your Links
                        </div>
                        <div class="card-body">
                            @if ($link)
                                @foreach ($link as $links)
                                    <ul>
                                        <li class="blockquote mb-0">
                                            <p><a target="_blank" href="{{ $links->url }}"
                                                    class="text-decoration-none text-dark">{{ $links->link ?? '' }}</a>
                                            </p>
                                            <footer class="blockquote-footer"><a target="_blank" href="{{ $links->url }}"
                                                    class="text-decoration-none text-dark">{{ $links->url ?? '' }}</a>
                                            </footer>
                                            <a href="" class="text-decoration-none text-success"><i
                                                    class="bi bi-pencil-square"></i>

                                            </a>
                                            &nbsp;-
                                            <a href="" class="text-decoration-none text-danger"><i
                                                    class="bi bi-trash"></i>
                                            </a>
                                        </li>

                                    </ul>
                                @endforeach
                            @endif
                            <!-- Button trigger modal -->
                            <div class="text-end">
                                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                    data-bs-target="#createLink">
                                    New Link
                                </button>
                            </div>
                            <form action="/link/create" method="post">
                                <div class="modal fade" id="createLink" tabindex="-1" aria-labelledby="createLinkLabel"
                                    aria-hidden="true" style="z-index: 9999999999999999999999999">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="createLinkLabel">New Link Form</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                @csrf
                                                <label for="basic-url" class="form-label">Your Beauty
                                                    URL</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"
                                                        id="basic-addon3">https://ioiofadhil.herokuapp.com/</span>
                                                    <input type="text" name="link" class="form-control" id="basic-url"
                                                        aria-describedby="basic-addon3" placeholder="ioiofadhil">
                                                </div>


                                                <label for="basic-url" class="form-label">Your URL</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" name="url" class="form-control" id="basic-url"
                                                        aria-describedby="basic-addon3"
                                                        placeholder="https://www.beritaku.com/url-that-you-want-to-beautify">
                                                </div>


                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-success">Create</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
@endsection
