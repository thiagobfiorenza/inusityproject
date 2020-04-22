$(document).ready(function(){
	var votes = {};
	var totalVotes = 12;
	var countVotes = 0;
	$('.sim').on('click', function(){
		if (Object.keys(votes).length < totalVotes) {
			votes[$(this).data('id')] = 1;
			countVotes = Object.keys(votes).length;
			$(this).parent().parent().addClass('selected');
			$('.count-votes').html(totalVotes - countVotes);
			$(this).addClass('selected').parent().find('a.nao').removeClass('selected');
		}
		if (countVotes == totalVotes) {
			$('#objVotes').val(JSON.stringify(votes));
			$('.contador').hide();
			$('.btn-vote').show();
		}
	});
	$('.nao').on('click', function(){
		delete votes[$(this).data('id')];
		countVotes = Object.keys(votes).length;
		$(this).parent().parent().removeClass('selected');
		$('.count-votes').html(totalVotes - countVotes);
		$(this).addClass('selected').parent().find('a.sim').removeClass('selected');
		if (countVotes != totalVotes) {
			$('.btn-vote').hide();
			$('.contador').show();
		}
	});
});
