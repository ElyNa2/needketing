@if($errors->any())
    <div class="alert alert-danger">
        <strong>We found Some errors !</strong>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif