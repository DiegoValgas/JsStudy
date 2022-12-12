@extends('base.web')

@section('scripts')
    <script>
        function Cachorro (raca = null, nome = null, idade = null) {
            this.raca = raca;
            this.nome = nome;
            this.idade = idade;
        }

        const pincher = new Cachorro('Pincher');

        console.log(pincher);
    </script>
@endsection