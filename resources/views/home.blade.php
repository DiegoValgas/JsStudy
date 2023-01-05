@extends('base.web')

@section('content')
    <div class="container pt-4">
        <div class="row">
            @foreach (range(1, 9) as $item)
                <div class="col-md-4">
                    <div class="card text-bg-primary mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Name</h5>
                            <p class="card-text small">
                                <strong>E-mail: </strong> email@mail.com <br>
                                <strong>Telefone: </strong> 56376547534764567
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            <button class="btn btn-primary">Ver mais</button>
        </div>
    </div>    
@endsection

@section('scripts')
    <script src="{{ asset('libs/app.js') }}"></script>
@endsection

