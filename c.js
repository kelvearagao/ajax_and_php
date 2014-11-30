var entries = [
{
	"term": "CALAMITY",
	"part": "n.",
	"definition": "A more than commonly plain and..."
},
{
	"term": "CANNIBAL",
	"part": "n.",
	"definition": "A gastronome of the old school who..."
},
{
	"term": "CHILDHOOD",
	"part": "n.",
}
// and so on
];

var html = '';

$.each(entries, function() {
	html += '<div class="entry">';
	html += '<h3 class="term">' + this.term + '</h3>';
	html += '<div class="part">' + this.part + '</div>';
	html += '<div class="definition">' + this.definition + '</div>';
	html += '</div>';
});

$('#dictionary').html(html);