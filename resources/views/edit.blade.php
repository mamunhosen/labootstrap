@extends('layouts.master')
@section('title', 'Edit Contact')

@section('editContact')


<div class="panel panel-default">
  <div class="panel-heading">Edit Contact</div>
    <div class="panel-body">
     <form method='POST' action="{{url('update')}}/{{$editcontact->contact_id}}">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
           <label for="c_name">Contact Name:</label>
           <input type="text" class="form-control" name="c_name" id="c_name" value="{{ $editcontact->contact_name }}" required>
        </div>
    
        <div class="form-group">
            <label for="c_number">Contact Number:</label>
            <input type="number" class="form-control" name="c_number" id="c_number" value="{{$editcontact->contact_number}}" required>
        </div>
    
        <div class="form-group">
            <label for="c_email">Contact Email:</label>
            <input type="email" class="form-control" name="c_email" id="c_email" value="{{$editcontact->contact_email}}">
        </div>
      </div>
      <div class="panel-footer">
            <input type="reset" value="Reset" class="btn btn-warning btn-lg">
            <input type="submit" value="Update" class="btn btn-success btn-lg">
      </div>
     </form>
</div>



@stop