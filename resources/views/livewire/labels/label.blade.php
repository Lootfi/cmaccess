@extends('layouts.app')

@section('content')
<section class="job_single_v5_banner mt-30"></section>

<section class="bgc-fa pt40">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="candidate_personal_info mbt45 style2 job_singe_v5">
                            <div class="thumb one text-center">
                                <img class="img-fluid rounded" src="{{$entreprise->Logo}}" alt="cl1.jpg">
                            </div>
                            <div class="details">
                                <h3>{{$entreprise->name}}</h3>
                                <p class="mb0">{{$entreprise->maison}}</p>
                                <ul class="address_list">
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-location-pin"></span>
                                            {{$entreprise->address}}</a></li>
                                    <li class="list-inline-item"><a href="{{$entreprise->website}}"><span
                                                class="flaticon-link pr-2"></span>Site Web</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row job_meta_list mt30 mb30" style="display: flex; align-items: center;">
                    <div class="col-sm-4 col-lg-4"><button class="btn btn-block btn-thm">Ajouter au Favoris
                            <span class="flaticon-favorites fz24 pl10"></span></button></div>

                    <div class="col-sm-4 col-lg-4">
                        <a class="mt-25" href="#contacts">Voir Tout les Contacts <span
                                class="fa fa-arrow-down pl10"></span></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="candidate_about_info style2 mt10">
                            <h4 class="fz20 mb30">Description</h4>
                            <p class="pt-5 pb-10">{{$entreprise->description}}</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="my_resume_eduarea">
                            <h4 id="contacts" class="title mb45">Contacts</h4>
                        </div>
                    </div>
                    @if ($contacts->count() > 0)
                    @foreach ($contacts as $contact)
                    <div class="col-lg-12">
                        <div class="fj_post style2 one">
                            <div class="details">
                                <h5 class="job_chedule text-thm2">Full Time</h5>
                                <div class="thumb fn-smd">
                                    <img class="img-fluid" src="{{$contact->Picture}}" width="140px" alt="1.jpg">
                                </div>
                                <h4>{{$contact->name}}</h4>
                                <p>Mis à jour {{Carbon\Carbon::parse($contact->updated_at)->diffForHumans()}}</p>
                                <ul class="featurej_post">
                                    <li class="list-inline-item"><span class="flaticon-location-pin"></span> <a
                                            href="#">{{$contact->address}}</a></li>
                                    <li class="list-inline-item"><span class="flaticon-price pl20"></span> <a
                                            href="#">$13.00 - $18.00 per hour</a></li>
                                </ul>
                            </div>
                            <a class="favorit" href="#"><span class="flaticon-favorites"></span></a>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

