<section class="mbr-cards mbr-section mbr-section-nopadding" id="features7-c" style="background-color: rgb(255, 255, 255);">
    <div class="mbr-cards-row row">

        @foreach ($cards as $card)
            <div class="mbr-cards-col col-xs-12 col-lg-4" style="padding-top: 80px; padding-bottom: 80px;">
                <div class="container">
                    <div class="card cart-block">
                        <div class="card-img iconbox">
                            <i class="fa {{ $card->icon }}" style="color:#fff; font-size: 54px; margin-top: 20%;"></i>
                        </div>
                        <div class="card-block">
                            <h4 class="card-title">{{ $card->title }}</h4>
                            <p class="card-text">{{ $card->text }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</section>