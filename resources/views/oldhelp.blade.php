
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><h4 class="card-title">How to use AmarGuru.com</h4></div>

                <div class="card-body">
                    
                        <h5><strong>1.</strong> Open up <a href="/" target="_blank">www.amarguru.com</a> on your web browser:</h5>
                        <img src="{{ asset('img/help1.PNG') }}" class="image-responsive rounded mx-auto d-block">
                        <h5><strong>2.</strong> Enter the name of your professor and click on 'Find My Professor!':</h5>
                        <img src="{{ asset('img/help2.PNG') }}" class="image-responsive rounded mx-auto d-block">
                        <h5><strong>3. a) If you see your professor's name:</strong></h5>
                        <div class="ml-4"> 
                            <h5><strong>i)</strong> Click on your professor's name from the search results:</h5>
                            <img src="{{ asset('img/help3.PNG') }}" class="image-responsive rounded mx-auto d-block">
                            <h5><strong>ii)</strong> Click on 'Post a review for this professor':</h5>
                            <img src="{{ asset('img/help4.PNG') }}" class="image-responsive rounded mx-auto d-block">
                        </div>
                        <h5><strong>3. b) If you don't see your professor:</strong></h5>
                        <div class="ml-4"> 
                            <h5><strong>i)</strong> Click on 'Add a new professor now!':</h5>
                            <img src="{{ asset('img/help6.PNG') }}" class="image-responsive rounded mx-auto d-block">
                            <h5><strong>ii)</strong> Fill up the form and click on 'Add New Professor.':</h5>
                            <img src="{{ asset('img/help7.PNG') }}" class="image-responsive rounded mx-auto d-block">
                            <h5><strong>iii)</strong> Your professor is now created. Click on 'Post a review':</h5>
                            <img src="{{ asset('img/help8.PNG') }}" class="image-responsive rounded mx-auto d-block">
                        </div>
                        <h5><strong>4.</strong> Fill up the form and click on 'POST REVIEW':</h5>
                        <img src="{{ asset('img/help5.PNG') }}" class="image-responsive rounded mx-auto d-block">
                        <h5><strong>5.</strong> All Done!</h5>
                        <div class="text-center">
                            <a href="/" class="btn btn-primary">Get Started</a>
                        </div>
                
                </div>
            </div>
        </div>
    </div>

    
</div>
@endsection
