<div class="col-lg-3 col-xl-3 dn-smd">
    <div class="faq_search_widget mb30">
        <h4 class="fz20 mb15">Search Keywords</h4>
        <div class="input-group mb-3">
            <input wire:model="search" type="text" class="form-control" placeholder="Find Your Question"
                aria-label="Recipient's username" aria-describedby="button-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2"><span
                        class="flaticon-search"></span></button>
            </div>
        </div>
    </div>
    <div class="faq_search_widget mb30">
        <h4 class="fz20 mb15">Location</h4>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Find Your Question" aria-label="Recipient's username"
                aria-describedby="button-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2"><span
                        class="flaticon-location-pin"></span></button>
            </div>
        </div>
    </div>


    <div class="faq_search_widget mb30">
        <h4 class="fz20 mb15">Type</h4>
        <div class="candidate_revew_select">
            <select class="selectpicker w100 show-tick" wire:model="type">
                <option value="">Tout les types</option>
                @foreach ($contact_types as $type)
                <option value="{{$type->slug}}">{{$type->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="cl_latest_activity mb30">
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
    </div>
</div>