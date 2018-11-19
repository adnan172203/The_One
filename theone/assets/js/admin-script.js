(function($){
	//Sidebar Add uploader js
	$(document).ready(function(){
		$('button#img_link_btn').live("click",function(){
			var button = $(this);
			var img_box = wp.media({
				'title' : 'Upload Add Image',
				'button' : {
					'text' : 'Set Image'
				},
				'multiple' : false
			});

			img_box.open();

			img_box.on("select",function(){
				var all_attr = img_box.state().get("selection").first().toJSON();
				var link = all_attr.url;

				/*button.parent().prev().childreen('input#url_link').val(link);*/
				button.parent().prev().children('input').val(link);
				button.parent().next().children('img').attr('src',link);

			});
		});
	});
}(jQuery))