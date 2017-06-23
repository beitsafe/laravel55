@extends('layouts.app')

@section('content')

    <section class="cover imagebg text-center height-100" data-overlay="4">
        <div class="background-image-holder background--top"> <img alt="background" src="img/landing-1.jpg"> </div>
        <div class="container pos-vertical-center">
            <div class="row">
                <div class="col-sm-8"> <img alt="Image" class="unmarg--bottom" src="img/headline-1.png">
                    <h3> Streamline your workflow with Stack. </h3>
                    <a class="btn btn--primary type--uppercase" href="#"> <span class="btn__text">
						View The Demos
					</span> </a>
                </div>
            </div>
        </div>
    </section>
    <section class="imagebg" data-overlay="4">
        <div class="background-image-holder"> <img alt="background" src="img/hero-1.jpg"> </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <div class="row">
                        <div class="boxed boxed--border">
                            <form class="text-left form-email" data-success="Thanks for your enquiry, we'll be in touch shortly." data-error="Please fill in all fields correctly.">
                                <div class="col-sm-6"> <label>Name:</label> <input type="text" name="name" class="validate-required"> </div>
                                <div class="col-sm-6"> <label>Company:</label> <input type="text" name="company" class="validate-required"> </div>
                                <div class="col-sm-6"> <label>Email Address:</label> <input type="email" name="email" class="validate-required validate-email"> </div>
                                <div class="col-sm-6"> <label>Phone:</label> <input type="tel" name="phone" class="validate-required"> </div>
                                <div class="col-sm-12"> <label>About Project:</label> <textarea rows="5" name="description" class="validate-required"></textarea> </div>
                                <div class="col-sm-12 text-center boxed">
                                    <h5>Services Required</h5>
                                </div>
                                <div class="col-sm-3 col-xs-6 text-center"> <label class="block">Design</label>
                                    <div class="input-checkbox">
                                        <div class="inner"></div> <input type="checkbox" name="design"> </div>
                                </div>
                                <div class="col-sm-3 col-xs-6 text-center"> <label class="block">Development</label>
                                    <div class="input-checkbox">
                                        <div class="inner"></div> <input type="checkbox" name="dev"> </div>
                                </div>
                                <div class="col-sm-3 col-xs-6 text-center"> <label class="block">Branding</label>
                                    <div class="input-checkbox">
                                        <div class="inner"></div> <input type="checkbox" name="brand"> </div>
                                </div>
                                <div class="col-sm-3 col-xs-6 text-center"> <label class="block">Marketing</label>
                                    <div class="input-checkbox">
                                        <div class="inner"></div> <input type="checkbox" name="marketing"> </div>
                                </div>
                                <div class="col-sm-12 text-center boxed">
                                    <h5>Approximate Budget</h5>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <div class="input-radio"> <label>&lt; $5,000</label>
                                        <div class="inner"></div> <input type="radio" name="budget" value="under5k" class="validate-required"> </div>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <div class="input-radio"> <label>$5,000 - $10,000</label>
                                        <div class="inner"></div> <input type="radio" name="budget" value="5kto10k" class="validate-required"> </div>
                                </div>
                                <div class="col-xs-4 text-center">
                                    <div class="input-radio"> <label>$10,000+</label>
                                        <div class="inner"></div> <input type="radio" name="budget" value="10kplus" class="validate-required"> </div>
                                </div>
                                <div class="col-sm-12 boxed"> <button type="submit" class="btn btn--primary type--uppercase">Submit Planner</button> </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="text-center unpad--bottom switchable cta cta-3 imagebg" data-overlay="4">
        <div class="background-image-holder"> <img alt="background" src="img/hero-1.jpg"> </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-7">
                    <div class="switchable__text">
                        <h2>Streamline your workflow with Stack</h2>
                        <p class="lead"> Create the smart, stylish site your business deserves. </p>
                        <a class="btn btn--primary type--uppercase" href="#purchase-template"> <span class="btn__text">
                            Purchase Stack Now
                        </span> <span class="label">$17 USD</span> </a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5"> <img alt="Image" class="block" src="img/avatar-large-1.png"> </div>
            </div>
        </div>
    </section>
    <section class="imageblock switchable feature-large">
        <div class="imageblock__content col-md-4 col-sm-3 pos-right">
            <div class="background-image-holder"> <img alt="image" src="img/inner-7.jpg"> </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-8">
                    <h2>Design-driven and perfect for modern startups</h2>
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="imagebg" data-overlay="4">
        <div class="background-image-holder"> <img alt="background" src="img/hero-1.jpg"> </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="pricing pricing-1 boxed boxed--lg boxed--border">
                        <h3>Basic</h3> <span class="h2"><strong>$4.99</strong></span> <span class="type--fine-print">Per Month, AUD Incl GST.</span>
                        <hr>
                        <ul>
                            <li><span class="checkmark bg--primary-1"></span><span>24/7 Phone Support</span></li>
                            <li><span class="checkmark bg--primary-1"></span><span>Unlimited Skips</span></li>
                            <li><span class="checkmark bg--primary-1"></span><span>Import CSV Data</span></li>
                            <li><span class="checkmark bg--primary-1"></span><span>Automatic Transfer</span></li>
                        </ul>
                        <a class="btn btn--primary" href="#"> <span class="btn__text">
                            Purchase Plan
                        </span> </a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="pricing pricing-1 boxed boxed--lg boxed--border boxed--emphasis">
                        <h3>Value</h3> <span class="h2"><strong>$10.99</strong></span> <span class="type--fine-print">Per Month, AUD Incl GST.</span> <span class="label">Value</span>
                        <hr>
                        <ul>
                            <li><span class="checkmark bg--primary-1"></span><span>24/7 Phone Support</span></li>
                            <li><span class="checkmark bg--primary-1"></span><span>Unlimited Skips</span></li>
                            <li><span class="checkmark bg--primary-1"></span><span>Import CSV Data</span></li>
                            <li><span class="checkmark bg--primary-1"></span><span>Automatic Transfer</span></li>
                        </ul>
                        <a class="btn btn--primary-1" href="#"> <span class="btn__text">
                            Purchase Plan
                        </span> </a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="pricing pricing-1 boxed boxed--lg boxed--border">
                        <h3>Premium</h3> <span class="h2"><strong>$19.99</strong></span> <span class="type--fine-print">Per Month, AUD Incl GST.</span>
                        <hr>
                        <ul>
                            <li><span class="checkmark bg--primary-1"></span><span>24/7 Phone Support</span></li>
                            <li><span class="checkmark bg--primary-1"></span><span>Unlimited Skips</span></li>
                            <li><span class="checkmark bg--primary-1"></span><span>Import CSV Data</span></li>
                            <li><span class="checkmark bg--primary-1"></span><span>Automatic Transfer</span></li>
                        </ul>
                        <a class="btn btn--primary" href="#"> <span class="btn__text">
                            Purchase Plan
                        </span> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="switchable imagebg" data-overlay="4">
        <div class="background-image-holder"> <img alt="background" src="img/hero-1.jpg"> </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-5">
                    <div class="switchable__text">
                        <h2>Follow us for news, updates and competitions</h2>
                        <p class="lead"> Launching an attractive and scalable website quickly and affordably is important for modern startups — Stack delivers. </p>
                        <a class="btn btn--icon bg--instagram type--uppercase" href="#"> <span class="btn__text">
                            <i class="socicon socicon-instagram"></i>
                            Follow @mrareweb
                        </span> </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="instafeed" data-user-name="mediumrarethemes" data-amount="6" data-grid="3"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="unpad elaborate-form-1">
        <div class="row row--gapless">
            <div class="col-sm-6 height-50 bg--primary">
                <div class="pos-vertical-center clearfix">
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1"> <span class="h1">Join the Campaign.</span>
                        <p class="lead"> Join our campaign to make our country a farer, more just place for all citizens. </p>
                        <form>
                            <div class="row">
                                <div class="col-sm-12"> <input type="email" name="email" placeholder="Email Address"> </div>
                                <div class="col-sm-7 col-xs-6"> <input type="text" name="zip" placeholder="ZIP code"> </div>
                                <div class="col-sm-5 col-xs-6"> <button type="submit" class="btn btn--primary-1">Next</button> </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 height-50 bg--primary-1">
                <div class="pos-vertical-center clearfix">
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1"> <span class="h1">Then donate.</span>
                        <p class="lead"> Our grass-roots campaign relies on the contributions of passionate patriots like you. </p>
                        <form>
                            <div class="row">
                                <div class="col-sm-3 col-xs-6">
                                    <div class="input-radio input-radio--innerlabel"> <label>$5</label>
                                        <div class="inner"></div> <input type="radio" name="donate" value="5"> </div>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <div class="input-radio input-radio--innerlabel"> <label>$15</label>
                                        <div class="inner"></div> <input type="radio" name="donate" value="15"> </div>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <div class="input-radio input-radio--innerlabel"> <label>$25</label>
                                        <div class="inner"></div> <input type="radio" name="donate" value="25"> </div>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <div class="input-radio input-radio--innerlabel"> <label>$100</label>
                                        <div class="inner"></div> <input type="radio" name="donate" value="100"> </div>
                                </div>
                                <div class="col-sm-5 col-xs-12"> <button type="submit" class="btn btn--primary">Act Now</button> </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="switchable imagebg" data-overlay="4">
        <div class="background-image-holder"> <img alt="background" src="img/hero-1.jpg"> </div>
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-6">
                    <h2>Subscribe for updates from the Stack team</h2>
                    <form action="//mrare.us8.list-manage.com/subscribe/post?u=77142ece814d3cff52058a51f&amp;id=f300c9cce8" data-success="Thanks for signing up.  Please check your inbox for a confirmation email." data-error="Please provide your name and email address and agree to the terms."> <input class="validate-required" type="text" name="NAME" placeholder="Your Name"> <input class="validate-required validate-email" type="email" name="EMAIL" placeholder="Email Address"> <input class="validate-required" type="checkbox" name="group[13737][1]"> <span>I have read and agree to the <a href="#">terms and conditions</a></span> <button type="submit" class="btn btn--primary type--uppercase">Subscribe To Newsletter</button>
                        <div aria-hidden="true"> <input type="text" name="b_77142ece814d3cff52058a51f_f300c9cce8" tabindex="-1" value=""> </div>
                    </form>
                </div>
                <div class="col-md-5 col-sm-6">
                    <div class="tweets-feed tweets-feed-2" data-feed-name="mrareweb" data-amount="4"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="text-center">
        <div class="tabs-container" data-content-align="left">
            <ul class="tabs tabs--spaced">
                <li class="active">
                    <div class="tab__title text-center"> <i class="icon icon--sm block icon-Target-Market"></i> <span class="h5">Code Quality</span> </div>
                    <div class="tab__content">
                        <div class="container switchable switchable--switch">
                            <div class="row">
                                <div class="col-sm-7"> <img alt="Image" src="img/device-6.png"> </div>
                                <div class="col-sm-5 col-md-4">
                                    <div class="mt--1">
                                        <h3>Experience quality</h3>
                                        <p class="lead"> Stack is built with customization and ease-of-use at its core — whether you're a seasoned developer or just starting out, you'll be making attractive sites faster than any traditional HTML template. </p>
                                        <hr class="short">
                                        <p> Each purchase of Stack includes six months of free support and lifetime free content and bug-fix updates. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="tab__title text-center"> <i class="icon icon--sm block icon-Text-Effect"></i> <span class="h5">Visual Design</span> </div>
                    <div class="tab__content">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-7"> <img alt="Image" src="img/device-2.png"> </div>
                                <div class="col-sm-5 col-md-4">
                                    <div class="mt--1">
                                        <h3>Experience quality</h3>
                                        <p class="lead"> Stack is built with customization and ease-of-use at its core — whether you're a seasoned developer or just starting out, you'll be making attractive sites faster than any traditional HTML template. </p>
                                        <hr class="short">
                                        <p> Each purchase of Stack includes six months of free support and lifetime free content and bug-fix updates. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="tab__title text-center"> <i class="icon icon--sm block icon-Love-User"></i> <span class="h5">Stack Experience</span> </div>
                    <div class="tab__content">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-7"> <img alt="Image" src="img/device-2.png"> </div>
                                <div class="col-sm-5 col-md-4">
                                    <div class="mt--1">
                                        <h3>Experience quality</h3>
                                        <p class="lead"> Stack is built with customization and ease-of-use at its core — whether you're a seasoned developer or just starting out, you'll be making attractive sites faster than any traditional HTML template. </p>
                                        <hr class="short">
                                        <p> Each purchase of Stack includes six months of free support and lifetime free content and bug-fix updates. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

@endsection