@extends('rapidez::layouts.app')

@section('title', __('Cart'))

@section('robots', 'NOINDEX,NOFOLLOW')

@section('content')
    <cart v-cloak>
        <div v-if="hasItems" class="container" slot-scope="{ cart, hasItems, changeQty, remove }">
            <x-rapidez-ct::title class="mb-5 text-ct-primary">
                @lang('Cart')
            </x-rapidez-ct::title>
            <x-rapidez-ct::layout class="[&>div:first-child>div>table]:my-0">
                @include('rapidez-ct::cart.cart')
                <x-slot:sidebar>
                    @include('rapidez-ct::cart.partials.sidebar.sidebar')
                </x-slot:sidebar>
            </x-rapidez-ct::layout>
        </div>
        <div v-else class="container">
            <p>@lang("You don't have anything in your cart.")</p>
            <x-rapidez-ct::button.outline class="mt-3" href="/">
                @lang('Return to home')
            </x-rapidez-ct::button.outline>
        </div>
    </cart>
@endsection
