$(document).ready(function () {

  $("#uploadForm").submit(function (event) {

    event.preventDefault();

    var name = $('#name').val();
    var email = $('#email').val();
    var message = $('#message').val();
    var signature = $('#hash').val();

    var dataArray = { name: name, email: email, message: message, signature: signature };
    var str = JSON.stringify(dataArray);
    var dataHex = toHex(str);


    $.ajax({
      type: "POST",
      url: 'api/v1/publish.php',
      data: { signature: signature, dataHex: dataHex },
      success: function (Response) {
        var x = Response;
        //x = JSON.parse(x);  
        //var tx_id = x.result;
        var link = "http://89.163.146.48/details.php?signature=" + x;
        $("#upload").hide();
        var qrcode = new QRCode("qrcode");
        qrcode.makeCode(link);
        $("#vlink").text(link);
        $("#vlink").attr("href", link);
        $("#qr").show();
      }
    });
  });

  $("#copyLongUrl").click(function () {
    var v = $("#vlink").text();
    copyStringToClipboard(v);

  });

  $("#shotUrl").click(function () {
    var v = $("#vlink").text();
    $.get("api/v1/shoturl.php?url=" + v, function (shorturl) {
      $("#vlink").text(shorturl);
      $("#vlink").attr("href", shorturl);
    });
  });
});

function toHex(str) {
  var arr = [];
  for (var i = 0, l = str.length; i < l; i++) {
    var hex = Number(str.charCodeAt(i)).toString(16);
    arr.push(hex.length > 1 && hex || "0" + hex);
  }
  return arr.join('');

}
