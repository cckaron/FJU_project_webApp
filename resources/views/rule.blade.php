@extends('layout.master')

@section('title')
    規則介紹
@endsection

@section('script')
    //<![CDATA[
    (function($){$.fn.basictable=function(options){var setup=function(table,data){var headings=[];if(data.tableWrap){table.wrap('<div class="bt-wrapper"></div>')}var format="";if(table.find("thead tr th").length){format="thead th"}else if(table.find("tbody tr th").length){format="tbody tr th"}else if(table.find("th").length){format="tr:first th"}else{format="tr:first td"}$.each(table.find(format),function(){var $heading=$(this);var colspan=parseInt($heading.attr("colspan"),10)||1;var row=$heading.closest("tr").index();if(!headings[row]){headings[row]=[]}for(var i=0;i<colspan;i++){headings[row].push($heading)}});$.each(table.find("tbody tr"),function(){setupRow($(this),headings,data)});$.each(table.find("tfoot tr"),function(){setupRow($(this),headings,data)})};var setupRow=function($row,headings,data){$row.children().each(function(){var $cell=$(this);if(($cell.html()===""||$cell.html()==="&nbsp;")&&!data.showEmptyCells){$cell.addClass("bt-hide")}else{var cellIndex=$cell.index();var headingText="";for(var j=0;j<headings.length;j++){if(j!=0){headingText+=": "}var $heading=headings[j][cellIndex];headingText+=$heading.text()}$cell.attr("data-th",headingText);if(data.contentWrap&&!$cell.children().hasClass("bt-content")){$cell.wrapInner('<span class="bt-content" />')}}})};var unwrap=function(table){$.each(table.find("td"),function(){var $cell=$(this);var content=$cell.children(".bt-content").html();$cell.html(content)})};var check=function(table,data){if(!data.forceResponsive){if(table.removeClass("bt").outerWidth()>table.parent().width()){start(table,data)}else{end(table,data)}}else{if(data.breakpoint!==null&&$(window).width()<=data.breakpoint||data.containerBreakpoint!==null&&table.parent().width()<=data.containerBreakpoint){start(table,data)}else{end(table,data)}}};var start=function(table,data){table.addClass("bt");if(data.tableWrap){table.parent(".bt-wrapper").addClass("active")}};var end=function(table,data){table.removeClass("bt");if(data.tableWrap){table.parent(".bt-wrapper").removeClass("active")}};var destroy=function(table,data){table.find("td").removeAttr("data-th");if(data.tableWrap){table.unwrap()}if(data.contentWrap){unwrap(table)}table.removeData("basictable")};var resize=function(table){if(table.data("basictable")){check(table,table.data("basictable"))}};this.each(function(){var table=$(this);if(table.length===0||table.data("basictable")){if(table.data("basictable")){if(options=="destroy"){destroy(table,table.data("basictable"))}else if(options==="start"){start(table,table.data("basictable"))}else if(options==="stop"){end(table,table.data("basictable"))}else{check(table,table.data("basictable"))}}return false}var settings=$.extend({},$.fn.basictable.defaults,options);var vars={breakpoint:settings.breakpoint,containerBreakpoint:settings.containerBreakpoint,contentWrap:settings.contentWrap,forceResponsive:settings.forceResponsive,noResize:settings.noResize,tableWrap:settings.tableWrap,showEmptyCells:settings.showEmptyCells};if(vars.breakpoint===null&&vars.containerBreakpoint===null){vars.breakpoint=568}table.data("basictable",vars);setup(table,table.data("basictable"));if(!vars.noResize){check(table,table.data("basictable"));$(window).bind("resize.basictable",function(){resize(table)})}})};$.fn.basictable.defaults={breakpoint:null,containerBreakpoint:null,contentWrap:true,forceResponsive:true,noResize:false,tableWrap:false,showEmptyCells:false}})(jQuery);
    //]]>
@endsection

@section('style')
    /*jQuery Basic Table, Author: Jerry Low*/
    table{background:white;border-collapse:collapse;width:80%;position: relative;top: 17px;left: 10%;}
    table tr,table th,table td{border:none;border-bottom:1px solid #e4ebeb;font-family:'Lato',sans-serif;font-size:.875rem}
    table th,table td{padding:10px 12px;text-align:left}
    table th{background:#FF8888;color:#ffffff;text-transform:uppercase}
    table tr td{background:#FFC8B4;color:#000000}
    table tr:nth-of-type(2n+2) td{background:#ffffff}
    table.bt tfoot th,table.bt tfoot td,table.bt tbody td{font-size:.8125rem;padding:0}
    table.bt tfoot th:before,table.bt tfoot td:before,table.bt tbody td:before{background:#56a2cf;color:white;margin-right:10px;padding:2px 10px}
    table.bt tfoot th .bt-content,table.bt tfoot td .bt-content,table.bt tbody td .bt-content{display:inline-block;padding:2px 5px}
    table.bt tfoot th:first-of-type:before,table.bt tfoot th:first-of-type .bt-content,table.bt tfoot td:first-of-type:before,table.bt tfoot td:first-of-type .bt-content,table.bt tbody td:first-of-type:before,table.bt tbody td:first-of-type .bt-content{padding-top:10px}
    table.bt tfoot th:last-of-type:before,table.bt tfoot th:last-of-type .bt-content,table.bt tfoot td:last-of-type:before,table.bt tfoot td:last-of-type .bt-content,table.bt tbody td:last-of-type:before,table.bt tbody td:last-of-type .bt-content{padding-bottom:10px}
    table.bt thead,table.bt tbody th{display:none}
    table.bt tfoot th,table.bt tfoot td,table.bt tbody td{border:none;display:block;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;vertical-align:top;float:left\9;width:100%\9}
    table.bt tfoot th::before,table.bt tfoot td::before,table.bt tbody td::before{content:attr(data-th) ":";display:inline-block;-webkit-flex-shrink:0;-ms-flex-shrink:0;flex-shrink:0;font-weight:bold;width:6.5em}
    table.bt tfoot th.bt-hide,table.bt tfoot td.bt-hide,table.bt tbody td.bt-hide{display:none}
    table.bt tfoot th .bt-content,table.bt tfoot td .bt-content,table.bt tbody td .bt-content{vertical-align:top}
    .bt-wrapper.active{max-height:310px;overflow:auto;-webkit-overflow-scrolling:touch}
@endsection

@section('content')
    <table id="RWD">
        <thead>
        <tr>
            <th>情境</th>
            <th>車子數量</th>
            <th>機車數量</th>
            <th>更改後綠燈秒數</th>
            <th>更改後紅燈秒數</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1+2鏡頭/3+4鏡頭</td>
            <td><10輛</td>
            <td><10輛</td>
            <td>原本秒數砍半</td>
            <td>原本秒數砍半</td>

        </tr>
        <tr>
            <td>1+2鏡頭/3+4鏡頭</td>
            <td><15輛</td>
            <td><15輛</td>
            <td>原本秒數-10秒</td>
            <td>原本秒數-10秒</td>

        </tr>
        <tr>
            <td>1+2鏡頭/3+4鏡頭</td>
            <td>>=15輛</td>
            <td>>=15輛</td>
            <td>秒數不變</td>
            <td>秒數不變</td>

        </tr>
        </tbody>
    </table>
@endsection
