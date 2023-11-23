
<main>
    <section class="container d-flex flex-column vh-100">
        <div class="row align-items-center justify-content-center g-0 h-lg-100 py-8">
            <div class="col-lg-5 col-md-8 py-8 py-xl-0">
                <!-- Card -->
                <div class="card shadow">
                    <!-- Card body -->
                    <div class="card-body p-6">
                        <div class="mb-4">

                            <h1 class="mb-1 fw-bold">Bienvenue dans la gestion 2.0</h1>
                            <span>

                                <a href="{{route('register')}}" class="ms-1">Inscrivez-vous si vous avez deja un compte </a>
                            </span>
                        </div>
                        <!-- Form -->
                        <form class="needs-validation" action="{{route('login')}}" method="POST">
                            @csrf
                            <!-- Username -->
                            <div class="mb-3">
                                <label for="username" class="form-label">Email de l'enteprise</label>
                                <input type="email"  class="form-control" name="email" placeholder="Email entreprise" required >

                            </div>
                            <!-- Email -->
                            <div class="mb-3">
                                <label  class="form-label">Mot de passe </label>
                                <input type="password"  class="form-control" name="password" placeholder="Entrer une adresse email" required >
                            </div>


                            <div>
                                <!-- Button -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-dark outline">Connexion</button>
                                </div>
                            </div>
                            <hr class="my-4">
                            <div class="mt-4 text-center">

                                <h5>UNE PRODUCTION DE KGS INFORMATIQUE </h5>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>


