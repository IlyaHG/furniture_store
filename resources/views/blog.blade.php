@extends('layout.layout')
@section('title','Furea - Blog Grid')


@section('content')
    <main class="main__content_wrapper">

        <!-- Start breadcrumb section -->
        <section class="breadcrumb__section breadcrumb__bg">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content">
                            <h1 class="breadcrumb__content--title text-white mb-10">Blog Grid</h1>
                            <ul class="breadcrumb__content--menu d-flex">
                                <li class="breadcrumb__content--menu__items"><a class="text-white" href="main/index.blade.php">Home</a></li>
                                <li class="breadcrumb__content--menu__items"><span class="text-white">Blog Grid</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->

        <!-- Start blog section -->
        <section class="blog__section section--padding">
            <div class="container">
                <div class="section__heading text-center mb-40">
                    <h2 class="section__heading--maintitle">Latest Post From Blog</h2>
                </div>
                <div class="blog__section--inner p-0">
                    <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-2 row-cols-1 mb--n30">
                        <div class="col mb-30">
                            <div class="blog__items">
                                <div class="blog__thumbnail">
                                    <a class="blog__thumbnail--link display-block" href="blog-details.blade.php"><img class="blog__thumbnail--img display-block" src="../../public/assets/img/blog/blog5.webp" alt="blog-img"></a>
                                </div>
                                <div class="blog__content">
                                    <ul class="blog__content--meta d-flex">
                                        <li class="blog__content--meta__text">
                                            <svg class="blog__content--meta__icon" xmlns="http://www.w3.org/2000/svg" width="11.001" height="11.001" viewBox="0 0 11.001 11.001">
                                                <path  data-name="Icon awesome-user-circle" d="M5.5.313a5.5,5.5,0,1,0,5.5,5.5A5.5,5.5,0,0,0,5.5.313Zm0,2.129A1.952,1.952,0,1,1,3.549,4.394,1.952,1.952,0,0,1,5.5,2.442Zm0,7.63A4.25,4.25,0,0,1,2.251,8.559,2.473,2.473,0,0,1,4.436,7.232a.543.543,0,0,1,.157.024A2.937,2.937,0,0,0,5.5,7.41a2.925,2.925,0,0,0,.907-.153.543.543,0,0,1,.157-.024A2.473,2.473,0,0,1,8.75,8.559,4.25,4.25,0,0,1,5.5,10.071Z" transform="translate(0 -0.313)" fill="currentColor"/>
                                            </svg>
                                           James Hames
                                        </li>
                                        <li class="blog__content--meta__text">
                                            <svg class="blog__content--meta__icon" xmlns="http://www.w3.org/2000/svg" width="12.569" height="13.966" viewBox="0 0 12.569 13.966">
                                                <path  data-name="Icon material-date-range" d="M8.69,9.285h-1.4v1.4h1.4Zm2.793,0h-1.4v1.4h1.4Zm2.793,0h-1.4v1.4h1.4Zm1.4-4.888h-.7V3h-1.4V4.4H7.991V3h-1.4V4.4H5.9a1.39,1.39,0,0,0-1.39,1.4L4.5,15.569a1.4,1.4,0,0,0,1.4,1.4h9.776a1.4,1.4,0,0,0,1.4-1.4V5.793A1.4,1.4,0,0,0,15.673,4.4Zm0,11.173H5.9V7.888h9.776Z" transform="translate(-4.5 -3)" fill="currentColor"/>
                                            </svg>
                                            February 05, 2022
                                        </li>
                                    </ul>
                                    <h3 class="blog__content--title h4"><a href="blog-details.blade.php">Top 10 Best Furniture Company
                                        History you Should Know</a></h3>
                                    <p class="blog__content--desc">Mum ut perspiciatis unde omnis iste
                                        natus error sit voluptatem…..</p>
                                    <a class="blog__content--btn primary__btn" href="blog-details.blade.php">Read more </a>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-30">
                            <div class="blog__items">
                                <div class="blog__thumbnail">
                                    <a class="blog__thumbnail--link display-block" href="blog-details.blade.php"><img class="blog__thumbnail--img display-block" src="../../public/assets/img/blog/blog6.webp" alt="blog-img"></a>
                                </div>
                                <div class="blog__content">
                                    <ul class="blog__content--meta d-flex">
                                        <li class="blog__content--meta__text">
                                            <svg class="blog__content--meta__icon" xmlns="http://www.w3.org/2000/svg" width="11.001" height="11.001" viewBox="0 0 11.001 11.001">
                                                <path  data-name="Icon awesome-user-circle" d="M5.5.313a5.5,5.5,0,1,0,5.5,5.5A5.5,5.5,0,0,0,5.5.313Zm0,2.129A1.952,1.952,0,1,1,3.549,4.394,1.952,1.952,0,0,1,5.5,2.442Zm0,7.63A4.25,4.25,0,0,1,2.251,8.559,2.473,2.473,0,0,1,4.436,7.232a.543.543,0,0,1,.157.024A2.937,2.937,0,0,0,5.5,7.41a2.925,2.925,0,0,0,.907-.153.543.543,0,0,1,.157-.024A2.473,2.473,0,0,1,8.75,8.559,4.25,4.25,0,0,1,5.5,10.071Z" transform="translate(0 -0.313)" fill="currentColor"/>
                                            </svg>
                                           James Hames
                                        </li>
                                        <li class="blog__content--meta__text">
                                            <svg class="blog__content--meta__icon" xmlns="http://www.w3.org/2000/svg" width="12.569" height="13.966" viewBox="0 0 12.569 13.966">
                                                <path  data-name="Icon material-date-range" d="M8.69,9.285h-1.4v1.4h1.4Zm2.793,0h-1.4v1.4h1.4Zm2.793,0h-1.4v1.4h1.4Zm1.4-4.888h-.7V3h-1.4V4.4H7.991V3h-1.4V4.4H5.9a1.39,1.39,0,0,0-1.39,1.4L4.5,15.569a1.4,1.4,0,0,0,1.4,1.4h9.776a1.4,1.4,0,0,0,1.4-1.4V5.793A1.4,1.4,0,0,0,15.673,4.4Zm0,11.173H5.9V7.888h9.776Z" transform="translate(-4.5 -3)" fill="currentColor"/>
                                            </svg>
                                            February 05, 2022
                                        </li>
                                    </ul>
                                    <h3 class="blog__content--title h4"><a href="blog-details.blade.php">Top 10 Best Furniture Company
                                        History you Should Know</a></h3>
                                    <p class="blog__content--desc">Mum ut perspiciatis unde omnis iste
                                        natus error sit voluptatem…..</p>
                                    <a class="blog__content--btn primary__btn" href="blog-details.blade.php">Read more </a>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-30">
                            <div class="blog__items">
                                <div class="blog__thumbnail">
                                    <a class="blog__thumbnail--link display-block" href="blog-details.blade.php"><img class="blog__thumbnail--img display-block" src="../../public/assets/img/blog/blog7.webp" alt="blog-img"></a>
                                </div>
                                <div class="blog__content">
                                    <ul class="blog__content--meta d-flex">
                                        <li class="blog__content--meta__text">
                                            <svg class="blog__content--meta__icon" xmlns="http://www.w3.org/2000/svg" width="11.001" height="11.001" viewBox="0 0 11.001 11.001">
                                                <path  data-name="Icon awesome-user-circle" d="M5.5.313a5.5,5.5,0,1,0,5.5,5.5A5.5,5.5,0,0,0,5.5.313Zm0,2.129A1.952,1.952,0,1,1,3.549,4.394,1.952,1.952,0,0,1,5.5,2.442Zm0,7.63A4.25,4.25,0,0,1,2.251,8.559,2.473,2.473,0,0,1,4.436,7.232a.543.543,0,0,1,.157.024A2.937,2.937,0,0,0,5.5,7.41a2.925,2.925,0,0,0,.907-.153.543.543,0,0,1,.157-.024A2.473,2.473,0,0,1,8.75,8.559,4.25,4.25,0,0,1,5.5,10.071Z" transform="translate(0 -0.313)" fill="currentColor"/>
                                            </svg>
                                           James Hames
                                        </li>
                                        <li class="blog__content--meta__text">
                                            <svg class="blog__content--meta__icon" xmlns="http://www.w3.org/2000/svg" width="12.569" height="13.966" viewBox="0 0 12.569 13.966">
                                                <path  data-name="Icon material-date-range" d="M8.69,9.285h-1.4v1.4h1.4Zm2.793,0h-1.4v1.4h1.4Zm2.793,0h-1.4v1.4h1.4Zm1.4-4.888h-.7V3h-1.4V4.4H7.991V3h-1.4V4.4H5.9a1.39,1.39,0,0,0-1.39,1.4L4.5,15.569a1.4,1.4,0,0,0,1.4,1.4h9.776a1.4,1.4,0,0,0,1.4-1.4V5.793A1.4,1.4,0,0,0,15.673,4.4Zm0,11.173H5.9V7.888h9.776Z" transform="translate(-4.5 -3)" fill="currentColor"/>
                                            </svg>
                                            February 05, 2022
                                        </li>
                                    </ul>
                                    <h3 class="blog__content--title h4"><a href="blog-details.blade.php">Top 10 Best Furniture Company
                                        History you Should Know</a></h3>
                                    <p class="blog__content--desc">Mum ut perspiciatis unde omnis iste
                                        natus error sit voluptatem…..</p>
                                    <a class="blog__content--btn primary__btn" href="blog-details.blade.php">Read more </a>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-30">
                            <div class="blog__items">
                                <div class="blog__thumbnail">
                                    <a class="blog__thumbnail--link display-block" href="blog-details.blade.php"><img class="blog__thumbnail--img display-block" src="../../public/assets/img/blog/blog8.webp" alt="blog-img"></a>
                                </div>
                                <div class="blog__content">
                                    <ul class="blog__content--meta d-flex">
                                        <li class="blog__content--meta__text">
                                            <svg class="blog__content--meta__icon" xmlns="http://www.w3.org/2000/svg" width="11.001" height="11.001" viewBox="0 0 11.001 11.001">
                                                <path  data-name="Icon awesome-user-circle" d="M5.5.313a5.5,5.5,0,1,0,5.5,5.5A5.5,5.5,0,0,0,5.5.313Zm0,2.129A1.952,1.952,0,1,1,3.549,4.394,1.952,1.952,0,0,1,5.5,2.442Zm0,7.63A4.25,4.25,0,0,1,2.251,8.559,2.473,2.473,0,0,1,4.436,7.232a.543.543,0,0,1,.157.024A2.937,2.937,0,0,0,5.5,7.41a2.925,2.925,0,0,0,.907-.153.543.543,0,0,1,.157-.024A2.473,2.473,0,0,1,8.75,8.559,4.25,4.25,0,0,1,5.5,10.071Z" transform="translate(0 -0.313)" fill="currentColor"/>
                                            </svg>
                                           James Hames
                                        </li>
                                        <li class="blog__content--meta__text">
                                            <svg class="blog__content--meta__icon" xmlns="http://www.w3.org/2000/svg" width="12.569" height="13.966" viewBox="0 0 12.569 13.966">
                                                <path  data-name="Icon material-date-range" d="M8.69,9.285h-1.4v1.4h1.4Zm2.793,0h-1.4v1.4h1.4Zm2.793,0h-1.4v1.4h1.4Zm1.4-4.888h-.7V3h-1.4V4.4H7.991V3h-1.4V4.4H5.9a1.39,1.39,0,0,0-1.39,1.4L4.5,15.569a1.4,1.4,0,0,0,1.4,1.4h9.776a1.4,1.4,0,0,0,1.4-1.4V5.793A1.4,1.4,0,0,0,15.673,4.4Zm0,11.173H5.9V7.888h9.776Z" transform="translate(-4.5 -3)" fill="currentColor"/>
                                            </svg>
                                            February 05, 2022
                                        </li>
                                    </ul>
                                    <h3 class="blog__content--title h4"><a href="blog-details.blade.php">Top 10 Best Furniture Company
                                        History you Should Know</a></h3>
                                    <p class="blog__content--desc">Mum ut perspiciatis unde omnis iste
                                        natus error sit voluptatem…..</p>
                                    <a class="blog__content--btn primary__btn" href="blog-details.blade.php">Read more </a>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-30">
                            <div class="blog__items">
                                <div class="blog__thumbnail">
                                    <a class="blog__thumbnail--link display-block" href="blog-details.blade.php"><img class="blog__thumbnail--img display-block" src="../../public/assets/img/blog/blog9.webp" alt="blog-img"></a>
                                </div>
                                <div class="blog__content">
                                    <ul class="blog__content--meta d-flex">
                                        <li class="blog__content--meta__text">
                                            <svg class="blog__content--meta__icon" xmlns="http://www.w3.org/2000/svg" width="11.001" height="11.001" viewBox="0 0 11.001 11.001">
                                                <path  data-name="Icon awesome-user-circle" d="M5.5.313a5.5,5.5,0,1,0,5.5,5.5A5.5,5.5,0,0,0,5.5.313Zm0,2.129A1.952,1.952,0,1,1,3.549,4.394,1.952,1.952,0,0,1,5.5,2.442Zm0,7.63A4.25,4.25,0,0,1,2.251,8.559,2.473,2.473,0,0,1,4.436,7.232a.543.543,0,0,1,.157.024A2.937,2.937,0,0,0,5.5,7.41a2.925,2.925,0,0,0,.907-.153.543.543,0,0,1,.157-.024A2.473,2.473,0,0,1,8.75,8.559,4.25,4.25,0,0,1,5.5,10.071Z" transform="translate(0 -0.313)" fill="currentColor"/>
                                            </svg>
                                           James Hames
                                        </li>
                                        <li class="blog__content--meta__text">
                                            <svg class="blog__content--meta__icon" xmlns="http://www.w3.org/2000/svg" width="12.569" height="13.966" viewBox="0 0 12.569 13.966">
                                                <path  data-name="Icon material-date-range" d="M8.69,9.285h-1.4v1.4h1.4Zm2.793,0h-1.4v1.4h1.4Zm2.793,0h-1.4v1.4h1.4Zm1.4-4.888h-.7V3h-1.4V4.4H7.991V3h-1.4V4.4H5.9a1.39,1.39,0,0,0-1.39,1.4L4.5,15.569a1.4,1.4,0,0,0,1.4,1.4h9.776a1.4,1.4,0,0,0,1.4-1.4V5.793A1.4,1.4,0,0,0,15.673,4.4Zm0,11.173H5.9V7.888h9.776Z" transform="translate(-4.5 -3)" fill="currentColor"/>
                                            </svg>
                                            February 05, 2022
                                        </li>
                                    </ul>
                                    <h3 class="blog__content--title h4"><a href="blog-details.blade.php">Top 10 Best Furniture Company
                                        History you Should Know</a></h3>
                                    <p class="blog__content--desc">Mum ut perspiciatis unde omnis iste
                                        natus error sit voluptatem…..</p>
                                    <a class="blog__content--btn primary__btn" href="blog-details.blade.php">Read more </a>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-30">
                            <div class="blog__items">
                                <div class="blog__thumbnail">
                                    <a class="blog__thumbnail--link display-block" href="blog-details.blade.php"><img class="blog__thumbnail--img display-block" src="../../public/assets/img/blog/blog10.webp" alt="blog-img"></a>
                                </div>
                                <div class="blog__content">
                                    <ul class="blog__content--meta d-flex">
                                        <li class="blog__content--meta__text">
                                            <svg class="blog__content--meta__icon" xmlns="http://www.w3.org/2000/svg" width="11.001" height="11.001" viewBox="0 0 11.001 11.001">
                                                <path  data-name="Icon awesome-user-circle" d="M5.5.313a5.5,5.5,0,1,0,5.5,5.5A5.5,5.5,0,0,0,5.5.313Zm0,2.129A1.952,1.952,0,1,1,3.549,4.394,1.952,1.952,0,0,1,5.5,2.442Zm0,7.63A4.25,4.25,0,0,1,2.251,8.559,2.473,2.473,0,0,1,4.436,7.232a.543.543,0,0,1,.157.024A2.937,2.937,0,0,0,5.5,7.41a2.925,2.925,0,0,0,.907-.153.543.543,0,0,1,.157-.024A2.473,2.473,0,0,1,8.75,8.559,4.25,4.25,0,0,1,5.5,10.071Z" transform="translate(0 -0.313)" fill="currentColor"/>
                                            </svg>
                                           James Hames
                                        </li>
                                        <li class="blog__content--meta__text">
                                            <svg class="blog__content--meta__icon" xmlns="http://www.w3.org/2000/svg" width="12.569" height="13.966" viewBox="0 0 12.569 13.966">
                                                <path  data-name="Icon material-date-range" d="M8.69,9.285h-1.4v1.4h1.4Zm2.793,0h-1.4v1.4h1.4Zm2.793,0h-1.4v1.4h1.4Zm1.4-4.888h-.7V3h-1.4V4.4H7.991V3h-1.4V4.4H5.9a1.39,1.39,0,0,0-1.39,1.4L4.5,15.569a1.4,1.4,0,0,0,1.4,1.4h9.776a1.4,1.4,0,0,0,1.4-1.4V5.793A1.4,1.4,0,0,0,15.673,4.4Zm0,11.173H5.9V7.888h9.776Z" transform="translate(-4.5 -3)" fill="currentColor"/>
                                            </svg>
                                            February 05, 2022
                                        </li>
                                    </ul>
                                    <h3 class="blog__content--title h4"><a href="blog-details.blade.php">Top 10 Best Furniture Company
                                        History you Should Know</a></h3>
                                    <p class="blog__content--desc">Mum ut perspiciatis unde omnis iste
                                        natus error sit voluptatem…..</p>
                                    <a class="blog__content--btn primary__btn" href="blog-details.blade.php">Read more </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination__area bg__gray--color">
                        <nav class="pagination justify-content-center">
                            <ul class="pagination__wrapper d-flex align-items-center justify-content-center">
                                <li class="pagination__list"><a href="blog.html" class="pagination__item--arrow  link ">
                                    <svg xmlns="http://www.w3.org/2000/svg"  width="22.51" height="20.443" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M244 400L100 256l144-144M120 256h292"/></svg></a>
                                <li>
                                <li class="pagination__list"><span class="pagination__item pagination__item--current">1</span></li>
                                <li class="pagination__list"><a href="blog.html" class="pagination__item link">2</a></li>
                                <li class="pagination__list"><a href="blog.html" class="pagination__item link">3</a></li>
                                <li class="pagination__list"><a href="blog.html" class="pagination__item link">4</a></li>
                                <li class="pagination__list"><a href="blog.html" class="pagination__item--arrow  link ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144M392 256H100"/></svg></a>
                                <li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!-- End blog section -->

        <!-- Start Newsletter banner section -->
        <section class="newsletter__banner--section section--padding pt-0">
            <div class="container">
                <div class="newsletter__banner--thumbnail position__relative">
                    <img class="newsletter__banner--thumbnail__img" src="../../public/assets/img/banner/banner-bg7.webp" alt="newsletter-banner">
                    <div class="newsletter__content newsletter__subscribe">
                        <h5 class="newsletter__content--subtitle text-white">Want to offer regularly ?</h5>
                        <h2 class="newsletter__content--title text-white h3 mb-25">Subscribe Our Newsletter <br>
                            for Get Daily Update</h2>
                        <form class="newsletter__subscribe--form position__relative" action="#">
                            <label>
                                <input class="newsletter__subscribe--input" placeholder="Enter your email address" type="email">
                            </label>
                            <button class="newsletter__subscribe--button primary__btn" type="submit">Subscribe
                                <svg class="newsletter__subscribe--button__icon" xmlns="http://www.w3.org/2000/svg" width="9.159" height="7.85" viewBox="0 0 9.159 7.85">
                                    <path  data-name="Icon material-send" d="M3,12.35l9.154-3.925L3,4.5,3,7.553l6.542.872L3,9.3Z" transform="translate(-3 -4.5)" fill="currentColor"/>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Newsletter banner section -->
    </main>

@endsection
