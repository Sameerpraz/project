@extends('dashboardhome')

@section('main')
@if($message= Session::get('success'))
<div class="alert alert-success">
<p>{{$message}}</p>
</div>
@endif
<div class="row">
<div class="col-sm-12">
<div>
    <a style="margin: 19px;" href="{{ route('subcategories.create')}}" class="btn btn-primary">Add new Subcategory</a>
    </div> 
    <h1 class="display-3">Subcategories</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>SID</td>
          <td>CID</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($subcategories as $subcategory)
        <tr>
            <td>{{$subcategory->id}}</td>
            <td>{{$subcategory->cid}}</td>
            <td>
                <a href="{{ route('subcategories.edit',$subcategory->id)}}" class="btn btn-primary">Edit</a>
            </td>
            
            <td>
                <form action="{{ route('subcategories.destroy', $subcategory->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <div class="row">
<div class="col-12 text-center">
{{$subcategories->links()}}
</div>
</div>
@endsection