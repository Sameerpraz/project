@extends('dashboardhome') 

@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">User Updated</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('subcategories.update', $subcategory->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">
                <label for="id">Sid:</label>
                <input type="text" class="form-control" name="id" value={{ $subcategory->id }} />
            </div>

            <div class="form-group">
                <label for="cid">Cid</label>
                <input type="text" class="form-control" name="cid" value={{ $subcategory->cid }} />
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection