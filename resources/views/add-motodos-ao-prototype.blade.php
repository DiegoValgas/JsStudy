@extends('base.web')

@section('scripts')
    <script>
        function Cachorro (raca = null) {
            this.raca = raca;
        }

        Cachorro.prototype.latir = function () {
            return 'Au Au';
        }

        const pug = new Cachorro('Pug');

        console.log(pug);
        console.log(pug.latir());
    </script>
@endsection