<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscriptionMail;
class SubscriptionComponent extends Component
{
    public $email;
    public function subscribeMail()
    {
        Mail::to($this->email)->send(new SubscriptionMail());

    }
    public function render()
    {
        return <<<'blade'
            <div>
            <section class="newsletter mb-15 wow animate__animated animate__fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="position-relative newsletter-inner">
                            <div class="newsletter-content">
                                <h2 class="mb-20">
                                    Stay home & get your daily <br />
                                    needs from our shop
                                </h2>
                                <p class="mb-45">Start You'r Daily Shopping with <span class="text-brand">Nest Mart</span></p>
                                <form class="form-subcriber d-flex" wire:submit.prevent="subscribeMail">
                                    <input type="email" placeholder="Your emaill address" wire:model="email"/>
                                    <button class="btn" type="submit">Subscribe</button>
                                </form>
                            </div>
                            <img src="{{ asset('images/banner/banner-9.png') }}" alt="newsletter" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
            </div>
        blade;
    }
}
