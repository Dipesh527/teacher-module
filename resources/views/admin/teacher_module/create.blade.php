@extends('admin.layouts.app')
@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Basic form elements</h4>
            <p class="card-description"> Basic form elements </p>
            <form class="forms-sample" action="{{ route('store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail3" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputAddress3">Address</label>
                    <input type="text" class="form-control" id="exampleInputNumber3" name="address" placeholder="Number">
                </div>
                <div class="form-group">
                    <label for="exampleInputNumber3">Number</label>
                    <input type="integer" class="form-control" id="exampleInputNumber3" name="number" placeholder="Number">
                </div>
                <div class="form-group">
                    <label for="exampleSelectGender">Gender</label>
                    <select class="form-control" name="gender" id="exampleSelectGender">
                                    <option>Male</option>
                                    <option>Female</option>
                     </select>
                </div>
              
                <div class="form-group">
                    <label for="exampleSelectFaculty">Faculty</label>
                    <select class="form-control" name="faculty" id="exampleSelectGender">
                                    <option>science</option>
                                    <option>math</option>
                                    </select>
                </div>
             
                <div class="form-group">
                    <label for="exampleSelectModule">Module</label>
                    <select class="form-control" name="module" id="exampleSelectGender">
                                    <option>1</option>
                                    <option>2</option>
                                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleSelectModule">Nationality</label>
                    <select class="form-control" name="nationality" id="exampleSelectGender">
                                    <option>nepali </option>
                                    <option>english</option>
                                    </select>
                </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-dark">Cancel</button>
        

            </form>
        </div>
    </div>
  </div>
@endsection