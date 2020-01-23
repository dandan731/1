<?php
function get_nCoV_news(){ $reg = '/<script id="getTimelineService">.+?window.getTimelineService\s=\s({.+?)}catch\(e\){}<\/script>/im'; if( preg_match( $reg , file_get_contents( 'https://3g.dxy.cn/newh5/view/pneumonia' ) , $out ) ) { return @json_decode( $out[1] , 1); } return false;}
function get_nCoV_province(){ $reg = '/<script id="getListByCountryTypeService1">.+?window.getListByCountryTypeService1\s=\s(\[.+?])}catch\(e\){}<\/script>/im'; if( preg_match( $reg , file_get_contents( 'https://3g.dxy.cn/newh5/view/pneumonia' ) , $out ) ) { return @json_decode( $out[1] , 1); } return false;}
?>
