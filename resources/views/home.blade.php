<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">



    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    {{-- Google font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,500;0,700;1,700&family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    {{-- css --}}
    <link rel="stylesheet" href="css/style.css">
    <title>Home</title>
</head>

<body>
    @include('component.navbar')
    <div class="container-fluid mt-5 py-5">
        <header class="d-flex">
            <div class="row align-items-center">
                <div class="col col-md-6 col text-start">
                    <h2>Assalamu'alaikum, <br> I'm Fadillah Fahrudin</h2>
                    <p>Saat ini saya fokus di frontend developer. selain bisa coding, saya juga dapat menggunakan tools
                        design untuk membuat user interface yang menarik dan tentu bisa di implementasikan dalam bahasa
                        pemrograman</p>

                    <p>ingin lebih mengenal saya?</p>
                    <a href="#">Learn About Me</a>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <img class="hero" src="img/user.png" height="300" alt="">
                </div>
            </div>
        </header>
        <main>
            <section>
                <h4>Saya dapat membuat suatu lebih indah <br> dengan teknologi ini:</h4>
                <ul>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>Javascript</li>
                    <li>PHP</li>
                    <li>Bootstrap</li>
                    <li>React</li>
                    <li>Laravel</li>
                    <li>Figma</li>
                    <li>Photoshop</li>
                    <li>AI</li>
                    <li>Final Cut</li>
                </ul>
            </section>

            <section>
                <h4>My Project</h4>
                <div class="row">
                    <div class="col-sm-6 mt-2">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mt-2">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="d-grid col btn btn-primary my-3">yang lainnya</button>
            </section>
        </main>
        @include('component.footer')
    </div>
</body>

</html>
