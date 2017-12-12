
// cookies
$(document).ready(function(){
    $("#cookies-container").delay(2000).fadeIn(500);
		});

		$(function() {

			  $(document).on("click",function (e) {
			     if ($("#cookies-container").is(":visible")) {
			       $("#cookies-container").fadeOut(500);
			     }
			  });
			});
// personal profile scripts.
function openSettings() {
	document.getElementById("settings-tab").style.display = "block";
}
function closeSettings() {
	document.getElementById("settings-tab").style.display = "none";
}
function openFriends() {
	document.getElementById("friends-tab").style.display = "block";
	document.getElementById("messenger-tab").style.display = "none";
}
function openMessenger() {
	document.getElementById("messenger-tab").style.display = "block";
	document.getElementById("friends-tab").style.display = "none";
}
function openProfile() {
	document.getElementById("friends-tab").style.display = "none";
	document.getElementById("messenger-tab").style.display = "none";
}
function openShop() {
	document.getElementById("shop-tab").style.display = "block";
}
function closeShop() {
	document.getElementById("shop-tab").style.display = "none";
}

// help box script
function showMsgBox(){
	document.getElementById("msg-box").style.display = "block";
}
$(document).ready(function(){
		
	$('.msg-bx-head').click(function(){
	$("#msg-box").hide();
});
});

/*var lastTimeID = 0;

$(document).ready(function() {
  $('#btnSend').click( function() {
    sendChatText();
    $('#chatInput').val("");
  });
  startChat();
});

function startChat(){
  setInterval( function() { getChatText(); }, 2000);
}

function getChatText() {
  $.ajax({
    type: "GET",
    url: "/refresh.php?lastTimeID=" + lastTimeID
  }).done( function( data )
  {
    var jsonData = JSON.parse(data);
    var jsonLength = jsonData.results.length;
    var html = "";
    for (var i = 0; i < jsonLength; i++) {
      var result = jsonData.results[i];
      html += '<div style="color: black;' + '">(' + result.chattime + ') <b>' + result.usrname +'</b>: ' + result.chattext + '</div>';
      lastTimeID = result.id;
    }
    $('#view_ajax').append(html);
  });
}

function sendChatText(){
  var chatInput = $('#chatInput').val();
  if(chatInput != ""){
    $.ajax({
      type: "GET",
      url: "/submit.php?chattext=" + encodeURIComponent( chatInput )
    });
  }
}*/

function stopTab(){
	document.querySelector('textarea').addEventListener('keydown', function (e) {
	    if (e.which == 9) {
	        e.preventDefault();
	    }
	});
}

// json scripts

var movieDBRequest = new XMLHttpRequest();
movieDBRequest.open('GET', './APi/Data/movies.json');

movieDBRequest.onload = function() {
	console.log(movieDBRequest.responseText);
}