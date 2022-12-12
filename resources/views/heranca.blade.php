@extends('base.web')

@section('scripts')
    <script>
        class Mamifero {
            constructor (patas) {
                this.patas = patas;
            }

            tossir () {
                return 'Cof Cof';
            }
        }

        class Cachorro extends Mamifero {
            constructor (patas, raca) {
                super(patas, patas);
                this.raca = raca;
            }
        }

        const pug = new Cachorro(4, 'Pug');

        console.log(pug);
        console.log(pug.tossir());
    </script>
@endsection