@extends('layouts.main')
<style>
    .footer {
        position: fixed;
        bottom: 0;
    }

</style>
@section('content')
    <video autoplay muted loop playsinline id="myVideo">
        <source src="https://res.cloudinary.com/ioiofadhil/video/upload/v1647196841/People_walk_on_a_rocky_coast_hqjpew.mp4"
            type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <div class="container vht-20-mobile text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 position-relative">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">{{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if (session('notFound'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">{{ session('notFound') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
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

                <div class="col-md-12 text-center pb-3">
                    <h4>Beautify your links!</h4>
                    <h5>Your links are protected! Nobody can hit or access your beauty link via URL bar.</h5>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-8 text-dark">
                    <p class="text-end text-white"><i class="bi bi-people"></i> Links Beautified in this Website
                        : {{ $count }}</p>
                    <div class=" card">
                        <div class="card-header">
                            Your Links
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @if ($link !== null)
                                    @foreach ($link as $links)
                                        <div class="col-md-6">
                                            <ul>
                                                <li style="font-size: 19px" class="blockquote mb-0">
                                                    <p class="mb-0"><a target="_blank"
                                                            href="https://gioio.herokuapp.com/{{ $links->link }}"
                                                            class="text-decoration-none text-dark">{{ $links->link }}</a>
                                                    </p>
                                                    <a href="https://gioio.herokuapp.com/{{ $links->link }}"
                                                        class="d-block text-decoration-none" style="font-size: 14px">
                                                        https://gioio.herokuapp.com/{{ $links->link }}</a>

                                                    <button
                                                        style="margin-right: -13px; margin-top: -4px; margin-left: -13px;"
                                                        type="button" class="btn btn-link text-success pb-2"
                                                        data-bs-toggle="modal" data-bs-target="#{{ $links->link }}">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </button>
                                                    &nbsp;-
                                                    <a href="/{{ $links->id }}/delete"
                                                        class="text-decoration-none text-danger"><i
                                                            class="bi bi-trash"></i>
                                                    </a>
                                                </li>

                                            </ul>
                                            <form action="/{{ $links->id }}/update" method="post">
                                                <div class="modal fade" id="{{ $links->link }}" tabindex="-1"
                                                    aria-labelledby="createLinkLabel" aria-hidden="true"
                                                    style="z-index: 9999999999999999999999999">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="createLinkLabel">
                                                                    {{ $links->link }}</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                @csrf
                                                                <label for="basic-url" class="form-label">Your
                                                                    Beauty
                                                                    URL</label>
                                                                <div class="input-group mb-3">
                                                                    <span class="input-group-text"
                                                                        id="basic-addon3">https://gioio.herokuapp.com/</span>
                                                                    <input type="text" name="link" class="form-control"
                                                                        id="basic-url" aria-describedby="basic-addon3"
                                                                        placeholder="ioiofadhil"
                                                                        value="{{ $links->link }}">
                                                                </div>


                                                                <label for="basic-url" class="form-label">Your
                                                                    URL</label>
                                                                <div class="input-group mb-3">
                                                                    <input type="text" name="url" class="form-control"
                                                                        id="basic-url" aria-describedby="basic-addon3"
                                                                        placeholder="https://www.beritaku.com/url-that-you-want-to-beautify"
                                                                        value="{{ $links->url }}">
                                                                </div>


                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="submit"
                                                                    class="btn btn-success">Update</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    @endforeach
                                @else
                                    <p class="text-center">You don't have any links yet!</p>
                                @endif
                            </div>

                            @if ($link !== null)
                                {{-- Pagination --}}
                                <div class="d-flex justify-content-center">
                                    {!! $link->links() !!}
                                </div>
                            @endif
                            <!-- Button trigger modal -->
                            <div class="text-end">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
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
                                                        id="basic-addon3">https://gioio.herokuapp.com/</span>
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
