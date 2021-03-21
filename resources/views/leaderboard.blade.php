@extends('layouts.layout')
@section('title')
    <title>Gaming Website | Leaderboard</title>
@endsection
@section('content')
    <div class="container"  style="max-width: 1600px">
        <ul class="nk-breadcrumbs">
            <li><a href="index.html">Home</a></li>
            <li><span class="fa fa-angle-right"></span></li>
            <li><span>Leaderboard</span></li>
        </ul>
    </div>
    <div class="nk-gap-1"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <select name="select" class="form-control">
                    <option value="1">ALL TIME</option>
                    <option value="2">LAST 30 DAYS</option>
                    <option value="3">LAST 7 DAYS</option>
                </select>
            </div>
            <div class="col-md-3">
                <select name="select" class="form-control">
                    <option value="1">XP</option>
                    <option value="2">Earnings</option>
                    <option value="3">Elite Trophy Count</option>
                    <option value="4">Gold Trophy Count</option>
                </select>
            </div>
            <div class="col-md-3">
                <select name="select" class="form-control">
                    <option value="1">All Platforms</option>
                    <option value="2">PC</option>
                    <option value="3">XBOX ONE</option>
                    <option value="4">MORE</option>
                    <option value="5">Cross-Platform</option>
                </select>
            </div>
            <div class="col-md-3">
                <select name="select" class="form-control">
                    <option value="1">All Games</option>
                    <option value="2">ColdWar</option>
                    <option value="3">Warzone</option>
                    <option value="4">Fortnite</option>
                    <option value="5">RoCo</option>
                    <option value="6">lol</option>
                    <option value="7">More</option>
                </select>
            </div>
        </div>
        <div class="nk-gap-1"></div>
        <table class="nk-table">
            <thead>
                <tr>
                    <th colspan="6">Leaderboard</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Rank</th>
                    <th>Name</th>
                    <th class="text-right">XP</th>
                    <th class="text-right">Earnings</th>
                    <th class="text-right">Elite Trophies</th>
                    <th class="text-right">Gold Trophies</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>
                        <img data-src="https://www.checkmategaming.com/resource/avatar/35301/1528592923.jpg" class="leaderboards-member-avatar lazyloaded" src="https://www.checkmategaming.com/resource/avatar/35301/1528592923.jpg"> <a href="https://www.checkmategaming.com/profile/35301/dominik" target="_blank" rel="nofollow">Dominik</a>
                    </td>
                    <td class="text-right">25601</td>
                    <td class="text-right">$25601</td>
                    <td class="text-right">293</td>
                    <td class="text-right">293</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>
                        <img data-src="https://www.checkmategaming.com/resource/avatar/35301/1528592923.jpg" class="leaderboards-member-avatar lazyloaded" src="https://www.checkmategaming.com/resource/avatar/35301/1528592923.jpg"> <a href="https://www.checkmategaming.com/profile/35301/dominik" target="_blank" rel="nofollow">Dominik</a>
                    </td>
                    <td class="text-right">15602</td>
                    <td class="text-right">$15602</td>
                    <td class="text-right">293</td>
                    <td class="text-right">293</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>
                        <img data-src="https://www.checkmategaming.com/resource/avatar/35301/1528592923.jpg" class="leaderboards-member-avatar lazyloaded" src="https://www.checkmategaming.com/resource/avatar/35301/1528592923.jpg"> <a href="https://www.checkmategaming.com/profile/35301/dominik" target="_blank" rel="nofollow">Dominik</a>
                    </td>
                    <td class="text-right">12304</td>
                    <td class="text-right">$15602</td>
                    <td class="text-right">293</td>
                    <td class="text-right">293</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>
                        <img data-src="https://www.checkmategaming.com/resource/avatar/35301/1528592923.jpg" class="leaderboards-member-avatar lazyloaded" src="https://www.checkmategaming.com/resource/avatar/35301/1528592923.jpg"> <a href="https://www.checkmategaming.com/profile/35301/dominik" target="_blank" rel="nofollow">Dominik</a>
                    </td>
                    <td class="text-right">15602</td>
                    <td class="text-right">$15602</td>
                    <td class="text-right">293</td>
                    <td class="text-right">293</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>
                        <img data-src="https://www.checkmategaming.com/resource/avatar/35301/1528592923.jpg" class="leaderboards-member-avatar lazyloaded" src="https://www.checkmategaming.com/resource/avatar/35301/1528592923.jpg"> <a href="https://www.checkmategaming.com/profile/35301/dominik" target="_blank" rel="nofollow">Dominik</a>
                    </td>
                    <td class="text-right">15602</td>
                    <td class="text-right">$15602</td>
                    <td class="text-right">293</td>
                    <td class="text-right">293</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
