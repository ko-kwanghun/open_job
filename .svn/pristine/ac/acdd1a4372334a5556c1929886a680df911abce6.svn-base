


//トップへ戻る

    $('.scroll-top').click(function(){
    	  $('body,html').animate({scrollTop:0},1000);
   	})



    /*BXSlider*/
    $('.bxslider').bxSlider({
    	  auto: true,
    	  autoControls: false,
    	  mode: 'horizontal',
  		  speed: 1000,
    	  minSlides: 3,
    	  maxSlides: 4,
    	  slideWidth: 170,
    	  slideMargin: 5,
    	});


	$(function(){
		 $('button').click(function() {
		 location.href = $(this).find('a').attr('href');
		 });
	 });

	//アコーディオンcookie
	for (var i=0; i < $(".accordion p").length; i++) {
	    if( $.cookie("accord" + i) == "open" ) {
	       $(".accordion > li").eq(i).children("ul").show();
	    }
	}
	$(".accordion p").click(function(){
	    $(this).next("ul").slideToggle();
	    $(this).children("span").toggleClass("open");
	    $(this).children("span.glyphicon").toggleClass('glyphicon-plus glyphicon-minus');
	    n = $(".accordion p").index(this);

	    if ($.cookie("accord" + n) == "open") {
	    	$.cookie("accord"+n,"close", {path:"/"});
	    } else {
	    	$.cookie("accord"+n,"open", {path:"/"});
	    }
	});


	//アコーディオンcookie END


	//カテゴリハイライト
	$(function(){
	   $('ul.accordion li ul li a').each(function(){
	      // リンク先のURLを取得
	      var url = $(this).attr('href');
	      // 現在表示されているページのURLを取得し、リンク先のURLと照合
	      if(location.href.match(url)) {
	         // マッチすれば、「class="current"」を付加
	         $(this).addClass('current');
	         // マッチしなければ、「class="current"」を削除
	      } else {
	         $(this).removeClass('current');
	      }
	   });
	});

	//メインメニューモバイル対応

	$(function(){
	  $("#toggle").click(function(){
	    $("#menu").slideToggle();
	    return false;
	  });
	  $(window).resize(function(){
	    var win = $(window).width();
	    var p = 480;
	    if(win > p){
	      $("#menu").show();
	    } else {
	      $("#menu").hide();
	    }
	  });
	});

	$(function(){
    $('ul#menu li a').each(function(){
        var $href = $(this).attr('href');
        if(location.href.match($href)) {
        $(this).addClass('active');
        } else {
        $(this).removeClass('active');
        }
    });
	});



	$(function(){
	    // スクロールバーの横幅を取得
	    $('html').append('<div class="scrollbar" style="overflow:scroll;"></div>');
	    var scrollsize = window.innerWidth - $('.scrollbar').prop('clientWidth');
	    $('.scrollbar').hide();

	    // 「.modal-open」をクリック
	    $('.modal-open').click(function(){
	        // html、bodyを固定（overflow:hiddenにする）
	        $('html, body').addClass('lock');

	        // オーバーレイ用の要素を追加
	        $('body').append('<div class="modal-overlay"></div>');

	        // オーバーレイをフェードイン
	        $('.modal-overlay').fadeIn('slow');

	        // モーダルコンテンツのIDを取得
	        var modal = '#' + $(this).attr('data-target');

	         // モーダルコンテンツを囲む要素を追加
	        $(modal).wrap("<div class='modal-wrap'></div>");

	        // モーダルコンテンツを囲む要素を表示
	        $('.modal-wrap').show();

	        // モーダルコンテンツの表示位置を設定
	        modalResize();

	         // モーダルコンテンツフェードイン
	        $(modal).fadeIn('slow');

	        // モーダルコンテンツをクリックした時はフェードアウトしない
	        $(modal).click(function(e){
	            e.stopPropagation();
	        });

	        // 「.modal-overlay」あるいは「.modal-close」をクリック
	        $('.modal-wrap, .modal-close').off().click(function(){
	            // モーダルコンテンツとオーバーレイをフェードアウト
	            $(modal).fadeOut('slow');
	            $('.modal-overlay').fadeOut('slow',function(){
	                // html、bodyの固定解除
	                $('html, body').removeClass('lock');
	                // オーバーレイを削除
	                $('.modal-overlay').remove();
	                // モーダルコンテンツを囲む要素を削除
	                $(modal).unwrap("<div class='modal-wrap'></div>");
	           });
	        });

	        // リサイズしたら表示位置を再取得
	        $(window).on('resize', function(){
	            modalResize();
	        });


//	        $(function(){
//	        	$('#menu li a').each(function(){
//	        		var $href = $(this).attr('href');
//	        		if(location.href.match($href)) {
//	        		$(this).addClass('active');
//	        		} else {
//	        		$(this).removeClass('active');
//	        		}
//	        	});
//	        });


	        // モーダルコンテンツの表示位置を設定する関数
	        function modalResize(){
	            // ウィンドウの横幅、高さを取得
	            var w = $(window).width();
	            var h = $(window).height();

	            // モーダルコンテンツの横幅、高さを取得
	            var mw = $(modal).outerWidth(true);
	            var mh = $(modal).outerHeight(true);

	            // モーダルコンテンツの表示位置を設定
	            if ((mh > h) && (mw > w)) {
	                $(modal).css({'left': 0 + 'px','top': 0 + 'px'});
	            } else if ((mh > h) && (mw < w)) {
	                var x = (w - scrollsize - mw) / 2;
	                $(modal).css({'left': x + 'px','top': 0 + 'px'});
	            } else if ((mh < h) && (mw > w)) {
	                var y = (h - scrollsize - mh) / 2;
	                $(modal).css({'left': 0 + 'px','top': y + 'px'});
	            } else {
	                var x = (w - mw) / 2;
	                var y = (h - mh) / 2;
	                $(modal).css({'left': x + 'px','top': y + 'px'});
	            }
	        }

	    });
	});