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

            get verRaca() {
                return 'A raça deste cachorro é ' + this.raca;
            }

            set definirRaca(raca) {
                this.raca = raca;
                return this;
            }
        }
        
        const caramelo = new Cachorro('Vira lata');

        console.log(caramelo.verRaca);

        caramelo.definirRaca = 'Pincher';

        console.log(caramelo.verRaca);
    </script>
@endsection