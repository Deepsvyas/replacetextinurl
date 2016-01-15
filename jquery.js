<script>
var changeurl = window.location.href;//get current url
jQuery('#indicator').change(function() {
        changeIndicator(+jQuery('#indicator').val());  
        setTimeout(function(){
            var indicator = jQuery('#indicator option:selected').text(); //get selected dropdown text 
            indicator = indicator.split(' - ').join('-s-');    
            indicator = indicator.split(' ').join('-');    
            var subindicator = jQuery('#subindicator option:selected').text();  //get selected dropdown text  
            subindicator = subindicator.split(' - ').join('-s-');    
            subindicator = subindicator.split(' ').join('-');  
            window.history.pushState('','',changeurl+"indicator/"+indicator+"/subindicator/"+subindicator);//add text into url
        }, 500);
    });

    jQuery('#subindicator').change(function() {
        changeSubIndicator(+jQuery('#subindicator').val());    
        setTimeout(function(){
            var indicator = jQuery('#indicator option:selected').text();  //get selected dropdown text 
            indicator = indicator.split(' - ').join('-s-');    
            indicator = indicator.split(' ').join('-');    
            var subindicator = jQuery('#subindicator option:selected').text();  //get selected dropdown text  
            subindicator = subindicator.split(' - ').join('-s-');    
            subindicator = subindicator.split(' ').join('-');  
            window.history.pushState('','',changeurl+"indicator/"+indicator+"/subindicator/"+subindicator);//add text into url
        }, 500);  
    });
</script>
