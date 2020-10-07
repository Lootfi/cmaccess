@extends('livewire.user.layout')

@section('managecontent')
<div class="col-sm-12 col-lg-8 col-xl-9">
    <h4 class="text-center">il vous reste {{$timeLeft}} d'essai gratuit</h4>
    <br>
    <br>
    <form wire:submit.prevent="cancelPayment">
        <button type="submit">
            Annuler Le paiement
        </button>
    </form>
</div>

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        Livewire.on('paymentCanceled', () => {
            window.location.reload();
})
    });
</script>
@endpush