var customConfirm = function(param){
	var n = new Noty({
	  text: '<h3>' + param.text + '</h3>',
	  layout: 'center',
	  theme: 'metroui',
	  buttons: [
	    Noty.button('Sim', 'btn btn-success btn-block', function(){
	    	n.close();
	    	param.functionYes();
	    }, {id: 'button1', 'data-status': 'ok'}),
	    Noty.button('Não', 'btn btn-error btn-block', function () {
	        n.close();
	    })
	  ]
	}).show();
}

var errorAlert = function(param){
	var n = new Noty({
	    text: param.text,
	    type: 'warning',
	    layout:'center',
	    buttons: [
	    	Noty.button('Ok', 'btn btn-default', function(){ n.close(); })
	    ]
	}).show();
}

var successAlert = function(param){
	var n = new Noty({
	    text: '<h4>' + param.text + '</h4>',
	    theme: 'metroui',
	    type: 'success',
	    layout:'center',
	    timeout: 1500,
	    modal: true,
	    callbacks: {
	    	onClose: function(){
	    		location.reload();
	    	}
	    }
	}).show();
}