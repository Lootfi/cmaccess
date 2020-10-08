@extends('livewire.user.layout')

@section('managecontent')
<div class="col-sm-12 col-lg-8 col-xl-9">
    <div class="row">
        @foreach ($favorite_contacts as $contact)
        <div class="col-sm-6 col-lg-4">
            <div class="job_loc_img_box">
                <form wire:submit.prevent="removeFromFavorites({{$contact->id}})" class="unstar"><button
                        class="flaticon-favorites"> supprimer des favoris</button></form>
                <a href="{{route('contact',$contact->id)}}" class="thumb">
                    <img class="img-fluid" src="{{$contact->Picture}}">
                </a>
                <div class="details">
                    <h5>{{$contact->name}}</h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection


@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
    });
</script>
@endpush