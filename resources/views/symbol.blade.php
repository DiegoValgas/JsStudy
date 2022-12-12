@extends('base.web')

@section('conteudo')
    <p>Symbol é utilizado para criar valores constantes em classes</p>
@endsection

@section('scripts')
    <script>
        class Cachorro {
            constructor (raca) {
                this.raca = raca;
            }
        }

        const patas = Symbol();

        Cachorro.prototype[patas] = 4;

        const pincher = new Cachorro('Pincher');

        console.log(Cachorro.prototype[patas]);
        console.log(pincher[patas]);
    </script>
@endsection