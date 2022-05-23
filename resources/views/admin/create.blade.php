@extends('layout.app')

@section('title','add-new-post')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="{{ route('posts.index') }}" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="true">Posts index</a>
            </div>
        </div>
    </div>
@endsection
