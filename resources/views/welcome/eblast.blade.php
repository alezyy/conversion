@php
    $lang = app()->getLocale();
@endphp
<section class="grey lighten-4 py-5">
    <div class="container">
        <div class="row py-5">
            <div class="col">
                <h1 class="h1-responsive text-primary text-center welcomeMessage">
                    {{__('We make it possible to create and customize your eblasts to your individual needs.')}}
                </h1>
                <div class="p-3">
                    @if($lang === 'fr')
                        <img class="img-fluid" src="http://quickpresse.com/storage/app/media/layout-img/preview-homepage-fr.jpg">
                    @else
                        <img class="img-fluid" src="http://quickpresse.com/storage/app/media/layout-img/preview-homepage-en.jpg">
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
