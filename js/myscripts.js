//$(".wp-menu-name").hide();

/* $("span, p, div").each(function() {
    var text = $(this).text();
    text = text.replace("A", "B");
    $(this).text(text);
}); */

/* $("span, p, div").each(function() {
    var text = $(this).text();
    text = text.replace("Записи", "B");
    $(this).text(text);
} */

//$(".wp-menu-name").text.replace('', 'new');

//var replaced = $(".wp-menu-name").html().replace('Записи','qqq');
//$(".wp-menu-name").html(replaced);

//$(".wp-menu-name").html("Записи");


/* if ( $( ".wp-menu-name" ).html() == "Консоль" ) { 
console.log ( $( ".wp-menu-name" ).text() );
} */

//console.log ( $( ".wp-menu-name" ).text() );

$( ".wp-menu-name:contains('Записи')" ).html("Профессии");
$( ".page-title-action" ).html("Добавить новую профессию");
$( ".column-primary span" ).html("Профессии");