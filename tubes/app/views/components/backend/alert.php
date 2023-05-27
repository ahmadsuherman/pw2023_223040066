@if (Session::has('error') || $errors->any())
<div class="alert alert-danger alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    @if (Session::has('error'))
        <span>{{ Session::get('error') }}</span>
    @else
        @foreach ($errors->all() as $error) <span>{{ $error }}</span><br> @endforeach
    @endif
</div>
@elseif (Session::has('success'))
<div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <span>{{ Session::get('success') }}</span>
</div>
@endif