var active = "home";

function position() {
	var margintop = (window.innerHeight - 550) / 2;
	document.getElementById('header').style.marginTop=margintop + "px";
	document.getElementById('overlay').style.marginTop=margintop + "px";
	document.getElementById('visiblecontent').style.display="block";
}

function transition(target) {
	if (target != active) {
		document.getElementById(active).style.display="none";
		document.getElementById(target).style.display="block";
		active = target;		
	}
}

function player(url) {
	document.getElementById('normalcontent').style.display="none";
	document.getElementById('overlay2').style.paddingTop=((window.innerHeight - 97) / 2)+"px";
	document.getElementById('overlay2').style.display="block";
	document.getElementById('overlay').style.display="block";
	var opacity = 1;
	var fader = window.setInterval(function(){
		opacity = opacity - 0.025;
		document.getElementById('overlay2').style.opacity=opacity;
		if (opacity < 0) {
			clearInterval(fader);
			document.getElementById('overlay2').style.display="none";
			document.getElementById('overlay2').style.opacity=1;
		}

	},50);
	
	document.getElementById('overlay').innerHTML="<img id=\"playerclose\" src=\"images/close.png\" alt=\"close\" onmouseover=\"this.src='images/closehover.png';\" onmouseout=\"this.src='images/close.png';\" onclick=\"closeplayer()\" style=\"cursor:pointer;\"><iframe src=\"" + url + "\" style=\"height:558px;width:1110px;border:none;\"></iframe>";
}

function closeplayer() {
	document.getElementById('overlay').style.display="none";
	document.getElementById('normalcontent').style.display="block";
	document.getElementById('overlay').innerHTML="";
}

function social() {
	document.getElementById('share').style.display="none";
	document.getElementById('social').style.display="block";
	setTimeout(function () {
		document.getElementById('social').style.display="none";
    		document.getElementById('share').style.display="block";
	}, 5000);	
}

function loadXML() {
	var sender = document.getElementById('sender').value;
	var email = document.getElementById('email').value;
	var message = document.getElementById('message').value;
	var url = 'thanks.php?sender='+sender+'&email='+email+'&message='+message;

	var xmlhttp;
	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
 			xmlhttp=new XMLHttpRequest();
 		} else {
 			// code for IE6, IE5  
 			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
 		}
	xmlhttp.onreadystatechange=function() {
 			if ((xmlhttp.readyState == 4) && (xmlhttp.status == 200)) {
   				document.getElementById('thanks').innerHTML = xmlhttp.responseText;
   			}
 		}
 		xmlhttp.open("GET",url,true);
	xmlhttp.send();
}	

$(document).ready(function(){
    /* This code is executed after the DOM has been completely loaded */

    /* Changing thedefault easing effect - will affect the slideUp/slideDown methods: */
    $.easing.def = "easeOutBounce";

    /* Binding a click event handler to the links: */
    $('li.button a').click(function(e){

        /* Finding the drop down list that corresponds to the current section: */
        var dropDown = $(this).parent().next();

        /* Closing all other drop down sections, except the current one */
        $('.dropdown').not(dropDown).slideUp('slow');
        dropDown.slideToggle('slow');

        /* Preventing the default event (which would be to navigate the browser to the link's address) */
        e.preventDefault();
    })

    $('.jcarousel').jcarousel({
        auto: 1,
        visible: 3
    });

    $('.jcarousel-control-prev').click(function() {
	    $('.jcarousel').jcarousel('scroll', '-=1');
	});

	$('.jcarousel-control-next').click(function() {
	    $('.jcarousel').jcarousel('scroll', '+=1');
	});

});