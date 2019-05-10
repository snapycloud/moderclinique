        <div class="slider__container">
            <div class="slider-active owl-carousel">
                @foreach($slider as $item)
                <div class="slider-wrapper bg-opacity" style="background-image:url( {{ route('image', $item['coverId']) }} )">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="slider-content slider-text-animation">
                                    <h2>{{ $item['description'] }}</h2>
                                    <a href="#htc__appoinment__area">از پزشکان ما مشاوره بگیری</a>                                    
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
                @endforeach
            </div>
        </div>