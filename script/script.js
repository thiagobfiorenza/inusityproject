$(document).ready(function(){
	var votes = {};

	var countVotes = 0;
	var totalVotes = 99999;
	if ($('.contador.number-countdown').length) {
		var countdown = true;
		totalVotes = $('.contador .count-votes').html();
	}

	$('.sim').on('click', function(){
		if (Object.keys(votes).length < totalVotes) {
			votes[$(this).data('id')] = 1;
			countVotes = Object.keys(votes).length;
			$(this).parent().parent().addClass('selected');
			if (countdown) {
				$('.count-votes').html(totalVotes - countVotes);
			} else {
				$('.count-votes').html(countVotes);
				if (countVotes === 1) {
					$('.info-s').html('');
				} else {
					$('.info-s').html('s');
				}
			}
			$(this).addClass('selected').parent().find('a.nao').removeClass('selected');
		}
		if (countdown) {
			if (countVotes === totalVotes) {
				$('#objVotes').val(JSON.stringify(votes));
				$('.contador').hide();
				$('.btn-vote').show();
			}
		} else {
			if (countVotes > 0) {
				$('#objVotes').val(JSON.stringify(votes));
				$('.contador.info').hide();
				$('.btn-vote').show();
			}
		}

	});
	$('.nao').on('click', function(){
		delete votes[$(this).data('id')];
		countVotes = Object.keys(votes).length;
		$(this).parent().parent().removeClass('selected');
		if (countdown) {
			$('.count-votes').html(totalVotes - countVotes);
		} else {
			$('.count-votes').html(countVotes);
			if (countVotes === 1) {
				$('.info-s').html('');
			} else {
				$('.info-s').html('s');
			}
		}
		$(this).addClass('selected').parent().find('a.sim').removeClass('selected');
		if (countdown) {
			if (countVotes !== totalVotes) {
				$('.btn-vote').hide();
				$('.contador').show();
			}
		} else {
			if (countVotes === 0) {
				$('.contador.info').show();
				$('.btn-vote').hide();
			}
		}
	});
});
