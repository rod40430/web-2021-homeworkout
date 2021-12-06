window.onload = function(){
    $('.pay__plus').on('click', function(){
        ModalControl();
        console.log('asdf');
    });

    $('#cancle').on('click', function(){
        ModalControl();
        console.log('jkl;');
    });

    function ModalControl(){
        if($('#modal').css('display') == 'none'){
            $('#modal').css('display', 'block');
            console.log("1");
        }else{
            $('#modal').css('display', 'none');
            console.log("0");
        }
    }

    $(".user").on('click', function (){
		if($('.small__layout').css('display') == 'none'){
			$('.small__layout').css('display', 'flex');
		}
		else{
			$('.small__layout').css('display', 'none');
		}
	});
}