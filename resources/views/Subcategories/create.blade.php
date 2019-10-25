@extends('dashboardhome')

@section('main')
<div class="col-sm-12">

  @if($message = Session::get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>

<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add subCategory</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
      <strong>Whoops!</strong>There is some problems with your products<br>
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('subcategories.store') }}">
          @csrf
          <div class="form-group">    
              <label for="id">Sid</label>
              <input type="text" class="form-control" name="id"/>
          </div>
        
          <div class="form-group">
              <label for="cid">Cid</label>
              <input type="text" class="form-control" name="cid"/>
          </div>                      
          <button type="submit" class="btn btn-primary-outline">save</button>
      </form>
  </div>
</div>
</div>
@endsection