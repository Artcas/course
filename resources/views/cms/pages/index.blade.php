@extends('cms.layout.layout')

@section('title', $content->page_title)

@section('meta_title', $content->meta_title)

@section('meta_description', $content->meta_description)

@section('content')
    @foreach(json_decode($content->content) as $page)
        @if($page->layout == 'wysiwyg')
            <div class="container">
                <div class="row | mt-5">
                    <div class="col-lg-6 | col-sm-12 | d-flex | align-items-center">
                        <div class="box-holder-text">
                            <h2 class="colored-title">
                                {{ $page->attributes->title }}
                            </h2>
                            <p class="grey-text-holder">
                                {{ $page->attributes->content }}
                            </p>
                            <a href="{{ route('signUp') }}" class="btn | gradient-green-button wow fadeIn">
                                {{ $page->attributes->button_text }}
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 | col-sm-12">
                        <img src="{{ asset('storage/'. $page->attributes->left_image) }}" alt="" class="box-image">
                    </div>
                </div>
            </div>
        @endif
        @if($page->layout == 'box_with_icon')
            <div class="container | gray-box-container">
                <div class="row">
                    <div class="col-lg-8 | m-auto | col-sm-12">
                        <div class="grey-boxes">
                            <div class="grey-box">
                                <div class="icon">
                                    <img src="{{ asset('storage/'. $page->attributes->box_1_icon) }}" alt="">
                                </div>
                                <div class="texts">
                                    <span class="bg-bordered-text">{{ $page->attributes->box_1_green_title }}</span>
                                    <p class="number-holder">{{ $page->attributes->box_1_number }}</p>
                                    <p class="gray-small">{{ $page->attributes->box_1_small_text }}</p>
                                </div>
                            </div>
                            <div class="grey-box">
                                <div class="icon">
                                    <img src="{{ asset('storage/'. $page->attributes->box_2_icon) }}" alt="">
                                </div>
                                <div class="texts">
                                    <span class="bg-bordered-text">{{ $page->attributes->box_2_green_title }}</span>
                                    <p class="number-holder">{{ $page->attributes->box_2_number }}</p>
                                    <p class="gray-small">{{ $page->attributes->box_2_small_text }}</p>
                                </div>
                            </div>
                            <div class="grey-box">
                                <div class="icon">
                                    <img src="{{ asset('storage/'. $page->attributes->box_3_icon) }}" alt="">
                                </div>
                                <div class="texts">
                                    <span class="bg-bordered-text">{{ $page->attributes->box_3_green_title }}</span>
                                    <p class="number-holder">{{ $page->attributes->box_3_number }}</p>
                                    <p class="gray-small">{{ $page->attributes->box_3_small_text }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @if($page->layout == 'testimonials')
            <div class="container | testimonials-container">
                <div class="row">
                    <div class="col-lg-12 | text-center">
                        <h2 class="green-title">
                            {{ $page->attributes->green_title }}
                            <img src="{{ asset('assets/images/right-top.svg') }}" alt="right top" class="right-top">
                            <img src="{{ asset('assets/images/right-bottom.svg') }}" alt="" class="right-bottom">
                            <img src="{{ asset('assets/images/left-top.svg') }}" alt="" class="left-top">
                            <img src="{{ asset('assets/images/left-bottom.svg') }}" alt="" class="left-bottom">
                        </h2>
                    </div>
                </div>
                <div class="row | testimonials-boxes">
                    <div class="col-lg-4 | col-sm-6">
                        <div class="testimonial-item">
                            <img src="{{ asset('storage/'. $page->attributes->icon_1) }}" alt=""
                                 class="testimonial-item-image">
                            <p class="bolded-text">{{ $page->attributes->title_1 }}</p>
                            <p class="text-with-gray">{{ $page->attributes->description_1 }}</p>
                        </div>

                    </div>
                    <div class="col-lg-4 | col-sm-6">
                        <div class="testimonial-item">
                            <img src="{{ asset('storage/'. $page->attributes->icon_2) }}" alt=""
                                 class="testimonial-item-image">
                            <p class="bolded-text">{{ $page->attributes->title_2 }}</p>
                            <p class="text-with-gray">{{ $page->attributes->description_2 }}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 | col-sm-12">
                        <div class="testimonial-item">
                            <img src="{{ asset('storage/'. $page->attributes->icon_3) }}" alt=""
                                 class="testimonial-item-image">
                            <p class="bolded-text">{{ $page->attributes->title_3 }}</p>
                            <p class="text-with-gray">{{ $page->attributes->description_3 }}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 | col-sm-12">
                        <div class="testimonial-item">
                            <img src="{{ asset('storage/'. $page->attributes->icon_4) }}" alt=""
                                 class="testimonial-item-image">
                            <p class="bolded-text">{{ $page->attributes->title_4 }}</p>
                            <p class="text-with-gray">{{ $page->attributes->description_4 }}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 | col-sm-12">
                        <div class="testimonial-item">
                            <img src="{{ asset('storage/'. $page->attributes->icon_5) }}" alt=""
                                 class="testimonial-item-image">
                            <p class="bolded-text">{{ $page->attributes->title_5 }}</p>
                            <p class="text-with-gray">{{ $page->attributes->description_5 }}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 | col-sm-12">
                        <div class="testimonial-item">
                            <img src="{{ asset('storage/'. $page->attributes->icon_6) }}" alt=""
                                 class="testimonial-item-image">
                            <p class="bolded-text">{{ $page->attributes->title_6 }}</p>
                            <p class="text-with-gray">{{ $page->attributes->description_6 }}</p>
                        </div>
                    </div>
                </div>

            </div>
        @endif
        @if($page->layout == 'shop_section')
            <div class="row | mt-5">
                <img src="{{ asset('assets/images/price-shape.svg') }}" alt="" class="price-background">
                <div class="col-lg-12">
                    <div class="container">
                        <h4 class="slider-title | mt-5">{{ $page->attributes->title }}</h4>
                            <div class="swiper | big-slider-swiper">
                                <div class="swiper-wrapper" id="text-with-image">
                                    <div class="swiper-slide">
                                        <div class="row | mt-5">
                                            <div class="col-lg-4 | col-sm-12">
                                                <p class="carousel-title">{{ $page->attributes->subtitle }}</p>
                                                <p class="carousel-text">{{ $page->attributes->content }}</p>
                                            </div>
                                            <div class="col-lg-8 | col-sm-12 | text-center">
                                                <img src="{{ asset('assets/images/logos.svg') }}" alt="" class="slider-image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="row | mt-5">
                                            <div class="col-lg-4 | col-sm-12">
                                                <p class="carousel-title">{{ $page->attributes->subtitle }}</p>
                                                <p class="carousel-text">{{ $page->attributes->content }}</p>
                                            </div>
                                            <div class="col-lg-8 | col-sm-12 | text-center">
                                                <img src="{{ asset('assets/images/logos.svg') }}" alt="" class="slider-image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-buttons-holder">
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                                <img src="{{ asset('assets/images/laptop.svg') }}" alt="" class="box-image | abx-box-image" >
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 | m-auto | col-sm-12">
                    <div class="container | prices-box">
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="green-title">
                                    {{ $page->attributes->green_title }}
                                    <img src="{{ asset('assets/images/right-top.svg') }}" alt="right top"
                                         class="right-top">
                                    <img src="{{ asset('assets/images/right-bottom.svg') }}" alt=""
                                         class="right-bottom">
                                    <img src="{{ asset('assets/images/left-top.svg') }}" alt="" class="left-top">
                                    <img src="{{ asset('assets/images/left-bottom.svg') }}" alt="" class="left-bottom">
                                </h2>
                                <p class="price-subtitle | mb-5">{{ $page->attributes->gray_subtitle }}</p>
                            </div>
                            <div class="col-lg-12">
                                <div class="price-small |mt-5">
                                    <div class="price-small-item | m-20">
                                        <h3 class="price-item-title | c-orange">{{ $page->attributes->price_left_box_title_1 }}</h3>
                                        <h3 class="price-item-title | c-orange">{{ $page->attributes->price_left_box_title_2 }}</h3>
                                        <ul class="price-list">
                                            @foreach($page->attributes->price_left_box_points as $point)
                                                <li class="price-list-item">{{ $point }}</li>
                                            @endforeach
                                        </ul>
										<div class="button-holder">
											<a href="{{ route('signUp') }}" class="btn | gradient-button">اختر الباقة</a>
										</div>
                                    </div>
                                    <div class="price-small-item | bg-green">
                                        <h3 class="price-item-title | c-white">{{ $page->attributes->price_middle_box_title }}</h3>
                                        <div class="price-amount">
                                            ر.س / شهر 99
                                        </div>
                                        <ul class="price-list">
                                            @foreach($page->attributes->price_middle_box_points as $point)
                                                <li class="price-list-item | c-white">{{ $point }}</li>
                                            @endforeach
                                        </ul>
										<div class="button-holder">
											<a href="{{ route('signUp') }}" class="btn | gradient-button">اختر الباقة</a>
										</div>
                                    </div>
                                    <div class="price-small-item | m-20">
                                        <h3 class="price-item-title | c-purple">{{ $page->attributes->price_right_box_title_1 }}</h3>
                                        <h3 class="price-item-title | c-purple">{{ $page->attributes->price_right_box_title_2 }}</h3>
                                        <ul class="price-list">
                                            @foreach($page->attributes->price_right_box_points as $point)
                                                <li class="price-list-item">{{ $point }}</li>
                                            @endforeach
                                        </ul>
										<div class="button-holder">
											<a href="{{ route('signUp') }}" class="btn | gradient-button">اختر الباقة</a>
										</div>
                                    </div>
									
                                </div>
                            </div>
                            <div class="col-lg-12 | mt-5 | text-center">
                                <a href="{{ route('signUp') }}" class="btn | gradient-button">
                                    {{ $page->attributes->price_button_text }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @if($page->layout == 'feedback')
            <div class="container | m-150">
                <div class="row">
                    <div class="col-lg-12 | text-center">
                        <h2 class="green-title">
                            {{ $page->attributes->feedback_green_title }}
                            <img src="{{ asset('assets/images/right-top.svg') }}" alt="right top" class="right-top">
                            <img src="{{ asset('assets/images/right-bottom.svg') }}" alt="" class="right-bottom">
                            <img src="{{ asset('assets/images/left-top.svg') }}" alt="" class="left-top">
                            <img src="{{ asset('assets/images/left-bottom.svg') }}" alt="" class="left-bottom">
                        </h2>

                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/images/ellipse.svg') }}" alt="" class="ellipse-image">
                                    <p class="ellipse-bolded-text">{{ $page->attributes->feedback_icon_title }}</p>
                                    <p class="ellipse-text">{{ $page->attributes->feedback_text}}</p>
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/images/ellipse.svg') }}" alt="" class="ellipse-image">
                                    <p class="ellipse-bolded-text">{{ $page->attributes->feedback_icon_title }}</p>
                                    <p class="ellipse-text">{{ $page->attributes->feedback_text}}</p>
                                </div>
                                <div class="swiper-slide">
                                    <img src="{{ asset('assets/images/ellipse.svg') }}" alt="" class="ellipse-image">
                                    <p class="ellipse-bolded-text">{{ $page->attributes->feedback_icon_title }}</p>
                                    <p class="ellipse-text">{{ $page->attributes->feedback_text}}</p>
                                </div>
                            </div>
                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>

                        <div class="green-title-box | text-center">
                            <p class="ellipse-green-text">{{ $page->attributes->blue_title }}</p>
                            <a href="{{ route('signUp') }}" class="btn | gradient-button">
                                {{ $page->attributes->button_text  }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
@endsection
