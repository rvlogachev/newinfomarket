$(function() {
    "use strict";

    //Make the dashboard widgets sortable Using jquery UI
    $(".connectedSortable").sortable({
        placeholder: "sort-highlight",
        connectWith: ".connectedSortable",
        handle: ".box-header, .nav-tabs",
        forcePlaceholderSize: true,
        zIndex: 999999
    }).disableSelection();
    $(".connectedSortable .box-header, .connectedSortable .nav-tabs-custom").css("cursor", "move");
})

function ScrollMsg(){
    var objDiv = $('.direct-chat-messages');

    if (objDiv.length > 0){
        objDiv[0].scrollTop = objDiv[0].scrollHeight;
    }
}

$(document).ready(function () {

    wsStart();


    client = $('#clientId').val();
    dialog = $('div.tab-pane.active').data('dialogid');

    wsStart(client,dialog);

    ScrollMsg();

    $("#messageBackend").keyup(function(event){

        if(event.keyCode == 13){
            //call send data function here

            $("#btnSendBackend").click();

        } });

    $('#btnSendBackend').on("click",function() {

        client_id = $('#btnSendBackend').data('clientid');
        mess = $("#messageBackend").val();
        cookie = $('#clientCookie').val();
        dialog = $('div.tab-pane.active').data('dialogid');

        // console.log(cookie);

        $("#messageBackend").val('');

        ScrollMsg();

        $.ajax({
            type: "get",
            url: "/backend/web/chat/messages/sendmessagefrombackend",

            data: {
                mess: mess,
                client_id: client_id,
                cookie: cookie,
                dialog: dialog

            },
            error: function (data) {
                console.log(data);
            },
            success: function (data) {
                data = JSON.parse(data);

                if (data.result) {


                    //setTimeout(function () {
                    console.log('  в сокет отправлено');
                    //
                    //   $.pjax.reload({container: '#pjaxdialog'});
                    //   console.log('прокрутка');
                    //
                    // }, 2000);


                }
            }
        });



    });

    $('nav-link').on("click",function() {
        client = 'client'+ $('#clientId').val();
        dialog = $('div.tab-pane.active').data('dialogid');
        wsStart(client,dialog);
    });


});

function wsStart(client=false,dialog=false) {

    if (client && dialog) {
        ws = new WebSocket('wss://infomarketstudio.ru:8080'+'?user=backend_'+client+'dialog_'+dialog);

    } else {
        ws = new WebSocket('wss://infomarketstudio.ru:8080'+'?user=backend');

    }

    ws.onopen = function() {
        console.log('инициализирован клиент backend_'+client+'dialog_'+dialog);

        setTimeout(function () {
            console.log('  Система: соединение открыто ');
        }, 1);
    };
    ws.onclose = function() {

        setTimeout(function () {
            console.log('  Система: соединение закрыто, пытаюсь переподключиться ');
        }, 1);
        setTimeout(wsStart, 1);
    };
    ws.onmessage = function(evt) {


        //console.log('полуено сообщение бэкенд');

        data = JSON.parse(evt.data);
        console.log(data);

        switch (data.type) {
            case 'flash':
                SendFlash(data.message);
                break;
            case 'in':
                SendMessageIn(data.message);
                ScrollMsg();
                break;
            default:
                SendMessageOut(data.message);
                ScrollMsg();
                break;

        }


        console.log('Система: '+evt.data);

    };
}
function SendMessageIn (mess) {
    bundle = $('#bundle').val();
    $('.direct-chat-messages').append('<div class="direct-chat-msg right">' +
        '<div class="direct-chat-info clearfix">' +
        '<span class="direct-chat-name pull-right">user</span><span class="direct-chat-timestamp pull-left">дата</span>' +
        '</div> ' +
        '<img class="direct-chat-img" src="'+bundle+'/img/user3-128x128.jpg" alt="message user image">' +
        ' <div class="direct-chat-text">' + mess +
        '</div>' +
        '</div>');
    $('.direct-chat-messages').scrollTop($(document).height());
    ScrollMsg();
}
function SendMessageOut (mess)   {

    bundle = $('#bundle').val();
    $('.direct-chat-messages').append('<div class="direct-chat-msg">' +
        '<div class="direct-chat-info clearfix">' +
        ' <span class="direct-chat-name pull-left">Чат-бот (Гугл)</span>' +
        '<span class="direct-chat-timestamp pull-right">дата</span>' +
        '</div>' +
        '<img class="direct-chat-img" src="'+bundle+'/img/user1-128x128.jpg" alt="message user image">' +
        '<div class="direct-chat-text">' + mess +
        '</div>' +
        '</div>');
    $('.direct-chat-messages').scrollTop($(document).height());
    ScrollMsg();
}
function SendFlash(mess) {
    $.notify("Новое сообщение в диалоге "+ mess );
}