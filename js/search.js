
$(document).ready(function() {

    $('#btnFind').click(function() {
        findLerningObject();
    });
    
    $('#close').click(function () {
        $('#popup').fadeOut('slow');
        $('.popup-overlay').fadeOut('slow');
        $('#search').val("");
        return false;
    });

});

function openDialog() {
    $("#dialog").dialog({
        modal: true,
        width: 1000,
        height: 800,
        resizable: false
    });
}
;

function findLerningObject() {
    var hostname = "";
    var url = "";
    var keyword = "";

    keyword = $('#search').val();

    if (keyword == "") {
        alert("Favor ingrese una palabra para la busqueda");
        return false;
    }

    hostname = window.location.hostname;
    url = 'class/SearchController.php';

    $.ajax({
        type: 'post',
        url: url,
        dataType: 'json',
        async: false,
        data: {'keyword': keyword},
        error: function(jqXHR, textStatus, errorThrown) {
            alert('Error (Petición) { ' + jqXHR + ' - ' + textStatus + ' - ' + errorThrown + ' }');
        },
        success: function(data) {

            if (data.length != 0) {

                $('#popup').fadeIn('slow');
                $('.popup-overlay').fadeIn('slow');
                $('.popup-overlay').height($(window).height());

                var content = "";
                content = "<table>";
                $.each(data, function(i, lo) {
                    content += '<tr>';
                    content += '<td>' + getNameLevel($.trim(lo.level)) + '</td>';
                    content += '<td>' + getNameGrade($.trim(lo.grade)) + '</td>';
                    content += '<td>' + getNameMatter($.trim(lo.matter)) + '</td>';
                    content += '<td><a target="_blank" href="http://contenidosparaaprender.mineducacion.gov.co/' + $.trim(lo.grade) + '/' + $.trim(lo.matter) + '/menu_' + $.trim(lo.code_lo) + '">' + $.trim(lo.name_lo) + '</a></td>';
                    content += '</tr>';
                });

                $('#lo').html(content);

            } else {
                alert('Señor usuario (a), No se encontraron resultados en la búsqueda.');
            }
        }

    });
}

function getNameLevel(level) {
    var nameLevel = '';

    switch (level) {
        case '1':{
            nameLevel = 'BÁSICA PRIMARIA';
        }break;
        case '2':{
            nameLevel = 'BÁSICA SECUNDARIA';
        }break;
        case '3':{
            nameLevel = 'MEDIA';
        }break;
    }
    return nameLevel;
}

function getNameGrade(grade) {
    var nameGrade = '';

    switch (grade) {
        case 'G_1':{
            nameGrade = '1°';
        }break;
        case 'G_2':{
            nameGrade = '2°';
        }break;
        case 'G_3':{
            nameGrade = '3°';
        }break;
        case 'G_4':{
            nameGrade = '4°';
        }break;
        case 'G_5':{
            nameGrade = '5°';
        }break;
        case 'G_6':{
            nameGrade = '6°';
        }break;
        case 'G_7':{
            nameGrade = '7°';
        }break;
        case 'G_8':{
            nameGrade = '8°';
        }break;
        case 'G_9':{
            nameGrade = '9°';
        }break;
        case 'G_10':{
            nameGrade = '10°';
        }break;
        case 'G_11':{
            nameGrade = '11°';
        }break;
    }

    return nameGrade;
}

function getNameMatter(matter) {
    var nameMatter = '';

    switch (matter) {
        case 'L':
            {
                nameMatter = 'LENGUAJE';
            }
            break;
        case 'M':
            {
                nameMatter = 'MATEMÁTICAS';
            }
            break;
        case 'S':
            {
                nameMatter = 'CIENCIAS';
            }
            break;
    }

    return nameMatter;
}








