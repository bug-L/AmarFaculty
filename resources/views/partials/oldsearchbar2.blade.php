{{--This searchbar does not contain university id input --}}
<div class="row">
    <form action="/professors/search" class="col s12" method="POST" role="search" >
        {{ csrf_field() }}    
        <div class="row">
            <div class="input-field col s10 l11 left-align">
                <i id="search-icon" class="material-icons grey-text prefix">face</i>
                <input id="search" type="text" class="validate grey-text text-darken-2" name="q" value="{{ old('q') }}" type="search" minlength="3" maxlength="30" required>
                <label for="search">Faculty Name/Initials:</label>                
            </div>
            <div class="input-field col s2 l1 right-align">
                <button type="submit" class="waves-effect waves-light btn blue darken-3"><span class="lime-text text-lighten-3"><i class="material-icons">search</i></span></button>
            </div>
        </div>
    </form>
</div>
    