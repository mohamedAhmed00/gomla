@extends('layouts.app')

@section('metatitle') جملة أونلاين @stop

@section('metadescription') دلوقتي تقدر تشتري كل المنتجات الغذائية الجافة من خلال تطبيق جملة.أونلاين
حمله دلوقتي و وفر فلوسك ومجهودك @stop

@section('metaimage'){{url('/public/gomla/images/logo.jpg')}}@stop

@section('head')
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <link href="{{url('/public/')}}/prasley/parsley.css" rel="stylesheet" type="text/css"/>
    <style>
        body {
            direction: ltr;
        }

        .pargraph {
            padding: 10px 20px;
            font-weight: 600;
            font-size: 15px;
        }

        .heading {
            font-weight: 800;
        }
    </style>
@endsection

@section('content')


    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="page-title">
                        <h2>سياسه الخصوصيه و الاستخدام</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BEGIN Main Container -->

    <div class="main-container col1-layout wow bounceInUp animated animated" style="visibility: visible;">

        <div class="main container">
            <div class="row">
                <div class="std">
                    <div class="wrapper_bl" style="margin-top: 1px;">
                        <div class="form_background">

                            <div class="row">
                                <div class="col-md-12">
                                    <p class="pargraph">
                                        THIS PRIVACY POLICY APPLIES TO YOUR ACCESS AND USE OF GOMLA.ONLINE ONLINE
                                        SERVICES, INCLUDING USE OF OUR WEBSITES, MOBILE APPLICATIONS, AND OTHER ONLINE
                                        PROGRAMS (“GOMLA.ONLINE ONLINE SERVICES”). BY DOWNLOADING OR USING ANY OF
                                        GOMLA.ONLINE ONLINE SERVICES, YOU ARE AGREEING THAT YOU HAVE READ AND AGREE TO
                                        BE BOUND BY THIS PRIVACY POLICY.  IF YOU DISAGREE WITH ANY PART OF THIS PRIVACY
                                        POLICY, THEN PLEASE DO NOT USE ANY OF GOMLA.ONLINE ONLINE SERVICES.

                                    </p>
                                </div>
                            </div>

                            <br>
                            <br>

                            <div class="row">
                                <div class="col-md-12">
                                    <p class="pargraph">
                                        We want you to enjoy every visit to gomla.online, and we do collect information
                                        about you and we may share that information with third parties in certain
                                        circumstances, so please read on for more details about how we use personal
                                        information we collect about you when you use gomla.online Online Services.
                                    </p>
                                </div>
                            </div>

                            <br>
                            <br>

                            <div class="row">
                                <div class="col-md-12">
                                    <p class="pargraph">
                                        We may change our Privacy Policy, so please check this page from time to time,
                                        as your continued use of gomla.online Online Services, after we publish our
                                        changes, indicates your acceptance of any changed terms.  
                                    </p>
                                </div>
                            </div>
                            <br>
                            <br>

                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="heading">1.    What Kind Of Information We Collect </h2>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <p class="pargraph">
                                        Whether accessing gomla.online Online Services  from your home computer or while
                                        on the run from your smart phone or tablet, gomla.online and its agents may
                                        collect some information that identifies you or relates to you as an individual
                                        (“Personal Information”), such as your:

                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <p class="pargraph">
                                        -name
                                    <p class="pargraph">
                                        -mailing address;
                                    </p>
                                    <p class="pargraph">
                                        -telephone number; </p>

                                    <p class="pargraph">
                                        -e-mail address;

                                    </p>

                                    <p class="pargraph">
                                        -username and password (for account administration);

                                    </p>
                                    <p class="pargraph">
                                        -device ID, including IP address;

                                    </p>
                                    <p class="pargraph">
                                        -geolocation (if using a mobile application and you consent to providing it);


                                    </p>
                                    <p class="pargraph">
                                        -financial account information and other payment information (that you submit to
                                        us for order processing);

                                    </p>
                                    <p class="pargraph">
                                        -additional personal information necessary for the administration of certain
                                        promotional events; and


                                    </p>
                                </div>
                            </div>


                            <br>

                            <div class="row">
                                <div class="col-md-12">
                                    <h2 style="font-weight: 700" class="heading">In addition, we may collect other types
                                        of data elements (“Other Information”) that do not reveal your identity or that
                                        do not relate directly to you or any other individual, such as:
                                    </h2>
                                </div>
                            </div>

                            <p class="pargraph">
                                - browser and device information, including operating system;
                            </p>
                            <p class="pargraph">
                                -demographic information and other information provided by you that we may combine with
                                other users of gomla.online Online Services or use on its own;
                            </p>
                            <p class="pargraph">
                                -mobile application usage data;
                            </p>

                            <p class="pargraph">

                                -aggregated information such as “click stream” information such as entry and exit points
                                for gomla.online Online Services (including referring URLs or domains), certain
                                gomla.online Online Services traffic statistics, page views, and impressions; and
                            </p>
                            <p class="pargraph">

                                -Information collected through cookies, pixel tags and other technologies described in
                                more detail later in this Privacy Policy.

                            </p>

                            <br>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 style="font-weight: 700" class="heading">In addition, when users request pages
                                        on gomla.online Online Services, our servers automatically log the IP address of
                                        the particular user.  The IP address is a unique number assigned to your
                                        computer in order to identify it whenever you are surfing the Web.

                                    </h2>
                                </div>
                            </div>


                            <br>
                            <br>

                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="heading">2.    How We Use The Personal Information We Collect
                                    </h2>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <p class="pargraph">
                                        We may use Personal Information about you for purposes described in this Privacy
                                        Policy or as otherwise disclosed to you through gomla.online Online Services. 
                                        For example, we may use Personal Information to:
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <p class="pargraph">
                                        -respond to your inquiries or requests, and to post your comments or statements
                                        on message boards or in our online forums;
                                    <p class="pargraph">
                                        -create and deliver personalized promotions, including by combining your
                                        Personal Information with Other Information;
                                    </p>
                                    <p class="pargraph">
                                        -communicate with you by mail, telephone, facsimile, e-mail, mobile alerts and
                                        SMS text messaging about gomla.online;
                                    </p>

                                    <p class="pargraph">
                                        -communicate with you, including by mail, telephone, facsimile, e-mail, mobile
                                        alerts and SMS text messaging, in connection with our marketing efforts, such as
                                        when we send you offers and promotions that you can take advantage of through
                                        gomla.online Online Services; and
                                    </p>

                                    <p class="pargraph">
                                        -Further our business purposes, such as to perform data analysis, audits, fraud
                                        monitoring and prevention, to enhance, improve or modify gomla.online Online
                                        Services, to identify usage trends, determine the effectiveness of our
                                        promotional campaigns and to operate and expand our business activities.
                                    </p>


                                </div>
                            </div>


                            <br>
                            <br>

                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="heading">3.    How We May Disclose Personal Information We Collect 

                                    </h2>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <h3>Service Providers</h3>
                                    <p class="pargraph">

                                        We may disclose your Personal Information to third-party service providers to
                                        provide us with services such as website hosting, professional services,
                                        including information technology services and related infrastructure, customer
                                        service, e-mail delivery, auditing and other similar services.
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h3>Affiliates</h3>
                                    <p class="pargraph">
                                        We may disclose personal Information to our affiliates (“Affiliates”) for the
                                        purposes described in this Privacy Policy, including for marketing purposes, and
                                        to be consistent with our goal of providing our consumers with the superior
                                        product and consumer experience that our customers have come to expect from us
                                        around the globe.  Affiliates are those companies that are under common control
                                        of our parent company Borouj For Agencies and Trading.
                                    </p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <h3>
                                        To Perform Services You Request
                                    </h3>
                                    <p class="pargraph">
                                        We may disclose your Personal Information to third parties in order to perform
                                        services you request or functions you initiate, such as when you post
                                        information and materials on message boards and forums, including on our
                                        Facebook Page.   When you post information in a public forum it becomes public
                                        information.  In addition, we may disclose your Personal Information in order to
                                        identify you to anyone to whom you send communications through gomla.online
                                        Online Services.
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h3>Corporate Transactions or Events</h3>
                                    <p class="pargraph">
                                        We may disclose your information to a third party in connection with a corporate
                                        reorganization, merger, sale, joint venture, assignment, transfer or other
                                        disposition of all or any portion of our business, assets or stock, including in
                                        connection with any bankruptcy or similar proceedings.
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h3>
                                        Other Legal Reasons
                                    </h3>
                                    <p class="pargraph">
                                        In addition, we may use or disclose your Personal Information as we deem
                                        necessary or appropriate: (1) under applicable law, including laws outside your
                                        country of residence; (2) to respond to requests from public and government
                                        authorities including public and government authorities outside your country of
                                        residence; (3) to comply with subpoenas and other legal processes; (4) to pursue
                                        available remedies or limit damages we may sustain; (5) to protect our
                                        operations or those of any of our Affiliates; (6) to protect the rights,
                                        privacy, safety or property of gomla.online, our Affiliates, you and others; and
                                        (7) to enforce our terms and conditions.
                                    </p>
                                </div>
                            </div>


                            <br>
                            <br>

                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="heading">4.    Cookies Policy
                                         

                                    </h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h3>
                                         What Are Cookies?</h3>
                                    <p class="pargraph">
                                        gomla.online and its agents use small text files called cookies, (collectively,
                                        “Cookies”).  Cookies are small pieces of data that we and our agents place in
                                        your computer’s browser to store your preferences.  Cookies are not themselves
                                        personally identifiable, but may be linked to Personal Information that you
                                        provide to us through your interaction with gomla.online Online Services.  A
                                        Cookie will typically contain the name of the domain (internet location) from
                                        which the Cookie has come, the “lifetime” of the Cookie (i.e.  when does it
                                        expire), and a value, usually a randomly generated unique number.
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h3>
                                        How We Use Cookies
                                    </h3>
                                    <p class="pargraph">
                                        We use Cookies so that we can improve your online experience – for example, by
                                        remembering you when you come back to visit us, and making the content you see
                                        more relevant to you.
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h3>
                                         Your Control of Cookies
                                    </h3>
                                    <p class="pargraph">
                                        Web browsers allow some control of most Cookies through the browser settings. 
                                        To find out more about Cookies, including how to see what Cookies have been set
                                        on your device and how to manage and delete them, visit www.allaboutcookies.org.
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h3>
                                        Online Advertising
                                    </h3>
                                    <p class="pargraph">

                                        gomla.online Online Services also uses Cookies and other technologies such as
                                        pixel tags, web beacons and clear GIF files, to help manage our online
                                        advertising program.  These technologies are provided by our ad management
                                        partners and enable them to recognize a unique Cookie that has been placed on
                                        your browser, which in turn enables us and these ad management partners to learn
                                        which advertisements bring users to gomla.online Online Services.  
                                    </p>
                                </div>
                            </div>


                            <br>
                            <br>

                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="heading">
                                        5.    Social Networking And Third Party Sites
                                    </h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">

                                    <p class="pargraph">


                                        When you link to gomla.online Online Services through any social networking or third party sites, applications or services, please remember that you are bound by the privacy policy of the social network or third-party site, application or service, and we do not control and are not responsible for the privacy practices of such sites. You should consult the privacy policy of such sites to determine the information practices of those sites.    </p>
                                </div>
                            </div>






                        </div>
                    </div>
                </div>
            </div>
        </div><!--main-container-->

    </div> <!--col1-layout-->



    <!-- For version 1,2,3,4,6 -->


@endsection


@section('javascript')
    <script src="{{url('/public/')}}/prasley/parsley.js"></script>



@endsection