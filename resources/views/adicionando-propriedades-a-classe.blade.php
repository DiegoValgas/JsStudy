@extends('base.web')

@section('scripts')
    <script>
        class Cachorro {
            constructor (raca) {
                this.raca = raca;
            }

            uivar () {
                return 'Auuuuuuuu';
            }
        }

        Cachorro.prototype.patas = 4;
        
        Cachorro.prototype.latir = function () {
            return 'Au Au';
        }

        const labrador = new Cachorro('Labrador');

        console.log(labrador.patas);
        console.log(labrador.latir());
        console.log(labrador.uivar());
    </script>
@endsection