        <section class="htc__blog__area home-blog bg__white ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section__title text-center">
                            <h2 class="title__line text--theme">جدیدترین اخبار و مقالات</h2>
                        </div>
                    </div>
                </div>
            
            <?php $count = 0; ?>
            @foreach($data as $item)

            @if($count <= 4)
            <?php $count++; ?>
                <div class="row htc__blog__wrap clearfix mt--30">
                    <div class="col-lg-6 col-xl-6 col-md-12 col-12">
                         <div class="single_latest_post flex left_grid">
                            <div class="ht__blog__thumb">
                                <a href="{{ route('knowledgeBaseArticle.slug', $item['slug']) }}">
                                    <img src="{{ route('image', [ $item['coverId'] ]) }}" alt="{{ $item['name']}}">
                                </a>
                            </div>
                            <div class="htc__blog__content">
                                <div class="blog__post_title text-right">
                                    <h2><a href="{{ route('knowledgeBaseArticle.slug', $item['slug']) }}">{{ $item['name'] }}</a></h2>
                                    <p>{{ $item['description'] }}</p>
                                    <a href="{{ route('knowledgeBaseArticle.slug', $item['slug']) }}" class="btn-more text-right">ادامه مطلب</a>
                                </div>
                            </div>

                            
                        </div>
                    </div>
                </div>
            @endif
            @endforeach
            </div>
        </section>
