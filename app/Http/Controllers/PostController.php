<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
    // $post = Post::find(1);
    //    dd ($post);
    // $post = Post::find(1);
    //    dd ($post);

    $posts = Post::all();

    return view('post.index', compact('posts'));

//     foreach($posts as $post){
//         dump($post->title);
// }

//     $post1 = Post::where('is_published', 1)->first();
//     dump($post1->content);
//     //    dd ('end');
//     foreach($posts as $post){
//         dump($post->title);
//     }

// $post1 = Post::where('is_published', 1)->first();
// dump($post1->content);
//    dd ('end');

              // $str = 'string';
        // dd($str);
        // dump($str);
        // var_dump($str);
        // return 'My post';
        }
// ---------------------------------------------------------------------
        public function create()
        {
                return view('post.create');
// $postsArr = [
//     [
//     'title' => 'title of post',
//     'content' => 'some interesting',
//     'image' => 'image1',
//     'likes' => 20,
//     'is_published' => 1,
//     ],
//     [
//     'title' => 'another title of post',
//     'content' => 'another some interesting',
//     'image' => 'image2',
//     'likes' => 50,
//     'is_published' => 1,
//     ],
// [
//                 'title' => 'next new title of post',
//                 'content' => 'next some interesting',
//                 'image' => 'next image3',
//                 'likes' => 200,
//                 'is_published' => 0,
//             ]
// ];

// foreach($postsArr as $post){
//     Post::create($post);
// }
// Post::create([
//      'title' => 'an title of post',
//     'content' => 'an some interesting',
//     'image' => 'image2',
//     'likes' => 100,
//     'is_published' => 1,
// ]);

dd('created');
        }

        // --------------------------------------------------------------------

          public function store(){
            $data = request()->validate([
                'title' => 'string',
                'content' => 'string',
                'image' => 'string',
            ]);

            Post::create($data);
            return redirect()->route('post.index');
          }

        // ------------------------------------------------

  public function show(Post $post){
    return view('post.show', compact('post'));
  }

//   -----------------------------------------------------------
public function edit(Post $post){
   return view('post.edit',compact('post'));
}
//  ----------------------------------------------------------
public function update(Post $post){
   $data = request()->validate([
                'title' => 'string',
                'content' => 'string',
                'image' => 'string',
            ]);

            // Post::update($data);
            $post->update($data);
            return redirect()->route('post.show', $post->id);
}

// ------------------------------------------------

public function destroy(Post $post){
    $post->detete();
    return redirect()->route('post.index')
}

// public function update()
//         {
//             $post = Post::find(6);
//             $post->update([
//                 'title' => 'updated new title of post',
//                 'content' => 'updated some interesting',
//                 'image' => 'updated image4',
//                 'likes' => 200,
//                 'is_published' => 0,
//             ]);

//             dd($post->title);
//         }

           public function delete()
        {
            // $post = Post::find(6);
            // $post->delete();

            $post = Post::withTrashed()->find(6);
            $post->restore();

            dd('Delete');
        }

           public function firstOrCreate()
        {
            $anotherPost = [
                'title' => 'title of post1',
                'content' => 'next some 1',
                'image' => 'next image1',
                'likes' => 100,
                'is_published' => 0,
            ];

           $post = Post::firstOrCreate([
             'title' => 'title of post1'],
           $anotherPost);

          if ($post->wasRecentlyCreated) {
    dump('Пост БЫЛ создан');
} else {
    dump('Пост УЖЕ существовал');
}
        }

           public function updateOrCreate()
        {
            $anotherPost = [
                'title' => 'up new title of post1',
                'content' => 'up2 new next some 1',
                'image' => 'up2 new next image1',
                'likes' => 400,
                'is_published' => 1,
            ];

           $post = Post::updateOrCreate([
             'title' => 'up new title of post1'],
           $anotherPost);

           dump($post->content);

          if ($post->wasRecentlyCreated) {
    dump('Пост БЫЛ создан');
} else {
    dump('Пост УЖЕ существовал. Он был ОБНОВЛЕН');
}
        }
}
