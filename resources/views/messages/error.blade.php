@if(count($errors) > 0)
<div class="row">
    <div class="col-md-8 offset-md-2 error alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif