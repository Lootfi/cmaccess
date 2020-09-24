@extends('livewire.user.layout')

@section('managecontent')

<div class="col-sm-12 col-lg-8 col-xl-9">
    <div class="my_profile_form_area">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="fz20 mb20">Mon Profil</h4>
            </div>
            {{-- Change Avatar Start --}}

            <div class="col-12">
                <div class="container">
                    <div class="alert" id="message" style="display: none"></div>
                    <form method="post" id="upload_form" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            {{-- new --}}

                            <input type="file" class="hidden" name="select_file" id="select_file" />

                            <x-jet-secondary-button class="mt-2" type="button"
                                onclick="document.querySelectorAll('input[type=file]')[0].click()">
                                Select A New Photo
                            </x-jet-secondary-button>
                            {{-- end new --}}

                            {{-- <label>Select File for Upload</label>
                                        <input type="file" name="select_file" id="select_file" /> --}}
                            <input type="submit" name="upload" id="upload" class="btn btn-thm" value="Upload">
                        </div>
                    </form>
                    <br />
                    {{-- <span id="uploaded_image"></span> --}}
                </div>
            </div>

            {{-- Change Avatar End --}}

            <div class="col-md-6 col-lg-6">
                <div class="my_profile_input form-group">
                    <label for="formGroupExampleInput1">Nom</label>
                    <input type="text" wire:model="name" class="form-control" id="formGroupExampleInput1"
                        placeholder="Martha Griffin">
                </div>
            </div>
            {{-- <div class="col-md-6 col-lg-6">
                            <div class="my_profile_input form-group">
                                <label for="formGroupExampleInput1">Email</label>
                                <input type="email" wire:model="email" class="form-control" id="formGroupExampleInput1"
                                    placeholder="Martha Griffin">
                            </div>
                        </div> --}}

            <div class="col-lg-12">
                <div class="my_profile_input">
                    <a class="btn btn-lg btn-thm" href="#" onclick="save_avatar()">Sauvegarder</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@push('scripts')
<script>
    function save_avatar() {
        var file = document.querySelectorAll('input[type=file]');

        console.log(file[0].value)
    }
                
    document.addEventListener('DOMContentLoaded', function () {
        $('#upload_form').on('submit', function(event){
            event.preventDefault();
            $.ajax({
            url:`http://127.0.0.1:8001/api/artists/${@this.slug}/avatar`,
            method:"POST",
            data:   new FormData(this),
            dataType:'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success:function(data)
            {
            $('#message').css('display', 'block');
            $('#message').html(data.message);
            }
            })
        });
            
    })
</script>

@endpush