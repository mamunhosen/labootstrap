@extends('layouts.master')
@section('title', 'Create Contact')

@section('createContent')

<div class="panel panel-default">
  <div class="panel-heading">Create Contact</div>
    <div class="panel-body">
     <form method='post' action="#">
      <div class="form-group">
         <label for="c_name">Contact Name:</label>
         <input type="text" class="form-control" name="c_name" id="c_name" placeholder="Enter Your Contact Name" required>
      </div>

      <div class="form-group">
          <label for="c_number">Contact Number:</label>
          <input type="number" class="form-control" name="c_number" id="c_number" placeholder="Enter Your Contact Number" required>
      </div>

      <div class="form-group">
          <label for="c_email">Contact Email:</label>
          <input type="email" class="form-control" name="c_email" id="c_email" placeholder="Enter Your Contact Email">
      </div>

      <input type="reset" value="reset" class="btn btn-warning">
      <input type="submit" value="Submit" class="btn btn-success">
    </form>
  </div>
</div>



@stop


