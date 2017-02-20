@extends('layouts.master')

@section('title', 'Child page')

@section('content')
    <h4><small>INBOX</small></h4>
    <hr>
    <div style="padding-bottom: 20px;">
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" id="menu_sort_by">
                Sort by <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="menu_sort_by">
                <li><a href="#">Time</a></li>
                <li><a href="#">Sender</a></li>
            </ul>
        </div>
    </div>
    <div class="list-group">
        <a href="/detail" class="list-group-item" style="font-weight: bold;">Daily Report 14/02/2017 - Van Luu <span class="text-muted small">- Dear Mr Hieu, Food is my passion. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Th...</span> -Feb 14</a>
        <a href="/detail" class="list-group-item" style="font-weight: bold;">Daily Report 14/02/2017 - Van Luu <span class="text-muted small">- Dear Mr Hieu, Food is my passion. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Th...</span> -Feb 14</a>
        <a href="/detail" class="list-group-item" style="font-weight: bold;">Daily Report 14/02/2017 - Van Luu <span class="text-muted small">- Dear Mr Hieu, Food is my passion. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Th...</span> -Feb 14</a>
        <a href="/detail" class="list-group-item" style="font-weight: bold;">Daily Report 14/02/2017 - Van Luu <span class="text-muted small">- Dear Mr Hieu, Food is my passion. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Th...</span> -Feb 14</a>
        <a href="/detail" class="list-group-item" style="font-weight: bold;">Daily Report 14/02/2017 - Van Luu <span class="text-muted small">- Dear Mr Hieu, Food is my passion. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Th...</span> -Feb 14</a>
        <a href="/detail" class="list-group-item">Daily Report 14/02/2017 - Van Luu <span class="text-muted small">- Dear Mr Hieu, Food is my passion. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud...</span> -Feb 14</a>
        <a href="/detail" class="list-group-item">Daily Report 14/02/2017 - Van Luu <span class="text-muted small">- Dear Mr Hieu, Food is my passion. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud...</span> -Feb 14</a>
        <a href="/detail" class="list-group-item">Daily Report 14/02/2017 - Van Luu <span class="text-muted small">- Dear Mr Hieu, Food is my passion. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud...</span> -Feb 14</a>
        <a href="/detail" class="list-group-item">Daily Report 14/02/2017 - Van Luu <span class="text-muted small">- Dear Mr Hieu, Food is my passion. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud...</span> -Feb 14</a>
        <a href="/detail" class="list-group-item">Daily Report 14/02/2017 - Van Luu <span class="text-muted small">- Dear Mr Hieu, Food is my passion. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud...</span> -Feb 14</a>
        <a href="/detail" class="list-group-item">Daily Report 14/02/2017 - Van Luu <span class="text-muted small">- Dear Mr Hieu, Food is my passion. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud...</span> -Feb 14</a>
        <a href="/detail" class="list-group-item">Daily Report 14/02/2017 - Van Luu <span class="text-muted small">- Dear Mr Hieu, Food is my passion. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud...</span> -Feb 14</a>
    </div>
    <div class="text-center">
        <ul class="pagination">
            <li><a href="#">&lt;</a></li>
            <li><a href="#">&lt;&lt;</a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">&gt;</a></li>
            <li><a href="#">&gt;&gt;</a></li>
        </ul>
    </div>
@endsection