{{--4-8-20 Old create file without dynamically generated departments --}}
@section('content')
{{-- commented out the whole thing 
  <div class="row">
    <div class="col s12 l8 push-l2">
      
    
      <div class="card grey lighten-5">
        <form method="post" action="{{ route('professors.store') }}">
                              {{ csrf_field() }}
        
          <div class="card-content">
            <span class="card-title center-align grey-text text-darken-2"><strong>Add New Faculty</strong></span><br><br>
          
            <div class="row">
             
              <div class="col s10 push-s1 m8 push-m2 l6 push-l3">
                <div class="center-align">
                    <img class="responsive-img" src="{{ asset('img/professor-create.png') }}" alt="Add Faculty">
                </div>
              </div>
            </div>

            <p>
            @if($errors->any())
              <small style="color: red">
              {!! $errors->first() !!}            
              </small>
            @endif
            </p>
            <div class="row">
              <div class="input-field col s12">
                <input type="text" id="name" name="name" value="{{ old('name') }}" minlength="5" maxlength="60" class="validate" required>
                <label for="name">Faculty Name [required]</label>
              </div>
              
              <div class="input-field col s12">
                <input type="text" id="initials" name="initials" value="{{ old('initials') }}" maxlength="5" class="validate">
                <label for="name">Faculty Initials [optional]</label>
              </div>
           
              <div class="input-field col s12 m6">
                <select id="professor-university" name="university_id" required>
                  <option value="" disabled selected>Select a University</option>
                  @foreach($universities as $university)
                  <option value="{{ $university->id }}">{{ $university->name }}</option>
                  @endforeach
                </select>
                <label>University:</label>
              </div>

              <div class="input-field col s12 m6">
                <select id="professor-department" name="department_id" required>
                  <option value="" disabled selected>Select a Department</option>
                  @foreach($departments as $department)
                  <option value="{{ $department->id }}">{{ $department->name }}</option>
                  @endforeach
                </select>
                <label>Department:</label>
              </div>

{{-- Google Captcha 
              <div class="input-field col s12">
                <div class="g-recaptcha" data-sitekey="6LftIr8UAAAAAKHT6tZawtMViN49aw7u4CApQrlc"></div>
              </div>
--}}
              <div class="input-field col s12 center-align">
                <button type="submit" class="btn blue darken-3"><i class="material-icons left">add</i>Add New Faculty</button>
              </div>
            </div>
          
          </div>
        </form>
      </div>
    </div>
  </div>

  --}}
@endsection