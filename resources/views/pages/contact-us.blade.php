<x-front-layout>
    <main>
        <section class="about__header page__section fluid-container">
            <div class="page__header">
                <h1>Nous Contacter</h1>
                <p>Ecriver nous pour avoir plus de renseignement</p>
            </div>
        </section>

        <section class="section fluid-container">
            <div class="section__contact-us">
                @livewire("contact-form")
                <div class="contact__information">
                    <p class="contact__description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam,
                        quam ut! Fugit quod recusandae nobis!
                    </p>
                    <div class="information__box">
                        <div class="icon__box">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="information__text">
                            <h3>Téléphone</h3>
                            <p>+22898647306</p>
                        </div>
                    </div>
                    <div class="information__box">
                        <div class="icon__box">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="information__text">
                            <h3>Email</h3>
                            <p>mk.akpabla@gmail.com</p>
                        </div>
                    </div>
                    <div class="information__box">
                        <div class="icon__box">
                            <i class="fa fa-map"></i>
                        </div>
                        <div class="information__text">
                            <h3>Adresse</h3>
                            <p>Lomé</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

</x-front-layout>
