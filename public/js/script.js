"use strict";

function showModal() {
    document.getElementById('modal-login').classList.add('show');
    document.getElementById('registration').classList.remove('show');
    document.getElementById('login').classList.add('show');
    const scrollY = document.documentElement.style.getPropertyValue('--scroll-y');
    const body = document.body;
    body.classList.add('fix');
    body.style.top = `-${scrollY}`;
    console.log(3333);
}

function showModalReg() {
    document.getElementById('login').classList.remove('show');
    document.getElementById('registration').classList.add('show');
}

function closeModal() {
    const body = document.body;
    const scrollY = body.style.top;
    body.classList.remove('fix');
    window.scrollTo(0, parseInt(scrollY || '0') * -1);
    document.getElementById('modal-login').classList.remove('show');
    document.getElementById('login').classList.remove('show');
    document.getElementById('registration').classList.remove('show');
}


(function positionFooter() {
    let heightBody = document.getElementById("document-body");
    let heightFooter = document.getElementById("footer");
    let heightWindow = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;

    if (heightBody.offsetHeight < heightWindow) {
        heightFooter.style.position = "absolute";
        heightFooter.style.bottom = 0;
    }
}());


let i = 2;
var wrapper = document.getElementById("box-answers");
function addAnswer() {
    if (i == 2) {
        wrapper.insertAdjacentHTML("beforeend", `<div>
            <div class="box-answers-option">
              <span>Вариант 3</span>
              <input type="text" value="" name="var3"/>
            </div>
            <div class="box-answers">
              <input type="radio" name="answer" value="3" id="r-answers-3"/>
              <label for="r-answers-3">
                <span></span>
              </label>
              <span>Правильный</span>
            </div>
          </div>`);
    }

    if (i == 3) {
        wrapper.insertAdjacentHTML("beforeend", `<div>
            <div class="box-answers-option">
              <span>Вариант 4</span>
              <input type="text" value="" name="var4"/>
            </div>
            <div class="box-answers">
              <input type="radio" name="answer" value="4" id="r-answers-4"/>
              <label for="r-answers-4">
                <span></span>
              </label>
              <span>Правильный</span>
            </div>
          </div>`);
    }

    i++;
    if (i == 6) {
        alert('Можно добавлять не более 4 поля')
    }
}

let neutral = false;


function openMenu() {
    if (neutral == false) {
        document.getElementById("header").classList.add('open');
        neutral = true;
    } else {
        document.getElementById("header").classList.remove('open');
        neutral = false;
    }
}

let fOpenFilter = false;
function openFilter() {
    if (fOpenFilter == false) {
        document.getElementById("filter").classList.add('open');
        fOpenFilter = true;
    } else {
        document.getElementById("filter").classList.remove('open');
        fOpenFilter = false;
    }
}

function addComment() {
    document.getElementById("add-comment").style.display = "flex";
}



