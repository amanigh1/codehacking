@if(session()->has('msg'))
    <div class="alert alert-success">{{session('msg')}}</div>
@endif
