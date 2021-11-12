// window.onload = function() {
// 	let randImg = new Array();
// 		randImg[randImg.length] = 'ball.jpg';
// 		randImg[randImg.length] = 'hr2.jpg';
// 		randImg[randImg.length] = 'muscle.jpg';
// 		randImg[randImg.length] = 'yoga.jpg';
// 		randImg[randImg.length] = 'stretch.jpg';
// 		randImg[randImg.length] = 'kid.jpg';
// 		randImg[randImg.length] = 'kid2.jpg';
// 		randImg[randImg.length] = 'yoga2.jpg';
// 		randImg[randImg.length] = 'c1.jpg';
// 		randImg[randImg.length] = 'ph.jpg';

// 		let randID = [1, 2, 3, 4];

// 		for(i = 0; i < randID.length; i++){

// 			let iDsize = Math.floor(Math.random()*(randID.length));
// 			let setImg = document.getElementById('testImg'+randID[iDsize]);

// 			for(j = 0; j < randImg.length; j++){

// 				let size = Math.floor(Math.random()*(randImg.length));
// 				setImg.setAttribute('src', './image/jpg/'+ randImg[size]);

// 			}
// 		}
// }


// 수ㅜㅜㅜㅜㅜㅜㅜㅜㅜㅜㄴ 함수
function soon(){
    alert('SOOOOOOOOOOON');
}


// 네비 이동 함수
function Move(sectionId) {
	let offset = $("#" + sectionId).offset(); // 각 색션의 위치 저장

	// 저장된 위치까지 화면 스크롤 이동
	$('html, body').stop().animate({
	  scrollTop: offset.top
	}, 1000);
}


// 검색 창 보이게 하는 함수
function ShowBar(){
	console.log('A');

	// 검색창 보이기
	let showBar = {
		'opacity' : '100%',
		'width' : '14vw'
	}

	// 검색창 가리기
	let offBar = {
		'opacity' : '0%',
		'width' : '1px'
	}

	// 검색창의 넓이가 1px인 경우 보이고 아니면 가리기
	if($('.search__bar').css('width') == '10px'){
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
	let todayTop = $('#today').offset();
	let styleObj = {
		'background-color' : '#161616'
	};

	if($(window).scrollTop() > todayTop.top - 120){
		$('header').css(styleObj);
		$('.top__video > video').get(0).pause();
	}else{
		$('header').css('background', 'rgba(0, 0, 0, 0.287)');
		$('.top__video > video').get(0).play();
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
	$(".video__thumb__layout").on('click', function () {
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
		location.href = "./php/logout.php";
	}
}

// 각 리스트 아이템 시각 효과(?)
$(document).ready(function (){
	$('#start').on('click', function (){
		$('.top__video > .a').get(0).play();
	})

	// 이동
	// let moveToAway = {
	// 	'left' : '-164%',
	// 	'top' : '-164%',
	// 	'transform' : 'rotate(-45deg)'
	// };

	let moveToDown = {
		'left' : '-135.6%',
		'top' : '-117.5%',
		'transform' : 'rotate(-49.45deg)'
	};

	// 복귀
	let moveToBack = {
		'left' : '-164%',
		'top' : '-164%',
		'transform' : 'rotate(-45deg)'
	}

	// top, left 0으로 위치
	// let moveToZero = {
	// 	'left' : '0',
	// 	'top' : '0'
	// };

	// 영상 썸네일 호버시 확대

	// let overExtended = {
	// 	transform: 'scale(1.1)'
	// }

	// let shrink = {
	// 	transform: 'scale(1)'
	// }

	// $(".video__thumb__layout").hover(function (){
	// 	$(this).parent('li').css(overExtended);

	// 	$('video', this)[0].currentTime = 30;
	// 	$('video', this)[0].play();

	// }, function (){
	// 	$(this).parent('li').css(shrink);

	// 	$('video', this)[0].pause();
	// });


	// 회전
	// let turn = {
	// 	'transform' : 'rotate(0deg)'
	// };

	// 회전 복귀
	// var reTurn = {
	// 	'transform' : 'rotate(-45deg)'
	// };


	// infor 아이콘 클릭시 요약 내용 보이기

	// let onOff = 1; // 1 = 내용 보이기 / 0 = 끄기

	$(document).on('click', '.infor__icon__layout', function (){

		// console.log(onOff);

		if($(this).children('.close__infor__icon').css('display') == 'none'){
			$(this).next().css(moveToDown);
			$(this).children('.infor__icon').hide();
			$(this).children('.close__infor__icon').css('display', 'flex');
			$(this).next().children('.video__infor__summary').css('display', 'flex');
			// onOff = 0;
			// console.log(onOff);
		}
		else{
			$(this).next().css(moveToBack);
			$(this).children('.infor__icon').show();
			$(this).children('.close__infor__icon').css('display', 'none');
			$(this).next().children('.video__infor__summary').css('display', 'none');
			// onOff = 1;
			// console.log(onOff);
		}
	});
});

// li들 이동 함수
$(document).ready(function (){
	$('.left__arrow').parent().on('click', function (){

		// var a = $('.right__arrow').parent().css('left');
		// alert(a);

		$(this).parent().prev().stop().animate({
			left: '-=25%'
		}, 400).append('<li><div class="video__item__layout"><div class="infor__icon__layout"><div class="infor__icon">i</div><div class="close__infor__icon"><div class="xbar1"></div><div class="xbar2"></div></div></div><div class="video__infor__layout"><div class="video__infor__summary"><div class="summary__content"><h3>영상 제목</h3><p>요약 내용<br>이제 비공개로 인터넷을 탐색할 수 있으며, 이 기기를 사용하는 다른 사용자가 내 활동을 볼 수 없습니다. 하지만 다운로드, 북마크, 읽기 목록 항목은 계속해서 저장됩니다. 자세히 알아보기</p><p>lsdfa;j</p></div></div></div><div class="video__thumb__layout"><img src="#" alt="no"></div></div></li>');
	});
	$('.right__arrow').parent().on('click', function (){
		if($(this).parent().prev().css('left') >= '0px'){
			$(this).parent().prev().css('left', '0px');
			// alert('not enough content');
		}else{
			$(this).parent().prev().stop().animate({
				left: '+=25%'
			}, 400);
			// if($('.li__clone').css('left') > $(){
			// 	$('.li__clone').remove();
			// }
		}
	});
});