@extends('layouts.base')

@section('title')
    HomePage
@endsection
<div class="container">
    @section('main-content')
        @if(session('success'))
            <div class="toast bg-success d-block mx-auto mb-3" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header ">
                    <strong class="me-auto">Article</strong>
                    <small>11 mins ago</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    Xóa thành công
                </div>
            </div>
        @endif

        @if(session('error'))
            <div class="toast bg-danger d-block mx-auto mb-3" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header ">
                    <strong class="me-auto">Article</strong>
                    <small>11 mins ago</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{session('error')}}
                </div>
            </div>
        @endif
        <div>
            <a class="btn btn-success mb-2" href="{{route('article.create')}}">Create Article</a>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach($articles as $article)
                    <div class="col">
                        <div class="card shadow-sm min-vh-50">
                            <img class="bd-placeholder-img card-img-top" width="100%" height="300px" src="{{$article->hinhanh}}" alt="hinh_anh">
                            <div class="card-body ">
                                <p class="card-text fw-bold">{{$article->tieude}}</p>
                                <p class="card-text">{{$article->ten_bhat}}</p>
                                <p class="card-text">{{$article->tomtat}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{route('article.edit',['ma_bviet'=>$article->ma_bviet])}}" class="btn btn-sm btn-outline-secondary">Edit</a>

                                        <form action="{{route('article.delete',['ma_bviet'=>$article->ma_bviet])}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-outline-secondary"
                                               onclick="confirm('Are you sure you want to delete')"
                                            >Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>

    @endsection

</div>
