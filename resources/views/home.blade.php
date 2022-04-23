<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css/print.css')}}" media="print">
    @include('includes/infilecss')
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->
</head>

<body style="background-color: #7e7e7e;background-image:  radial-gradient(#bfbfbf 0.5px, transparent 0.5px), radial-gradient(#bfbfbf 0.5px, #7e7e7e 0.5px);background-size: 20px 20px;background-position: 0 0,10px 10px;">
    <div class="container bg-white col-12  col-lg-12 col-xl-10 col-md-12 shadow mb-5 bg-body">
        <div class="row d-print-flex print-after">
            <aside class="col-xl-4 bg-primary p-5 col-md-12 flex">
                <div class="row">
                    <div class="col-md-4 col-xl-12">
                        <div class="card mb-5 bg-transparent border-0 col-xl-12 mx-auto">
                            <img src="/img/Hasanagha-Azad--profile-photo.jpeg" class="card-img-top rounded-circle border-0 w-100 mx-auto " alt="Hasanagha Azad Profile picture on CV resume">
                        </div>
                    </div>
                    <div class="col-md-8 d-xl-none d-print-none">
                        <h1 class="display-3 text-uppercase text-primary mt-5 mt-md-0 text-justify text-monospace text-light" style="text-align: justify;">
                            <b><b>Hasanagha Azad</b></b>
                        </h1>
                        <span class="badge bg-dark w-25 p-0 fs-0 border-bottom-0 bg-transparent border-0 border-top rounded-0 border-dark mb-5 mt-md-0 mb-md-0">&nbsp;</span>
                        <div class="home">
                            <h2 class="h4 text-info b bold bolder text-bold strong"><b><b>PERSONAL PROFILE</b></b></h2>
                            <p class="text-light mb-0">The official full name is Hasanaga Aliyev Azadbay oglu. I am Senior Full Stack Web Developer, Manager, Tech blogger and Mentor.</p>
                        </div>
                    </div>
                    <div class="col-xl-12 col-md-6 col-lg-4">
                        <div class="card text-light bg-transparent  border-0 w-100 mx-auto mt-lg-5 mt-md-4 col-md-3">
                            <div class="card-body px-0">
                                <h5 class="card-title text-light">CONTACT ME AT</h5>
                            </div>
                            @include('includes/contacts')
                        </div>
                    </div>
                    <div class="col-xl-12 col-md-6 col-lg-4">
                        <div class="card text-light bg-transparent  border-0 w-100 mx-auto mt-lg-5 mt-md-4 col-md-3">
                            <div class="card-body px-0">
                                <h5 class="card-title text-light">SKILLS SUMMARY</h5>
                            </div>
                            @include('includes/skills')
                        </div>
                    </div>
                    <div class="col-xl-12 col-md-6 col-lg-4">
                        <div class="card text-light bg-transparent  border-0 w-100 mx-auto mt-lg-5 mt-md-4 col-md-3">
                            <div class="card-body px-0">
                                <h5 class="card-title text-light">LANGUAGES</h5>
                            </div>
                            <ul class="list-group list-group-flush bg-transparent">
                                <li class="list-group-item bg-transparent text-light border-0">English - Advanced</li>
                                <li class="list-group-item bg-transparent text-light border-0">Azerbaijani - Native</li>
                                <li class="list-group-item bg-transparent text-light border-0">Russian - Native</li>
                                <li class="list-group-item bg-transparent text-light border-0">Turkish - Native</li>
                                <li class="list-group-item bg-transparent text-light border-0">Ukrainian - Elementary</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-12 col-md-6 col-lg-4">
                        <div class="card text-light bg-transparent  border-0 w-100 mx-auto mt-lg-5 mt-md-4 col-md-3">
                            <div class="card-body px-0">
                                <h5 class="card-title text-light">CYBERSECURITY SKILLS</h5>
                            </div>
                            <ul class="list-group list-group-flush bg-transparent">
                                <li class="list-group-item bg-transparent text-light border-0">SqlInjection</li>
                                <li class="list-group-item bg-transparent text-light border-0">Shellinjection</li>
                                <li class="list-group-item bg-transparent text-light border-0">XSS injection</li>
                                <li class="list-group-item bg-transparent text-light border-0">CSP</li>
                                <li class="list-group-item bg-transparent text-light border-0">DDOS</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-12 col-md-6 col-lg-4">
                        <div class="card text-light bg-transparent  border-0 w-100 mx-auto mt-lg-5 mt-md-4 col-md-3">
                            <div class="card-body px-0">
                                <h5 class="card-title text-light">OS SKILLS</h5>
                            </div>
                            <ul class="list-group list-group-flush bg-transparent">
                                <li class="list-group-item bg-transparent text-light border-0">Windows</li>
                                <li class="list-group-item bg-transparent text-light border-0">OSX</li>
                                <li class="list-group-item bg-transparent text-light border-0">iOS</li>
                                <li class="list-group-item bg-transparent text-light border-0">Linux</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-12 col-md-6 col-lg-4">
                        <div class="card text-light bg-transparent  border-0 w-100 mx-auto mt-lg-5 mt-md-4 col-md-3">
                            <div class="card-body px-0">
                                <h5 class="card-title text-light">CLOUD PLATFORMS</h5>
                            </div>
                            <ul class="list-group list-group-flush bg-transparent">
                                <li class="list-group-item bg-transparent text-light border-0">Google Cloud Platform</li>
                                <li class="list-group-item bg-transparent text-light border-0">Azure</li>
                                <li class="list-group-item bg-transparent text-light border-0">Amazon AWS</li>
                                <li class="list-group-item bg-transparent text-light border-0">DigitalOcean</li>
                                <li class="list-group-item bg-transparent text-light border-0">Cloudflare</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-12 col-md-6 col-lg-4">
                        <div class="card text-light bg-transparent  border-0 w-100 mx-auto mt-lg-5 mt-md-4 col-md-3">
                            <div class="card-body px-0">
                                <h5 class="card-title text-light">CMS &amp; SAAS SKILLS</h5>
                            </div>
                            <ul class="list-group list-group-flush bg-transparent">
                                <li class="list-group-item bg-transparent text-light border-0">Wordpress</li>
                                <li class="list-group-item bg-transparent text-light border-0">Joomla</li>
                                <li class="list-group-item bg-transparent text-light border-0">Drupal</li>
                                <li class="list-group-item bg-transparent text-light border-0">Shopify</li>
                                <li class="list-group-item bg-transparent text-light border-0">Bitrix</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-12 col-md-6 col-lg-4">
                        <div class="card text-light bg-transparent  border-0 w-100 mx-auto mt-lg-5 mt-md-4 col-md-3">
                            <div class="card-body px-0">
                                <h5 class="card-title text-light">OTHER TECHNICAL SKILLS</h5>
                            </div>
                            <ul class="list-group list-group-flush bg-transparent">
                                <li class="list-group-item bg-transparent text-light border-0">GitHub</li>
                                <li class="list-group-item bg-transparent text-light border-0">GitHub Pages</li>
                                <li class="list-group-item bg-transparent text-light border-0">Docker</li>
                                <li class="list-group-item bg-transparent text-light border-0">VPS VPN</li>
                                <li class="list-group-item bg-transparent text-light border-0">Centos Web Panel</li>
                                <li class="list-group-item bg-transparent text-light border-0">ISP manager</li>
                                <li class="list-group-item bg-transparent text-light border-0">Cpanel</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-12 col-md-6 col-lg-4">
                        <div class="card text-light bg-transparent  border-0 w-100 mx-auto mt-lg-5 mt-md-4 col-md-3">
                            <div class="card-body px-0">
                                <h5 class="card-title text-light">PORTFOLIO.min</h5>
                            </div>
                            <ul class="list-group list-group-flush bg-transparent">
                                <li class="list-group-item bg-transparent text-light border-0"><a href="https://owbike.com/" class="text-light" target="blank">https://owbike.com/</a></li>
                                <li class="list-group-item bg-transparent text-light border-0"><a href="https://technote.az/" class="text-light" target="blank">https://technote.az/</a></li>
                                <li class="list-group-item bg-transparent text-light border-0"><a href="https://www.pashabank.az/" class="text-light" target="blank">https://www.pashabank.az/</a></li>
                                <li class="list-group-item bg-transparent text-light border-0"><a href="https://ozsut.az/" class="text-light" target="blank">https://ozsut.az/</a></li>
                                <li class="list-group-item bg-transparent text-light border-0"><a href="https://fluxaqua.com/" class="text-light" target="blank">https://fluxaqua.com/</a></li>
                                <li class="list-group-item bg-transparent text-light border-0"><a href="https://owbike.com/" class="text-light" target="blank">https://owbike.com/</a></li>
                                <li class="list-group-item bg-transparent text-light border-0"><a href="https://abara.com.sg/" class="text-light" target="blank">https://abara.com.sg/</a></li>
                                <li class="list-group-item bg-transparent text-light border-0"><a href="https://luxout.net/" class="text-light" target="blank">https://luxout.net/</a></li>
                                <li class="list-group-item bg-transparent text-light border-0"><a href="https://yellowmarketing.ch/" class="text-light" target="blank">https://yellowmarketing.ch/</a></li>
                                <li class="list-group-item bg-transparent text-light border-0"><a href="https://liquimolyqazandirir.az/" class="text-light" target="blank">https://liquimolyqazandirir.az/</a></li>
                                <li class="list-group-item bg-transparent text-light border-0"><a href="https://mimicdice.com/" class="text-light" target="blank">https://mimicdice.com/</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </aside>
            <section class="col-xl-8 col-md-12 p-5 print-after">
                <div class="d-none d-xl-block d-print-block">
                    <h1 class="display-3 text-uppercase text-primary mt-5 text-justify text-monospace" style="text-align: justify;"><b><b>Hasanagha Azad</b></b>
                    </h1><span class="badge bg-dark w-25 p-0 fs-0 border-bottom-0 bg-transparent border-0 border-top rounded-0 border-dark mb-5">&nbsp;</span>
                    <div class="home mb-5">
                        <h2 class="h4 text-info b bold bolder text-bold strong"><b><b>PERSONAL PROFILE</b></b></h2>
                        @include('includes/short-bio')
                    </div>
                    <div class="p-1"></div>
                </div>
                <h2 class="mt-xl-5 mt-2 h4 text-info b bold bolder text-bold strong"><b><b>WORK EXPERIENCE</b></b></h2>
                @include('includes/experience-1')
                @include('includes/experience-2')
                @include('includes/experience-3')
                @include('includes/experience-4')
            

                <span class="badge bg-dark w-100 p-0 border-dark mb-5 opacity-75">&nbsp;</span>

                @include('includes/experience-5')


                <h2 class="mt-5 h4 text-info b bold bolder text-bold strong"><b><b>ADDITIONAL ACTIVITIES</b></b></h2>

                @include('includes/experience-6')
                @include('includes/experience-7')

                <h2 class="mt-5 h4 text-info b bold bolder text-bold strong"><b><b>FORMAL EDUCATION</b></b></h2>
                @include('includes/educationCard')
            </section>
        </div>
        <div class="row d-print-flex print-as-pages pt-5">
            <section class="certificates col-md-12 print-as-pages container px-5">

                <h2 class="mt-5 h4 text-info b bold bolder text-bold strong text-center"><b><b>CERTIFICATES</b></b></h2>
                @include('includes/certificates')
            </section>
        </div>
    </div>
</body>

</html>