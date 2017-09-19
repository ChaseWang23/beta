// $(".menu-items a").on("click", function() {
//   $(".menu-items").find("li > .icon-thumbnail").removeClass("bg-success");
//   $(this).parent().addClass("bg-success");
// });

$(".menu-items>li").each(function() {
    var navItem = $(this);
    if (navItem.find("a").attr("href") == location.pathname.replace(/^.*[\\\/]/, '')) {
      navItem.find(".icon-thumbnail").addClass("bg-success");
    } else if (location.pathname.replace(/^.*[\\\/]/, '') == "buy_flight.php") {
      if (navItem.find("a").attr("href") == "flights.php") {
        navItem.find(".icon-thumbnail").addClass("bg-success");
      }
    } else if (location.pathname.replace(/^.*[\\\/]/, '') == "register_flight.php") {
      if (navItem.find("a").attr("href") == "flights.php") {
        navItem.find(".icon-thumbnail").addClass("bg-success");
      }
    } else if (location.pathname.replace(/^.*[\\\/]/, '') == "register_shipment.php") {
      if (navItem.find("a").attr("href") == "shipments.php") {
        navItem.find(".icon-thumbnail").addClass("bg-success");
      }
    } else if (location.pathname.replace(/^.*[\\\/]/, '') == "register_order.php") {
      if (navItem.find("a").attr("href") == "orders.php") {
        navItem.find(".icon-thumbnail").addClass("bg-success");
      }
    }
});


$('#nameDropdown').click(function(){

})

$('#buyFlight').click(function(){
  window.location.href = "buy_flight.php";
})

$('#createFlight').click(function(){
  window.location.href = "register_flight.php";
})

$('#createShipment').click(function(){
  window.location.href = "register_shipment.php";
})

$('#createOrder').click(function(){
  window.location.href = "register_order.php";
})

function buyFlight() {
  $.ajax({
    url: 'server/buy_flight_form.php',
     type: "POST",
    data: $('#flightInfo').serialize() + '&' +
          $('#userInfo').serialize() +
          '&finalPrice=' + $('#savingsSummary').html(),
    success: function(result) {
      data = JSON.parse(result);
      if (data.status == 'success') {
        window.location.href = "flights.php";
      } else {
        return false;
      }
    }
  });
}

function registerFlight() {
  $.ajax({
    url: 'server/register_flight_form.php',
     type: "POST",
    data: $('#depInfo').serialize() + '&' +
          $('#arriInfo').serialize() + '&' +
          $('#pricingInfo').serialize(),
    success: function(result) {
      data = JSON.parse(result);
      if (data.status == 'success') {
        window.location.href = "flights.php";
      } else {
        return false;
      }
    }
     });
};

function itemSummary() {
	$items = [];
	$('#items > div').each(function(){
		$item = {};
		$(this).find('input[type!=file]').each(function(){
			$item[$(this).attr('name')] = $(this).val();
		});
		$items.push($item);
	});
	return $items;
};

function registerShipment() {
  var items = itemSummary();
  $.ajax({
    url: 'server/register_shipment_form.php',
    type: 'POST',
    data: $('#senderInfo').serialize() + '&' +
          $('#receiverInfo').serialize() + '&items=' + JSON.stringify($items),
    success: function(result) {
      data = JSON.parse(result);
      if (data.status == 'success') {
        window.location.href = "shipments.php";
      } else {
        document.getElementById("testResult").innerHTML = "2";
      }
    }
  })
};



// Adds an empty row to order register page
// var itemIdCounter = 0;
var i = 1;
var original = document.getElementById('item #1');
function addItem() {
	// itemIdCounter ++;
	// $newItem = $("#item-template").clone()
	// $newItem.attr("id", "item-"+itemIdCounter).attr("class", "");
	// $newItem.appendTo($("#items"));
  //
	// // Code below triggers delete when quantity drop below 1
	// $newItem.find("input[name=quantity]").change(function(){
	// 	if ($(this).val() <= 0) {
	// 		removeItem($(this), $(this).parent().parent());
	// 	}
	// });

  // document.getElementById('createItem').onclick = duplicate;

  var clone = original.cloneNode(true); // "deep" clone
  clone.id = "Item #" + ++i; // there can only be one element with an ID
  $('#itemNumber').text(clone.id);
  original.parentNode.appendChild(clone);

  return false;
};

function getAirport(code) {
    switch (code) {
      case 'YYZ':
        airport = "YYZ - Toronto Pearson Airport";
        break;
      case 'SHA':
        airport = "SHA - Shanghai Pudong Airport";
        break;
  }
  return airport;
}
