//$('.add_link').click(function(event) {
//    console.log(666);
//        Promise.all([get('views/form.php'),getJson('json/details.json')]).then(function(data){
//            console.log(JSON.parse(data[1]).name);
////            $('.name').val(JSON.parse(data[1]).name);
////            $('.lastName').val(JSON.parse(data[1]).lastName);
//        });  
//});
//
//function get(url) {
//	return new Promise(function(resolve) {
//		$.get(url, function(data) {
//		$('.containerForm').html(data);
//			resolve(data);
//		});
//	});
//}
//
//function getJson(url) {
//	return new Promise(function(resolve) {
//		$.get(url, function(data) {
//			resolve(JSON.stringify(data));
//		});
//	});
//}
//  
//
//
