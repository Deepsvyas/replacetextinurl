# replacetextinurl
How to get current url
How to get selected dropdown option text
How to replace text in to url using jquery without refreshing


var changeurl = window.location.href;
jQuery('#indicator').change(function() {
        changeIndicator(+jQuery('#indicator').val());  
        setTimeout(function(){
            var indicator = jQuery('#indicator option:selected').text();  
            indicator = indicator.split(' - ').join('-s-');    
            indicator = indicator.split(' ').join('-');    
            var subindicator = jQuery('#subindicator option:selected').text();   
            subindicator = subindicator.split(' - ').join('-s-');    
            subindicator = subindicator.split(' ').join('-');  
            window.history.pushState('','',changeurl+"indicator/"+indicator+"/subindicator/"+subindicator);
        }, 500);
    });

    jQuery('#subindicator').change(function() {
        changeSubIndicator(+jQuery('#subindicator').val());    
        setTimeout(function(){
            var indicator = jQuery('#indicator option:selected').text();  
            indicator = indicator.split(' - ').join('-s-');    
            indicator = indicator.split(' ').join('-');    
            var subindicator = jQuery('#subindicator option:selected').text();   
            subindicator = subindicator.split(' - ').join('-s-');    
            subindicator = subindicator.split(' ').join('-');  
            window.history.pushState('','',changeurl+"indicator/"+indicator+"/subindicator/"+subindicator);
        }, 500);  
    });
