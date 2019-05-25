{{-- <section class="htc__try__solve__area service__section ptb--100 mt--100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 col-12">
                        <div class="section_title--2 text-center pb--30">
                            <h2>سوالات متداول</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($data as $item)
                    <div class="col-lg-4 col-md-6 col-12 sin_service pull-right">
                        Start Single Items
                        <div class="ht__sin__solve">
                            <div class="ser__content">
                                <h4><a href="#{{ $item['id']}}">{{ $item['name'] }}</a></h4>
                                {{-- <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                            </div>
                        </div>
                        <!-- End Single Items -->
                    </div>
                    @endforeach
                </div>
            </div>
        </section> --}}

        <section class="htc__try__solve__area">
            <div class="container-fluid">
                 
                <div class="home--try" style="background: rgba(0, 0, 0, 0) url('images/about/2.png') no-repeat scroll 0 0 / cover;">
                    <div class="htc__try__solveleft">
                        <div class="htc__try__details">
                            <div class="try_solve_middle_inner">
                                <h2>شادی چیزی بیش از سلامت و حافظه بد نیست.</h2>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="offset-lg-5 col-lg-7 col-md-12 col-12">
                        <div class="htc__solve__items">
                            <div class="htc__solve__content pb--80">
                                <!-- Start Single Items -->
                                @foreach($data as $item)
                                <div class="ht__sin__solve">
                                    <div class="ser_icon">
                                    </div>
                                    <div class="ser__content">
                                        <h4><a href="#{{ $item['id']}}">{{ $item['name'] }}</a></h4>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>