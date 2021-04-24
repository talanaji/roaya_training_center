<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	    <title><?=$page_title?></title>
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>public/assets/images/favicon.png">
    <title><?=$page_title?></title>
	<link rel="stylesheet" href="<?=base_url()?>public/assets/plugins/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>public/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
      <link rel="stylesheet" href="<?=base_url()?>public/assets/plugins/dropify/css/dropify.min.css">
    <link rel="stylesheet" href="<?=base_url()?>public/assets/plugins/summernote/dist/summernote.css"/>
	<link href="<?=base_url()?>public/assets/node_modules/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?=base_url()?>public/assets/css/style.min.css"/>
    <script src="<?=base_url()?>public/assets/bundles/lib.vendor.bundle.js"></script>
    <script src="<?=base_url()?>public/assets/bundles/dataTables.bundle.js"></script>
	<style>
        .xdsoft_datetimepicker{box-shadow:0 5px 15px -5px rgba(0,0,0,0.506);background:#fff;border-bottom:1px solid #bbb;border-left:1px solid #ccc;border-right:1px solid #ccc;border-top:1px solid #ccc;color:#333;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;padding:8px;padding-left:0;padding-top:2px;position:absolute;z-index:9999;-moz-box-sizing:border-box;box-sizing:border-box;display:none}.xdsoft_datetimepicker.xdsoft_rtl{padding:8px 0 8px 8px}.xdsoft_datetimepicker iframe{position:absolute;left:0;top:0;width:75px;height:210px;background:transparent;border:0}.xdsoft_datetimepicker button{border:none !important}.xdsoft_noselect{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none}.xdsoft_noselect::selection{background:transparent}.xdsoft_noselect::-moz-selection{background:transparent}.xdsoft_datetimepicker.xdsoft_inline{display:inline-block;position:static;box-shadow:none}.xdsoft_datetimepicker *{-moz-box-sizing:border-box;box-sizing:border-box;padding:0;margin:0}.xdsoft_datetimepicker .xdsoft_datepicker,.xdsoft_datetimepicker .xdsoft_timepicker{display:none}.xdsoft_datetimepicker .xdsoft_datepicker.active,.xdsoft_datetimepicker .xdsoft_timepicker.active{display:block}.xdsoft_datetimepicker .xdsoft_datepicker{width:224px;float:left;margin-left:8px}.xdsoft_datetimepicker.xdsoft_rtl .xdsoft_datepicker{float:right;margin-right:8px;margin-left:0}.xdsoft_datetimepicker.xdsoft_showweeks .xdsoft_datepicker{width:256px}.xdsoft_datetimepicker .xdsoft_timepicker{width:58px;float:left;text-align:center;margin-left:8px;margin-top:0}.xdsoft_datetimepicker.xdsoft_rtl .xdsoft_timepicker{float:right;margin-right:8px;margin-left:0}.xdsoft_datetimepicker .xdsoft_datepicker.active+.xdsoft_timepicker{margin-top:8px;margin-bottom:3px}.xdsoft_datetimepicker .xdsoft_monthpicker{position:relative;text-align:center}.xdsoft_datetimepicker .xdsoft_label i,.xdsoft_datetimepicker .xdsoft_prev,.xdsoft_datetimepicker .xdsoft_next,.xdsoft_datetimepicker .xdsoft_today_button{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAAAeCAYAAADaW7vzAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6Q0NBRjI1NjM0M0UwMTFFNDk4NkFGMzJFQkQzQjEwRUIiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6Q0NBRjI1NjQ0M0UwMTFFNDk4NkFGMzJFQkQzQjEwRUIiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpDQ0FGMjU2MTQzRTAxMUU0OTg2QUYzMkVCRDNCMTBFQiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpDQ0FGMjU2MjQzRTAxMUU0OTg2QUYzMkVCRDNCMTBFQiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PoNEP54AAAIOSURBVHja7Jq9TsMwEMcxrZD4WpBYeKUCe+kTMCACHZh4BFfHO/AAIHZGFhYkBBsSEqxsLCAgXKhbXYOTxh9pfJVP+qutnZ5s/5Lz2Y5I03QhWji2GIcgAokWgfCxNvcOCCGKqiSqhUp0laHOne05vdEyGMfkdxJDVjgwDlEQgYQBgx+ULJaWSXXS6r/ER5FBVR8VfGftTKcITNs+a1XpcFoExREIDF14AVIFxgQUS+h520cdud6wNkC0UBw6BCO/HoCYwBhD8QCkQ/x1mwDyD4plh4D6DDV0TAGyo4HcawLIBBSLDkHeH0Mg2yVP3l4TQMZQDDsEOl/MgHQqhMNuE0D+oBh0CIr8MAKyazBH9WyBuKxDWgbXfjNf32TZ1KWm/Ap1oSk/R53UtQ5xTh3LUlMmT8gt6g51Q9p+SobxgJQ/qmsfZhWywGFSl0yBjCLJCMgXail3b7+rumdVJ2YRss4cN+r6qAHDkPWjPjdJCF4n9RmAD/V9A/Wp4NQassDjwlB6XBiCxcJQWmZZb8THFilfy/lfrTvLghq2TqTHrRMTKNJ0sIhdo15RT+RpyWwFdY96UZ/LdQKBGjcXpcc1AlSFEfLmouD+1knuxBDUVrvOBmoOC/rEcN7OQxKVeJTCiAdUzUJhA2Oez9QTkp72OTVcxDcXY8iKNkxGAJXmJCOQwOa6dhyXsOa6XwEGAKdeb5ET3rQdAAAAAElFTkSuQmCC)}.xdsoft_datetimepicker .xdsoft_label i{opacity:.5;background-position:-92px -19px;display:inline-block;width:9px;height:20px;vertical-align:middle}.xdsoft_datetimepicker .xdsoft_prev{float:left;background-position:-20px 0}.xdsoft_datetimepicker .xdsoft_today_button{float:left;background-position:-70px 0;margin-left:5px}.xdsoft_datetimepicker .xdsoft_next{float:right;background-position:0 0}.xdsoft_datetimepicker .xdsoft_next,.xdsoft_datetimepicker .xdsoft_prev,.xdsoft_datetimepicker .xdsoft_today_button{background-color:transparent;background-repeat:no-repeat;border:0 none;cursor:pointer;display:block;height:30px;opacity:.5;-ms-filter:"alpha(opacity=50)";outline:medium none;overflow:hidden;padding:0;position:relative;text-indent:100%;white-space:nowrap;width:20px;min-width:0}.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_prev,.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_next{float:none;background-position:-40px -15px;height:15px;width:30px;display:block;margin-left:14px;margin-top:7px}.xdsoft_datetimepicker.xdsoft_rtl .xdsoft_timepicker .xdsoft_prev,.xdsoft_datetimepicker.xdsoft_rtl .xdsoft_timepicker .xdsoft_next{float:none;margin-left:0;margin-right:14px}.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_prev{background-position:-40px 0;margin-bottom:7px;margin-top:0}.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box{height:151px;overflow:hidden;border-bottom:1px solid #ddd}.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box>div>div{background:#f5f5f5;border-top:1px solid #ddd;color:#666;font-size:12px;text-align:center;border-collapse:collapse;cursor:pointer;border-bottom-width:0;height:25px;line-height:25px}.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box>div>div:first-child{border-top-width:0}.xdsoft_datetimepicker .xdsoft_today_button:hover,.xdsoft_datetimepicker .xdsoft_next:hover,.xdsoft_datetimepicker .xdsoft_prev:hover{opacity:1;-ms-filter:"alpha(opacity=100)"}.xdsoft_datetimepicker .xdsoft_label{display:inline;position:relative;z-index:9999;margin:0;padding:5px 3px;font-size:14px;line-height:20px;font-weight:bold;background-color:#fff;float:left;width:182px;text-align:center;cursor:pointer}.xdsoft_datetimepicker .xdsoft_label:hover>span{text-decoration:underline}.xdsoft_datetimepicker .xdsoft_label:hover i{opacity:1.0}.xdsoft_datetimepicker .xdsoft_label>.xdsoft_select{border:1px solid #ccc;position:absolute;right:0;top:30px;z-index:101;display:none;background:#fff;max-height:160px;overflow-y:hidden}.xdsoft_datetimepicker .xdsoft_label>.xdsoft_select.xdsoft_monthselect{right:-7px}.xdsoft_datetimepicker .xdsoft_label>.xdsoft_select.xdsoft_yearselect{right:2px}.xdsoft_datetimepicker .xdsoft_label>.xdsoft_select>div>.xdsoft_option:hover{color:#fff;background:#ff8000}.xdsoft_datetimepicker .xdsoft_label>.xdsoft_select>div>.xdsoft_option{padding:2px 10px 2px 5px;text-decoration:none !important}.xdsoft_datetimepicker .xdsoft_label>.xdsoft_select>div>.xdsoft_option.xdsoft_current{background:#3af;box-shadow:#178fe5 0 1px 3px 0 inset;color:#fff;font-weight:700}.xdsoft_datetimepicker .xdsoft_month{width:100px;text-align:right}.xdsoft_datetimepicker .xdsoft_calendar{clear:both}.xdsoft_datetimepicker .xdsoft_year{width:48px;margin-left:5px}.xdsoft_datetimepicker .xdsoft_calendar table{border-collapse:collapse;width:100%}.xdsoft_datetimepicker .xdsoft_calendar td>div{padding-right:5px}.xdsoft_datetimepicker .xdsoft_calendar th{height:25px}.xdsoft_datetimepicker .xdsoft_calendar td,.xdsoft_datetimepicker .xdsoft_calendar th{width:14.2857142%;background:#f5f5f5;border:1px solid #ddd;color:#666;font-size:12px;text-align:right;vertical-align:middle;padding:0;border-collapse:collapse;cursor:pointer;height:25px}.xdsoft_datetimepicker.xdsoft_showweeks .xdsoft_calendar td,.xdsoft_datetimepicker.xdsoft_showweeks .xdsoft_calendar th{width:12.5%}.xdsoft_datetimepicker .xdsoft_calendar th{background:#f1f1f1}.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_today{color:#3af}.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_highlighted_default{background:#ffe9d2;box-shadow:#ffb871 0 1px 4px 0 inset;color:#000}.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_highlighted_mint{background:#c1ffc9;box-shadow:#00dd1c 0 1px 4px 0 inset;color:#000}.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_default,.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_current,.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box>div>div.xdsoft_current{background:#3af;box-shadow:#178fe5 0 1px 3px 0 inset;color:#fff;font-weight:700}.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_other_month,.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_disabled,.xdsoft_datetimepicker .xdsoft_time_box>div>div.xdsoft_disabled{opacity:.5;-ms-filter:"alpha(opacity=50)";cursor:default}.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_other_month.xdsoft_disabled{opacity:.2;-ms-filter:"alpha(opacity=20)"}.xdsoft_datetimepicker .xdsoft_calendar td:hover,.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box>div>div:hover{color:#fff !important;background:#ff8000 !important;box-shadow:none !important}.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_current.xdsoft_disabled:hover,.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box>div>div.xdsoft_current.xdsoft_disabled:hover{background:#3af !important;box-shadow:#178fe5 0 1px 3px 0 inset !important;color:#fff !important}.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_disabled:hover,.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box>div>div.xdsoft_disabled:hover{color:inherit !important;background:inherit !important;box-shadow:inherit !important}.xdsoft_datetimepicker .xdsoft_calendar th{font-weight:700;text-align:center;color:#999;cursor:default}.xdsoft_datetimepicker .xdsoft_copyright{color:#ccc !important;font-size:10px;clear:both;float:none;margin-left:8px}.xdsoft_datetimepicker .xdsoft_copyright a{color:#eee !important}.xdsoft_datetimepicker .xdsoft_copyright a:hover{color:#aaa !important}.xdsoft_time_box{position:relative;border:1px solid #ccc}.xdsoft_scrollbar>.xdsoft_scroller{background:#ccc !important;height:20px;border-radius:3px}.xdsoft_scrollbar{position:absolute;width:7px;right:0;top:0;bottom:0;cursor:pointer}.xdsoft_datetimepicker.xdsoft_rtl .xdsoft_scrollbar{left:0;right:auto}.xdsoft_scroller_box{position:relative}.xdsoft_datetimepicker.xdsoft_dark{box-shadow:0 5px 15px -5px rgba(255,255,255,0.506);background:#000;border-bottom:1px solid #444;border-left:1px solid #333;border-right:1px solid #333;border-top:1px solid #333;color:#ccc}.xdsoft_datetimepicker.xdsoft_dark .xdsoft_timepicker .xdsoft_time_box{border-bottom:1px solid #222}.xdsoft_datetimepicker.xdsoft_dark .xdsoft_timepicker .xdsoft_time_box>div>div{background:#0a0a0a;border-top:1px solid #222;color:#999}.xdsoft_datetimepicker.xdsoft_dark .xdsoft_label{background-color:#000}.xdsoft_datetimepicker.xdsoft_dark .xdsoft_label>.xdsoft_select{border:1px solid #333;background:#000}.xdsoft_datetimepicker.xdsoft_dark .xdsoft_label>.xdsoft_select>div>.xdsoft_option:hover{color:#000;background:#007fff}.xdsoft_datetimepicker.xdsoft_dark .xdsoft_label>.xdsoft_select>div>.xdsoft_option.xdsoft_current{background:#c50;box-shadow:#b03e00 0 1px 3px 0 inset;color:#000}.xdsoft_datetimepicker.xdsoft_dark .xdsoft_label i,.xdsoft_datetimepicker.xdsoft_dark .xdsoft_prev,.xdsoft_datetimepicker.xdsoft_dark .xdsoft_next,.xdsoft_datetimepicker.xdsoft_dark .xdsoft_today_button{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAAAeCAYAAADaW7vzAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QUExQUUzOTA0M0UyMTFFNDlBM0FFQTJENTExRDVBODYiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6QUExQUUzOTE0M0UyMTFFNDlBM0FFQTJENTExRDVBODYiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpBQTFBRTM4RTQzRTIxMUU0OUEzQUVBMkQ1MTFENUE4NiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpBQTFBRTM4RjQzRTIxMUU0OUEzQUVBMkQ1MTFENUE4NiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pp0VxGEAAAIASURBVHja7JrNSgMxEMebtgh+3MSLr1T1Xn2CHoSKB08+QmR8Bx9A8e7RixdB9CKCoNdexIugxFlJa7rNZneTbLIpM/CnNLsdMvNjM8l0mRCiQ9Ye61IKCAgZAUnH+mU3MMZaHYChBnJUDzWOFZdVfc5+ZFLbrWDeXPwbxIqrLLfaeS0hEBVGIRQCEiZoHQwtlGSByCCdYBl8g8egTTAWoKQMRBRBcZxYlhzhKegqMOageErsCHVkk3hXIFooDgHB1KkHIHVgzKB4ADJQ/A1jAFmAYhkQqA5TOBtocrKrgXwQA8gcFIuAIO8sQSA7hidvPwaQGZSaAYHOUWJABhWWw2EMIH9QagQERU4SArJXo0ZZL18uvaxejXt/Em8xjVBXmvFr1KVm/AJ10tRe2XnraNqaJvKE3KHuUbfK1E+VHB0q40/y3sdQSxY4FHWeKJCunP8UyDdqJZenT3ntVV5jIYCAh20vT7ioP8tpf6E2lfEMwERe+whV1MHjwZB7PBiCxcGQWwKZKD62lfGNnP/1poFAA60T7rF1UgcKd2id3KDeUS+oLWV8DfWAepOfq00CgQabi9zjcgJVYVD7PVzQUAUGAQkbNJTBICDhgwYTjDYD6XeW08ZKh+A4pYkzenOxXUbvZcWz7E8ykRMnIHGX1XPl+1m2vPYpL+2qdb8CDAARlKFEz/ZVkAAAAABJRU5ErkJggg==)}.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td,.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar th{background:#0a0a0a;border:1px solid #222;color:#999}.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar th{background:#0e0e0e}.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td.xdsoft_today{color:#c50}.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td.xdsoft_highlighted_default{background:#ffe9d2;box-shadow:#ffb871 0 1px 4px 0 inset;color:#000}.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td.xdsoft_highlighted_mint{background:#c1ffc9;box-shadow:#00dd1c 0 1px 4px 0 inset;color:#000}.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td.xdsoft_default,.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td.xdsoft_current,.xdsoft_datetimepicker.xdsoft_dark .xdsoft_timepicker .xdsoft_time_box>div>div.xdsoft_current{background:#c50;box-shadow:#b03e00 0 1px 3px 0 inset;color:#000}.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td:hover,.xdsoft_datetimepicker.xdsoft_dark .xdsoft_timepicker .xdsoft_time_box>div>div:hover{color:#000 !important;background:#007fff !important}.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar th{color:#666}.xdsoft_datetimepicker.xdsoft_dark .xdsoft_copyright{color:#333 !important}.xdsoft_datetimepicker.xdsoft_dark .xdsoft_copyright a{color:#111 !important}.xdsoft_datetimepicker.xdsoft_dark .xdsoft_copyright a:hover{color:#555 !important}.xdsoft_dark .xdsoft_time_box{border:1px solid #333}.xdsoft_dark .xdsoft_scrollbar>.xdsoft_scroller{background:#333 !important}.xdsoft_datetimepicker .xdsoft_save_selected{display:block;border:1px solid #ddd !important;margin-top:5px;width:100%;color:#454551;font-size:13px}.xdsoft_datetimepicker .blue-gradient-button{font-family:"museo-sans","Book Antiqua",sans-serif;font-size:12px;font-weight:300;color:#82878c;height:28px;position:relative;padding:4px 17px 4px 33px;border:1px solid #d7d8da;background:-moz-linear-gradient(top,#fff 0,#f4f8fa 73%);background:-webkit-gradient(linear,left top,left bottom,color-stop(0,#fff),color-stop(73%,#f4f8fa));background:-webkit-linear-gradient(top,#fff 0,#f4f8fa 73%);background:-o-linear-gradient(top,#fff 0,#f4f8fa 73%);background:-ms-linear-gradient(top,#fff 0,#f4f8fa 73%);background:linear-gradient(to bottom,#fff 0,#f4f8fa 73%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff',endColorstr='#f4f8fa',GradientType=0)}.xdsoft_datetimepicker .blue-gradient-button:hover,.xdsoft_datetimepicker .blue-gradient-button:focus,.xdsoft_datetimepicker .blue-gradient-button:hover span,.xdsoft_datetimepicker .blue-gradient-button:focus span{color:#454551;background:-moz-linear-gradient(top,#f4f8fa 0,#FFF 73%);background:-webkit-gradient(linear,left top,left bottom,color-stop(0,#f4f8fa),color-stop(73%,#FFF));background:-webkit-linear-gradient(top,#f4f8fa 0,#FFF 73%);background:-o-linear-gradient(top,#f4f8fa 0,#FFF 73%);background:-ms-linear-gradient(top,#f4f8fa 0,#FFF 73%);background:linear-gradient(to bottom,#f4f8fa 0,#FFF 73%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f4f8fa',endColorstr='#FFF',GradientType=0)}
    </style>
	

  


<script type="text/javascript">

  $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
	function chkBox(selector)
	{
		if($(selector).is(":checked"))
		{
			return 1;
		}
		else{ return 0;}
	}
	function draw(url , selector )
	{
	    $('#example2').dataTable().fnDestroy();
		 $.ajax({
				url : url , 
				 beforeSend: function ( xhr )
				 {
					 xhr.overrideMimeType("text/plain; charset=utf-8");
				 } ,
				type: 'POST',  
				data:{random:Math.random()} ,  
				success:function(data) 
				 {
					 $(selector).html(data);
					 setTimeout(function(){
					       $('#example2').DataTable();
                        					     
					 },700);
				 }
			 });
	  }
	  function _PREFIX()
		{
		  return m_PREFIX = document.getElementById("_PRIFIX").value;
	    }
		function get_chkbox_val(selector)
		{
			if($(selector).is(":checked"))
			{
				return 1;
			}
			else{ return 0;}
		}
      	function fetch_all(url , selector)
		{  
			$.ajax({
			   url : url, 
			   type:'POST', 
			   data:{random:Math.random()} , 
			   success: function(data)
			   { $(selector).html(data);$('#example').DataTable();}
			 });
		}
		function fetch_per_params(url , selector ,  right_val , prfx_type , actv=-1)
		{
 			$.ajax({
			   url : url, 
			   type:'POST', 
			   data:{random:Math.random() , 
			      post_val    : right_val ,
				  prefix_type : prfx_type , 
				  active      : actv
			   } , 
			   success: function(data)
			   { $(selector).html(data);$('#example').DataTable();}
			 });
		}
			function draw_such_params(url , selector , params )
            {
                //var arr =  $("param_selector,param_selector").serialize()
                 $.ajax({
                        url : url ,
                         beforeSend: function ( xhr )
                         {
                             xhr.overrideMimeType("text/plain; charset=utf-8");
                         } ,
                        type: 'POST',
                        data:   params   ,
                        success:function(data)
                         {
                             $(selector).html(data);
                             setTimeout(function(){$('#example').DataTable();},700);
                         }
                     });
            }
    
		
</script>
</head>


<body class="font-muli rtl">
 <?php  
		      $menus = $this->main_model->get_menus(); 	
			$this->load->view('cp/alert');	
			 
		 ?>
<div id="main_content">
    <!-- Start Main top header -->
    <div id="header_top" class="header_top">
        <div class="container">
            <div class="hleft">
                <a class="header-brand" href="<?=base_url()?>/home">   
				<img src="<?=base_url()?>public/assets/images/roaya_logo.png" alt="homepage" class="dark-logo" /></a>
                <div class="dropdown">
                    <a href="javascript:void(0)" class="nav-link icon menu_toggle"><i class="fe fe-align-center"></i></a>
                    <a href="#" class="nav-link icon"><i class="fe fe-search" data-toggle="tooltip" data-placement="right" title="بحث ... "></i></a>
                    <a href="#"  class="nav-link icon app_inbox"><i class="fe fe-inbox" data-toggle="tooltip" data-placement="right" title="البريد"></i></a>
                    <a href="#"  class="nav-link icon app_file xs-hide"><i class="fe fe-folder" data-toggle="tooltip" data-placement="right" title="مدير الملفات"></i></a>
                    <a href="javascript:void(0)" class="nav-link icon settingbar"><i class="fe fe-settings"></i></a>
                </div>
            </div>
            <div class="hright">
                <a href="javascript:void(0)" class="nav-link icon right_tab"><i class="fe fe-align-right"></i></a>
                <a href="<?=base_url()?>/login.php" class="nav-link icon settingbar"><i class="fe fe-power"></i></a>                
            </div>
        </div>
    </div>
    <!-- Start Rightbar setting panel -->
    <div id="rightsidebar" class="right_sidebar">
        <a href="javascript:void(0)" class="p-3 settingbar float-right"><i class="fa fa-close"></i></a>
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Settings" aria-expanded="true">Settings</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#activity" aria-expanded="false">Activity</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane vivify fadeIn active" id="Settings" aria-expanded="true">
                <div class="mb-4">
                    <h6 class="font-14 font-weight-bold text-muted">Theme Color</h6>
                    <ul class="choose-skin list-unstyled mb-0">
                        <li data-theme="azure"><div class="azure"></div></li>
                        <li data-theme="indigo"><div class="indigo"></div></li>
                        <li data-theme="purple"><div class="purple"></div></li>
                        <li data-theme="orange"><div class="orange"></div></li>
                        <li data-theme="green"><div class="green"></div></li>
                        <li data-theme="cyan"><div class="cyan"></div></li>
                        <li data-theme="blush"><div class="blush"></div></li>
                        <li data-theme="white"><div class="bg-white"></div></li>
                    </ul>
                </div>
                <div class="mb-4">
                    <h6 class="font-14 font-weight-bold text-muted">Font Style</h6>
                    <div class="custom-controls-stacked font_setting">
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-muli" checked="">
                            <span class="custom-control-label">Muli Google Font</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-montserrat">
                            <span class="custom-control-label">Montserrat Google Font</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-poppins">
                            <span class="custom-control-label">Poppins Google Font</span>
                        </label>
                    </div>
                </div>
                <div>
                    <h6 class="font-14 font-weight-bold mt-4 text-muted">General Settings</h6>
                    <ul class="setting-list list-unstyled mt-1 setting_switch">
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Night Mode</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-darkmode">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Fix Navbar top</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-fixnavbar">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Header Dark</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-pageheader">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Min Sidebar Dark</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-min_sidebar">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Sidebar Dark</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-sidebar">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Icon Color</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-iconcolor">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Gradient Color</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-gradient">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Box Shadow</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-boxshadow">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">RTL Support</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-rtl">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Box Layout</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-boxlayout">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                    </ul>
                </div>
                <hr>
                <div class="form-group">
                    <label class="d-block">Storage <span class="float-right">77%</span></label>
                    <div class="progress progress-sm">
                        <div class="progress-bar" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                    </div>
                    <button type="button" class="btn btn-primary btn-block mt-3">Upgrade Storage</button>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane vivify fadeIn" id="activity" aria-expanded="false">
                <ul class="new_timeline mt-3">
                    <li>
                        <div class="bullet pink"></div>
                        <div class="time">11:00am</div>
                        <div class="desc">
                            <h3>Attendance</h3>
                            <h4>Computer Class</h4>
                        </div>
                    </li>
                    <li>
                        <div class="bullet pink"></div>
                        <div class="time">11:30am</div>
                        <div class="desc">
                            <h3>Added an interest</h3>
                            <h4>“Volunteer Activities”</h4>
                        </div>
                    </li>
                    <li>
                        <div class="bullet green"></div>
                        <div class="time">12:00pm</div>
                        <div class="desc">
                            <h3>Developer Team</h3>
                            <h4>Hangouts</h4>
                            <ul class="list-unstyled team-info margin-0 p-t-5">                                            
                                <li><img src="<?=base_url()?>public/assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                <li><img src="<?=base_url()?>public/assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                <li><img src="<?=base_url()?>public/assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                <li><img src="<?=base_url()?>public/assets/images/xs/avatar4.jpg" alt="Avatar"></li>                                            
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="bullet green"></div>
                        <div class="time">2:00pm</div>
                        <div class="desc">
                            <h3>Responded to need</h3>
                            <a href="javascript:void(0)">“In-Kind Opportunity”</a>
                        </div>
                    </li>
                    <li>
                        <div class="bullet orange"></div>
                        <div class="time">1:30pm</div>
                        <div class="desc">
                            <h3>Lunch Break</h3>
                        </div>
                    </li>
                    <li>
                        <div class="bullet green"></div>
                        <div class="time">2:38pm</div>
                        <div class="desc">
                            <h3>Finish</h3>
                            <h4>Go to Home</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
 
   
    <!-- Start Quick menu with more functio -->
    <div class="user_div">
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#righttab-statistics">احصائيات</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#righttab-Result">نتائج</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#righttab-Students">الطلاب</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#righttab-Todo">مهمات</a></li>
        </ul>
        <div class="tab-content mt-3">
            <div class="tab-pane fade show active" id="righttab-statistics" role="tabpanel">
                <div class="card">
                    <div class="card-body">
                        <div>الربح لهذا الشهر </div>
                        <div class="py-3 m-0 text-center h1 text-success">$79,452</div>
                        <div class="d-flex">
                            <span class="text-muted">نسبة المدفوعات</span>
                            <div class="ml-auto"><i class="fa fa-caret-up text-success"></i>4%</div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-3">
                                <div class="clearfix">
                                    <div class="float-left"><strong>$43,320</strong></div>
                                    <div class="float-right"><small class="text-muted">غير مدفوع</small></div>
                                </div>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar bg-azure" role="progressbar" style="width: 87%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li>
                                <div class="clearfix">
                                    <div class="float-left"><strong>$36,132</strong></div>
                                    <div class="float-right"><small class="text-muted">مدفوعات هذا الشهر</small></div>
                                </div>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar bg-green" role="progressbar" style="width: 80%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body top_counter">
                        <div class="icon bg-yellow"><i class="fa fa-users"></i> </div>
                        <div class="content">
                            <span>عدد الطلاب</span>
                            <h5 class="number mb-0">2,051</h5>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body top_counter">
                        <div class="icon bg-gray"><i class="fa fa-sitemap"></i> </div>
                        <div class="content">
                            <span>عدد الساعات التعليمية لهذا اليوم</span>
                            <h5 class="number mb-0">14</h5>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body top_counter">
                        <div class="icon bg-dark"><i class="fa fa-black-tie"></i> </div>
                        <div class="content">
                            <span>عدد الساعات التعليمية لهذا الشهر </span>
                            <h5 class="number mb-0">27</h5>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body top_counter">
                        <div class="icon bg-azure"><i class="fa fa-tags"></i> </div>
                        <div class="content">
                            <span>Total Courses</span>
                            <h5 class="number mb-0">31</h5>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body top_counter">
                        <div class="icon bg-pink"><i class="fa fa-credit-card"></i> </div>
                        <div class="content">
                            <span>Expense</span>
                            <h5 class="number mb-0">$7,254</h5>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body top_counter">
                        <div class="icon bg-green"><i class="fa fa-bank"></i> </div>
                        <div class="content">
                            <span>Total Income</span>
                            <h5 class="number mb-0">$27,852</h5>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body top_counter">
                        <div class="icon bg-cyan"><i class="fa fa-map-o"></i> </div>
                        <div class="content">
                            <span>Our Center</span>
                            <h5 class="number mb-0">52</h5>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body top_counter">
                        <div class="icon bg-indigo"><i class="fa fa-smile-o"></i> </div>
                        <div class="content">
                            <span>Smiley Face</span>
                            <h5 class="number mb-0">10K</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="righttab-Result" role="tabpanel">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Result 2019</h3>
                        <div class="card-options">
                            <a href="#"><i class="fa fa-file-excel-o" data-toggle="tooltip" title="Export Excel"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <div class="clearfix">
                                    <div class="float-left"><strong>87%</strong></div>
                                    <div class="float-right"><small class="text-muted">Art & Design</small></div>
                                </div>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar bg-azure" role="progressbar" style="width: 87%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="clearfix">
                                    <div class="float-left"><strong>80%</strong></div>
                                    <div class="float-right"><small class="text-muted">Fashion</small></div>
                                </div>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar bg-green" role="progressbar" style="width: 80%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="clearfix">
                                    <div class="float-left"><strong>63%</strong></div>
                                    <div class="float-right"><small class="text-muted">Sports Science</small></div>
                                </div>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar bg-orange" role="progressbar" style="width: 63%" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="clearfix">
                                    <div class="float-left"><strong>91%</strong></div>
                                    <div class="float-right"><small class="text-muted">Computers</small></div>
                                </div>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar bg-indigo" role="progressbar" style="width: 91%" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li>
                                <div class="clearfix">
                                    <div class="float-left"><strong>35%</strong></div>
                                    <div class="float-right"><small class="text-muted">Biological Sciences</small></div>
                                </div>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar bg-pink" role="progressbar" style="width: 35%" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <div class="row text-center">
                            <div class="col-6 border-right">
                                <label class="mb-0">Total Pass</label>
                                <div class="font-20 font-weight-bold">1,052</div>
                            </div>
                            <div class="col-6">
                                <label class="mb-0">Total Fail</label>
                                <div class="font-20 font-weight-bold">198</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Result 2018</h3>
                        <div class="card-options">
                            <a href="#"><i class="fa fa-file-excel-o" data-toggle="tooltip" title="Export Excel"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <div class="clearfix">
                                    <div class="float-left"><strong>80%</strong></div>
                                    <div class="float-right"><small class="text-muted">Fashion</small></div>
                                </div>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar bg-green" role="progressbar" style="width: 80%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="clearfix">
                                    <div class="float-left"><strong>87%</strong></div>
                                    <div class="float-right"><small class="text-muted">Art & Design</small></div>
                                </div>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar bg-azure" role="progressbar" style="width: 87%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="clearfix">
                                    <div class="float-left"><strong>91%</strong></div>
                                    <div class="float-right"><small class="text-muted">Computers</small></div>
                                </div>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar bg-indigo" role="progressbar" style="width: 91%" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="clearfix">
                                    <div class="float-left"><strong>35%</strong></div>
                                    <div class="float-right"><small class="text-muted">Biological Sciences</small></div>
                                </div>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar bg-pink" role="progressbar" style="width: 35%" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li>
                                <div class="clearfix">
                                    <div class="float-left"><strong>63%</strong></div>
                                    <div class="float-right"><small class="text-muted">Sports Science</small></div>
                                </div>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar bg-orange" role="progressbar" style="width: 63%" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <div class="row text-center">
                            <div class="col-6 border-right">
                                <label class="mb-0">Total Pass</label>
                                <div class="font-20 font-weight-bold">845</div>
                            </div>
                            <div class="col-6">
                                <label class="mb-0">Total Fail</label>
                                <div class="font-20 font-weight-bold">142</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="righttab-Students" role="tabpanel">
                <div id="users">
                    <div class="input-group mt-2 mb-2">
                        <input type="text" class="form-control search" placeholder="بحث طالب">
                    </div>
                    <ul class="right_chat list-unstyled list">
                        <li class="alfabet">A</li>
                        <li>
                            <a href="javascript:void(0);" class="media">
                                <img class="media-object" src="<?=base_url()?>public/assets/images/xs/avatar1.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Abigail Churchill</span>
                                    <span class="message">Art & Design</span>
                                </div>
                            </a>                            
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="media">
                                <img class="media-object" src="<?=base_url()?>public/assets/images/xs/avatar2.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Alexandra Carr</span>
                                    <span class="message">Fashion</span>
                                </div>
                            </a>                            
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="media">
                                <img class="media-object" src="<?=base_url()?>public/assets/images/xs/avatar3.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Alison Berry</span>
                                    <span class="message">Fashion</span>
                                </div>
                            </a>
                        </li>
                        <li class="alfabet">B</li>
                        <li>
                            <a href="javascript:void(0);" class="media">
                                <img class="media-object" src="<?=base_url()?>public/assets/images/xs/avatar4.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Bella Alan</span>
                                    <span class="message">Sports Science</span>
                                </div>
                            </a>
                        </li>
                        <li class="alfabet">C</li>
                        <li>
                            <a href="javascript:void(0);" class="media">
                                <img class="media-object" src="<?=base_url()?>public/assets/images/xs/avatar5.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Caroline Alan</span>
                                    <span class="message">Sports Science</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="media">
                                <img class="media-object" src="<?=base_url()?>public/assets/images/xs/avatar6.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Connor Campbell</span>
                                    <span class="message">Computers</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="media">
                                <img class="media-object" src="<?=base_url()?>public/assets/images/xs/avatar7.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Charles Campbell</span>
                                    <span class="message">Computers</span>
                                </div>
                            </a>
                        </li>
                        <li class="alfabet">D</li>
                        <li>
                            <a href="javascript:void(0);" class="media">
                                <img class="media-object" src="<?=base_url()?>public/assets/images/xs/avatar8.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Donna Hudson</span>
                                    <span class="message">Computers</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="media">
                                <img class="media-object" src="<?=base_url()?>public/assets/images/xs/avatar9.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Dylan Jones</span>
                                    <span class="message">Computers</span>
                                </div>
                            </a>
                        </li>
                        <li class="alfabet">G</li>
                        <li>
                            <a href="javascript:void(0);" class="media">
                                <img class="media-object" src="<?=base_url()?>public/assets/images/xs/avatar8.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Gordon Hudson</span>
                                    <span class="message">Sports Science</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="media">
                                <img class="media-object" src="<?=base_url()?>public/assets/images/xs/avatar9.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Gabrielle Walker</span>
                                    <span class="message">Computers</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="media">
                                <img class="media-object" src="<?=base_url()?>public/assets/images/xs/avatar10.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Gavin North</span>
                                    <span class="message">Computers</span>
                                </div>
                            </a>
                        </li>
                        <li class="alfabet">S</li>
                        <li>
                            <a href="javascript:void(0);" class="media">
                                <img class="media-object" src="<?=base_url()?>public/assets/images/xs/avatar1.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Stephanie Hudson</span>
                                    <span class="message">Sports Science</span>
                                </div>
                            </a>
                        </li>
                        <li class="alfabet">W</li>
                        <li>
                            <a href="javascript:void(0);" class="media">
                                <img class="media-object" src="<?=base_url()?>public/assets/images/xs/avatar1.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">William Paige</span>
                                    <span class="message">Fashion</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="user_chatbody chat_app">
                    <div class="card-header bline pt-1 pl-0 pr-0">
                        <h3 class="card-title">Abigail Churchill <small>Online</small></h3>
                        <div class="card-options">
                            <a href="javascript:void(0)" class="p-1" data-toggle="dropdown"><i class="fa fa-cog"></i></a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a class="dropdown-item active" href="#">Online</a>
                                <a class="dropdown-item" href="#">Away</a>
                                <a class="dropdown-item" href="#">Do not disturb</a>
                                <a class="dropdown-item" href="#">Invisible</a>
                            </div>
                            <a href="javascript:void(0)" class="p-1 chat_close"><i class="fa fa-close"></i></a>
                        </div>
                    </div>
                    <div class="chat_windows">
                        <ul class="mb-0">
                            <li class="other-message">
                                <img class="avatar mr-3" src="<?=base_url()?>public/assets/images/xs/avatar1.jpg" alt="avatar">
                                <div class="message">
                                    <p class="bg-light-blue">Are we meeting today?</p>
                                    <span class="time">10:10 AM, Today</span>
                                </div>
                            </li>    
                            <li class="other-message">
                                <img class="avatar mr-3" src="<?=base_url()?>public/assets/images/xs/avatar1.jpg" alt="avatar">
                                <div class="message">
                                    <p class="bg-light-blue">Hi Aiden, how are you? How is the project coming along?</p>
                                    <p class="bg-light-blue">Are we meeting today?</p>
                                    <span class="time">10:15 AM, Today</span>
                                </div>
                            </li>                                    
                            <li class="my-message">
                                <div class="message">
                                    <p class="bg-light-gray">Project has been already finished and I have results to show you.</p>
                                    <div class="file_folder">
                                        <a href="javascript:void(0);">
                                            <div class="icon">
                                                <i class="fa fa-file-excel-o text-success"></i>
                                            </div>
                                            <div class="file-name">
                                                <p class="mb-0 text-muted">Report2017.xls</p>
                                                <small>Size: 68KB</small>
                                            </div>
                                        </a>
                                    </div>
                                    <span class="time">10:17 AM, Today</span>
                                </div>
                            </li>
                            <li class="other-message">
                                <img class="avatar mr-3" src="<?=base_url()?>public/assets/images/xs/avatar1.jpg" alt="avatar">
                                <div class="message">
                                    <div class="media_img">
                                        <img src="<?=base_url()?>public/assets/images/gallery/1.jpg" class="w100 img-thumbnail" alt="">
                                        <img src="<?=base_url()?>public/assets/images/gallery/2.jpg" class="w100 img-thumbnail" alt="">
                                    </div>
                                    <span class="time">10:15 AM, Today</span>
                                </div>
                            </li> 
                            <li class="other-message">
                                <img class="avatar mr-3" src="<?=base_url()?>public/assets/images/xs/avatar1.jpg" alt="avatar">
                                <div class="message">                                            
                                    <p class="bg-light-blue">Are we meeting today I have results?</p>
                                    <span class="time">10:18 AM, Today</span>
                                </div>
                            </li>
                            <li class="my-message">
                                <div class="message">
                                    <p class="bg-light-gray">Well we have good budget for the project</p>
                                    <span class="time">10:25 AM, Today</span>
                                </div>
                            </li>
                        </ul>
                        <div class="chat-message clearfix">
                            <a href="javascript:void(0);"><i class="icon-camera"></i></a>
                            <a href="javascript:void(0);"><i class="icon-camcorder"></i></a>
                            <a href="javascript:void(0);"><i class="icon-paper-plane"></i></a>
                            <div class="input-group mb-0">
                                <input type="text" class="form-control" placeholder="Enter text here...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="righttab-Todo" role="tabpanel">
                <ul class="list-unstyled mb-0 todo_list">
                    <li>
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
                            <span class="custom-control-label">Report Panel Usag</span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                            <span class="custom-control-label">Report Panel Usag</span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
                            <span class="custom-control-label">New logo design for Angular Admin</span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                            <span class="custom-control-label">Design PSD files for Angular Admin</span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
                            <span class="custom-control-label">New logo design for Angular Admin</span>
                        </label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Start Main leftbar navigation -->
    <div id="left-sidebar" class="sidebar">
        <h5 class="brand-name">معهد رؤية<a href="javascript:void(0)" class="menu_option float-right"><i class="icon-grid font-16" data-toggle="tooltip" data-placement="left" title="تصغير القائمة"></i></a></h5>
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu-uni"><?=$this->lang->line("Main");?> </a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#menu-admin">ادارة</a></li>
        </ul>
        <div class="tab-content mt-3">
            <div class="tab-pane fade show active" id="menu-uni" role="tabpanel">
                <nav class="sidebar-nav">
                    <ul class="metismenu">
			 <li class="active"><a href="<?=base_url()?>home"><i class="fa fa-dashboard"></i><span><?php echo $this->lang->line("home_page");?></span></a></li>		
             <?php 
 			   if($this->main_model->get_settings('is_with_permission') == 1)
			   {
 			      if($this->session->userdata('User_type') == 1 && $this->session->userdata('User_code') == 1)
				   {
				    
					  foreach($menus as $me){
					 	 $scren = $this->main_model->get_screens($me->m_code);
						  if(count($scren) > 0 )
						  {
				 ?>   
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#menu<?=$me->m_code?>">
                      <i class="fa <?=$me->icon?>"></i><span><?=$me->m_name?></span></a>
					<ul id="menu<?=$me->m_code?>" class="collapse collapse-level-1">
                      <?php  foreach($scren as $scr){?>
						<li>
							<a href="<?=base_url().$scr->s_url?>" title="<?=$scr->s_symbol?>"><?=$scr->s_name?></a>
						</li>
						<?php  }?> 
					</ul>
				</li>
                <?php 
						  } 
					  }
				 	} 
				 else
					{
 						foreach($menus as $me)
						{
					 	   $scren = $this->main_model->get_perm_scr_menu($me->m_code);
							if(count($scren) > 0 )
							{
 						 ?>
						<li>
                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#menu<?=$me->m_code?>">
                                <div class="pull-left"><i class="zmdi zmdi-landscape mr-20"></i>
                                <span class="right-nav-text"><?=$me->m_name?></span></div>
                                <div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div>
                                <div class="clearfix"></div>
                             </a>
                            <ul id="menu<?=$me->m_code?>" class="collapse collapse-level-1">
                              <?php  foreach($scren as $scr){?>
                                <li>
                                    <a href="<?=base_url().$scr->s_url?>" title="<?=$scr->s_symbol?>"><?=$scr->s_name?></a>
                                </li>
                                <?php  }?> 
                            </ul>
                        </li>
					<?php 
							}
					   }
					
					}
			   }
				   else
				   {
					   echo 'in else ';
					   // Manual Screens 
				    	
				     }
				  ?>
                        
                    </ul>
                </nav>
            </div>
         
        </div>
    </div>
    <!-- Start project content area -->
    <div class="page">
        <!-- Start Page header -->
        <div class="section-body" id="page_top">
            <div class="container-fluid">
                <div class="page-header">
                    <div class="left">                        
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="عن ماذا تبحث .. ">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button">بحث</button>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                   
                        <div class="notification d-flex">    
                            <div class="dropdown d-flex">
                                <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge badge-success nav-unread"></span></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <ul class="right_chat list-unstyled w350 p-0">
                                        <li class="online">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object" src="<?=base_url()?>public/assets/images/xs/avatar4.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Donald Gardner</span>
                                                    <div class="message">It is a long established fact that a reader</div>
                                                    <small>11 mins ago</small>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="online">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object " src="<?=base_url()?>public/assets/images/xs/avatar5.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Wendy Keen</span>
                                                    <div class="message">There are many variations of passages of Lorem Ipsum</div>
                                                    <small>18 mins ago</small>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>                            
                                        </li>
                                        <li class="offline">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object " src="<?=base_url()?>public/assets/images/xs/avatar2.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Matt Rosales</span>
                                                    <div class="message">Contrary to popular belief, Lorem Ipsum is not simply</div>
                                                    <small>27 mins ago</small>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>                            
                                        </li>
                                        <li class="online">
                                            <a href="javascript:void(0);" class="media">
                                                <img class="media-object " src="<?=base_url()?>public/assets/images/xs/avatar3.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Phillip Smith</span>
                                                    <div class="message">It has roots in a piece of classical Latin literature from 45 BC</div>
                                                    <small>33 mins ago</small>
                                                    <span class="badge badge-outline status"></span>
                                                </div>
                                            </a>                            
                                        </li>                        
                                    </ul>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0)" class="dropdown-item text-center text-muted-dark readall">Mark all as read</a>
                                </div>
                            </div>
                            <div class="dropdown d-flex">
                                <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1" data-toggle="dropdown"><i class="fa fa-bell"></i><span class="badge badge-primary nav-unread"></span></a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <ul class="list-unstyled feeds_widget">
                                        <li>
                                            <div class="feeds-left">
                                                <span class="avatar avatar-blue"><i class="fa fa-check"></i></span>
                                            </div>
                                            <div class="feeds-body ml-3">
                                                <p class="text-muted mb-0">Campaign <strong class="text-blue font-weight-bold">Holiday</strong> is nearly reach budget limit.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="feeds-left">
                                                <span class="avatar avatar-green"><i class="fa fa-user"></i></span>
                                            </div>
                                            <div class="feeds-body ml-3">
                                                <p class="text-muted mb-0">New admission <strong class="text-green font-weight-bold">32</strong> in computer department.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="feeds-left">
                                                <span class="avatar avatar-red"><i class="fa fa-info"></i></span>
                                            </div>
                                            <div class="feeds-body ml-3">
                                                <p class="text-muted mb-0">6th sem result <strong class="text-red font-weight-bold">67%</strong> in computer department.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="feeds-left">
                                                <span class="avatar avatar-azure"><i class="fa fa-thumbs-o-up"></i></span>
                                            </div>
                                            <div class="feeds-body ml-3">
                                                <p class="text-muted mb-0">New Feedback <strong class="text-azure font-weight-bold">53</strong> for university assessment.</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0)" class="dropdown-item text-center text-muted-dark readall">Mark all as read</a>
                                </div>
                            </div>
                            <div class="dropdown d-flex">
                                <a href="javascript:void(0)" class="chip ml-3" data-toggle="dropdown">
                                    <span class="avatar" style="background-image: url(<?=base_url()?>public/assets/images/users/<?php if ($this->session->userdata('User_sex') =="Male")echo "2.png"; else echo "1.png";?>)"></span> <?=$this->session->userdata('User_fullname')?></a>

                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a class="dropdown-item" href="<?=base_url()?>Myaccount"><i class="dropdown-icon fe fe-user"></i><?= $this->lang->line("profile");?></a>
                                    <a class="dropdown-item" href="<?=base_url()?>Myaccount/options"><i class="dropdown-icon fe fe-settings"></i> <?= $this->lang->line("website_settings");?></a>
                                    <a class="dropdown-item" href="app-email.html"><span class="float-right"><span class="badge badge-primary">6</span></span><i class="dropdown-icon fe fe-mail"></i> <?= $this->lang->line("Inbox");?></a>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon fe fe-send"></i> <?= $this->lang->line("Message");?></a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon fe fe-help-circle"></i> <?= $this->lang->line("help");?></a>
                                    <a class="dropdown-item" href="login.html"><i class="dropdown-icon fe fe-log-out"></i> <?= $this->lang->line("LogOut");?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	
             
       