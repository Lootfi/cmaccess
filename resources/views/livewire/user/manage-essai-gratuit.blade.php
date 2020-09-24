@extends('livewire.user.layout')

@section('managecontent')
<div class="col-sm-12 col-lg-8 col-xl-9">
    <h4 class="text-center">il vous reste {{$timeLeft}} d'essai gratuit</h4>
    <br>
    <br>
    <x-jet-button wire:click="cancelPayment">
        Annuler Le paiement
    </x-jet-button>
</div>

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {});
</script>
@endpush