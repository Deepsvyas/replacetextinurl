<?php  
global $wp_query;//get variable from the url in wordpress

// //print_r($wp_query);
// echo '<pre>';
// print_r($wp_query->query);
// echo '</pre>';
if($wp_query->query['indicator']){
$indicator = str_replace(' s ' , '-',str_replace('-' , ' ',$wp_query->query['indicator']));
$subindicator = str_replace(' s ' , '-',str_replace('-' , ' ',$wp_query->query['subindicator']));
$indicator =str_replace('&' , '&amp;',$indicator);
$subindicator = str_replace('&' , '&amp;',$subindicator);
?>
<script type="text/javascript">
  	jQuery(window).load(function () {
		jQuery('select#indicator').find('option').each(function() {
			//alert(jQuery(this).html());
		    if(jQuery(this).html() == '<?php echo $indicator;?>'){
		    	jQuery('#indicator').val(jQuery(this).val());
		    	jQuery('#indicator').change();
		    	setTimeout(function(){ 
				    secondfun(); 
				}, 500);
		    	
		    }		    
		});
		
	});
	function secondfun(){
		jQuery('select#subindicator').find('option').each(function() {
		    if(jQuery(this).html() == '<?php echo $subindicator;?>'){
		    	jQuery('#subindicator').val(jQuery(this).val());
		    	jQuery('#subindicator').change();
		    	
		    }console.log(jQuery(this).val());		    
		});
	}
</script>
<?php }?>
<?php 
//funciton.php in wordpress
//add rewrite rule in to wordpress

function wpd_post_pagination_rasdfasdfasdfasdfasdfaewrites(){
    add_rewrite_rule(
        'cat/(.+)/indicator/(.+)/subindicator/(.+)/?$',
        'index.php?categories-new=$matches[1]&indicator=$matches[2]&subindicator=$matches[3]',
        'top'
    );
}
add_action( 'init', 'wpd_post_pagination_rasdfasdfasdfasdfasdfaewrites' );

//add query string variable into wordpress
function add_query_vars($vars) {
    $vars[] = "indicator";
    $vars[] = "subindicator";
    return $vars;

}
// hook add_query_vars function into query_vars
add_filter('query_vars', 'add_query_vars');
?>
