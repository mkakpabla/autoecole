<x-front-layout>
    <main>
        <section class="about__header page__section fluid-container">
            <div class="page__header">
                <h1>Nos Packages</h1>
                <p>Choisissez le package de votre choix</p>
            </div>
        </section>

        <section class="section fluid-container packages">
            @forelse ($packages as $package)
                <div class="forfait">
                    <h1 class="forfait__title">{{ $package->lib_pack }}</h1>
                    <h3 class="forfait__time">{{ $package->duree_pack }} Jours</h3>
                    <p class="forfait__desc">
                        {{ $package->desc_pack }}
                    </p>
                </div>
            @empty

            @endforelse
        </section>
    </main>
</x-front-layout>
