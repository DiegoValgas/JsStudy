@extends('base.web')

@section('scripts')
    <script>
        const cachorro = {
            patas: 4,
            raca: 'Indefinida',
            latir: function () {
                return 'Au Au';
            }
        };

        const caramelo = Object.create(cachorro);
        caramelo.raca = 'Vira lata';

        console.log(cachorro);
        console.log(caramelo);
        console.log(caramelo.patas);
        console.log(caramelo.latir());
    </script>
@endsection