	var thumbWidth = 265;

	$(document).ready(function() {
                $("#year").html(jahr);
		var html = "";
		$.each(demos, function(idx, ort) {
 			html += '<li class="city spacer"><a href="'+ort['link']+'">'+ort['name']+', '+ort['datum']+'</a><br>'+ort['ort']+'<br>'+ort['zeit']+'</li>';
		});
                $('#demo_liste').html(html);
		$("a[rel^='prettyPhoto']").prettyPhoto();

		$("ul.gallery").each(function(idx, val) {
			var first = $(val).children().first();
			first.clone().appendTo(val);
			var width = thumbWidth * $(val).children().size();
			$(val).css("width", width);
		});

		$("ul.gallery li").mousemove(function(e) {
			var next = $(this).parents().find("div.next");
			var prev = $(this).parents().find("div.prev");
			var gallery = $(this).parent();
			var marginleft = parseInt(gallery.css("margin-left"));
			var x = e.layerX + marginleft;
			if (x < thumbWidth/2) {
				next.css("display", "none");
				prev.css("display", "inline");
			} else {
				next.css("display", "inline");
				prev.css("display", "none");
			}
		});

		$("ul.gallery li").mouseout(function(e) {
			var next = $(this).parents().find("div.next");
			var prev = $(this).parents().find("div.prev");
			next.css("display", "none");
			prev.css("display", "none");
		});

		$("div.next").mouseover(function(e) {
			$(this).css("display", "inline");
		});
		$("div.next").mouseout(function(e) {
			$(this).css("display", "none");
		});
		$("div.next").click(function(e) {
			e.stopPropagation();
			var gallery = $(this).parent().find("ul.gallery");
			var width = parseInt(gallery.css("width"));
			var marginleft = parseInt(gallery.css("margin-left"));
			marginleft -= thumbWidth;
			if (marginleft*-1 >= width - thumbWidth) {
				gallery.animate({marginLeft: marginleft+'px'}, 400, 'swing', function() {
					gallery.css("margin-left", 0);
				});
			} else
				gallery.animate({marginLeft: marginleft+'px'});
		});

		$("div.prev").mouseover(function(e) {
			$(this).css("display", "inline");
		});
		$("div.prev").mouseout(function(e) {
			$(this).css("display", "none");
		});
		$("div.prev").click(function(e) {
			e.stopPropagation();
			var gallery = $(this).parent().find("ul.gallery");
			var width = parseInt(gallery.css("width"));
			var marginleft = parseInt(gallery.css("margin-left"));
			if (marginleft == 0) {
				var max = width - thumbWidth;
				max = max * -1;
				gallery.css("margin-left", max);
				marginleft = max + thumbWidth;
			} else {
				marginleft += thumbWidth;
			}
			gallery.animate({marginLeft: marginleft+'px'});
		});

		$("div.play").mouseover(function(e) {
			$(this).css("display", "inline");
		});
		$("div.play").mouseout(function(e) {
			$(this).css("display", "none");
		});
		$("div.play").click(function(e) {
			e.preventDefault();
			$(this).parent().find("a").click();
		});
		$("a.play").mouseover(function(e) {
			var play = $(this).parents().find("div.play");
			play.css("display", "inline");
		});
		$("a.play").mouseout(function(e) {
			var play = $(this).parents().find("div.play");
			play.css("display", "none");
		});
	});
