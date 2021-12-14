// 수ㅜㅜㅜㅜㅜㅜㅜㅜㅜㅜㄴ 함수
function soon(){
    alert('SOOOOOOOOOOON');
}


// 네비 이동 함수
function Move(sectionId) {
	let offset = $("#" + sectionId).offset(); // 매개변수로 받은 값으로 아이디 추출

	// 저장된 위치까지 화면 스크롤 이동
	if(sectionId == "top"){
		$('html, body').stop().animate({
			scrollTop: offset.top
		}, 1000);
	}
	else if(sectionId == "recommend"){
		let destination = offset.top - 120;
		$('html, body').stop().animate({
			scrollTop: destination
		}, 1000);
	}
	else if(sectionId == "rank"){
		let destination = offset.top - 120;
		$('html, body').stop().animate({
			scrollTop: destination
		}, 1000);
	}
	else{
		alert('Empty destination : #' + sectionId);
	}
}


// 검색 창 보이게 하는 함수
function ShowBar(){
	console.log('A');

	// 검색창 보이기
	let showBar = {
		'opacity' : '100%',		// 투명도 100% = 잘 보인다
		'width' : '14vw'		// 넓이 뷰포트의 14%
	}

	// 검색창 가리기
	let offBar = {
		'opacity' : '0%',		// 투명도 0% = 안 보인다
		'width' : '1px'			// 넓이 1px
	}

	// 검색창의 넓이가 1px인 경우 보이도록 하고 아니면 가리기
	if($('.search__bar').css('opacity') == '0'){
		$('.search__bar').css(showBar);
		console.log("show");
		console.log($('.search__bar').css('width'));
	}
	else{
		$('.search__bar').css(offBar);
		console.log("hide");
		console.log($('.search__bar').css('width'));
	}
}


// 헤더 배경색상 변경 함수
$(window).scroll(function(){
	let targetTop = $('#recommend').offset();
	let styleObj = {
		'background-color' : '#161616'
	};

	if($(window).scrollTop() > 1){
		$('header').css(styleObj);
	}else{
		$('header').css('background', 'rgba(0, 0, 0, 0.287)');
	}

	if($(window).scrollTop() > targetTop.top){
		$('#top > video').get(0).pause();
	}else{
		$('#top > video').get(0).play();
	}
});


// 영상 모달창 키고 끄는 함수
$(document).ready(function () {

	$(".user").on('click', function (){
		if($('.small__layout').css('display') == 'none'){
			$('.small__layout').css('display', 'flex');
		}
		else{
			$('.small__layout').css('display', 'none');
		}
	});

	// li 클릭시
	$(".video__item").on('click', function () {
		$(".modal__layout").show();
		$("#infor__content").hide();
		$("body").css("overflow", "hidden");
	});

	$(".video__infor__layout").on('click', function () {
		$(".modal__layout").show();
		$("#video__player").hide();
		$("body").css("overflow", "hidden");
	});

	// X버튼 클릭시
	$("#exit").click(function() {
		if($(".modal__layout > #video__player").show()){
			$(".modal__layout").hide();
			$("body").css("overflow", "auto");

			// video태그 영상 정지 및 시간 초기화
			$("#video__player > video").get(0).pause();
			$("#video__player > video").get(0).currentTime = 0;
		}
		if($(".modal__layout > #infor__content").show()){
			$(".modal__layout").hide();
			$("body").css("overflow", "auto");
		}
	});
});

//로그아웃 
function logout() {
	const data = confirm("로그아웃 하시겠습니까?");
	if (data) {
		location.href = "./module/user.php?type=logout";
	}
}

// 각 리스트 아이템 시각 효과(?)
$(document).ready(function (){
	$('#start').on('click', function (){
		$('.top__video > .a').get(0).play();
	})

	$('.video__item').hover(function() {
        console.log('mouseover');
        $(this).children('.title__layout').css('opacity', '1');
        $(this).children('.title__layout').children('h3').css('left', '0%');
    }, function() {
        console.log('mouseleave');
        $(this).children('.title__layout').css('opacity', '0');
        $(this).children('.title__layout').children('h3').css('left', '-5%');
    })
});

// video items move
window.onload = function(){
	
	let header = document.querySelector('header');
	let ulVw = $('.video__layout').width();
	let distance = ulVw/header.offsetWidth*100;
	let isClick = 0;

	$('.left').hide();

	$('.right').on('click', function (){
		
		let findParentClass = $(this).parent().attr('class');
		let headerWidth = $('header').width();
		let targetWidth = $('.rank__video__line').width();
		
		// show
		$('.left').show();
		$('.btn__locate').css('justify-content', 'space-between');
		
		isClick++;
		// console.log(isClick);

		if(isClick == 1){

			// create item : 시험용 리스트 아이템 생성
			// for(i = 0; i < 6; i++){
			// 	if(findParentClass == "btn__locate h208__btn"){
			// 		$(this).parent().prev().append('<li><div class="h208__video video__item"></div></li>');
			// 	}
			// 	if(findParentClass == "btn__locate h260__btn"){
			// 		$(this).parent().prev().append('<li><div class="h260__video video__item"></div></li>');
			// 	}
			// }

			// move
			if(findParentClass == "btn__locate rank__btn"){

				let moveLocate = (targetWidth-headerWidth)/headerWidth*100+5;

				$(this).parent().prev().animate({
					left: '-' + moveLocate + '%'
				}, 400, function(){
					isClick = 0;
				});	
			}else{
				$(this).parent().prev().animate({
					left: '-=' + distance + '%'
				}, 400, function(){
					isClick = 0;
				});	
			}
			// console.log($(this).parent().prev().css('left'))
		}
	});
	
	$('.left__arrow').parent().on('click', function (){

		let findParentClass = $(this).parent().attr('class');

		if($(this).parent().prev().css('left') < '-1%' || $(this).parent().prev().css('left') > '0%'){
			$(this).parent().prev().animate({
				left: '0%'
			}, 100);

			$('.left').hide();
			$('.btn__locate').css('justify-content', 'flex-end');
			// console.log($(this).parent().prev().css('left'))
		}else{
			isClick++;
			if(isClick == 1){
	
				if(findParentClass == "btn__locate rank__btn"){
					$(this).parent().prev().animate({
						left: '0%'
					}, 400, function(){
						isClick = 0;
					});
				}else{
					$(this).parent().prev().animate({
						left: '+='+ distance +'%'
					}, 400, function(){
						isClick = 0;
					});
				}
			}
			// console.log($(this).parent().prev().css('left'))
		}
	});
}