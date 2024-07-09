<?= $this->extend('master')?>

<?= $this->section('content')?>

<header class="bg-dark py-5">
    <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-lg-8 col-xl-7 col-xxl-6">
                <div class="my-5 text-center text-xl-start">
                    <h1 class="display-5 fw-bolder text-white mb-2">The Fallen Oaks: Natureza Em Ruínas.</h1>
                    <p class="lead fw-normal text-white-50 mb-4">Aprenda sobre desmatamento enquanto joga!</p>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                        <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Download</a>
                        <a class="btn btn-outline-light btn-lg px-4" href="#!">Sobre</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="https://raw.githubusercontent.com/guifenske/The-Fallen-Oaks/master/Sprite-0001.png" alt="" /></div>
        </div>
    </div>
</header>


    <!-- Features section-->
<section class="py-5" id="features">
    <div class="container px-5 my-5">
        <div class="row gx-5">
            <div class="col-lg-4 mb-5 mb-lg-0"><h2 class="fw-bolder mb-0">Desbrave um mundo pós apocalíptico.</h2></div>
            <div class="col-lg-8">
                <div class="row gx-5 row-cols-1 row-cols-md-2">
                    <div class="col mb-5 h-100">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-collection"></i></div>
                        <h2 class="h5">Engine Atual</h2>
                        <p class="mb-0">Bem pensado e em desenvolvimento na Godot Engine.</p>
                    </div>
                    <div class="col mb-5 h-100">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                        <h2 class="h5">Exportação para diferentes plataformas</h2>
                        <p class="mb-0">É possível exportar o jogo para diferentes plataformas, por exemplo: Android, Windows, Linux, IOS.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial section-->
<div class="py-5 bg-light">
    <div class="container px-5 my-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-10 col-xl-7">
                <div class="text-center">
                    <div class="fs-4 mb-4 fst-italic">"Das cinzas de nossa civilização, surgiram os autômatos. Sem a sabedoria das árvores, programaram um mundo de ordem fria e estéril. Agora, eles patrulham o que resta de nossa terra."</div>
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="fw-bold">
                            Escrituras
                            <span class="fw-bold text-primary mx-1">/</span>
                            The Fallen Oaks
                        </div>
                    </div>
                    <br>
                    <div class="fs-4 mb-4 fst-italic">"A terra gritou quando as árvores caíram, mas nós estávamos surdos aos seus lamentos. Agora, seu solo árido e rachado é um testemunho mudo de nossa negligência."</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog preview section-->
<section class="py-5">
    <div class="container px-5 my-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6">
                <div class="text-center">
                    <h2 class="fw-bolder">Blog</h2>
                    <p class="lead fw-normal text-muted mb-5">Blog do desenvolvimento do jogo.</p>
                </div>
            </div>
        </div>
        <div class="row gx-5">
            <div class="col-lg-10 mb-5">
                <div class="card h-100 shadow border-0">
                    <img class="card-img-top" src="https://raw.githubusercontent.com/guifenske/The-Fallen-Oaks/master/img1.png" alt="..." />
                    <div class="card-body p-4">
                        <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                        <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Obeliscos</h5></a>
                        <p class="card-text mb-0">Adição ao jogo que conta a história do apocalipse através de obeliscos.</p>
                    </div>
                    <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                        <div class="d-flex align-items-end justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="small">
                                    <div class="text-muted">April 09, 2024 &middot; 2 min read</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 mb-5">
                <div class="card h-100 shadow border-0">
                    <img class="card-img-top" src="https://raw.githubusercontent.com/guifenske/The-Fallen-Oaks/master/godot.png" alt="..." />
                    <div class="card-body p-4">
                        <div class="badge bg-primary bg-gradient rounded-pill mb-2">Media</div>
                        <a class="text-decoration-none link-dark stretched-link" href="#!"><h5 class="card-title mb-3">Godot Engine</h5></a>
                        <p class="card-text mb-0">Um pouco do desenvolvimento por trás das cenas do jogo.</p>
                    </div>
                    <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                        <div class="d-flex align-items-end justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="small">
                                    <div class="text-muted">April 09, 2024 &middot; 2 min read</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to action-->
        <aside class="bg-primary bg-gradient rounded-3 p-4 p-sm-5 mt-5">
            <div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
                <div class="mb-4 mb-xl-0">
                    <div class="fs-3 fw-bold text-white">New products, delivered to you.</div>
                    <div class="text-white-50">Sign up for our newsletter for the latest updates.</div>
                </div>
                <div class="ms-xl-4">
                    <div class="input-group mb-2">
                        <input class="form-control" type="text" placeholder="Email address..." aria-label="Email address..." aria-describedby="button-newsletter" />
                        <button class="btn btn-outline-light" id="button-newsletter" type="button">Sign up</button>
                    </div>
                    <div class="small text-white-50">We care about privacy, and will never share your data.</div>
                </div>
            </div>
        </aside>
    </div>
</section>
</main>


<?= $this->endSection()?>
