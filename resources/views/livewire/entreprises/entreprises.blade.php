<section class="our-faq bgc-fa mt50">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-xl-3 dn-smd">
                <form wire:submit.prevent="searchEntreprises">
                    <div class="faq_search_widget mb30">
                        <h4 class="fz20 mb15">Recherche Entreprises</h4>
                        <div class="input-group mb-3">
                            <input wire:dirty.class="color-green" wire:model.lazy="search" type="text"
                                class="form-control" placeholder="e.g. web design" aria-label="Recipient's username"
                                aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><span
                                        class="flaticon-search"></span></button>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="faq_search_widget mb30">
                        <h4 class="fz20 mb15">Category</h4>
                        <div class="candidate_revew_select">
                            <select class="selectpicker w100 show-tick">
                                <option>All Categories</option>
                                <option>Recent</option>
                                <option>Old Review</option>
                            </select>
                        </div>
                    </div> --}}
                    {{-- <div class="cl_pricing_slider mb30">
                        <div class="company_life">
                            <h4 class="fz20 mb20">Est. Since</h4>
                            <div class="slider-range"></div>
                            <input type="text" class="amount" placeholder="1998"> -
                            <input type="text" class="amount2" placeholder="2018">
                        </div>
                    </div>
                    <div class="cl_skill_checkbox mb30">
                        <h4 class="fz20 mb20">Team Size</h4>
                        <div class="content ui_kit_checkbox text-left">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">1-101</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                <label class="custom-control-label" for="customCheck2">101-201</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                <label class="custom-control-label" for="customCheck3">201-301</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck4">
                                <label class="custom-control-label" for="customCheck4">301-401</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck5">
                                <label class="custom-control-label" for="customCheck5">401-501</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck6">
                                <label class="custom-control-label" for="customCheck6">501-601</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck7">
                                <label class="custom-control-label" for="customCheck7">601-701</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck8">
                                <label class="custom-control-label" for="customCheck8">701-801</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck9">
                                <label class="custom-control-label" for="customCheck9">801-901</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck10">
                                <label class="custom-control-label" for="customCheck10">901-1001</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck11">
                                <label class="custom-control-label" for="customCheck11">1001-1101</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck12">
                                <label class="custom-control-label" for="customCheck12">1101-1201</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck13">
                                <label class="custom-control-label" for="customCheck13">1201-1301</label>
                            </div>
                        </div>
                    </div> --}}
                </form>
            </div>
            <div class="col-lg-9 col-xl-9">
                <div class="row">
                    <div class="col-sm-6 col-lg-6">
                        <div class="candidate_job_alart_btn">
                            <button class="btn btn-thm btns dn db-991 float-right">Afficher les Filtres</button>
                            <h4 class="fz20">{{$entreprises->total()}} Entreprises Trouvés</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6">
                        <div class="candidate_revew_select text-right">
                            <ul>
                                <li class="list-inline-item">Trier par:</li>
                                <li class="list-inline-item">
                                    <select wire:model.lazy="sorting" wire:change="searchEntreprises"
                                        class="selectpicker show-tick">
                                        <option value="recent">Plus Récent</option>
                                        <option value="old">Plus Ancien</option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                        <div class="content_details">
                            <form wire:submit.prevent="searchEntreprises">
                                <div class="details">
                                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><span>Hide
                                            Filter</span><i>×</i></a>
                                    <div class="faq_search_widget mb30">
                                        <div class="faq_search_widget mb30">
                                            <h4 class="fz20 mb15">Recherche Enreprises</h4>
                                            <div class="input-group mb-3">
                                                <input wire:dirty.class="color-green" wire:model.lazy="search"
                                                    type="text" class="form-control" placeholder="e.g. web design"
                                                    aria-label="Recipient's username" aria-describedby="button-addon2">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary" type="submit"
                                                        id="button-addon2"><span
                                                            class="flaticon-search"></span></button>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="faq_search_widget mb30">
                                            <h4 class="fz20 mb15">Location</h4>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="All Location"
                                                    aria-label="Recipient's username" aria-describedby="button-addon2">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary" type="button"
                                                        id="button-addon2"><span
                                                            class="flaticon-location-pin"></span></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="faq_search_widget mb30">
                                            <h4 class="fz20 mb15">Category</h4>
                                            <div class="candidate_revew_select">
                                                <select class="selectpicker w100 show-tick">
                                                    <option>All Categories</option>
                                                    <option>Recent</option>
                                                    <option>Old Review</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="cl_pricing_slider mb30">
                                            <div class="company_life">
                                                <h4 class="fz20 mb20">Est. Since</h4>
                                                <div class="slider-range"></div>
                                                <input type="text" class="amount" placeholder="1998"> -
                                                <input type="text" class="amount2" placeholder="2018">
                                            </div>
                                        </div>
                                        <div class="cl_skill_checkbox mb30">
                                            <h4 class="fz20 mb20">Team Size</h4>
                                            <div class="content ui_kit_checkbox text-left">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1">1-101</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck2">
                                                    <label class="custom-control-label"
                                                        for="customCheck2">101-201</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck3">
                                                    <label class="custom-control-label"
                                                        for="customCheck3">201-301</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck4">
                                                    <label class="custom-control-label"
                                                        for="customCheck4">301-401</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck5">
                                                    <label class="custom-control-label"
                                                        for="customCheck5">401-501</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck6">
                                                    <label class="custom-control-label"
                                                        for="customCheck6">501-601</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck7">
                                                    <label class="custom-control-label"
                                                        for="customCheck7">601-701</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck8">
                                                    <label class="custom-control-label"
                                                        for="customCheck8">701-801</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck9">
                                                    <label class="custom-control-label"
                                                        for="customCheck9">801-901</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck10">
                                                    <label class="custom-control-label"
                                                        for="customCheck10">901-1001</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck11">
                                                    <label class="custom-control-label"
                                                        for="customCheck11">1001-1101</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck12">
                                                    <label class="custom-control-label"
                                                        for="customCheck12">1101-1201</label>
                                                </div>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck13">
                                                    <label class="custom-control-label"
                                                        for="customCheck13">1201-1301</label>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    @if ($entreprises->total() > 0)
                    @foreach ($entreprises as $entreprise)
                    <div class="col-lg-12 mt30">
                        <div class="fj_post style2 lpd45">
                            <div class="details">
                                <div class="thumb fn-smd">
                                    <a href="{{route('entreprise',$entreprise->id)}}"><img class="img-fluid" width="120"
                                            src="{{$entreprise->Logo}}"></a>
                                </div>
                                <h4><a href="{{route('entreprise',$entreprise->id)}}">{{$entreprise->name}}</a></h4>
                                <p class="text-thm2">Education Training</p>
                                <ul class="featurej_post mb25">
                                    <li class="list-inline-item"><span class="flaticon-location-pin"></span> <a
                                            href="#">{{$entreprise->address}}</a></li>
                                </ul>
                            </div>
                            <div class="job_post_count text-center">
                                <h3 class="text-thm2">{{$entreprise->contacts_count}}</h3>
                                <p>Contacts</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
                {{$entreprises->links('pagination.custom-pagination-links-view')}}
            </div>
        </div>
    </div>
</section>