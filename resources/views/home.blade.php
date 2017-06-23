@extends('layouts.app')

@section('content')

    <section class="imageblock switchable feature-large">
        <div class="imageblock__content col-md-4 col-sm-3 pos-right">
            <div class="background-image-holder"> <img alt="image" src="{{ asset('img/jt.jpg') }}"> </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-8">
                    <h2>JAX BUILDS THE BEST BACKENDS NOW</h2>
                    <p class="lead"> Stack offers a clean and contemporary to suit a range of purposes from corporate, tech startup, marketing site to digital storefront. </p>
                    <div class="feature-large__group">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="feature feature-6"> <i class="icon icon--sm icon-Text-Effect color--primary"></i>
                                    <h5>Design Quickly</h5>
                                    <p> Combine blocks from a range of categories to build pages that are rich in visual style and interactivity </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="feature feature-6"> <i class="icon icon--sm icon-Post-Mail2 color--primary"></i>
                                    <h5>Collect Leads</h5>
                                    <p> Stack comes with integration for Mail Chimp and Campaign Monitor forms - ideal for launching modern marketing campaigns </p>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center">
                            <a class="btn btn-danger" href="#">
                                create post
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="switchable switchable--switch imagebg height-50" data-overlay="2">
        <div class="background-image-holder"><img alt="background" src="img/inner-8.jpg"></div>
        <div class="container pos-vertical-center">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Design-driven and perfect for modern startups</h2>
                    <p class="lead"> Stack offers a clean and contemporary to suit a range of purposes from corporate, tech startup, marketing site to digital storefront. </p>
                </div>
            </div>
        </div>
    </section>
    <section class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="feature feature-3 boxed boxed--lg boxed--border"> <i class="icon icon--lg icon-Mail-3"></i>
                        <h4>Mailer Integrations</h4>
                        <p> Stack comes with integration for Mail Chimp and Campaign Monitor forms - ideal for modern marketing campaigns </p> <a href="#">
                            Learn More
                        </a> </div>
                </div>
                <div class="col-sm-4">
                    <div class="feature feature-3 boxed boxed--lg boxed--border"> <i class="icon icon--lg icon-Air-Balloon"></i>
                        <h4>Diverse Icons</h4>
                        <p> Including the premium Icons Mind icon kit, Stack features a highly diverse set of icons suitable for all purposes. </p> <a href="#">
                            Learn More
                        </a> <span class="label">New</span> </div>
                </div>
                <div class="col-sm-4">
                    <div class="feature feature-3 boxed boxed--lg boxed--border"> <i class="icon icon--lg icon-Bacteria"></i>
                        <h4>Modular Design</h4>
                        <p> Combine blocks from a range of categories to build pages that are rich in visual style and interactivity </p> <a href="#">
                            Learn More
                        </a> </div>
                </div>
            </div>
        </div>
    </section>

@endsection
