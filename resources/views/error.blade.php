@if (\Session::has('success'))
<div class="alert alert-success">
    <ul>
        <li>{!! \Session::get('success')[0] !!}</li>
    </ul>
</div>
@endif
@if (\Session::has('warning'))
<div class="alert alert-warning">
    <ul>
        <li>{!! \Session::get('warning')[0] !!}</li>
    </ul>
</div>
@endif
@if (\Session::has('fail'))
<div class="alert alert-danger">
    <ul>
        <li>{!! \Session::get('fail')[0] !!}</li>
    </ul>
</div>
@endif
