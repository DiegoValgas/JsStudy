@extends('base.web')

@section('scripts')
    <script>
        const carro = {
            cambio: 'Automático',
        };

        console.log(carro);
        console.log(Object.getPrototypeOf(carro));
        console.log(Object.getPrototypeOf(carro) === Object.prototype);
    </script>
@endsection