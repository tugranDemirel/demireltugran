
    @if(session('status'))
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="alert alert-success">{{ session('status') }}</div>
            </div>
        </div>
    @endif

    @if(session('statusDanger'))
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="alert alert-danger">{{ session('statusDanger') }}</div>
            </div>
        </div>
    @endif
