@if(count($errors) > 0)
    @foreach ($errors->all() as $error)
    <div class="uk-alert-danger" uk-alert>
        <a class="uk-alert-close" uk-close></a>
        <p>{{$error}}</p>
    </div>
    @endforeach
@endif

@if(session('success'))
    <div class="uk-alert-success" uk-alert>
        <a class="uk-alert-close" uk-close></a>
    <p>{{session('success')}}</p>
    </div>
@endif

@if(session('error'))
    <div class="uk-alert-danger" uk-alert>
        <a class="uk-alert-close" uk-close></a>
    <p>{{session('error')}}</p>
    </div>
@endif
