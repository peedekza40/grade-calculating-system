/**
 * Created by jirayus on 7/9/2558.
 */
$( document ).ready(function() {
    $('.numberFormat').number( true, 2 ,'.',',');
    $('.numberOnly').number( true, 0,'','' );
});