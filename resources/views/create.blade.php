@extends('layouts.master')
@section('title', 'Create Contact')

@section('createContact')

<div class="panel panel-default">
  <div class="panel-heading">Create Contact</div>
       
 
       

    <div class="panel-body">
@if($errors->any())

   
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
     <li>{{ $error }}</li>
     @endforeach
  </ul>
</div>
 

@endif

     <form method='POST' action="{{url('store')}}">
      
   <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
        <div class="form-group">
           <label for="c_name">Contact Name:</label>
           <input type="text" class="form-control" name="contact_name" id="c_name" placeholder="Enter Your Contact Name" required  >
        </div>
    
        <div class="form-group">
            <label for="c_number">Contact Number:</label>
            <input type="number" class="form-control" name="contact_number" id="c_number" placeholder="Enter Your Contact Number" required >
        </div>
    
        <div class="form-group">
            <label for="c_email">Contact Email:</label>
            <input type="email" class="form-control" name="contact_email" id="c_email" placeholder="Enter Your Contact Email">
        </div>
        <div class="form-group">
            <label for="proPic">Image</label>
            <input type="file" id="proPic" name="proPic">
            <p class="help-block">Set Image With Contact.</p>
        </div>
      </div>
      <div class="panel-footer">
            <input type="reset" value="Reset" class="btn btn-warning btn-lg">
            <input type="submit" value="Save" class="btn btn-success btn-lg">
      </div>
     </form>

</div>




@stop

    

