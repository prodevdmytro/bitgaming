@extends('layouts.layout')
@section('title')
    <title>Gaming Website | Profile page</title>
@endsection

@section('css')

<link rel="stylesheet" href="{{ asset('custom-assets/css/profile.css') }}">

@endsection

@section('content')
<div class="container">
    <ul class="nk-breadcrumbs">
        <li><a href="index.html">Home</a></li>
        <li><span class="fa fa-angle-right"></span></li>
        <li><span>My Profile</span></li>
    </ul>
</div>
<div class="nk-gap-1"></div>
<div class="container">
	<div class="profile-banner">
		<div class="profile-badge">
			<ul class="hc-left-menu-ul">
				<li>
					<a href="#">
						<i class="fas fa-user"></i> Edit Profile
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fas fa-cog"></i> Account Settings
					</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="container profile-page-container">
		<div class="profile-header">
			<div class="profile-header-left">
				<img class="photo" src="{{asset('custom-assets/image/photo1.jpg')}}"/>
			</div>
			<div class="profile-header-middle">
				<div class="profile-header-name">
				{{Auth::user()->name}}
				</div>
				<div class="profile-header-text">
				Profile views: 204
				</div>
				<div class="profile-header-text">
					Joined 05/01/2020
				</div>
			</div>
		</div>
	</div>
	<nav>
		<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
			<a class="nav-item nav-link active" id="nav-overview-tab" data-toggle="tab" href="#nav-overview" role="tab" aria-controls="nav-overview" aria-selected="true">Overview</a>
			<a class="nav-item nav-link" id="nav-teams-tab" data-toggle="tab" href="#nav-teams" role="tab" aria-controls="nav-teams" aria-selected="false">Teams</a>
			<a class="nav-item nav-link" id="nav-activity-tab" data-toggle="tab" href="#nav-activity" role="tab" aria-controls="nav-activity" aria-selected="false">Activity</a>
			<a class="nav-item nav-link" id="nav-stats-tab" data-toggle="tab" href="#nav-stats" role="tab" aria-controls="nav-stats" aria-selected="false">Stats</a>
			<a class="nav-item nav-link" id="nav-archievements-tab" data-toggle="tab" href="#nav-archievements" role="tab" aria-controls="nav-archievements" aria-selected="false">Archievements</a>
		</div>
	</nav>
	<div class="tab-content py-4 px-3 px-sm-0" id="nav-tabContent">
		<div class="tab-pane fade show active" id="nav-overview" role="tabpanel" aria-labelledby="nav-overview-tab">
			<div class="row">
				<div class="col-md-8">
					<div class="overview-panel">
						<div class="row">
							<div class="col-md-6 left-panel">
								<p>MOST PLAYED GAME</p>
								<h3>ATLANTA FAZE</h3>
								<p>OVERAL RECORD</p>
								<h1>0-0</h1>
							</div>
							<div class="col-md-6 right-panel">
								<p>TOTAL WINNINGS</p>
								<h3>$0.00</h3>
								<p>WIN PERCENT</p>
								<h3>$0.00</h3>
								<p>TOURNAMENT WINS</p>
								<div class="up-mp-trophys d-flex align-items-end">
									<div>
										<img src="{{asset('custom-assets/image/trophy/primetrophy2.png')}}"> x0
									</div>
									<div>
										<img src="{{asset('custom-assets/image/trophy/goldtrophy.png')}}"> x0
									</div>
									<div>
										<img src="{{asset('custom-assets/image/trophy/silvertrophy.png')}}"> x0
									</div>
									<div>
										<img src="{{asset('custom-assets/image/trophy/bronzetrophy.png')}}"> x0
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="overview-info">
						<h3>PERFORMANCE TREND</h3>
						<P>NO RECENT MATCHES</P>
						<h4>Recent Win Rate: <span>Unset</span></h4>
					</div>
				</div>
			</div>
			<span class="up-title">FEATURED ACHIEVEMENTS</span>
			<div class="row">
				<div class="col-12">
					<div class="vm-box"><p class="margin-0">{{Auth::user()->name}} does not have any achievements.</p></div>
				</div>
			</div>
			<span class="up-title">FEATURED MEDALS</span>
			<div class="row">
				<div class="col-12">
					<div class="vm-box"><p class="margin-0">{{Auth::user()->name}} does not have any medals.</p></div>
				</div>
			</div>
			<span class="up-title">RECENT ACTIVITY</span>
			<div class="row">
				<div class="col-12">
					<div class="vm-box"><p class="margin-0">{{Auth::user()->name}} does not have any matches.</p></div>
				</div>
			</div>
			<span class="up-title">FEATURED TEAMS</span>
			<div class="row">
				<div class="col-12">
					<div class="vm-box"><p class="margin-0">{{Auth::user()->name}} does not have any teams.</p></div>
				</div>
			</div>
		</div>
		<div class="tab-pane fade" id="nav-teams" role="tabpanel" aria-labelledby="nav-teams-tab">
			<h1 class="c-heading">{{Auth::user()->name}}'S TEAMS</h1>
			<div class="row">
				<div class="col-12">
					<div class="vm-box"><p class="margin-0">{{Auth::user()->name}} has not joined to any matches.</p></div>
				</div>
			</div>
		</div>
		<div class="tab-pane fade" id="nav-activity" role="tabpanel" aria-labelledby="nav-activity-tab">
			<h1 class="c-heading">{{Auth::user()->name}}'S MATCH ACTIVITY</h1>
			<div class="row">
				<div class="col-12">
					<div class="vm-box"><p class="margin-0">{{Auth::user()->name}} has not played any matches.</p></div>
				</div>
			</div>
		</div>
		<div class="tab-pane fade" id="nav-stats" role="tabpanel" aria-labelledby="nav-stats-tab">
			<h1 class="c-heading">{{Auth::user()->name}}'S GAME STATS</h1>
			<div class="row">
				<div class="col-12">
					<div class="vm-box"><p class="margin-0">You haven't played any games yet.</p></div>
				</div>
			</div>
		</div>
		<div class="tab-pane fade" id="nav-archievements" role="tabpanel" aria-labelledby="nav-archievements-tab">
			<h1 class="c-heading">{{Auth::user()->name}} ACHIEVEMENTS</h1>
			<div class="row">
				<div class="col-12">
					<div class="vm-box"><p class="margin-0">{{Auth::user()->name}} does not have any achievements.</p></div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('js')

<link rel="stylesheet" href="{{ asset('custom-assets/js/profile.js') }}">

@endsection