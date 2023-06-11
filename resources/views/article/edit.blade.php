@extends('layouts.base')
<div class="container">
    @section('main-content')
        <form action="" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="mb-3 col">
                    <label for="tieude" class="form-label">Tiêu đề</label>
                    <input type="text" id="tieude" name="tieude" class="form-control" value="{{$article->tieude}}" required>
                </div>
                <div class="mb-3 col">
                    <label for="ten_bhat" class="form-label">Tên bài hát</label>
                    <input type="text" id="ten_bhat" name="ten_bhat" class="form-control" value="{{$article->ten_bhat}}" required>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col">
                    <label for="ma_bviet" class="form-label">Bài viết</label>
                    <select name="ma_bviet" id="ma_bviet" class="form-select"  required>
                        <option value="" readonly="">None</option>
                        @foreach($authors as $author)
                            @if($article->ma_tgia==$author->ma_tgia)
                                <option value="{{$author->ma_tgia}}">{{$author->ten_tgia}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="mb-3 col">
                    <label for="ma_tloai" class="form-label">Thể loại</label>
                    <select name="ma_tloai" id="ma_tloai"  class="form-select" required>
                        <option  value="" readonly="">None</option>
                        @foreach($categories as $category)
                            @if($article->ma_tloai==$category->ma_tloai)
                                <option value="{{$category->ma_tloai}}">{{$category->ten_tloai}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mb-3 col">
                <label for="hinhanh" class="form-label">Hình ảnh</label>
                <input type="text" id="hinhanh" name="hinhanh" class="form-control" value="{{$article->hinhanh}}">
            </div>
            <div class="mb-3">
                <label for="tomtat" class="form-label">Tóm tắt</label>
                <textarea rows="3"  id="tomtat" name="tomtat" class="form-control" required >{{$article->tomtat}}</textarea>
            </div>

            <div class="mb-3">
                <label for="noidung" class="form-label">Nội dung</label>
                <textarea rows="3"  id="noidung" name="noidung" class="form-control" >{{$article->noidung}}</textarea>
            </div>
            <!--        info warning danger success primary dark light-->
            <button class="btn btn-success">Edit</button>
        </form>

    @endsection
</div>
