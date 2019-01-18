@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">You are viewing: {{ $discussion->title }}</div>

    <div class="card-body">
        <p>{{ $discussion->content }}</p>
    </div>
</div>
@endsection
