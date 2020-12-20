@section('links')
    <link href="{{ asset('css/test.css')  }}" rel="stylesheet">
@endsection
@section('content')
<div class="card m-4 p-4">    
    <h5 style="color: #686868;">Edit {{ $professor->name }}:</h5>
    <form method="post" style="padding:20px; margin:20px;" action="{{ route('professors.update', [$professor->id]) }}" onsubmit="return confirm('Save Changes?');">
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
        <input type="text" name="name" placeholder="Name goes here." value="{{ $professor->name }}" required>
        </li>
        <li class="form-list__row">
        <label>University: <small class="text-danger">[required]</small></label>
        <select class="form-control dropdown-success" name="university_id" required id="professor-university">
            <option disabled>Select a university.</option>
            @foreach($universities as $university)
                @if($university->id == $professor->university->id)
                    <option selected value="{{ $university->id }}">{{ $university->name }}</option>
                @else
                    <option value="{{ $university->id }}">{{ $university->name }}</option>
                @endif
            @endforeach
        </select>
        </li>
        <li class="form-list__row">
        <label>Department: <small class="text-danger">[required]</small></label>
        <select class="form-control" name="department_id" required id="professor-university">
            <option disabled selected>Select a department.</option>
            @foreach($departments as $department)
                @if($department->id == $professor->department->id)
                    <option selected value="{{ $department->id }}">{{ $department->name }}</option>
                @else
                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                @endif
            
            @endforeach
        </select>
        </li>

        <input type="hidden" name="_method" value="put">

        <li>
        <button type="submit" class="button">Update Professor.</button>
        </li>
    </ul>
    </form>
</div> <!-- END: .modal__content -->
@endsection