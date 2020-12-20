@extends('layouts.app')

@section('title', 'Add department to university - ')

@section('content')

  <h1>Add Department to University</h1>
  <form method="post" action="{{ route('departments.store') }}" onsubmit="return confirm('Save Changes?');">
                              {{ csrf_field() }}
    
    <div class="form-group">
        
        <label>University: <small class="text-danger">[required]</small></label>
        <select class="form-control dropdown-success" name="university_id" required id="professor-university">
            <option disabled selected>Select a university.</option>
            @foreach($universities as $university)
            <option value="{{ $university->id }}">{{ $university->name }}</option>
            @endforeach
        </select>

        <label>Department: <small class="text-danger">[required]</small></label>
        <select class="form-control" name="department_id" required id="professor-university">
            <option disabled selected>Select a department.</option>
            @foreach($departments as $department)
            <option value="{{ $department->id }}">{{ $department->name }}</option>
            @endforeach
        </select>
    
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Submit"/>
    </div>

  </form>
  

@endsection

