<aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9 wow bounceInUp animated">
    <!-- BEGIN SIDE-NAV-CATEGORY -->
    <div class="side-nav-categories">
        <a href="{{url('categories')}}">
            <div class="block-title">
                الأقسام
            </div>
        </a>
        <!--block-title-->
        <!-- BEGIN BOX-CATEGORY -->
        <div class="box-content box-category">
            <ul>

                <?php
                $crl2 = curl_init();

                curl_setopt($crl2, CURLOPT_URL, 'http://163.172.33.245/goomla/api/categorytree');
                curl_setopt($crl2, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($crl2, CURLOPT_SSL_VERIFYHOST, false);
                curl_setopt($crl2, CURLOPT_SSL_VERIFYPEER, false);

                $rest2 = curl_exec($crl2);
                $categories = json_decode($rest2);
                ?>


                {{--start foreach categories--}}

                @foreach($categories as $onecat)

                        <li>
                            <a class="" href="{{url('products/'.$onecat->id)}}">{{$onecat->name}}</a>
                            <span class="subDropdown minus"></span>


                            @if($onecat->sub_categories != null )
                            <ul class="level0_415" style="display:block">
                                <!--level1-->

                                <li>
                                    @foreach($onecat->sub_categories as $subcats)
                                        <a href="{{url('products/'.$subcats->id)}}"> {{$subcats->name}}</a>
                                    @endforeach
                                </li>
                            </ul>
                        @endif

                        <!--level0-->
                        </li>
                 @endforeach
                        {{--end foreach categories--}}

            </ul>
        </div>
        <!--box-content box-category-->
    </div>
    <!--side-nav-categories-->


</aside>