@extends('layouts.main')
@section('content')
<div>
    <form action="{{route('post.update', $post->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{$post->title}}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" class="form-control" id="content" placeholder="Content">{{$post->content}}</textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" name="image" class="form-control" id="image" placeholder="Image" value="{{$post->image}}">
        </div>
        <div class="form-group mb-3">
            <label class="visually-hidden" for="inlineFormSelectPref">Category</label>
            <select class="form-select" id="category" name="category_id">
                @foreach($categories as $category)
                <option selected {{$category->id === $post->category->id ? 'selected' : ''}}
                    value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
        </div>
        <!-- <div>
            <label class="form-label" for="tags">Tags</label>
            <select class="form-select" multiple aria-label="multiple select example" id="tags" name='tags[]'>
                @foreach($tags as $tag)
                <option value="{{$tag->id}}">{{$tag->title}}</option>
                @endforeach
            </select>
        </div> -->
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection