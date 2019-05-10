        <section class="htc__gallery__area gallery--1 pt--100 pb--70">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section__title text-center pb--50">
                            <h2 class="title__line text--theme">خدمات مدرن کلینیک</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                   
                    @foreach($menu_services as $item)
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="singel_project mb--30">
                            <div class="project_img">
                                <a href="{{ route('service.slug', [ $item['slug'] ])   }}">
                                    <img src="{{ route('image', [ $item['coverId'] ]) }}" alt="Cardiology Icon">
                                </a>
                            </div>
                            <div class="project_content">
                                <h3 class="text-center">
                                    <a href="{{ route('service.slug', [ $item['slug'] ])   }}">{{ $item['name'] }}</a>
                                </h3>
                                <p>{{ $item['description'] }}</p>
                            </div>
                        </div>
                    </div>
                     @endforeach                    
                    
                </div>
            </div>
        </section>