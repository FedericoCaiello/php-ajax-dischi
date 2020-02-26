const $ = require('jquery');
const Handlebars = require("handlebars");

$(document).ready(function(){
  $.ajax(
    {
      url:'http://localhost/php-ajax-dischi/server2.php',
      method:'GET',
      success: function (data){
        printResult(data);
      },
      error: function (request, state, errors) {
        alert('errore');
      }
    });
    $('.selezione').change(function(){
      var author = $(this).val();
      console.log(author);
      $.ajax(
        {
          url:'http://localhost/php-ajax-dischi/server2.php',
          method:'GET',
          data: {
            author: author
          },
          success: function (data){
            printResult(data);
          },
          error: function (request, state, errors) {
            alert('errore');
          }
        });
    });
});


function printResult (result) {
  reset();
  var source = $("#entry-template").html();
  var template = Handlebars.compile(source);
  for (var i = 0; i < result.length; i++) {
    if (result.length > 0) {
      var cd = result[i];
      console.log(result[i]);
      var context = {
        title: cd.title,
        author: cd.author,
        year: cd.year,
        poster: cd.poster
       };
      var html = template(context);
      $('.cds-container').append(html);
    }
    else {
      printResultNo();
    }
  }
}

function printResultNo() {
  var source = $("#entry-template").html();
  var template = Handlebars.compile(source);
  var html = template(context);
  $('.cds-container').append(html);
}
function reset () {
  $('.cds-container').html('');
}
