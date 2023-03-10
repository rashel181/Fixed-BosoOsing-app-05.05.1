@extends('_layouts.app')

@section('content')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-style.css') }}">

    <body>
        <main>
            <br>
            <header class="container bg-light p-5" style="border-radius: 20px;">
                <h2 class="col-12 text-center tm-section-title">
                    Kuliner Banyuwangi
                </h2>
                <p class="col-12 text-center">
                    Banyak sekali Kuliner khas Banyuwangi, kabupaten yang dijuluki sebagai Sunrise of Java ini banyak sekali
                    memiliki ciri khas terutama kuliner yang sangat terkenal dan sudah dikenal oleh tingkat internasional
                </p>
            </header></br>

            <!-- Gallery -->
            <div class="container bg-light p-5" style="border-radius: 20px;">
                <table>
                    <?php $i = 1; ?>
                    @foreach ($allKuliner as $key => $kuliner)
                        @if ($i == 1 or $i == 5)
                            <tr>
                        @endif
                        <td>
                            <!-- gallery page 1 -->
                            <div id="tm-gallery-page" class="tm-gallery-page" style="border-radius: 10px">
                                <article class="p-2 tm-gallery-item">
                                    <figure>
                                        <img src="{{ asset('storage/images') }}/{{ $kuliner->gambar }}" alt="Image"
                                            class="img-fluid tm-gallery-img" />
                                        <figcaption>
                                            <h4 class="tm-gallery-title">{{ $kuliner->nama_kuliner }}</h4>
                                            <p class="tm-gallery-description">
                                                {{ $kuliner->outline }}
                                            </p>
                                            <a href="{{ route('more.kuliner', $kuliner->id) }}"
                                                class="tm-btn tm-btn-default tm-right">Read More</a>
                                        </figcaption>
                                    </figure>
                                </article></br>
                            </div>
                        </td>
                        @if ($i == 4)
                            </tr>
                        @endif
                        <?php $i++; ?>
                        @if ($i == 5)
                            <?php $i = 1; ?>
                        @endif
                    @endforeach
                </table>
                <!-- gallery page 1 -->
            </div>
        </main>
        <!-- Scripts -->

        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/parallax.min.js') }}"></script>

    </body>
@endsection
