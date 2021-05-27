@extends('layouts.main-layout')
@section('content')
 <div class="home_container">
   <div class="mb-4">
     <h1>Edit Employee</h1>
   </div>
   <form method="POST" action="{{ route('update', $employee -> id) }}">

     @csrf
     @method('POST')

     <div class="form-group row">
         <label class="col-lg-4 text-lg-right" for="firstname"><h4>Name</h4></label>
         <div class="col-lg-6">
           <input value="{{ $employee -> firstname}}" type="text" class="form-control" id="firstname" name="firstname">
         </div>
     </div>
     <div class="form-group row">
         <label class="col-lg-4 text-lg-right" for="lastname"><h4>Lastname</h4></label>
         <div class="col-lg-6">
           <input value="{{ $employee -> lastname}} "type="text" class="form-control" id="lastname" name="lastname" placeholder="Lastname">
         </div>
     </div>
      <div class="form-group row">
          <label class="col-lg-4 text-lg-right" for="role"><h4>Role</h4></label>
          <div class="col-lg-6">
            <input value="{{ $employee -> role}}" type="text" class="form-control" id="role" name="role"placeholder="Role">
          </div>
      </div>
      <div class="form-group row">
          <label class="col-lg-4 text-lg-right" for="ral"><h4>Ral</h4></label>
          <div class="col-lg-6">
            <input value="{{ $employee -> ral}}" type="text" class="form-control" id="ral" name="ral" placeholder="Ral">
          </div>
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
   </form>
 </div>
@endsection
