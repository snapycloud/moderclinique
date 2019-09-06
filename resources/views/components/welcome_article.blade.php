        <section class="htc__gallery__area gallery--1 pt--100 pb--70">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section__title text-center pb--50">
                            <h2 class="title__line text--theme">آخرین اخبار و مقالات</h2>
                        </div>
                    </div>
                </div>
                <div class="row rtl">
                   
                   @if($data)
             <?php $count = 0; ?>
            @foreach($data as $item)
            @if($count <= 3)
            <?php $count++; ?>

                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="singel_project mb--30">
                            <div class="project_img">
                                <a href="{{ route('knowledgeBaseArticle.slug', $item['slug']) }}">
                                    <img src="{{ route('image', [ $item['coverId'] ]) }}" alt="{{ $item['name']}}">
                                </a>
                            </div>
                            <div class="project_content">
                                <h3 class="text-center">
                                 <a href="{{ route('knowledgeBaseArticle.slug', $item['slug']) }}">{{ $item['name'] }}</a>
                                </h3>
                                <p>{{ str_limit($item['description'], 100) }}</p>
                                {{-- <a href="{{ route('knowledgeBaseArticle.slug', $item['slug']) }}" class="btn-more text-right">ادامه مطلب</a> --}}
                            </div>
                        </div>
                    </div>
                          @endif
            @endforeach                  
                    @endif
                </div>
            </div>
        </section>