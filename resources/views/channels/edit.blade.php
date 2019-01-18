@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        Edit Channel: <strong>{{ $channel->title }}</strong>
    </div>

    <div class="card-body">
        <form action="{{ route('channel.update', ['channel' => $channel->id]) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="form-group">
                <label for="channel">Name</label>
                <input 
                    type="text" 
                    id="channel" 
                    name="channel" 
                    class="form-control"
                    value="{{ $channel->title }}">
            </div>
            <div class="form-group text-center">
                <button class="btn btn-success">Update Channel</button>
            </div>
        </form>
    </div>
</div>
@endsection
