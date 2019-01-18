@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Create a new Discussion</div>

    <div class="card-body">
        <form action="{{ route('discussions.store') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title</label>
                <input 
                    type="text" 
                    name="title" 
                    id="title" 
                    class="form-control {{ $errors->first('title') ? 'is-invalid' : '' }}">
                <div class="invalid-feedback">
                    @if ($errors->has('title'))
                        {{ $errors->first('title') }}
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label for="channel_id">Pick a Channel</label>
                <select name="channel_id" class="form-control" id="channel_id">
                    @foreach ($channels as $channel)
                        <option value="{{ $channel->id }}">
                            {{ $channel->title }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="discussion">Ask a Question:</label>
                <textarea 
                    name="content" 
                    id="discussion" 
                    cols="30" 
                    rows="10"
                    class="form-control {{ $errors->first('content') ? 'is-invalid' : '' }}"></textarea>
                <div class="invalid-feedback">
                    @if ($errors->has('content'))
                        {{ $errors->first('content') }}
                    @endif
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-success float-right">Create Discussion</button>
            </div>
        </form>
    </div>
</div>
@endsection