{{-- <section class="bgc-fa pt40">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="candidate_personal_info mbt45 style2 job_singe_v5">
                            <div class="thumb one text-center">
                                <img class="img-fluid rounded" src="images/partners/cl1.jpg" alt="cl1.jpg">
                            </div>
                            <div class="details">
                                <h3>UX/UI Designer Web &amp; Mobile Platforms</h3>
                                <p class="mb0">Qiwo Smartlink Technology</p>
                                <ul class="address_list">
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-location-pin"></span>
                                            Bothell, WA, USA</a></li>
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-price"></span> $13.00
                                            - $18.00 per hour</a></li>
                                </ul>
                                <a class="mt25" href="#">View all jobs <span
                                        class="flaticon-right-arrow pl10"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row job_meta_list mt30 mb30">
                    <div class="col-sm-4 col-lg-4"><button class="btn btn-block btn-thm">Apply Now <span
                                class="flaticon-right-arrow pl10"></span></button></div>
                    <div class="col-sm-4 col-lg-4"><button class="btn btn-block btn-gray"><span
                                class="flaticon-favorites fz24 pr10"></span> Shortlist</button></div>
                    <div class="col-sm-4 col-lg-4"><button class="btn btn-block btn-white"><span
                                class="flaticon-favorites fz24 pr10"></span> Shortlist</button></div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="candidate_about_info style2 mt10">
                            <h4 class="fz20 mb30">Job Description</h4>
                            <p class="mb30">Due to ongoing growth, this fun &amp; energetic International corporate
                                based on the outskirts of Oxford, is seeking a UX/UI Designer to join an innovative
                                team, focused on delivering exciting User Experiences and great functionality, across
                                both Web &amp; Mobile platforms.</p>
                            <p class="mb40">The UX/UI Designer will be working with a world-class team of designers,
                                engineers, and product mana gers to develop innovative user experiences that will shape
                                the industry’s pioneering products.</p>
                            <p class="fwb">Responsibilities Include:</p>
                            <p>-- Partnering with product and engineering to translate business and user goals into
                                elegant and practical designs that can deliver on key business and user metrics</p>
                            <p>-- Collaborating with internal stakeholders and team members to brainstorm new products,
                                features and functionalities that enhance the mobile and web experiences</p>
                            <p>-- Giving and soliciting feedback with designers</p>
                            <p class="fwb">Background, Skills &amp; Experience</p>
                            <p>-- Circa 3+ years experience designing for web and mobile platforms</p>
                            <p>-- Through your online portfolio, you are able to share your UX/UI design capabilities by
                                showcasing your design chops and demonstrates originality, innovation and strong problem
                                solving skills</p>
                            <p>-- design chops and demonstrates originality, innovation and strong problem solving
                                skills</p>
                            <p>-- Demonstrable experience with end-to-end product design, including consumer product/s
                            </p>
                            <p>-- Talent for managing multiple projects simultaneously, from concept through to
                                completion</p>
                            <p>-- Talent for managing multiple projects simultaneously, from concept through to
                                completion show it</p>
                            <p>-- Excellent communicator who has conviction to champion of view, but can also
                                successfully collabo rate with others</p>
                            <p>-- A Degree in Design or related field is preferred</p>
                            <p class="mb20">-- You enjoy a fast paced and dynamic working environment</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="my_resume_eduarea">
                            <h4 class="title mb20">People Also Viewed</h4>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="fj_post style2 one">
                            <div class="details">
                                <h5 class="job_chedule text-thm2">Full Time</h5>
                                <div class="thumb fn-smd">
                                    <img class="img-fluid" src="images/partners/1.jpg" alt="1.jpg">
                                </div>
                                <h4>JEB Product Sales Specialist, Russia &amp; CIS</h4>
                                <p>Posted 23 August by <a class="text-thm2" href="#">Wiggle CRC</a></p>
                                <ul class="featurej_post">
                                    <li class="list-inline-item"><span class="flaticon-location-pin"></span> <a
                                            href="#">Bothell, WA, USA</a></li>
                                    <li class="list-inline-item"><span class="flaticon-price pl20"></span> <a
                                            href="#">$13.00 - $18.00 per hour</a></li>
                                </ul>
                            </div>
                            <a class="favorit" href="#"><span class="flaticon-favorites"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="fj_post style2 one">
                            <div class="details">
                                <h5 class="job_chedule text-thm2">Part Time</h5>
                                <div class="thumb fn-smd">
                                    <img class="img-fluid" src="images/partners/2.jpg" alt="2.jpg">
                                </div>
                                <h4>General Ledger Accountant</h4>
                                <p>Posted 23 August by <a class="text-thm2" href="#">Robert Half Finance &amp;
                                        Accounting</a></p>
                                <ul class="featurej_post">
                                    <li class="list-inline-item"><span class="flaticon-location-pin"></span> <a
                                            href="#">RG40, Wokingham</a></li>
                                    <li class="list-inline-item"><span class="flaticon-price pl20"></span> <a
                                            href="#">$13.00 - $18.00 per hour</a></li>
                                </ul>
                            </div>
                            <a class="favorit" href="#"><span class="flaticon-favorites"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="fj_post style2 one">
                            <div class="details">
                                <h5 class="job_chedule text-thm2">Full Time</h5>
                                <div class="thumb fn-smd">
                                    <img class="img-fluid" src="images/partners/3.jpg" alt="3.jpg">
                                </div>
                                <h4>Junior Digital Graphic Designer</h4>
                                <p>Posted 23 August by <a class="text-thm2" href="#">Parkside Recruitment - Uxbridge
                                        Finance</a></p>
                                <ul class="featurej_post">
                                    <li class="list-inline-item"><span class="flaticon-location-pin"></span> <a
                                            href="#">New Denham, UB8 1JG</a></li>
                                    <li class="list-inline-item"><span class="flaticon-price pl20"></span> <a
                                            href="#">$13.00 - $18.00 per hour</a></li>
                                </ul>
                            </div>
                            <a class="favorit" href="#"><span class="flaticon-favorites"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
@endsection


@push('scripts')
<style>
    @media only screen and (max-width: 750px) {
        .row {
            display: block;
        }
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // console.log(@this.search)
    })
</script>
@endpush