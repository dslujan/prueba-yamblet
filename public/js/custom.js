$(document).ready(function(){
	$(document).on('click', '.edit', function(){
		var id=$(this).val();
		var name=$('#name'+id).text();
		var model=$('#model'+id).text();
		var manu=$('#manu'+id).text();
	
        $('#edit').modal('show');
        $("#form").attr("action", "store/"+id);
		$('#name').val(name);
		$('#model').val(model);
		$('#manufacturer').val(manu);
	});
});