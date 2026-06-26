@extends('layouts.web')

@section('content')
  <div class="space-y-4">
    <h1 class="font-bold text-base border-b border-slate-300 pb-4">Contact Us</h1>
    <div class="space-y-4">
      <h1 class="font-semibold text-center">Unit 2404 Discovery Suites, ADB Avenue, Ortigas Center, Pasig
        City, 1600, Philippines</h1>
      <div class="flex items-center justify-around gap-4 max-sm:flex-col">
        <div class="flex items-center gap-2">
          <i data-lucide="mail" class="size-5 text-[#14b321]" stroke-width="1.5"></i>
          <a href="mailto:journal@eupij.com" target="_blank"
            class="font-semibold hover:text-[#14b321]">journal@eupij.com</a>
        </div>
        <div class="flex items-center gap-2">
          <i data-lucide="phone" class="size-5 text-[#14b321]" stroke-width="1.5"></i>
          <a href="tel:(632)88024421" target="_blank" class="font-semibold hover:text-[#14b321]">(632) 8 802 4421</a>
        </div>
      </div>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2941.170802888386!2d121.05759187362175!3d14.586002377436857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c816e54e45cf%3A0x213b8e458877357f!2sDiscovery%20Suites%20Manila!5e1!3m2!1sen!2sph!4v1782435308602!5m2!1sen!2sph"
        width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
@endsection