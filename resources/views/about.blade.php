@extends('layouts.visit')

@section('content')
    <!-- about -->
    <section class="about " id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <iframe class="video" src="https://www.youtube.com/embed/XuQCJ0v7tPc" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <p class="video__desc  wow fadeInLeft" data-wow-delay="0.5s">FTF is a huge team, and each member has at
                        least 12 years of
                        experience in various
                        positions in the investment banking segment - from the auditor and analyst of risks department to the
                        chief financial officer of the investment bank. Forming a dynamic investment portfolio, we use experience
                        gained in different directions, and are focused on start-ups in the areas of:</p>
                </div>
                <div class="col-md-6">
                    <h2 class="title mt-sm-5">OUR INVESTMENTS</h2>
                    <div class="block wow fadeInRight" data-wow-delay="0.5s">
                        <img src="/img/research.svg" alt="">
                        <div class="block__content">
                            <h3 class="block__title">ARTIFICIAL INTELLIGENCE</h3>
                            <p class="block__desc   wow fadeInRight">Patented IT Software based on Arfitificial Intelligence serves
                                as a tool to
                                generate stable income for our investors. Our productis in demand in its niche, and is used by our
                                analysts and leading corporations, such as Huawei, Apple and Google <a href="#startaps"
                                                                                                       id="more">More...</a>
                            </p>
                        </div>
                    </div>
                    <div class="block wow fadeInRight" data-wow-delay="1s">
                        <img src="/img/laptop.svg" alt="">
                        <div class="block__content">
                            <h3 class="block__title">Blockchain</h3>
                            <p class="block__desc">Today, IT projects in this area are in the spotlight of investors around the
                                world. But these technologies interest us not only in themselves, we consider the prospects of their
                                introduction in e-commerce and in the development of marketplaces.</p>
                        </div>
                    </div>
                    <div class="block wow fadeInRight" data-wow-delay="1.5s">
                        <img src="/img/layers.svg" alt="">
                        <div class="block__content">
                            <h3 class="block__title">Marketplace, VR, Hardware and Software Startups</h3>
                            <p class="block__desc">
                                With our connections, we can invest in the most Promising startups. We have a good portfolio of
                                companies that are already profitable and generate income for our investors.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- features	 -->
    <section class="features">
        <img src="/img/features__img.png" alt="" class=" purple features__img">
        <div class="container">
            <h2 class="title">Our Advantages</h2>
            <p class="subtitle">Why us?</p>
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="block wow fadeInUp " data-wow-delay="0.5s">
                        <img src="/img/features_1.svg" alt="">
                        <div>
                            <h3 class="block__title">Stable income - 1.2% per day</h3>
                            <p class="block__desc">
                                We are the only Fund that allows such huge returns to be made.
                            </p>
                        </div>
                    </div>
                    <div class="block wow fadeInUp" data-wow-delay="0.5s">
                        <img src="/img/features_2.svg" alt="">
                        <div>
                            <h3 class="block__title">Quick withdrawal</h3>
                            <p class="block__desc">
                                We know how important it is to have access to your personal funds, so we allow withdrawal of dividends
                                in 24 hours.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 offset-lg-2	">
                    <div class="block wow fadeInUp" data-wow-delay="0.5s">
                        <img src="/img/features_3.svg" alt="">
                        <div>
                            <h3 class="block__title">Investment Strategies</h3>
                            <p class="block__desc">
                                Your Investment is backed by many years of experience with out professional team of investors.
                            </p>
                        </div>
                    </div>
                    <div class="block wow fadeInUp" data-wow-delay="0.5s">
                        <img src="/img/features_4.svg" alt="">
                        <div>
                            <h3 class="block__title">The minimum investment - 50$</h3>
                            <p class="block__desc">
                                You determine your investment amount. Our Investment plans start from 50 Dollars..
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="features__buttons">
                <button class="features__buttons-reg mb-3" onclick="location.href='{{route('register')}}'">REGISTRATION</button>
                <button class="features__buttons-calc" data-toggle="modal" data-target="#myModal">PROFIT CALCULATOR</button>
            </div>
        </div>
    </section>

    <section class="bigSection" id="bigSection" style="margin-top: 20px !important;">
    <!-- Информация о нас -->
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="info-block">
                    <div class="info__top">OUR STRATEGY</div>
                    <div class="info__content">
                        <p>At the core, our business model is based on the principle of 3-level diversification of resources,
                            investments and risks </p>
                        <p>
                            What does it mean? If we invest in one of the niche projects, we make sure to select adjacent projects
                            in the same niche - to lower risk and shorten the time to profit.
                        </p>
                        <p>
                            With this approach to investing in different fields we increase profits and dividends from existing
                            investments and have a positive financial balance and ensure the payout of dividends to our investors
                            in time.
                        </p>
                        <p>
                            And this financial return is guaranteed as the money is raised not only through our online platform,
                            but also from other sources, including our own investment funds.
                        </p>
                        <p>
                            In addition to avoiding the risk, the FTF business model is a clear system of forecasted earnings and
                            bonuses. Once you sign up on our website, you get 1.2% per day from the amount you invest, as well as
                            bonuses from 0.34 to 1.52% by the end of the investment period, according to your selected investment
                            plan. All calculations and payments are made automatically and transparently.
                        </p>
                        <p>
                            This business model allows us not only to work consistently and be financially sustainable in a very
                            volatile market realities, but also gives us the ability to quickly make decisions, be a mobile and
                            efficient team, because the money is always working to generate a return.
                        </p>
                        <p>
                            Read more about our business packages that are available on the website
                        </p>
                    </div>
                    <button class="info__btn" onclick="location.href='{{ route('login') }}'"><i class=" far fa-user"></i>
                        LOGIN/REGISTER</button>
                </div>
            </div>
            <div class="col-lg-3" id="documents">
                <div class="block wow zoomIn mb-5" data-wow-delay="0.5s" data-toggle="modal" data-target="#sertificate1">
                    <button data-toggle="modal" data-target="#sertificate1"><i class="fas fa-search"
                                                                               aria-hidden="true"></i></button>
                    <div class="white">
                        <p class="text-g">Document</p>
                        <p class="subtitle">Certificate Of Registration Of A Limited Partnership</p>
                    </div>
                    <div class="gradient"></div>
                    <img src="/img/sertificate1.jpg" alt="">
                </div>
                <div class="block wow zoomIn" data-wow-delay="0.5s" data-toggle="modal" data-target="#sertificate2">
                    <button data-toggle="modal" data-target="#sertificate2"><i class="fas fa-search"
                                                                               aria-hidden="true"></i></button>
                    <div class="white">
                        <p class="text-g">Document</p>
                        <p class="subtitle"> Official Documents</p>
                    </div>
                    <div class="gradient"></div>
                    <img src="/img/sertificate2.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    </section>
    <div class="modal fade" id="sertificate1" tabindex="-1" role="dialog" aria-labelledby="sertificate1Label"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" data-toggle="modal" data-target="#sertificate1">Sertificate
                    </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" role="document">
                    <div class="modal-content modal-content-video">
                        <img src="/img/sertificate1.jpg" alt="" class="sertificates__img">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 2 -->
    <div class="modal fade" id="sertificate2" tabindex="-1" role="dialog" aria-labelledby="sertificate2Label"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" data-toggle="modal" data-target="#sertificate2">Sertificate
                    </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" role="document">
                    <div class="modal-content modal-content-video">
                        <img src="/img/sertificate2.jpg" alt="" class="sertificates__img">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
