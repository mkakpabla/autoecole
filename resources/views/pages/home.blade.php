<x-front-layout>
    <main>
        <section class="sliders">
            <div class="slider fade">
                <div class="slide-text fluid-container">
                    <h1 class="title">Obtener votre permis en un mois</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <img src="{{ asset("assets/images/slide-1-bg.jpg") }}" alt="" srcset="" />
            </div>
            <div class="slider fade" style="display: none">
                <div class="slide-text fluid-container">
                    <h1 class="title">Apprener à conduire avec les meilleurs</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <img src="{{ asset("assets/images/slide-2-bg.jpg") }}" alt="" srcset="" />
            </div>
            <div class="slider fade" style="display: none">
                <div class="slide-text fluid-container">
                    <h1 class="title">100% a l'examen de conduite nationnal</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <img src="{{ asset("assets/images/slide-3-bg.jpg") }}" alt="" srcset="" />
            </div>
            <div class="slides__nav fluid-container">
                <a class="prev" onclick="plusSlide(-1)">&#10094;</a>
                <a class="next" onclick="plusSlide(1)">&#10095;</a>
            </div>
        </section>

        <section class="section fluid-container">
            <div class="about-us__row">
                <div class="about-us__img">
                    <img src="{{ asset("assets/images/about.jpg") }}" alt="" srcset="" />
                </div>
                <div class="about-us_text">
                    <h1 class="big-title">Qui sommes nous ?</h1>
                    <p>
                        Notre école de conduite du Haut Val d’Oise saura vous accompagner
                        et vous apporter un suivi pédagogique personnalisé, tout au long
                        de votre apprentissage, jusqu’à l’obtention de votre permis de
                        conduite.
                    </p>
                    <p>
                        Grâce à notre expérience, nous nous engageons à vous proposer des
                        formations de qualité.
                    </p>
                    <p class="text">
                        Plusieurs formations vous sont proposées pour votre permis de
                        conduire :
                    </p>
                    <ul class="about_packages">
                        <li>Permis B</li>
                        <li>Permis A.A.C</li>
                        <li>Permis boîte auto</li>
                        <li>Cours de perfectionnements</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="section fluid-container">
            <div class="section__header">
                <h1 class="big-title">Pourquoi nous choisir ?</h1>
            </div>
            <div class="section__body">
                <div class="services">
                    <div class="service mb-2">
                        <img src="" alt="" />
                        <div class="sevice__body">
                            <h1 class="service__title">Lorem ipsum dolor</h1>
                            <p class="serice__desc">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Itaque, nesciunt. Totam
                            </p>
                        </div>
                    </div>
                    <div class="service mb-2">
                        <img src="" alt="" />
                        <div class="sevice__body">
                            <h1 class="service__title">Lorem ipsum dolor</h1>
                            <p class="serice__desc">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Itaque, nesciunt. Totam
                            </p>
                        </div>
                    </div>
                    <div class="service">
                        <img src="" alt="" />
                        <div class="sevice__body">
                            <h1 class="service__title">Lorem ipsum dolor</h1>
                            <p class="serice__desc">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Itaque, nesciunt. Totam
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section fluid-container section-tesmonials">
            <div class="section__header">
                <h1 class="big-title">Témoignages</h1>
            </div>
            <div class="section__body">
                <div class="slides">
                    @foreach ($temoignages as $tge)
                    <figure class="slide show">
                        <blockquote class="testimonial">
                            <p>
                                “{{ $tge->contenu_tge }}”
                            </p>
                            <cite>{{ $tge->nom_tge }}</cite>
                        </blockquote>
                    </figure>
                    @endforeach

                    <div class="slides-dots">
                        @foreach ($temoignages as $tge)
                        <span id="dot-{{ $tge->id_tge }}" class="dot"></span>
                        @endforeach
                    </div>


                </div>
            </div>
        </section>

        <section class="section fluid-container">
            <div class="section__header">
                <h1 class="big-title">Nos Packages</h1>
            </div>
            <div class="section__body">
                <div class="hot-forfaits">
                    @foreach ($packages as $package)
                    <div class="forfait">
                        <h1 class="forfait__title">{{ $package->lib_pack }}</h1>
                        <h3 class="forfait__time">{{ $package->duree_pack }} Jours</h3>
                        <p class="forfait__desc">
                            {{ $package->desc_pack }}
                        </p>
                    </div>
                    @endforeach


                </div>
            </div>
        </section>
    </main>
</x-front-layout>
