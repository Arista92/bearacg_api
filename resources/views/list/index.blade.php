@extends('layout.layout2')
@section('content')
<div id="data-title" data-title="Bear榜单"></div>
<div class="list-index-menu">
    <div class="list-index-menu-one" id="list-index-menu-manhua">漫画</div>
    <div class="list-index-menu-one" id="list-index-menu-tupian">图片</div>
    <div class="list-index-menu-one" id="list-index-menu-shipin">视频</div>
</div>

<div class="list-main" id="list-index-menu-manhua-content" style="display: block">
    @php
        echo view('list.manhua');
    @endphp
</div>
<div class="list-main" id="list-index-menu-tupian-content" style="display: none">
    @php
        echo view('list.tupian');
    @endphp
</div>
<div class="list-main" id="list-index-menu-shipin-content" style="display: none">
    @php
        echo view('list.shipin');
    @endphp
</div>





























@endsection