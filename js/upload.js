window.onload = function(){

    let menuItems = document.querySelectorAll('#menu > li');
    const exitBtn = document.querySelector('#exit');
    const modal = document.querySelector('.modal');
    const showBtn = document.querySelector('.content__upload__btn');
    const thumbUpload = document.querySelector('#m_up');
    const videoUpload = document.querySelector('#input-file');

    for(i = 0; i < menuItems.length; i++){
        // console.log(menuItems.length);

        menuItems[i].addEventListener('click', function(){

            for(i = 0; i < menuItems.length; i++){
                menuItems[i].style.backgroundColor = 'transparent';
                menuItems[i].style.color = 'white';
            }

            document.querySelector('#dashboard__icon').src = './image/dachbord_icon/icon_wdashboard.png';
            document.querySelector('#content__icon').src = './image/dachbord_icon/icon_wcontent.png';

            select(this);
            // console.log(this);
        })
    }


    thumbUpload.addEventListener('change', function(event){
        let reader = new FileReader();
        reader.onload = function(){
            let dataURL = reader.result;
            let thumbnail = document.querySelector('.thumbnail');
            thumbnail.src = dataURL;
        };
        reader.readAsDataURL(event.target.files[0]);
    })

    videoUpload.addEventListener('change', function(event){
        let reader = new FileReader();
        reader.onload = function(){
            let dataURL = reader.result;
            let thumbnail = document.querySelector('.video__upload__div > video');
            thumbnail.src = dataURL;
        };
        reader.readAsDataURL(event.target.files[0]);
    })


    showBtn.addEventListener('click', function(){
        modal.style.display = 'flex';
        if(modal.style.display == 'flex') return;
    })

    exitBtn.addEventListener('click', function(){
        modal.style.display = 'none';
    })
}

// 선택된 시각 효과 함수
function select(thisItem){
    // console.log('select function is called');    // 함수 호출됬는지 확인용도

    thisItem.style.backgroundColor = '#504f4f';
    thisItem.style.color = '#2b2b2b';

    // console.log(thisItem.className);    // 클래스명 확인 용도

    if(thisItem.className == 'dashboard'){
        document.querySelector('#dashboard__icon').src = './image/dachbord_icon/icon_bdashboard.png';
    }else if(thisItem.className == 'content'){
        document.querySelector('#content__icon').src = './image/dachbord_icon/icon_bcontent.png';
    }


    resetLayout();
    changeContent(thisItem.className);
}

// 해당 창 보이기
function changeContent(selectedCon){

    document.querySelector('#right__side > section > #'+selectedCon).style.display = 'flex';
}

// 다른 창 숨기기
function resetLayout(){

    // console.log('reset');
    let resetList = document.querySelectorAll('.con');

    for(i = 0; i < resetList.length; i++){
        resetList[i].style.display = 'none';
    }
}

// 열린 창 끄기
function offLayout(selectedCon){
    document.querySelector('#right__side > section > #'+selectedCon).style.display = 'none';
}

// logout
function logout(){

}