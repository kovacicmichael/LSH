jQuery(document).ready(function($) {


	var donateTextBlock = $('#tenDollarsInfo')[0];
	var sponsorTextBlock = $('#oneThousandInfo')[0];

	if(donateTextBlock){
		donateTextBlock.style.display = 'block';
	}else if(sponsorTextBlock){
		sponsorTextBlock.style.display = 'block';
	}
	

	$('.donateImages').on('click', function(event){
		var imageId = event.target.id;
		var allTextBlocks = $('.donateAmountInfo');

		for (var i = 0; i < allTextBlocks.length; i++) {
			allTextBlocks[i].style.display = 'none';
		}

		if(imageId == 'tenDollarsImg'){
			var textBlock = $('#tenDollarsInfo')[0];
			textBlock.style.display = 'block';
		}else if(imageId == 'twentyFiveDollarsImg'){
			var textBlock = $('#twentyFiveDollarsInfo')[0];
			textBlock.style.display = 'block';
		}else if(imageId == 'fiftyDollarsImg'){
			var textBlock = $('#fiftyDollarsInfo')[0];
			textBlock.style.display = 'block';
		}else if(imageId == 'seventyFiveDollarsImg'){
			var textBlock = $('#seventyFiveDollarsInfo')[0];
			textBlock.style.display = 'block';
		}else if(imageId == 'oneHundredDollarsImg'){
			var textBlock = $('#oneHundredDollarsInfo')[0];
			textBlock.style.display = 'block';
		}else if(imageId == 'oneHundredFiftyDollarsImg'){
			var textBlock = $('#oneHundredFiftyDollarsInfo')[0];
			textBlock.style.display = 'block';
		}else if(imageId == 'oneThousandImg'){
			var textBlock = $('#oneThousandInfo')[0];
			textBlock.style.display = 'block';
		}else if(imageId == 'oneThousandFiveImg'){
			var textBlock = $('#oneThousandFiveInfo')[0];
			textBlock.style.display = 'block';
		}else if(imageId == 'threeThousandImg'){
			var textBlock = $('#threeThousandInfo')[0];
			textBlock.style.display = 'block';
		}else if(imageId == 'fiveThousandImg'){
			var textBlock = $('#fiveThousandInfo')[0];
			textBlock.style.display = 'block';
		}else if(imageId == 'sevenThousandFiveImg'){
			var textBlock = $('#sevenThousandFiveInfo')[0];
			textBlock.style.display = 'block';
		}else if(imageId == 'tenThousandImg'){
			var textBlock = $('#tenThousandInfo')[0];
			textBlock.style.display = 'block';
		}

	});








});