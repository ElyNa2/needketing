@extends('users.master.layouts')

@section('title','Subscribe')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2 class="text-center">Subscribe Some Tags</h2>
            <p class="text-center" style="background-color: #fff6de;padding:10px;">
                You can select some of the tags here, After choosing the tags that tags repated posts you can
                see on your dashboard <a href="">Learn More</a>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="checkbox-list" style="margin-top: 30px;">
                {!! Form::model(auth()->user(),array('route'=>['user.subscribe.tags',auth()->user()->id],'method'=>'put')) !!}
                @foreach($tags as $tag)
                    <div class="checkbox col-md-3">
                        <label>
                            <input type="checkbox" value="{{ $tag->id }}" name="tags[]"> {{ $tag->tag_name }}
                        </label>
                    </div>
                @endforeach
                <button type="submit" class="btn btn-primary pull-right" style="margin-top: 50px;">Continue</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection