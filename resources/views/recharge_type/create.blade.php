@extends('layouts')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
  .name {
    height: 20px;
    width: 100%;
    padding: 15px;
  }
</style>
<div class="card uper">
  <div class="col-md-12 text-center">
    Add Recharge
  </div>
  <div class="col-md-12">
    <div class="row">
        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
          </ul>
        </div><br />
      @endif
    </div>
    <div class="row">
        {{Widget::run('alert')}}
    </div>
      <form method="post" action="{{ route('recharge-type.post.create') }}">
          @csrf
          <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="name" name="name" required="true" />
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection