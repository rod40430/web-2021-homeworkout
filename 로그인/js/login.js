function dis(){
    $('#login').show();
    $('#l_btn').hide();
  }
  function heal(){
    $('#l_btn').show();
    $('#login').hide();
  }
  function find_id1(){
    $('#find').show();
    $('#login').hide();
  }
  function find_id2(){
    $('#find').show();
    $('#login').hide();
  }
  function users_join(){
    $('#j_m').show();
    $('#login').hide();
  }
  function join_member(){
    $('#u_j').show();
    $('#j_m').hide();
  }
  
  function ag(agtext, kcn){
    if($('.'+ agtext + '_s_text').css('display') == 'none'){
      $('.'+ agtext + '_s_text').css('display','block');
      $('.'+ agtext + '_s_text').css('display','flex');
      $('.kc'+kcn).css('transform','rotate(90deg)');
    } 
    else{
      $('.'+ agtext + '_s_text').css('display','none');
      $('.kc'+kcn).css('transform','rotate(0deg)');
    }
  }

  function button(cc){
    $('#'+cc).css('background-color','#3c3a3a');
    $('#'+cc).css('color','white');
  }
  // function button(cc){
  //   if($('#'+cc).css('background-color') == '#464646'){
  //   $('#'+cc).css('background-color','#3c3a3a');
  //   $('#'+cc).css('color','white');
  //   }
  //   else{
  //     $('#'+cc).css('background-color','#464646');
  //     $('#'+cc).css('color','#a8a8a8');

  //   }
  // }
  window.onload = function(){ 
    var test1 = 0;
  var btn1 = document.getElementById('f_button1');
    btn1.addEventListener('click',function(){
      if(test1 == 0){
        btn1.style.color = 'white';
        btn1.style.backgroundColor = '#3c3a3a';
        btn2.style.color = '#a8a8a8';
        btn2.style.backgroundColor = '#464646';
        test1 = 1;
        test2 = 0;
      }
    });
    var test2 = 0;
  var btn2 = document.getElementById('f_button2');
    btn2.addEventListener('click',function(){
      if(test2 == 0){
        btn2.style.color = 'white';
        btn2.style.backgroundColor = '#3c3a3a';
        btn1.style.color = '#a8a8a8';
        btn1.style.backgroundColor = '#464646';
        test2 = 1;
        test1 = 0;
      }
    });
  };

  function checkSelectAll()  {
    // 전체 체크박스
    const checkboxes 
      = document.querySelectorAll('input[name="check"]');
    // 선택된 체크박스
    const checked 
      = document.querySelectorAll('input[name="check"]:checked');
    // select all 체크박스
    const selectAll 
      = document.querySelector('input[name="all_check"]');
    
    if(checkboxes.length === checked.length)  {
      selectAll.checked = true;
    }else {
      selectAll.checked = false;
    }
  
  }
  
  function selectAll(selectAll)  {
    const checkboxes 
       = document.getElementsByName('check');
    
    checkboxes.forEach((checkbox) => {
      checkbox.checked = selectAll.checked
    })
  }
  
function phone(){
  $("input#find_phone_mail").attr("placeholder","휴대폰번호(번호만 입력)를 입력해주세요");
}
function e_mail(){
  $("input#find_phone_mail").attr("placeholder","이메일를 입력해주세요");
}
