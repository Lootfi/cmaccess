<div class="row">
    {{-- Search Sidebar Start --}}
    <div class="col-lg-3 col-xl-3 dn-smd">
        <form wire:submit.prevent="searchContacts">
            <div class="faq_search_widget mb30">
                <h4 class="fz20 mb15">Nom</h4>
                <div class="input-group mb-3">
                    <input type="text" wire:dirty.class="color-green" wire:model.lazy="search" class="form-control"
                        placeholder="e.g. Myriam" aria-label="search" aria-describedby="button-addon2"
                        value="new URLSearchParams(window.location.search).get('search')">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><span
                                class="flaticon-search"></span></button>
                    </div>
                </div>
            </div>

            <div class="faq_search_widget mb30">
                <h4 class="fz20 mb15">Label</h4>
                <div class="input-group mb-3">
                    <input type="text" wire:dirty.class="color-green" wire:model.lazy="entreprise_search"
                        class="form-control" placeholder="e.g. Barclay" aria-label="Recipient's username"
                        aria-describedby="button-addon2"
                        value="new URLSearchParams(window.location.search).get('entreprise_search')">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2"><span
                                class="flaticon-company"></span></button>
                    </div>
                </div>
            </div>

            <div class="faq_search_widget mb30">
                <h4 class="fz20 mb15">Pays</h4>
                <div class="input-group mb-3">
                    <input type="text" wire:dirty.class="color-green" wire:model.lazy="location_search"
                        value="new URLSearchParams(window.location.search).get('location_search')" class="form-control"
                        placeholder="e.g. France" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2"><span
                                class="flaticon-location-pin"></span></button>
                    </div>
                </div>
            </div>


            <div class="faq_search_widget mb30">
                <h4 class="fz20 mb15">Type</h4>
                <div class="candidate_revew_select">
                    <select class="selectpicker w100 show-tick" wire:model.lazy="type_search"
                        wire:change="searchContacts">
                        <option value="">Tout les types</option>
                        @foreach ($contact_types as $type)
                        <option value="{{$type->id}}">{{$type->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </form>

        {{-- <div class="cl_latest_activity mb30">
            <h4 class="fz20 mb15">Time</h4>
            <div class="ui_kit_radiobox">
                <div class="radio">
                    <input id="radio_one" name="radio" type="radio" checked="">
                    <label for="radio_one"><span class="radio-label"></span> Last Hour</label>
                </div>
                <div class="radio">
                    <input id="radio_two" name="radio" type="radio">
                    <label for="radio_two"><span class="radio-label"></span> Last 24 hours</label>
                </div>
                <div class="radio">
                    <input id="radio_three" name="radio" type="radio">
                    <label for="radio_three"><span class="radio-label"></span> Last 7 days</label>
                </div>
                <div class="radio">
                    <input id="radio_four" name="radio" type="radio">
                    <label for="radio_four"><span class="radio-label"></span> Last 14 days</label>
                </div>
                <div class="radio">
                    <input id="radio_five" name="radio" type="radio">
                    <label for="radio_five"><span class="radio-label"></span> Last 30 days</label>
                </div>
                <a class="text-thm2 pl30" href="#">View All <span class="flaticon-right-arrow pl10"></span></a>
            </div>
        </div>
        <div class="cl_pricing_slider mb30">
            <h4 class="fz20 mb20">Hourly Rate</h4>
            <div id="slider-range"></div>
            <p class="text-center">
                <input class="sl_input" type="text" id="amount">
            </p>
        </div>
        <div class="cl_skill_checkbox mb30">
            <h4 class="fz20 mb20">Skills</h4>
            <div class="content ui_kit_checkbox text-left">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">HTML 5</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                    <label class="custom-control-label" for="customCheck2">Javascript</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                    <label class="custom-control-label" for="customCheck3">PHP</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck4">
                    <label class="custom-control-label" for="customCheck4">jQuery</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck5">
                    <label class="custom-control-label" for="customCheck5">UX/UI Design</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck6">
                    <label class="custom-control-label" for="customCheck6">Design</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck7">
                    <label class="custom-control-label" for="customCheck7">Web Design</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck8">
                    <label class="custom-control-label" for="customCheck8">Graphic Design</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck9">
                    <label class="custom-control-label" for="customCheck9">Sketch App</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck10">
                    <label class="custom-control-label" for="customCheck10">UI Design</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck11">
                    <label class="custom-control-label" for="customCheck11">Graphic Design</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck12">
                    <label class="custom-control-label" for="customCheck12">Sketch App</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck13">
                    <label class="custom-control-label" for="customCheck13">UI Design</label>
                </div>
            </div>
        </div>
        <div class="cl_carrer_lever">
            <div class="cl_according">
                <div id="accordion" class="panel-group">
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a href="#panelBodyOne" class="accordion-toggle link fz20 mb15" data-toggle="collapse"
                                    data-parent="#accordion">Career Level</a>
                            </h4>
                        </div>
                        <div id="panelBodyOne" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="ui_kit_checkbox">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck14">
                                        <label class="custom-control-label" for="customCheck14">Intermediate</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck15">
                                        <label class="custom-control-label" for="customCheck15">Normal</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck16">
                                        <label class="custom-control-label" for="customCheck16">Special</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck17">
                                        <label class="custom-control-label" for="customCheck17">Experienced</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a href="#panelBodyTwo" class="accordion-toggle link fz20 mb15" data-toggle="collapse"
                                    data-parent="#accordion">Experince</a>
                            </h4>
                        </div>
                        <div id="panelBodyTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="ui_kit_checkbox">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck18">
                                        <label class="custom-control-label" for="customCheck18">1Year to
                                            2Year</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck19">
                                        <label class="custom-control-label" for="customCheck19">2Year to
                                            3Year</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck20">
                                        <label class="custom-control-label" for="customCheck20">3Year to
                                            4Year</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck21">
                                        <label class="custom-control-label" for="customCheck21">4Year to
                                            5Year</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a href="#panelBodyThree" class="accordion-toggle link fz20 mb15" data-toggle="collapse"
                                    data-parent="#accordion">Gender</a>
                            </h4>
                        </div>
                        <div id="panelBodyThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="ui_kit_checkbox">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck22">
                                        <label class="custom-control-label" for="customCheck22">Male</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck23">
                                        <label class="custom-control-label" for="customCheck23">Female</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck24">
                                        <label class="custom-control-label" for="customCheck24">Others</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    {{-- Search Sidebar End --}}

    {{-- Search Mobile Sidebar Start --}}

    <div class="content_details" id="mySidenav">
        <div class="details">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><span>Hide
                    Filter</span><i>×</i></a>
            <form wire:submit.prevent="searchContacts">
                <div class="faq_search_widget mb30">
                    <h4 class="fz20 mb15">Nom</h4>
                    <div class="input-group mb-3">
                        <input type="text" wire:model.lazy="search" class="form-control" placeholder="Marvel"
                            aria-label="search" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><span
                                    class="flaticon-search"></span></button>
                        </div>
                    </div>
                </div>
                <div class="faq_search_widget mb30">
                    <h4 class="fz20 mb15">Pays</h4>
                    <div class="input-group mb-3">
                        <input type="text" wire:model.lazy="location_search" class="form-control" placeholder="France"
                            aria-label="Recipient's username" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2"><span
                                    class="flaticon-location-pin"></span></button>
                        </div>
                    </div>
                </div>


                <div class="faq_search_widget mb30">
                    <h4 class="fz20 mb15">Type</h4>
                    <div class="candidate_revew_select">
                        <select class="selectpicker w100 show-tick" wire:model.lazy="type_search"
                            wire:change="searchContacts">
                            <option value="">Tout les types</option>
                            @foreach ($contact_types as $type)
                            <option value="{{$type->id}}">{{$type->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </form>
            {{-- <div class="cl_latest_activity mb30">
                <h4 class="fz20 mb15">Date Posted</h4>
                <div class="ui_kit_radiobox">
                    <div class="radio">
                        <input id="radio_one" name="radio" type="radio" checked="">
                        <label for="radio_one"><span class="radio-label"></span> Last Hour</label>
                    </div>
                    <div class="radio">
                        <input id="radio_two" name="radio" type="radio">
                        <label for="radio_two"><span class="radio-label"></span> Last 24
                            hours</label>
                    </div>
                    <div class="radio">
                        <input id="radio_three" name="radio" type="radio">
                        <label for="radio_three"><span class="radio-label"></span> Last 7
                            days</label>
                    </div>
                    <div class="radio">
                        <input id="radio_four" name="radio" type="radio">
                        <label for="radio_four"><span class="radio-label"></span> Last 14
                            days</label>
                    </div>
                    <div class="radio">
                        <input id="radio_five" name="radio" type="radio">
                        <label for="radio_five"><span class="radio-label"></span> Last 30
                            days</label>
                    </div>
                    <a class="text-thm2 pl30" href="#">View All <span class="flaticon-right-arrow pl10"></span></a>
                </div>
                <div class="cl_latest_activity mb30">
                </div>
                <h4 class="fz20 mb15">Job Type</h4>
                <div class="ui_kit_whitchbox">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1">
                        <label class="custom-control-label" for="customSwitch1">Freelance</label>
                    </div>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch2">
                        <label class="custom-control-label" for="customSwitch2">Full Time</label>
                    </div>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch3">
                        <label class="custom-control-label" for="customSwitch3">Part Time</label>
                    </div>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch4">
                        <label class="custom-control-label" for="customSwitch4">Internship</label>
                    </div>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="customSwitch5">
                        <label class="custom-control-label" for="customSwitch5">Temporary</label>
                    </div>
                </div>
            </div>
            <div class="cl_pricing_slider mb30">
                <h4 class="fz20 mb20">Hourly Rate</h4>
                <div id="slider-range"></div>
                <p class="text-center">
                    <input class="sl_input" type="text" id="amount">
                </p>
            </div>
            <div class="cl_skill_checkbox mb30">
                <h4 class="fz20 mb20">Skills</h4>
                <div class="content ui_kit_checkbox text-left">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">HTML 5</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                        <label class="custom-control-label" for="customCheck2">Javascript</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck3">
                        <label class="custom-control-label" for="customCheck3">PHP</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck4">
                        <label class="custom-control-label" for="customCheck4">jQuery</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck5">
                        <label class="custom-control-label" for="customCheck5">UX/UI Design</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck6">
                        <label class="custom-control-label" for="customCheck6">Design</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck7">
                        <label class="custom-control-label" for="customCheck7">Web Design</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck8">
                        <label class="custom-control-label" for="customCheck8">Graphic
                            Design</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck9">
                        <label class="custom-control-label" for="customCheck9">Sketch App</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck10">
                        <label class="custom-control-label" for="customCheck10">UI Design</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck11">
                        <label class="custom-control-label" for="customCheck11">Graphic
                            Design</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck12">
                        <label class="custom-control-label" for="customCheck12">Sketch App</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck13">
                        <label class="custom-control-label" for="customCheck13">UI Design</label>
                    </div>
                </div>
            </div>
            <div class="cl_carrer_lever mb30">
                <div id="accordion" class="accordion">
                    <div class="link mb10">Career Level<i class="fa fa-caret-up"></i></div>
                    <div class="cl_submenu">
                        <div class="ui_kit_checkbox">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck14">
                                <label class="custom-control-label" for="customCheck14">Intermediate</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck15">
                                <label class="custom-control-label" for="customCheck15">Normal</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck16">
                                <label class="custom-control-label" for="customCheck16">Special</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck17">
                                <label class="custom-control-label" for="customCheck17">Experienced</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cl_carrer_lever mb30">
                <div id="accordion" class="accordion">
                    <div class="link mb10">Experince<i class="fa fa-caret-up"></i></div>
                    <div class="cl_submenu">
                        <div class="ui_kit_checkbox">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck18">
                                <label class="custom-control-label" for="customCheck18">1Year to
                                    2Year</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck19">
                                <label class="custom-control-label" for="customCheck19">2Year to
                                    3Year</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck20">
                                <label class="custom-control-label" for="customCheck20">3Year to
                                    4Year</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck21">
                                <label class="custom-control-label" for="customCheck21">4Year to
                                    5Year</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cl_carrer_lever mb30">
                <div id="accordion" class="accordion">
                    <div class="link mb10">Gender<i class="fa fa-caret-up"></i></div>
                    <div class="cl_submenu">
                        <div class="ui_kit_checkbox">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck22">
                                <label class="custom-control-label" for="customCheck22">Male</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck23">
                                <label class="custom-control-label" for="customCheck23">Female</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck24">
                                <label class="custom-control-label" for="customCheck24">Others</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cl_carrer_lever mb30">
                <div id="accordion" class="accordion">
                    <div class="link mb10">Industry<i class="fa fa-caret-up"></i></div>
                    <div class="cl_submenu">
                        <div class="ui_kit_checkbox">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck25">
                                <label class="custom-control-label" for="customCheck25">Development</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck26">
                                <label class="custom-control-label" for="customCheck26">Management</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck27">
                                <label class="custom-control-label" for="customCheck27">Finance</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck28">
                                <label class="custom-control-label" for="customCheck28">HTML
                                    Department</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck29">
                                <label class="custom-control-label" for="customCheck29">Seo</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck30">
                                <label class="custom-control-label" for="customCheck30">Banking</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cl_carrer_lever">
                <div id="accordion" class="accordion">
                    <div class="link mb10">Qualification<i class="fa fa-caret-up"></i></div>
                    <div class="cl_submenu">
                        <div class="ui_kit_checkbox">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck31">
                                <label class="custom-control-label" for="customCheck31">Certificate</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck32">
                                <label class="custom-control-label" for="customCheck32">Diploma</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck33">
                                <label class="custom-control-label" for="customCheck33">Associate</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck34">
                                <label class="custom-control-label" for="customCheck34">Degree
                                    Bachelor</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck35">
                                <label class="custom-control-label" for="customCheck35">Associate</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck36">
                                <label class="custom-control-label" for="customCheck36">Master's
                                    Degree</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>

    {{-- Search Mobile Sidebar End --}}

    <div class="col-lg-9 col-xl-9">
        <div class="row">
            <div class="col-sm-6 col-lg-6">
                <div class="candidate_job_alart_btn mb35">
                    <h4 class="fz20 mb15">{{$contacts->total()}} Contacts Trouvés {{$search ? '"' . $search . '"' : ""}}
                    </h4>
                    {{-- <a class="btn btn-thm" href="#"><span class="flaticon-mail"></span> Get Job Alerts</a> --}}
                    <button class="btn btn-thm btns dn db-991 float-right">Afficher les Filtres</button>
                </div>
            </div>
            <div class="col-sm-6 col-lg-6">
                <div class="candidate_revew_select text-right mb35 mt50">
                    <ul>
                        <li class="list-inline-item">Trier par:</li>
                        <li class="list-inline-item">
                            <select class="selectpicker show-tick" wire:model.lazy="sorting"
                                wire:change="searchContacts">
                                <option value="recent">Plus Récent</option>
                                <option value="old">Plus Ancien</option>
                            </select>
                        </li>
                    </ul>
                </div>

            </div>

            @if ($contacts->total() != 0)
            {{-- Contacts List Start --}}
            @foreach ($contacts as $contact)
            {{-- Contact Card Start --}}
            <div class="col-md-6 col-lg-6">
                <div class="ef_post style2 mt30-smd">
                    <div class="ef_header">
                        {{-- <h4 class="hr_rate"><span class="text-thm">$150</span> <small>/hr</small></h4> --}}
                        @if (!$favorites->contains('id', $contact->id))
                        <span style="cursor: pointer" wire:click="AddToFavorite({{$contact->id}})" class="ef_bookmark"
                            title="Ajouter au Favoris"><span class="flaticon-favorites"></span></span>
                        @endif
                    </div>
                    <a href="{{route('contact',$contact->id)}}" class="thumb text-center">
                        <img class="img-fluid" src="{{$contact->Picture}}" alt="4.jpg">
                    </a>
                    <div class="freelancer_review">

                        <a href="{{route('contact',$contact->id)}}">
                            <h4 class="title">{{$contact->prenom}} {{$contact->name}}</h4>
                        </a>
                        <p>{{$contact->title}}</p>
                        <h5>{{$contact->entreprises->first()->name}}</h5>
                    </div>
                    <div class="details">
                        <div class="job_locate">
                            <p class="float-left">Pays</p>
                            <ul class="float-right">
                                {{-- <li class="list-inline-item m0"><span class="flaticon-location-pin"></span></li> --}}
                                <li class="list-inline-item m0">
                                    <p>{{$contact->country}}</p>
                                </li>
                            </ul>
                        </div>
                        <div class="ef_prf_link mt10">
                            <a class="btn btn-block btn-transparent" href="{{route('contact',$contact->id)}}">Voir
                                le
                                Profil<i class="flaticon-right-arrow pl10"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Contact Card End --}}
            @endforeach
            {{-- Contacts List End --}}
            @endif

            {{-- <div class="col-lg-12">
                <div class="mbp_pagination">
                    <ul class="page_navigation">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span
                                    class="flaticon-left-arrow"></span> Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">45</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next <span class="flaticon-right-arrow"></span></a>
                        </li>
                    </ul>
                </div>
            </div> --}}
        </div>
        {{$contacts->links('pagination.custom-pagination-links-view')}}

    </div>
</div>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // console.log(@this.search)
    })
</script>
@endpush