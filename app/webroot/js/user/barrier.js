function invert() { 
    var css = 'html {-webkit-filter: invert(100%);' +
        '-moz-filter: invert(100%);' + 
        '-o-filter: invert(100%);' + 
        '-ms-filter: invert(100%);background-color:#000; }',
    head = document.getElementsByTagName('head')[0],
    style = document.createElement('style');

	if (!window.counter) { window.counter = 1;} else  { window.counter ++;
	if (window.counter % 2 == 0) { var css ='html {-webkit-filter: invert(0%); -moz-filter: invert(0%); -o-filter: invert(0%); -ms-filter: invert(0%);background-color:#fff; }'}
	 };

	style.type = 'text/css';
	if (style.styleSheet){
	  style.styleSheet.cssText = css;
	} else {
	  style.appendChild(document.createTextNode(css));
	}

	head.appendChild(style);
};


 function black() 
{var lnks=(document.all)?document.all.tags('*'):document.getElementsByTagName('*');for(nIx5Bs=0;nIx5Bs<lnks.length;nIx5Bs++){with(lnks[nIx5Bs].style){if(backgroundColor=='black'){void(backgroundColor='');void(color='')}else{void(backgroundColor='black');void(color='white')}}}};

function blue() 
{var lnks=(document.all)?document.all.tags('*'):document.getElementsByTagName('*');for(nIx5Bs=0;nIx5Bs<lnks.length;nIx5Bs++){with(lnks[nIx5Bs].style){if(backgroundColor=='blue'){void(backgroundColor='');void(color='')}else{void(backgroundColor='blue');void(color='yellow')}}}};

function white() 
{var lnks=(document.all)?document.all.tags('*'):document.getElementsByTagName('*');for(nIx5Bs=0;nIx5Bs<lnks.length;nIx5Bs++){with(lnks[nIx5Bs].style){if(backgroundColor=='white'){void(backgroundColor='');void(color='')}else{void(backgroundColor='white');void(color='black')}}}};
