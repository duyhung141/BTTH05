@extends('layouts.base')
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
                    Thêm thành công
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
                        Thêm thất bại
                    </div>
                </div>
        @endif
        <div>
            <form action="{{route('article.store')}}" method="post">
                @csrf
                <div class="row">
                    <div class="mb-3 col">
                        <label for="tieude" class="form-label">Tiêu đề</label>
                        <input type="text" id="tieude" name="tieude" class="form-control" required>
                    </div>
                    <div class="mb-3 col">
                        <label for="ten_bhat" class="form-label">Tên bài hát</label>
                        <input type="text" id="ten_bhat" name="ten_bhat" class="form-control" required>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col">
                        <label for="ma_tgia" class="form-label">Bài viết</label>
                        <select name="ma_tgia" id="ma_tgia" class="form-select" required>
                            <option value="" readonly="">None</option>
                            @foreach($authors as $author)
                                <option value="{{$author->ma_tgia}}">{{$author->ten_tgia}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3 col">
                        <label for="ma_tloai" class="form-label">Thể loại</label>
                        <select name="ma_tloai" id="ma_tloai" class="form-select" required>
                            <option value="" readonly="">None</option>
                            @foreach($categories as $category)
                                <option value="{{$category->ma_tloai}}">{{$category->ten_tloai}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3 col">
                    <label for="hinhanh" class="form-label">Hình ảnh</label>
                    <input type="text" id="hinhanh" name="hinhanh" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="tomtat" class="form-label">Tóm tắt</label>
                    <textarea rows="3" id="tomtat" name="tomtat" class="form-control" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="noidung" class="form-label">Nội dung</label>
                    <textarea rows="3" id="noidung" name="noidung" class="form-control"></textarea>
                </div>
                <!--        info warning danger success primary dark light-->
                <button class="btn btn-success">Create</button>
            </form>

        </div>

    @endsection
</div>
