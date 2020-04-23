$(document).ready(function () {
    $('#accordion').on('shown.bs.collapse', function () {
        var active = $('#accordion .in').attr('id');
        Cookies.set('activeAccordionGroup', active, { expires: 7 });
        //alert(active);
    });
    $('#accordion').on('hidden.bs.collapse', function () {
        Cookies.remove('activeAccordionGroup');
    });
    var last = Cookies.get('activeAccordionGroup');
    if (last != null) {
        $('#accordion .collapse').removeClass('in');
        $('#' + last).addClass('in');
    }
});

//カテゴリフォーム作成
$(document).ready(function(){
    var next = 1;
    $(".add-more").click(function(e){
        e.preventDefault();
        var addto = "#field" + next;
        var addRemove = "#field" + (next);
        next = next + 1;
        var newIn = '<input autocomplete="off" class="input form-control" style="width:80%" id="field' + next + '" name="field' + next + '" type="text">' ;
        var newInput = $(newIn);
        var removeBtn1 = '<button class="btn btn-danger" type="button" id="srch' + (next - 1) + '" name="srch' + (next - 1) + '" ><span class=" glyphicon glyphicon-search"></span></button>';
        var removeBtn = removeBtn1 + ' <button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" >-</button></div><div id="field">';
        var removeButton = $(removeBtn);
        $(addto).after(newInput);
        $(addRemove).after(removeButton);
        $("#field" + next).attr('data-source',$(addto).attr('data-source'));
        $("#srch" + next).attr('data-source',$(addto).attr('data-source'));
        $("#count").val(next);

            $('.remove-me').click(function(e){
                e.preventDefault();
                var fieldNum = this.id.charAt(this.id.length-1);
                var fieldID = "#field" + fieldNum;
                var fieldID1 = "#srch" + fieldNum;
                $(this).remove();
                $(fieldID).remove();
                $(fieldID1).remove();
            });
    });



});


//使用有無ボタン

$('#radioBtn a').on('click', function(){
    var sel = $(this).data('title');
    var tog = $(this).data('toggle');
    $('#'+tog).prop('value', sel);

    $('a[data-toggle="'+tog+'"]').not('[data-title="'+sel+'"]').removeClass('active').addClass('notActive');
    $('a[data-toggle="'+tog+'"][data-title="'+sel+'"]').removeClass('notActive').addClass('active');
})



//利用者誕生日
$('#date').datepicker({
	format: "yyyy/mm/dd",
	language: "ja",
	autoclose: true,
	orientation: "top auto"
});
//利用者利用開始日
$('#start').datepicker({
	format: "yyyy/mm/dd",
	language: "ja",
	autoclose: true,
	orientation: "top auto"
	});
//利用者利用終了日
$('#end').datepicker({
	format: "yyyy/mm/dd",
	language: "ja",
	autoclose: true,
	orientation: "top auto"
	});

function togglechg(e) {
	$(e.target)
	.prev('.panel-heading')
	.find("i.indicator")
	.toggleClass('glyphicon-plus glyphicon-minus');
}
$(document).on('hidden.bs.collapse', togglechg);
$(document).on('shown.bs.collapse', togglechg);

$(document).ready(function(e){
	$('.search-panel .dropdown-menu').find('a').click(function(e) {
		e.preventDefault();
		var param = $(this).attr("href").replace("#","");
		var concept = $(this).text();
		$('.search-panel span#search_concept').text(concept);
		$('.input-group #search_param').val(param);
	});
});

$('input[id=lefile]').change(function() {
	  $('#photoCover').val($(this).val().replace("C:\\fakepath\\", ""));
});

$('.selectpicker').selectpicker({
  style: 'btn-info',
  size: 12
});
