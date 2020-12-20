@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>Enter one name each line</h2>
            <form method="post" action="{{ route('massCreateProfessors') }}" onsubmit="return confirm('Sure?');">
                {{ csrf_field() }}
                
                <textarea style="width: 100%;" name="names" rows="10"></textarea>
                
                <select class="form-control" name="university_id" required id="professor-university">
                    <option disabled selected>Select a university.</option>
                    @foreach($universities as $university)
                    <option value="{{ $university->id }}">{{ $university->name }}</option>
                    @endforeach
                </select>

                <select class="form-control" name="department_id" required id="professor-department">
                    <option disabled selected>Select a department.</option>
                    @foreach($departments as $department)
                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                    @endforeach
                </select>

               
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>

            @if($errors->any())
                <small style="color: red">
                {!! $errors->first() !!}            
                </small>
            @endif
        </div>
    </div>
</div>
@endsection