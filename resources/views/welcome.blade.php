@extends('layout')
@extends('header')
@extends('footer')

@section('content')

<form action="toughts" method="POST">
{{ csrf_field() }}
    <div class="w-50 p-3 position-absolute top-50 start-50 translate-middle">
        <div class="w-50">
            <h4><label class="form-label">Your name</label></h4>
            <input type="text" name="name" class="form-control text-dark bg-warning" id="name" placeholder="your name...">
        </div>
        <br><br>
        <div class="mb-3">
            <h4><label  class="form-label">What's on your mind?</label></h4>
            <textarea class="form-control text-dark bg-warning" name="input" id="input" placeholder="Type your text here..." rows="3"></textarea>
        </div>
        <button type="submit" name="submit" value="ok" class="btn btn-outline-warning">Send</button>
    </div>
</form>

@endsection