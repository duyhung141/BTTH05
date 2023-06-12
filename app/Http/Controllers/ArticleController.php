<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    public function create()
    {
        $authors = Author::all();
        $categories = Category::all();
        return view('article.create', compact('authors', 'categories'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            "tieude" => "required|max:200",
            "ten_bhat" => "required|max:100",
            "ma_tloai" => "required",
            "tomtat" => "required",
            "ma_tgia" => "required",
        ]);

        if ($validator->fails()) {
            return redirect(route('article.create'))->with(["error" => "Loi nhap du lieu"], 400);
        }
        $article = Article::create($data);
        if ($article) {
            return redirect(route('article.create'))->with(["success" => "Them thanh cong"], 200);
        } else {
            return redirect(route('article.create'))->with(["error" => "Them khong thanh cong"], 400);
        }

    }

    public function edit($ma_bviet)
    {
        $article = Article::where('ma_bviet', $ma_bviet)->first();
        $authors = Author::all();
        $categories = Category::all();
        return view('article.edit', compact('article', 'authors', 'categories'));
    }

    public function update(Request $request,$ma_bviet)
    {
        $data = $request->except(['_token', '_method']);
        $validator = Validator::make($data, [
            "tieude" => "required|max:200",
            "ten_bhat" => "required|max:100",
            "ma_tloai" => "required",
            "tomtat" => "required",
            "ma_tgia" => "required",
        ]);

        if ($validator->fails()) {
            return redirect(route('article.edit',['ma_bviet'=>$ma_bviet]))->with(["error" => "Loi nhap du lieu"], 400);
        }
        $article = Article::where('ma_bviet',$ma_bviet);
        if ($article) {
            $article->update($data);
            return redirect(route('article.edit',['ma_bviet'=>$ma_bviet]))->with(["success" => "Them thanh cong"], 200);
        } else {
            return redirect(route('article.edit',['ma_bviet'=>$ma_bviet]))->with(["error" => "Them khong thanh cong"], 400);
        }
    }

    public function delete($ma_bviet)
    {
        try {
            // Tìm bài viết cần xóa theo mã bài viết
            $article = Article::where("ma_bviet",$ma_bviet);
            // Kiểm tra xem bài viết có tồn tại hay không
            if (!$article) {
                return redirect(route('home'))->with('error', 'Bài viết không tồn tại');
            }

            // Xóa bài viết
            $article->delete();

            return redirect(route('home'))->with('success', 'Bài viết đã được xóa thành công');
        } catch (\Exception $e) {
            return redirect(route('home'))->with('error', $e->getMessage());
        }
    }

}
