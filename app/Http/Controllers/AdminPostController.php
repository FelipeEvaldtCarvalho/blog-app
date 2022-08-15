<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminPostController extends Controller
{
    public function index()
    {
        return view('admin.posts.index', [
            "posts" =>  Post::where('user_id', auth()->user()->id)->filter(request(['search']))->paginate(5),
            'categories' => Category::all(),
            'authors' => User::all(),
            'currentCategory' => Category::firstWhere('slug', request('category')),
            'currentAuthor' => User::firstWhere('username', request('author')),
        ]);
    }

    public function create()
    {
        return view('post.create',[
            'categories' => Category::all(),
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
            'category_id' => ['required', Rule::exists('categories', 'id')],
            'thumb' => 'required | image',
            'title' => ['required', Rule::unique('posts', 'title')],
            'body' => 'required',
        ]);

        $attributes['slug'] = str_replace(' ', '', request('title'));

        $attributes['user_id'] = auth()->id();

        $attributes['excerpt'] = substr(request('body'), 0, 250);

        if (request()->hasFile('thumb') && request()->file('thumb')->isValid()){
            $thumb = request()->thumb;
            $extension ='.' . $thumb->extension();
            $imgName = md5($thumb->getClientOriginalname() . strtotime("now")) . $extension;
            request()->thumb->move(public_path('thumbs'), $imgName);
        }

        $attributes['thumb'] = $imgName;

        Post::create($attributes);

        return redirect('/')->with('success', 'Seu Post foi publicado com sucesso!');
    }

    public function edit (Post $post)
    {
        return view('admin.posts.edit', [
            'post' => $post,
            'categories' => Category::all(),
        ]);
    }

    public function update(Post $post)
    {
        $attributes['slug'] = str_replace(' ', '', request('title'));

        $attributes = request()->validate([
            'category_id' => ['required', Rule::exists('categories', 'id')],
            'title' => ['required', Rule::unique('posts', 'title')->ignore($post->id)],
            'body' => 'required',
        ]);

        $attributes['excerpt'] = substr(request('body'), 0, 250);

        $post->update($attributes);

        return redirect('/admin/posts')->with('success', 'Publição atualizada com sucesso!');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/admin/posts')->with('success', 'Publição excluida com sucesso!');
    }

}
