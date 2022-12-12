@extends('base.web')

@section('scripts')
    <script>
        class Cachorro {
            constructor (raca) {
                this.raca = raca;
            }
        }

        const labrador = new Cachorro('Labrador');

        console.log(labrador);
    </script>
@endsection