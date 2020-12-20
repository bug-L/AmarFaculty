
@section('content1')
    <div class="card m-4 p-4">    
      <h5 style="color: #686868;">Add New Professor:</h5>
      <form method="post" style="padding:20px; margin:20px;" action="{{ route('professors.store') }}">
                            {{ csrf_field() }}
        <ul class="form-list">
          @if($errors->any())
          <li class="form-list__row">
            <small style="color: red">
            {!! $errors->first() !!}            
            </small>
          </li>
          @endif
          <li class="form-list__row">
            <label>Professor Name: <small class="text-danger">[required]</small></label>
			      <input type="text" name="name" placeholder="Name goes here." value="{{ old('name') }}" minlength="5" maxlength="60" required>
          </li>
          <li class="form-list__row">
            <label>Initials: <small class="text-info">[optional]</small></label>
			      <input type="text" name="initials" placeholder="Enter initials." value="{{ old('initials') }}" maxlength="5">
          </li>
          <li class="form-list__row">
            <label>University: <small class="text-danger">[required]</small></label>
            <select class="form-control dropdown-success" name="university_id" required id="professor-university">
              <option disabled selected>Select a university.</option>
              @foreach($universities as $university)
              <option value="{{ $university->id }}">{{ $university->name }}</option>
              @endforeach
            </select>
          </li>
          <li class="form-list__row">
            <label>Department: <small class="text-danger">[required]</small></label>
            <select class="form-control" name="department_id" required id="professor-university">
              <option disabled selected>Select a department.</option>
              @foreach($departments as $department)
              <option value="{{ $department->id }}">{{ $department->name }}</option>
              @endforeach
            </select>
          </li>

         
          <li>
            <button type="submit" class="button">Add New Professor.</button>
          </li>
        </ul>
      </form>
    </div> <!-- END: .modal__content -->
 
@endsection
