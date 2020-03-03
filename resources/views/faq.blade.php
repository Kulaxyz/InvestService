@extends('layouts.visit')

@section('content')
    <section class="faq" id="faq">
        <div class="container">
            <h2 class="title wow zoomIn animated" style="visibility: visible; animation-name: zoomIn;">FAQ</h2>
            <div class="row">
                <div class="col-lg-8 mb-lg-0 mb-5">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        HOW TO GET STARTED WITH FUTURE TECHNOLOGIES FUND (FTF)
                                        <i class="fas fa-chevron-down" aria-hidden="true"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample" style="">
                                <div class="card-body">
                                    <h6 class="cit">HOW TO GET STARTED WITH FUTURE TECHNOLOGIES FUND (FTF)
                                    </h6>
                                    <p class="desc">
                                        WHAT YOU NEED TO GET STARTED WITH FUTURE TECHNOLOGIES FUND (FTF) <br>
                                        To start working with the FTF fund, follow the steps:
                                    </p><ol>
                                        <li>Complete the registration on the official Website - this simple procedure will not take long
                                        </li>
                                        <li> Go to your account;</li>
                                        <li>Find the Invest Section;</li>
                                        <li> Make your initial deposit</li>
                                    </ol>
                                    After that all investment activity will be carried out by our company, at the specified time, you
                                    will receive your income..
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        CAN I EARN BY INVESTING WITH FUTURE TECHNOLOGIES FOND (FTF)?
                                        <i class="fas fa-chevron-down" aria-hidden="true"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>The project we created cannot be considered a kind of a win-win lottery - there are always risks
                                        in the investment business. However, the success of any business, including ours, depends on how
                                        justified these risks are, and the main task of management is to minimize the risks.</p>
                                    <p>All answers to questions about exactly how we work with risks, how we earn and guarantee profit
                                        for our investors, you will find in a separate section of our website.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        WHAT IS THE MINIMUM AND MAXIMUM AMOUNT OF DEPOSIT?
                                        <i class="fas fa-chevron-down" aria-hidden="true"></i>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>The minimum deposit amount is 50 USD.</p>
                                    <p>The maximum deposit amount is 20,000 USD.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contacts">
                        <h3 class="contacts__title">Contacts</h3>
                        <p class="contacts__desc">We believe that communication is a key tool in the success of our business

                        </p>
                        <div class="contacts__info">
                            <p><i class="fas fa-map-marker" aria-hidden="true"></i><b>Suite 1, 4 Queen Street, Edinburgh, EH2 1JE,
                                    Scotland, UK </b></p>
                            <div><i class="far fa-envelope" aria-hidden="true"></i><a href="mailto:info@ftf.ai"><b>info@ftf.ai</b></a></div>
                            <p>
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <b>Mon - Fri : 10:00 - 20:00 GMT <br>
                                    Sat - Sun : Weekend</b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>@endsection
