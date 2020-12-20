@section('content')

<!-- Version 2 -->

<div class="card m-4 p-4">      
  <form method="post" action="{{ route('reviews.store') }}">
                          {{ csrf_field() }}
    <ul class="form-list">
      @if($errors->any())
        <small style="color: red">
        {!! $errors->first() !!}            
        </small>
      @endif
      
      <h5 style="color:#686868;">Post a review for {{ $professor->name }}</h5><br>
      
      <div class="row justify-content-md-center">
        <div class="col">
          <div class="card text-center mb-3">
              <img id="emoji1" class="rounded mx-auto d-block mt-1" src="{{ asset('img/thinking.png') }}" style="height: 60px; width:60px;" alt="emoji">
              <h3 id="emoji-heading" class="text-secondary">Thinking...</h3>
          </div>
        </div>  
      </div>
      
      <li class="form-list__row">
        <label>Course Code: <small class="text-danger">[required]</small></label>
        <input type="text" class="form-control" id="code" name="code" placeholder="Example: CS116, ACC213, BUS161" value="{{ old('code') }}" minlength="3" maxlength="10" required>
      </li>

      <li class="form-list__row">
        
        <label>Rate this professor out of 5: (1 = Poor, 5 = Excellent) <small class="text-danger">[required]</small></label>
        <div class="btn-group special btn-group-toggle">
          <label id="one" class="btn btn-lg btn-outline-primary">
            <input type="radio" name="rating" id="rating1" value="1" onclick='clearButtons()' required> 1
          </label>
          <label id="two" class="btn btn-lg btn-outline-primary">
            <input type="radio" name="rating" id="rating2" value="2" onclick='clearButtons()'> 2
          </label>
          <label id="three" class="btn btn-lg btn-outline-primary">
            <input type="radio" name="rating" id="rating3" value="3" onclick='clearButtons()'> 3
          </label>
          <label id="four" class="btn btn-lg btn-outline-primary">
            <input type="radio" name="rating" id="rating4" value="4" onclick='clearButtons()'> 4
          </label>
          <label id="five" class="btn btn-lg btn-outline-primary">
            <input type="radio" name="rating" id="rating5" value="5" onclick='clearButtons()'> 5
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
        <textarea class="form-control" id="description" name="description" rows="5" placeholder="Say something about this professor. Be nice and respectful." maxlength="400">{{ old('description') }}</textarea>
      </li>
      <input name="professor_id" type="hidden" value="{{ $professor->id }}">
      
      <li class="form-list row">
        <div class="g-recaptcha" data-sitekey="6LftIr8UAAAAAKHT6tZawtMViN49aw7u4CApQrlc"></div>
      </li>
      
      <li>
        <button type="submit" class="button">Post Review.</button>
      </li>
    </ul>
  </form>
</div>
@endsection


@section('scripts')


<script>


function clearButtons() {
  if (document.getElementById("rating1").checked) {
    
    document.getElementById("emoji1").src = "{{ asset('img/rating_1.png') }}";

    document.getElementById("emoji-heading").innerHTML = "Terrible!";
    document.getElementById("emoji-heading").className = "text-danger";
    
    document.getElementById("one").className = "btn btn-lg btn-danger text-white";
    document.getElementById("two").className = "btn btn-lg btn-outline-danger";
    document.getElementById("three").className = "btn btn-lg btn-outline-danger";
    document.getElementById("four").className = "btn btn-lg btn-outline-danger";
    document.getElementById("five").className = "btn btn-lg btn-outline-danger";

  } else if (document.getElementById("rating2").checked) { 

    document.getElementById("emoji1").src = "{{ asset('img/rating_2.png') }}";
    
    document.getElementById("emoji-heading").innerHTML = "Poor!";
    document.getElementById("emoji-heading").className = "text-warning";
    
    document.getElementById("one").className = "btn btn-lg btn-outline-warning";
    document.getElementById("two").className = "btn btn-lg btn-warning text-dark";
    document.getElementById("three").className = "btn btn-lg btn-outline-warning";
    document.getElementById("four").className = "btn btn-lg btn-outline-warning";
    document.getElementById("five").className = "btn btn-lg btn-outline-warning";

  } else if (document.getElementById("rating3").checked) { 

    document.getElementById("emoji1").src = "{{ asset('img/rating_3.png') }}";
    
    document.getElementById("emoji-heading").innerHTML = "Good!";
    document.getElementById("emoji-heading").className = "text-info";
    
    document.getElementById("one").className = "btn btn-lg btn-outline-info";
    document.getElementById("two").className = "btn btn-lg btn-outline-info";
    document.getElementById("three").className = "btn btn-lg btn-info text-white";
    document.getElementById("four").className = "btn btn-lg btn-outline-info";
    document.getElementById("five").className = "btn btn-lg btn-outline-info";
    
  } else if (document.getElementById("rating4").checked) { 
    document.getElementById("emoji1").src = "{{ asset('img/rating_4.png') }}";
    
    document.getElementById("emoji-heading").innerHTML = "Great!";
    document.getElementById("emoji-heading").className = "text-primary";
    
    document.getElementById("one").className = "btn btn-lg btn-outline-primary";
    document.getElementById("two").className = "btn btn-lg btn-outline-primary";
    document.getElementById("three").className = "btn btn-lg btn-outline-primary";
    document.getElementById("four").className = "btn btn-lg btn-primary text-white";
    document.getElementById("five").className = "btn btn-lg btn-outline-primary";
    
  } else if (document.getElementById("rating5").checked) { 
    document.getElementById("emoji1").src = "{{ asset('img/rating_5.png') }}";
    
    document.getElementById("emoji-heading").innerHTML = "Excellent!";
    document.getElementById("emoji-heading").className = "text-success";
    
    document.getElementById("one").className = "btn btn-lg btn-outline-success";
    document.getElementById("two").className = "btn btn-lg btn-outline-success";
    document.getElementById("three").className = "btn btn-lg btn-outline-success";
    document.getElementById("four").className = "btn btn-lg btn-outline-success";
    document.getElementById("five").className = "btn btn-lg btn-success text-white";
  
  }
}


</script>
@endsection