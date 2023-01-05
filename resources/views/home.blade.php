@extends('base.web')

@section('content')
    <div class="container py-4">
        <div class="col-md-4 d-none" id="copy">
            <div class="card text-bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text small">
                        <strong>E-mail: </strong> <span class="email"></span> <br>
                        <strong>Telefone: </strong> <span class="phone"></span>
                    </p>
                </div>
            </div>
        </div>
        <div class="row" id="list">

        </div>
        <div class="d-flex justify-content-center">
            <button class="btn btn-primary" id="loadMore">Ver mais</button>
        </div>
    </div>    
@endsection

@section('scripts')
    <script src="{{ asset('libs/app.js') }}"></script>
@endsection

