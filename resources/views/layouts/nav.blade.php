<div class="mobile-menu-area hidden-lg hidden-md">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul >
                            <li><a href="{{ url('/') }}">الرئيسة</a></li>
                            <li class="mega-parent"><a href="{{ url('categories') }}">الاقسام</a>
                                <div class="mega-menu-area clearfix">
                                    <div class="mega-menu-link f-left">
                                        <?php
                                        $categories = json_decode(file_get_contents('http://163.172.33.245/goomla/api/categories'), true);
                                        $allCategories = array_chunk($categories, 5);
                                        ?>
                                        @foreach($allCategories as $pieces)
                                            <ul class="single-mega-item">
                                                @foreach($pieces as $cate)
                                                    @if($cate['hasSubCategories'] != null)
                                                        <li><a href="{{url('categories/'.$cate['id'])}}" title="{{$cate['name']}}">{{ $cate['name'] }}</a></li>
                                                    @else
                                                        <li><a href="{{url('products/'.$cate['id'])}}" title="{{$cate['name']}}">{{ $cate['name'] }}</a></li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        @endforeach
                                    </div>
                                </div>
                            </li>
                            <li><a href="{{ url('/about-us') }}">من نحن</a>
                            </li>
                            <li><a href="{{ url('/contact-us') }}">تواصل معنا</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>