///////////////////////////////////////////

    var ans = document.querySelectorAll('.options');
    
    var otvet = document.querySelectorAll(".otvet");

    ans.forEach(function (element, i) {

        ans[i].addEventListener('click', function (e) {

            var inputs = e.target.closest('.options');
            var idQuestion = inputs.getElementsByClassName("questionId")[0].value;
            var answer = '';
           
           if(e.target.hasAttribute('value')) {
             answer = e.target.value;
           }

            else {
                return; // что бы не попадало пустое значение
            }
           
           //console.log(answer);
           
            $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'get',
                url: '/check-answer/' + idQuestion,
                dataType: 'json',
                data: {answer: answer},
                success: function (result) {

                    if (result == 1) {
                        if(otvet[i].classList.contains('false')) {
                            otvet[i].classList.remove('false');
                        }
                        otvet[i].classList.add('true');
                        
                    } else if (result == 2) {
                        if(otvet[i].classList.contains('true')) {
                            otvet[i].classList.remove('true');
                            }
                             otvet[i].classList.add('false');
                    }
                    console.log(result);

                },

                error: function () {
                    otvet[i].innerHTML = 'Ошибка сайта';

                }

            });
            

        })

    })
    
    
    
    ////////////////////////////////////////////////////////
    
      var addBookmark = document.querySelectorAll('.bookmark');
    
   console.log(addBookmark);
    
    addBookmark.forEach(function (element2, j) {
        addBookmark[j].addEventListener('click', function (e) {
            e.preventDefault();
            var idQuestion = e.target.getAttribute('data-bookmark');
        console.log(idQuestion);
        
                 $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'post',
                url: '/bookmark-add',
                dataType: 'json',
                data: {idQuestion: idQuestion},
                success: function (result) {
                       
                       if(result == 1) {
                           addBookmark[j].innerHTML = 'Удалить из закладок';
                           
                       }
                       
                        else if(result == 2) {
                           addBookmark[j].innerHTML = 'Добавить в закладки';
                       }
                       
                       else if(result == 3) {
                           addBookmark[j].innerHTML = 'Авторизируйтесь';
                       }
                       
                      
                     
                    console.log(result);

                },

                error: function () {
                  addBookmark[j].innerHTML = 'Ошибка';

                }

            });
            
            
        })
       

    })
    
    ///////////////////////////////////////////////////////////
    
       $(document).ready(function () {
                    $('#get_raion').on('change', function () {

                        //удалит предыдущие выбранные районы
                        $('#get_goroda').children().remove();
                        $('#get_mesto').children().remove();

                        $.ajax({
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            type: 'get',
                            url: '/get-raion/' + $(this).val(),
                            dataType: 'json',
                            data: $(this).val(),
                            success: function (result) {
                                //console.log(result);

                            $('#get_goroda').append('<option disabled selected value>Не выбрано</option>');
                                $.each(result, function (key, value) {
                                    $('#get_goroda')
                                            .append($("<option></option>")
                                                    .attr("value", value.id)
                                                    .text(value.raion_name));

                                    //console.log(value.raion_name);
                                });

                            },
                            error: function () {
                                var optionError = 'Неизвестная ошибка, обратитесь в техподдержку';
                                $('#get_goroda')
                                  .append($("<option></option>")
                                                    .text(optionError));
                               
                            }
                        });

                    });
                });
                
                
                
                    $(document).ready(function () {
                    $('#get_goroda').on('change', function () {
                        
                        console.log($(this).val());

                        //удалит предыдущие выбранные районы
                        
                        
                        $('#get_mesto').children().remove();

                        $.ajax({
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            type: 'get',
                            url: '/get-goroda/' + $(this).val(),
                            dataType: 'json',
                            data: $(this).val(),
                            success: function (result) {
                                //console.log(result);

                            $('#get_mesto').append('<option disabled selected value>Не выбрано</option>');
                            
                                $.each(result, function (key, value) {
                                    $('#get_mesto')
                                            .append($("<option></option>")
                                                    .attr("value", value.id)
                                                    .text(value.gorod_name));

                                    //console.log(value.raion_name);
                                });

                            },
                            error: function () {
                                var optionError = 'Неизвестная ошибка, обратитесь в техподдержку';
                                $('#get_mesto')
                                  .append($("<option></option>")
                                                    .text(optionError));
                               
                            }
                        });
                        

                    });
                });
    
    
    
    var notification = document.querySelector('.button-inform');
    
    if(notification) {
         console.log();
    notification.addEventListener('click', function(e) {
        document.location.replace('/my-notifications');
    });
    }
   
    
    
    /////////////////////////////////////
     $(document).ready(function () {
                    $('#get_item_pdd').on('change', function () {
                        
                        //удалит предыдущие 
                        $('#get_sub_item_pdd').children().remove();
                       

                        $.ajax({
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            type: 'get',
                            url: '/get-item-pdd/' + $(this).val(),
                            dataType: 'json',
                            data: $(this).val(),
                            success: function (result) {
                                console.log(result);
                             
                            $('#get_sub_item_pdd').append('<option disabled selected value>Не выбрано</option>');
                                $.each(result, function (key, value) {
                                    $('#get_sub_item_pdd')
                                            .append($("<option></option>")
                                                    .attr("value", value.id)
                                                    .text(value.title));

                                    //console.log(value.raion_name);
                                });
                                

                            },
                            
                            error: function () {
                                var optionError = 'Неизвестная ошибка, обратитесь в техподдержку';
                                $('#get_sub_item_pdd')
                                  .append($("<option></option>")
                                                    .text(optionError));
                               
                            }
                            
                        });

                    });
                });
                
                
                
                
                    $(document).ready(function () {
                    $('#get_sing_pdd').on('change', function () {
                        
                        //удалит предыдущие 
                        $('#sing_pdd').children().remove();
                       

                        $.ajax({
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            type: 'get',
                            url: '/get-sing-pdd/' + $(this).val(),
                            dataType: 'json',
                            data: $(this).val(),
                            success: function (result) {
                                console.log(result);
                             
                            $('#sing_pdd').append('<option disabled selected value>Не выбрано</option>');
                                $.each(result, function (key, value) {
                                    $('#sing_pdd')
                                            .append($("<option></option>")
                                                    .attr("value", value.id)
                                                    .text(value.numeral + ' ' + value.title));

                                    //console.log(value.raion_name);
                                });
                                

                            },
                            
                            error: function () {
                                var optionError = 'Неизвестная ошибка, обратитесь в техподдержку';
                                $('#sing_pdd')
                                  .append($("<option></option>")
                                                    .text(optionError));
                               
                            }
                            
                        });

                    });
                });
                
                
                
                
                
                     $(document).ready(function () {
                    $('#get_marking_pdd').on('change', function () {
                        
                        //удалит предыдущие 
                        $('#marking_pdd').children().remove();
                       

                        $.ajax({
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            type: 'get',
                            url: '/get-marking-pdd/' + $(this).val(),
                            dataType: 'json',
                            data: $(this).val(),
                            success: function (result) {
                                console.log(result);
                             
                            $('#marking_pdd').append('<option disabled selected value>Не выбрано</option>');
                                $.each(result, function (key, value) {
                                    $('#marking_pdd')
                                            .append($("<option></option>")
                                                    .attr("value", value.id)
                                                    .text(value.numeral + ' ' + value.title));

                                    //console.log(value.raion_name);
                                });
                                

                            },
                            
                            error: function () {
                                var optionError = 'Неизвестная ошибка, обратитесь в техподдержку';
                                $('#marking_pdd')
                                  .append($("<option></option>")
                                                    .text(optionError));
                               
                            }
                            
                        });

                    });
                });
                
                
                
                
                
                
                    $(document).ready(function () {
                    $('#get_permission_pdd').on('change', function () {
                        
                        //удалит предыдущие 
                        $('#permission_pdd').children().remove();
                       

                        $.ajax({
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                            type: 'get',
                            url: '/get-permission-pdd/' + $(this).val(),
                            dataType: 'json',
                            data: $(this).val(),
                            success: function (result) {
                                console.log(result);
                             
                            $('#permission_pdd').append('<option disabled selected value>Не выбрано</option>');
                                $.each(result, function (key, value) {
                                    $('#permission_pdd')
                                            .append($("<option></option>")
                                                    .attr("value", value.id)
                                                    .text(value.numeral));

                                    //console.log(value.raion_name);
                                });
                                

                            },
                            
                            error: function () {
                                var optionError = 'Неизвестная ошибка, обратитесь в техподдержку';
                                $('#permission_pdd')
                                  .append($("<option></option>")
                                                    .text(optionError));
                               
                            }
                            
                        });

                    });
                });
                





            
    
     
    
    