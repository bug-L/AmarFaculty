@section('links')
<link href="{{ asset('css/test.css') }}" rel="stylesheet">
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.min.js"></script>
@endsection

@section('content')

<!-- Version 1 -->

<div class="modal">
<div class="modal__container col-11">
  <div class="modal__content">
    <h5 style="color:#686868;">Post a review for {{ $professor->name }}</h5><br>
    <form method="post" action="{{ route('reviews.store') }}">
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
          <label>Course Code: <small class="text-danger">[required]</small></label>
          <input type="text" class="form-control" id="code" name="code" placeholder="Example: CS116, ACC213, BUS161" value="{{ old('code') }}" required>
        </li>

        <li class="form-list__row">
          <label>Rate this professor out of 5: (1 = Poor, 5 = Excellent) <small class="text-danger">[required]</small></label>
          <div class="btn-group special btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-lg btn-outline-primary">
              <input type="radio" name="rating" id="rating1" value="1" required> 1
            </label>
            <label class="btn btn-lg btn-outline-primary">
              <input type="radio" name="rating" id="rating2" value="2"> 2
            </label>
            <label class="btn btn-lg btn-outline-primary">
              <input type="radio" name="rating" id="rating3" value="3"> 3
            </label>
            <label class="btn btn-lg btn-outline-primary">
              <input type="radio" name="rating" id="rating4" value="4"> 4
            </label>
            <label class="btn btn-lg btn-outline-primary">
              <input type="radio" name="rating" id="rating5" value="5"> 5
            </label>
          </div>
        </li>

        <li class="form-list__row">
          <label>Attendance was: <small class="text-danger">[required]</small></label>
          <div class="btn-group special btn-group-toggle btn-group-justified" data-toggle="buttons">
            <label class="btn btn-lg btn-outline-primary">
              <input type="radio" name="att" id="att-optional" value="0" required >OPTIONAL
            </label>
            <label class="btn btn-lg btn-outline-danger">
              <input type="radio" name="att" id="att-mandatory" value="1">MANDATORY
            </label>
          </div>
        </li>
       
        <li class="form-list__row">
          <label>Would you take this professor again? <small class="text-danger">[required]</small></label>
          <div class="btn-group special btn-group-toggle btn-group-justified" data-toggle="buttons">
            <label class="btn btn-lg btn-outline-primary">
              <input type="radio" name="take-again" id="take-again-yes" value="1" required> YES  
            </label>
            <label class="btn btn-lg btn-outline-danger">
              <input type="radio" name="take-again" id="take-again-no" value="0"> NO 
            </label>
          </div>
        </li>

        <li class="form-list__row">
          <label>Description: <small class="text-info">[optional]</small></label>
          <textarea class="form-control" id="description" name="description" rows="5" placeholder="Say something about this professor..." >{{ old('description') }}</textarea>
        </li>


        <input name="professor_id" type="hidden" value="{{ $professor->id }}">
        <li>
          <button type="submit" class="button">Post Review.</button>
        </li>
      </ul>
    </form>
  </div> <!-- END: .modal__content -->
</div> <!-- END: .modal__container -->
</div> <!-- END: .modal -->

@endsection