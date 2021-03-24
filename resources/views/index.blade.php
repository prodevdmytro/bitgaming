@extends('layouts.layout')
@section('title')
    <title>Gaming Website | Homepage</title>
@endsection
@section('content')
    <!-- <link href="{{ url('assets/vendor/datatable/plugins/datatables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ url('assets/vendor/datatable/plugins/datatables.bootstrap.css') }}" rel="stylesheet" type="text/css" /> -->
    <div class="container" style="max-width: 1400px">

        <!-- START: Image Slider -->
        <div class="nk-image-slider" data-autoplay="8000">
            
            
            <div class="nk-image-slider-item">
                <img src="assets/images/slide-1.jpg" alt="" class="nk-image-slider-img" data-thumb="assets/images/slide-1-thumb.jpg">
                
                <div class="nk-image-slider-content">
                    
                        <h3 class="h4">As we Passed, I remarked</h3>
                        <p class="text-white">As we passed, I remarked a beautiful church-spire rising above some old elms in the park; and before them, in the midst of a lawn, chimneys covered with ivy, and the windows shining in the sun.</p>
                        <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">Read More</a>
                    
                </div>
                
            </div>
            
            <div class="nk-image-slider-item">
                <img src="assets/images/slide-2.jpg" alt="" class="nk-image-slider-img" data-thumb="assets/images/slide-2-thumb.jpg">
                
                <div class="nk-image-slider-content">
                    
                        <h3 class="h4">He made his passenger captain of one</h3>
                        <p class="text-white">Now the races of these two have been for some ages utterly extinct, and besides to discourse any further of them would not be at all to my purpose. But the concern I have most at heart is for our Corporation of Poets, from whom I am preparing a petition to your Highness,  to be subscribed with the names of one...</p>
                        <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">Read More</a>
                    
                </div>
                
            </div>
            
            <div class="nk-image-slider-item">
                <img src="assets/images/slide-3.jpg" alt="" class="nk-image-slider-img" data-thumb="assets/images/slide-3-thumb.jpg">
                
            </div>
            
            <div class="nk-image-slider-item">
                <img src="assets/images/slide-4.jpg" alt="" class="nk-image-slider-img" data-thumb="assets/images/slide-4-thumb.jpg">
                
                <div class="nk-image-slider-content">
                    
                        <h3 class="h4">At length one of them called out in a clear</h3>
                        <p class="text-white">TJust then her head struck against the roof of the hall: in fact she was now more than nine feet high...</p>
                        <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">Read More</a>
                    
                </div>
                
            </div>
            
            <div class="nk-image-slider-item">
                <img src="assets/images/slide-5.jpg" alt="" class="nk-image-slider-img" data-thumb="assets/images/slide-5-thumb.jpg">
                
                <div class="nk-image-slider-content">
                    
                        <h3 class="h4">For good, too though, in consequence</h3>
                        <p class="text-white">She gave my mother such a turn, that I have always been convinced I am indebted to Miss Betsey for having been born on a Friday. The word was appropriate to the moment.</p>
                        <p class="text-white">My mother was so much worse that Peggotty, coming in with the teaboard and candles, and seeing at a glance how ill she was, - as Miss Betsey might have done sooner if there had been light enough, - conveyed her upstairs to her own room with all speed; and immediately dispatched Ham Peggotty, her nephew, who had been for some days past secreted in the house...</p>
                        <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">Read More</a>
                    
                </div>
                
            </div>
            
        </div>
        <!-- END: Image Slider -->
    </div>
    <div class="container" style="max-width: 1600px">
        <!-- START: Top 10 Best Sellers -->
        <div class="nk-gap-3"></div>
        <div class="nk-carousel nk-carousel-x5" data-autoplay="5000" data-dots="false" data-cell-align="left" data-arrows="true">
            <div class="nk-carousel-inner">
               
                    <div class="card">
                        <div class="content" style="background-image: url({{ url('assets/images/product-1-xs.jpg') }});">
                            <h2 class="title">So saying he unbuckled</h2>
                        </div>
                    </div>

                    <div class="card">
                        <div class="content"  style="background-image: url({{ url('assets/images/product-2-xs.jpg') }});">
                            <h2 class="title">So saying he unbuckled</h2>
                        </div>
                    </div>

                    <div class="card">
                        <div class="content" style="background-image: url({{ url('assets/images/product-3-xs.jpg') }});">
                            <h2 class="title">So saying he unbuckled</h2>
                        </div>
                    </div>

                    <div class="card">
                        <div class="content" style="background-image: url({{ url('assets/images/product-4-xs.jpg') }});">
                            <h2 class="title">So saying he unbuckled</h2>
                        </div>
                    </div>

                    <div class="card">
                        <div class="content" style="background-image: url({{ url('assets/images/product-5-xs.jpg') }});">
                            <h2 class="title">So saying he unbuckled</h2>
                        </div>
                    </div>

                    <div class="card">
                        <div class="content" style="background-image: url({{ url('assets/images/product-6-xs.jpg') }});">
                            <h2 class="title">So saying he unbuckled</h2>
                        </div>
                    </div>

                    <div class="card">
                        <div class="content" style="background-image: url({{ url('assets/images/product-7-xs.jpg') }});">
                            <h2 class="title">So saying he unbuckled</h2>
                        </div>
                    </div>

                    <div class="card">
                        <div class="content" style="background-image: url({{ url('assets/images/product-8-xs.jpg') }});">
                            <h2 class="title">So saying he unbuckled</h2>
                        </div>
                    </div>

                    <div class="card">
                        <div class="content" style="background-image: url({{ url('assets/images/product-9-xs.jpg') }});">
                            <h2 class="title">So saying he unbuckled</h2>
                        </div>
                    </div>

            </div>
        </div>
        <!-- END: Top 10 Best Sellers -->

    </div>
    <div class="container" style="max-width:1440px">
        <!-- START: Latest Matches -->
        <div class="nk-gap-2"></div>
        <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Matche</span> Finder</span></h3>
        <div class="nk-gap"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="icon-settings font-dark"></i>
                            <div class="row">
                                <div class="col-md-6">
                                    <h6>Head to head matches where you pick the game, rules and prize.</h6>
                                </div>
                                <div class="col-md-3">
                                    <select name="select" class="form-control">
                                        <option value="1">Games</option>
                                        <option value="2">ModerWarfare</option>
                                        <option value="3">ColdWar</option>
                                        <option value="3">Warzone</option>
                                        <option value="3">Fortnite</option>
                                        <option value="3">ColdWarZombies</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select name="select" class="form-control">
                                        <option value="1">Platforms</option>
                                        <option value="2">PS4 & XB1</option>
                                        <option value="3">Cross-Platform</option>
                                    </select>
                                </div>
                            </div>
                            <div class="nk-gap-3"></div>
                        </div>
                        <div class="tools"> </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-bordered table-hover dt-responsive nk-table" width="100%" id="sample_1">
                            <thead>
                                <tr>
                                    <th class="all">GAME</th>
                                    <th class="desktop">PLATFORM</th>
                                    <th class="all">ENTRY</th>
                                    <th class="all">TEAM SIZE</th>
                                    <th class="desktop">COMPETITION</th>
                                    <th class="desktop">ALLOWED</th>
                                    <th class="desktop">SUPPORT</th>
                                    <th class="desktop">SERIES</th>
                                    <th class="desktop">STARTING</th>
                                    <th class="desktop">INFO</th>
                                    <th class="desktop"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle"><img class="game-cover ls-is-cached lazyloaded" src="https://www.checkmategaming.com/images/ladders/1614246187809.jpg" width="50px" height="50px"></td>
                                    <td class="align-middle">Cross-Platform</td>
                                    <td class="align-middle"><h3 class="text-main-1">$15</h3></td>
                                    <td class="align-middle">3V3</td>
                                    <td class="align-middle">Survival</td>
                                    <td class="align-middle">NA</td>
                                    <td class="align-middle">Live support</td>
                                    <td class="align-middle">Best of 1</td>
                                    <td class="align-middle">Available now</td>
                                    <td class="align-middle text-center text-main-1 fs-26"><i class="far fa-info-circle" data-toggle="tooltip" data-placement="top" title="PC players: Not Allowed!"></i></td>
                                    <td class="text-center align-middle">
                                        <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-primary">Accept</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle"><img class="game-cover ls-is-cached lazyloaded" src="https://www.checkmategaming.com/images/ladders/1614246187809.jpg" width="50px" height="50px"></td>
                                    <td class="align-middle">Cross-Platform</td>
                                    <td class="align-middle"><h3 class="text-main-1">$15</h3></td>
                                    <td class="align-middle">3V3</td>
                                    <td class="align-middle">Survival</td>
                                    <td class="align-middle">NA</td>
                                    <td class="align-middle">Live support</td>
                                    <td class="align-middle">Best of 1</td>
                                    <td class="align-middle">Available now</td>
                                    <td class="align-middle text-center text-main-1 fs-26"><i class="far fa-info-circle" data-toggle="tooltip" data-placement="top" title="PC players: Not Allowed!"></i></td>
                                    <td class="text-center align-middle">
                                        <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-primary">Accept</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle"><img class="game-cover ls-is-cached lazyloaded" src="https://www.checkmategaming.com/images/ladders/1614246187809.jpg" width="50px" height="50px"></td>
                                    <td class="align-middle">Cross-Platform</td>
                                    <td class="align-middle"><h3 class="text-main-1">$15</h3></td>
                                    <td class="align-middle">3V3</td>
                                    <td class="align-middle">Survival</td>
                                    <td class="align-middle">NA</td>
                                    <td class="align-middle">Live support</td>
                                    <td class="align-middle">Best of 1</td>
                                    <td class="align-middle">Available now</td>
                                    <td class="align-middle text-center text-main-1 fs-26"><i class="far fa-info-circle" data-toggle="tooltip" data-placement="top" title="PC players: Not Allowed!"></i></td>
                                    <td class="text-center align-middle">
                                        <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-primary">Accept</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle"><img class="game-cover ls-is-cached lazyloaded" src="https://www.checkmategaming.com/images/ladders/1614246187809.jpg" width="50px" height="50px"></td>
                                    <td class="align-middle">Cross-Platform</td>
                                    <td class="align-middle"><h3 class="text-main-1">$15</h3></td>
                                    <td class="align-middle">3V3</td>
                                    <td class="align-middle">Survival</td>
                                    <td class="align-middle">NA</td>
                                    <td class="align-middle">Live support</td>
                                    <td class="align-middle">Best of 1</td>
                                    <td class="align-middle">Available now</td>
                                    <td class="align-middle text-center text-main-1 fs-26"><i class="far fa-info-circle" data-toggle="tooltip" data-placement="top" title="PC players: Not Allowed!"></i></td>
                                    <td class="text-center align-middle">
                                        <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-primary">Accept</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-gap-2"></div>
        <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Today's</span> Tournaments</span></h3>
        <div class="nk-gap"></div>
        <div class="row justify-content-end">
            <div class="col-md-3">
                <select name="select" class="form-control">
                    <option value="1">Games</option>
                    <option value="2">ModerWarfare</option>
                    <option value="3">ColdWar</option>
                    <option value="3">Warzone</option>
                    <option value="3">Fortnite</option>
                    <option value="3">ColdWarZombies</option>
                </select>
            </div>
            <div class="col-md-3">
                <select name="select" class="form-control">
                    <option value="1">Platforms</option>
                    <option value="2">PS4 & XB1</option>
                    <option value="3">Cross-Platform</option>
                </select>
            </div>
            <div class="col-md-3">
                <select name="select" class="form-control">
                    <option value="1">More</option>
                    <option value="2">Elite</option>
                    <option value="3">Free</option>
                </select>
            </div>
        </div>
        <!-- END: Latest Matches -->
    </div>
    <div class="container">
        <div class="nk-gap-2"></div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 p-10">
                <div class="tournament-box">
                    <div class="col-sm-12 tournament-details">
                        <div class="tournament-cover-block">
                            <div class="cover-image" style="background-image: url(assets/images/team-3.jpg);">
                            <div class="prize-block">
                                <div class="rectangle"><p>$360</p></div>
                                <div class="arrow-down"><small>PRIZE</small></div>
                            </div>
                            <img src="https://www.checkmategaming.com/images/ladders/1600818007504.png" class="logo-image">
                        </div>
                    </div>
                    <div class="tournament-description-block">
                        <div class="name-block">
                            <p id="tournament-name-141450" class="tournament-name" data-toggle="tooltip" data-placement="top" title="2v2 Demolition Best of 3">2v2 Demolition Best of 3 2v2 Demolition Best of 3</p>
                            <div class="tournament-platform"><img src="https://www.checkmategaming.com/images/platforms/crossplatform.png"></div>
                            </div>
                            <div class="region-block">
                                <div class="region-content">
                                    <span class="start-date">Mar 19, 5:30 PM EDT</span>
                                    <span class="countdown-timer">
                                        <span>Starts in</span>
                                        <span>3M 44S</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="tournament-stats-block">
                            <div class="tournament-stats"><small>ENTRY/PLAYER</small> <p>    5 <span class="credits-info">credits</span></p></div>
                            <div class="tournament-stats"><small>TEAM SIZE</small> <p>2v2</p></div>
                            <div class="tournament-stats"><small>REGIONS</small> <p><span>    NA + EU    </span></p></div> 
                            <div class="tournament-stats tournament-stats-elo-level">
                                <div class="elo-levels-container">
                                    <div class="elo-skill-level-block">
                                        <span class="elo-skill-level" style="background-color: rgb(254, 157, 103);">Novice</span>
                                    </div>
                                    <div class="elo-skill-level-block">
                                        <span class="elo-skill-level" style="background-color: rgb(191, 191, 191);">Amateur</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="view-button-container">
                        <div class="view-tournament">
                            <a href="" class="mdl-button mdl-js-button css-ripple-effect">    View Tournament <i mi-name="arrow_forward" class="material-icons"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 p-10">
                <div class="tournament-box">
                    <div class="col-sm-12 tournament-details">
                        <div class="tournament-cover-block">
                            <div class="cover-image" style="background-image: url(assets/images/team-3.jpg);">
                            <div class="prize-block">
                                <div class="rectangle"><p>$360</p></div>
                                <div class="arrow-down"><small>PRIZE</small></div>
                            </div>
                            <img src="https://www.checkmategaming.com/images/ladders/1600818007504.png" class="logo-image">
                        </div>
                    </div>
                    <div class="tournament-description-block">
                        <div class="name-block">
                            <p id="tournament-name-141450" class="tournament-name" data-toggle="tooltip" data-placement="top" title="2v2 Demolition Best of 3">2v2 Demolition Best of 3 2v2 Demolition Best of 3</p>
                            <div class="tournament-platform"><img src="https://www.checkmategaming.com/images/platforms/crossplatform.png"></div>
                            </div>
                            <div class="region-block">
                                <div class="region-content">
                                    <span class="start-date">Mar 19, 5:30 PM EDT</span>
                                    <span class="countdown-timer">
                                        <span>Starts in</span>
                                        <span>3M 44S</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="tournament-stats-block">
                            <div class="tournament-stats"><small>ENTRY/PLAYER</small> <p>    5 <span class="credits-info">credits</span></p></div>
                            <div class="tournament-stats"><small>TEAM SIZE</small> <p>2v2</p></div>
                            <div class="tournament-stats"><small>REGIONS</small> <p><span>    NA + EU    </span></p></div> 
                            <div class="tournament-stats"><small>SKILL LEVEL</small> <p><span>    All    </span></p></div> 
                        </div>
                    </div>
                    <div class="view-button-container">
                        <div class="view-tournament">
                            <a href="" class="mdl-button mdl-js-button css-ripple-effect">    View Tournament <i mi-name="arrow_forward" class="material-icons"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 p-10">
                <div class="tournament-box">
                    <div class="col-sm-12 tournament-details">
                        <div class="tournament-cover-block">
                            <div class="cover-image" style="background-image: url(assets/images/team-3.jpg);">
                            <div class="prize-block">
                                <div class="rectangle"><p>$360</p></div>
                                <div class="arrow-down"><small>PRIZE</small></div>
                            </div>
                            <img src="https://www.checkmategaming.com/images/ladders/1600818007504.png" class="logo-image">
                        </div>
                    </div>
                    <div class="tournament-description-block">
                        <div class="name-block">
                            <p id="tournament-name-141450" class="tournament-name" data-toggle="tooltip" data-placement="top" title="2v2 Demolition Best of 3">2v2 Demolition Best of 3 2v2 Demolition Best of 3</p>
                            <div class="tournament-platform"><img src="https://www.checkmategaming.com/images/platforms/crossplatform.png"></div>
                            </div>
                            <div class="region-block">
                                <div class="region-content">
                                    <span class="start-date">Mar 19, 5:30 PM EDT</span>
                                    <span class="countdown-timer">
                                        <span>Starts in</span>
                                        <span>3M 44S</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="tournament-stats-block">
                            <div class="tournament-stats"><small>ENTRY/PLAYER</small> <p>    5 <span class="credits-info">credits</span></p></div>
                            <div class="tournament-stats"><small>TEAM SIZE</small> <p>2v2</p></div>
                            <div class="tournament-stats"><small>REGIONS</small> <p><span>    NA + EU    </span></p></div> 
                            <div class="tournament-stats"><small>SKILL LEVEL</small> <p><span>    All    </span></p></div> 
                        </div>
                    </div>
                    <div class="view-button-container">
                        <div class="view-tournament">
                            <a href="" class="mdl-button mdl-js-button css-ripple-effect">    View Tournament <i mi-name="arrow_forward" class="material-icons"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 p-10">
                <div class="tournament-box">
                    <div class="col-sm-12 tournament-details">
                        <div class="tournament-cover-block">
                            <div class="cover-image" style="background-image: url(assets/images/team-3.jpg);">
                            <div class="prize-block">
                                <div class="rectangle"><p>$360</p></div>
                                <div class="arrow-down"><small>PRIZE</small></div>
                            </div>
                            <img src="https://www.checkmategaming.com/images/ladders/1600818007504.png" class="logo-image">
                        </div>
                    </div>
                    <div class="tournament-description-block">
                        <div class="name-block">
                            <p id="tournament-name-141450" class="tournament-name" data-toggle="tooltip" data-placement="top" title="2v2 Demolition Best of 3">2v2 Demolition Best of 3 2v2 Demolition Best of 3</p>
                            <div class="tournament-platform"><img src="https://www.checkmategaming.com/images/platforms/crossplatform.png"></div>
                            </div>
                            <div class="region-block">
                                <div class="region-content">
                                    <span class="start-date">Mar 19, 5:30 PM EDT</span>
                                    <span class="countdown-timer">
                                        <span>Starts in</span>
                                        <span>3M 44S</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="tournament-stats-block">
                            <div class="tournament-stats"><small>ENTRY/PLAYER</small> <p>    5 <span class="credits-info">credits</span></p></div>
                            <div class="tournament-stats"><small>TEAM SIZE</small> <p>2v2</p></div>
                            <div class="tournament-stats"><small>REGIONS</small> <p><span>    NA + EU    </span></p></div> 
                            <div class="tournament-stats tournament-stats-elo-level">
                                <div class="elo-levels-container">
                                    <div class="elo-skill-level-block">
                                        <span class="elo-skill-level" style="background-color: rgb(254, 157, 103);">Novice</span>
                                    </div>
                                    <div class="elo-skill-level-block">
                                        <span class="elo-skill-level" style="background-color: rgb(191, 191, 191);">Amateur</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="view-button-container">
                        <div class="view-tournament">
                            <a href="" class="mdl-button mdl-js-button css-ripple-effect">    View Tournament <i mi-name="arrow_forward" class="material-icons"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="max-width: 1600px">
        <!-- START: Categories -->
        <div class="nk-gap-5"></div>
        <div class="row vertical-gap">
            <div class="col-lg-3 col-sm-6 col-6">
                <div class="nk-feature-2">
                    <div class="nk-feature-icon">
                        <img src="assets/images/icon-mouse.png" alt="">
                    </div>
                    <div class="nk-feature-icon">
                        <div class="nk-count h2 mb-0">18586</div>
                    </div>
                    <div class="nk-feature-cont text-center">
                        <h3 class="nk-feature-title"><span class="text-main-1">Clean</span> and Slick</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6">
                <div class="nk-feature-2">
                    <div class="nk-feature-icon">
                        <img src="assets/images/icon-mouse.png" alt="">
                    </div>
                    <div class="nk-feature-icon">
                        <div class="nk-count h2 mb-0">18586</div>
                    </div>
                    <div class="nk-feature-cont text-center">
                        <h3 class="nk-feature-title"><span class="text-main-1">Clean</span> and Slick</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6">
                <div class="nk-feature-2">
                    <div class="nk-feature-icon">
                        <img src="assets/images/icon-mouse.png" alt="">
                    </div>
                    <div class="nk-feature-icon">
                        <div class="nk-count h2 mb-0">18586</div>
                    </div>
                    <div class="nk-feature-cont text-center">
                        <h3 class="nk-feature-title"><span class="text-main-1">Clean</span> and Slick</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-6">
                <div class="nk-feature-2">
                    <div class="nk-feature-icon">
                        <img src="assets/images/icon-mouse.png" alt="">
                    </div>
                    <div class="nk-feature-icon">
                        <div class="nk-count h2 mb-0">18586</div>
                    </div>
                    <div class="nk-feature-cont text-center">
                        <h3 class="nk-feature-title"><span class="text-main-1">Clean</span> and Slick</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Categories -->
        <div class="nk-gap-5"></div>
        <div class="center-area">
            <h4 class="nk-decorated-h-4 m-0">JOIN THE FASTEST GROWING ESPORTS COMMUNITY</h4>
            <a href="#" class="nk-btn nk-btn-rounded nk-btn-outline nk-btn-color-warning ml-25">
                <span>Join Now</span>
                <span class="icon"><svg class="svg-inline--fa fa-css3 fa-w-16" aria-hidden="true" data-prefix="fab" data-icon="css3" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M480 32l-64 368-223.3 80L0 400l19.6-94.8h82l-8 40.6L210 390.2l134.1-44.4 18.8-97.1H29.5l16-82h333.7l10.5-52.7H56.3l16.3-82H480z"></path></svg><!-- <i class="fab fa-css3"></i> --></span>
            </a>
        </div>
        <div class="nk-gap-3"></div>
        <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Top players</span> Of the week</span></h3>
        <div class="nk-gap"></div>
        <div class="row">
            <div class="col-md-6">
                <h6>Placements reset every Sunday at 12 AM EST</h6>
            </div>
        </div>    
    </div>
    <div class="container" style="max-width: 1440px">
        <!-- START: Winners Section -->
        <div class="row winner-row">
            <div class="col-md-4">
                <h4 class="mt-30">Top Singles Team</h4>
                <div class="nk-team">
                    <div class="nk-team-logo">
                        <img src="assets/images/first-place-lg.jpg" alt="">
                    </div>
                    <div class="nk-team-cont">
                        <h3 class="h5 mb-20"><span class="text-main-1">Team:</span> SK Telecom T1</h3>
                        <h4 class="h6 mb-5">Members:</h4>
                        <a href="#">Duke</a>, 
                        <a href="#">Bangi</a>, 
                        <a href="#">Faker</a>, 
                        <a href="#">Bang</a>, 
                        <a href="#">Wolf</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h4 class="mt-30">Top Duos Team</h4>
                <div class="nk-team">
                    <div class="nk-team-logo">
                        <img src="assets/images/first-place-lg.jpg" alt="">
                    </div>
                    <div class="nk-team-cont">
                        <h3 class="h5 mb-20"><span class="text-main-1">Team:</span> SK Telecom T1</h3>
                        <h4 class="h6 mb-5">Members:</h4>
                        <a href="#">Duke</a>, 
                        <a href="#">Bangi</a>, 
                        <a href="#">Faker</a>, 
                        <a href="#">Bang</a>, 
                        <a href="#">Wolf</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h4 class="mt-30">Top Full Team</h4>
                <div class="nk-team">
                    <div class="nk-team-logo">
                        <img src="assets/images/first-place-lg.jpg" alt="">
                    </div>
                    <div class="nk-team-cont">
                        <h3 class="h5 mb-20"><span class="text-main-1">Team:</span> SK Telecom T1</h3>
                        <h4 class="h6 mb-5">Members:</h4>
                        <a href="#">Duke</a>, 
                        <a href="#">Bangi</a>, 
                        <a href="#">Faker</a>, 
                        <a href="#">Bang</a>, 
                        <a href="#">Wolf</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Winners Section -->
    </div>
    <div class="container" style="max-width: 1600px">
        <!-- START: Latest News -->
        <div class="nk-gap-5"></div>
        <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Latest</span> News</span></h3>
        <div class="nk-gap"></div>

        <div class="nk-news-box">
            <div class="nk-news-box-list">
                <div class="nano">
                    <div class="nano-content">
                        
                        
                        <div class="nk-news-box-item nk-news-box-item-active">
                            <div class="nk-news-box-item-img">
                                <img src="assets/images/post-1-sm.jpg" alt="Smell magic in the air. Or maybe barbecue">
                            </div>
                            <img src="assets/images/post-1.jpg" alt="Smell magic in the air. Or maybe barbecue" class="nk-news-box-item-full-img">
                            <h3 class="nk-news-box-item-title">Smell magic in the air. Or maybe barbecue</h3>
                            
                            <span class="nk-news-box-item-categories">
                                <span class="bg-main-4">MMO</span>
                            </span>
                            
                            <div class="nk-news-box-item-text">
                                <p>With what mingled joy and sorrow do I take up the pen to write to my dearest friend! Oh, what a change between to-day and yesterday! Now I am friendless and alone...</p>
                            </div>
                            <a href="blog-article.html" class="nk-news-box-item-url">Read More</a>
                            <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Sep 18, 2020</div>
                        </div>
                        
                        
                        <div class="nk-news-box-item">
                            <div class="nk-news-box-item-img">
                                <img src="assets/images/post-2-sm.jpg" alt="Grab your sword and fight the Horde">
                            </div>
                            <img src="assets/images/post-2.jpg" alt="Grab your sword and fight the Horde" class="nk-news-box-item-full-img">
                            <h3 class="nk-news-box-item-title">Grab your sword and fight the Horde</h3>
                            
                            <span class="nk-news-box-item-categories">
                                <span class="bg-main-1">Action</span>
                            </span>
                            
                            <div class="nk-news-box-item-text">
                                <p>For good, too; though, in consequence of my previous emotions, I was still occasionally seized with a stormy sob . After we had jogged on for some little time, I asked the carrier...</p>
                            </div>
                            <a href="blog-article.html" class="nk-news-box-item-url">Read More</a>
                            <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Sep 5, 2020</div>
                        </div>
                        
                        
                        <div class="nk-news-box-item">
                            <div class="nk-news-box-item-img">
                                <img src="assets/images/post-3-sm.jpg" alt="We found a witch! May we burn her?">
                            </div>
                            <img src="assets/images/post-3.jpg" alt="We found a witch! May we burn her?" class="nk-news-box-item-full-img">
                            <h3 class="nk-news-box-item-title">We found a witch! May we burn her?</h3>
                            
                            <span class="nk-news-box-item-categories">
                                <span class="bg-main-2">Adventure</span>
                            </span>
                            
                            <div class="nk-news-box-item-text">
                                <p>And she went on planning to herself how she would manage it. `They must go by the carrier,' she thought; `and how funny it'll seem, sending presents to one's own feet!...</p>
                            </div>
                            <a href="blog-article.html" class="nk-news-box-item-url">Read More</a>
                            <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Aug 27, 2020</div>
                        </div>
                        
                        
                        <div class="nk-news-box-item">
                            <div class="nk-news-box-item-img">
                                <img src="assets/images/post-4-sm.jpg" alt="For good, too though, in consequence">
                            </div>
                            <img src="assets/images/post-4.jpg" alt="For good, too though, in consequence" class="nk-news-box-item-full-img">
                            <h3 class="nk-news-box-item-title">For good, too though, in consequence</h3>
                            
                            <span class="nk-news-box-item-categories">
                                <span class="bg-main-3">Strategy</span>
                            </span>
                            
                            <div class="nk-news-box-item-text">
                                <p>This little wandering journey, without settled place of abode, had been so unpleasant to me, that my own house, as I called it to myself, was a perfect settlement to me compared to that...</p>
                            </div>
                            <a href="blog-article.html" class="nk-news-box-item-url">Read More</a>
                            <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Aug 14, 2020</div>
                        </div>
                        
                        
                        <div class="nk-news-box-item">
                            <div class="nk-news-box-item-img">
                                <img src="assets/images/post-5-sm.jpg" alt="He made his passenger captain of one">
                            </div>
                            <img src="assets/images/post-5.jpg" alt="He made his passenger captain of one" class="nk-news-box-item-full-img">
                            <h3 class="nk-news-box-item-title">He made his passenger captain of one</h3>
                            
                            <span class="nk-news-box-item-categories">
                                <span class="bg-main-5">Indie</span>
                            </span>
                            
                            <div class="nk-news-box-item-text">
                                <p>Just then her head struck against the roof of the hall: in fact she was now more than nine feet high, and she at once took up the little golden key and hurried off to the garden door...</p>
                            </div>
                            <a href="blog-article.html" class="nk-news-box-item-url">Read More</a>
                            <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Jul 23, 2020</div>
                        </div>
                        
                        
                        <div class="nk-news-box-item">
                            <div class="nk-news-box-item-img">
                                <img src="assets/images/post-6-sm.jpg" alt="At first, for some time, I was not able to answer">
                            </div>
                            <img src="assets/images/post-6.jpg" alt="At first, for some time, I was not able to answer" class="nk-news-box-item-full-img">
                            <h3 class="nk-news-box-item-title">At first, for some time, I was not able to answer</h3>
                            
                            <span class="nk-news-box-item-categories">
                                <span class="bg-main-5">Racing</span>
                            </span>
                            
                            <div class="nk-news-box-item-text">
                                <p>This little wandering journey, without settled place of abode, had been so unpleasant to me, that my own house, as I called it to myself, was a perfect settlement to me compared to that...</p>
                            </div>
                            <a href="blog-article.html" class="nk-news-box-item-url">Read More</a>
                            <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Jul 3, 2020</div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="nk-news-box-each-info">
                <div class="nano">
                    <div class="nano-content">
                        <!-- There will be inserted info about selected news-->
                        <div class="nk-news-box-item-image">
                            <img src="assets/images/post-1.jpg" alt="">
                            <span class="nk-news-box-item-categories">
                                <span class="bg-main-4">MMO</span>
                            </span>
                        </div>
                        <h3 class="nk-news-box-item-title">Smell magic in the air. Or maybe barbecue</h3>
                        <div class="nk-news-box-item-text">
                            <p>With what mingled joy and sorrow do I take up the pen to write to my dearest friend! Oh, what a change between to-day and yesterday! Now I am friendless and alone...</p>
                        </div>
                        <a href="blog-article.html" class="nk-news-box-item-more">Read More</a>
                        <div class="nk-news-box-item-date">
                            <span class="fa fa-calendar"></span> Sep 18, 2020
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Latest News -->
    </div>
        <script>
            $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip();   

                var est = new Date("Mar 20, 2021 15:57:25").getTime();
                est = est + 1500000;
                var object = $('.countdown-timer span:last-child');
                function countdowntimer(object, est) {
                    // Update the count down every 1 second
                    var x = setInterval(function() {
                        // Get today's date and time
                        var now = new Date().getTime();
                        var str = ['d', 'h', 'm', 's'];
                        // Find the distance between now and the count down date
                        var distance = est - now;
                        // Time calculations for days, hours, minutes and seconds
                        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                        var time_arr = [days, hours, minutes, seconds];
                        var result_str = "";
                        var str_length = 0;
                        for (i = 0; i < 4; i++) {
                            if(time_arr[i] != 0){
                                result_str += time_arr[i] + " " + str[i] + " ";
                                str_length ++;
                                if (str_length == 2)
                                    break;
                            }
                        }
                        // Output the result in an element with id="demo"
                        object.text(result_str);
                        if (distance < 0) {
                            clearInterval(x);
                            object.text("EXPIRED");
                        }
                    }, 1000);
                }
                countdowntimer(object, est);
            });
        </script>
        <script src="{{ url('assets/vendor/datatable/plugins/datatables.min.js') }}" type="text/javascript"></script>
        <script src="{{ url('assets/vendor/datatable/plugins/datatables.bootstrap.js') }}" type="text/javascript"></script>
        <script src="{{ url('assets/vendor/datatable/scripts/app.min.js') }}" type="text/javascript"></script>
        <script src="{{ url('assets/vendor/datatable/scripts/table-datatables-responsive.min.js') }}" type="text/javascript"></script>
        <script src="{{ url('assets/vendor/datatable/scripts/demo.min.js') }}" type="text/javascript"></script>
@endsection
