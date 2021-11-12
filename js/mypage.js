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
}